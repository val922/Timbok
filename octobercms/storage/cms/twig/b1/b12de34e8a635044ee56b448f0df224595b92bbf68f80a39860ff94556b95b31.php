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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner.htm */
class __TwigTemplate_5155280552228f36a31d59a22391e4b3a3210eaa38f955a1b983ea9dc94829f0 extends \Twig\Template
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
        $context["category"] = ($context["indexCategoryBanner"] ?? null);
        // line 2
        echo "<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-12\" style=\"background:url('";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "image", [], "any", false, false, false, 3), "thumb", [0 => 1000, 1 => 750, 2 => "crop"], "method", false, false, false, 3), "html", null, true);
        echo "');\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to right, rgba(247, 247, 247) 0, rgba(247, 247, 247) 40%, rgba(247, 247, 247, 0) 100%);\"></div>
        <div class=\"row no-gutters py-lg-6\">
            <div class=\"col-lg-5 col-md-8 offset-xl-2 offset-lg-1\">
                <div class=\"px-4 px-lg-0\" data-sal=\"slide-right\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap\">
                        <h3 class=\"font-weight-light max-w-md\">";
        // line 9
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Countdown Sales"]);
        echo "</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">";
        // line 10
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["10%"]);
        echo "</span>
                    </div>
                    <h2 class=\"h1 mb-4\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "name", [], "any", false, false, false, 12), "html", null, true);
        echo "</h2>
                    <div class=\"h4 mb-4 font-weight-light\">";
        // line 13
        echo twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "description", [], "any", false, false, false, 13);
        echo "</div>
                    <div class=\"max-w-sm bg-white pt-6 p-4 mb-6\">
                        <div id=\"count\" class=\"d-flex h3 mb-0\">
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold days\"></div>
                                <div class=\"text-muted font-3 ml-1\">d</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold hours\"></div>
                                <div class=\"text-muted font-3 ml-1\">h</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold minutes\"></div>
                                <div class=\"text-muted font-3 ml-1\">m</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold seconds\"></div>
                                <div class=\"text-muted font-3 ml-1\">s</div>
                            </div>
                        </div>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"/category/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "nested_slug", [], "any", false, false, false, 34), "html", null, true);
        echo "\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->startBlock('scripts'        );
        // line 44
        echo "<script>
\$(\"#count\").countdown(\"";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, false, 45), "index_category_banner_countdown", [], "any", false, false, false, 45), "html", null, true);
        echo "\", function(event) {
    \$('.days').html(event.strftime('%-D'));
    \$('.hours').html(event.strftime('%H'));
    \$('.minutes').html(event.strftime('%M'));
    \$('.seconds').html(event.strftime('%S'));
});
</script>
";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->endBlock(true        );
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  105 => 45,  102 => 44,  100 => 43,  88 => 34,  64 => 13,  60 => 12,  55 => 10,  51 => 9,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set category = indexCategoryBanner %}
<section class=\"container-fluid px-0 mb-12 mt-6 position-relative\">
    <div class=\"bg-size-cover bg-position-center py-12\" style=\"background:url('{{ category.image.thumb(1000, 750, 'crop') }}');\">
        <div class=\"position-absolute inset-0 w-100 h-100\" style=\"background: linear-gradient(to right, rgba(247, 247, 247) 0, rgba(247, 247, 247) 40%, rgba(247, 247, 247, 0) 100%);\"></div>
        <div class=\"row no-gutters py-lg-6\">
            <div class=\"col-lg-5 col-md-8 offset-xl-2 offset-lg-1\">
                <div class=\"px-4 px-lg-0\" data-sal=\"slide-right\" data-sal-duration=\"1200\">
                    <div class=\"d-flex align-items-center flex-wrap\">
                        <h3 class=\"font-weight-light max-w-md\">{{ 'Countdown Sales'|_ }}</h3>
                        <span class=\"d-flex justify-content-center align-items-center rounded-circle w-20 h-20 bg-danger text-white font-11 font-weight-semibold ml-4\">{{ '10%'|_ }}</span>
                    </div>
                    <h2 class=\"h1 mb-4\">{{ category.name }}</h2>
                    <div class=\"h4 mb-4 font-weight-light\">{{ category.description|raw }}</div>
                    <div class=\"max-w-sm bg-white pt-6 p-4 mb-6\">
                        <div id=\"count\" class=\"d-flex h3 mb-0\">
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold days\"></div>
                                <div class=\"text-muted font-3 ml-1\">d</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold hours\"></div>
                                <div class=\"text-muted font-3 ml-1\">h</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold minutes\"></div>
                                <div class=\"text-muted font-3 ml-1\">m</div>
                            </div>
                            <div class=\"d-flex m-3\">
                                <div class=\"font-weight-semibold seconds\"></div>
                                <div class=\"text-muted font-3 ml-1\">s</div>
                            </div>
                        </div>
                    </div>
                    <a class=\"btn btn-primary px-6\" href=\"/category/{{ category.nested_slug }}\">
                        Shop now<i class=\"ml-2\" data-feather=\"shopping-cart\"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{% put scripts %}
<script>
\$(\"#count\").countdown(\"{{ this.theme.index_category_banner_countdown }}\", function(event) {
    \$('.days').html(event.strftime('%-D'));
    \$('.hours').html(event.strftime('%H'));
    \$('.minutes').html(event.strftime('%M'));
    \$('.seconds').html(event.strftime('%S'));
});
</script>
{% endput %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/homepage/category-banner.htm", "");
    }
}
