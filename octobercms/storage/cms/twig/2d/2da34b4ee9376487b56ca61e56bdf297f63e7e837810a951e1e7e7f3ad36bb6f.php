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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/products/datalayer.htm */
class __TwigTemplate_6968dc81864788478934fae1df73ebe6fdc7a2439fdc8f9a505f87f05f85b557 extends \Twig\Template
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
        echo "<script>
    var data = ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "dataLayer", [], "any", false, false, false, 2);
        echo ";

    // Send impressions
    dataLayer.push(data)

    // Create lookup object for item clicks.
    var lookup = {}
    data.ecommerce.impressions.map(function (item) {
        lookup[item.id] = item
    })

    \$(function () {
        // Handle item clicks
        \$('[data-mall-item-id]').on('click', function (e) {
            var link = this
            var item = lookup[this.dataset.mallItemId]
            if (!item) {
                return;
            }

            e.preventDefault()
            \$.oc.stripeLoadIndicator.show()

            var callback = function () {
                document.location = link.href
            }
            // Wait for 500ms max
            setTimeout(callback, 500)

            dataLayer.push({
                'event': 'productClick',
                'ecommerce': {
                    'click': {
                        'actionField': {'list': 'Category ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 35), "html", null, true);
        echo "'},
                        'products': [{
                            'name': item.name,
                            'id': item.id,
                            'price': item.price,
                            'brand': item.brand,
                            'category': item.cat,
                            'variant': item.variant,
                            'position': item.position
                        }]
                    }
                },
                'eventCallback': callback
            })
        })
    })
</script>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/datalayer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 35,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    var data = {{ __SELF__.dataLayer | raw }};

    // Send impressions
    dataLayer.push(data)

    // Create lookup object for item clicks.
    var lookup = {}
    data.ecommerce.impressions.map(function (item) {
        lookup[item.id] = item
    })

    \$(function () {
        // Handle item clicks
        \$('[data-mall-item-id]').on('click', function (e) {
            var link = this
            var item = lookup[this.dataset.mallItemId]
            if (!item) {
                return;
            }

            e.preventDefault()
            \$.oc.stripeLoadIndicator.show()

            var callback = function () {
                document.location = link.href
            }
            // Wait for 500ms max
            setTimeout(callback, 500)

            dataLayer.push({
                'event': 'productClick',
                'ecommerce': {
                    'click': {
                        'actionField': {'list': 'Category {{ category.name }}'},
                        'products': [{
                            'name': item.name,
                            'id': item.id,
                            'price': item.price,
                            'brand': item.brand,
                            'category': item.cat,
                            'variant': item.variant,
                            'position': item.position
                        }]
                    }
                },
                'eventCallback': callback
            })
        })
    })
</script>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/products/datalayer.htm", "");
    }
}
