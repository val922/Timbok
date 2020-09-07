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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/page.htm */
class __TwigTemplate_fcca5b2ed37f75e76a0cb507d7ac64b2b61511c8cbf95591b230b23179f8e902 extends \Twig\Template
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
\t\t<h1 class=\"font-weight-semibold\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "title", [], "any", false, false, false, 3), "html", null, true);
        echo "</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">
\t\t\t";
        // line 5
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "description", [], "any", false, false, false, 5);
        echo "
\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"py-10\">
    <div class=\"container\">
\t\t<h1 class=\"font-weight-semibold\">{{ this.page.title }}</h1>
\t\t<span class=\"lead font-weight-semibold text-muted font-6\">
\t\t\t{{ this.page.description|raw }}
\t\t</span>
        <hr class=\"mt-6\">
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/pageHeader/page.htm", "");
    }
}
