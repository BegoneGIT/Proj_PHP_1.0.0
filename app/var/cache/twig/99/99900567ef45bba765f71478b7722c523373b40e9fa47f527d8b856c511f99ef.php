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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <h1>
       ";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
    </h1>

<div class=\"wrapper\">
    <ul>

            ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : $this->getContext($context, "companies")));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 15
            echo "                <li>
                    <a class=\"first after\"  href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("parts_index", array("company" => $this->getAttribute($context["company"], "FIRMA", array()))), "html", null, true);
            echo "\">
                            <span class=\"capitalize\"> ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "FIRMA", array()), "html", null, true);
            echo "</span>
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "

        ";
        // line 23
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 24
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_users"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 25
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_for_delete");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.user"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addCsv");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.addcsv"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 28
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 29
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("track_index", array("company" => "mixed"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tracked"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 30
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("account_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("userdata"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("deleteUser");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_user"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_index", array("INDEKS" => "default"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.search"), "html", null, true);
            echo "</a></li>
        ";
        } else {
            // line 35
            echo "            <li><a class=\"first after\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 38
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
        return array (  180 => 38,  173 => 36,  166 => 35,  159 => 33,  153 => 32,  147 => 31,  141 => 30,  134 => 29,  131 => 28,  124 => 26,  118 => 25,  111 => 24,  109 => 23,  105 => 21,  95 => 17,  91 => 16,  88 => 15,  84 => 14,  75 => 8,  72 => 7,  63 => 6,  50 => 4,  41 => 3,  11 => 1,);
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
    <h1>
       {{ 'catalogue.parts'|trans }}
    </h1>

<div class=\"wrapper\">
    <ul>

            {% for company in companies %}
                <li>
                    <a class=\"first after\"  href=\"{{ url('parts_index', {'company': company.FIRMA}) }}\">
                            <span class=\"capitalize\"> {{ company.FIRMA }}</span>
                    </a>
                </li>
        {% endfor %}


        {% if is_granted('ROLE_ADMIN') %}
            <li><a class=\"first after\"  href= \"{{ url('user_index') }}\">{{ 'all_users'|trans }}</a></li>
            <li><a class=\"first after\"  href= \"{{ url('show_for_delete') }}\">{{ 'delete.user'|trans }}</a></li>
            <li><a class=\"first after\"  href= \"{{ url('addCsv') }}\">{{ 'title.addcsv'|trans }}</a></li>
        {% endif %}
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <li><a class=\"first after\"  href= \"{{ url('track_index',{'company': 'mixed'}) }}\">{{ 'tracked'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('account_index') }}\">{{ 'userdata'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('auth_logout') }}\">{{ 'auth.logout.label'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('deleteUser') }}\">{{ 'title.delete_user'|trans }}</a></li>
            <li><a class=\"first after\"  href=\"{{ url('search_index',{'INDEKS':  'default'}) }}\">{{ 'action.search'|trans }}</a></li>
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
