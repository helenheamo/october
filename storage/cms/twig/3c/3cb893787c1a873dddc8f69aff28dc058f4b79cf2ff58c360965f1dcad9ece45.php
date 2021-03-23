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

/* C:\wamp64\www\twitterPlugIn/themes/vreedom18-bingo/partials/index/blog.htm */
class __TwigTemplate_9a66e9f56f3d743a30955abb0888adfd9b9cecb6e01178d94d766e39710081d4 extends \Twig\Template
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
        $tags = array("set" => 29, "for" => 37, "spaceless" => 40, "if" => 41);
        $filters = array("page" => 42, "theme" => 50, "escape" => 55, "raw" => 62);
        $functions = array("range" => 95);

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for', 'spaceless', 'if'],
                ['page', 'theme', 'escape', 'raw'],
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
        echo "<section class=\"blog\" id=\"blog\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center \">
                    <h2> Latest <span class=\"color\">Posts</span></h2>
                    <div class=\"border\"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus,
                        reprehenderit
                        libero inventore nam.
                    </p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">
            <!-- single blog post -->








                ";
        // line 29
        $context["records"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "records", [], "any", false, false, true, 29);
        // line 30
        $context["displayColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "displayColumn", [], "any", false, false, true, 30);
        // line 31
        $context["noRecordsMessage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "noRecordsMessage", [], "any", false, false, true, 31);
        // line 32
        $context["detailsPage"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsPage", [], "any", false, false, true, 32);
        // line 33
        $context["detailsKeyColumn"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsKeyColumn", [], "any", false, false, true, 33);
        // line 34
        $context["detailsUrlParameter"] = twig_get_attribute($this->env, $this->source, ($context["builderList"] ?? null), "detailsUrlParameter", [], "any", false, false, true, 34);
        // line 35
        echo "
<ul class=\"record-list\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["records"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["record"]) {
            // line 38
            echo "
            ";
            // line 40
            echo "            ";
            ob_start();
            // line 41
            echo "                ";
            if (($context["detailsPage"] ?? null)) {
                // line 42
                echo "                    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(($context["detailsPage"] ?? null), 42, $this->source), [($context["detailsUrlParameter"] ?? null) => twig_get_attribute($this->env, $this->source, $context["record"], ($context["detailsKeyColumn"] ?? null), [], "any", false, false, true, 42)]);
                echo "\">
                ";
            }
            // line 44
            echo "


                <article class=\"col-lg-4 col-md-6\">
                    <div class=\"post-item\">
                        <!-- <div class=\"media-wrapper\">
                            <img loading=\"lazy\" src=\"";
            // line 50
            echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-2.jpg");
            echo "\"
                                alt=\"amazing caves coverimage\" class=\"img-fluid\">
                        </div> -->

                        <div class=\"content\">
                            <h3><a href=\"";
            // line 55
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
            echo "\"> ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "title", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</a></h3>

                            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["record"], "image", [], "any", false, false, true, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 58
                echo "
                            <img src = \"";
                // line 59
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "thumb", [0 => 150, 1 => ($context["auto"] ?? null)], "method", false, false, true, 59), 59, $this->source), "html", null, true);
                echo "\">
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "                      
                                ";
            // line 62
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 62), 62, $this->source);
            echo "




                            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://yoururl.com\" data-text=\"";
            // line 67
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["record"], "description", [], "any", false, false, true, 67), 67, $this->source);
            echo "\">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</div>

                    </div>
                </article>






                ";
            // line 79
            if (($context["detailsPage"] ?? null)) {
                // line 80
                echo "                    </a>
                ";
            }
            // line 82
            echo "            ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 83
            echo "
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 85
            echo "        <li class=\"no-data\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["noRecordsMessage"] ?? null), 85, $this->source), "html", null, true);
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['record'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "</ul>

";
        // line 89
        if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 89) > 1)) {
            // line 90
            echo "    <ul class=\"pagination\">
        ";
            // line 91
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 91) > 1)) {
                // line 92
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 92), "baseFileName", [], "any", false, false, true, 92), 92, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 92) - 1)]);
                echo "\">&larr; Prev</a></li>
        ";
            }
            // line 94
            echo "
        ";
            // line 95
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 95)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 96
                echo "            <li class=\"";
                echo (((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 96) == $context["page"])) ? ("active") : (null));
                echo "\">
                <a href=\"";
                // line 97
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 97), "baseFileName", [], "any", false, false, true, 97), 97, $this->source), [($context["pageParam"] ?? null) => $context["page"]]);
                echo "\">";
                echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed($context["page"], 97, $this->source), "html", null, true);
                echo "</a>
            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "
        ";
            // line 101
            if ((twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "lastPage", [], "any", false, false, true, 101) > twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 101))) {
                // line 102
                echo "            <li><a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 102), "baseFileName", [], "any", false, false, true, 102), 102, $this->source), [($context["pageParam"] ?? null) => (twig_get_attribute($this->env, $this->source, ($context["records"] ?? null), "currentPage", [], "any", false, false, true, 102) + 1)]);
                echo "\">Next &rarr;</a></li>
        ";
            }
            // line 104
            echo "    </ul>
";
        }
        // line 106
        echo "









            <!-- /single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-2.jpg");
        echo "\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"";
        // line 127
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">A Few Moments</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"";
        // line 132
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"";
        // line 142
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/post-3.jpg");
        echo "\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"";
        // line 147
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Hints for Life</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"";
        // line 152
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("single-post");
        echo "\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/blog.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  334 => 152,  326 => 147,  318 => 142,  305 => 132,  297 => 127,  289 => 122,  271 => 106,  267 => 104,  261 => 102,  259 => 101,  256 => 100,  245 => 97,  240 => 96,  236 => 95,  233 => 94,  227 => 92,  225 => 91,  222 => 90,  220 => 89,  216 => 87,  207 => 85,  201 => 83,  198 => 82,  194 => 80,  192 => 79,  177 => 67,  169 => 62,  166 => 61,  158 => 59,  155 => 58,  151 => 57,  144 => 55,  136 => 50,  128 => 44,  122 => 42,  119 => 41,  116 => 40,  113 => 38,  108 => 37,  104 => 35,  102 => 34,  100 => 33,  98 => 32,  96 => 31,  94 => 30,  92 => 29,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"blog\" id=\"blog\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <!-- section title -->
            <div class=\"col-xl-6 col-lg-8\">
                <div class=\"title text-center \">
                    <h2> Latest <span class=\"color\">Posts</span></h2>
                    <div class=\"border\"></div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus facere accusamus,
                        reprehenderit
                        libero inventore nam.
                    </p>
                </div>
            </div>
            <!-- /section title -->
        </div>

        <div class=\"row\">
            <!-- single blog post -->








                {% set records = builderList.records %}
{% set displayColumn = builderList.displayColumn %}
{% set noRecordsMessage = builderList.noRecordsMessage %}
{% set detailsPage = builderList.detailsPage %}
{% set detailsKeyColumn = builderList.detailsKeyColumn %}
{% set detailsUrlParameter = builderList.detailsUrlParameter %}

<ul class=\"record-list\">
    {% for record in records %}

            {# Use spaceless tag to remove spaces inside the A tag. #}
            {% spaceless %}
                {% if detailsPage %}
                    <a href=\"{{ detailsPage|page({ (detailsUrlParameter): attribute(record, detailsKeyColumn) }) }}\">
                {% endif %}



                <article class=\"col-lg-4 col-md-6\">
                    <div class=\"post-item\">
                        <!-- <div class=\"media-wrapper\">
                            <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-2.jpg'|theme }}\"
                                alt=\"amazing caves coverimage\" class=\"img-fluid\">
                        </div> -->

                        <div class=\"content\">
                            <h3><a href=\"{{ 'single-post'|page }}\"> {{ record.title }}</a></h3>

                            {% for img in record.image %}

                            <img src = \"{{img.thumb(150,auto)}}\">
                            {% endfor %}
                      
                                {{record.description|raw}}




                            <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-url=\"http://yoururl.com\" data-text=\"{{record.description|raw}}\">Tweet</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</div>

                    </div>
                </article>






                {% if detailsPage %}
                    </a>
                {% endif %}
            {% endspaceless %}

    {% else %}
        <li class=\"no-data\">{{ noRecordsMessage }}</li>
    {% endfor %}
</ul>

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










            <!-- /single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-2.jpg'|theme }}\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"{{ 'single-post'|page }}\">A Few Moments</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"{{ 'single-post'|page }}\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->

            <!-- single blog post -->
            <article class=\"col-lg-4 col-md-6\">
                <div class=\"post-item\">
                    <div class=\"media-wrapper\">
                        <img loading=\"lazy\" src=\"{{ 'assets/images/blog/post-3.jpg'|theme }}\"
                            alt=\"amazing caves coverimage\" class=\"img-fluid\">
                    </div>

                    <div class=\"content\">
                        <h3><a href=\"{{ 'single-post'|page }}\">Hints for Life</a></h3>
                        <p>
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. 3 wolf moon officia aute, non skateboard dolor brunch.
                        </p>
                        <a class=\"btn btn-main\" href=\"{{ 'single-post'|page }}\">Read more</a>
                    </div>
                </div>
            </article>
            <!-- end single blog post -->
        </div> <!-- end row -->
    </div> <!-- end container -->
</section> <!-- end section -->", "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/blog.htm", "");
    }
}
