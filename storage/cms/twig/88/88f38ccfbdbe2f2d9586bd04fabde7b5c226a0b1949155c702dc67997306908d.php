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

/* C:\wamp64\www\twitterPlugIn/themes/vreedom18-bingo/partials/site/header.htm */
class __TwigTemplate_2ee0bc734c964c18d78d51f577ee448e3f3d5888dc159bf2e523ec2c745f9950 extends \Twig\Template
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
        $tags = array("if" => 21);
        $filters = array("page" => 9, "theme" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page', 'theme'],
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
        echo "<!--
Fixed Navigation
==================================== -->
<header class=\"navigation fixed-top\">
    <div class=\"container\">
        <!-- main nav -->
        <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
            <!-- logo -->
            <a class=\"navbar-brand logo\" href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">
                <img loading=\"lazy\" class=\"logo-default\" src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"logo\" />
                <img loading=\"lazy\" class=\"logo-white\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo-white.png");
        echo "\" alt=\"logo\" />
            </a>
            <!-- /logo -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"navbar-nav ml-auto text-center\">
                    <li class=\"nav-item dropdown ";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "index")) {
            echo "active";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "onepage-slider")) {
            echo "active";
        } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "onepage-text")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Homepage <i class=\"tf-ion-chevron-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Homepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("onepage-slider");
        echo "\">Onepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("onepage-text");
        echo "\">Onepage 2</a></li>

                            <li class=\"dropdown dropdown-submenu dropright\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu <i
                                        class=\"tf-ion-chevron-down\"></i></a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Submenu 01</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Submenu 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item ";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "id", [], "any", false, false, true, 43) == "about")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">About Us</a>
                    </li>
                    <li class=\"nav-item ";
        // line 46
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 46), "id", [], "any", false, false, true, 46) == "service")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("service");
        echo "\">Services</a>
                    </li>
                    <li class=\"nav-item ";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 49), "id", [], "any", false, false, true, 49) == "portfolio")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("portfolio");
        echo "\">Portfolio</a>
                    </li>
                    <li class=\"nav-item ";
        // line 52
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 52), "id", [], "any", false, false, true, 52) == "team")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("team");
        echo "\">Team</a>
                    </li>
                    <li class=\"nav-item ";
        // line 55
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "id", [], "any", false, false, true, 55) == "pricing")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("pricing");
        echo "\">Pricing</a>
                    </li>
                    <li class=\"nav-item ";
        // line 58
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "id", [], "any", false, false, true, 58) == "contact")) {
            echo "active";
        }
        echo "\">
                        <a class=\"nav-link\" href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Pages <i class=\"tf-ion-chevron-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
                            <li><a class=\"dropdown-item\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("404");
        echo "\">404 Page</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 68
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog");
        echo "\">Blog Page</a></li>
                            <li><a class=\"dropdown-item\" href=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Blog Single Page</a></li>

                            <li class=\"dropdown dropdown-submenu dropleft\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0201\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu <i
                                        class=\"tf-ion-chevron-down\"></i></a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0201\">
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Submenu 01</a></li>
                                    <li><a class=\"dropdown-item\" href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\">Submenu 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 78,  230 => 77,  219 => 69,  215 => 68,  211 => 67,  200 => 59,  194 => 58,  189 => 56,  183 => 55,  178 => 53,  172 => 52,  167 => 50,  161 => 49,  156 => 47,  150 => 46,  145 => 44,  139 => 43,  131 => 38,  127 => 37,  116 => 29,  112 => 28,  108 => 27,  93 => 21,  80 => 11,  76 => 10,  72 => 9,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--
Fixed Navigation
==================================== -->
<header class=\"navigation fixed-top\">
    <div class=\"container\">
        <!-- main nav -->
        <nav class=\"navbar navbar-expand-lg navbar-light px-0\">
            <!-- logo -->
            <a class=\"navbar-brand logo\" href=\"{{ 'index'|page }}\">
                <img loading=\"lazy\" class=\"logo-default\" src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"logo\" />
                <img loading=\"lazy\" class=\"logo-white\" src=\"{{ 'assets/images/logo-white.png'|theme }}\" alt=\"logo\" />
            </a>
            <!-- /logo -->
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\"
                aria-controls=\"navigation\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navigation\">
                <ul class=\"navbar-nav ml-auto text-center\">
                    <li class=\"nav-item dropdown {% if this.page.id == 'index' %}active{% elseif this.page.id == 'onepage-slider' %}active{% elseif this.page.id == 'onepage-text' %}active{% endif %}\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Homepage <i class=\"tf-ion-chevron-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown\">
                            <li><a class=\"dropdown-item\" href=\"{{ 'index'|page }}\">Homepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ 'onepage-slider'|page }}\">Onepage</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ 'onepage-text'|page }}\">Onepage 2</a></li>

                            <li class=\"dropdown dropdown-submenu dropright\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0501\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu <i
                                        class=\"tf-ion-chevron-down\"></i></a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0501\">
                                    <li><a class=\"dropdown-item\" href=\"{{ 'index'|page }}\">Submenu 01</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ 'index'|page }}\">Submenu 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'about' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'about'|page }}\">About Us</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'service' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'service'|page }}\">Services</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'portfolio' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'portfolio'|page }}\">Portfolio</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'team' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'team'|page }}\">Team</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'pricing' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'pricing'|page }}\">Pricing</a>
                    </li>
                    <li class=\"nav-item {% if this.page.id == 'contact' %}active{% endif %}\">
                        <a class=\"nav-link\" href=\"{{ 'contact'|page }}\">Contact</a>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#!\" id=\"navbarDropdown02\" role=\"button\"
                            data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            Pages <i class=\"tf-ion-chevron-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu\" aria-labelledby=\"navbarDropdown02\">
                            <li><a class=\"dropdown-item\" href=\"{{ '404'|page }}\">404 Page</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ 'blog'|page }}\">Blog Page</a></li>
                            <li><a class=\"dropdown-item\" href=\"{{ 'single-post'|page }}\">Blog Single Page</a></li>

                            <li class=\"dropdown dropdown-submenu dropleft\">
                                <a class=\"dropdown-item dropdown-toggle\" href=\"#!\" id=\"dropdown0201\" role=\"button\"
                                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Sub Menu <i
                                        class=\"tf-ion-chevron-down\"></i></a>

                                <ul class=\"dropdown-menu\" aria-labelledby=\"dropdown0201\">
                                    <li><a class=\"dropdown-item\" href=\"{{ 'index'|page }}\">Submenu 01</a></li>
                                    <li><a class=\"dropdown-item\" href=\"{{ 'index'|page }}\">Submenu 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /main nav -->
    </div>
</header>
<!--
End Fixed Navigation
==================================== -->", "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/site/header.htm", "");
    }
}
