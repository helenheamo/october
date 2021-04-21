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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/partials/slider.htm */
class __TwigTemplate_22155e68309546b7fc240878c82044bdccd5ae211d1ddae729fbbd9fae6f81e5 extends \Twig\Template
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
        $tags = array("set" => 30, "for" => 38, "spaceless" => 41, "if" => 42, "component" => 179);
        $filters = array("theme" => 14, "page" => 43, "escape" => 53, "raw" => 106);
        $functions = array("range" => 87);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if', 'component'],
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
        echo "<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"tg-homebannervtwo\">
                <div id=\"tg-homeslider\" class=\"tg-homeslider owl-carousel tg-btnround tg-haslayout\">


                  <!--   <div class=\"item\">
                      <figure>
                          <img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img-04.jpg");
        echo "\" alt=\"image description\">
                          <figcaption class=\"tg-slidercontent\">
                              <div class=\"tg-slidercontentbox\">
                                  <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                  <div class=\"tg-titledescription\">
                                      <h1>Annual Convocation 2017</h1>
                                      <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                  </div>
                              </div>
                          </figcaption>
                      </figure>
                  </div> -->




                    ";
        // line 30
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 30);
        // line 31
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 31);
        // line 32
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 32);
        // line 33
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 33);
        // line 34
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 34);
        // line 35
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 35);
        // line 36
        echo "

    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 39
            echo "
            ";
            // line 41
            echo "            ";
            ob_start();
            // line 42
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 43
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 43, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 43)]);
                echo "\">
                ";
            }
            // line 45
            echo "




                 <div class=\"item\">
                        <figure>
                            <!-- <img src=\"";
            // line 52
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/slider/img-01.jpg");
            echo "\" alt=\"image description\"> -->
                            <img src=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["record"], "images", [], "any", false, false, true, 53), "thumb", [0 => ($context["auto"] ?? null), 1 => 500], "method", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <!-- <a class=\"tg-btn\" href=\"javascript:void(0);\">Tweet</a> -->
                                    <div  class=\"tg-btn\">
                                    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"";
            // line 58
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 58), 58, $this->source), "html", null, true);
            echo "\">Click To Tweet</a>
\t\t\t\t\t\t\t\t\t\t\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</div>
                                    <div class=\"tg-titledescription\">
                                        <h1>";
            // line 62
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 62), 62, $this->source), "html", null, true);
            echo "</h1>
                                        <div class=\"tg-description\">";
            // line 63
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
            echo "</div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>


                ";
            // line 71
            if (($context["detailsPage"] ?? null)) {
                // line 72
                echo "                    </a>
                ";
            }
            // line 74
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 75
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 77, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "

";
        // line 81
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 81) > 1)) {
            // line 82
            echo "
        ";
            // line 83
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 83) > 1)) {
                // line 84
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 84), "baseFileName", [], "any", false, false, true, 84), 84, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 84) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 86
            echo "
        ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 87)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 88
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 88) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 89
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 89), "baseFileName", [], "any", false, false, true, 89), 89, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 89, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
            echo "
        ";
            // line 93
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 93) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 93))) {
                // line 94
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 94), "baseFileName", [], "any", false, false, true, 94), 94, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 94) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 96
            echo "
";
        }
        // line 98
        echo "                </div>
                <!-- <div class=\"tg-noticeboardarea\">
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                         <h3>Twitter Feeds</h3>

    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 105
            echo "
            <p class=\"text\">";
            // line 106
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["favorite"], "text_processed", [], "any", false, false, true, 106), 106, $this->source);
            echo "</p>
            <p class=\"author\">
                <img src=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 108), "profile_image_url_https", [], "any", false, false, true, 108), 108, $this->source), "html", null, true);
            echo "\"/>

                <span class=\"screen_name\">
                    <a href=\"";
            // line 111
            echo twig_escape_filter($this->env, ("http://twitter.com/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 111), "screen_name", [], "any", false, false, true, 111), 111, $this->source)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 111), "screen_name", [], "any", false, false, true, 111), 111, $this->source), "html", null, true);
            echo "</a>
                </span>
            </p>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "



                        </div>
                    </div>

                </div> -->


<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
  <aside id=\"tg-sidebar\" class=\"tg-sidebar\">

                <div class=\"tg-widget tg-widgetcampuses\">
                    <div class=\"tg-widgettitle\">
                        <h3>Twitter Feeds</h3>
                    </div>

                    <div class=\"tg-widgetcontent\">
                        <div id=\"tg-campusslider\" class=\"tg-campusslider owl-carousel tg-campuses\">





  ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 142
            echo "

              <div class=\"item\">
                  <div class=\"tg-campus\">
                      <div class=\"tg-mapbox\">
                          <!-- <div class=\"tg-campuslocation\"></div> -->
                          <!-- <a class=\"tg-getdirection\" href=\"\">get direction</a> -->
                          <p class=\"text\">";
            // line 149
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["favorite"], "text_processed", [], "any", false, false, true, 149), 149, $this->source);
            echo "</p>
                          <!-- <p class=\"author\"> -->
<div class=\"tg-noticeboard hidden-xs\">
                  <figure><img src=\"";
            // line 152
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 152), "profile_image_url_https", [], "any", false, false, true, 152), 152, $this->source), "html", null, true);
            echo "\"/>  </figure><br>
                <span class=\"name\">";
            // line 153
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 153), "name", [], "any", false, false, true, 153), 153, $this->source), "html", null, true);
            echo "</span>
                <br>
                <span class=\"screen_name\">
                    <a href=\"";
            // line 156
            echo twig_escape_filter($this->env, ("http://twitter.com/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 156), "screen_name", [], "any", false, false, true, 156), 156, $this->source)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 156), "screen_name", [], "any", false, false, true, 156), 156, $this->source), "html", null, true);
            echo "</a>
                </span>
            <!-- </p> -->
          </div>

                  </div>

                </div>
              </div>






    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "

  </div>
  </div>

                </div>
                
       ";
        // line 179
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("followButton"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        echo "         
</aside>



</div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/slider.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 179,  373 => 172,  349 => 156,  343 => 153,  339 => 152,  333 => 149,  324 => 142,  320 => 141,  293 => 116,  280 => 111,  274 => 108,  269 => 106,  266 => 105,  262 => 104,  254 => 98,  250 => 96,  244 => 94,  242 => 93,  239 => 92,  228 => 89,  223 => 88,  219 => 87,  216 => 86,  210 => 84,  208 => 83,  205 => 82,  203 => 81,  199 => 79,  190 => 77,  184 => 75,  181 => 74,  177 => 72,  175 => 71,  164 => 63,  160 => 62,  153 => 58,  145 => 53,  141 => 52,  132 => 45,  126 => 43,  123 => 42,  120 => 41,  117 => 39,  112 => 38,  108 => 36,  106 => 35,  104 => 34,  102 => 33,  100 => 32,  98 => 31,  96 => 30,  77 => 14,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tHome Slider Start
\t\t*************************************-->
<div class=\"clearfix\"></div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
            <div class=\"tg-homebannervtwo\">
                <div id=\"tg-homeslider\" class=\"tg-homeslider owl-carousel tg-btnround tg-haslayout\">


                  <!--   <div class=\"item\">
                      <figure>
                          <img src=\"{{ 'assets/images/slider/img-04.jpg'|theme}}\" alt=\"image description\">
                          <figcaption class=\"tg-slidercontent\">
                              <div class=\"tg-slidercontentbox\">
                                  <a class=\"tg-btn\" href=\"javascript:void(0);\">read more</a>
                                  <div class=\"tg-titledescription\">
                                      <h1>Annual Convocation 2017</h1>
                                      <div class=\"tg-description\"><p>Consectetur adipisicing elit sed do eiusmod tempor inci labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris...</p></div>
                                  </div>
                              </div>
                          </figcaption>
                      </figure>
                  </div> -->




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
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}





                 <div class=\"item\">
                        <figure>
                            <!-- <img src=\"{{ 'assets/images/slider/img-01.jpg'|theme}}\" alt=\"image description\"> -->
                            <img src=\"{{ record.images.thumb(auto,500)}}\" alt=\"image description\">
                            <figcaption class=\"tg-slidercontent\">
                                <div class=\"tg-slidercontentbox\">
                                    <!-- <a class=\"tg-btn\" href=\"javascript:void(0);\">Tweet</a> -->
                                    <div  class=\"tg-btn\">
                                    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"{{record.content}}\">Click To Tweet</a>
\t\t\t\t\t\t\t\t\t\t\t\t<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</div>
                                    <div class=\"tg-titledescription\">
                                        <h1>{{record.title}}</h1>
                                        <div class=\"tg-description\">{{record.content}}</div>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>


                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}


{% if records.lastPage > 1 %}

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

{% endif %}
                </div>
                <!-- <div class=\"tg-noticeboardarea\">
                    <div class=\"tg-widget tg-widgetadmissionform\">
                        <div class=\"tg-widgetcontent\">
                         <h3>Twitter Feeds</h3>

    {% for favorite in favorites %}

            <p class=\"text\">{{ favorite.text_processed|raw }}</p>
            <p class=\"author\">
                <img src=\"{{ favorite.user.profile_image_url_https }}\"/>

                <span class=\"screen_name\">
                    <a href=\"{{ 'http://twitter.com/'~favorite.user.screen_name }}\">{{ favorite.user.screen_name }}</a>
                </span>
            </p>

    {% endfor %}




                        </div>
                    </div>

                </div> -->


<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
  <aside id=\"tg-sidebar\" class=\"tg-sidebar\">

                <div class=\"tg-widget tg-widgetcampuses\">
                    <div class=\"tg-widgettitle\">
                        <h3>Twitter Feeds</h3>
                    </div>

                    <div class=\"tg-widgetcontent\">
                        <div id=\"tg-campusslider\" class=\"tg-campusslider owl-carousel tg-campuses\">





  {% for favorite in favorites %}


              <div class=\"item\">
                  <div class=\"tg-campus\">
                      <div class=\"tg-mapbox\">
                          <!-- <div class=\"tg-campuslocation\"></div> -->
                          <!-- <a class=\"tg-getdirection\" href=\"\">get direction</a> -->
                          <p class=\"text\">{{ favorite.text_processed|raw }}</p>
                          <!-- <p class=\"author\"> -->
<div class=\"tg-noticeboard hidden-xs\">
                  <figure><img src=\"{{ favorite.user.profile_image_url_https }}\"/>  </figure><br>
                <span class=\"name\">{{ favorite.user.name }}</span>
                <br>
                <span class=\"screen_name\">
                    <a href=\"{{ 'http://twitter.com/'~favorite.user.screen_name }}\">{{ favorite.user.screen_name }}</a>
                </span>
            <!-- </p> -->
          </div>

                  </div>

                </div>
              </div>






    {% endfor %}


  </div>
  </div>

                </div>
                
       {% component 'followButton' %}         
</aside>



</div>
            </div>
        </div>
    </div>
</div>
<!--************************************
        Home Slider End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/slider.htm", "");
    }
}
