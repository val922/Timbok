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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/site/css.htm */
class __TwigTemplate_9c0d00d23722f8a28d7705e777cb58d75adad5db7c46e9698991cd78fc73ddf4 extends \Twig\Template
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
        echo "<!-- Core CSS -->
";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 3
        echo "
<!-- Vendor CSS -->
<link href=\"";
        // line 5
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/animate/animate.min.css", 1 => "assets/vendor/slick/css/slick.css", 2 => "assets/vendor/slick/css/slick-theme.css", 3 => "assets/vendor/sal/css/sal.css"]);
        // line 10
        echo "\" rel=\"stylesheet\">

<!-- Theme CSS -->
<link href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/scss/main.scss"]);
        echo "\" rel=\"stylesheet\">

<!-- Fonts -->
";
        // line 16
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "font_gfonts", [], "any", false, false, false, 16)) {
            // line 17
            echo "<link href=\"https://fonts.googleapis.com/css2?family=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 17), "font_gfonts", [], "any", false, false, false, 17), "html", null, true);
            echo "&display=swap\" rel=\"stylesheet\">
";
        }
        // line 19
        echo "
<!-- Flag Icon -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css\" rel=\"stylesheet\">

<!-- Custom CSS -->
";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 24), "custom_css", [], "any", false, false, false, 24)) {
            // line 25
            echo "<style>
";
            // line 26
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 26), "custom_css", [], "any", false, false, false, 26);
            echo "
</style>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/css.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 26,  77 => 25,  75 => 24,  68 => 19,  62 => 17,  60 => 16,  54 => 13,  49 => 10,  47 => 5,  43 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Core CSS -->
{% styles %}

<!-- Vendor CSS -->
<link href=\"{{ [
    'assets/vendor/animate/animate.min.css',
    'assets/vendor/slick/css/slick.css',
    'assets/vendor/slick/css/slick-theme.css',
    'assets/vendor/sal/css/sal.css'
    ]|theme }}\" rel=\"stylesheet\">

<!-- Theme CSS -->
<link href=\"{{ ['assets/scss/main.scss']|theme }}\" rel=\"stylesheet\">

<!-- Fonts -->
{% if this.theme.font_gfonts %}
<link href=\"https://fonts.googleapis.com/css2?family={{ this.theme.font_gfonts }}&display=swap\" rel=\"stylesheet\">
{% endif %}

<!-- Flag Icon -->
<link href=\"https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.4.6/css/flag-icon.min.css\" rel=\"stylesheet\">

<!-- Custom CSS -->
{% if this.theme.custom_css %}
<style>
{{ this.theme.custom_css|raw }}
</style>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/css.htm", "");
    }
}
