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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/contact.htm */
class __TwigTemplate_c4760316615a2a691e0c8aba4a7d694616a9d16f08c054676c8a5864680b0f3a extends \Twig\Template
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
        $filters = array("theme" => 49);
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
\t\t\t\tMain Start\t\t\t\t\t\t
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"tg-contactus tg-contactusvone\">
                    <div class=\"tg-titleborder\">
                        <h2>Contact Us</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-7 col-lg-8\">
                            <div id=\"tg-officelocation\" class=\"tg-officelocation\"></div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-5 col-lg-4\">
                            <form class=\"tg-formtheme tg-formcontactus\">
                                <fieldset>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Name*\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email* (Your email address will not be published.)\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control\" placeholder=\"Comment\"></textarea>
                                    </div>
                                    <button class=\"tg-btn\" type=\"submit\">submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-ourothercampuses\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"tg-titleborder\">
                        <h2>Our Campuses</h2>
                    </div>
                </div>
                <div id=\"tg-campuscarousel\" class=\"tg-campuscarousel owl-carousel tg-campuses\">
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-12.jpg");
        echo "\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-13.jpg");
        echo " alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-10.jpg");
        echo "\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 154
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-11.jpg");
        echo "\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-12.jpg");
        echo "\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"";
        // line 224
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/campuses/img-13.jpg");
        echo "\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
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
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/contact.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 224,  264 => 189,  226 => 154,  188 => 119,  150 => 84,  112 => 49,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tMain Start\t\t\t\t\t\t
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div class=\"tg-contactus tg-contactusvone\">
                    <div class=\"tg-titleborder\">
                        <h2>Contact Us</h2>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-xs-12 col-sm-6 col-md-7 col-lg-8\">
                            <div id=\"tg-officelocation\" class=\"tg-officelocation\"></div>
                        </div>
                        <div class=\"col-xs-12 col-sm-6 col-md-5 col-lg-4\">
                            <form class=\"tg-formtheme tg-formcontactus\">
                                <fieldset>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"Name*\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Email* (Your email address will not be published.)\">
                                    </div>
                                    <div class=\"form-group\">
                                        <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                                    </div>
                                    <div class=\"form-group\">
                                        <textarea class=\"form-control\" placeholder=\"Comment\"></textarea>
                                    </div>
                                    <button class=\"tg-btn\" type=\"submit\">submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"tg-ourothercampuses\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"tg-titleborder\">
                        <h2>Our Campuses</h2>
                    </div>
                </div>
                <div id=\"tg-campuscarousel\" class=\"tg-campuscarousel owl-carousel tg-campuses\">
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-12.jpg'|theme}}\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-13.jpg'|theme}} alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-10.jpg'|theme}}\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-11.jpg'|theme}}\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-12.jpg'|theme}}\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <figure class=\"tg-featuredimg\">
                                <a href=\"\">
                                    <img src=\"{{'assets/images/campuses/img-13.jpg'|theme}}\" alt=\"image description\">
                                </a>
                            </figure>
                            <ul class=\"tg-capmusinfo\">
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/contact.htm", "");
    }
}
