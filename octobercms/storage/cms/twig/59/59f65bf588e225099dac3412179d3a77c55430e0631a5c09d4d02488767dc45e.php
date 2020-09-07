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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/default.htm */
class __TwigTemplate_ed139bc7012284ca292ce6e7396e183dc03d0bc36b7a491ecd42e73e486e4943 extends \Twig\Template
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
        if ( !twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "hide", [], "any", false, false, false, 1)) {
            // line 2
            echo "    <div class=\"bg-dark position-fixed bottom-0 w-100 z-100 py-4 gdpr-banner\">
        <div class=\"container gdpr-banner__wrapper\">
            ";
            // line 4
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::inner")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 5
            echo "        </div>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not __SELF__.hide %}
    <div class=\"bg-dark position-fixed bottom-0 w-100 z-100 py-4 gdpr-banner\">
        <div class=\"container gdpr-banner__wrapper\">
            {% partial __SELF__ ~ '::inner' %}
        </div>
    </div>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/default.htm", "");
    }
}
