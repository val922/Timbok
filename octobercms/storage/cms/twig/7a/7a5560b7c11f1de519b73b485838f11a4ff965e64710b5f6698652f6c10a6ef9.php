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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/products/items.htm */
class __TwigTemplate_376376fd6fac7b748789be04312d06f51167ca7248d09657cbed054351311877 extends \Twig\Template
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
        echo "<div class=\"row mall-products__products\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 3
            echo "        ";
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = $context["item"]            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::item")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 4
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 5
        echo "</div>
<hr class=\"pb-6 mb-2\">
";
        // line 7
        if (twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "paginate", [], "any", false, false, false, 7)) {
            // line 8
            echo "    <div class=\"mall-pagination mall-pagination--products\">
        ";
            // line 9
            echo ($context["items"] ?? null);
            echo "
    </div>
";
        }
        // line 12
        echo "
<script>
\$( document ).ready(function() {
    
    // Slick slider
    \$('.slider-for').each(function(key, item) {
    
        var sliderIdName = 'slider' + key;
        var sliderNavIdName = 'sliderNav' + key;
        
        this.id = sliderIdName;
        \$('.slider-nav')[key].id = sliderNavIdName;
        
        var sliderId = '#' + sliderIdName;
        var sliderNavId = '#' + sliderNavIdName;
        
        \$(sliderId).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: sliderNavId,
            lazyLoad: 'ondemand',
            draggable: false,
            accessibility: false
        });
        
        \$(sliderNavId).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: sliderId,
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            draggable: false,
            accessibility: false
        });
    
    });
    
    // Feather Icons
    feather.replace()
    
});
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/items.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 12,  65 => 9,  62 => 8,  60 => 7,  56 => 5,  50 => 4,  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row mall-products__products\">
    {% for item in items %}
        {% partial __SELF__ ~ '::item' item=item %}
    {% endfor %}
</div>
<hr class=\"pb-6 mb-2\">
{% if __SELF__.paginate %}
    <div class=\"mall-pagination mall-pagination--products\">
        {{ items | raw }}
    </div>
{% endif %}

<script>
\$( document ).ready(function() {
    
    // Slick slider
    \$('.slider-for').each(function(key, item) {
    
        var sliderIdName = 'slider' + key;
        var sliderNavIdName = 'sliderNav' + key;
        
        this.id = sliderIdName;
        \$('.slider-nav')[key].id = sliderNavIdName;
        
        var sliderId = '#' + sliderIdName;
        var sliderNavId = '#' + sliderNavIdName;
        
        \$(sliderId).slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: sliderNavId,
            lazyLoad: 'ondemand',
            draggable: false,
            accessibility: false
        });
        
        \$(sliderNavId).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: sliderId,
            dots: false,
            arrows: false,
            centerMode: false,
            focusOnSelect: true,
            lazyLoad: 'ondemand',
            draggable: false,
            accessibility: false
        });
    
    });
    
    // Feather Icons
    feather.replace()
    
});
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/items.htm", "");
    }
}
