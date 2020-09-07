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

/* /var/www/html/octobercms/themes/ketikidis-emarket/pages/categories.htm */
class __TwigTemplate_e20948e8e394bfe069bede3a3d067bd3e98e2953dc855f9f9dd5ba20e6afdc5b extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("pageHeader/page"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<div class=\"container pb-12 mt-4\">
    <div class=\"row\">
        ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 6
            echo "        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card border-0 mb-7\">
                <a class=\"d-flex\" href=\"/category/";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 8), "html", null, true);
            echo "\">
                    <div class=\"mr-3\">
                        <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 10)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "image", [], "any", false, false, false, 10), "thumb", [0 => 350, 1 => 345, 2 => "crop"], "method", false, false, false, 10), "html", null, true);
            echo "\" width=\"350\" height=\"345\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                    </div>
                    <div class=\"\">
                        <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 13)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "image", [], "any", false, false, false, 13), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 13), "html", null, true);
            echo "\" width=\"175\" height=\"162\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid mb-3\"/>
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, $context["category"], "products", [], "any", false, false, false, 14)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[2] ?? null) : null), "image", [], "any", false, false, false, 14), "thumb", [0 => 175, 1 => 162, 2 => "crop"], "method", false, false, false, 14), "html", null, true);
            echo "\" width=\"175\" height=\"162\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["product"] ?? null), "name", [], "any", false, false, false, 14), "html", null, true);
            echo "\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                    </div>
                </a>
                <div class=\"card-body border border-top-0 mt-n1 py-6 text-center\">
                    <h2 class=\"h5 mb-1\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</h2>
                    <div class=\"font-size-xs font-4 text-muted font-weight-light mb-4\">";
            // line 19
            echo twig_get_attribute($this->env, $this->source, $context["category"], "description", [], "any", false, false, false, 19);
            echo "</div>
                    <a class=\"btn btn-sm btn-outline-primary px-3\" href=\"/category/";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 20), "html", null, true);
            echo "\">Shop&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/pages/categories.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 25,  90 => 20,  86 => 19,  82 => 18,  73 => 14,  67 => 13,  59 => 10,  54 => 8,  50 => 6,  46 => 5,  41 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'pageHeader/page' %}

<div class=\"container pb-12 mt-4\">
    <div class=\"row\">
        {% for category in categories %}
        <div class=\"col-md-4 col-sm-6\">
            <div class=\"card border-0 mb-7\">
                <a class=\"d-flex\" href=\"/category/{{ category.nested_slug }}\">
                    <div class=\"mr-3\">
                        <img src=\"{{ category.products[0].image.thumb(350, 345, 'crop') }}\" width=\"350\" height=\"345\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                    </div>
                    <div class=\"\">
                        <img src=\"{{ category.products[1].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid mb-3\"/>
                        <img src=\"{{ category.products[2].image.thumb(175, 162, 'crop') }}\" width=\"175\" height=\"162\" alt=\"{{ product.name }}\" loading=\"lazy\" class=\"d-block img-fluid\"/>
                    </div>
                </a>
                <div class=\"card-body border border-top-0 mt-n1 py-6 text-center\">
                    <h2 class=\"h5 mb-1\">{{ category.name }}</h2>
                    <div class=\"font-size-xs font-4 text-muted font-weight-light mb-4\">{{ category.description|raw }}</div>
                    <a class=\"btn btn-sm btn-outline-primary px-3\" href=\"/category/{{ category.nested_slug }}\">Shop&nbsp;{{ category.name }}</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/pages/categories.htm", "");
    }
}
