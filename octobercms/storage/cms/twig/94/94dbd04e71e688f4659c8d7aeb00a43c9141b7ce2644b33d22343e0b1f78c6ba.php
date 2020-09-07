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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banners.htm */
class __TwigTemplate_19136ba2a4790ae449743d44c81d77eb6b09af44b434836dd9c54f1c72803906 extends \Twig\Template
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
        echo "<section class=\"container py-12 mt-4 d-sm-none d-none d-md-block\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["sortedCategoryBanners"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 4
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 4) == 0)) {
                // line 5
                echo "        <div class=\"col-lg-4 col-md-6\" data-sal=\"slide-right\" data-sal-duration=\"1200\">
            ";
                // line 6
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['category'] = $context["banner"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-bottom"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 7
                echo "        </div>
        ";
            }
            // line 9
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 9) == 1)) {
                // line 10
                echo "        <div class=\"col-lg-4 col-md-6\" data-sal=\"slide-down\" data-sal-duration=\"1200\">
            ";
                // line 11
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['category'] = $context["banner"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-top"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 12
                echo "        </div>
        ";
            }
            // line 14
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 14) == 2)) {
                // line 15
                echo "        <div class=\"col-lg-4 d-block d-lg-block d-md-none\">
            <div data-sal=\"slide-left\" data-sal-duration=\"1200\">
                ";
                // line 17
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['category'] = $context["banner"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-left"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 18
                echo "            </div>
            ";
            }
            // line 20
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 20) == 3)) {
                // line 21
                echo "            <div data-sal=\"slide-right\" data-sal-duration=\"1200\">
                ";
                // line 22
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['category'] = $context["banner"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-left"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 23
                echo "            </div>
            ";
            }
            // line 25
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 25) == 4)) {
                // line 26
                echo "            <div data-sal=\"slide-up\" data-sal-duration=\"1200\">
                ";
                // line 27
                $context['__cms_partial_params'] = [];
                $context['__cms_partial_params']['category'] = $context["banner"]                ;
                echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("widgetBanners/category-banner-left"                , $context['__cms_partial_params']                , true                );
                unset($context['__cms_partial_params']);
                // line 28
                echo "            </div>
            ";
            }
            // line 30
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 30)) {
                // line 31
                echo "        </div>
        ";
            }
            // line 33
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banners.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 34,  141 => 33,  137 => 31,  134 => 30,  130 => 28,  125 => 27,  122 => 26,  119 => 25,  115 => 23,  110 => 22,  107 => 21,  104 => 20,  100 => 18,  95 => 17,  91 => 15,  88 => 14,  84 => 12,  79 => 11,  76 => 10,  73 => 9,  69 => 7,  64 => 6,  61 => 5,  58 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"container py-12 mt-4 d-sm-none d-none d-md-block\">
    <div class=\"row\">
        {% for banner in sortedCategoryBanners %}
        {% if loop.index0 == 0 %}
        <div class=\"col-lg-4 col-md-6\" data-sal=\"slide-right\" data-sal-duration=\"1200\">
            {% partial 'widgetBanners/category-banner-bottom' category=banner %}
        </div>
        {% endif %}
        {% if loop.index0 == 1 %}
        <div class=\"col-lg-4 col-md-6\" data-sal=\"slide-down\" data-sal-duration=\"1200\">
            {% partial 'widgetBanners/category-banner-top' category=banner %}
        </div>
        {% endif %}
        {% if loop.index0 == 2 %}
        <div class=\"col-lg-4 d-block d-lg-block d-md-none\">
            <div data-sal=\"slide-left\" data-sal-duration=\"1200\">
                {% partial 'widgetBanners/category-banner-left' category=banner %}
            </div>
            {% endif %}
            {% if loop.index0 == 3 %}
            <div data-sal=\"slide-right\" data-sal-duration=\"1200\">
                {% partial 'widgetBanners/category-banner-left' category=banner %}
            </div>
            {% endif %}
            {% if loop.index0 == 4 %}
            <div data-sal=\"slide-up\" data-sal-duration=\"1200\">
                {% partial 'widgetBanners/category-banner-left' category=banner %}
            </div>
            {% endif %}
        {% if loop.last %}
        </div>
        {% endif %}
        {% endfor %}
    </div>
</section>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banners.htm", "");
    }
}
