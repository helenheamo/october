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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/nav.htm */
class __TwigTemplate_2deab8538045782a8f778bf1725b07878f0adf1325f88fb122d93718c64866ed extends \Twig\Template
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
        $filters = array("theme" => 10);
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
        echo "<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"#features\">Features</a></li>
                        <li class=\"scroll\"><a href=\"#services\">Services</a></li>
                        <li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"scroll\"><a href=\"#about\">About</a></li>
                        <li class=\"scroll\"><a href=\"#meet-team\">Team</a></li>
                        <li class=\"scroll\"><a href=\"#pricing\">Pricing</a></li>
                        <li class=\"scroll\"><a href=\"#blog\">Blog</a></li> 
                        <li class=\"scroll\"><a href=\"#get-in-touch\">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav id=\"main-menu\" class=\"navbar navbar-default navbar-fixed-top\" role=\"banner\">
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#home\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\"></a>
                </div>
\t\t\t\t
                <div class=\"collapse navbar-collapse navbar-right\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"scroll active\"><a href=\"#home\">Home</a></li>
                        <li class=\"scroll\"><a href=\"#features\">Features</a></li>
                        <li class=\"scroll\"><a href=\"#services\">Services</a></li>
                        <li class=\"scroll\"><a href=\"#portfolio\">Portfolio</a></li>
                        <li class=\"scroll\"><a href=\"#about\">About</a></li>
                        <li class=\"scroll\"><a href=\"#meet-team\">Team</a></li>
                        <li class=\"scroll\"><a href=\"#pricing\">Pricing</a></li>
                        <li class=\"scroll\"><a href=\"#blog\">Blog</a></li> 
                        <li class=\"scroll\"><a href=\"#get-in-touch\">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/nav.htm", "");
    }
}
