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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/default.htm */
class __TwigTemplate_c8791431503fe190b1999b2e90f748e87de268c81d71ce093bcf103ba8b63d5d extends \Twig\Template
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
        echo "<div class=\"mall-product\">
    <div class=\"container pb-12 mb-sm-6\">
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"row no-gutters\">
                    ";
        // line 6
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['images'] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "all_images", [], "any", false, false, false, 6)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::images")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "                </div>
            </div>
            <div class=\"col-lg-5 pt-6 pt-lg-0\">
                ";
        // line 10
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::cart")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "            </div>
        </div>
    </div>
    ";
        // line 14
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::info")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 15
        echo "</div>

";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 18
        echo "<script>
// Smooth Scroll On Archors
\$('a[href*=\"#\"].scroll').on('click', function() {  
\t\$('html, body').animate({scrollTop: \$(this.hash).offset().top - 110}, 1000);
\treturn false;
});
</script>
";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 26
        echo "
";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::scripts")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "
";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "dataLayer", [], "any", false, false, false, 29)) {
            // line 30
            echo "    ";
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::datalayer")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 30,  94 => 29,  91 => 28,  87 => 27,  84 => 26,  82 => 17,  73 => 18,  71 => 17,  67 => 15,  63 => 14,  58 => 11,  54 => 10,  49 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-product\">
    <div class=\"container pb-12 mb-sm-6\">
        <div class=\"row\">
            <div class=\"col-lg-7\">
                <div class=\"row no-gutters\">
                    {% partial __SELF__ ~ '::images' images=item.all_images %}
                </div>
            </div>
            <div class=\"col-lg-5 pt-6 pt-lg-0\">
                {% partial __SELF__ ~ '::cart' %}
            </div>
        </div>
    </div>
    {% partial __SELF__ ~ '::info' %}
</div>

{% put scripts %}
<script>
// Smooth Scroll On Archors
\$('a[href*=\"#\"].scroll').on('click', function() {  
\t\$('html, body').animate({scrollTop: \$(this.hash).offset().top - 110}, 1000);
\treturn false;
});
</script>
{% endput %}

{% partial __SELF__ ~ '::scripts' %}

{% if __SELF__.dataLayer %}
    {% partial __SELF__ ~ '::datalayer' %}
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/default.htm", "");
    }
}
