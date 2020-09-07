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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/wishlists-btn.htm */
class __TwigTemplate_1d7ffc71b1427ea5ee51c0742abc2cc7ed3c713df5b93a6a3a9c4b958e722286 extends \Twig\Template
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
        $context["totalWishlistItems"] = 0;
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["wishlists"] ?? null), "items", [], "any", false, false, false, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
            // line 3
            echo "\t";
            $context["totalWishlistItems"] = (($context["totalWishlistItems"] ?? null) + twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wishlist"], "items", [], "any", false, false, false, 3), "count", [], "any", false, false, false, 3));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "<li class=\"nav-item position-relative text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"";
        // line 6
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wishlists");
        echo "\">
\t\t<i class=\"mall-wishlist-icon d-block mx-auto w-5 h-5 mb-1 ";
        // line 7
        echo ((twig_get_attribute($this->env, $this->source, ($context["wishlists"] ?? null), "hasItems", [], "any", false, false, false, 7)) ? ("text-danger") : (""));
        echo "\" data-feather=\"heart\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists"]);
        echo "</span>
\t</a>
\t<span class=\"mall-wishlist-count d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 w-md-5 h-4 h-md-5 border border-primary position-absolute right-3 top-2 z-10 ";
        // line 10
        echo (((($context["totalWishlistItems"] ?? null) < 1)) ? ("invisible") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, ($context["totalWishlistItems"] ?? null), "html", null, true);
        echo "</span>
</li>

";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 14
        echo "    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
    <script>
        \$(function () {
            var baseCount = '";
        // line 23
        echo twig_escape_filter($this->env, ($context["totalWishlistItems"] ?? null), "html", null, true);
        echo "';
            var \$count = \$('.mall-wishlist-count');
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.wishlist.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
";
        // line 13
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/wishlists-btn.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 13,  87 => 23,  76 => 14,  74 => 13,  66 => 10,  61 => 8,  57 => 7,  53 => 6,  50 => 5,  43 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set totalWishlistItems = 0 %}
{% for wishlist in wishlists.items %}
\t{% set totalWishlistItems = totalWishlistItems + wishlist.items.count %}
{% endfor %}
<li class=\"nav-item position-relative text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"{{ 'wishlists' | page }}\">
\t\t<i class=\"mall-wishlist-icon d-block mx-auto w-5 h-5 mb-1 {{ wishlists.hasItems ? 'text-danger' : '' }}\" data-feather=\"heart\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">{{ 'offline.mall::frontend.wishlists' | trans }}</span>
\t</a>
\t<span class=\"mall-wishlist-count d-flex justify-content-center align-items-center font-1 font-weight-medium text-white bg-primary rounded-circle w-4 w-md-5 h-4 h-md-5 border border-primary position-absolute right-3 top-2 z-10 {{ totalWishlistItems < 1 ? 'invisible' : '' }}\">{{ totalWishlistItems }}</span>
</li>

{% put scripts %}
    <script>
        \$(function () {
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$('.mall-wishlist-icon').css('color', 'hsl(1.7, 76.3%, 53.7%)')
            });
        });
    </script>
    <script>
        \$(function () {
            var baseCount = '{{ totalWishlistItems }}';
            var \$count = \$('.mall-wishlist-count');
            \$.subscribe('mall.wishlist.productAdded', function () {
                \$count.removeClass('invisible').text(++ baseCount).show();
            });
            \$.subscribe('mall.wishlist.productRemoved', function () {
                baseCount --;
                if (baseCount < 0) baseCount = 0;
                \$count.text(baseCount);
            });
        });
    </script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/wishlists-btn.htm", "");
    }
}
