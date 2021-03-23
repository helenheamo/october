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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/features.htm */
class __TwigTemplate_93b3186cf339b1981d576f254289f6acf1c3883f8ee5d99da808833f235b33aa extends \Twig\Template
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
        $tags = array("component" => 19);
        $filters = array("theme" => 8);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['component'],
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
        echo "<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Awesome Features</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    <img class=\"img-responsive\" src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/main-feature.png");
        echo "\" alt=\"\">
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UX design</h4>
                            <p>
                           I live in Norway
                            ";
        // line 19
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("tweetButton"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 20
        echo "                            </p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  85 => 19,  71 => 8,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Awesome Features</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    <img class=\"img-responsive\" src=\"{{ 'assets/images/main-feature.png'|theme }}\" alt=\"\">
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-line-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UX design</h4>
                            <p>
                           I live in Norway
                            {% component 'tweetButton' %}
                            </p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-cubes\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">UI design</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>

                    <div class=\"media service-box wow fadeInRight\">
                        <div class=\"pull-left\">
                            <i class=\"fa fa-pie-chart\"></i>
                        </div>
                        <div class=\"media-body\">
                            <h4 class=\"media-heading\">SEO Services</h4>
                            <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/features.htm", "");
    }
}
