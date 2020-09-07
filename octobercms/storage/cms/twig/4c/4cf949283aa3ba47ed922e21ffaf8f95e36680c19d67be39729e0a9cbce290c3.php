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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/default.htm */
class __TwigTemplate_ac0ad8cc104057383c9b02357e0a9b7dad268942b2add601d7adc3b94c40f01f extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 1)) {
            // line 2
            echo "\t<ul class=\"navbar-nav\">
        ";
            // line 3
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 3)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("mainMenu/items"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    </ul>
";
        }
        // line 6
        echo "
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 8
        echo "<script>
// Dropdown mobile menu
\$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
\tif (!\$(this).next().hasClass('show')) {
\t\t\$(this).parents('.dropdown-menu').first().find('.show').removeClass(\"show\");
\t}
\tvar \$subMenu = \$(this).next(\".dropdown-menu\");
\t\$subMenu.toggleClass('show');

\t\$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
\t\t\$('.dropdown-submenu .show').removeClass(\"show\");
\t});

\treturn false;
});
</script>
";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 7,  56 => 8,  54 => 7,  51 => 6,  47 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if staticMenu.menuItems %}
\t<ul class=\"navbar-nav\">
        {% partial 'mainMenu/items' items=staticMenu.menuItems %}
    </ul>
{% endif %}

{% put scripts %}
<script>
// Dropdown mobile menu
\$('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
\tif (!\$(this).next().hasClass('show')) {
\t\t\$(this).parents('.dropdown-menu').first().find('.show').removeClass(\"show\");
\t}
\tvar \$subMenu = \$(this).next(\".dropdown-menu\");
\t\$subMenu.toggleClass('show');

\t\$(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
\t\t\$('.dropdown-submenu .show').removeClass(\"show\");
\t});

\treturn false;
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/default.htm", "");
    }
}
