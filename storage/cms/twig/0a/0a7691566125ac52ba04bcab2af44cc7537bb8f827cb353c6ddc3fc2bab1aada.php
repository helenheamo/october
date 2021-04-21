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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/partials/header.htm */
class __TwigTemplate_24f9b32777d0e9873a327114808b4a1cbda91aaf196a347ccf27e60713c6b46f extends \Twig\Template
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
        $filters = array("theme" => 17, "page" => 65);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme', 'page'],
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
\t\t\tWrapper Start
\t*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper\">
    <!--************************************
            Header Start
    *************************************-->
    <header id=\"tg-header\" class=\"tg-header tg-haslayout\">
        <div class=\"tg-topbar\">
            <div class=\"tg-leftbox\">
                <span id=\"tg-datebox\" class=\"tg-datebox\"></span>
            </div>
            <div class=\"tg-rightbox\">
                <!-- <span class=\"tg-tollfree\">Toll Free: 0800-123-456</span> -->
                <div class=\"tg-themedropdown tg-languagesdropdown\">
                    <a href=\"\" id=\"tg-languages\" class=\"tg-btndropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/img-01.jpg");
        echo "\" alt=\"image description\"></span>
                        <span>ETH</span>
                    </a>
                    <div class=\"tg-themedropdownbox\" aria-labelledby=\"tg-languages\">
                        <ul class=\"tg-languageslist\">
                            <li>
                                <span><img src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/img-02.jpg");
        echo "\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                            <li>
                                <span><img src=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/img-03.jpg");
        echo "\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                            <li>
                                <span><img src=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/flags/img-04.jpg");
        echo "\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"tg-logoandnoticeboard\">
                        <strong class=\"tg-logo\"><a href=\"index-2.html\"><img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"University of Education and knowledge\"></a></strong>
                        <div class=\"tg-noticeboard hidden-xs\">
                            <div class=\"tg-textbox\">
                                <span>Next Campaign</span>
                                <span> 23-Apr-2021</span>
                            </div>
                            <figure><img src=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-01.jpg");
        echo "\" alt=\"image description\"></figure>
                        </div>
                    </div>
                    <div class=\"tg-navigationarea\">
                        <nav id=\"tg-nav\" class=\"tg-nav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <div id=\"tg-navigation\" class=\"collapse navbar-collapse tg-navigation\">
                                <ul>
                                    <li class=\"current-menu-item\"><a href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">Home</a></li>
                                    <li><a href=\"";
        // line 66
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">About Us</a></li>
                                        <li><a href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">Tweets</a></li>
                                    <!-- <li class=\"menu-item-has-mega-menu\">
                                        <a href=\"\">Courses</a>
                                        <div class=\"mega-menu\">
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <a href=\"\">Course Categories</a>
                                                    <ul>
                                                        <li><a href=\"#\">Course One</a></li>
                                                        <li><a href=\"#\">Course Two</a></li>
                                                        <li><a href=\"#\">Course Three</a></li>
                                                    </ul>
                                                </li>
                                                <li class=\"mega-menu-col\">
                                                    <a href=\"\">Faculties</a>
                                                    <ul>
                                                        <li><a href=\"#\">faculties</a></li>
                                                        <li><a href=\"#\">faculty detail</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <figure><img src=\"";
        // line 90
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-02.jpg");
        echo "\" alt=\"image description\"></figure>
                                                    <div class=\"tg-textbox\">
                                                        <strong>excellent service &amp; support</strong>
                                                        <div class=\"tg-description\">
                                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quistance nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
                                                        </div>
                                                        <a class=\"tg-btn tg-bgn-sm\" href=\"\">contact now</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <!-- <li class=\"menu-item-has-mega-menu\">
                                        <a href=\"\">Tweets</a>
                                        <div class=\"mega-menu tg-fullmegamenu\">
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <div class=\"tg-themetabs\">
                                                        <ul class=\"tg-themetabnav\" role=\"tablist\">
                                                            <li role=\"presentation\" class=\"active\">
                                                                <a href=\"#tg-science\" aria-controls=\"tg-science\" role=\"tab\" data-toggle=\"tab\">GERD</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-management\" aria-controls=\"tg-management\" role=\"tab\" data-toggle=\"tab\">EthiopiaPrevails</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-medical\" aria-controls=\"tg-medical\" role=\"tab\" data-toggle=\"tab\">Medical</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-arts\" aria-controls=\"tg-arts\" role=\"tab\" data-toggle=\"tab\">Arts</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-informationtechnology\" aria-controls=\"tg-informationtechnology\" role=\"tab\" data-toggle=\"tab\">Information Technology</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-history\" aria-controls=\"tg-history\" role=\"tab\" data-toggle=\"tab\">History</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-economics\" aria-controls=\"tg-economics\" role=\"tab\" data-toggle=\"tab\">Economics</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-accounts\" aria-controls=\"tg-accounts\" role=\"tab\" data-toggle=\"tab\">Accounts</a>
                                                            </li>
                                                        </ul>
                                                        <div class=\"tab-content tg-themetabcontent\">
                                                            <div role=\"tabpanel\" class=\"tab-pane tg-tabpane active\" id=\"tg-science\">
                                                                <strong>Latest Science Courses</strong>
                                                                <div class=\"tg-posts\">
                                                                    <div id=\"tg-navtabslider\" class=\"tg-navtabslider tg-megamenuslider owl-carousel\">
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 143
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-01.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Become a Proffesional Teacher</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 176
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-02.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventsgrid.html\">One Day Crash Course on Skills Improvement</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 209
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-03.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventdetail.html\">Back To School, Open Discussion</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 242
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-04.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Make a Goal For Successful Your Life</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 275
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-01.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Become a Proffesional Teacher</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"";
        // line 308
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-02.jpg");
        echo "\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventsgrid.html\">One Day Crash Course on Skills Improvement</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"";
        // line 347
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/category");
        echo "\">Blog</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"";
        // line 349
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/category");
        echo "\">Blog</a></li>
                                            <li><a href=\"";
        // line 350
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("blog/post");
        echo "\">Blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"";
        // line 353
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gallery");
        echo "\">Gallery</a></li>
                                    <!-- <li><a href=\"";
        // line 354
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("404");
        echo "\">404</a></li> -->
                                    <li><a href=\"";
        // line 355
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class=\"tg-searchbox\">
                            <a id=\"tg-btnsearch\" class=\"tg-btnsearch\" href=\"\"><i class=\"icon-magnifier\"></i></a>
                            <form class=\"tg-formtheme tg-formsearch\">
                                <fieldset><input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Start Your Search Here\"></fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  481 => 355,  477 => 354,  473 => 353,  467 => 350,  463 => 349,  458 => 347,  416 => 308,  380 => 275,  344 => 242,  308 => 209,  272 => 176,  236 => 143,  180 => 90,  154 => 67,  150 => 66,  146 => 65,  128 => 50,  119 => 44,  103 => 31,  96 => 27,  89 => 23,  80 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\tWrapper Start
\t*************************************-->
<div id=\"tg-wrapper\" class=\"tg-wrapper\">
    <!--************************************
            Header Start
    *************************************-->
    <header id=\"tg-header\" class=\"tg-header tg-haslayout\">
        <div class=\"tg-topbar\">
            <div class=\"tg-leftbox\">
                <span id=\"tg-datebox\" class=\"tg-datebox\"></span>
            </div>
            <div class=\"tg-rightbox\">
                <!-- <span class=\"tg-tollfree\">Toll Free: 0800-123-456</span> -->
                <div class=\"tg-themedropdown tg-languagesdropdown\">
                    <a href=\"\" id=\"tg-languages\" class=\"tg-btndropdown\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <span><img src=\"{{ 'assets/images/flags/img-01.jpg'|theme}}\" alt=\"image description\"></span>
                        <span>ETH</span>
                    </a>
                    <div class=\"tg-themedropdownbox\" aria-labelledby=\"tg-languages\">
                        <ul class=\"tg-languageslist\">
                            <li>
                                <span><img src=\"{{ 'assets/images/flags/img-02.jpg'|theme}}\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                            <li>
                                <span><img src=\"{{ 'assets/images/flags/img-03.jpg'|theme}}\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                            <li>
                                <span><img src=\"{{ 'assets/images/flags/img-04.jpg'|theme}}\" alt=\"image description\"></span>
                                <span>Eng</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <div class=\"tg-logoandnoticeboard\">
                        <strong class=\"tg-logo\"><a href=\"index-2.html\"><img src=\"{{'assets/images/logo.png'|theme}}\" alt=\"University of Education and knowledge\"></a></strong>
                        <div class=\"tg-noticeboard hidden-xs\">
                            <div class=\"tg-textbox\">
                                <span>Next Campaign</span>
                                <span> 23-Apr-2021</span>
                            </div>
                            <figure><img src=\"{{'assets/images/img-01.jpg'|theme}}\" alt=\"image description\"></figure>
                        </div>
                    </div>
                    <div class=\"tg-navigationarea\">
                        <nav id=\"tg-nav\" class=\"tg-nav\">
                            <div class=\"navbar-header\">
                                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#tg-navigation\" aria-expanded=\"false\">
                                    <span class=\"sr-only\">Toggle navigation</span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                    <span class=\"icon-bar\"></span>
                                </button>
                            </div>
                            <div id=\"tg-navigation\" class=\"collapse navbar-collapse tg-navigation\">
                                <ul>
                                    <li class=\"current-menu-item\"><a href=\"{{ 'home'|page }}\">Home</a></li>
                                    <li><a href=\"{{ 'about-us'|page }}\">About Us</a></li>
                                        <li><a href=\"{{ 'about-us'|page }}\">Tweets</a></li>
                                    <!-- <li class=\"menu-item-has-mega-menu\">
                                        <a href=\"\">Courses</a>
                                        <div class=\"mega-menu\">
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <a href=\"\">Course Categories</a>
                                                    <ul>
                                                        <li><a href=\"#\">Course One</a></li>
                                                        <li><a href=\"#\">Course Two</a></li>
                                                        <li><a href=\"#\">Course Three</a></li>
                                                    </ul>
                                                </li>
                                                <li class=\"mega-menu-col\">
                                                    <a href=\"\">Faculties</a>
                                                    <ul>
                                                        <li><a href=\"#\">faculties</a></li>
                                                        <li><a href=\"#\">faculty detail</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <figure><img src=\"{{ 'assets/images/img-02.jpg'|theme}}\" alt=\"image description\"></figure>
                                                    <div class=\"tg-textbox\">
                                                        <strong>excellent service &amp; support</strong>
                                                        <div class=\"tg-description\">
                                                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua enim ad minim veniam quistance nostrud exercitation ullamco laboris nisi ut aliquip commodo.</p>
                                                        </div>
                                                        <a class=\"tg-btn tg-bgn-sm\" href=\"\">contact now</a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <!-- <li class=\"menu-item-has-mega-menu\">
                                        <a href=\"\">Tweets</a>
                                        <div class=\"mega-menu tg-fullmegamenu\">
                                            <ul class=\"mega-menu-row\">
                                                <li class=\"mega-menu-col\">
                                                    <div class=\"tg-themetabs\">
                                                        <ul class=\"tg-themetabnav\" role=\"tablist\">
                                                            <li role=\"presentation\" class=\"active\">
                                                                <a href=\"#tg-science\" aria-controls=\"tg-science\" role=\"tab\" data-toggle=\"tab\">GERD</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-management\" aria-controls=\"tg-management\" role=\"tab\" data-toggle=\"tab\">EthiopiaPrevails</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-medical\" aria-controls=\"tg-medical\" role=\"tab\" data-toggle=\"tab\">Medical</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-arts\" aria-controls=\"tg-arts\" role=\"tab\" data-toggle=\"tab\">Arts</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-informationtechnology\" aria-controls=\"tg-informationtechnology\" role=\"tab\" data-toggle=\"tab\">Information Technology</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-history\" aria-controls=\"tg-history\" role=\"tab\" data-toggle=\"tab\">History</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-economics\" aria-controls=\"tg-economics\" role=\"tab\" data-toggle=\"tab\">Economics</a>
                                                            </li>
                                                            <li role=\"presentation\">
                                                                <a href=\"#tg-accounts\" aria-controls=\"tg-accounts\" role=\"tab\" data-toggle=\"tab\">Accounts</a>
                                                            </li>
                                                        </ul>
                                                        <div class=\"tab-content tg-themetabcontent\">
                                                            <div role=\"tabpanel\" class=\"tab-pane tg-tabpane active\" id=\"tg-science\">
                                                                <strong>Latest Science Courses</strong>
                                                                <div class=\"tg-posts\">
                                                                    <div id=\"tg-navtabslider\" class=\"tg-navtabslider tg-megamenuslider owl-carousel\">
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-01.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Become a Proffesional Teacher</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-02.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventsgrid.html\">One Day Crash Course on Skills Improvement</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-03.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventdetail.html\">Back To School, Open Discussion</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-04.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Make a Goal For Successful Your Life</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-01.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventslist.html\">Become a Proffesional Teacher</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                        <div class=\"item\">
                                                                            <article class=\"tg-themepost\">
                                                                                <figure class=\"tg-featuredimg\">
                                                                                    <a href=\"\">
                                                                                        <img src=\"{{'assets/images/themepost/img-02.jpg'|theme}}\" alt=\"image description\">
                                                                                    </a>
                                                                                </figure>
                                                                                <div class=\"tg-themepostcontent\">
                                                                                    <ul class=\"tg-themeposttags\">
                                                                                        <li><a href=\"\">Management</a></li>
                                                                                        <li><a href=\"\">Science</a></li>
                                                                                    </ul>
                                                                                    <div class=\"tg-themeposttitle\">
                                                                                        <h3><a href=\"eventsgrid.html\">One Day Crash Course on Skills Improvement</a></h3>
                                                                                    </div>
                                                                                    <ul class=\"tg-matadata\">
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-user\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                        <li>
                                                                                            <a href=\"\">
                                                                                                <i class=\"fa fa-comment-o\"></i>
                                                                                                <span>1205</span>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                    <span class=\"tg-pricebox\"><a href=\"\">\$36/pm</a></span>
                                                                                </div>
                                                                            </article>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                    <li class=\"menu-item-has-children\">
                                        <a href=\"{{ 'blog/category'|page }}\">Blog</a>
                                        <ul class=\"sub-menu\">
                                            <li><a href=\"{{ 'blog/category'|page }}\">Blog</a></li>
                                            <li><a href=\"{{ 'blog/post'|page }}\">Blog detail</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"{{ 'gallery'|page }}\">Gallery</a></li>
                                    <!-- <li><a href=\"{{ '404'|page }}\">404</a></li> -->
                                    <li><a href=\"{{ 'contact'|page }}\">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                        <div class=\"tg-searchbox\">
                            <a id=\"tg-btnsearch\" class=\"tg-btnsearch\" href=\"\"><i class=\"icon-magnifier\"></i></a>
                            <form class=\"tg-formtheme tg-formsearch\">
                                <fieldset><input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Start Your Search Here\"></fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--************************************
            Header End
    *************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/header.htm", "");
    }
}
