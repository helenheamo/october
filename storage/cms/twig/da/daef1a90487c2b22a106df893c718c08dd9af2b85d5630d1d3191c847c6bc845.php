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

/* C:\wamp64\www\twitterPlugIn/themes/gustavoardoino-amerip-topbuilder/layouts/frame.htm */
class __TwigTemplate_a58f5ededa9abfc50ce84439ba2ca44797980ffcf687948e6a2b9f157259011d extends \Twig\Template
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
        $tags = array("page" => 127);
        $filters = array("theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['page'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Topbuilder Construction Template</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/images/favicon.png\" type=\"image/x-icon\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">
   
    <!-- Animate CSS -->
    <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/animate/animate.css\" rel=\"stylesheet\">
    <!-- Icon CSS-->
\t<link rel=\"stylesheet\" href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/font-awesome/css/font-awesome.min.css\">
    <!-- Camera Slider -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/camera-slider/camera.css \">
    <!-- Owlcarousel CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/owl_carousel/owl.carousel.css\" media=\"all\">

    <!--Theme Styles CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/css/style.css\" media=\"all\" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/js/html5shiv.min.js\"></script>
    <script src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/js/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class=\"preloader\"></div>

\t<!-- Top Header_Area -->
\t<section class=\"top_header_area\">
\t    <div class=\"container\">
            <ul class=\"nav navbar-nav top_nav\">
                <li><a href=\"#\"><i class=\"fa fa-phone\"></i>+1 (168) 314 5016</a></li>
                <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>info@thethemspro.com</a></li>
                <li><a href=\"#\"><i class=\"fa fa-clock-o\"></i>Mon - Sat 12:00 - 20:00</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right social_nav\">
                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa  fa-instagram\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
            </ul>
\t    </div>
\t</section>
\t<!-- End Top Header_Area -->

\t<!-- Header_Area -->
    <nav class=\"navbar navbar-default header_aera\" id=\"main_navbar\">
        <div class=\"container\">
            <!-- searchForm -->
            <div class=\"searchForm\">
                <form action=\"#\" class=\"row m0\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                        <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Type & Hit Enter\">
                        <span class=\"input-group-addon form_hide\"><i class=\"fa fa-times\"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"col-md-2 p0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"./\"><img src=\"";
        // line 79
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo.png");
        echo "\" alt=\"\"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-10 p0\">
                <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"./\">Home</a></li>
                                <li><a href=\"index-2\">Home 2</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">About Us</a>
                            <ul class=\"dropdown-menu other_dropdwn\">
                                <li><a href=\"about\">About Us</a></li>
                                <li><a href=\"about-2\">About Us-2</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services</a>
                            <ul class=\"dropdown-menu other_dropdwn\">
                                <li><a href=\"services\">Services</a></li>
                                <li><a href=\"services-2\">Services-2</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Gallery</a></li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"blog\">Blog</a></li>
                                <li><a href=\"blog-2\">Blog-2</a></li>
                            </ul>
                        </li>
                        <li><a href=\"/contact\">Contact</a></li>
                        <li><a href=\"#\" class=\"nav_searchFrom\"><i class=\"fa fa-search\"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
\t<!-- End Header_Area -->



    ";
        // line 127
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 128
        echo "    


    <!-- Footer Area -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"footer_row row\">
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src=\"";
        // line 137
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/footer-logo.png");
        echo "\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class=\"socail_icon\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about quick\">
                    <h2>Quick links</h2>
                    <ul class=\"quick_link\">
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Building Construction</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Home Renovation</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Hardwood Flooring</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Repairing Of Roof</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Commercial Construction</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Concreate Transport</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>Twitter Feed</h2>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class=\"my_address\">
                            <li><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>info@thethemspro.com</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>+880 123 456 789</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class=\"copyright_area\">
            Copyright 2017 All rights reserved. Designed by <a href=\"https://colorlib.com\">Colorlib and Amerip.</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src=\"";
        // line 182
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/js/jquery-1.12.0.min.js\"></script>
    <!-- Bootstrap JS -->
    <script src=\"";
        // line 184
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/js/bootstrap.min.js\"></script>
    <!-- Animate JS -->
    <script src=\"";
        // line 186
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/animate/wow.min.js\"></script>
    <!-- Camera Slider -->
    <script src=\"";
        // line 188
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/camera-slider/jquery.easing.1.3.js\"></script>
    <script src=\"";
        // line 189
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/camera-slider/camera.min.js\"></script>
    <!-- Isotope JS -->
    <script src=\"";
        // line 191
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/isotope/imagesloaded.pkgd.min.js\"></script>
    <script src=\"";
        // line 192
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/isotope/isotope.pkgd.min.js\"></script>
    <!-- Progress JS -->
    <script src=\"";
        // line 194
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/Counter-Up/jquery.counterup.min.js\"></script>
    <script src=\"";
        // line 195
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/Counter-Up/waypoints.min.js\"></script>
    <!-- Owlcarousel JS -->
    <script src=\"";
        // line 197
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/owl_carousel/owl.carousel.min.js\"></script>
    <!-- Stellar JS -->
    <script src=\"";
        // line 199
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/vendors/stellar/jquery.stellar.js\"></script>
    <!-- Theme JS -->
    <script src=\"";
        // line 201
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets");
        echo "/js/theme.js\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/gustavoardoino-amerip-topbuilder/layouts/frame.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 201,  328 => 199,  323 => 197,  318 => 195,  314 => 194,  309 => 192,  305 => 191,  300 => 189,  296 => 188,  291 => 186,  286 => 184,  281 => 182,  233 => 137,  222 => 128,  220 => 127,  169 => 79,  117 => 30,  113 => 29,  106 => 25,  100 => 22,  95 => 20,  90 => 18,  85 => 16,  79 => 13,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Topbuilder Construction Template</title>

    <!-- Favicon -->
    <link rel=\"icon\" href=\"{{ 'assets'|theme }}/images/favicon.png\" type=\"image/x-icon\" />
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"{{ 'assets'|theme }}/css/bootstrap.min.css\" rel=\"stylesheet\">
   
    <!-- Animate CSS -->
    <link href=\"{{ 'assets'|theme }}/vendors/animate/animate.css\" rel=\"stylesheet\">
    <!-- Icon CSS-->
\t<link rel=\"stylesheet\" href=\"{{ 'assets'|theme }}/vendors/font-awesome/css/font-awesome.min.css\">
    <!-- Camera Slider -->
    <link rel=\"stylesheet\" href=\"{{ 'assets'|theme }}/vendors/camera-slider/camera.css \">
    <!-- Owlcarousel CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets'|theme }}/vendors/owl_carousel/owl.carousel.css\" media=\"all\">

    <!--Theme Styles CSS-->
\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{{ 'assets'|theme }}/css/style.css\" media=\"all\" />

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"{{ 'assets'|theme }}/js/html5shiv.min.js\"></script>
    <script src=\"{{ 'assets'|theme }}/js/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
    <!-- Preloader -->
    <div class=\"preloader\"></div>

\t<!-- Top Header_Area -->
\t<section class=\"top_header_area\">
\t    <div class=\"container\">
            <ul class=\"nav navbar-nav top_nav\">
                <li><a href=\"#\"><i class=\"fa fa-phone\"></i>+1 (168) 314 5016</a></li>
                <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i>info@thethemspro.com</a></li>
                <li><a href=\"#\"><i class=\"fa fa-clock-o\"></i>Mon - Sat 12:00 - 20:00</a></li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right social_nav\">
                <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa  fa-instagram\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-pinterest-p\" aria-hidden=\"true\"></i></a></li>
                <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
            </ul>
\t    </div>
\t</section>
\t<!-- End Top Header_Area -->

\t<!-- Header_Area -->
    <nav class=\"navbar navbar-default header_aera\" id=\"main_navbar\">
        <div class=\"container\">
            <!-- searchForm -->
            <div class=\"searchForm\">
                <form action=\"#\" class=\"row m0\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><i class=\"fa fa-search\"></i></span>
                        <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Type & Hit Enter\">
                        <span class=\"input-group-addon form_hide\"><i class=\"fa fa-times\"></i></span>
                    </div>
                </form>
            </div><!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"col-md-2 p0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#min_navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"./\"><img src=\"{{ 'assets/images/logo.png'|theme }}\" alt=\"\"></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"col-md-10 p0\">
                <div class=\"collapse navbar-collapse\" id=\"min_navbar\">
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Home</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"./\">Home</a></li>
                                <li><a href=\"index-2\">Home 2</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">About Us</a>
                            <ul class=\"dropdown-menu other_dropdwn\">
                                <li><a href=\"about\">About Us</a></li>
                                <li><a href=\"about-2\">About Us-2</a></li>
                            </ul>
                        </li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Services</a>
                            <ul class=\"dropdown-menu other_dropdwn\">
                                <li><a href=\"services\">Services</a></li>
                                <li><a href=\"services-2\">Services-2</a></li>
                            </ul>
                        </li>
                        <li><a href=\"#\">Gallery</a></li>
                        <li class=\"dropdown submenu\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Blog</a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"blog\">Blog</a></li>
                                <li><a href=\"blog-2\">Blog-2</a></li>
                            </ul>
                        </li>
                        <li><a href=\"/contact\">Contact</a></li>
                        <li><a href=\"#\" class=\"nav_searchFrom\"><i class=\"fa fa-search\"></i></a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
\t<!-- End Header_Area -->



    {% page %}
    


    <!-- Footer Area -->
    <footer class=\"footer_area\">
        <div class=\"container\">
            <div class=\"footer_row row\">
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>ABOUT OUR COMPANY</h2>
                    <img src=\"{{ 'assets/images/footer-logo.png'|theme }}\" alt=\"\">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <ul class=\"socail_icon\">
                        <li><a href=\"#\"><i class=\"fa fa-facebook\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-twitter\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-google-plus\" aria-hidden=\"true\"></i></a></li>
                        <li><a href=\"#\"><i class=\"fa fa-linkedin\" aria-hidden=\"true\"></i></a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about quick\">
                    <h2>Quick links</h2>
                    <ul class=\"quick_link\">
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Building Construction</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Home Renovation</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Hardwood Flooring</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Repairing Of Roof</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Commercial Construction</a></li>
                        <li><a href=\"#\"><i class=\"fa fa-chevron-right\"></i>Concreate Transport</a></li>
                    </ul>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>Twitter Feed</h2>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                    <a href=\"#\" class=\"twitter\">@colorlib: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</a>
                </div>
                <div class=\"col-md-3 col-sm-6 footer_about\">
                    <h2>CONTACT US</h2>
                    <address>
                        <p>Have questions, comments or just want to say hello:</p>
                        <ul class=\"my_address\">
                            <li><a href=\"#\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i>info@thethemspro.com</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-phone\" aria-hidden=\"true\"></i>+880 123 456 789</a></li>
                            <li><a href=\"#\"><i class=\"fa fa-map-marker\" aria-hidden=\"true\"></i><span>Sector # 10, Road # 05, Plot # 31, Uttara, Dhaka 1230 </span></a></li>
                        </ul>
                    </address>
                </div>
            </div>
        </div>
        <div class=\"copyright_area\">
            Copyright 2017 All rights reserved. Designed by <a href=\"https://colorlib.com\">Colorlib and Amerip.</a>
        </div>
    </footer>
    <!-- End Footer Area -->

    <!-- jQuery JS -->
    <script src=\"{{ 'assets'|theme }}/js/jquery-1.12.0.min.js\"></script>
    <!-- Bootstrap JS -->
    <script src=\"{{ 'assets'|theme }}/js/bootstrap.min.js\"></script>
    <!-- Animate JS -->
    <script src=\"{{ 'assets'|theme }}/vendors/animate/wow.min.js\"></script>
    <!-- Camera Slider -->
    <script src=\"{{ 'assets'|theme }}/vendors/camera-slider/jquery.easing.1.3.js\"></script>
    <script src=\"{{ 'assets'|theme }}/vendors/camera-slider/camera.min.js\"></script>
    <!-- Isotope JS -->
    <script src=\"{{ 'assets'|theme }}/vendors/isotope/imagesloaded.pkgd.min.js\"></script>
    <script src=\"{{ 'assets'|theme }}/vendors/isotope/isotope.pkgd.min.js\"></script>
    <!-- Progress JS -->
    <script src=\"{{ 'assets'|theme }}/vendors/Counter-Up/jquery.counterup.min.js\"></script>
    <script src=\"{{ 'assets'|theme }}/vendors/Counter-Up/waypoints.min.js\"></script>
    <!-- Owlcarousel JS -->
    <script src=\"{{ 'assets'|theme }}/vendors/owl_carousel/owl.carousel.min.js\"></script>
    <!-- Stellar JS -->
    <script src=\"{{ 'assets'|theme }}/vendors/stellar/jquery.stellar.js\"></script>
    <!-- Theme JS -->
    <script src=\"{{ 'assets'|theme }}/js/theme.js\"></script>
</body>
</html>", "C:\\wamp64\\www\\twitterPlugIn/themes/gustavoardoino-amerip-topbuilder/layouts/frame.htm", "");
    }
}
