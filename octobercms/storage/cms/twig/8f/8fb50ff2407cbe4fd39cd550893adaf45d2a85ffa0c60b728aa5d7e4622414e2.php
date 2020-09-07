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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/malldependencies/default.htm */
class __TwigTemplate_a27eb14329990bc9944c720091ad57eb946ea1cfb0a1c4840e1973d186f62171 extends \Twig\Template
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
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 2
        echo "    <script>
        window.Mall = window.Mall || {}
        \$(function () {
            window.Mall.Modal = \$('<div class=\"mall-modal position-fixed inset-0 h-100 w-100 overflow-hidden bg-black-75 opacity-0 invisible z-100\">')
            window.Mall.Modal.on('click', function(e) {
                if (e.target.classList.contains('mall-modal')) {
                    window.Mall.Modal.removeClass('mall-modal--visible visible opacity-100')
                }
            })
            window.Mall.Modal.prependTo(document.body)
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/malldependencies/default.htm";
    }

    public function getDebugInfo()
    {
        return array (  53 => 1,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        window.Mall = window.Mall || {}
        \$(function () {
            window.Mall.Modal = \$('<div class=\"mall-modal position-fixed inset-0 h-100 w-100 overflow-hidden bg-black-75 opacity-0 invisible z-100\">')
            window.Mall.Modal.on('click', function(e) {
                if (e.target.classList.contains('mall-modal')) {
                    window.Mall.Modal.removeClass('mall-modal--visible visible opacity-100')
                }
            })
            window.Mall.Modal.prependTo(document.body)
        })
    </script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/malldependencies/default.htm", "");
    }
}
