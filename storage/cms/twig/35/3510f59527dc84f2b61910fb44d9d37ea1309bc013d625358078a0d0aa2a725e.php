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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/layouts/default.htm */
class __TwigTemplate_ab691d3c67d67bb789f0bb2b592cbfd6311c0534ea05ce8c3358e3b188ab553f extends \Twig\Template
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
        $tags = array("partial" => 3, "content" => 26, "framework" => 105, "scripts" => 106);
        $filters = array("theme" => 95);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['partial', 'content', 'framework', 'scripts'],
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("meta"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "</header><!--/header-->

<section id=\"main-slider\">
    ";
        // line 13
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slides"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 14
        echo "</section>
<!--/#main-slider-->

    <section id=\"services\" >
    ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("services"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "</section><!--/#services-->



<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 26
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("cta.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 27
        echo "        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    ";
        // line 32
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("features"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 33
        echo "</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("cta2"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "        </div>
    </div>
</section>


<section id=\"portfolio\">
    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("portfolio"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "</section><!--/#portfolio-->

<section id=\"about\">
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        ";
        // line 54
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("process.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 55
        echo "    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    ";
        // line 59
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("team"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 60
        echo "</section><!--/#meet-team-->

<section id=\"animated-number\">
    ";
        // line 63
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("facts.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 64
        echo "</section><!--/#animated-number-->

<section id=\"pricing\">
    ";
        // line 67
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pricing"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 68
        echo "</section><!--/#pricing-->

<section id=\"testimonial\">
    ";
        // line 71
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("feedback"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 72
        echo "</section><!--/#testimonial-->

<section id=\"blog\">
    ";
        // line 75
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("blogs"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 76
        echo "</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            ";
        // line 81
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("precontact.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 82
        echo "        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    ";
        // line 87
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("contact"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 88
        echo "</section><!--/#contact-->

<footer id=\"footer\">
    ";
        // line 91
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 97
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 98
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 99
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 102
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 103
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 104
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
";
        // line 105
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 106
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 107
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 107,  299 => 106,  288 => 105,  284 => 104,  280 => 103,  276 => 102,  272 => 101,  268 => 100,  264 => 99,  260 => 98,  256 => 97,  252 => 96,  248 => 95,  243 => 92,  239 => 91,  234 => 88,  230 => 87,  223 => 82,  219 => 81,  212 => 76,  208 => 75,  203 => 72,  199 => 71,  194 => 68,  190 => 67,  185 => 64,  181 => 63,  176 => 60,  172 => 59,  166 => 55,  162 => 54,  156 => 50,  152 => 49,  147 => 46,  143 => 45,  135 => 39,  131 => 38,  124 => 33,  120 => 32,  113 => 27,  109 => 26,  100 => 19,  96 => 18,  90 => 14,  86 => 13,  81 => 10,  77 => 9,  70 => 4,  66 => 3,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}


<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"nav\" %}
</header><!--/header-->

<section id=\"main-slider\">
    {% partial \"slides\" %}
</section>
<!--/#main-slider-->

    <section id=\"services\" >
    {% partial \"services\" %}
</section><!--/#services-->



<section id=\"cta\" class=\"wow fadeIn\">
    <div class=\"container\">
        <div class=\"row\">
            {% content 'cta.htm' %}
        </div>
    </div>
</section><!--/#cta-->

<section id=\"features\">
    {% partial \"features\" %}
</section><!--/#features-->

<section id=\"cta2\">
    <div class=\"container\">
        <div class=\"text-center\">
            {% partial \"cta2\" %}
        </div>
    </div>
</section>


<section id=\"portfolio\">
    {% partial \"portfolio\" %}
</section><!--/#portfolio-->

<section id=\"about\">
    {% partial \"about\" %}
</section><!--/#about-->

<section id=\"work-process\">
    <div class=\"container\">
        {% content 'process.htm' %}
    </div>
</section><!--/#work-process-->

<section id=\"meet-team\">
    {% partial \"team\" %}
</section><!--/#meet-team-->

<section id=\"animated-number\">
    {% content 'facts.htm' %}
</section><!--/#animated-number-->

<section id=\"pricing\">
    {% partial \"pricing\" %}
</section><!--/#pricing-->

<section id=\"testimonial\">
    {% partial \"feedback\" %}
</section><!--/#testimonial-->

<section id=\"blog\">
    {% partial \"blogs\" %}
</section><!--/#blog-->

<section id=\"get-in-touch\">
    <div class=\"container\">
        <div class=\"section-header\">
            {% content 'precontact.htm' %}
        </div>
    </div>
</section><!--/#get-in-touch-->

<section id=\"contact\">
    {% partial \"contact\" %}
</section><!--/#contact-->

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
{% framework extras %}
{% scripts %}

</body>
</html>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/layouts/default.htm", "");
    }
}
