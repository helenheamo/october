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

/* C:\wamp64\www\twitterPlugIn/themes/vreedom18-bingo/partials/index/slider.htm */
class __TwigTemplate_758bed87218eab8c5bd1cc512ef8f31465c73b9d0639f36abb2a658b3ecdb497 extends \Twig\Template
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
        $filters = array("theme" => 2);
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
        echo "<div class=\"hero-slider\">
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: ";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/slider-bg-1.jpg");
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">
                        Crafting Digital <br>
                        Experience
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, <br>
                        veritatis tempore nostrum id officia quaerat eum corrupti, <br>
                        ipsa aliquam velit.
                    </p>
                    <a data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".8\" class=\"btn btn-main\"
                        href=\"service.html\">Explore Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: ";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/slider-bg-2.jpg");
        echo "\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">
                        We Combine Design <br>
                        and Creativity
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">
                        Create just what you need for your Perfect Website. Choose from a wide range <br>
                        of Elements & simply put them on our Canvas.
                    </p>
                    <a data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".8\" class=\"btn btn-main\"
                        href=\"service.html\">Explore Us</a>
                </div>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 21,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"hero-slider\">
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: {{ 'assets/images/slider/slider-bg-1.jpg'|theme }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".1\">
                        Crafting Digital <br>
                        Experience
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".5\">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, <br>
                        veritatis tempore nostrum id officia quaerat eum corrupti, <br>
                        ipsa aliquam velit.
                    </p>
                    <a data-duration-in=\".3\" data-animation-in=\"fadeInUp\" data-delay-in=\".8\" class=\"btn btn-main\"
                        href=\"service.html\">Explore Us</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"slider-item th-fullpage hero-area\" style=\"background-image: {{ 'assets/images/slider/slider-bg-2.jpg'|theme }}\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <h1 data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".1\">
                        We Combine Design <br>
                        and Creativity
                    </h1>
                    <p data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".5\">
                        Create just what you need for your Perfect Website. Choose from a wide range <br>
                        of Elements & simply put them on our Canvas.
                    </p>
                    <a data-duration-in=\".3\" data-animation-in=\"fadeInDown\" data-delay-in=\".8\" class=\"btn btn-main\"
                        href=\"service.html\">Explore Us</a>
                </div>
            </div>
        </div>
    </div>
</div>", "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/slider.htm", "");
    }
}
