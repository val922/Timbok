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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/contents.htm */
class __TwigTemplate_9a56ac0db464bc20bb30cd1a2404dfc4e7de50aa9a89652b71fa2c006c6d7b17 extends \Twig\Template
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
        echo "<div class=\"mall-wishlists-manager__header\">
    <form class=\"mall-wishlists-manager__form d-flex justify-content-between align-items-center my-6\">
        <div class=\"flex-grow-1 mr-6\">
            <input type=\"text\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 4), "html", null, true);
        echo "\" name=\"name\" class=\"mall-wishlists-manager__input font-6 py-2 w-100 hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom\">
            <input type=\"hidden\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "hashId", [], "any", false, false, false, 5), "html", null, true);
        echo "\" name=\"id\">
        </div>
        <div class=\"d-flex\">
            <button class=\"mall-btn mall-wishlists-manager__action-button btn btn-block btn-outline-primary btn-sm mr-2\"
                    data-request=\"onRename\"
                    data-attach-loading
                    data-request-flash
                    data-request-validate>
                ";
        // line 13
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.rename"]);
        echo "
            </button>
            <button class=\"mall-btn mall-wishlists-manager__action-button btn btn-block btn-outline-danger btn-sm mt-0\"
                    data-request=\"onDelete\"
                    data-request-confirm=\"";
        // line 17
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.confirm"]);
        echo "\"
                    data-attach-loading
                    data-request-flash
                    data-request-validate>
                <i data-feather=\"trash-2\"></i>
            </button>
        </div>
    </form>

</div>

<div class=\"mall-wishlists-manager__well\">
    ";
        // line 29
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::cart")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 30
        echo "</div>
<hr class=\"mt-3 pb-3\">
";
        // line 32
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 32), "items", [], "any", false, false, false, 32), "count", [], "any", false, false, false, 32) > 0)) {
            // line 33
            echo "<div class=\"mall-wishlists-manager__actions text-sm-right\">
    ";
            // line 34
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "allowPDFDownload", [], "any", false, false, false, 34)) {
                // line 35
                echo "    <a class=\"mall-btn mall-btn--primary btn btn-sm px-8 btn-outline-warning btn-icon-right\"
       href=\"?download=";
                // line 36
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 36), "hashId", [], "any", false, false, false, 36), "html", null, true);
                echo "\"
        target=\"_blank\">
        <span>";
                // line 38
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists.pdf_download"]);
                echo " <i data-feather=\"chevron-right\"></i></span>
    </a>
    ";
            }
            // line 41
            echo "    <button class=\"mall-btn--primary btn btn-sm px-8 btn-primary btn-icon-right\"
            data-request=\"onAddToCart\"
            data-request-data=\"id: '";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 43), "hashId", [], "any", false, false, false, 43), "html", null, true);
            echo "'\"
            data-attach-loading
            data-request-flash
            data-request-validate>
        <span>";
            // line 47
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists.addtocart"]);
            echo " <i data-feather=\"chevron-right\"></i></span>
    </button>
</div>
";
        }
        // line 51
        echo "
<script>
    \$(function () {
        \$('.js-mall-quantity').on('change', function () {
            \$.request('";
        // line 55
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onUpdateQuantity', {
                data: {item_id: this.dataset.id, id: '";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 56), "hashId", [], "any", false, false, false, 56), "html", null, true);
        echo "', quantity: this.value},
                loading: \$.oc.stripeLoadIndicator,
            })
        });
        \$('.js-mall-remove-product').on('click', function (e) {
            e.preventDefault()
            \$.request('";
        // line 62
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRemove', {
                data: {item_id: this.dataset.id, id: '";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 63), "hashId", [], "any", false, false, false, 63), "html", null, true);
        echo "'},
                loading: \$.oc.stripeLoadIndicator,
                confirm: '";
        // line 65
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.confirm"]);
        echo "',
                success: function (data) {
                    this.success(data)
                    \$.publish('mall.wishlist.productRemoved', data);
                }
            })
        });
    })
    
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/contents.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 65,  149 => 63,  145 => 62,  136 => 56,  132 => 55,  126 => 51,  119 => 47,  112 => 43,  108 => 41,  102 => 38,  97 => 36,  94 => 35,  92 => 34,  89 => 33,  87 => 32,  83 => 30,  79 => 29,  64 => 17,  57 => 13,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-wishlists-manager__header\">
    <form class=\"mall-wishlists-manager__form d-flex justify-content-between align-items-center my-6\">
        <div class=\"flex-grow-1 mr-6\">
            <input type=\"text\" value=\"{{ item.name }}\" name=\"name\" class=\"mall-wishlists-manager__input font-6 py-2 w-100 hover:border-primary border-top-0 border-left-0 border-right-0 border-bottom\">
            <input type=\"hidden\" value=\"{{ item.hashId }}\" name=\"id\">
        </div>
        <div class=\"d-flex\">
            <button class=\"mall-btn mall-wishlists-manager__action-button btn btn-block btn-outline-primary btn-sm mr-2\"
                    data-request=\"onRename\"
                    data-attach-loading
                    data-request-flash
                    data-request-validate>
                {{ 'offline.mall::frontend.wishlist.rename' | trans }}
            </button>
            <button class=\"mall-btn mall-wishlists-manager__action-button btn btn-block btn-outline-danger btn-sm mt-0\"
                    data-request=\"onDelete\"
                    data-request-confirm=\"{{ 'offline.mall::frontend.confirm' | trans }}\"
                    data-attach-loading
                    data-request-flash
                    data-request-validate>
                <i data-feather=\"trash-2\"></i>
            </button>
        </div>
    </form>

</div>

<div class=\"mall-wishlists-manager__well\">
    {% partial __SELF__ ~ '::cart' %}
</div>
<hr class=\"mt-3 pb-3\">
{% if __SELF__.currentItem.items.count > 0 %}
<div class=\"mall-wishlists-manager__actions text-sm-right\">
    {% if __SELF__.allowPDFDownload %}
    <a class=\"mall-btn mall-btn--primary btn btn-sm px-8 btn-outline-warning btn-icon-right\"
       href=\"?download={{ __SELF__.currentItem.hashId }}\"
        target=\"_blank\">
        <span>{{ 'offline.mall::frontend.wishlists.pdf_download' | trans }} <i data-feather=\"chevron-right\"></i></span>
    </a>
    {% endif %}
    <button class=\"mall-btn--primary btn btn-sm px-8 btn-primary btn-icon-right\"
            data-request=\"onAddToCart\"
            data-request-data=\"id: '{{ __SELF__.currentItem.hashId }}'\"
            data-attach-loading
            data-request-flash
            data-request-validate>
        <span>{{ 'offline.mall::frontend.wishlists.addtocart' | trans }} <i data-feather=\"chevron-right\"></i></span>
    </button>
</div>
{% endif %}

<script>
    \$(function () {
        \$('.js-mall-quantity').on('change', function () {
            \$.request('{{ __SELF__ }}::onUpdateQuantity', {
                data: {item_id: this.dataset.id, id: '{{ __SELF__.currentItem.hashId }}', quantity: this.value},
                loading: \$.oc.stripeLoadIndicator,
            })
        });
        \$('.js-mall-remove-product').on('click', function (e) {
            e.preventDefault()
            \$.request('{{ __SELF__ }}::onRemove', {
                data: {item_id: this.dataset.id, id: '{{ __SELF__.currentItem.hashId }}'},
                loading: \$.oc.stripeLoadIndicator,
                confirm: '{{ 'offline.mall::frontend.confirm' | trans }}',
                success: function (data) {
                    this.success(data)
                    \$.publish('mall.wishlist.productRemoved', data);
                }
            })
        });
    })
    
    // Feather Icons
    \$( document ).ready(function() {
        feather.replace()
    });
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/contents.htm", "");
    }
}
