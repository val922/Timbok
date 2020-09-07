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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/products/image.htm */
class __TwigTemplate_d68fad1feb1d36dd8d57795a1aa82d7a6a596ba13b9b461782d29ea9d9c795fe extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1) > 1)) {
            // line 2
            echo "<div class=\"slider-for\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 4
                echo "    <a href=\"";
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(($context["productPage"] ?? null), ["slug" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "slug", [], "any", false, false, false, 4), "variant" => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "variantHashId", [], "any", false, false, false, 4)]);
                echo "\" data-mall-item-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "prefixedId", [], "any", false, false, false, 4), "html", null, true);
                echo "\" class=\"\">
        <img src=\"";
                // line 5
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 360, 1 => 450, 2 => "crop"], "method", false, false, false, 5), "html", null, true);
                echo "\" width=\"360\" height=\"450\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 5), "html", null, true);
                echo "\" class=\"card-img-top w-100 img-fluid\"/>
    </a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "</div><!-- slider-nav.// -->
<div class=\"slider-nav position-absolute left-0 right-0 bottom-n4 bottom-n3 opacity-0 invisible group-hover:opacity-100 group-hover:visible z-20 transition-40 mx-5\">
    ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "images", [], "any", false, false, false, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 11
                echo "    <a href=\"javascript:;\" class=\"m-1\">
        <img src=\"";
                // line 12
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 80, 1 => 100, 2 => "crop"], "method", false, false, false, 12), "html", null, true);
                echo "\" width=\"80\" height=\"100\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 12), "html", null, true);
                echo "\" loading=\"lazy\" class=\"border border-light img-fluid\"/>
    </a>    
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "</div><!-- slider-nav.// -->
";
        } else {
            // line 17
            echo "<img src=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 17), "thumb", [0 => 360, 1 => 450, 2 => "crop"], "method", false, false, false, 17), "html", null, true);
            echo "\" width=\"360\" height=\"450\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 17), "html", null, true);
            echo "\" loading=\"lazy\" class=\"card-img-top w-100 img-fluid\"/>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  86 => 15,  75 => 12,  72 => 11,  68 => 10,  64 => 8,  53 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if item.images.count > 1 %}
<div class=\"slider-for\">
    {% for image in item.images %}
    <a href=\"{{ productPage|page({slug: item.slug, variant: item.variantHashId}) }}\" data-mall-item-id=\"{{ item.prefixedId }}\" class=\"\">
        <img src=\"{{ image.thumb(360, 450, 'crop') }}\" width=\"360\" height=\"450\" alt=\"{{ image.title }}\" class=\"card-img-top w-100 img-fluid\"/>
    </a>
    {% endfor %}
</div><!-- slider-nav.// -->
<div class=\"slider-nav position-absolute left-0 right-0 bottom-n4 bottom-n3 opacity-0 invisible group-hover:opacity-100 group-hover:visible z-20 transition-40 mx-5\">
    {% for image in item.images %}
    <a href=\"javascript:;\" class=\"m-1\">
        <img src=\"{{ image.thumb(80, 100, 'crop') }}\" width=\"80\" height=\"100\" alt=\"{{ image.title }}\" loading=\"lazy\" class=\"border border-light img-fluid\"/>
    </a>    
    {% endfor %}
</div><!-- slider-nav.// -->
{% else %}
<img src=\"{{ item.image.thumb(360, 450, 'crop') }}\" width=\"360\" height=\"450\" alt=\"{{ item.name }}\" loading=\"lazy\" class=\"card-img-top w-100 img-fluid\"/>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/image.htm", "");
    }
}
