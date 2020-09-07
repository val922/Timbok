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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/cart-btn.htm */
class __TwigTemplate_30a62cce55624ef2d8870bc9d25c2b9397d9a8e7751d8b8679a74d9d7d0f2f8a extends \Twig\Template
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
        $context["count"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["cart"] ?? null), "cart", [], "any", false, false, false, 1), "products", [], "any", false, false, false, 1), "count", [], "any", false, false, false, 1);
        // line 2
        echo "<li class=\"nav-item position-relative text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-12 w-md-18\" href=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
        echo "\">
\t\t<i class=\"mall-cart-icon d-block mx-auto w-5 h-5 mb-1 ";
        // line 4
        echo (((($context["count"] ?? null) > 0)) ? ("text-danger") : (""));
        echo "\" data-feather=\"shopping-cart\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart"]);
        echo "</span>
\t</a>
\t<span class=\"mall-cart-count d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 w-md-5 h-4 h-md-5 border border-primary position-absolute right-2 top-2 z-10 ";
        // line 7
        echo (((($context["count"] ?? null) < 1)) ? ("invisible") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
</li>

";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 11
        echo "    <script>
        \$(function () {
            \$.subscribe('mall.cart.productAdded', function () {
                \$('.mall-cart-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
    <script>
        \$(function () {
            var baseCount = '";
        // line 20
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "';
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.cart.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/cart-btn.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 10,  76 => 20,  65 => 11,  63 => 10,  55 => 7,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set count = cart.cart.products.count %}
<li class=\"nav-item position-relative text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-12 w-md-18\" href=\"{{ 'cart' | page }}\">
\t\t<i class=\"mall-cart-icon d-block mx-auto w-5 h-5 mb-1 {{ count > 0 ? 'text-danger' : '' }}\" data-feather=\"shopping-cart\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">{{ 'offline.mall::frontend.cart' | trans }}</span>
\t</a>
\t<span class=\"mall-cart-count d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 w-md-5 h-4 h-md-5 border border-primary position-absolute right-2 top-2 z-10 {{ count < 1 ? 'invisible' : '' }}\">{{ count }}</span>
</li>

{% put scripts %}
    <script>
        \$(function () {
            \$.subscribe('mall.cart.productAdded', function () {
                \$('.mall-cart-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
    <script>
        \$(function () {
            var baseCount = '{{ count }}';
            var \$count = \$('.mall-cart-count');
            \$.subscribe('mall.cart.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.cart.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/cart-btn.htm", "");
    }
}
