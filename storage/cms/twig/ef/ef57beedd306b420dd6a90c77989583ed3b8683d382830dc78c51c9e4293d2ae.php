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

/* C:\wamp64\www\tcom/themes/pkurg-spacebootstrap5/pages/service.htm */
class __TwigTemplate_a8245e6b7e996fe8fa436e606801c37983fcb86700f7330c289e0aa41aba3f12 extends \Twig\Template
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
        $tags = array("partial" => 1);
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial'],
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"banner-content\">
                            <h2 class=\"text-white\">Our Best Services</h2>
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Service</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id=\"service\" class=\"service-section pt-130 pb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                        <div class=\"section-title text-center mb-55\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Services</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Best Services</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-capsule\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Refreshing Design</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-bootstrap\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Solid Bootstrap 5</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-shortcode\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>100+ Components</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-dashboard\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Speed Optimized</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-layers\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Fully Customizable</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-reload\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Regular Updates</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= carousel-section end ========================= -->
        <section class=\"carousel-section-wrapper\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xl-8 col-lg-10 mx-auto\">
                                    <div class=\"carousel-content text-center\">
                                        <div class=\"section-title\">
                                            <h2 class=\"text-white\">Create Stunning Websites in Easier
                                                and Effecient Way!</h2>
                                            <p class=\"text-white\">We Crafted an awesome design library that is
                                                robust and intuitive to use. No matter you're building a business
                                                presentation
                                                websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-section carousel-item clip-bg pt-225 pb-200 img-bg\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xl-8 col-lg-10 mx-auto\">
                                    <div class=\"carousel-content text-center\">
                                        <div class=\"section-title\">
                                            <h2 class=\"text-white\">We Crafted an awesome design library that is
                                                robust and intuitive to use.</h2>
                                            <p class=\"text-white\">Create Stunning Websites in Easier
                                                and Effecient Way! No matter you're building a business
                                                presentation websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\"
                    data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"><i
                            class=\"lni lni-arrow-left\"></i></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\"
                    data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"><i
                            class=\"lni lni-arrow-right\"></i></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </section>
        <!-- ========================= carousel-section end ========================= -->

        <!-- ========================= pricing-section start ========================= -->
        <section id=\"pricing\" class=\"pricing-section pt-140 pb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-10 mx-auto\">
                        <div class=\"section-title text-center mb-60\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Price</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Pricing Plan</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"pricing-btn text-center wow fadeInUp\" data-wow-delay=\".3s\">
                            <ul class=\"nav justify-content-center mb-90\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-1-tab\" data-toggle=\"pill\" href=\"#pills-1\" role=\"tab\"
                                        aria-controls=\"pills-1\" aria-selected=\"true\">Monthly</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-2-tab\" data-toggle=\"pill\" href=\"#pills-2\" role=\"tab\"
                                        aria-controls=\"pills-2\" aria-selected=\"false\">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-1\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Basic</h4>
                                    <h3>\$15.00</h3>
                                    <ul>
                                        <li>10 Users</li>
                                        <li>Minimal Report</li>
                                        <li>100MB Data Storage</li>
                                        <li>No Support</li>
                                        <li>Single Agent</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing active mb-50\">
                                    <h4>Standard</h4>
                                    <h3>\$25.99</h3>
                                    <ul>
                                        <li>30 Users</li>
                                        <li>Minimal Report</li>
                                        <li>1GB Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Premium</h4>
                                    <h3>\$220.00</h3>
                                    <ul>
                                        <li>Unlimited Users</li>
                                        <li>Full Report</li>
                                        <li>Unlimited Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-2\" role=\"tabpanel\" aria-labelledby=\"pills-2-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Basic</h4>
                                    <h3>\$15.00</h3>
                                    <ul>
                                        <li>10 Users</li>
                                        <li>Minimal Report</li>
                                        <li>100MB Data Storage</li>
                                        <li>No Support</li>
                                        <li>Single Agent</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing active mb-50\">
                                    <h4>Standard</h4>
                                    <h3>\$25.99</h3>
                                    <ul>
                                        <li>30 Users</li>
                                        <li>Minimal Report</li>
                                        <li>1GB Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Premium</h4>
                                    <h3>\$220.00</h3>
                                    <ul>
                                        <li>Unlimited Users</li>
                                        <li>Full Report</li>
                                        <li>Unlimited Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ========================= pricing-section end ========================= -->


        <!-- ========================= contact-section start ========================= -->
<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/cta-bg.jpg');\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-5 col-lg-7\">
                        <div class=\"section-title mb-60\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                            <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                            <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-5\">
                        <div class=\"contact-btn text-left text-lg-right\">
                            <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->



        <!-- ========================= client-logo-section start ========================= -->
        <section class=\"client-logo-section pt-70 pb-130\">
            <div class=\"container\">
                <div class=\"client-logo-wrapper\">
                    <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/uideck-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/pagebulb-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/graygrids-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6\">
                        <div class=\"section-title mb-30\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                            <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6\">
                        <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                            <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                            <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'header' %}
<section class=\"page-banner-section pt-75 pb-75 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"banner-content\">
                            <h2 class=\"text-white\">Our Best Services</h2>
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\" aria-current=\"page\"><a href=\"javascript:void(0)\">Home</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\">Service</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= page-banner-section end ========================= -->

        <!-- ========================= service-section start ========================= -->
        <section id=\"service\" class=\"service-section pt-130 pb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-9 mx-auto\">
                        <div class=\"section-title text-center mb-55\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Services</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Best Services</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-capsule\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Refreshing Design</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-bootstrap\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Solid Bootstrap 5</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-shortcode\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>100+ Components</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-dashboard\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Speed Optimized</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-layers\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Fully Customizable</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-4 col-md-6\">
                        <div class=\"service-box box-style\">
                            <div class=\"service-icon box-icon-style\">
                                <i class=\"lni lni-reload\"></i>
                            </div>
                            <div class=\"box-content-style service-content\">
                                <h4>Regular Updates</h4>
                                <p>Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy eirmod tempor ividunt
                                    labor dolore magna.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= service-section end ========================= -->

        <!-- ========================= carousel-section end ========================= -->
        <section class=\"carousel-section-wrapper\">
            <div id=\"carouselExampleCaptions\" class=\"carousel slide carousel-fade\" data-ride=\"carousel\">
                <div class=\"carousel-inner\">
                    <div class=\"carousel-section carousel-item active clip-bg pt-225 pb-200 img-bg\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xl-8 col-lg-10 mx-auto\">
                                    <div class=\"carousel-content text-center\">
                                        <div class=\"section-title\">
                                            <h2 class=\"text-white\">Create Stunning Websites in Easier
                                                and Effecient Way!</h2>
                                            <p class=\"text-white\">We Crafted an awesome design library that is
                                                robust and intuitive to use. No matter you're building a business
                                                presentation
                                                websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"carousel-section carousel-item clip-bg pt-225 pb-200 img-bg\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-xl-8 col-lg-10 mx-auto\">
                                    <div class=\"carousel-content text-center\">
                                        <div class=\"section-title\">
                                            <h2 class=\"text-white\">We Crafted an awesome design library that is
                                                robust and intuitive to use.</h2>
                                            <p class=\"text-white\">Create Stunning Websites in Easier
                                                and Effecient Way! No matter you're building a business
                                                presentation websit or a complex web application our design blocks can easily be
                                                adapted for your needs.</p>
                                        </div>
                                        <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class=\"carousel-control carousel-control-prev\" href=\"#carouselExampleCaptions\" role=\"button\"
                    data-slide=\"prev\">
                    <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"><i
                            class=\"lni lni-arrow-left\"></i></span>
                    <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"carousel-control carousel-control-next\" href=\"#carouselExampleCaptions\" role=\"button\"
                    data-slide=\"next\">
                    <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"><i
                            class=\"lni lni-arrow-right\"></i></span>
                    <span class=\"sr-only\">Next</span>
                </a>
            </div>
        </section>
        <!-- ========================= carousel-section end ========================= -->

        <!-- ========================= pricing-section start ========================= -->
        <section id=\"pricing\" class=\"pricing-section pt-140 pb-100\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-10 mx-auto\">
                        <div class=\"section-title text-center mb-60\">
                            <span class=\"wow fadeInDown\" data-wow-delay=\".2s\">Price</span>
                            <h2 class=\"wow fadeInUp\" data-wow-delay=\".4s\">Our Pricing Plan</h2>
                            <p class=\"wow fadeInUp\" data-wow-delay=\".6s\">At vero eos et accusamus et iusto odio
                                dignissimos ducimus quiblanditiis praesentium</p>
                        </div>
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-xl-12\">
                        <div class=\"pricing-btn text-center wow fadeInUp\" data-wow-delay=\".3s\">
                            <ul class=\"nav justify-content-center mb-90\" id=\"pills-tab\" role=\"tablist\">
                                <li class=\"nav-item\">
                                    <a class=\"nav-link active\" id=\"pills-1-tab\" data-toggle=\"pill\" href=\"#pills-1\" role=\"tab\"
                                        aria-controls=\"pills-1\" aria-selected=\"true\">Monthly</a>
                                </li>
                                <li class=\"nav-item\">
                                    <a class=\"nav-link\" id=\"pills-2-tab\" data-toggle=\"pill\" href=\"#pills-2\" role=\"tab\"
                                        aria-controls=\"pills-2\" aria-selected=\"false\">Yearly</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class=\"tab-content\" id=\"pills-tabContent\">
                    <div class=\"tab-pane fade show active\" id=\"pills-1\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Basic</h4>
                                    <h3>\$15.00</h3>
                                    <ul>
                                        <li>10 Users</li>
                                        <li>Minimal Report</li>
                                        <li>100MB Data Storage</li>
                                        <li>No Support</li>
                                        <li>Single Agent</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing active mb-50\">
                                    <h4>Standard</h4>
                                    <h3>\$25.99</h3>
                                    <ul>
                                        <li>30 Users</li>
                                        <li>Minimal Report</li>
                                        <li>1GB Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Premium</h4>
                                    <h3>\$220.00</h3>
                                    <ul>
                                        <li>Unlimited Users</li>
                                        <li>Full Report</li>
                                        <li>Unlimited Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"tab-pane fade\" id=\"pills-2\" role=\"tabpanel\" aria-labelledby=\"pills-2-tab\">
                        <div class=\"row\">
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Basic</h4>
                                    <h3>\$15.00</h3>
                                    <ul>
                                        <li>10 Users</li>
                                        <li>Minimal Report</li>
                                        <li>100MB Data Storage</li>
                                        <li>No Support</li>
                                        <li>Single Agent</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing active mb-50\">
                                    <h4>Standard</h4>
                                    <h3>\$25.99</h3>
                                    <ul>
                                        <li>30 Users</li>
                                        <li>Minimal Report</li>
                                        <li>1GB Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                            <div class=\"col-xl-4 col-lg-4 col-md-6\">
                                <div class=\"single-pricing mb-50\">
                                    <h4>Premium</h4>
                                    <h3>\$220.00</h3>
                                    <ul>
                                        <li>Unlimited Users</li>
                                        <li>Full Report</li>
                                        <li>Unlimited Data Storage</li>
                                        <li>7/24 Support</li>
                                        <li>Multiple Agents</li>
                                    </ul>
                                    <a href=\"javascript:void(0)\" class=\"theme-btn border-btn\">Purchase Now</a>
                                    <p>No Extra Hidden Charge</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- ========================= pricing-section end ========================= -->


        <!-- ========================= contact-section start ========================= -->
<section id=\"contact\" class=\"contact-section cta-bg img-bg pt-110 pb-100\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/cta-bg.jpg');\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-5 col-lg-7\">
                        <div class=\"section-title mb-60\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\" style=\"visibility: visible; animation-delay: 0.2s; animation-name: fadeInDown;\">Space Free Lite</span>
                            <h2 class=\"text-white wow fadeInUp\" data-wow-delay=\".4s\" style=\"visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;\">You are using free lite version of Space</h2>
                            <p class=\"text-white wow fadeInUp\" data-wow-delay=\".6s\" style=\"visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;\">Please, purchase full version of the template to get all pages, features and commercial license</p>
                        </div>
                    </div>
                    <div class=\"col-xl-7 col-lg-5\">
                        <div class=\"contact-btn text-left text-lg-right\">
                            <a href=\"https://rebrand.ly/space-gg\" rel=\"nofollow\" class=\"theme-btn\">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= contact-section end ========================= -->



        <!-- ========================= client-logo-section start ========================= -->
        <section class=\"client-logo-section pt-70 pb-130\">
            <div class=\"container\">
                <div class=\"client-logo-wrapper\">
                    <div class=\"client-logo-carousel d-flex align-items-center justify-content-between\">
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/uideck-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/pagebulb-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/graygrids-logo.svg\" alt=\"\">
                        </div>
                        <div class=\"client-logo\">
                            <img src=\"/themes/pkurg-spacebootstrap5/assets/img/client-logo/lineicons-logo.svg\" alt=\"\">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ========================= client-logo-section end ========================= -->

        <!-- ========================= subscribe-section start ========================= -->
        <section class=\"subscribe-section pt-70 pb-70 img-bg\" style=\"background-image: url('/themes/pkurg-spacebootstrap5/assets/img/bg/common-bg.svg')\">
            <div class=\"container\">
                <div class=\"row align-items-center\">
                    <div class=\"col-xl-6 col-lg-6\">
                        <div class=\"section-title mb-30\">
                            <span class=\"text-white wow fadeInDown\" data-wow-delay=\".2s\">Subscribe</span>
                            <h2 class=\"text-white mb-40 wow fadeInUp\" data-wow-delay=\".4s\">Subscribe Our Newsletter</h2>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-6\">
                        <form action=\"#\" class=\"subscribe-form wow fadeInRight\" data-wow-delay=\".4s\">
                            <input type=\"text\" name=\"subs-email\" id=\"subs-email\" placeholder=\"Your Email\">
                            <button type=\"submit\"><i class=\"lni lni-telegram-original\"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>", "C:\\wamp64\\www\\tcom/themes/pkurg-spacebootstrap5/pages/service.htm", "");
    }
}
