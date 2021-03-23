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

/* C:\wamp64\www\twitterPlugIn/themes/vreedom18-bingo/partials/index/service.htm */
class __TwigTemplate_474ca4bdf30b14aabeaa47fe073ea3b1a5f8808a95296aeb64a0df889b5287fc extends \Twig\Template
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
        $tags = array("set" => 27, "for" => 36, "spaceless" => 39, "if" => 40);
        $filters = array("theme" => 21, "page" => 41, "escape" => 51, "raw" => 52);
        $functions = array("range" => 78);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['theme', 'page', 'escape', 'raw'],
                ['range']
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
        echo "<section class=\"service-2 section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-lg-6\">
                <!-- section title -->


                <div class=\"title text-center\">
                    <h2>Click to Tweet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class=\"row\">

            <!-- <div class=\"col-md-4 text-center d-none d-md-block\">
                <img loading=\"lazy\" src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/about/member.jpg");
        echo "\" class=\"img-fluid inline-block\" alt=\"\">
            </div> -->




            ";
        // line 27
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 27);
        // line 28
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 28);
        // line 29
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 29);
        // line 30
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 30);
        // line 31
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 31);
        // line 32
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 32);
        // line 33
        echo "
<!-- <div class=\"col-md-8\">
    <div class=\"row text-center\"> -->
    ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 37
            echo "
            ";
            // line 39
            echo "            ";
            ob_start();
            // line 40
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 41
                echo "                    <!-- <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 41, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 41)]);
                echo "\"> -->
                ";
            }
            // line 43
            echo "




                                    <div class=\"col-md-6 col-sm-6\">
                                        <div class=\"service-item\">
                                            <!-- <i class=\"tf-ion-ios-alarm-outline\"></i> -->
                                            <h4> ";
            // line 51
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 51), 51, $this->source), "html", null, true);
            echo "</h4>
                                            <p>  ";
            // line 52
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 52), 52, $this->source);
            echo " </P>

                                              <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://yoururl.com\" data-text = \"";
            // line 54
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 54), 54, $this->source);
            echo "\">Tweet</a>
                                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                        </div>

                                    </div>



                ";
            // line 62
            if (($context["detailsPage"] ?? null)) {
                // line 63
                echo "                    <!-- </a> -->
                ";
            }
            // line 65
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 66
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 68
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 68, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "

";
        // line 72
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 72) > 1)) {
            // line 73
            echo "    <ul class=\"pagination\">
        ";
            // line 74
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 74) > 1)) {
                // line 75
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 75), "baseFileName", [], "any", false, false, true, 75), 75, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 75) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 77
            echo "
        ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 78)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 79
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 79) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 80
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 80), "baseFileName", [], "any", false, false, true, 80), 80, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 80, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "
        ";
            // line 84
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 84) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 84))) {
                // line 85
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 85), "baseFileName", [], "any", false, false, true, 85), 85, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 85) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 87
            echo "    </ul>
";
        }
        // line 89
        echo "
</div>
</div>

</section> <!-- End section -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/service.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 89,  235 => 87,  229 => 85,  227 => 84,  224 => 83,  213 => 80,  208 => 79,  204 => 78,  201 => 77,  195 => 75,  193 => 74,  190 => 73,  188 => 72,  184 => 70,  175 => 68,  169 => 66,  166 => 65,  162 => 63,  160 => 62,  149 => 54,  144 => 52,  140 => 51,  130 => 43,  124 => 41,  121 => 40,  118 => 39,  115 => 37,  110 => 36,  105 => 33,  103 => 32,  101 => 31,  99 => 30,  97 => 29,  95 => 28,  93 => 27,  84 => 21,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"service-2 section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">

            <div class=\"col-lg-6\">
                <!-- section title -->


                <div class=\"title text-center\">
                    <h2>Click to Tweet</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Voluptates, earum. </p>
                    <div class=\"border\"></div>
                </div>
                <!-- /section title -->
            </div>
        </div>
        <div class=\"row\">

            <!-- <div class=\"col-md-4 text-center d-none d-md-block\">
                <img loading=\"lazy\" src=\"{{ 'assets/images/about/member.jpg'|theme }}\" class=\"img-fluid inline-block\" alt=\"\">
            </div> -->




            {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<!-- <div class=\"col-md-8\">
    <div class=\"row text-center\"> -->
    {% for record in records %}

            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <!-- <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\"> -->
                {% endif %}





                                    <div class=\"col-md-6 col-sm-6\">
                                        <div class=\"service-item\">
                                            <!-- <i class=\"tf-ion-ios-alarm-outline\"></i> -->
                                            <h4> {{record.title }}</h4>
                                            <p>  {{record.description|raw}} </P>

                                              <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://yoururl.com\" data-text = \"{{record.description|raw}}\">Tweet</a>
                                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                        </div>

                                    </div>



                {% if detailsPage %}
                    <!-- </a> -->
                {% endif %}
            {% endspaceless %}

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}


{% if records.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if records.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..records.lastPage %}
            <li class=\"{{ records.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName|page({ (pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if records.lastPage > records.currentPage %}
            <li><a href=\"{{ this.page.baseFileName|page({ (pageParam): (records.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %}

</div>
</div>

</section> <!-- End section -->", "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/service.htm", "");
    }
}
