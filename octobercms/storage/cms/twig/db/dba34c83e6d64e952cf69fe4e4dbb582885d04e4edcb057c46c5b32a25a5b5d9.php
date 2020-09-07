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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/site/loader.htm */
class __TwigTemplate_d8f89cf52a70a8627eaf7140ecdcb9a26e5aa42d00890a60f2eb46aa3f66728e extends \Twig\Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"loader position-fixed inset-0 w-100 h-100 bg-white-75 z-100\">
    <div class=\"d-flex justify-content-center align-items-center h-100\">
        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\" xmlns=\"http://www.w3.org/2000/svg\" stroke=\"#333\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(1 1)\" stroke-width=\"2\">
                    <circle stroke-opacity=\".5\" cx=\"18\" cy=\"18\" r=\"18\"/>
                    <path d=\"M36 18c0-9.94-8.06-18-18-18\">
                        <animateTransform
                                attributeName=\"transform\"
                                type=\"rotate\"
                                from=\"0 18 18\"
                                to=\"360 18 18\"
                                dur=\"1s\"
                                repeatCount=\"indefinite\"/>
                    </path>
                </g>
            </g>
        </svg>
    </div>
</div>

";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 23
        echo "<script>
\$(window).on('load', function() {
    \$(\".loader\").fadeOut()
});
</script>
";
        // line 22
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/loader.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 22,  62 => 23,  60 => 22,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"loader position-fixed inset-0 w-100 h-100 bg-white-75 z-100\">
    <div class=\"d-flex justify-content-center align-items-center h-100\">
        <svg width=\"38\" height=\"38\" viewBox=\"0 0 38 38\" xmlns=\"http://www.w3.org/2000/svg\" stroke=\"#333\">
            <g fill=\"none\" fill-rule=\"evenodd\">
                <g transform=\"translate(1 1)\" stroke-width=\"2\">
                    <circle stroke-opacity=\".5\" cx=\"18\" cy=\"18\" r=\"18\"/>
                    <path d=\"M36 18c0-9.94-8.06-18-18-18\">
                        <animateTransform
                                attributeName=\"transform\"
                                type=\"rotate\"
                                from=\"0 18 18\"
                                to=\"360 18 18\"
                                dur=\"1s\"
                                repeatCount=\"indefinite\"/>
                    </path>
                </g>
            </g>
        </svg>
    </div>
</div>

{% put scripts %}
<script>
\$(window).on('load', function() {
    \$(\".loader\").fadeOut()
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/loader.htm", "");
    }
}
