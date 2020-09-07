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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/product/images.htm */
class __TwigTemplate_09f4f898f4f19bdd19bbf0933b31eff2a58fefded69a869174ba761e3be40871 extends \Twig\Template
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
        if (($context["images"] ?? null)) {
            // line 2
            echo "<div class=\"col-2 pr-2 pr-md-5\">
    <div class=\"slider-nav\" itemscope itemtype=\"https://schema.org/ImageGallery\">
        ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 5
                echo "        <a href=\"javascript:;\" class=\"mb-2 mb-md-5 opacity-30\">
            <img src=\"";
                // line 6
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 120, 1 => 150, 2 => "crop"], "method", false, false, false, 6), "html", null, true);
                echo "\" itemprop=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 6), "html", null, true);
                echo "\" loading=\"lazy\" class=\"w-100\"/>
        </a>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "    </div>
</div><!-- slider-nav.// -->
<div class=\"col-10\">
    <div id=\"gallery\" class=\"slider-for\" itemscope itemtype=\"https://schema.org/ImageGallery\">
        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 14
                echo "        <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\">
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "path", [], "any", false, false, false, 15), "html", null, true);
                echo "\" caption=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 15), "html", null, true);
                echo "\" class=\"swipebox\">
                <img src=\"";
                // line 16
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "thumb", [0 => 850, 1 => 1000, 2 => "crop"], "method", false, false, false, 16), "html", null, true);
                echo "\" itemprop=\"thumbnail\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "title", [], "any", false, false, false, 16), "html", null, true);
                echo "\" loading=\"lazy\" class=\"img-fluid\"/>
            </a>
        </figure>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "    </div>
</div><!-- slider-nav.// -->
";
        }
        // line 23
        echo "
";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 25
        echo "<script>
\$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    lazyLoad: 'ondemand',
    draggable: false,
    accessibility: false
});
\$('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    vertical: true,
    draggable: false,
    accessibility: false
});
</script>
";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
        // line 52
        echo "
";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 54
        echo "<script>
;( function( \$ ) {
    \$( '.swipebox' ).swipebox( {
\t\thideCloseButtonOnMobile : true, // true will hide the close button on mobile devices
\t\tremoveBarsOnMobile : true, // false will show top bar on mobile devices
\t\thideBarsDelay : 5000, // delay before hiding bars on desktop
\t\tvideoMaxWidth : 1600 // videos max width
    } );
} )( jQuery );
</script>
";
        // line 53
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/images.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  137 => 54,  135 => 53,  132 => 52,  130 => 24,  102 => 25,  100 => 24,  97 => 23,  92 => 20,  80 => 16,  74 => 15,  71 => 14,  67 => 13,  61 => 9,  50 => 6,  47 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if images %}
<div class=\"col-2 pr-2 pr-md-5\">
    <div class=\"slider-nav\" itemscope itemtype=\"https://schema.org/ImageGallery\">
        {% for image in images %}
        <a href=\"javascript:;\" class=\"mb-2 mb-md-5 opacity-30\">
            <img src=\"{{ image.thumb(120, 150, 'crop') }}\" itemprop=\"thumbnail\" alt=\"{{ image.title }}\" loading=\"lazy\" class=\"w-100\"/>
        </a>
        {% endfor %}
    </div>
</div><!-- slider-nav.// -->
<div class=\"col-10\">
    <div id=\"gallery\" class=\"slider-for\" itemscope itemtype=\"https://schema.org/ImageGallery\">
        {% for image in images %}
        <figure itemprop=\"associatedMedia\" itemscope itemtype=\"https://schema.org/ImageObject\">
            <a href=\"{{ image.path }}\" caption=\"{{ image.title }}\" class=\"swipebox\">
                <img src=\"{{ image.thumb(850, 1000, 'crop') }}\" itemprop=\"thumbnail\" alt=\"{{ image.title }}\" loading=\"lazy\" class=\"img-fluid\"/>
            </a>
        </figure>
        {% endfor %}
    </div>
</div><!-- slider-nav.// -->
{% endif %}

{% put scripts %}
<script>
\$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    lazyLoad: 'ondemand',
    draggable: false,
    accessibility: false
});
\$('.slider-nav').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: false,
    arrows: false,
    centerMode: false,
    focusOnSelect: true,
    lazyLoad: 'ondemand',
    vertical: true,
    draggable: false,
    accessibility: false
});
</script>
{% endput %}

{% put scripts %}
<script>
;( function( \$ ) {
    \$( '.swipebox' ).swipebox( {
\t\thideCloseButtonOnMobile : true, // true will hide the close button on mobile devices
\t\tremoveBarsOnMobile : true, // false will show top bar on mobile devices
\t\thideBarsDelay : 5000, // delay before hiding bars on desktop
\t\tvideoMaxWidth : 1600 // videos max width
    } );
} )( jQuery );
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/product/images.htm", "");
    }
}
