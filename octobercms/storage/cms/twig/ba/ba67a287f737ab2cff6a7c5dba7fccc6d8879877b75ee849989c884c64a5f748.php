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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/header/account-btn.htm */
class __TwigTemplate_84885bc007725df0de08eac3894925022e136b508d6ce905c6fbbd4197544ddc extends \Twig\Template
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
        if (($context["user"] ?? null)) {
            // line 2
            echo "<li class=\"nav-item text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"";
            // line 3
            echo $this->extensions['Cms\Twig\Extension']->pageFilter(twig_get_attribute($this->env, $this->source, ($context["myAccount"] ?? null), "accountPage", [], "any", false, false, false, 3));
            echo "\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"user\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">";
            // line 5
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Account"]);
            echo "</span>
\t</a>
</li>
<li class=\"nav-item text-center d-none d-sm-block\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"log-out\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">";
            // line 11
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sign Out"]);
            echo "</span>
\t</a>
</li>
";
        } else {
            // line 15
            echo "<li class=\"nav-item text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"";
            // line 16
            echo $this->extensions['System\Twig\Extension']->appFilter("/login");
            echo "\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"log-in\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">";
            // line 18
            echo call_user_func_array($this->env->getFilter('_')->getCallable(), ["Sign In"]);
            echo "</span>
\t</a>
</li>
";
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/account-btn.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  63 => 15,  56 => 11,  47 => 5,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if user %}
<li class=\"nav-item text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"{{ myAccount.accountPage | page }}\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"user\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">{{ 'Account'|_ }}</span>
\t</a>
</li>
<li class=\"nav-item text-center d-none d-sm-block\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"log-out\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">{{ 'Sign Out'|_ }}</span>
\t</a>
</li>
{% else %}
<li class=\"nav-item text-center\">
\t<a class=\"nav-link opacity-70 hover:opacity-100 text-dark my-sm-4 my-3 py-0 px-2 w-16 w-md-18 border-right\" href=\"{{ '/login' | app }}\">
\t\t<i class=\"d-block mx-auto w-5 h-5 mb-1\" data-feather=\"log-in\"></i>
\t\t<span class=\"d-block text-uppercase font-1\">{{ 'Sign In'|_ }}</span>
\t</a>
</li>
{% endif %}", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/header/account-btn.htm", "");
    }
}
