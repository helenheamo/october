<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/partials/sidebar_left.htm */
class __TwigTemplate_e8caf2dd1061a03c6d3238940e5709341a7106670c5e1f857600b55a0577c1db extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array();
        $filters = array("theme" => 66);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetcoursecategories\">
            <div class=\"tg-widgettitle\">
                <h3>Categories</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">
                            <span>All</span>
                            <span>(212345)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Science</span>
                            <span>(3248)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Management</span>
                            <span>(2148)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Medical</span>
                            <span>(2143)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Arts</span>
                            <span>(21561)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetlatestcourses\">
            <div class=\"tg-widgettitle\">
                <h3>Latest news</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/courses/img-01.jpg");
        echo "\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">International Conference on Material Science 2017</a></h3>
                        </div>
                    </div>
                </article>
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/courses/img-02.jpg");
        echo "\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">Biggest Reality Virtual University Convocatio Biggest Reality Virtual University</a></h3>
                        </div>
                    </div>
                </article>
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/courses/img-03.jpg");
        echo "\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">Launching Best Concept Motorbike for Abnormal Best Concept Motorbike</a></h3>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/sidebar_left.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 98,  148 => 82,  129 => 66,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-sm-4 col-md-4 col-lg-3 pull-left\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetcoursecategories\">
            <div class=\"tg-widgettitle\">
                <h3>Categories</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">
                            <span>All</span>
                            <span>(212345)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Science</span>
                            <span>(3248)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Management</span>
                            <span>(2148)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Medical</span>
                            <span>(2143)</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <span>Arts</span>
                            <span>(21561)</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetlatestcourses\">
            <div class=\"tg-widgettitle\">
                <h3>Latest news</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"{{'assets/images/courses/img-01.jpg'|theme}}\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">International Conference on Material Science 2017</a></h3>
                        </div>
                    </div>
                </article>
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"{{'assets/images/courses/img-02.jpg'|theme}}\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">Biggest Reality Virtual University Convocatio Biggest Reality Virtual University</a></h3>
                        </div>
                    </div>
                </article>
                <article class=\"tg-campus tg-campusleftthumb\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"{{'assets/images/courses/img-03.jpg'|theme}}\" alt=\"image description\">
                        </a>
                    </figure>
                    <div class=\"tg-campuscontent\">
                        <div class=\"tg-datetime\">
                            <i class=\"fa fa-calendar\"></i>
                            <span>Friday, Mar 06, 2017</span>
                        </div>
                        <div class=\"tg-campustitle\">
                            <h3><a href=\"\">Launching Best Concept Motorbike for Abnormal Best Concept Motorbike</a></h3>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </aside>
</div>", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/sidebar_left.htm", "");
    }
}
