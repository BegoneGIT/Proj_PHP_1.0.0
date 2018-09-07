<?php

/* index.html.twig */
class __TwigTemplate_959324d008d8cd7fbd46d417f07530a01abeeaf357c6728ebe91e97920be2678 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    ";
        $this->loadTemplate("default/_flash_messages.html.twig", "index.html.twig", 8)->display($context);
        // line 9
        echo "    <h1>
       ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
    </h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<div class=\"wrapper\">
    <ul>
        <li><a class=\"first after\"  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_index", array("INDEKS" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("text.default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.search"), "html", null, true);
        echo "</a></li>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 21
            echo "                <li>
                    <a class=\"first after\"  href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("parts_index", array("company" => $this->getAttribute($context["company"], "id", array()))), "html", null, true);
            echo "\">
                        ";
            // line 23
            if (($this->getAttribute($context["company"], "FIRMA", array()) === "pozostale")) {
                // line 24
                echo "                            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("text.rest"), "html", null, true);
                echo "
                        ";
            } else {
                // line 26
                echo "                            <span class=\"capitalize\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "FIRMA", array()), "html", null, true);
                echo "</span>
                        ";
            }
            // line 28
            echo "                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "

        ";
        // line 33
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_users"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 35
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_for_delete");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.user"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addCsv");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.addcsv"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("users_tracked");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("text.parts_tracked_by_users"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 39
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 40
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("track_index", array("company" => "mixed"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tracked"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 41
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("account_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("userdata"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 43
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("deleteUser");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_user"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 44
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("editPass");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("text.change_pass"), "html", null, true);
            echo "</a></li>

        ";
        } else {
            // line 47
            echo "            <li><a class=\"first after\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 50
        echo "    </ul>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  223 => 50,  216 => 48,  209 => 47,  201 => 44,  195 => 43,  189 => 42,  183 => 41,  176 => 40,  173 => 39,  166 => 37,  160 => 36,  154 => 35,  147 => 34,  145 => 33,  141 => 31,  133 => 28,  127 => 26,  121 => 24,  119 => 23,  115 => 22,  112 => 21,  108 => 20,  102 => 19,  97 => 16,  88 => 14,  84 => 13,  78 => 10,  75 => 9,  72 => 8,  63 => 7,  50 => 5,  41 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"layout.html.twig\" %}


{% block title %}
    {{ 'catalogue.parts'|trans }}
{% endblock %}
{% block content %}
    {% include 'default/_flash_messages.html.twig' %}
    <h1>
       {{ 'catalogue.parts'|trans }}
    </h1>

    {% for message in app.session.getFlashBag.get('message') %}
        {{ message }}
    {% endfor %}

<div class=\"wrapper\">
    <ul>
        <li><a class=\"first after\"  href=\"{{ url('search_index',{'INDEKS': 'text.default'|trans }) }}\">{{ 'action.search'|trans }}</a></li>
            {% for company in companies %}
                <li>
                    <a class=\"first after\"  href=\"{{ url('parts_index', {'company': company.id}) }}\">
                        {% if company.FIRMA is same as('pozostale')%}
                            {{ 'text.rest'|trans }}
                        {% else %}
                            <span class=\"capitalize\">{{ company.FIRMA }}</span>
                        {% endif %}
                    </a>
                </li>
        {% endfor %}


        {% if is_granted('ROLE_ADMIN') %}
            <li><a class=\"first after\"  href= \"{{ url('user_index') }}\">{{ 'all_users'|trans }}</a></li>
            <li><a class=\"first after\"  href= \"{{ url('show_for_delete') }}\">{{ 'delete.user'|trans }}</a></li>
            <li><a class=\"first after\"  href= \"{{ url('addCsv') }}\">{{ 'title.addcsv'|trans }}</a></li>
            <li><a class=\"first after\"  href= \"{{ url('users_tracked') }}\">{{ 'text.parts_tracked_by_users'|trans }}</a></li>
        {% endif %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a class=\"first after\"  href= \"{{ url('track_index',{'company': 'mixed'}) }}\">{{ 'tracked'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('account_index') }}\">{{ 'userdata'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('auth_logout') }}\">{{ 'auth.logout.label'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('deleteUser') }}\">{{ 'title.delete_user'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('editPass') }}\">{{ 'text.change_pass'|trans }}</a></li>

        {% else %}
            <li><a class=\"first after\"  href=\"{{ url('register') }}\">{{ 'title.register'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('auth_login') }}\">{{ 'auth.login.label'|trans }}</a></li>
        {% endif %}
    </ul>
</div>
{% endblock %}
", "index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\index.html.twig");
    }
}
