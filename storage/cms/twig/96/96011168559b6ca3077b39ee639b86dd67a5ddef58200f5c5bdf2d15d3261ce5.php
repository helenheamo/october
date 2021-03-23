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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/services.htm */
class __TwigTemplate_9c59c110ad8af6d011018eb01e0ed35ba82d039c8c7f78ebc48a276f94773f64 extends \Twig\Template
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
        $tags = array("set" => 12, "for" => 35, "spaceless" => 38, "if" => 39);
        $filters = array("page" => 40, "escape" => 52, "raw" => 53);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['page', 'escape', 'raw'],
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
                <h2 class=\"section-title text-center wow fadeInDown\">Click to Tweet</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>






";
        // line 12
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 12);
        // line 13
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 13);
        // line 14
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 14);
        // line 15
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 15);
        // line 16
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 16);
        // line 17
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 17);
        // line 18
        echo "
















                            ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 36
            echo "
                                    ";
            // line 38
            echo "                                    ";
            ob_start();
            // line 39
            echo "                                        ";
            if (($context["detailsPage"] ?? null)) {
                // line 40
                echo "                                            <!-- <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 40, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 40)]);
                echo "\"> -->
                                        ";
            }
            // line 42
            echo "
                                        <div class=\"row\">
                                            <div class=\"features\">
                                                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                                                    <div class=\"media service-box\">
                                                        <div class=\"pull-left\">
                                                            <i class=\"fa fa-twitter\"></i>
                                                        </div>

                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">  ";
            // line 52
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "</h4>
                                            <p>";
            // line 53
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 53), 53, $this->source);
            echo "</p>
                                            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"";
            // line 54
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 54), 54, $this->source), "html", null, true);
            echo "\">Tweet</a>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                        </div>

                                      </div>
                                  </div>

                                        ";
            // line 61
            if (($context["detailsPage"] ?? null)) {
                // line 62
                echo "                                            <!-- </a> -->
                                        ";
            }
            // line 64
            echo "                                    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 65
            echo "
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "                                <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 67, $this->source), "html", null, true);
            echo "</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "

                </div>
            </div><!--/.row-->
      <!--/.container-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/services.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  171 => 67,  165 => 65,  162 => 64,  158 => 62,  156 => 61,  146 => 54,  142 => 53,  138 => 52,  126 => 42,  120 => 40,  117 => 39,  114 => 38,  111 => 36,  106 => 35,  87 => 18,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Click to Tweet</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>






{% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

















                            {% for record in records %}

                                    {# Use spaceless tag to remove spaces inside the A tag. #}
                                    {% spaceless %}
                                        {% if detailsPage %}
                                            <!-- <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"> -->
                                        {% endif %}

                                        <div class=\"row\">
                                            <div class=\"features\">
                                                <div class=\"col-md-4 col-sm-6 wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                                                    <div class=\"media service-box\">
                                                        <div class=\"pull-left\">
                                                            <i class=\"fa fa-twitter\"></i>
                                                        </div>

                                        <div class=\"media-body\">
                                            <h4 class=\"media-heading\">  {{ record.title }}</h4>
                                            <p>{{record.description|raw}}</p>
                                            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"{{record.description}}\">Tweet</a>
                                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                        </div>

                                      </div>
                                  </div>

                                        {% if detailsPage %}
                                            <!-- </a> -->
                                        {% endif %}
                                    {% endspaceless %}

                            {% else %}
                                <li class=\"no-data\">{{ noRecordsMessage }}</li>
                            {% endfor %}


                </div>
            </div><!--/.row-->
      <!--/.container-->", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/services.htm", "");
    }
}
