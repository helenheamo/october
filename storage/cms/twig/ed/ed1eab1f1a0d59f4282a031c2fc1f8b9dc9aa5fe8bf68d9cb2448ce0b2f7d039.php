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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/portfolio.htm */
class __TwigTemplate_e0e9435479492ff96330b20ba1a7660874bc65e3bc0dc2b50704098dda3dce8c extends \Twig\Template
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
        $filters = array("theme" => 19);
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
        echo "<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Works</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"text-center\">
                <ul class=\"portfolio-filter\">
                    <li><a class=\"active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                    <li><a href=\"#\" data-filter=\".creative\">Creative</a></li>
                    <li><a href=\"#\" data-filter=\".corporate\">Corporate</a></li>
                    <li><a href=\"#\" data-filter=\".portfolio\">Portfolio</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class=\"portfolio-items\">
                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/01.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/02.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/03.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/04.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 63
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/05.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 74
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/06.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 78
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 85
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/07.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 89
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/08.jpg");
        echo "\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/portfolio/full.jpg");
        echo "\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/portfolio.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 100,  201 => 96,  191 => 89,  184 => 85,  174 => 78,  167 => 74,  157 => 67,  150 => 63,  140 => 56,  133 => 52,  123 => 45,  116 => 41,  106 => 34,  99 => 30,  89 => 23,  82 => 19,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Our Works</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"text-center\">
                <ul class=\"portfolio-filter\">
                    <li><a class=\"active\" href=\"#\" data-filter=\"*\">All Works</a></li>
                    <li><a href=\"#\" data-filter=\".creative\">Creative</a></li>
                    <li><a href=\"#\" data-filter=\".corporate\">Corporate</a></li>
                    <li><a href=\"#\" data-filter=\".portfolio\">Portfolio</a></li>
                </ul><!--/#portfolio-filter-->
            </div>

            <div class=\"portfolio-items\">
                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/01.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 1</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/02.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 2</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/03.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 3</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/04.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 4</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/05.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/06.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 5</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item creative portfolio\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/07.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 7</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->

                <div class=\"portfolio-item corporate\">
                    <div class=\"portfolio-item-inner\">
                        <img class=\"img-responsive\" src=\"{{ 'assets/images/portfolio/08.jpg'|theme }}\" alt=\"\">
                        <div class=\"portfolio-info\">
                            <h3>Portfolio Item 8</h3>
                            Lorem Ipsum Dolor Sit
                            <a class=\"preview\" href=\"{{ 'assets/images/portfolio/full.jpg'|theme }}\" rel=\"prettyPhoto\"><i class=\"fa fa-eye\"></i></a>
                        </div>
                    </div>
                </div><!--/.portfolio-item-->
            </div>
        </div><!--/.container-->", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/portfolio.htm", "");
    }
}
