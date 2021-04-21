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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/partials/sidebar.htm */
class __TwigTemplate_aebe2713d31c2d9de228b3cd29b705f0bca021a3bb48f1a9d1db3c1e1fe7c26b extends \Twig\Template
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
        $tags = array("for" => 5);
        $filters = array("raw" => 7, "escape" => 9);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['raw', 'escape'],
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
        echo "<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">

<ul>
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 6
            echo "  
            <p class=\"text\">";
            // line 7
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["favorite"], "text_processed", [], "any", false, false, true, 7), 7, $this->source);
            echo "</p>
            <p class=\"author\">
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 9), "profile_image_url_https", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "\"/>
                <span class=\"name\">";
            // line 10
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 10), "name", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
            echo "</span>
                <span class=\"screen_name\">
                    <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, ("http://twitter.com/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 12), "screen_name", [], "any", false, false, true, 12), 12, $this->source)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 12), "screen_name", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "</a>
                </span>
            </p>
     
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</ul>
        <!-- <div class=\"tg-widget\">
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearch\">
                    <fieldset>
                        <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Start Your Search Here\">
                        <button type=\"submit\" class=\"tg-btnsearch\"><i class=\"icon-magnifier\"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Notice Board</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">Adipisicing elit sed dotas eiusmod tempor incididunt utae labore etiat dolore magna aliqua enim ad minim veniam.</a>
                    </li>
                    <li>
                        <a href=\"\">Labore etiat dolore magna aliqua enim ad minim veniam.</a>
                    </li>
                    <li>
                        <a href=\"\">Duis aute irure dolor in reprehenderit.</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetadmissionform\">
            <div class=\"tg-widgetcontent\">
                <h3>Admission Form 2017</h3>
                <div class=\"tg-description\">
                    <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                </div>
                <a class=\"tg-btn tg-btnicon\" href=\"\">
                    <i class=\"fa fa-file-pdf-o\"></i>
                    <span>Download PDF</span>
                </a>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search Course</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-layers\"></i>
                            <span class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                        <a href=\"\">View All Courses</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetdownload\">
            <div class=\"tg-widgettitle\">
                <h3>Downloads</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-paperclip\"></i>
                            <span>Prospectus</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-map-signs\"></i>
                            <span>Admission Guide</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-list-ul\"></i>
                            <span>Merit List 2017</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-calendar-check-o \"></i>
                            <span>Examination Date Sheet</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-bookmark-o\"></i>
                            <span>Examination Guide 2017</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- <div class=\"tg-widget tg-widgetcampuses\">
            <div class=\"tg-widgettitle\">
                <h3>Campuses</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <div id=\"tg-campusslider\" class=\"tg-campusslider owl-carousel tg-campuses\">
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </aside>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/sidebar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 17,  89 => 12,  84 => 10,  80 => 9,  75 => 7,  72 => 6,  68 => 5,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-xs-12 col-sm-4 col-md-3 col-lg-3\">
    <aside id=\"tg-sidebar\" class=\"tg-sidebar\">

<ul>
    {% for favorite in favorites %}
  
            <p class=\"text\">{{ favorite.text_processed|raw }}</p>
            <p class=\"author\">
                <img src=\"{{ favorite.user.profile_image_url_https }}\"/>
                <span class=\"name\">{{ favorite.user.name }}</span>
                <span class=\"screen_name\">
                    <a href=\"{{ 'http://twitter.com/'~favorite.user.screen_name }}\">{{ favorite.user.screen_name }}</a>
                </span>
            </p>
     
    {% endfor %}
</ul>
        <!-- <div class=\"tg-widget\">
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearch\">
                    <fieldset>
                        <input type=\"search\" name=\"search\" class=\"form-control\" placeholder=\"Start Your Search Here\">
                        <button type=\"submit\" class=\"tg-btnsearch\"><i class=\"icon-magnifier\"></i></button>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetnoticeboard\">
            <div class=\"tg-widgettitle\">
                <h3>Notice Board</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">Adipisicing elit sed dotas eiusmod tempor incididunt utae labore etiat dolore magna aliqua enim ad minim veniam.</a>
                    </li>
                    <li>
                        <a href=\"\">Labore etiat dolore magna aliqua enim ad minim veniam.</a>
                    </li>
                    <li>
                        <a href=\"\">Duis aute irure dolor in reprehenderit.</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetadmissionform\">
            <div class=\"tg-widgetcontent\">
                <h3>Admission Form 2017</h3>
                <div class=\"tg-description\">
                    <p>Quistane nostrud exertation ulamco laboris nisi ut aliquip ex ea comodo consequat aute irure dolor.</p>
                </div>
                <a class=\"tg-btn tg-btnicon\" href=\"\">
                    <i class=\"fa fa-file-pdf-o\"></i>
                    <span>Download PDF</span>
                </a>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetsearchcourse\">
            <div class=\"tg-widgettitle\">
                <h3>Search Course</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <form class=\"tg-formtheme tg-formsearchcourse\">
                    <fieldset>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-book\"></i>
                            <input type=\"search\" name=\"keyword\" class=\"form-control\" placeholder=\"Keyword\">
                        </div>
                        <div class=\"tg-inputwithicon\">
                            <i class=\"icon-layers\"></i>
                            <span class=\"tg-select\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">Course Category</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
                        </div>
                        <button type=\"submit\" class=\"tg-btn\">search now</button>
                        <a href=\"\">View All Courses</a>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class=\"tg-widget tg-widgetdownload\">
            <div class=\"tg-widgettitle\">
                <h3>Downloads</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <ul>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-paperclip\"></i>
                            <span>Prospectus</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-map-signs\"></i>
                            <span>Admission Guide</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-list-ul\"></i>
                            <span>Merit List 2017</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-calendar-check-o \"></i>
                            <span>Examination Date Sheet</span>
                        </a>
                    </li>
                    <li>
                        <a href=\"\">
                            <i class=\"fa fa-bookmark-o\"></i>
                            <span>Examination Guide 2017</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div> -->
        <!-- <div class=\"tg-widget tg-widgetcampuses\">
            <div class=\"tg-widgettitle\">
                <h3>Campuses</h3>
            </div>
            <div class=\"tg-widgetcontent\">
                <div id=\"tg-campusslider\" class=\"tg-campusslider owl-carousel tg-campuses\">
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class=\"item\">
                        <div class=\"tg-campus\">
                            <div class=\"tg-mapbox\">
                                <div class=\"tg-campuslocation\"></div>
                                <a class=\"tg-getdirection\" href=\"\">get direction</a>
                            </div>
                            <ul>
                                <li>
                                    <i class=\"icon-location\"></i>
                                    <address>Abc, xyz street London, HG521A</address>
                                </li>
                                <li>
                                    <i class=\"icon-phone-handset\"></i>
                                    <span>0800 - 1234 - 562 - 6</span>
                                </li>
                                <li>
                                    <i class=\"icon-printer\"></i>
                                    <span>+4 1234 567 - 9</span>
                                </li>
                                <li>
                                    <a href=\"mailto:query@domain.com\">
                                        <i class=\"icon-envelope\"></i>
                                        <span>query@domain.com</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"mailto:complaint@domain.com\">
                                        <i class=\"icon-construction\"></i>
                                        <span>complaint@domain.com</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </aside>
</div>", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/partials/sidebar.htm", "");
    }
}
