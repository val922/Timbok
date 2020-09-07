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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/product.htm */
class __TwigTemplate_dca52a35d5bda0ba6f2db368a7322e333edb34f8e7e0eeb3d76ce5d7804d2c02 extends \Twig\Template
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
        echo nl2br(call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 4), 140])]));
        echo "\">
<meta name=\"keywords\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 5), "site_keywords", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
<meta name=\"title\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 6), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 6), "site_name", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
<meta name=\"author\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 7), "site_author", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 9), "site_name", [], "any", false, false, false, 9), "html", null, true);
        echo "\" />
<title>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 10), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 10), "site_name", [], "any", false, false, false, 10), "html", null, true);
        echo "</title>
<link rel=\"canonical\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\"/>
<link rel=\"icon\" type=\"image/png\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 12), "site_favicon", [], "any", false, false, false, 12), "getThumb", [0 => 32, 1 => 32, 2 => "auto"], "method", false, false, false, 12), "html", null, true);
        echo "\" />
<meta property=\"og:title\" content=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 13), "site_name", [], "any", false, false, false, 13), "html", null, true);
        echo "\" />
<meta property=\"og:url\" content=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("");
        echo "\" />
<meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "image", [], "any", false, false, false, 15), "thumb", [0 => 850, 1 => 1000, 2 => "crop"], "method", false, false, false, 15), "html", null, true);
        echo "\" />
<meta property=\"og:site_name\" content=\"";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "site_name", [], "any", false, false, false, 16), "html", null, true);
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 17
        echo nl2br(call_user_func_array($this->env->getFunction('html_strip')->getCallable(), ["strip", call_user_func_array($this->env->getFunction('html_limit')->getCallable(), ["limit", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "description_short", [], "any", false, false, false, 17), 140])]));
        echo "\" />
<meta property=\"fb:app_id\" content=\"\" />";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/product.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 17,  93 => 16,  89 => 15,  85 => 14,  79 => 13,  75 => 12,  71 => 11,  65 => 10,  61 => 9,  56 => 7,  50 => 6,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" >
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<meta name=\"description\" content=\"{{ html_strip(html_limit(item.description_short, 140))|nl2br }}\">
<meta name=\"keywords\" content=\"{{ this.theme.site_keywords }}\">
<meta name=\"title\" content=\"{{ item.name }} - {{ this.theme.site_name }}\">
<meta name=\"author\" content=\"{{ this.theme.site_author }}\">
<meta name=\"robots\" content==\"index, follow\">
<meta name=\"generator\" content=\"{{ this.theme.site_name }}\" />
<title>{{ item.name }} - {{ this.theme.site_name }}</title>
<link rel=\"canonical\" href=\"{{ ''| page }}\"/>
<link rel=\"icon\" type=\"image/png\" href=\"{{ this.theme.site_favicon.getThumb(32, 32, 'auto') }}\" />
<meta property=\"og:title\" content=\"{{ item.name }} - {{ this.theme.site_name }}\" />
<meta property=\"og:url\" content=\"{{ ''| page }}\" />
<meta property=\"og:image\" content=\"{{ item.image.thumb(850, 1000, 'crop') }}\" />
<meta property=\"og:site_name\" content=\"{{ this.theme.site_name }}\" />
<meta property=\"og:description\" content=\"{{ html_strip(html_limit(item.description_short, 140))|nl2br }}\" />
<meta property=\"fb:app_id\" content=\"\" />", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/metaData/product.htm", "");
    }
}
