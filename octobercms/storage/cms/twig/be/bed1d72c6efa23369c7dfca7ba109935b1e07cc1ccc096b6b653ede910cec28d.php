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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/page.htm */
class __TwigTemplate_b3dc9bfcfddbb5a31f6283160bbda59b0f8e302d73d07101356dbd96bb69cfd8 extends \Twig\Template
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
        echo "<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" >
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 4), "meta_description", [], "any", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 4), "meta_description", [], "any", false, false, false, 4), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_description", [], "any", false, false, false, 4))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 4), "site_description", [], "any", false, false, false, 4))), "html", null, true);
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "site_keywords", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "title", [], "any", false, false, false, 6) == "Bangoe")) {
            // line 7
            echo "    <meta name=\"title\" content=\"Bangoe\">
";
        } else {
            // line 9
            echo "    <meta name=\"title\" content=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 9), "meta_title", [], "any", true, true, false, 9)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 9), "meta_title", [], "any", false, false, false, 9), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "title", [], "any", false, false, false, 9))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "site_name", [], "any", false, false, false, 9), "html", null, true);
            echo "\">
";
        }
        // line 11
        echo "
<meta name=\"author\" content=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "site_author", [], "any", false, false, false, 12), "html", null, true);
        echo "\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 14), "site_name", [], "any", false, false, false, 14), "html", null, true);
        echo "\" />

";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "meta_title", [], "any", false, false, false, 16) == "Bangoe")) {
            // line 17
            echo "    <title>Bangoe</title>
";
        } else {
            // line 19
            echo "    <title>";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 19), "meta_title", [], "any", true, true, false, 19)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 19), "meta_title", [], "any", false, false, false, 19), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "title", [], "any", false, false, false, 19))), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 19), "site_name", [], "any", false, false, false, 19), "html", null, true);
            echo "</title>
";
        }
        // line 21
        echo "
<link rel=\"canonical\" href=\"";
        // line 22
        echo $this->extensions['System\Twig\Extension']->appFilter("/");
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "url", [], "any", false, false, false, 22), "html", null, true);
        echo "\"/>
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 23), "site_favicon", [], "any", false, false, false, 23), "getThumb", [0 => 32, 1 => 32, 2 => "auto"], "method", false, false, false, 23), "html", null, true);
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 24), "meta_title", [], "any", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 24), "meta_title", [], "any", false, false, false, 24), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24))), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "site_name", [], "any", false, false, false, 24), "html", null, true);
        echo "\" />
<meta property=\"og:image\" content=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 25), "settings_brand_logo", [], "any", false, false, false, 25), "getThumb", [0 => false, 1 => 60, 2 => "auto"], "method", false, false, false, 25), "html", null, true);
        echo "\" />
<meta property=\"og:url\" content=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
<meta property=\"og:site_name\" content=\"";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 27), "site_name", [], "any", false, false, false, 27), "html", null, true);
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 28
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 28), "meta_description", [], "any", true, true, false, 28)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, true, false, 28), "meta_description", [], "any", false, false, false, 28), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 28), "site_description", [], "any", false, false, false, 28))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 28), "site_description", [], "any", false, false, false, 28))), "html", null, true);
        echo "\" />
<meta property=\"fb:app_id\" content=\"\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  117 => 27,  113 => 26,  109 => 25,  103 => 24,  99 => 23,  94 => 22,  91 => 21,  83 => 19,  79 => 17,  77 => 16,  72 => 14,  67 => 12,  64 => 11,  56 => 9,  52 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" >
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"{{ this.page.meta_description|default(this.theme.site_description) }}\">
<meta name=\"keywords\" content=\"{{ this.theme.site_keywords }}\">
{% if (this.page.title) == 'Bangoe' %}
    <meta name=\"title\" content=\"Bangoe\">
{% else %}
    <meta name=\"title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.site_name }}\">
{% endif %}

<meta name=\"author\" content=\"{{ this.theme.site_author }}\">
<meta name=\"robots\" content=\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.site_name }}\" />

{% if (this.page.meta_title) == 'Bangoe' %}
    <title>Bangoe</title>
{% else %}
    <title>{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.site_name }}</title>
{% endif %}

<link rel=\"canonical\" href=\"{{ '/'|app}}{{ this.page.url }}\"/>
<link rel=\"icon\" type=\"image/png\" href=\"{{ this.theme.site_favicon.getThumb(32, 32, 'auto') }}\" />
<meta property=\"og:title\" content=\"{{ this.page.meta_title|default(this.page.title) }} - {{ this.theme.site_name }}\" />
<meta property=\"og:image\" content=\"{{ this.theme.settings_brand_logo.getThumb(false, 60, 'auto') }}\" />
<meta property=\"og:url\" content=\"{{ ''| page }}\" />
<meta property=\"og:site_name\" content=\"{{ this.theme.site_name }}\" />
<meta property=\"og:description\" content=\"{{ this.page.meta_description|default(this.theme.site_description) }}\" />
<meta property=\"fb:app_id\" content=\"\" />", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/page.htm", "");
    }
}
