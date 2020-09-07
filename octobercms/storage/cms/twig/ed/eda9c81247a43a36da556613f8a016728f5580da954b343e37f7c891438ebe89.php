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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/product-banner-bottom.htm */
class __TwigTemplate_5c285b06228ca8d773cc4fca18876ee4c17986ac516ed97f176e9125618b6959 extends \Twig\Template
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
        $context["item"] = ($context["shopProductBanner"] ?? null);
        // line 2
        echo "<a class=\"d-block\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 2), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 2)]);
        echo "\" data-mall-item-id=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 2), "html", null, true);
        echo "\">
    <div class=\"bg-secondary\">
        <div class=\"px-4 py-6 text-center\">
            <h4 class=\"font-5 font-weight-normal pt-1 mb-2\">";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 5));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 5), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 5)) {
                echo ", ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</h4>
            <h4 class=\"h5 pb-2\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo "</h4>
            <div class=\"btn btn-primary btn-sm\">Shop now</div>
        </div>
        <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 9), "thumb", [0 => 550, 1 => 560, 2 => "crop"], "method", false, false, false, 9), "html", null, true);
        echo "\" width=\"550\" height=\"560\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "\" loading=\"lazy\" class=\"img-fluid w-100\">
    </div>
</a>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/product-banner-bottom.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 9,  83 => 6,  48 => 5,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set item = shopProductBanner %}
<a class=\"d-block\" href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\">
    <div class=\"bg-secondary\">
        <div class=\"px-4 py-6 text-center\">
            <h4 class=\"font-5 font-weight-normal pt-1 mb-2\">{% for category in item.categories %}{{ category.name }}{% if not loop.last %}, {% endif %}{% endfor %}</h4>
            <h4 class=\"h5 pb-2\">{{ item.name }}</h4>
            <div class=\"btn btn-primary btn-sm\">Shop now</div>
        </div>
        <img src=\"{{ item.image.thumb(550, 560, 'crop') }}\" width=\"550\" height=\"560\" alt=\"{{ item.name }}\" loading=\"lazy\" class=\"img-fluid w-100\">
    </div>
</a>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/widgetBanners/product-banner-bottom.htm", "");
    }
}
