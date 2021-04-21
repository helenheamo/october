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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/gallery.htm */
class __TwigTemplate_4547080d7f6c3eff88573dd72352e6c53669d7edcf01bfbcded791ab40b0bb64 extends \Twig\Template
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
        $filters = array("theme" => 23);
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
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div id=\"tg-content\" class=\"tg-content\">
                    <div class=\"tg-titleborder\">
                        <h2>Gallery</h2>
                    </div>
                    <div class=\"tg-gallerymasnory\">
                        <ul id=\"tg-navfilterbale\" class=\"tg-navfilterbale tg-optionset\">
                            <li><a class=\"tg-active\" data-filter=\"*\" href=\"\">all</a></li>
                            <li><a data-filter=\".finalresult\" href=\"\">Final Result</a></li>
                            <li><a data-filter=\".awardgiving\" href=\"\">Award Giving</a></li>
                            <li><a data-filter=\".annualtrip\" href=\"\">Annual Trip</a></li>
                            <li><a data-filter=\".examination\" href=\"\">Examination</a></li>
                        </ul>
                        <div id=\"tg-galleryfilterable\" class=\"tg-galleryfilterable\">
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-01.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-01.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-02.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-02.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-03.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-03.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-04.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-04.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-05.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-05.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-06.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-06.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-07.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-07.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-08.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-08.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-09.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 72
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-09.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"";
        // line 77
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-10.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-10.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"";
        // line 83
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-11.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 84
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-11.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-12.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-12.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-13.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-13.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-14.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-14.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-15.jpg");
        echo "\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/gallery/img-15.jpg");
        echo "\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
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
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/gallery.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 108,  254 => 107,  246 => 102,  242 => 101,  234 => 96,  230 => 95,  222 => 90,  218 => 89,  210 => 84,  206 => 83,  198 => 78,  194 => 77,  186 => 72,  182 => 71,  174 => 66,  170 => 65,  162 => 60,  158 => 59,  150 => 54,  146 => 53,  138 => 48,  134 => 47,  126 => 42,  122 => 41,  114 => 36,  110 => 35,  102 => 30,  98 => 29,  90 => 24,  86 => 23,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                <div id=\"tg-content\" class=\"tg-content\">
                    <div class=\"tg-titleborder\">
                        <h2>Gallery</h2>
                    </div>
                    <div class=\"tg-gallerymasnory\">
                        <ul id=\"tg-navfilterbale\" class=\"tg-navfilterbale tg-optionset\">
                            <li><a class=\"tg-active\" data-filter=\"*\" href=\"\">all</a></li>
                            <li><a data-filter=\".finalresult\" href=\"\">Final Result</a></li>
                            <li><a data-filter=\".awardgiving\" href=\"\">Award Giving</a></li>
                            <li><a data-filter=\".annualtrip\" href=\"\">Annual Trip</a></li>
                            <li><a data-filter=\".examination\" href=\"\">Examination</a></li>
                        </ul>
                        <div id=\"tg-galleryfilterable\" class=\"tg-galleryfilterable\">
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-01.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-01.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-02.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-02.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-03.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-03.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-04.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-04.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-05.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-05.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-06.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-06.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-07.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-07.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-08.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-08.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-09.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-09.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-10.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-10.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-11.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-11.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid examination\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-12.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-12.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid finalresult\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-13.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-13.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid awardgiving\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-14.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-14.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                            <div class=\"tg-masonrygrid annualtrip\">
                                <figure>
                                    <img src=\"{{'assets/images/gallery/img-15.jpg'|theme}}\" alt=\"image description\">
                                    <a class=\"tg-btnviewimg\" href=\"{{'assets/images/gallery/img-15.jpg'|theme}}\" data-rel=\"prettyPhoto[gallery]\">+</a>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/gallery.htm", "");
    }
}
