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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/about.htm */
class __TwigTemplate_914c84f00fe6117c0133f1f6535cbfff143f121b9dc7ac3162f32ed0083d56ec extends \Twig\Template
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
        $tags = array("content" => 10);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                [],
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
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    ";
        // line 10
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/video.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 11
        echo "                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    ";
        // line 14
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("about/capabilities.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 15
        echo "                </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/about.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 15,  82 => 14,  77 => 11,  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">

            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">About Us</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 wow fadeInLeft\">
                    {% content 'about/video.htm' %}
                </div>

                <div class=\"col-sm-6 wow fadeInRight\">
                    {% content 'about/capabilities.htm' %}
                </div>
        </div>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/about.htm", "");
    }
}
