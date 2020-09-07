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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/scripts.htm */
class __TwigTemplate_32a7928e0077b73931eeb3f9e53073255ec46c33cc10e01a3c7db507bcc17155 extends \Twig\Template
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
        \$(function () {
            var \$propertiesForm = \$('.mall-products-filter');
            var \$body = \$('body');

            \$body.on('click', '.js-mall-filter', function () {
                var \$input = \$(this).find('input');
                
                \$(this).toggleClass('mall-filter__option--selected btn-primary').toggleClass('btn-outline-primary')
                \$input.prop('checked', ! \$input.prop('checked'));
                \$propertiesForm.trigger('submit');
            });
            \$body.on('click', '.js-mall-clear-filter', function () {
                var \$parent = \$(this).closest('.mall-property');
                if (\$parent.length < 1) {
                    \$parent = \$(this).closest('.mall-property-group');
                }

                \$parent.find(':input:not([type=\"checkbox\"])').val('');
                \$parent.find('input[type=\"checkbox\"]').prop('checked', false);
                \$parent.find('.btn-primary').removeClass('btn-primary').addClass('btn-outline-primary')

                var slider = \$parent.find('.mall-slider-handles')[0]
                if (slider) {
                    slider.noUiSlider.updateOptions({
                        start: [slider.dataset.min, slider.dataset.max]
                    });
                }
                \$propertiesForm.trigger('submit');
            });
            \$body.on('change', '.js-mall-select-filter', function () {
                \$propertiesForm.trigger('submit');
            });

            \$propertiesForm.on('submit', function (e) {
                e.preventDefault();

                \$.publish('mall.products.load.start')
                \$(this).request('";
        // line 40
        echo twig_escape_filter($this->env, ($context["__SELF__"] ?? null), "html", null, true);
        echo "::onSetFilter', {
                    loading: \$.oc.stripeLoadIndicator,
                    complete: function (response) {
                        \$.oc.stripeLoadIndicator.hide()
                        if (response.responseJSON.hasOwnProperty('queryString')) {
                            history.replaceState(null, '', '?' + response.responseJSON.queryString)
                        }
                        \$('[data-filter]').hide()
                        if (response.responseJSON.hasOwnProperty('filter')) {
                            for (var filter of Object.keys(response.responseJSON.filter)) {
                                \$('[data-filter=\"' + filter + '\"]').show();
                            }
                        }
                        \$.publish('mall.products.load.complete')
                    },
                    error: function () {
                        \$.oc.stripeLoadIndicator.hide()
                        \$.oc.flashMsg({text: '";
        // line 57
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.search_error"]);
        echo "', class: 'error'})
                        \$.publish('mall.products.load.error')
                    }
                });
            });

            \$('.mall-slider-handles').each(function () {
                var el = this;
                noUiSlider.create(el, {
                    start: [el.dataset.start, el.dataset.end],
                    connect: true,
                    step: 1,
                    range: {
                        min: [parseFloat(el.dataset.min)],
                        max: [parseFloat(el.dataset.max)]
                    },
                    pips: {
                        mode: 'range',
                        density: 20
                    }
                }).on('change', function (values) {
                    \$('[data-min=\"' + el.dataset.target + '\"]').val(values[0])
                    \$('[data-max=\"' + el.dataset.target + '\"]').val(values[1])
                    \$propertiesForm.trigger('submit');
                });
                

                // Update Min Max Price
                var nodes = [
                    document.getElementById('input-number-min'), // 0
                    document.getElementById('input-number-max')  // 1
                ];
                
                // Display the slider value and how far the handle moved
                // from the left edge of the slider.
                el.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
                    nodes[handle].innerHTML = values[handle];
                });
                // Update Min Max Price

            })
        })
    </script>
";
        // line 1
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 1,  99 => 57,  79 => 40,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% put scripts %}
    <script>
        \$(function () {
            var \$propertiesForm = \$('.mall-products-filter');
            var \$body = \$('body');

            \$body.on('click', '.js-mall-filter', function () {
                var \$input = \$(this).find('input');
                
                \$(this).toggleClass('mall-filter__option--selected btn-primary').toggleClass('btn-outline-primary')
                \$input.prop('checked', ! \$input.prop('checked'));
                \$propertiesForm.trigger('submit');
            });
            \$body.on('click', '.js-mall-clear-filter', function () {
                var \$parent = \$(this).closest('.mall-property');
                if (\$parent.length < 1) {
                    \$parent = \$(this).closest('.mall-property-group');
                }

                \$parent.find(':input:not([type=\"checkbox\"])').val('');
                \$parent.find('input[type=\"checkbox\"]').prop('checked', false);
                \$parent.find('.btn-primary').removeClass('btn-primary').addClass('btn-outline-primary')

                var slider = \$parent.find('.mall-slider-handles')[0]
                if (slider) {
                    slider.noUiSlider.updateOptions({
                        start: [slider.dataset.min, slider.dataset.max]
                    });
                }
                \$propertiesForm.trigger('submit');
            });
            \$body.on('change', '.js-mall-select-filter', function () {
                \$propertiesForm.trigger('submit');
            });

            \$propertiesForm.on('submit', function (e) {
                e.preventDefault();

                \$.publish('mall.products.load.start')
                \$(this).request('{{ __SELF__ }}::onSetFilter', {
                    loading: \$.oc.stripeLoadIndicator,
                    complete: function (response) {
                        \$.oc.stripeLoadIndicator.hide()
                        if (response.responseJSON.hasOwnProperty('queryString')) {
                            history.replaceState(null, '', '?' + response.responseJSON.queryString)
                        }
                        \$('[data-filter]').hide()
                        if (response.responseJSON.hasOwnProperty('filter')) {
                            for (var filter of Object.keys(response.responseJSON.filter)) {
                                \$('[data-filter=\"' + filter + '\"]').show();
                            }
                        }
                        \$.publish('mall.products.load.complete')
                    },
                    error: function () {
                        \$.oc.stripeLoadIndicator.hide()
                        \$.oc.flashMsg({text: '{{ 'offline.mall::frontend.search_error' | trans }}', class: 'error'})
                        \$.publish('mall.products.load.error')
                    }
                });
            });

            \$('.mall-slider-handles').each(function () {
                var el = this;
                noUiSlider.create(el, {
                    start: [el.dataset.start, el.dataset.end],
                    connect: true,
                    step: 1,
                    range: {
                        min: [parseFloat(el.dataset.min)],
                        max: [parseFloat(el.dataset.max)]
                    },
                    pips: {
                        mode: 'range',
                        density: 20
                    }
                }).on('change', function (values) {
                    \$('[data-min=\"' + el.dataset.target + '\"]').val(values[0])
                    \$('[data-max=\"' + el.dataset.target + '\"]').val(values[1])
                    \$propertiesForm.trigger('submit');
                });
                

                // Update Min Max Price
                var nodes = [
                    document.getElementById('input-number-min'), // 0
                    document.getElementById('input-number-max')  // 1
                ];
                
                // Display the slider value and how far the handle moved
                // from the left edge of the slider.
                el.noUiSlider.on('update', function (values, handle, unencoded, isTap, positions) {
                    nodes[handle].innerHTML = values[handle];
                });
                // Update Min Max Price

            })
        })
    </script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/productsfilter/scripts.htm", "");
    }
}
