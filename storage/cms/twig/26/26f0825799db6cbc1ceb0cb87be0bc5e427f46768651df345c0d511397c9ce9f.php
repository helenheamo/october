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

/* C:\wamp64\www\twitterPlugIn/themes/jtherczeg-multi/partials/contact.htm */
class __TwigTemplate_15b3e867fcf9590e30f9b28929cdb568371166c8d2c1b34f7d2cc3f5f0c4bb03 extends \Twig\Template
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
        $filters = array();
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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
        echo "<div id=\"google-map\" style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\"></div>
        <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Twitter, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                            </address>

                            <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/contact.htm";
    }

    public function getDebugInfo()
    {
        return array (  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"google-map\" style=\"height:650px\" data-latitude=\"52.365629\" data-longitude=\"4.871331\"></div>
        <div class=\"container-wrapper\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-sm-4 col-sm-offset-8\">
                        <div class=\"contact-form\">
                            <h3>Contact Info</h3>

                            <address>
                              <strong>Twitter, Inc.</strong><br>
                              795 Folsom Ave, Suite 600<br>
                              San Francisco, CA 94107<br>
                              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
                            </address>

                            <form id=\"main-contact-form\" name=\"contact-form\" method=\"post\" action=\"#\">
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Name\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"email\" name=\"email\" class=\"form-control\" placeholder=\"Email\" required>
                                </div>
                                <div class=\"form-group\">
                                    <input type=\"text\" name=\"subject\" class=\"form-control\" placeholder=\"Subject\" required>
                                </div>
                                <div class=\"form-group\">
                                    <textarea name=\"message\" class=\"form-control\" rows=\"8\" placeholder=\"Message\" required></textarea>
                                </div>
                                <button type=\"submit\" class=\"btn btn-primary\">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>", "C:\\wamp64\\www\\twitterPlugIn/themes/jtherczeg-multi/partials/contact.htm", "");
    }
}
