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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/404.htm */
class __TwigTemplate_b8c5d75545fa7a5796884815bc0f4fe96cd3c575cc3e4108bb1c037a5f8299b4 extends \Twig\Template
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
        $filters = array("theme" => 27);
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
        echo "<!--************************************
\t\t\t\tInner Banner Start
\t\t*************************************-->
<div class=\"tg-innerbanner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <ol class=\"tg-breadcrumb\">
                    <li><a href=\"\">home</a></li>
                    <li class=\"tg-active\">404</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"tg-404error\">
                <figure class=\"tg-errorimg\">
                    <img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/404-img.jpg");
        echo "\" alt=\"image description\">
                </figure>
                <div class=\"tg-errorcontent\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <h2>Ooops!</h2>
                        <h3>Did you hear the sound of<span>Broken Something?</span></h3>
                        <div class=\"tg-description\">
                            <p>Sorry, we can't find the page you are looking for. Please go to <a href=\"index-2.html\">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/404.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 27,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tInner Banner Start
\t\t*************************************-->
<div class=\"tg-innerbanner\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <ol class=\"tg-breadcrumb\">
                    <li><a href=\"\">home</a></li>
                    <li class=\"tg-active\">404</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Inner Banner End
*************************************-->
<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"tg-404error\">
                <figure class=\"tg-errorimg\">
                    <img src=\"{{'assets/images/404-img.jpg'|theme}}\" alt=\"image description\">
                </figure>
                <div class=\"tg-errorcontent\">
                    <div class=\"col-sm-10 col-sm-offset-1\">
                        <h2>Ooops!</h2>
                        <h3>Did you hear the sound of<span>Broken Something?</span></h3>
                        <div class=\"tg-description\">
                            <p>Sorry, we can't find the page you are looking for. Please go to <a href=\"index-2.html\">Home</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/404.htm", "");
    }
}
