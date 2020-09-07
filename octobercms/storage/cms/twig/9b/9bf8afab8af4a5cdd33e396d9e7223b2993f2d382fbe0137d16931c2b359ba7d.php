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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/list.htm */
class __TwigTemplate_6bfb6d9dd6084b8c6c41f65bf73b4bf4004f8ffc947acd6aceb37ef3ae605dd4 extends \Twig\Template
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
        echo "<ul class=\"d-flex flex-wrap list-unstyled align-items-center font-5\">
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
            // line 3
            echo "    ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['name'] = twig_get_attribute($this->env, $this->source,             // line 4
$context["wishlist"], "name", [], "any", false, false, false, 4)            ;
            $context['__cms_partial_params']['count'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 5
$context["wishlist"], "items", [], "any", false, false, false, 5), "count", [], "any", false, false, false, 5)            ;
            $context['__cms_partial_params']['total'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 6
$context["wishlist"], "totals", [], "any", false, false, false, 6), "totalPostTaxes", [], "any", false, false, false, 6)            ;
            $context['__cms_partial_params']['list_id'] = twig_get_attribute($this->env, $this->source,             // line 7
$context["wishlist"], "hash_id", [], "any", false, false, false, 7)            ;
            $context['__cms_partial_params']['product_id'] = twig_get_attribute($this->env, $this->source,             // line 8
($context["__SELF__"] ?? null), "property", [0 => "product"], "method", false, false, false, 8)            ;
            $context['__cms_partial_params']['variant_id'] = twig_get_attribute($this->env, $this->source,             // line 9
($context["__SELF__"] ?? null), "property", [0 => "variant"], "method", false, false, false, 9)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((            // line 3
($context["__SELF__"] ?? null) . "::item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>

<script>
    var activeClass = 'btn-primary'
    var items = document.querySelectorAll('.mall-wishlist-item')
    Array.prototype.forEach.call(items, function (item) {
        item.addEventListener('click', function () {
            var active = document.querySelector('.' + activeClass)
            if (active) {
                active.classList.remove(activeClass)
            }
            this.classList.add(activeClass)
        })
    })
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/list.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  59 => 3,  57 => 9,  55 => 8,  53 => 7,  51 => 6,  49 => 5,  47 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<ul class=\"d-flex flex-wrap list-unstyled align-items-center font-5\">
{% for wishlist in items %}
    {% partial __SELF__ ~ '::item'
        name=wishlist.name
        count=wishlist.items.count
        total=wishlist.totals.totalPostTaxes
        list_id=wishlist.hash_id
        product_id=__SELF__.property('product')
        variant_id=__SELF__.property('variant') %}
{% endfor %}
</ul>

<script>
    var activeClass = 'btn-primary'
    var items = document.querySelectorAll('.mall-wishlist-item')
    Array.prototype.forEach.call(items, function (item) {
        item.addEventListener('click', function () {
            var active = document.querySelector('.' + activeClass)
            if (active) {
                active.classList.remove(activeClass)
            }
            this.classList.add(activeClass)
        })
    })
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/list.htm", "");
    }
}
