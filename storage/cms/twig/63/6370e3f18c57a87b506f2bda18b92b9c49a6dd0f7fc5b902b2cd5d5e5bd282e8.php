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

/* C:\wamp64\www\tcom/plugins/rainlab/twitter/components/favorites/default.htm */
class __TwigTemplate_341af9892b72e1eb81e9263af37d8a91bc0bcde41212f02bf7b0ba15aec8433b extends \Twig\Template
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
        $tags = array("for" => 2);
        $filters = array("raw" => 4, "escape" => 6);
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
        echo "<ul>
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["favorites"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 3
            echo "        <li>
            <p class=\"text\">";
            // line 4
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["favorite"], "text_processed", [], "any", false, false, true, 4), 4, $this->source);
            echo "</p>
            <p class=\"author\">
                <img src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 6), "profile_image_url_https", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
            echo "\"/>
                <span class=\"name\">";
            // line 7
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 7), "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "</span>
                <span class=\"screen_name\">
                    <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, ("http://twitter.com/" . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 9), "screen_name", [], "any", false, false, true, 9), 9, $this->source)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["favorite"], "user", [], "any", false, false, true, 9), "screen_name", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
            echo "</a>
                </span>
            </p>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['favorite'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\tcom/plugins/rainlab/twitter/components/favorites/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 14,  86 => 9,  81 => 7,  77 => 6,  72 => 4,  69 => 3,  65 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul>
    {% for favorite in favorites %}
        <li>
            <p class=\"text\">{{ favorite.text_processed|raw }}</p>
            <p class=\"author\">
                <img src=\"{{ favorite.user.profile_image_url_https }}\"/>
                <span class=\"name\">{{ favorite.user.name }}</span>
                <span class=\"screen_name\">
                    <a href=\"{{ 'http://twitter.com/'~favorite.user.screen_name }}\">{{ favorite.user.screen_name }}</a>
                </span>
            </p>
        </li>
    {% endfor %}
</ul>", "C:\\wamp64\\www\\tcom/plugins/rainlab/twitter/components/favorites/default.htm", "");
    }
}
