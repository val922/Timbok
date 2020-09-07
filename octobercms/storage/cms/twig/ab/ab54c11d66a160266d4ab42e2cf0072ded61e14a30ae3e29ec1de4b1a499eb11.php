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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/category-image.htm */
class __TwigTemplate_0ecfb370fd7e59f5b9e599cec8d32a7f0d21580fb9847eeb9317322e5476b26b extends \Twig\Template
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            if ((call_user_func_array($this->env->getFilter('slug')->getCallable(), [twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "title", [], "any", false, false, false, 1)]) == twig_get_attribute($this->env, $this->source, $context["category"], "slug", [], "any", false, false, false, 1))) {
                // line 2
                echo "<a href=\"/category/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nested_slug", [], "any", false, false, false, 2), "html", null, true);
                echo "\" class=\"block\">
\t<div class=\"bg-cover position-relative px-4 py-6 mb-4\" style=\"background-image:url(";
                // line 3
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["category"], "image", [], "any", false, false, false, 3), "thumb", [0 => 400, 1 => 180, 2 => "crop"], "method", false, false, false, 3), "html", null, true);
                echo ")\">
\t\t<div class=\"position-absolute overflow-hidden inset-0 w-100 h-100 bg-dark opacity-50\"></div>
\t\t<div class=\"position-relative d-flex aligns-items-center justify-content-center h-100\">
            <h3 class=\"font-7 font-weight-semibold text-white my-4\">";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 6), "html", null, true);
                echo "</h3>
\t\t</div>
\t</div>
</a>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/category-image.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  47 => 3,  42 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for category in categories if item.title|slug == category.slug %}
<a href=\"/category/{{ category.nested_slug }}\" class=\"block\">
\t<div class=\"bg-cover position-relative px-4 py-6 mb-4\" style=\"background-image:url({{ category.image.thumb(400, 180, 'crop') }})\">
\t\t<div class=\"position-absolute overflow-hidden inset-0 w-100 h-100 bg-dark opacity-50\"></div>
\t\t<div class=\"position-relative d-flex aligns-items-center justify-content-center h-100\">
            <h3 class=\"font-7 font-weight-semibold text-white my-4\">{{ category.name }}</h3>
\t\t</div>
\t</div>
</a>
{% endfor %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/mainMenu/category-image.htm", "");
    }
}
