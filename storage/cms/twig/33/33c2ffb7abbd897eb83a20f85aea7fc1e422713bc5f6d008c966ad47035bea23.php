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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/home.htm */
class __TwigTemplate_a0cfc544b63e887a26fb96bdb04e1dc915457db9fb89f804ef2febf6b9c486b1 extends \Twig\Template
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
        $tags = array("partial" => 1, "set" => 37, "for" => 45, "spaceless" => 48, "if" => 49);
        $filters = array("theme" => 14, "page" => 50, "escape" => 66, "raw" => 166, "join" => 454, "map" => 454, "trans" => 456, "date" => 457);
        $functions = array("html_limit" => 166, "range" => 194);

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'set', 'for', 'spaceless', 'if'],
                ['theme', 'page', 'escape', 'raw', 'join', 'map', 'trans', 'date'],
                ['html_limit', 'range']
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
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <!-- <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-shortcode tg-welcomeandgreeting\">
                                <figure><img src=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/img-03.jpg");
        echo "\" alt=\"image description\"></figure>
                                <div class=\"tg-shortcodetextbox\">
                                    <h2>Welcome &amp; Greetings!</h2>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris nisi utiata ...</p>
                                    </div>
                                    <span class=\"tg-name\">Prof. Donovan Bradburn</span>
                                    <span class=\"tg-designation\">Vice Chancellor</span>
                                    <div class=\"tg-btnpluslogo\">
                                        <a class=\"tg-btn\" href=\"\">read more</a>
                                        <strong class=\"tg-universitylogo\"><a href=\"\"><img src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/logo2.png");
        echo "\" alt=\"image description\"></a></strong>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-borderheading\">
                                <h2>Latest Events</h2>
                            </div>
                            <div class=\"tg-events\">



                              ";
        // line 37
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 37);
        // line 38
        echo "                              ";
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 38);
        // line 39
        echo "                              ";
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 39);
        // line 40
        echo "                              ";
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 40);
        // line 41
        echo "                              ";
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 41);
        // line 42
        echo "                              ";
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 42);
        // line 43
        echo "

                                  ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 46
            echo "
                                          ";
            // line 48
            echo "                                          ";
            ob_start();
            // line 49
            echo "                                              ";
            if (($context["detailsPage"] ?? null)) {
                // line 50
                echo "                                                  <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 50, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 50)]);
                echo "\">
                                              ";
            }
            // line 52
            if ((twig_get_attribute($this->env, $this->source, $context["record"], "status", [], "any", false, false, true, 52) == "Approved")) {
                // line 53
                echo "                                <article class=\"tg-themepost tg-themepostleftimg\">
                                    <figure class=\"tg-featuredimg\">
                                        <a href=\"\">
                                            <img src=\"";
                // line 56
                echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-01.jpg");
                echo "\" alt=\"image description\">
                                        </a>
                                    </figure>


                                    <div class=\"tg-themepostcontent\">
                                        <ul class=\"tg-matadata\">
                                            <li>
                                                <a href=\"\">
                                                    <i class=\"fa fa-calendar\"></i>
                                                    <span>Campaign started at ";
                // line 66
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "updated_at", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                echo "</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class=\"tg-themeposttitle\">
                                            <h3><a href=\"\">";
                // line 71
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 71), 71, $this->source), "html", null, true);
                echo "</a></h3>
                                        </div>
                                        <div class=\"tg-description\">
                                            <p>";
                // line 74
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
                echo "</p>
                                        </div>
                                        <div class=\"tg-btnsbox\">
                                          <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"";
                // line 77
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 77), 77, $this->source), "html", null, true);
                echo "\">Click To Tweet</a>
                                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                            <!-- <a class=\"tg-btn\" href=\"\">read more</a> -->

                                            <!-- <a class=\"tg-btn\" href=\"\">view all events</a> -->
                                        </div>
                                    </div>


                                </article>
  ";
            }
            // line 88
            echo "                                ";
            if (($context["detailsPage"] ?? null)) {
                // line 89
                echo "                                    </a>
                                ";
            }
            // line 91
            echo "                              ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 92
            echo "
                              ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "                              <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 94, $this->source), "html", null, true);
            echo "</li>
                              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "

                                <div class=\"clearfix\"></div>
                                <div class=\"row\">
                                    <!-- <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-02.jpg");
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
                                                    <h3><a href=\"\">International Conference on Material Science 2017</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->







";
        // line 129
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 129);
        // line 130
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 130);
        // line 131
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 131);
        // line 132
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 132);
        // line 133
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 133);
        // line 134
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 134);
        // line 135
        echo "

    ";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 138
            echo "
            ";
            // line 140
            echo "            ";
            ob_start();
            // line 141
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 142
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 142, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 142)]);
                echo "\">
                ";
            }
            // line 144
            echo "




                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                    <article class=\"tg-themepost tg-themepostleftthumb\">
                        <figure class=\"tg-featuredimg\">
                            <a href=\"\">
                                <img src=\"";
            // line 153
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-02.jpg");
            echo "\" alt=\"image description\">
                            </a>
                        </figure>
                        <div class=\"tg-themepostcontent\">
                            <ul class=\"tg-matadata\">
                                <li>
                                    <a href=\"\">
                                        <i class=\"fa fa-calendar\"></i>
                                        <span>";
            // line 161
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 161), 161, $this->source), "html", null, true);
            echo "</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tg-themeposttitle\">
                                <h3>";
            // line 166
            echo call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 166), 166, $this->source), 60]);
            echo "</h3>
                                <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"";
            // line 167
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "content", [], "any", false, false, true, 167), 167, $this->source), "html", null, true);
            echo "\">Click To Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                            </div>

                        </div>
                    </article>
                </div>




                ";
            // line 178
            if (($context["detailsPage"] ?? null)) {
                // line 179
                echo "                    </a>
                ";
            }
            // line 181
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 182
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 184
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 184, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 186
        echo "

";
        // line 188
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 188) > 1)) {
            // line 189
            echo "    <ul class=\"pagination\">
        ";
            // line 190
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 190) > 1)) {
                // line 191
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 191), "baseFileName", [], "any", false, false, true, 191), 191, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 191) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 193
            echo "
        ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 194)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 195
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 195) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 196
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 196), "baseFileName", [], "any", false, false, true, 196), 196, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 196, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 199
            echo "
        ";
            // line 200
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 200) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 200))) {
                // line 201
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 201), "baseFileName", [], "any", false, false, true, 201), 201, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 201) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 203
            echo "    </ul>
";
        }
        // line 205
        echo "





                                    <!-- <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 215
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-03.jpg");
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
                                                    <h3><a href=\"\">Biggest Reality Virtual University Convocatio Biggest Reality Virtual</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 237
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-04.jpg");
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
                                                    <h3><a href=\"\">Launching Best Concept Motorbike for Abnormal</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 259
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-05.jpg");
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
                                                    <h3><a href=\"\">Result Announcement for Fresh Graduates 2017</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 281
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-06.jpg");
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
                                                    <h3><a href=\"\">Outdoor Dinner with Reputed Prof. Darwin ...</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"";
        // line 303
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/events/img-07.jpg");
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
                                                    <h3><a href=\"\">One Day Exibition at Mall of Dubai</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                        <!-- <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-7\">
                                    <div class=\"tg-glanceatuoeandk\">
                                        <div class=\"tg-borderheading\">
                                            <h2>Glance at UOE&amp;K</h2>
                                        </div>
                                        <ul class=\"tg-gallery\">
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 334
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-00.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 335
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-00.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 340
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-01.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 341
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-01.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 346
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-02.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 347
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-02.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 352
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-03.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 353
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-03.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 358
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-04.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 359
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-04.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 364
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-05.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 365
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-05.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-06.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 371
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-06.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-07.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 377
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-07.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 382
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-08.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 383
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-08.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"";
        // line 388
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-09.jpg");
        echo "\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"";
        // line 389
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/glance/img-09.jpg");
        echo "\" alt=\"image description\">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
                                    <div class=\"tg-widget tg-widgetquicklinks\">
                                        <div class=\"tg-borderheading\">
                                            <h2>Quick Links</h2>
                                        </div>
                                        <div class=\"tg-widgetcontent\">
                                            <ul>
                                                <li><a href=\"\">Downloads Function Form</a></li>
                                                <li><a href=\"\">Admissions Guidline For New Students</a></li>
                                                <li><a href=\"\">UOE&amp;K Online Library</a></li>
                                                <li><a href=\"\">Multimedia and Entertainment</a></li>
                                                <li><a href=\"\">Annual Holiday Trip to Dubai 2017</a></li>
                                                <li><a href=\"\">Student Advisory June 27,2017</a></li>
                                                <li><a href=\"\">Parents Meeting 2017</a></li>
                                                <li><a href=\"\">Overseas &amp; E-Learning</a></li>
                                                <li><a href=\"\">FM Radio/TV</a></li>
                                                <li><a href=\"\">FAQ's</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-latestnews\">
                                <div class=\"tg-borderheading\">
                                    <h2>Latest News</h2>
                                </div>
                                <div id=\"tg-latestnewsslider\" class=\"tg-latestnewsslider owl-carousel tg-posts\">




";
        // line 428
        $context["posts"] = twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "posts", [], "any", false, false, true, 428);
        // line 429
        echo "

    ";
        // line 431
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 432
            echo "        <!-- <li>
            <h3><a href=\"";
            // line 433
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "url", [], "any", false, false, true, 433), 433, $this->source), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 433), 433, $this->source), "html", null, true);
            echo "</a></h3> -->




            <div class=\"item\">
                <article class=\"tg-themepost tg-newspost\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"";
            // line 442
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-05.jpg");
            echo "\" alt=\"image description\">
<!-- <img src=\"";
            // line 443
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["post"], "featured_images", [], "any", false, false, true, 443)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), 443, $this->source), "html", null, true);
            echo "\" alt=\"image description\"> -->
                        </a>
                    </figure>
                    <div class=\"tg-themepostcontent\">
                        <ul class=\"tg-matadata\">
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-calendar\"></i>
                                    <span>
                                      <!-- <p class=\"info\"> -->
                                          ";
            // line 453
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 453), "count", [], "any", false, false, true, 453)) {
                // line 454
                echo "                                              ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 454), 454, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 454), 454, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 454), 454, $this->source)) . "</a>"); }), ", ");
                // line 455
                echo "
                                              ";
                // line 456
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 457
$context["post"], "published_at", [], "any", false, false, true, 457), 457, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>                 // line 458
($context["categoryLinks"] ?? null)]]);
                // line 459
                echo "
                                          ";
            } else {
                // line 461
                echo "                                              ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 462
$context["post"], "published_at", [], "any", false, false, true, 462), 462, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 463
                echo "
                                          ";
            }
            // line 465
            echo "                                      <!-- </p> -->
                                    </span>
                                </a>
                            <!-- </li> -->
                        </ul>
                        <div class=\"tg-themeposttitle\">
                            <h3><a href=\"\">";
            // line 471
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, true, 471), 471, $this->source), "html", null, true);
            echo "</a></h3>
                        </div>
                        <div class=\"tg-description\">
                            <p>";
            // line 474
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "summary", [], "any", false, false, true, 474), 474, $this->source);
            echo " <a href=\"\"> Read More</a></p>
                        </div>
                    </div>
                </article>
            </div>





            <!-- <p class=\"info\">
                ";
            // line 485
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 485), "count", [], "any", false, false, true, 485)) {
                // line 486
                echo "                    ";
                $context["categoryLinks"] = twig_join_filter(twig_array_map($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["post"], "categories", [], "any", false, false, true, 486), 486, $this->source), function ($__c__) use ($context, $macros) { $context["c"] = $__c__; return (((("<a href=\"" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "url", [], "any", false, false, true, 486), 486, $this->source)) . "\">") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["c"] ?? null), "name", [], "any", false, false, true, 486), 486, $this->source)) . "</a>"); }), ", ");
                // line 487
                echo "
                    ";
                // line 488
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 489
$context["post"], "published_at", [], "any", false, false, true, 489), 489, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"])), "categories" =>                 // line 490
($context["categoryLinks"] ?? null)]]);
                // line 491
                echo "
                ";
            } else {
                // line 493
                echo "                    ";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.posted_byline_no_categories", ["date" => twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,                 // line 494
$context["post"], "published_at", [], "any", false, false, true, 494), 494, $this->source), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["rainlab.blog::lang.post.date_format"]))]]);
                // line 495
                echo "
                ";
            }
            // line 497
            echo "            </p> -->


        </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 502
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "noPostsMessage", [], "any", false, false, true, 502), 502, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 504
        echo "
<!--
";
        // line 506
        if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 506) > 1)) {
            // line 507
            echo "    <ul class=\"pagination\">
        ";
            // line 508
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 508) > 1)) {
                // line 509
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 509), "baseFileName", [], "any", false, false, true, 509), 509, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 509) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 509) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 511
            echo "
        ";
            // line 512
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 512)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 513
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 513) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 514
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 514), "baseFileName", [], "any", false, false, true, 514), 514, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 514) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 514, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 517
            echo "
        ";
            // line 518
            if ((twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "lastPage", [], "any", false, false, true, 518) > twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 518))) {
                // line 519
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 519), "baseFileName", [], "any", false, false, true, 519), 519, $this->source), [twig_get_attribute($this->env, $this->source, ($context["blogPosts"] ?? null), "pageParam", [], "any", false, false, true, 519) => (twig_get_attribute($this->env, $this->source, ($context["posts"] ?? null), "currentPage", [], "any", false, false, true, 519) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 521
            echo "    </ul>
";
        }
        // line 522
        echo " -->








                                </div>
                                <!-- <div class=\"tg-btnsbox\">
                                    <a class=\"tg-btn\" href=\"\">view all news</a>
                                </div> -->
                            </div>
                        </section>
                    </div>
                </div>



                ";
        // line 542
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("sidebar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 543
        echo "


                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <section class=\"tg-sectionspace tg-haslayout\">
                        <div class=\"tg-affiliationscertifications\">
                            <!-- <div class=\"tg-borderheading\">
                                <h2>Affiliations / Certifications</h2>
                            </div> -->
                            <div id=\"tg-affiliationscertificationsslider\" class=\"tg-affiliationscertificationsslider owl-carousel\">
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 556
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-01.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 563
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-02.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 570
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-03.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 577
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-04.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 584
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-05.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"";
        // line 591
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/brands/img-06.png");
        echo "\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1015 => 591,  1005 => 584,  995 => 577,  985 => 570,  975 => 563,  965 => 556,  950 => 543,  946 => 542,  924 => 522,  920 => 521,  914 => 519,  912 => 518,  909 => 517,  898 => 514,  893 => 513,  889 => 512,  886 => 511,  880 => 509,  878 => 508,  875 => 507,  873 => 506,  869 => 504,  860 => 502,  851 => 497,  847 => 495,  845 => 494,  843 => 493,  839 => 491,  837 => 490,  836 => 489,  835 => 488,  832 => 487,  829 => 486,  827 => 485,  813 => 474,  807 => 471,  799 => 465,  795 => 463,  793 => 462,  791 => 461,  787 => 459,  785 => 458,  784 => 457,  783 => 456,  780 => 455,  777 => 454,  775 => 453,  762 => 443,  758 => 442,  744 => 433,  741 => 432,  736 => 431,  732 => 429,  730 => 428,  688 => 389,  684 => 388,  676 => 383,  672 => 382,  664 => 377,  660 => 376,  652 => 371,  648 => 370,  640 => 365,  636 => 364,  628 => 359,  624 => 358,  616 => 353,  612 => 352,  604 => 347,  600 => 346,  592 => 341,  588 => 340,  580 => 335,  576 => 334,  542 => 303,  517 => 281,  492 => 259,  467 => 237,  442 => 215,  430 => 205,  426 => 203,  420 => 201,  418 => 200,  415 => 199,  404 => 196,  399 => 195,  395 => 194,  392 => 193,  386 => 191,  384 => 190,  381 => 189,  379 => 188,  375 => 186,  366 => 184,  360 => 182,  357 => 181,  353 => 179,  351 => 178,  337 => 167,  333 => 166,  325 => 161,  314 => 153,  303 => 144,  297 => 142,  294 => 141,  291 => 140,  288 => 138,  283 => 137,  279 => 135,  277 => 134,  275 => 133,  273 => 132,  271 => 131,  269 => 130,  267 => 129,  239 => 104,  229 => 96,  220 => 94,  214 => 92,  211 => 91,  207 => 89,  204 => 88,  190 => 77,  184 => 74,  178 => 71,  170 => 66,  157 => 56,  152 => 53,  150 => 52,  144 => 50,  141 => 49,  138 => 48,  135 => 46,  130 => 45,  126 => 43,  123 => 42,  120 => 41,  117 => 40,  114 => 39,  111 => 38,  109 => 37,  93 => 24,  80 => 14,  66 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'slider' %}

<!--************************************
        Main Start
*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-xs-12 col-sm-8 col-md-9 col-lg-9\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <!-- <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-shortcode tg-welcomeandgreeting\">
                                <figure><img src=\"{{'assets/images/img-03.jpg'|theme}}\" alt=\"image description\"></figure>
                                <div class=\"tg-shortcodetextbox\">
                                    <h2>Welcome &amp; Greetings!</h2>
                                    <div class=\"tg-description\">
                                        <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt labore et dolore amit agna aliqua enimnate minim veniam quis nostrud exercitation ullamco laboris nisi utiata ...</p>
                                    </div>
                                    <span class=\"tg-name\">Prof. Donovan Bradburn</span>
                                    <span class=\"tg-designation\">Vice Chancellor</span>
                                    <div class=\"tg-btnpluslogo\">
                                        <a class=\"tg-btn\" href=\"\">read more</a>
                                        <strong class=\"tg-universitylogo\"><a href=\"\"><img src=\"{{'assets/images/logo2.png'|theme}}\" alt=\"image description\"></a></strong>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-borderheading\">
                                <h2>Latest Events</h2>
                            </div>
                            <div class=\"tg-events\">



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
{% if record.status == \"Approved\" %}
                                <article class=\"tg-themepost tg-themepostleftimg\">
                                    <figure class=\"tg-featuredimg\">
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/events/img-01.jpg'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>


                                    <div class=\"tg-themepostcontent\">
                                        <ul class=\"tg-matadata\">
                                            <li>
                                                <a href=\"\">
                                                    <i class=\"fa fa-calendar\"></i>
                                                    <span>Campaign started at {{record.updated_at}}</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class=\"tg-themeposttitle\">
                                            <h3><a href=\"\">{{record.title}}</a></h3>
                                        </div>
                                        <div class=\"tg-description\">
                                            <p>{{record.content}}</p>
                                        </div>
                                        <div class=\"tg-btnsbox\">
                                          <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"{{record.content}}\">Click To Tweet</a>
                                      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                                            <!-- <a class=\"tg-btn\" href=\"\">read more</a> -->

                                            <!-- <a class=\"tg-btn\" href=\"\">view all events</a> -->
                                        </div>
                                    </div>


                                </article>
  {% endif %}
                                {% if detailsPage %}
                                    </a>
                                {% endif %}
                              {% endspaceless %}

                              {% else %}
                              <li class=\"no-data\">{{ noRecordsMessage }}</li>
                              {% endfor %}


                                <div class=\"clearfix\"></div>
                                <div class=\"row\">
                                    <!-- <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-02.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">International Conference on Material Science 2017</a></h3>
                                                </div>
                                            </div>
                                        </article>
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





                <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                    <article class=\"tg-themepost tg-themepostleftthumb\">
                        <figure class=\"tg-featuredimg\">
                            <a href=\"\">
                                <img src=\"{{'assets/images/events/img-02.jpg'|theme}}\" alt=\"image description\">
                            </a>
                        </figure>
                        <div class=\"tg-themepostcontent\">
                            <ul class=\"tg-matadata\">
                                <li>
                                    <a href=\"\">
                                        <i class=\"fa fa-calendar\"></i>
                                        <span>{{record.title }}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"tg-themeposttitle\">
                                <h3>{{html_limit(record.content,60)|raw}}</h3>
                                <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://tcom.com\" data-text = \"{{record.content}}\">Click To Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
                            </div>

                        </div>
                    </article>
                </div>




                {% if detailsPage %}
                    </a>
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






                                    <!-- <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-03.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">Biggest Reality Virtual University Convocatio Biggest Reality Virtual</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-04.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">Launching Best Concept Motorbike for Abnormal</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-05.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">Result Announcement for Fresh Graduates 2017</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-06.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">Outdoor Dinner with Reputed Prof. Darwin ...</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <div class=\"col-xs-6 col-sm-6 col-md-6 col-lg-4\">
                                        <article class=\"tg-themepost tg-themepostleftthumb\">
                                            <figure class=\"tg-featuredimg\">
                                                <a href=\"\">
                                                    <img src=\"{{'assets/images/events/img-07.jpg'|theme}}\" alt=\"image description\">
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
                                                    <h3><a href=\"\">One Day Exibition at Mall of Dubai</a></h3>
                                                </div>
                                            </div>
                                        </article>
                                    </div> -->
                                </div>
                            </div>
                        </section>
                        <!-- <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"row\">
                                <div class=\"col-xs-12 col-sm-12 col-md-7 col-lg-7\">
                                    <div class=\"tg-glanceatuoeandk\">
                                        <div class=\"tg-borderheading\">
                                            <h2>Glance at UOE&amp;K</h2>
                                        </div>
                                        <ul class=\"tg-gallery\">
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-00.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-00.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-01.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-01.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-02.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-02.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-03.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-03.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-04.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-04.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-05.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-05.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-06.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-06.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-07.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-07.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-08.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-08.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                            <li>
                                                <figure>
                                                    <a class=\"tg-btnview\" href=\"{{'assets/images/glance/img-09.jpg'|theme}}\" data-rel=\"prettyPhoto[glance]\"><i class=\"icon-magnifier\"></i></a>
                                                    <img src=\"{{'assets/images/glance/img-09.jpg'|theme}}\" alt=\"image description\">
                                                </figure>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class=\"col-xs-12 col-sm-12 col-md-5 col-lg-5\">
                                    <div class=\"tg-widget tg-widgetquicklinks\">
                                        <div class=\"tg-borderheading\">
                                            <h2>Quick Links</h2>
                                        </div>
                                        <div class=\"tg-widgetcontent\">
                                            <ul>
                                                <li><a href=\"\">Downloads Function Form</a></li>
                                                <li><a href=\"\">Admissions Guidline For New Students</a></li>
                                                <li><a href=\"\">UOE&amp;K Online Library</a></li>
                                                <li><a href=\"\">Multimedia and Entertainment</a></li>
                                                <li><a href=\"\">Annual Holiday Trip to Dubai 2017</a></li>
                                                <li><a href=\"\">Student Advisory June 27,2017</a></li>
                                                <li><a href=\"\">Parents Meeting 2017</a></li>
                                                <li><a href=\"\">Overseas &amp; E-Learning</a></li>
                                                <li><a href=\"\">FM Radio/TV</a></li>
                                                <li><a href=\"\">FAQ's</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->
                        <section class=\"tg-sectionspace tg-haslayout\">
                            <div class=\"tg-latestnews\">
                                <div class=\"tg-borderheading\">
                                    <h2>Latest News</h2>
                                </div>
                                <div id=\"tg-latestnewsslider\" class=\"tg-latestnewsslider owl-carousel tg-posts\">




{% set posts = blogPosts.posts %}


    {% for post in posts %}
        <!-- <li>
            <h3><a href=\"{{ post.url }}\">{{ post.title }}</a></h3> -->




            <div class=\"item\">
                <article class=\"tg-themepost tg-newspost\">
                    <figure class=\"tg-featuredimg\">
                        <a href=\"\">
                            <img src=\"{{'assets/images/themepost/img-05.jpg'|theme}}\" alt=\"image description\">
<!-- <img src=\"{{post.featured_images[0]}}\" alt=\"image description\"> -->
                        </a>
                    </figure>
                    <div class=\"tg-themepostcontent\">
                        <ul class=\"tg-matadata\">
                            <li>
                                <a href=\"\">
                                    <i class=\"fa fa-calendar\"></i>
                                    <span>
                                      <!-- <p class=\"info\"> -->
                                          {% if post.categories.count %}
                                              {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                                              {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                                                  date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                                                  categories: categoryLinks
                                              }) }}
                                          {% else %}
                                              {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                                                  date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                                              }) }}
                                          {% endif %}
                                      <!-- </p> -->
                                    </span>
                                </a>
                            <!-- </li> -->
                        </ul>
                        <div class=\"tg-themeposttitle\">
                            <h3><a href=\"\">{{ post.title }}</a></h3>
                        </div>
                        <div class=\"tg-description\">
                            <p>{{ post.summary | raw }} <a href=\"\"> Read More</a></p>
                        </div>
                    </div>
                </article>
            </div>





            <!-- <p class=\"info\">
                {% if post.categories.count %}
                    {% set categoryLinks = post.categories | map(c => \"<a href=\\\"#{c.url}\\\">#{c.name}</a>\") | join(', ') %}

                    {{ 'rainlab.blog::lang.post.posted_byline' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans),
                        categories: categoryLinks
                    }) }}
                {% else %}
                    {{ 'rainlab.blog::lang.post.posted_byline_no_categories' | trans({
                        date: post.published_at | date('rainlab.blog::lang.post.date_format' | trans)
                    }) }}
                {% endif %}
            </p> -->


        </li>
    {% else %}
        <li class=\"no-data\">{{ blogPosts.noPostsMessage }}</li>
    {% endfor %}

<!--
{% if posts.lastPage > 1 %}
    <ul class=\"pagination\">
        {% if posts.currentPage > 1 %}
            <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage-1) }) }}\">&larr; Prev</a></li>
        {% endif %}

        {% for page in 1..posts.lastPage %}
            <li class=\"{{ posts.currentPage == page ? 'active' : null }}\">
                <a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): page }) }}\">{{ page }}</a>
            </li>
        {% endfor %}

        {% if posts.lastPage > posts.currentPage %}
            <li><a href=\"{{ this.page.baseFileName | page({ (blogPosts.pageParam): (posts.currentPage+1) }) }}\">Next &rarr;</a></li>
        {% endif %}
    </ul>
{% endif %} -->








                                </div>
                                <!-- <div class=\"tg-btnsbox\">
                                    <a class=\"tg-btn\" href=\"\">view all news</a>
                                </div> -->
                            </div>
                        </section>
                    </div>
                </div>



                {% partial 'sidebar' %}



                <div class=\"col-xs-12 col-sm-12 col-md-12 col-lg-12\">
                    <section class=\"tg-sectionspace tg-haslayout\">
                        <div class=\"tg-affiliationscertifications\">
                            <!-- <div class=\"tg-borderheading\">
                                <h2>Affiliations / Certifications</h2>
                            </div> -->
                            <div id=\"tg-affiliationscertificationsslider\" class=\"tg-affiliationscertificationsslider owl-carousel\">
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-01.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-02.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-03.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-04.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-05.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                                <div class=\"item\">
                                    <figure>
                                        <a href=\"\">
                                            <img src=\"{{'assets/images/brands/img-06.png'|theme}}\" alt=\"image description\">
                                        </a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/home.htm", "");
    }
}
