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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/settings.htm */
class __TwigTemplate_f828079a844a845888973eb4d2ceaa7b2743723e2d7464bfec96af82c6e2c252 extends \Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cookieManagerPage", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"mx-lg-6 mr-3 gdpr-banner__settings\">
        <u><a role=\"link\" rel=\"privacy\" href=\"";
            // line 3
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cookieManagerPage", [], "any", false, false, false, 3));
            echo "\"
           data-request=\"onDecline\"
           data-request-success=\"document.location.href = '";
            // line 5
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "cookieManagerPage", [], "any", false, false, false, 5));
            echo "'\"
           class=\"text-white text-nowrap transition-20 hover:text-primary font-1 font-sm-5\"
        >
            ";
            // line 8
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.gdpr::lang.cookie_banner.advanced_settings"]);
            echo "
        </a></u>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/settings.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 8,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if __SELF__.cookieManagerPage %}
    <div class=\"mx-lg-6 mr-3 gdpr-banner__settings\">
        <u><a role=\"link\" rel=\"privacy\" href=\"{{ __SELF__.cookieManagerPage | page }}\"
           data-request=\"onDecline\"
           data-request-success=\"document.location.href = '{{ __SELF__.cookieManagerPage | page }}'\"
           class=\"text-white text-nowrap transition-20 hover:text-primary font-1 font-sm-5\"
        >
            {{ 'offline.gdpr::lang.cookie_banner.advanced_settings' | trans }}
        </a></u>
    </div>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/settings.htm", "");
    }
}
