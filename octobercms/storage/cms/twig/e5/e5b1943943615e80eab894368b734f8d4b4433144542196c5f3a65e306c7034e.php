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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/inner.htm */
class __TwigTemplate_a43964eba965649ee27ab9921910281d36bb331fac3d4a26e1ce756a46bdb074 extends \Twig\Template
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
        echo "<div class=\"row align-self-center text-center text-lg-left\">
<div class=\"col-xl-7 col-lg-6 mb-lg-0 mb-md-4 mb-2 gdpr-banner__column gdpr-banner__column--1\">
    <div class=\"gdpr-banner__row\">
        ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::message")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "    </div>
</div>
<div class=\"col-xl-5 col-lg-6 d-flex justify-content-center flex-wrap gdpr-banner__column gdpr-banner__column--2\">
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::settings")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::optout")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::optin")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 11
        echo "    ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::dismiss")        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 12
        echo "</div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/inner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 12,  65 => 11,  60 => 10,  55 => 9,  51 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row align-self-center text-center text-lg-left\">
<div class=\"col-xl-7 col-lg-6 mb-lg-0 mb-md-4 mb-2 gdpr-banner__column gdpr-banner__column--1\">
    <div class=\"gdpr-banner__row\">
        {% partial __SELF__ ~ '::message' %}
    </div>
</div>
<div class=\"col-xl-5 col-lg-6 d-flex justify-content-center flex-wrap gdpr-banner__column gdpr-banner__column--2\">
    {% partial __SELF__ ~ '::settings' %}
    {% partial __SELF__ ~ '::optout' %}
    {% partial __SELF__ ~ '::optin' %}
    {% partial __SELF__ ~ '::dismiss' %}
</div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/cookiebanner/inner.htm", "");
    }
}
