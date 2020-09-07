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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/scripts.htm */
class __TwigTemplate_fc1ec5a610d26de73c892cfc143a74d6e841fb603c8cc120846003c7aec38edd extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script>
        \$(function () {
            var \$body = \$('body');

            \$.subscribe('mall.discount.applied', refreshCart);
            \$.subscribe('mall.shipping.update', refreshCart);
            \$.subscribe('mall.address.update', refreshCart);
            \$.subscribe('mall.cart.paymentMethodChanged', refreshCart);

            function refreshCart () {
                \$.request('";
        // line 12
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRun', {
                    update: {'";
        // line 13
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                })
            }

            \$body.on('change', '.js-mall-quantity', function () {
                \$.request('";
        // line 18
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onUpdateQuantity', {
                    data: {id: this.dataset.id, quantity: this.value},
                    update: {'";
        // line 20
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    flash: true,
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                    },
                    handleFlashMessage: function (message, type) {
                        \$.oc.flashMsg({text: message, class: type})
                    }
                })
            });
            \$body.on('click', '.js-mall-remove-product', function () {
                \$.request('";
        // line 33
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onRemoveProduct', {
                    data: {id: this.dataset.id},
                    update: {'";
        // line 35
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    confirm: '";
        // line 37
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.confirm"]);
        echo "',
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                        \$.publish('mall.cart.productRemoved', data)
                    }
                })
            });
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 1,  94 => 37,  89 => 35,  84 => 33,  68 => 20,  63 => 18,  55 => 13,  51 => 12,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            var \$body = \$('body');

            \$.subscribe('mall.discount.applied', refreshCart);
            \$.subscribe('mall.shipping.update', refreshCart);
            \$.subscribe('mall.address.update', refreshCart);
            \$.subscribe('mall.cart.paymentMethodChanged', refreshCart);

            function refreshCart () {
                \$.request('{{ __SELF__ }}::onRun', {
                    update: {'{{ __SELF__ }}::cart': '.mall-cart'},
                })
            }

            \$body.on('change', '.js-mall-quantity', function () {
                \$.request('{{ __SELF__ }}::onUpdateQuantity', {
                    data: {id: this.dataset.id, quantity: this.value},
                    update: {'{{ __SELF__ }}::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    flash: true,
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                    },
                    handleFlashMessage: function (message, type) {
                        \$.oc.flashMsg({text: message, class: type})
                    }
                })
            });
            \$body.on('click', '.js-mall-remove-product', function () {
                \$.request('{{ __SELF__ }}::onRemoveProduct', {
                    data: {id: this.dataset.id},
                    update: {'{{ __SELF__ }}::cart': '.mall-cart'},
                    loading: \$.oc.stripeLoadIndicator,
                    confirm: '{{ 'offline.mall::frontend.confirm' | trans }}',
                    success: function (data) {
                        this.success(data)
                        \$.publish('mall.cart.update', data)
                        \$.publish('mall.cart.productRemoved', data)
                    }
                })
            });
        })
    </script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cart/scripts.htm", "");
    }
}
