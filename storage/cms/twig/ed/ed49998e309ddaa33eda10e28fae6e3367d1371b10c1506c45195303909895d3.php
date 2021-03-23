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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/slides.htm */
class __TwigTemplate_992189c975b68733b975136478961080e18a0f1bbf29e55cc973dcd310f10d8f extends \Twig\Template
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
        echo "<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/bg1.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url(";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/bg2.jpg");
        echo ");\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"owl-carousel\">
            <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg1.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2><span>Multi</span> is the best Onepage html template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
             <div class=\"item\" style=\"background-image: url({{ 'assets/images/slider/bg2.jpg'|theme }});\">
                <div class=\"slider-inner\">
                    <div class=\"container\">
                        <div class=\"row\">
                            <div class=\"col-sm-6\">
                                <div class=\"carousel-content\">
                                    <h2>Beautifully designed <span>free</span> one page template</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et  dolore magna incididunt ut labore aliqua. </p>
                                    <a class=\"btn btn-primary btn-lg\" href=\"#\">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->
        </div><!--/.owl-carousel-->", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/slides.htm", "");
    }
}
