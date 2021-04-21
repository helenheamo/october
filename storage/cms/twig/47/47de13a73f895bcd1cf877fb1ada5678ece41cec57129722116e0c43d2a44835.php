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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/blog/category.htm */
class __TwigTemplate_a93bc3dcc97a53334f8551bed9b1573318ebed2923440a8baeefeb8a4842ba28 extends \Twig\Template
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
        $tags = array("partial" => 260);
        $filters = array("theme" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-titleborder\">
                            <h2>news &amp; article</h2>
                        </div>
                        <div class=\"tg-newsandarticle tg-grid\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-10.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Tuesday, Apr 21, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Allotment of Hostel Accommodation 2017!</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-11.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>friday, Apr 26, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-12.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Saturday, Apr 27, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-13.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Sunday, Apr 28, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 119
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-14.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Monday, Apr 29, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 144
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-15.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Tuesday, Apr 30, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 169
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-16.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Wednesday, Apr 31, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-17.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Thursday, May 01, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-18.jpg");
        echo "\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Friday, May 02, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <nav class=\"tg-pagination\">
                            <ul>
                                <li class=\"tg-prevpage\"><a href=\"#\"><i class=\"fa fa-angle-left\"></i></a></li>
                                <li><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li class=\"tg-active\"><a href=\"#\">5</a></li>
                                <li>...</li>
                                <li><a href=\"#\">10</a></li>
                                <li class=\"tg-nextpage\"><a href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>



                ";
        // line 260
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar_left.htm"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 261
        echo "




            </div>
        </div>
    </div>
</main>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/blog/category.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 261,  350 => 260,  306 => 219,  278 => 194,  250 => 169,  222 => 144,  194 => 119,  166 => 94,  138 => 69,  110 => 44,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-8 col-lg-9 pull-right\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-titleborder\">
                            <h2>news &amp; article</h2>
                        </div>
                        <div class=\"tg-newsandarticle tg-grid\">
                            <div class=\"row\">
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-10.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Tuesday, Apr 21, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Allotment of Hostel Accommodation 2017!</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-11.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>friday, Apr 26, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-12.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Saturday, Apr 27, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-13.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Sunday, Apr 28, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-14.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Monday, Apr 29, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-15.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Tuesday, Apr 30, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Notification of Mid Term Examinations</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-16.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Wednesday, Apr 31, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-17.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Thursday, May 01, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                                <div class=\"col-xs-6 col-sm-6 col-md-4 col-lg-4\">
                                    <article class=\"tg-themepost tg-newspost\">
                                        <figure class=\"tg-featuredimg\">
                                            <a href=\"\">
                                                <img src=\"{{'assets/images/themepost/img-18.jpg'|theme}}\" alt=\"image description\">
                                            </a>
                                        </figure>
                                        <div class=\"tg-themepostcontent\">
                                            <ul class=\"tg-matadata\">
                                                <li>
                                                    <a href=\"\">
                                                        <i class=\"fa fa-calendar\"></i>
                                                        <span>Friday, May 02, 2017</span>
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class=\"tg-themeposttitle\">
                                                <h3><a href=\"\">Invites Application for Admission in Designing Program</a></h3>
                                            </div>
                                            <div class=\"tg-description\">
                                                <p>Consectetur adipisicing elit sed do eiusmod tempor inunt labore... <a href=\"\">Read More</a></p>
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <nav class=\"tg-pagination\">
                            <ul>
                                <li class=\"tg-prevpage\"><a href=\"#\"><i class=\"fa fa-angle-left\"></i></a></li>
                                <li><a href=\"#\">1</a></li>
                                <li><a href=\"#\">2</a></li>
                                <li><a href=\"#\">3</a></li>
                                <li><a href=\"#\">4</a></li>
                                <li class=\"tg-active\"><a href=\"#\">5</a></li>
                                <li>...</li>
                                <li><a href=\"#\">10</a></li>
                                <li class=\"tg-nextpage\"><a href=\"#\"><i class=\"fa fa-angle-right\"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>



                {% partial 'sidebar_left.htm' %}





            </div>
        </div>
    </div>
</main>", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/blog/category.htm", "");
    }
}
