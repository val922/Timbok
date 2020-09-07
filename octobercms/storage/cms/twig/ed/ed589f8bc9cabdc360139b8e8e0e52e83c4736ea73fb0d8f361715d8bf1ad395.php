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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/default.htm */
class __TwigTemplate_d149a0013239d6f0a272dac736e80d3679e0ed6d0d8f2e9c0447e6a7d0513971 extends \Twig\Template
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
        echo "<section class=\"mall-products container pt-4 pb-6\">
    <h2 class=\"h3 font-weight-semibold pb-6 decorated max-w-md mx-auto\"><span>";
        // line 2
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Hot Products"]);
        echo "</span></h2>
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("featuredProducts/entries"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"mall-products container pt-4 pb-6\">
    <h2 class=\"h3 font-weight-semibold pb-6 decorated max-w-md mx-auto\"><span>{{ 'Hot Products'|_ }}</span></h2>
    {% partial 'featuredProducts/entries' %}
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/default.htm", "");
    }
}
