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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optout.htm */
class __TwigTemplate_47917c0ae6f366b1d0b31a20b9452d6a98294bd40810fb712f0d887709f9c891 extends \Twig\Template
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
        echo "<div class=\"gdpr-banner__opt-out\">
    <button role=\"button\" 
         tabindex=\"0\" 
         aria-pressed=\"false\"
         class=\"btn btn-sm btn-danger font-2 font-sm-5 gdpr-banner__button gdpr-banner__button--opt-out\"
         data-request=\"onDecline\"
         data-request-success=\"document.querySelector('.gdpr-banner').remove()\"
    >
        ";
        // line 9
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.gdpr::lang.cookie_banner.decline"]);
        echo "
    </button>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optout.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"gdpr-banner__opt-out\">
    <button role=\"button\" 
         tabindex=\"0\" 
         aria-pressed=\"false\"
         class=\"btn btn-sm btn-danger font-2 font-sm-5 gdpr-banner__button gdpr-banner__button--opt-out\"
         data-request=\"onDecline\"
         data-request-success=\"document.querySelector('.gdpr-banner').remove()\"
    >
        {{ 'offline.gdpr::lang.cookie_banner.decline' | trans }}
    </button>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/optout.htm", "");
    }
}
