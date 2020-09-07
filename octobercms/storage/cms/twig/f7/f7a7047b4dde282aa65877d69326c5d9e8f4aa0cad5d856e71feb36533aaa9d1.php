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

/* /var/www/html/octobercms/themes/ketikidis-emarket/layouts/default.htm */
class __TwigTemplate_e0d2c26c066eaa4e513374a4bacee235504b882d9659a98dbf8e2c48f2484220 extends \Twig\Template
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
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["activeLocale"] ?? null), "html", null, true);
        echo "\">
    <head>
        ";
        // line 5
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("metaData/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 6
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/css"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "        <!-- Jquery -->
        <script src=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "@jquery"]);
        echo "\"></script>
        <!--Ecommerce Analytics -->
        ";
        // line 10
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("enhancedEcommerceAnalytics"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 11
        echo "        <!--Eshop Dependencies -->
        ";
        // line 12
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("mallDependencies"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 13
        echo "    </head><!--/#head-->
    <body class=\"page-";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14), "html", null, true);
        echo " layout-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "layout", [], "any", false, false, false, 14), "html", null, true);
        echo "\">
        <!--Google Analytics -->
        ";
        // line 16
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 16), "google_analytics", [], "any", false, false, false, 16);
        echo "
        <!-- Loader -->
        ";
        // line 18
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/loader"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 19
        echo "        <!-- Main Wrapper -->
        <div class=\"main-wrapper overflow-hidden\">
            <!-- Wrapper -->
            <div class=\"page-wrapper\">
                <!-- Header -->
                ";
        // line 24
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 25
        echo "                <!-- Page -->
                ";
        // line 26
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 27
        echo "                <!-- Info -->
                ";
        // line 28
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/info"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 29
        echo "                <!-- Footer -->
                ";
        // line 30
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/default"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 31
        echo "                <!-- GDPR -->
                ";
        // line 32
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("cookieBanner"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 33
        echo "                <!-- Scroll to top -->
                ";
        // line 34
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scrolltop"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 35
        echo "            </div>
        </div>
        <!-- Scripts -->
        ";
        // line 38
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/scripts"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 39
        echo "    </body><!--/#body-->
</html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 39,  143 => 38,  138 => 35,  134 => 34,  131 => 33,  127 => 32,  124 => 31,  120 => 30,  117 => 29,  113 => 28,  110 => 27,  108 => 26,  105 => 25,  101 => 24,  94 => 19,  90 => 18,  85 => 16,  78 => 14,  75 => 13,  71 => 12,  68 => 11,  64 => 10,  59 => 8,  56 => 7,  51 => 6,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% spaceless %}
<!DOCTYPE html>
<html lang=\"{{ activeLocale }}\">
    <head>
        {% partial 'metaData/default' %}
        {% partial 'site/css' %}
        <!-- Jquery -->
        <script src=\"{{ ['@jquery']|theme }}\"></script>
        <!--Ecommerce Analytics -->
        {% component 'enhancedEcommerceAnalytics' %}
        <!--Eshop Dependencies -->
        {% component 'mallDependencies' %}
    </head><!--/#head-->
    <body class=\"page-{{ this.page.id }} layout-{{ this.page.layout }}\">
        <!--Google Analytics -->
        {{ this.theme.google_analytics|raw }}
        <!-- Loader -->
        {% partial 'site/loader' %}
        <!-- Main Wrapper -->
        <div class=\"main-wrapper overflow-hidden\">
            <!-- Wrapper -->
            <div class=\"page-wrapper\">
                <!-- Header -->
                {% partial 'header/default' %}
                <!-- Page -->
                {% page %}
                <!-- Info -->
                {% partial 'site/info' %}
                <!-- Footer -->
                {% partial 'footer/default' %}
                <!-- GDPR -->
                {% component 'cookieBanner' %}
                <!-- Scroll to top -->
                {% partial 'site/scrolltop' %}
            </div>
        </div>
        <!-- Scripts -->
        {% partial 'site/scripts' %}
    </body><!--/#body-->
</html>
{% endspaceless %}", "/var/www/html/octobercms/themes/ketikidis-emarket/layouts/default.htm", "");
    }
}
