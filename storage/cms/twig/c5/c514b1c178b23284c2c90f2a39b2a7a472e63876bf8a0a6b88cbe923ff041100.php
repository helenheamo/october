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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/pricing.htm */
class __TwigTemplate_0f9d6cec719ed4097a56717e5a42baf0fa8985b3a6f117d14a90a72a46d6d144 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
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
                <h2 class=\"section-title text-center wow fadeInDown\">Pricing Table</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$39
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Starter
                                </div>
                            </li>
                            <li><strong>1</strong> DOMAIN</li>
                            <li><strong>100GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>10</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <ul class=\"pricing featured\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$69
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Business
                                </div>
                            </li>
                            <li><strong>3</strong> DOMAINS</li>
                            <li><strong>300GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>30</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-default\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$99
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Pro
                                </div>
                            </li>
                            <li><strong>5</strong> DOMAINS</li>
                            <li><strong>500GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>50</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"600ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$199
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Ultra
                                </div>
                            </li>
                            <li><strong>10</strong> DOMAINS</li>
                            <li><strong>1000GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>100</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/pricing.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Pricing Table</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$39
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Starter
                                </div>
                            </li>
                            <li><strong>1</strong> DOMAIN</li>
                            <li><strong>100GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>10</strong> EMAIL ADDRESS</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <ul class=\"pricing featured\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$69
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Business
                                </div>
                            </li>
                            <li><strong>3</strong> DOMAINS</li>
                            <li><strong>300GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>30</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-default\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"400ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$99
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Pro
                                </div>
                            </li>
                            <li><strong>5</strong> DOMAINS</li>
                            <li><strong>500GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>50</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"wow zoomIn\" data-wow-duration=\"400ms\" data-wow-delay=\"600ms\">
                        <ul class=\"pricing\">
                            <li class=\"plan-header\">
                                <div class=\"price-duration\">
                                    <span class=\"price\">
                                        \$199
                                    </span>
                                    <span class=\"duration\">
                                        per month
                                    </span>
                                </div>

                                <div class=\"plan-name\">
                                    Ultra
                                </div>
                            </li>
                            <li><strong>10</strong> DOMAINS</li>
                            <li><strong>1000GB</strong> DISK SPACE</li>
                            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
                            <li>SHARED SSL CERTIFICATE</li>
                            <li><strong>100</strong> EMAIL ADDRESSES</li>
                            <li><strong>24/7</strong> SUPPORT</li>
                            <li class=\"plan-purchase\"><a class=\"btn btn-primary\" href=\"#\">ORDER NOW</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/pricing.htm", "");
    }
}
