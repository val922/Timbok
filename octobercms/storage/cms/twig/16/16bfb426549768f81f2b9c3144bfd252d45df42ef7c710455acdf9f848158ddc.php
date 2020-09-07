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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/onsale.htm */
class __TwigTemplate_20aff9651d0be4f2c0a0e68ef38782371cf281b6cf7361e89cb3316d1535485f extends \Twig\Template
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
        echo "<div class=\"mall-filter mall-filter--on-sale js-mall-filter custom-control custom-checkbox\">
    <input type=\"checkbox\" class=\"mall-input-checkbox custom-control-input\" id=\"mall-on-sale\"
           name=\"filter[on_sale]\"
           value=\"✓\"
           ";
        // line 5
        echo ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "on_sale", [], "any", false, false, false, 5)) ? ("checked") : (""));
        echo "
    >
    <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox custom-control-label font-5\" for=\"mall-on-sale\">
        ";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.onsale_label"]);
        echo "
    </label>
</div>

<!--<div class=\"mall-filter mall-filter--on-sale\">

    <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox js-mall-filter\">
        <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"mall-on-sale\"
               name=\"filter[on_sale]\"
               value=\"✓\"
               ";
        // line 18
        echo ((twig_get_attribute($this->env, $this->source, ($context["filter"] ?? null), "on_sale", [], "any", false, false, false, 18)) ? ("checked") : (""));
        echo "
        >
        ";
        // line 20
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.onsale_label"]);
        echo "
    </label>
</div>-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/onsale.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  62 => 18,  49 => 8,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-filter mall-filter--on-sale js-mall-filter custom-control custom-checkbox\">
    <input type=\"checkbox\" class=\"mall-input-checkbox custom-control-input\" id=\"mall-on-sale\"
           name=\"filter[on_sale]\"
           value=\"✓\"
           {{ filter.on_sale ? 'checked' }}
    >
    <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox custom-control-label font-5\" for=\"mall-on-sale\">
        {{ 'offline.mall::frontend.onsale_label' | trans }}
    </label>
</div>

<!--<div class=\"mall-filter mall-filter--on-sale\">

    <label for=\"mall-on-sale\" class=\"mall-label mall-label--checkbox js-mall-filter\">
        <input type=\"checkbox\" class=\"mall-input-checkbox\" id=\"mall-on-sale\"
               name=\"filter[on_sale]\"
               value=\"✓\"
               {{ filter.on_sale ? 'checked' }}
        >
        {{ 'offline.mall::frontend.onsale_label' | trans }}
    </label>
</div>-->", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/onsale.htm", "");
    }
}
