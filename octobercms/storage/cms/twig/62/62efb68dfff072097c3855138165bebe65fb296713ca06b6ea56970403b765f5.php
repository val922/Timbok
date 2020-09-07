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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/add.htm */
class __TwigTemplate_2c505be6339c83a826b56861984042a5360d5abc3295464f41c3edda24413001 extends \Twig\Template
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
        echo "<div class=\"mall-wishlist-button__new d-block position-relative p-4\">
    <input type=\"text\" class=\"mall-wishlist-button__name-input text-center w-100 d-block form-control hover:border-primary\" placeholder = '";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create"]);
        echo "'>
    <div class=\"mall-wishlist-button__new-label\">
        <!--";
        // line 4
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create"]);
        echo "-->
    </div>
</div>
<script>
    var nameInput = document.querySelector('.mall-wishlist-button__name-input')
    var nameLabel = document.querySelector('.mall-wishlist-button__new-label')
    var inProgress = false
    if (nameInput) {
        nameInput.addEventListener('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault()
                var el = this
                if (inProgress) {
                    return
                }
                inProgress = true
                \$.request('";
        // line 20
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onCreate', {
                    data: {
                        name: this.value,
                        product_id: '";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "product"], "method", false, false, false, 23)], "method", false, false, false, 23), "html", null, true);
        echo "',
                        variant_id: '";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "encode", [0 => twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => "variant"], "method", false, false, false, 24)], "method", false, false, false, 24), "html", null, true);
        echo "'
                    },
                    success: function (data) {
                        this.success(data);
                        el.value = ''
                    },
                    complete: function (data, textStatus, jqXHR) {
                        this.complete(data, textStatus, jqXHR)
                        inProgress = false
                    }
                })
            }
        })
        nameInput.addEventListener('focus', function () {
            nameLabel.style.display = 'none'
            this.placeholder = '";
        // line 39
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create_placeholder"]);
        echo "'
        })
        nameInput.addEventListener('blur', function () {
            if (this.value === '') {
                nameLabel.style.display = 'block'
                this.placeholder = '";
        // line 44
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.create"]);
        echo "'
            }
        })
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/add.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 44,  92 => 39,  74 => 24,  70 => 23,  64 => 20,  45 => 4,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-wishlist-button__new d-block position-relative p-4\">
    <input type=\"text\" class=\"mall-wishlist-button__name-input text-center w-100 d-block form-control hover:border-primary\" placeholder = '{{ 'offline.mall::frontend.wishlist.create' | trans }}'>
    <div class=\"mall-wishlist-button__new-label\">
        <!--{{ 'offline.mall::frontend.wishlist.create' | trans }}-->
    </div>
</div>
<script>
    var nameInput = document.querySelector('.mall-wishlist-button__name-input')
    var nameLabel = document.querySelector('.mall-wishlist-button__new-label')
    var inProgress = false
    if (nameInput) {
        nameInput.addEventListener('keypress', function (e) {
            if (e.keyCode === 13) {
                e.preventDefault()
                var el = this
                if (inProgress) {
                    return
                }
                inProgress = true
                \$.request('{{ __SELF__ }}::onCreate', {
                    data: {
                        name: this.value,
                        product_id: '{{ __SELF__.encode(__SELF__.property('product')) }}',
                        variant_id: '{{ __SELF__.encode(__SELF__.property('variant')) }}'
                    },
                    success: function (data) {
                        this.success(data);
                        el.value = ''
                    },
                    complete: function (data, textStatus, jqXHR) {
                        this.complete(data, textStatus, jqXHR)
                        inProgress = false
                    }
                })
            }
        })
        nameInput.addEventListener('focus', function () {
            nameLabel.style.display = 'none'
            this.placeholder = '{{ 'offline.mall::frontend.wishlist.create_placeholder' | trans }}'
        })
        nameInput.addEventListener('blur', function () {
            if (this.value === '') {
                nameLabel.style.display = 'block'
                this.placeholder = '{{ 'offline.mall::frontend.wishlist.create' | trans }}'
            }
        })
    }
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/add.htm", "");
    }
}
