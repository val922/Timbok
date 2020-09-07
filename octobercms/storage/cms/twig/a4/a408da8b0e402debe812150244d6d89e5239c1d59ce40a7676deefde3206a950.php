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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/ShareButtons/default.htm */
class __TwigTemplate_b2735e87565dc66ac19fa9105b49f701b377a3041361be0efea6bcc6ee267418 extends \Twig\Template
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
        echo "<span class=\"sharefake\"></span>

<div class=\"d-flex align-items-center mr-sm-0 mr-auto\">
    <span class=\"font-5 mr-4\">Share:</span>
    <div class=\"d-flex flex-wrap\">
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter(($context["share"] ?? null)));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["key"]) {
            // line 7
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "property", [0 => $context["key"]], "method", false, false, false, 7)) {
                // line 8
                echo "            <span class=\"share-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" title=\"";
                echo call_user_func_array($this->env->getFilter('trans')->getCallable(), [(("webvpf.share::lang.buttons." . $context["key"]) . ".name")]);
                echo "\">
                <div class=\"d-flex justify-content-center align-items-center rounded-circle btn w-10 h-10 p-0 btn-outline-dark ";
                // line 9
                echo (( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 9)) ? ("mr-2") : (""));
                echo "\">
                ";
                // line 10
                $context['__cms_partial_params'] = [];
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction(((($context["__SELF__"] ?? null) . "::") . $context["key"])                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 11
                echo "                </div>
            </span>
        ";
            }
            // line 14
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/ShareButtons/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 15,  84 => 14,  79 => 11,  75 => 10,  71 => 9,  64 => 8,  61 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<span class=\"sharefake\"></span>

<div class=\"d-flex align-items-center mr-sm-0 mr-auto\">
    <span class=\"font-5 mr-4\">Share:</span>
    <div class=\"d-flex flex-wrap\">
    {% for key in share|keys %}
        {% if __SELF__.property(key) %}
            <span class=\"share-{{ key }}\" title=\"{{ ('webvpf.share::lang.buttons.' ~ key ~ '.name')|trans }}\">
                <div class=\"d-flex justify-content-center align-items-center rounded-circle btn w-10 h-10 p-0 btn-outline-dark {{ not loop.last ? 'mr-2'}}\">
                {% partial __SELF__ ~ '::' ~ key %}
                </div>
            </span>
        {% endif %}
    {% endfor %}
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/ShareButtons/default.htm", "");
    }
}
