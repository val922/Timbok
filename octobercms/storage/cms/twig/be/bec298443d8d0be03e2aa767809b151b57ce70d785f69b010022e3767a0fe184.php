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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/item.htm */
class __TwigTemplate_6b49aed530ece7255adb47c78ba140351cf9202a95a6ce8435078f036fcff298 extends \Twig\Template
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
        echo "<li class=\"\">
    <a href=\"javascript:;\"
       class=\"mall-wishlist-item btn btn-sm mb-2 mr-2 ";
        // line 3
        echo (((($context["list_id"] ?? null) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 3), "hashId", [], "any", false, false, false, 3))) ? ("btn-primary") : (""));
        echo "\"
       data-request=\"onSelect\"
       data-request-data=\"id: '";
        // line 5
        echo twig_escape_filter($this->env, ($context["list_id"] ?? null), "html", null, true);
        echo "'\"
    >
        <div class=\"mall-wishlist-item__data d-flex align-items-center\">
            <div class=\"mall-wishlist-item__name\">
                ";
        // line 9
        echo twig_escape_filter($this->env, (((isset($context["name"]) || array_key_exists("name", $context))) ? (_twig_default_filter(($context["name"] ?? null), call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.default_name"]))) : (call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.default_name"]))), "html", null, true);
        echo "
            </div>
            <span class=\"mall-wishlist-item__description d-flex justify-content-center align-items-center font-2 font-weight-medium text-primary bg-white rounded-circle w-4 h-4 border ml-2\">
                <span class=\"text-primary\"><!--{ 'offline.mall::frontend.wishlist.count' | transchoice(count | default(0)) }}-->";
        // line 12
        echo twig_escape_filter($this->env, ($context["count"] ?? null), "html", null, true);
        echo "</span>
            </span>
        </div>
        <!--<div class=\"mall-wishlist-item__meta\">
            { (total | default(0)) | money }}
        </div>-->
    </a>
</li>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/item.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 12,  53 => 9,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"\">
    <a href=\"javascript:;\"
       class=\"mall-wishlist-item btn btn-sm mb-2 mr-2 {{ list_id == __SELF__.currentItem.hashId ? 'btn-primary' }}\"
       data-request=\"onSelect\"
       data-request-data=\"id: '{{ list_id }}'\"
    >
        <div class=\"mall-wishlist-item__data d-flex align-items-center\">
            <div class=\"mall-wishlist-item__name\">
                {{ name | default('offline.mall::frontend.wishlist.default_name' | trans) }}
            </div>
            <span class=\"mall-wishlist-item__description d-flex justify-content-center align-items-center font-2 font-weight-medium text-primary bg-white rounded-circle w-4 h-4 border ml-2\">
                <span class=\"text-primary\"><!--{ 'offline.mall::frontend.wishlist.count' | transchoice(count | default(0)) }}-->{{ count }}</span>
            </span>
        </div>
        <!--<div class=\"mall-wishlist-item__meta\">
            { (total | default(0)) | money }}
        </div>-->
    </a>
</li>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/item.htm", "");
    }
}
