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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/dismiss.htm */
class __TwigTemplate_b53999b20f2f4e4df4b168a772f197e7adefb9fedf322928d25b686834825c6a extends \Twig\Template
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
        echo "<div class=\"ml-lg-3 ml-1 w-6 h-6 gdpr-banner__dismiss\">
    <button role=\"button\" 
      tabindex=\"0\" 
      aria-pressed=\"false\"
      class=\"bg-transparent border-0 text-white w-6 h-6 line-height-none font-8 font-sm-10 gdpr-banner__button--dismiss\"
      onclick=\"document.querySelector('.gdpr-banner').remove()\">&times;</button>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/dismiss.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"ml-lg-3 ml-1 w-6 h-6 gdpr-banner__dismiss\">
    <button role=\"button\" 
      tabindex=\"0\" 
      aria-pressed=\"false\"
      class=\"bg-transparent border-0 text-white w-6 h-6 line-height-none font-8 font-sm-10 gdpr-banner__button--dismiss\"
      onclick=\"document.querySelector('.gdpr-banner').remove()\">&times;</button>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/dismiss.htm", "");
    }
}
