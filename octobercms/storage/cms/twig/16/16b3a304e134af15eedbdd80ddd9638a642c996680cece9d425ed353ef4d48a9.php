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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/topbar.htm */
class __TwigTemplate_1d66bb8490afe12856717659c2cb1cafbf587943a5f7a6ef0babfbe565059c81 extends \Twig\Template
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
        echo "<div class=\"container f-topbar pb-5 border-bottom border-white-25\" style=\"\">
    <div class=\"d-md-flex justify-content-between\">
        <div class=\"d-sm-flex align-items-center mb-5 mb-md-0\">
            ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/brand"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "            <div class=\"text-white opacity-50 max-w-md mr-md-3 mt-sm-0 mt-2\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Botswana&#39;s biggest Sky&#39; mall."]);
        echo "</div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-7\">
            <h6 class=\"font-weight-medium text-white\">";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Contact Us"]);
        echo "</h6>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"map-pin\"></i>
                </div>
                <span class=\"d-block text-white opacity-50 hover:opacity-100\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Unit 10, Plot 43173, Phakalane, Gaborone, Botswana"]);
        echo "</span>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"clock\"></i>
                </div>
                <span class=\"d-block text-white opacity-50 hover:opacity-100\">";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["24/7"]);
        echo "</span>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"phone\"></i>
                </div>
                <a class=\"d-block text-white opacity-50 hover:opacity-100\" href=\"tel:";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Phone"]);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["+267 3116181"]);
        echo "</a>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"mail\"></i>
                </div>
                <a class=\"d-block text-white opacity-50 hover:opacity-100\" href=\"mailto:";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Email"]);
        echo "\">";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["info@bangoe.com"]);
        echo "</a>
            </div>
        </div>
        <div class=\"d-flex\">
        ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 35), "social_media", [], "any", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["fields"]) {
            // line 36
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "social_media_url", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"d-flex justify-content-center align-items-center rounded-circle btn w-10 h-10 p-0 mx-1 btn-outline-white\">
                <i class=\"w-4\" data-feather=\"";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["fields"], "social_media_icon", [], "any", false, false, false, 37), "html", null, true);
            echo "\"></i>
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['fields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/topbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  108 => 37,  103 => 36,  99 => 35,  90 => 31,  79 => 25,  70 => 19,  61 => 13,  53 => 8,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container f-topbar pb-5 border-bottom border-white-25\" style=\"\">
    <div class=\"d-md-flex justify-content-between\">
        <div class=\"d-sm-flex align-items-center mb-5 mb-md-0\">
            {% partial \"footer/brand\" %}
            <div class=\"text-white opacity-50 max-w-md mr-md-3 mt-sm-0 mt-2\">{{ 'Botswana&#39;s biggest Sky&#39; mall.'|_ }}</div>
        </div>
        <div class=\"col-lg-3 col-md-6 mb-7\">
            <h6 class=\"font-weight-medium text-white\">{{ 'Contact Us'|_ }}</h6>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"map-pin\"></i>
                </div>
                <span class=\"d-block text-white opacity-50 hover:opacity-100\">{{ 'Unit 10, Plot 43173, Phakalane, Gaborone, Botswana'|_ }}</span>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"clock\"></i>
                </div>
                <span class=\"d-block text-white opacity-50 hover:opacity-100\">{{ '24/7'|_ }}</span>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"phone\"></i>
                </div>
                <a class=\"d-block text-white opacity-50 hover:opacity-100\" href=\"tel:{{ 'Phone'|_ }}\">{{ '+267 3116181'|_ }}</a>
            </div>
            <div class=\"d-flex mb-2 mt-5\">
                <div class=\"font-10 mr-5 align-self-top\">
                    <i class=\"text-white opacity-50\" data-feather=\"mail\"></i>
                </div>
                <a class=\"d-block text-white opacity-50 hover:opacity-100\" href=\"mailto:{{ 'Email'|_ }}\">{{ 'info@bangoe.com'|_ }}</a>
            </div>
        </div>
        <div class=\"d-flex\">
        {% for fields in this.theme.social_media %}
            <a href=\"{{ fields.social_media_url }}\" class=\"d-flex justify-content-center align-items-center rounded-circle btn w-10 h-10 p-0 mx-1 btn-outline-white\">
                <i class=\"w-4\" data-feather=\"{{ fields.social_media_icon }}\"></i>
            </a>
        {% endfor %}
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/footer/topbar.htm", "");
    }
}
