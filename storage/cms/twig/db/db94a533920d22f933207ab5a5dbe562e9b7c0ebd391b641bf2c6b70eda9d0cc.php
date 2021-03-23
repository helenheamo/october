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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/team.htm */
class __TwigTemplate_efea76cf1227bd7df8387a0f25f320734edd1c35a700b17617f30c12d5b6c077 extends \Twig\Template
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
        $tags = array("content" => 86);
        $filters = array("theme" => 11);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
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
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/01.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/02.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/03.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/04.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 86
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/skills.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 87
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 90
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/history.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 91
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 94
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/faqs.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 95
        echo "                </div>

            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 95,  179 => 94,  174 => 91,  170 => 90,  165 => 87,  161 => 86,  137 => 65,  116 => 47,  95 => 29,  74 => 11,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/01.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/02.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/03.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/04.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    {% content 'team/skills.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/history.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/faqs.htm' %}
                </div>

            </div>
        </div>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/team.htm", "");
    }
}
