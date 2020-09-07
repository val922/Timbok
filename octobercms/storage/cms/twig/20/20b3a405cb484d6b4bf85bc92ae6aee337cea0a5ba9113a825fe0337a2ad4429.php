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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/clearfilter.htm */
class __TwigTemplate_9f85d186d553dc0a2907c2c94b8f1bcf3caa8c5eae80a2403eedea478711ba0f extends \Twig\Template
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
        echo "<div class=\"mall-property__clear-filter font-3 position-absolute top-0 bg-white right-0 pl-5\">
    <a class=\"js-mall-clear-filter text-muted hover:text-primary transition-20\"
       href=\"javascript:;\"
       data-filter=\"";
        // line 4
        echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
        echo "\"
       style=\"";
        // line 5
        if ( !(($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["filter"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["id"] ?? null)] ?? null) : null)) {
            echo "display: none";
        }
        echo "\">
        ";
        // line 6
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.reset.filter"]);
        echo "
    </a>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/clearfilter.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-property__clear-filter font-3 position-absolute top-0 bg-white right-0 pl-5\">
    <a class=\"js-mall-clear-filter text-muted hover:text-primary transition-20\"
       href=\"javascript:;\"
       data-filter=\"{{ id }}\"
       style=\"{% if not filter[id] %}display: none{% endif %}\">
        {{ 'offline.mall::frontend.reset.filter' | trans }}
    </a>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/clearfilter.htm", "");
    }
}
