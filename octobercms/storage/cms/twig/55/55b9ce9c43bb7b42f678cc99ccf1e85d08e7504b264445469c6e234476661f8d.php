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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/product.htm */
class __TwigTemplate_49f01db7bcdb0f324e042ebd39ab2f603d1552296471c882e9c42d3111372e40 extends \Twig\Template
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
        echo "<div class=\"py-10\">
    <div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb bg-white align-items-end p-0 font-5\">
\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("index");
        echo "\"><i class=\"w-4\" data-feather=\"home\"></i></a></li>
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 7
            echo "\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "link", [], "any", false, false, false, 7), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 7), "html", null, true);
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "\t\t\t</ol>
\t\t</nav>
\t\t<h1 class=\"font-weight-semibold\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 11), "html", null, true);
        echo "</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">in
\t\t\t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "categories", [], "any", false, false, false, 13));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "\t\t\t";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 14), "html", null, true);
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 14)) {
                echo ",";
            }
            // line 15
            echo "\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 16,  94 => 15,  88 => 14,  71 => 13,  66 => 11,  62 => 9,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"py-10\">
    <div class=\"container\">
\t\t<nav aria-label=\"breadcrumb\">
\t\t\t<ol class=\"breadcrumb bg-white align-items-end p-0 font-5\">
\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"{{ 'index'|page }}\"><i class=\"w-4\" data-feather=\"home\"></i></a></li>
\t\t\t\t{% for breadcrumb in breadcrumbs %}
\t\t\t\t<li class=\"breadcrumb-item\"><a class=\"text-link\" href=\"{{ breadcrumb.link }}\">{{ breadcrumb.text }}</a></li>
\t\t\t\t{% endfor %}
\t\t\t</ol>
\t\t</nav>
\t\t<h1 class=\"font-weight-semibold\">{{ item.name }}</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">in
\t\t\t{% for category in item.categories %}
\t\t\t{{ category.name }}{% if not loop.last %},{% endif %}
\t\t\t{% endfor %}
\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/product.htm", "");
    }
}
