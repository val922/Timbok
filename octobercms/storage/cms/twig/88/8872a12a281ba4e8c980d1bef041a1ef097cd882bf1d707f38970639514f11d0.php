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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/list.htm */
class __TwigTemplate_9c7421d35761a2abd20559f13e8cd3247ea83fcd94e2bd3aa22408ac1a5641a3 extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
            // line 2
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['list_id'] = twig_get_attribute($this->env, $this->source,             // line 3
$context["wishlist"], "hash_id", [], "any", false, false, false, 3)            ;
            $context['__cms_partial_params']['product_id'] = twig_get_attribute($this->env, $this->source,             // line 4
($context["wishlistButtons"] ?? null), "property", [0 => "product"], "method", false, false, false, 4)            ;
            $context['__cms_partial_params']['variant_id'] = twig_get_attribute($this->env, $this->source,             // line 5
($context["wishlistButtons"] ?? null), "property", [0 => "variant"], "method", false, false, false, 5)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wishlistButtons/item"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    ";
            // line 8
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['product_id'] = twig_get_attribute($this->env, $this->source,             // line 9
($context["wishlistButtons"] ?? null), "property", [0 => "product"], "method", false, false, false, 9)            ;
            $context['__cms_partial_params']['variant_id'] = twig_get_attribute($this->env, $this->source,             // line 10
($context["wishlistButtons"] ?? null), "property", [0 => "variant"], "method", false, false, false, 10)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("wishlistButtons/item"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  61 => 9,  58 => 8,  56 => 7,  49 => 5,  47 => 4,  45 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for wishlist in items %}
    {% partial 'wishlistButtons/item'
        list_id=wishlist.hash_id
        product_id=wishlistButtons.property('product')
        variant_id=wishlistButtons.property('variant') %}
{% else %}
    {# always include the \"default\" list if no other lists are available #}
    {% partial 'wishlistButtons/item'
        product_id=wishlistButtons.property('product')
        variant_id=wishlistButtons.property('variant') %}
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistButtons/list.htm", "");
    }
}
