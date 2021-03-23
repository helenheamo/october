<?php namespace RainLab\Pages\Components;

use Cms\Classes\ComponentBase;
use RainLab\Pages\Classes\Router;
use Cms\Classes\Theme;
use Request;
use RainLab\Pages\Classes\Menu as PagesMenu;

/**
 * The menu component.
 *
 * @package rainlab\pages
 * @author Alexey Bobkov, Samuel Georges
 */
class StaticMenu extends ComponentBase
{
    /**
     * @var string The menu name.
     */
    public $menuName;
    
    /**
     * @var array A list of items generated by the menu.
     * Each item is an object of the RainLab\Pages\Classes\MenuItemReference class.
     */
    protected $menuItems;

    public function componentDetails()
    {
        return [
            'name'        => 'rainlab.pages::lang.component.static_menu_name',
            'description' => 'rainlab.pages::lang.component.static_menu_description'
        ];
    }

    public function defineProperties()
    {
        return [
            'code' => [
                'title'       => 'rainlab.pages::lang.component.static_menu_code_name',
                'description' => 'rainlab.pages::lang.component.static_menu_code_description',
                'type'        => 'dropdown'
            ]
        ];
    }

    public function getCodeOptions()
    {
        $result = [];

        $theme = Theme::getEditTheme();
        $menus = PagesMenu::listInTheme($theme, true);

        foreach ($menus as $menu) {
            $result[$menu->code] = $menu->name;
        }

        return $result;
    }

    public function onRun()
    {
        $this->page['menuItems'] = $this->menuItems();
    }

    public function menuItems()
    {
        if ($this->menuItems !== null) {
            return $this->menuItems;
        }

        if (!strlen($this->property('code'))) {
            return;
        }

        $theme = Theme::getActiveTheme();
        $menu = PagesMenu::loadCached($theme, $this->property('code'));

        if ($menu) {
            $this->menuItems = $menu->generateReferences($this->page);
            $this->menuName = $menu->name;
        }

        return $this->menuItems;
    }

    /**
     * Counts the total menu items, including children.
     */
    public function totalItems()
    {
        $countAll = function($items) use (&$countAll) {
            $count = count($items);

            foreach ($items as $item) {
                if (!isset($item->items)) {
                    continue;
                }

                $count += $countAll($item->items);
            }

            return $count;
        };

        return $countAll($this->menuItems());
    }

    /**
     * Resets the menu code and rebuilds the menu.
     * @param string $code
     * @return array
     */
    public function resetMenu($code)
    {
        $this->setProperty('code', $code);
        $this->menuItems = null;

        return $this->page['menuItems'] = $this->menuItems();
    }
}
