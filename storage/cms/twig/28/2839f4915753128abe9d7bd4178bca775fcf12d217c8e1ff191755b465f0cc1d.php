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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/cta2.htm */
class __TwigTemplate_9f0d58cf08650b84d890757d21e50f607543cb30cbf24287fbc7c8782a2067e2 extends \Twig\Template
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
        $filters = array("theme" => 4);
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
        echo "<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/cta2/cta2-img.png");
        echo "\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/cta2.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 4,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<h2 class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class=\"wow fadeInUp\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\"><a class=\"btn btn-primary btn-lg\" href=\"https://github.com/jtherczeg/multi-theme/archive/master.zip\">Free Download</a></p>
                <img class=\"img-responsive wow fadeIn\" src=\"{{ 'assets/images/cta2/cta2-img.png'|theme }}\" alt=\"\" data-wow-duration=\"300ms\" data-wow-delay=\"300ms\">", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/cta2.htm", "");
    }
}
