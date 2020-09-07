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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/stars.htm */
class __TwigTemplate_06006241096914d2e974381418a1b5bf31ce1bb0abe9ac0856d7b882ba6f63fc extends \Twig\Template
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
        echo "<div class=\"mall-category-review visible ";
        ((($context["variant"] ?? null)) ? (print (twig_escape_filter($this->env, ("mall-category-review--" . ($context["variant"] ?? null)), "html", null, true))) : (print ("")));
        echo "\">
    <div class=\"mall-category-review__rating ";
        // line 2
        echo ((($context["clickable"] ?? null)) ? ("mall-category-review__rating--clickable") : (""));
        echo "\">
        ";
        // line 3
        $context["rating"] = twig_round(($context["rating"] ?? null));
        // line 4
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "            ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['active'] = (($context["rating"] ?? null) >= $context["i"])            ;
            $context['__cms_partial_params']['value'] = $context["i"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("featuredProducts/star"            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 6
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </div>
    <div class=\"mall-category-review__name text-dark font-5\">
        ";
        // line 9
        echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
        echo "
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/stars.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 9,  66 => 7,  60 => 6,  53 => 5,  48 => 4,  46 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"mall-category-review visible {{ variant ? ('mall-category-review--' ~ variant) : '' }}\">
    <div class=\"mall-category-review__rating {{ clickable ? 'mall-category-review__rating--clickable' }}\">
        {% set rating = rating|round %}
        {% for i in range(1, 5) %}
            {% partial 'featuredProducts/star' active=rating >= i value=i %}
        {% endfor %}
    </div>
    <div class=\"mall-category-review__name text-dark font-5\">
        {{ label }}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/featuredProducts/stars.htm", "");
    }
}
