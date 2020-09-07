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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/site/info.htm */
class __TwigTemplate_fc234187f4341cd9b571cb352188ebb5ff065ecbb5557a0722ae82162f010fd6 extends \Twig\Template
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
        echo "<section class=\"py-8 py-md-14 bg-secondary border-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"truck\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Free Shipping"]);
        echo "</h4>
                        <span class=\"font-4\">";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Free 2 Day Shipping Countrywide"]);
        echo "</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"headphones\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Online Support 24/7"]);
        echo "</h4>
                        <span class=\"font-4\">";
        // line 22
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Support Online 24 hours a day"]);
        echo "</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"dollar-sign\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">";
        // line 32
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Money Return"]);
        echo "</h4>
                        <span class=\"font-4\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Back guarantee under 7 days"]);
        echo "</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"user\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Member Discount"]);
        echo "</h4>
                        <span class=\"font-4\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["On every order over P500.00"]);
        echo "</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/info.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 44,  99 => 43,  86 => 33,  82 => 32,  69 => 22,  65 => 21,  52 => 11,  48 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"py-8 py-md-14 bg-secondary border-top\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"truck\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">{{ 'Free Shipping'|_ }}</h4>
                        <span class=\"font-4\">{{ 'Free 2 Day Shipping Countrywide'|_ }}</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"headphones\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">{{ 'Online Support 24/7'|_ }}</h4>
                        <span class=\"font-4\">{{ 'Support Online 24 hours a day'|_ }}</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"dollar-sign\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">{{ 'Money Return'|_ }}</h4>
                        <span class=\"font-4\">{{ 'Back guarantee under 7 days'|_ }}</span>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-sm-6\">
                <div class=\"d-lg-flex align-items-center text-center text-lg-left mb-lg-0 mb-5\">
                    <div class=\"mr-lg-4 mb-lg-0 mb-3\">
                        <i class=\"w-8 h-8 text-dark\" data-feather=\"user\"></i>
                    </div>
                    <div class=\"\">
                        <h4 class=\"font-4 font-weight-semibold text-uppercase mb-0\">{{ 'Member Discount'|_ }}</h4>
                        <span class=\"font-4\">{{ 'On every order over P500.00'|_ }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/info.htm", "");
    }
}
