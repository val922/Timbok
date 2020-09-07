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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/autocomplete.htm */
class __TwigTemplate_90e0c9d489c1fa4eddd710db246684c0f7fe9e451e792e41c88e7d3018bf5dc3 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["results"] ?? null), "count", [], "any", false, false, false, 1)) {
            // line 2
            echo "<div class=\"w-100 bg-white px-8 py-4 border border-top-0\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, ($context["results"] ?? null), 0, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "autoCompleteResultCount", [], "any", false, false, false, 3)));
            foreach ($context['_seq'] as $context["_key"] => $context["result"]) {
                // line 4
                echo "        ";
                // line 5
                echo "        ";
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['result'] = $context["result"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::searchresult.htm")                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 6
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['result'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "
    ";
            // line 8
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 8)) {
                // line 9
                echo "        <p class=\"ss-show-all-results\">
            <a href=\"";
                // line 10
                echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "searchPage", [], "any", false, false, false, 10));
                echo "?q=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(($context["query"] ?? null), true), "html", null, true);
                echo "\">
                Show all results &raquo;
            </a>
        </p>
    ";
            }
            // line 15
            echo "</div>
";
        } else {
            // line 17
            echo "    ";
            // line 18
            echo "    <p data-control=\"flash-message\" data-interval=\"5\" class=\"warning\">Your search for <strong>";
            echo twig_escape_filter($this->env, ($context["query"] ?? null), "html", null, true);
            echo "</strong> returned no results.</p>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/autocomplete.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  82 => 17,  78 => 15,  68 => 10,  65 => 9,  63 => 8,  60 => 7,  54 => 6,  48 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if results.count %}
<div class=\"w-100 bg-white px-8 py-4 border border-top-0\">
    {% for result in results | slice(0, __SELF__.autoCompleteResultCount) %}
        {# Display results #}
        {% partial __SELF__ ~ '::searchresult.htm' result = result %}
    {% endfor %}

    {% if __SELF__.searchPage %}
        <p class=\"ss-show-all-results\">
            <a href=\"{{ __SELF__.searchPage | page }}?q={{ query | url_encode(true) }}\">
                Show all results &raquo;
            </a>
        </p>
    {% endif %}
</div>
{% else %}
    {# No results found #}
    <p data-control=\"flash-message\" data-interval=\"5\" class=\"warning\">Your search for <strong>{{ query }}</strong> returned no results.</p>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/searchinput/autocomplete.htm", "");
    }
}
