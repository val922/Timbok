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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/button.htm */
class __TwigTemplate_e55e8f51eec9f740b9a2a117e2b2c9a5396e51248186c65aef29f88de8e35f19 extends \Twig\Template
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
        echo "<button class=\"mall-add-to-wishlist-button btn btn-white btn-block\">
    <i class=\"mr-2\" data-feather=\"heart\"></i>";
        // line 2
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlist.add"]);
        echo "
</button>
<script>
    var btn = document.querySelector('.mall-add-to-wishlist-button')
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault()
            var popup = document.querySelector('.mall-wishlist-button__popup')
            if (popup) {
                popup.classList.toggle('opacity-100')
                popup.classList.toggle('pointer-events-auto')
            }
        })
    }
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/button.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<button class=\"mall-add-to-wishlist-button btn btn-white btn-block\">
    <i class=\"mr-2\" data-feather=\"heart\"></i>{{ 'offline.mall::frontend.wishlist.add' | trans }}
</button>
<script>
    var btn = document.querySelector('.mall-add-to-wishlist-button')
    if (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault()
            var popup = document.querySelector('.mall-wishlist-button__popup')
            if (popup) {
                popup.classList.toggle('opacity-100')
                popup.classList.toggle('pointer-events-auto')
            }
        })
    }
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlistbutton/button.htm", "");
    }
}
