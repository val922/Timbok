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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optin.htm */
class __TwigTemplate_67442be7137b07eff64c6fe1551691c008e3a33872be80b5d7ba5ceb688acf1a extends \Twig\Template
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
        echo "<div class=\"gdpr-banner__opt-in\">
    <button role=\"button\" 
            tabindex=\"0\" 
            aria-pressed=\"false\"
            class=\"btn btn-sm btn-primary font-2 font-sm-5 ml-3 gdpr-banner__button gdpr-banner__button--opt-in\"
            data-request=\"onAccept\"
            data-request-success=\"\$('.gdpr-banner').remove()\"
            data-request-update=\"'";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "updatePartial", [], "any", false, false, false, 8), "html", null, true);
        echo "' : '";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "updateSelector", [], "any", false, false, false, 8), "html", null, true);
        echo "'\"
    >
        ";
        // line 10
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.gdpr::lang.cookie_banner.accept"]);
        echo "
    </button>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optin.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  46 => 8,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gdpr-banner__opt-in\">
    <button role=\"button\" 
            tabindex=\"0\" 
            aria-pressed=\"false\"
            class=\"btn btn-sm btn-primary font-2 font-sm-5 ml-3 gdpr-banner__button gdpr-banner__button--opt-in\"
            data-request=\"onAccept\"
            data-request-success=\"\$('.gdpr-banner').remove()\"
            data-request-update=\"'{{ __SELF__.updatePartial }}' : '{{ __SELF__.updateSelector }}'\"
    >
        {{ 'offline.gdpr::lang.cookie_banner.accept' | trans }}
    </button>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optin.htm", "");
    }
}
