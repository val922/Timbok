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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/default.htm */
class __TwigTemplate_75445bdadbe76b92b39219938dd790915810cce275b4807a9039c358c1a69444 extends \Twig\Template
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
        echo "<div class=\"header-wrapper w-100 z-20 bg-white\">
\t<div class=\"header w-100\">
\t\t<!-- Topbar  -->
\t\t";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/topbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "\t\t<div class=\"z-10 w-100 animated faster\" data-toggle=\"sticky-onscroll\">
    \t\t<!-- Infobar  -->
    \t\t";
        // line 7
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/infobar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 8
        echo "    \t\t<!-- Navbar  -->
    \t\t";
        // line 9
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header/navbar"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 10
        echo "\t\t</div>
\t</div>
</div>

";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 15
        echo "<script>
// Sticky navigation 
var brand = \$(\".header-infobar img\");
var search = \$(\".header-infobar .search-input\");
var btns = \$(\".header-infobar .navbar-nav .nav-link\");
var navbar = \$(\".header-navbar .navbar-link\");
var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop) {
        stickyWrapper.height(stickyHeight);
        sticky.addClass(\"is-sticky bg-white position-fixed shadow inset-x-0 top-0 z-100 fadeInDown\");
        brand.removeClass(\"w-sm-auto\").addClass(\"w-sm-20\");
        search.removeClass(\"my-3\");
        btns.removeClass(\"my-sm-4\");
        navbar.removeClass(\"py-md-6 px-md-5 font-md-6\").addClass(\"font-md-5\");
    } else {
        sticky.removeClass(\"is-sticky bg-white position-fixed shadow inset-x-0 top-0 z-100 fadeInDown\");
        stickyWrapper.height('auto');
        brand.addClass(\"w-sm-auto\").removeClass(\"w-sm-20\");
        search.addClass(\"my-3\");
        btns.addClass(\"my-sm-4\");
        navbar.addClass(\"py-md-6 px-md-5 font-md-6\").removeClass(\"font-md-5\");
    }
};

// Find all data-toggle=\"sticky-onscroll\" elements
\$('[data-toggle=\"sticky-onscroll\"]').each(function() {
    var sticky = \$(this);
    var stickyWrapper = \$('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    // Scroll & resize events
    \$(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
        stickyToggle(sticky, stickyWrapper, \$(this));
    });
    // On page load
    stickyToggle(sticky, stickyWrapper, \$(window));
});
</script>
";
        // line 14
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 14,  69 => 15,  67 => 14,  61 => 10,  57 => 9,  54 => 8,  50 => 7,  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"header-wrapper w-100 z-20 bg-white\">
\t<div class=\"header w-100\">
\t\t<!-- Topbar  -->
\t\t{% partial 'header/topbar' %}
\t\t<div class=\"z-10 w-100 animated faster\" data-toggle=\"sticky-onscroll\">
    \t\t<!-- Infobar  -->
    \t\t{% partial 'header/infobar' %}
    \t\t<!-- Navbar  -->
    \t\t{% partial 'header/navbar' %}
\t\t</div>
\t</div>
</div>

{% put scripts %}
<script>
// Sticky navigation 
var brand = \$(\".header-infobar img\");
var search = \$(\".header-infobar .search-input\");
var btns = \$(\".header-infobar .navbar-nav .nav-link\");
var navbar = \$(\".header-navbar .navbar-link\");
var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop) {
        stickyWrapper.height(stickyHeight);
        sticky.addClass(\"is-sticky bg-white position-fixed shadow inset-x-0 top-0 z-100 fadeInDown\");
        brand.removeClass(\"w-sm-auto\").addClass(\"w-sm-20\");
        search.removeClass(\"my-3\");
        btns.removeClass(\"my-sm-4\");
        navbar.removeClass(\"py-md-6 px-md-5 font-md-6\").addClass(\"font-md-5\");
    } else {
        sticky.removeClass(\"is-sticky bg-white position-fixed shadow inset-x-0 top-0 z-100 fadeInDown\");
        stickyWrapper.height('auto');
        brand.addClass(\"w-sm-auto\").removeClass(\"w-sm-20\");
        search.addClass(\"my-3\");
        btns.addClass(\"my-sm-4\");
        navbar.addClass(\"py-md-6 px-md-5 font-md-6\").removeClass(\"font-md-5\");
    }
};

// Find all data-toggle=\"sticky-onscroll\" elements
\$('[data-toggle=\"sticky-onscroll\"]').each(function() {
    var sticky = \$(this);
    var stickyWrapper = \$('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    // Scroll & resize events
    \$(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
        stickyToggle(sticky, stickyWrapper, \$(this));
    });
    // On page load
    stickyToggle(sticky, stickyWrapper, \$(window));
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/default.htm", "");
    }
}
