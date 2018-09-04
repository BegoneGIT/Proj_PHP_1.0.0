<?php

/* parts/index.html.twig */
class __TwigTemplate_4b630b9daae9c5b765c4cf2607668ae799297f6b48c0139f343b136e2a9d9da1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parts/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parts/index.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parts/index.html.twig"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parts.index"), "html", null, true);
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <style>
    table {
        width: 100%;
        border: 1px solid black;
    }
    </style>

    ";
        // line 16
        $this->loadTemplate("default/_paginator.html.twig", "parts/index.html.twig", 16)->display(array_merge($context, array("company" =>         // line 17
(isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")), "paginator" =>         // line 18
(isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "route_name" => "parts_index_paginated")));
        // line 21
        echo "
";
        // line 26
        echo "

    <h1>
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parts.index"), "html", null, true);
        echo "
    </h1>
    ";
        // line 31
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array())))) {
            // line 32
            echo "        <table class=\"zui-table\">
            <tr>
                <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("index.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("numbers.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price.table"), "html", null, true);
            echo " </th>
                ";
            // line 38
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 39
                echo "                    <th>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.edit"), "html", null, true);
                echo " </th>
                ";
            }
            // line 41
            echo "            </tr>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 43
                echo "                <tr>
                    <td><a href= \"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("track_add", array("INDEKS" => $this->getAttribute($context["row"], "INDEKS", array()), "company" => (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "INDEKS", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "NAZWA", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "STAN_MIN", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "CENA", array()), "html", null, true);
                echo "</td>
                    ";
                // line 48
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                    // line 49
                    echo "                        <td><a href= \"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("modify_part_data", array("partID" => $this->getAttribute($context["row"], "ID", array()))), "html", null, true);
                    echo "\">";
                    echo "&#9755";
                    echo "</a> </td>
                    ";
                }
                // line 51
                echo "                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </table>
        ";
            // line 55
            echo "    ";
        } else {
            // line 56
            echo "        <div>
            ";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "empty_list", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 57,  180 => 56,  177 => 55,  174 => 53,  167 => 51,  159 => 49,  157 => 48,  153 => 47,  149 => 46,  145 => 45,  139 => 44,  136 => 43,  132 => 42,  129 => 41,  123 => 39,  121 => 38,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 32,  99 => 31,  94 => 29,  89 => 26,  86 => 21,  84 => 18,  83 => 17,  82 => 16,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}
    {{ 'parts.index'|trans }}
{% endblock %}

{% block body %}

    <style>
    table {
        width: 100%;
        border: 1px solid black;
    }
    </style>

    {% include 'default/_paginator.html.twig' with {
        company: company,
        paginator: paginator,
        route_name: 'parts_index_paginated',
    } %}

{#    {{ form_start(form, { method: 'post', action: url('parts_search_paginated') }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.search'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}#}


    <h1>
        {{ 'parts.index'|trans }}
    </h1>
    {% if paginator.data is defined and paginator.data|length %}
        <table class=\"zui-table\">
            <tr>
                <th>{{ 'index.table'|trans }} </th>
                <th>{{  'name.table'|trans }} </th>
                <th>{{ 'numbers.table'|trans }} </th>
                <th>{{ 'price.table'|trans }} </th>
                {% if is_granted('ROLE_ADMIN') %}
                    <th>{{ 'title.edit'|trans }} </th>
                {% endif %}
            </tr>
            {% for row in paginator.data %}
                <tr>
                    <td><a href= \"{{ url('track_add', {'INDEKS': row.INDEKS, 'company': company}) }}\">{{ row.INDEKS }}</a></td>
                    <td>{{ row.NAZWA }}</td>
                    <td>{{ row.STAN_MIN }}</td>
                    <td>{{ row.CENA }}</td>
                    {% if is_granted('ROLE_ADMIN') %}
                        <td><a href= \"{{ url('modify_part_data', {'partID': row.ID}) }}\">{{ '&#9755' }}</a> </td>
                    {% endif %}
                </tr>
            {% endfor %}
        </table>
        {#<a href= \"{{ url('homepage') }}\">{{ 'homepage'|trans }}</a>#}
    {% else %}
        <div>
            {{ error.empty_list }}
        </div>
    {% endif %}
{% endblock %}", "parts/index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\parts\\index.html.twig");
    }
}
