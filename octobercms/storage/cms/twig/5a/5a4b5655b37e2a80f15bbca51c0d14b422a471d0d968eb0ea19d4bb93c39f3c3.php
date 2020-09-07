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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scripts.htm */
class __TwigTemplate_c112aee3ef46646a4165db52db18319be60aa8e1cb1c1130625ece2ba54dda42 extends \Twig\Template
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
        echo "<!-- Vendor JS -->
<script src=\"";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/vendor/popper/popper.min.js", 1 => "assets/vendor/bootstrap/js/bootstrap.min.js", 2 => "assets/vendor/slick/js/slick.min.js", 3 => "assets/vendor/sal/js/sal.js", 4 => "assets/vendor/feather/feather.min.js"]);
        // line 8
        echo "\"></script>

<!-- Addons -->
<script>
// Sal
sal({
    once: true,
});

// Feather Icons
feather.replace()

// Tooltip
\$('[data-toggle=\"tooltip\"]').tooltip();

// Popover
\$('[data-toggle=\"popover\"]').each(function() {
    var popoverClass = '';
    if(\$(this).data('color')) {
        popoverClass = 'popover-'+\$(this).data('color');
    }
    \$(this).popover({
        trigger: 'focus',
        template: '<div class=\"popover '+ popoverClass +'\" role=\"tooltip\"><div class=\"arrow\"></div><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
    })
});
</script>

<!-- Flash -->
";
        $_type = isset($context["type"]) ? $context["type"] : null;        $_message = isset($context["message"]) ? $context["message"] : null;        // line 37
        foreach (Flash::getMessages() as $type => $messages) {
            foreach ($messages as $message) {
                $context["type"] = $type;                $context["message"] = $message;                // line 38
                echo "<script>
\$(function() {
    \$.oc.flashMsg({type: '";
                // line 40
                echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
                echo "', text: '";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "'})
})
</script>
";
            }
        }
        $context["type"] = $_type;        $context["message"] = $_message;        // line 44
        echo "
<!-- Core JS -->
";
        // line 46
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 48
        echo "
<!-- Custom JS -->
";
        // line 50
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 50), "custom_js", [], "any", false, false, false, 50)) {
            // line 51
            echo "<script>
";
            // line 52
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 52), "custom_js", [], "any", false, false, false, 52);
            echo "
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 52,  114 => 51,  112 => 50,  108 => 48,  105 => 47,  94 => 46,  90 => 44,  80 => 40,  76 => 38,  73 => 37,  42 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Vendor JS -->
<script src=\"{{ [
    'assets/vendor/popper/popper.min.js',
    'assets/vendor/bootstrap/js/bootstrap.min.js',
    'assets/vendor/slick/js/slick.min.js',
    'assets/vendor/sal/js/sal.js',
    'assets/vendor/feather/feather.min.js'
    ]|theme }}\"></script>

<!-- Addons -->
<script>
// Sal
sal({
    once: true,
});

// Feather Icons
feather.replace()

// Tooltip
\$('[data-toggle=\"tooltip\"]').tooltip();

// Popover
\$('[data-toggle=\"popover\"]').each(function() {
    var popoverClass = '';
    if(\$(this).data('color')) {
        popoverClass = 'popover-'+\$(this).data('color');
    }
    \$(this).popover({
        trigger: 'focus',
        template: '<div class=\"popover '+ popoverClass +'\" role=\"tooltip\"><div class=\"arrow\"></div><h3 class=\"popover-header\"></h3><div class=\"popover-body\"></div></div>'
    })
});
</script>

<!-- Flash -->
{% flash %}
<script>
\$(function() {
    \$.oc.flashMsg({type: '{{ type }}', text: '{{ message }}'})
})
</script>
{% endflash %}

<!-- Core JS -->
{% framework extras %}
{% scripts %}

<!-- Custom JS -->
{% if this.theme.custom_js %}
<script>
{{ this.theme.custom_js|raw }}
</script>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/site/scripts.htm", "");
    }
}
