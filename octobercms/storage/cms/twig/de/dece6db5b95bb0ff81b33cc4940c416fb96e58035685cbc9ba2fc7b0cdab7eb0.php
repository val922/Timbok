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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scrolltop.htm */
class __TwigTemplate_f5a305099827605ba1ca6901e939649ee436a9e000d2c8c142ff31ca26e4fb41 extends \Twig\Template
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
        echo "<a class=\"back-top d-flex justify-content-center align-items-center invisible rounded-circle w-8 w-md-12 h-8 h-md-12 position-fixed right-4 bottom-4 z-100 opacity-0 transition-80 btn p-0 btn-primary text-white\" href=\"#top\">
    <i class=\"w-6 w-md-4 h-6 h-md-4\" data-feather=\"chevron-up\"></i>
</a>

";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 6
        echo "<script>
\$( document ).ready(function() {

//Scroll to top
var btn = \$('.back-top');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 300) {
    btn.addClass('visible opacity-100');
    btn.removeClass('invisible');
  } else {
    btn.removeClass('visible opacity-100');
    btn.addClass('invisible');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  \$('html, body').animate({scrollTop:0}, '300');
});

});
</script>
";
        // line 5
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scrolltop.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 5,  45 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a class=\"back-top d-flex justify-content-center align-items-center invisible rounded-circle w-8 w-md-12 h-8 h-md-12 position-fixed right-4 bottom-4 z-100 opacity-0 transition-80 btn p-0 btn-primary text-white\" href=\"#top\">
    <i class=\"w-6 w-md-4 h-6 h-md-4\" data-feather=\"chevron-up\"></i>
</a>

{% put scripts %}
<script>
\$( document ).ready(function() {

//Scroll to top
var btn = \$('.back-top');

\$(window).scroll(function() {
  if (\$(window).scrollTop() > 300) {
    btn.addClass('visible opacity-100');
    btn.removeClass('invisible');
  } else {
    btn.removeClass('visible opacity-100');
    btn.addClass('invisible');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  \$('html, body').animate({scrollTop:0}, '300');
});

});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scrolltop.htm", "");
    }
}
