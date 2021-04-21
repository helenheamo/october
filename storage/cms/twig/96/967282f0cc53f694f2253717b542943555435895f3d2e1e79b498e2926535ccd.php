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

/* C:\wamp64\www\tcom/themes/kenshin-kenshinschool/pages/about-us.htm */
class __TwigTemplate_d9f2a4178837798ebcda6a733721d09cb8f96613db22c408c283b8d02f300d90 extends \Twig\Template
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
        $filters = array("theme" => 17);
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
        echo "<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-sm-12\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-detailpage tg-newsdetailpage\">
                            <article class=\"tg-themepost tg-newspost\">
                                <div class=\"tg-themepostcontent\">
                                    <div class=\"tg-themeposttitle\">
                                        <h1>About Us</h1>
                                    </div>
                                </div>
                                <figure class=\"tg-featuredimg\"><img src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/themepost/img-19.jpg");
        echo "\" alt=\"image description\"></figure>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud excitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eufugiat nullation pariatur occaecat cupidatat non proident sunt in culpa qui ” officia deserunt mollit anim id est laboru ” perspiciatis unde omnis iste natus error sita voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam voluptatem quia voluptas.</p>
                                    <blockquote><q>Culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis error sit voluptatem accusantium doloremque.</q></blockquote>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sediata potuia consequuntur magni dolores eos qui rationeluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modiat tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    <p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident suntin culpa qui officia “ deserunt mollit anim id est laborum ” perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudaium totam rem aperiam, eaque ipsa quae ab illo inventor.</p>
                                </div>
                            </article>





                        </div>
                    </div>
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
        return "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/about-us.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 17,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--************************************
\t\t\t\tMain Start
\t\t*************************************-->
<main id=\"tg-main\" class=\"tg-main tg-haslayout\">
    <div class=\"container\">
        <div class=\"row\">
            <div id=\"tg-twocolumns\" class=\"tg-twocolumns\">
                <div class=\"col-sm-12\">
                    <div id=\"tg-content\" class=\"tg-content\">
                        <div class=\"tg-detailpage tg-newsdetailpage\">
                            <article class=\"tg-themepost tg-newspost\">
                                <div class=\"tg-themepostcontent\">
                                    <div class=\"tg-themeposttitle\">
                                        <h1>About Us</h1>
                                    </div>
                                </div>
                                <figure class=\"tg-featuredimg\"><img src=\"{{'assets/images/themepost/img-19.jpg'|theme}}\" alt=\"image description\"></figure>
                                <div class=\"tg-description\">
                                    <p>Consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud excitation ullamco laboris nisi ut aliquip ex ea commodo consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eufugiat nullation pariatur occaecat cupidatat non proident sunt in culpa qui ” officia deserunt mollit anim id est laboru ” perspiciatis unde omnis iste natus error sita voluptatem accusantium doloremque laudantium totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo enim ipsam voluptatem quia voluptas.</p>
                                    <blockquote><q>Culpa qui officia deserunt mollit anim id est laborum perspiciatis unde omnis error sit voluptatem accusantium doloremque.</q></blockquote>
                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sediata potuia consequuntur magni dolores eos qui rationeluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modiat tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    <p>Consequat duis aute irure dolor in reprehenderit voluptate velit esse cillum dolore eu fugiat nulla pariatur occaecat cupidatat non proident suntin culpa qui officia “ deserunt mollit anim id est laborum ” perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudaium totam rem aperiam, eaque ipsa quae ab illo inventor.</p>
                                </div>
                            </article>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<!--************************************
        Main End
*************************************-->", "C:\\wamp64\\www\\tcom/themes/kenshin-kenshinschool/pages/about-us.htm", "");
    }
}
