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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/meta.htm */
class __TwigTemplate_c25bfe18797421300bab5f89478a29d0521c062a3d2edc03264c5991612fb212 extends \Twig\Template
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
        $filters = array("escape" => 4, "theme" => 18);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'theme'],
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "meta_description", [], "any", false, false, true, 4), 4, $this->source), "html", null, true);
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 5), "meta_keywords", [], "any", false, false, true, 5), 5, $this->source), "html", null, true);
        echo "\">
    <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "meta_author", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.transitions.css", 5 => "assets/css/prettyPhoto.css", 6 => "assets/css/main.css"]);
        // line 18
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ico/favicon.ico");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/apple-touch-icon-144-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/apple-touch-icon-114-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/apple-touch-icon-72-precomposed.png");
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("images/ico/apple-touch-icon-57-precomposed.png");
        echo "\">
</head><!--/head-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 27,  103 => 26,  99 => 25,  95 => 24,  91 => 23,  84 => 18,  82 => 10,  75 => 6,  71 => 5,  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
    <meta name=\"keywords\" content=\"{{ this.page.meta_keywords }}\">
    <meta name=\"author\" content=\"{{ this.page.meta_author }}\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Responsive Onepage HTML Template | Multi</title>
    <!-- core CSS -->
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/font-awesome.min.css',
            'assets/css/animate.min.css',
            'assets/css/owl.carousel.css',
            'assets/css/owl.transitions.css',
            'assets/css/prettyPhoto.css',
            'assets/css/main.css',
        ]|theme }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/ico/favicon.ico'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ 'images/ico/apple-touch-icon-144-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ 'images/ico/apple-touch-icon-114-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ 'images/ico/apple-touch-icon-72-precomposed.png'|theme }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ 'images/ico/apple-touch-icon-57-precomposed.png'|theme }}\">
</head><!--/head-->", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/meta.htm", "");
    }
}
