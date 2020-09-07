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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/popup.htm */
class __TwigTemplate_22ac4a86784febf25d9f6a01596aa68e5392bbbf4ec3f5c1a24ab82f3cda8deb extends \Twig\Template
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
        echo "<div class=\"mall-wishlist-button__popup position-relative pointer-events-none opacity-0 transition-20\">
    <div class=\"mall-wishlist-button__popup-inner shadow position-absolute left-0 bottom-0 w-100 overflow-hidden bg-white\">
        <div class=\"mall-wishlists mall-wishlists--height-limited w-100 overflow-auto max-h-sm\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, false, 4)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::list")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "        </div>
        ";
        // line 6
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::add")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/popup.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 7,  50 => 6,  47 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-wishlist-button__popup position-relative pointer-events-none opacity-0 transition-20\">
    <div class=\"mall-wishlist-button__popup-inner shadow position-absolute left-0 bottom-0 w-100 overflow-hidden bg-white\">
        <div class=\"mall-wishlists mall-wishlists--height-limited w-100 overflow-auto max-h-sm\">
            {% partial __SELF__ ~ '::list' items=__SELF__.items %}
        </div>
        {% partial __SELF__ ~ '::add' %}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/popup.htm", "");
    }
}
