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

/* C:\wamp64\www\twitterPlugIn/themes/vreedom18-bingo/partials/index/cta.htm */
class __TwigTemplate_5f4e04396a80fadcc6c54263e60e452054ed1a4d943c8e40280e72ee0804fa3e extends \Twig\Template
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
        $filters = array("page" => 10);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['page'],
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
        echo "<section class=\"call-to-action section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8 text-center\">
                <h2>Let's Create Something Together</h2>
                <p>
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, nisi elit consequat
                    ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.
                </p>
                <a href=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\" class=\"btn btn-main\">Contact Us</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/cta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"call-to-action section\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-xl-6 col-lg-8 text-center\">
                <h2>Let's Create Something Together</h2>
                <p>
                    Proin gravida nibh vel velit auctor aliquet. Aenean sollicudin bibendum auctor, nisi elit consequat
                    ipsum, nesagittis sem nid elit. Duis sed odio sitain elit.
                </p>
                <a href=\"{{ 'contact'|page }}\" class=\"btn btn-main\">Contact Us</a>
            </div>
        </div> <!-- End row -->
    </div> <!-- End container -->
</section> <!-- End section -->", "C:\\wamp64\\www\\twitterPlugIn/themes/vreedom18-bingo/partials/index/cta.htm", "");
    }
}
