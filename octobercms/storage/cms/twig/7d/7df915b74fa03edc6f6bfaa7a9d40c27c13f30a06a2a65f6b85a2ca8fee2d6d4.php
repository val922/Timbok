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

/* /var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/default.htm */
class __TwigTemplate_640daaaf088e345b47d4d4d61594d28d19ca75f629f6e9a4aae39514e32fcc99 extends \Twig\Template
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
        echo "<div class=\"row pt-4\">
    ";
        // line 2
        if (($context["user"] ?? null)) {
            // line 3
            echo "    <div class=\"col-xl-3 col-lg-4\">
        ";
            // line 4
            $context['__cms_component_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->componentFunction("imageUploader"            , $context['__cms_component_params']            );
            unset($context['__cms_component_params']);
            // line 5
            echo "        <div class=\"mt-4 mb-6\">
            <h6 class=\"font-weight-semibold mb-4 pb-2 border-bottom\">";
            // line 6
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.customer_profile"]);
            echo "</h6>
            <ul class=\"list-unstyled\">
                <li class=\"mb-2\">
                    <i class=\"w-4\" data-feather=\"user\"></i>
                    <a class=\"nav-link-inline\">&nbsp;";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "customer", [], "any", false, false, false, 10), "firstname", [], "any", false, false, false, 10), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "customer", [], "any", false, false, false, 10), "lastname", [], "any", false, false, false, 10), "html", null, true);
            echo "</a>
                </li>
                <li class=\"mb-2\">
                    <i class=\"w-4\" data-feather=\"mail\"></i>
                    <a class=\"nav-link-inline\" href=\"mailto:";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
            echo "\">&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 14), "html", null, true);
            echo "</a>
                </li>
            </ul>
            <ul class=\"list-unstyled border p-4 mb-4\">
                <li class=\"pb-1\"><span class=\"opacity-80\">– Registered:</span><span class=\"font-weight-semibold ml-1\">";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "activated_at", [], "any", false, false, false, 18), "M d, Y"), "html", null, true);
            echo "</span></li>
                <li class=\"pb-1\"><span class=\"opacity-80\">– Total orders:</span><span class=\"font-weight-semibold ml-1\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ordersList"] ?? null), "orders", [], "any", false, false, false, 19), "count", [], "any", false, false, false, 19), "html", null, true);
            echo "</span></li>
                <li class=\"pb-1\"><span class=\"opacity-80\">– Total spent:</span>
                    <span class=\"font-weight-semibold ml-1\">
                        ";
            // line 22
            $context["totalPrice"] = 0;
            // line 23
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["ordersList"] ?? null), "orders", [], "any", false, false, false, 23));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 24
                echo "                            ";
                $context["totalPrice"] = (($context["totalPrice"] ?? null) + twig_get_attribute($this->env, $this->source, $context["order"], "total_post_taxes", [], "any", false, false, false, 24));
                // line 25
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ordersList"] ?? null), "orders", [], "any", false, false, false, 26), "currency", [], "any", false, false, false, 26), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalPrice"] ?? null), 2, ".", ","), "html", null, true);
            echo "
                    </span>
                </li>
                <li><span class=\"opacity-80\">– Wishlist Products:</span>
                    <span class=\"font-weight-semibold ml-1\">
                        ";
            // line 31
            $context["totalProducts"] = 0;
            // line 32
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["wishlists"] ?? null), "items", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["wishlist"]) {
                // line 33
                echo "                            ";
                $context["totalProducts"] = (($context["totalProducts"] ?? null) + ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wishlist"], "items", [], "any", false, true, false, 33), "count", [], "any", true, true, false, 33)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["wishlist"], "items", [], "any", false, true, false, 33), "count", [], "any", false, false, false, 33), 0)) : (0)));
                // line 34
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wishlist'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "                        ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ($context["totalProducts"] ?? null)), "html", null, true);
            echo "
                    </span>
                </li>
            </ul>
            <div class=\"pt-2\">
                <a class=\"btn btn-outline-primary btn-sm btn-block\" href=\"";
            // line 40
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("cart");
            echo "\">
                    <i class=\"w-4\" data-feather=\"shopping-cart\"></i>
                    &nbsp;";
            // line 42
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.cart"]);
            echo "
                </a>
            </div>
        </div>
    </div>
    ";
        }
        // line 48
        echo "    <div class=\"";
        echo ((($context["user"] ?? null)) ? ("col-lg-8 offset-xl-1") : ("col-lg-12"));
        echo "\">
        ";
        // line 49
        if (($context["user"] ?? null)) {
            // line 50
            echo "        <div class=\"mall-my-account d-flex flex-wrap justify-content-between pb-6 mb-10 border-bottom\">
            <div class=\"pt-4 mr-4\">
                <h3 class=\"mb-0\">";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "customer", [], "any", false, false, false, 52), "firstname", [], "any", false, false, false, 52), "html", null, true);
            echo "&nbsp;";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "customer", [], "any", false, false, false, 52), "lastname", [], "any", false, false, false, 52), "html", null, true);
            echo "</h3>
                <span class=\"font-5 text-primary\">";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 53), "html", null, true);
            echo "</span>
            </div>
            <div class=\"pt-4\">
                <a class=\"btn btn-outline-danger btn-sm\" href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                    <i data-feather=\"log-out\"></i>
                    &nbsp;";
            // line 58
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.logout"]);
            echo "
                </a>
            </div>
        </div>
        ";
        }
        // line 63
        echo "        <nav class=\"mall-my-account__nav navbar navbar-expand-sm p-0 mb-6\">
            <button class=\"navbar-toggler btn btn-primary bg-primary py-2 px-5 btn-block font-7 mr-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i data-feather=\"menu\"></i>
                &nbsp;Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav w-100 border-bottom\">
                    ";
        // line 70
        if (($context["user"] ?? null)) {
            // line 71
            echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"/account/orders\">
                            <i data-feather=\"shopping-cart\"></i>
                            &nbsp;";
            // line 74
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.orders"]);
            echo "
                            <span class=\"d-flex justify-content-center align-items-center font-3 font-weight-medium bg-white rounded-circle w-5 h-5 border border-danger ml-2\">
                                <span class=\"text-danger\">";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ordersList"] ?? null), "orders", [], "any", false, false, false, 76), "count", [], "any", false, false, false, 76), "html", null, true);
            echo "</span>
                            </span>
                        </a>
                    </li>
                    ";
        }
        // line 81
        echo "                    <li class=\"nav-item active border-bottom border-primary\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"";
        // line 82
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("wishlists");
        echo "\">
                            <i data-feather=\"heart\"></i>
                            &nbsp;";
        // line 84
        echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.wishlists"]);
        echo " 
                            <span class=\"d-flex justify-content-center align-items-center font-3 font-weight-medium bg-white rounded-circle w-5 h-5 border border-danger ml-2\">
                                <span class=\"text-danger\">";
        // line 86
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["wishlists"] ?? null), "items", [], "any", false, false, false, 86), "count", [], "any", false, false, false, 86), "html", null, true);
        echo "</span>
                            </span>
                        </a>
                    </li>
                    ";
        // line 90
        if (($context["user"] ?? null)) {
            // line 91
            echo "                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5 dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i data-feather=\"settings\"></i>
                            &nbsp;";
            // line 94
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.session.account_page"]);
            echo "
                        </a>
                        <div class=\"dropdown-menu border\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item font-weight-medium py-1 px-5\" href=\"/account/profile\">
                                <i data-feather=\"user\"></i>
                                &nbsp;";
            // line 99
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.profile"]);
            echo "
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item font-weight-medium py-1 px-5\" href=\"/account/addresses\">
                                <i data-feather=\"map-pin\"></i>
                                &nbsp;";
            // line 104
            echo call_user_func_array($this->env->getFilter('trans')->getCallable(), ["offline.mall::frontend.addresses"]);
            echo "
                            </a>
                        </div>
                    </li>
                    ";
        }
        // line 109
        echo "                    <li class=\"nav-item\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"";
        // line 110
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("gdpr");
        echo "\">
                            <i data-feather=\"lock\"></i>
                            &nbsp;GDPR
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class=\"mall-my-account__content\">
            <div class=\"mall-wishlists-manager\">
                ";
        // line 120
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, false, 120), "count", [], "any", false, false, false, 120) > 0)) {
            // line 121
            echo "                    <div class=\"mall-wishlists-manager__lists\">
                        <div class=\"mall-wishlists\">
                            ";
            // line 123
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['items'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "items", [], "any", false, false, false, 123)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::list")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 124
            echo "                        </div>
                    </div>
                    <div class=\"mall-wishlists-manager__contents mall-wishlist-content\">
                        ";
            // line 127
            $context['__cms_partial_params'] = [];
            $context['__cms_partial_params']['item'] = twig_get_attribute($this->env, $this->source, ($context["__SELF__"] ?? null), "currentItem", [], "any", false, false, false, 127)            ;
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::contents")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 128
            echo "                    </div>
                ";
        } else {
            // line 130
            echo "                    <div class=\"mall-wishlists-manager__well\">
                        ";
            // line 131
            $context['__cms_partial_params'] = [];
            echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction((($context["__SELF__"] ?? null) . "::empty")            , $context['__cms_partial_params']            , true            );
            unset($context['__cms_partial_params']);
            // line 132
            echo "                    </div>
                ";
        }
        // line 134
        echo "            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 134,  314 => 132,  310 => 131,  307 => 130,  303 => 128,  298 => 127,  293 => 124,  288 => 123,  284 => 121,  282 => 120,  269 => 110,  266 => 109,  258 => 104,  250 => 99,  242 => 94,  237 => 91,  235 => 90,  228 => 86,  223 => 84,  218 => 82,  215 => 81,  207 => 76,  202 => 74,  197 => 71,  195 => 70,  186 => 63,  178 => 58,  170 => 53,  164 => 52,  160 => 50,  158 => 49,  153 => 48,  144 => 42,  139 => 40,  130 => 35,  124 => 34,  121 => 33,  116 => 32,  114 => 31,  103 => 26,  97 => 25,  94 => 24,  89 => 23,  87 => 22,  81 => 19,  77 => 18,  68 => 14,  59 => 10,  52 => 6,  49 => 5,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row pt-4\">
    {% if user %}
    <div class=\"col-xl-3 col-lg-4\">
        {% component 'imageUploader' %}
        <div class=\"mt-4 mb-6\">
            <h6 class=\"font-weight-semibold mb-4 pb-2 border-bottom\">{{ 'offline.mall::frontend.customer_profile' | trans }}</h6>
            <ul class=\"list-unstyled\">
                <li class=\"mb-2\">
                    <i class=\"w-4\" data-feather=\"user\"></i>
                    <a class=\"nav-link-inline\">&nbsp;{{ user.customer.firstname }}&nbsp;{{ user.customer.lastname }}</a>
                </li>
                <li class=\"mb-2\">
                    <i class=\"w-4\" data-feather=\"mail\"></i>
                    <a class=\"nav-link-inline\" href=\"mailto:{{ user.email }}\">&nbsp;{{ user.email }}</a>
                </li>
            </ul>
            <ul class=\"list-unstyled border p-4 mb-4\">
                <li class=\"pb-1\"><span class=\"opacity-80\">– Registered:</span><span class=\"font-weight-semibold ml-1\">{{ user.activated_at|date('M d, Y') }}</span></li>
                <li class=\"pb-1\"><span class=\"opacity-80\">– Total orders:</span><span class=\"font-weight-semibold ml-1\">{{ ordersList.orders.count }}</span></li>
                <li class=\"pb-1\"><span class=\"opacity-80\">– Total spent:</span>
                    <span class=\"font-weight-semibold ml-1\">
                        {% set totalPrice = 0 %}
                        {% for order in ordersList.orders %}
                            {% set totalPrice = totalPrice + order.total_post_taxes %}
                        {% endfor %}
                        {{ ordersList.orders.currency }} {{ totalPrice|number_format(2, '.', ',') }}
                    </span>
                </li>
                <li><span class=\"opacity-80\">– Wishlist Products:</span>
                    <span class=\"font-weight-semibold ml-1\">
                        {% set totalProducts = 0 %}
                        {% for wishlist in wishlists.items %}
                            {% set totalProducts = totalProducts + (wishlist.items.count | default(0)) %}
                        {% endfor %}
                        {{ totalProducts|number_format }}
                    </span>
                </li>
            </ul>
            <div class=\"pt-2\">
                <a class=\"btn btn-outline-primary btn-sm btn-block\" href=\"{{ 'cart'|page }}\">
                    <i class=\"w-4\" data-feather=\"shopping-cart\"></i>
                    &nbsp;{{ 'offline.mall::frontend.cart' | trans }}
                </a>
            </div>
        </div>
    </div>
    {% endif %}
    <div class=\"{{ user ? 'col-lg-8 offset-xl-1' : 'col-lg-12' }}\">
        {% if user %}
        <div class=\"mall-my-account d-flex flex-wrap justify-content-between pb-6 mb-10 border-bottom\">
            <div class=\"pt-4 mr-4\">
                <h3 class=\"mb-0\">{{ user.customer.firstname }}&nbsp;{{ user.customer.lastname }}</h3>
                <span class=\"font-5 text-primary\">{{ user.email }}</span>
            </div>
            <div class=\"pt-4\">
                <a class=\"btn btn-outline-danger btn-sm\" href=\"javascript:;\" data-request=\"onLogout\" data-request-data=\"redirect: '/'\">
                    <i data-feather=\"log-out\"></i>
                    &nbsp;{{ 'offline.mall::frontend.session.logout' | trans }}
                </a>
            </div>
        </div>
        {% endif %}
        <nav class=\"mall-my-account__nav navbar navbar-expand-sm p-0 mb-6\">
            <button class=\"navbar-toggler btn btn-primary bg-primary py-2 px-5 btn-block font-7 mr-0\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNavDropdown\" aria-controls=\"navbarNavDropdown\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <i data-feather=\"menu\"></i>
                &nbsp;Menu
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav w-100 border-bottom\">
                    {% if user %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"/account/orders\">
                            <i data-feather=\"shopping-cart\"></i>
                            &nbsp;{{ 'offline.mall::frontend.orders' | trans }}
                            <span class=\"d-flex justify-content-center align-items-center font-3 font-weight-medium bg-white rounded-circle w-5 h-5 border border-danger ml-2\">
                                <span class=\"text-danger\">{{ ordersList.orders.count }}</span>
                            </span>
                        </a>
                    </li>
                    {% endif %}
                    <li class=\"nav-item active border-bottom border-primary\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"{{ 'wishlists'|page }}\">
                            <i data-feather=\"heart\"></i>
                            &nbsp;{{ 'offline.mall::frontend.wishlists' | trans }} 
                            <span class=\"d-flex justify-content-center align-items-center font-3 font-weight-medium bg-white rounded-circle w-5 h-5 border border-danger ml-2\">
                                <span class=\"text-danger\">{{ wishlists.items.count }}</span>
                            </span>
                        </a>
                    </li>
                    {% if user %}
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5 dropdown-toggle\" href=\"#\" id=\"navbarDropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                            <i data-feather=\"settings\"></i>
                            &nbsp;{{ 'offline.mall::frontend.session.account_page' | trans }}
                        </a>
                        <div class=\"dropdown-menu border\" aria-labelledby=\"navbarDropdownMenuLink\">
                            <a class=\"dropdown-item font-weight-medium py-1 px-5\" href=\"/account/profile\">
                                <i data-feather=\"user\"></i>
                                &nbsp;{{ 'offline.mall::frontend.profile' | trans }}
                            </a>
                            <div class=\"dropdown-divider\"></div>
                            <a class=\"dropdown-item font-weight-medium py-1 px-5\" href=\"/account/addresses\">
                                <i data-feather=\"map-pin\"></i>
                                &nbsp;{{ 'offline.mall::frontend.addresses' | trans }}
                            </a>
                        </div>
                    </li>
                    {% endif %}
                    <li class=\"nav-item\">
                        <a class=\"nav-link d-flex align-items-center text-link font-weight-medium py-3 px-5\" href=\"{{ 'gdpr'|page }}\">
                            <i data-feather=\"lock\"></i>
                            &nbsp;GDPR
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class=\"mall-my-account__content\">
            <div class=\"mall-wishlists-manager\">
                {% if __SELF__.items.count > 0 %}
                    <div class=\"mall-wishlists-manager__lists\">
                        <div class=\"mall-wishlists\">
                            {% partial __SELF__ ~ '::list' items=__SELF__.items %}
                        </div>
                    </div>
                    <div class=\"mall-wishlists-manager__contents mall-wishlist-content\">
                        {% partial __SELF__ ~ '::contents' item=__SELF__.currentItem %}
                    </div>
                {% else %}
                    <div class=\"mall-wishlists-manager__well\">
                        {% partial __SELF__ ~ '::empty' %}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>
</div>", "/var/www/html/octobercms/themes/ketikidis-emarket/partials/wishlists/default.htm", "");
    }
}
