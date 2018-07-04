<?php

/* userdata/displayUsers.html.twig */
class __TwigTemplate_e7a94a790dd536879edc32ea88d2d3664474983831a58e5b35bb8fee43ee9e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userdata/displayUsers.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userdata/displayUsers.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userdata/displayUsers.html.twig"));

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
        echo "    Parts
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
        $this->loadTemplate("default/_paginator.html.twig", "userdata/displayUsers.html.twig", 16)->display(array_merge($context, array("paginator" =>         // line 17
(isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "route_name" => "parts_index_paginated")));
        // line 20
        echo "
    <h1>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("users.index"), "html", null, true);
        echo "
    </h1>
    ";
        // line 24
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array())))) {
            // line 25
            echo "        <table>
            <tr>
                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("id.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.imie"), "html", null, true);
            echo " </th>
                <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nazwisko"), "html", null, true);
            echo " </th>
                <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
            echo " </th>
                <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nip"), "html", null, true);
            echo " </th>
                <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.regon"), "html", null, true);
            echo " </th>
                <th>";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone1"), "html", null, true);
            echo " </th>
                <th>";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone2"), "html", null, true);
            echo " </th>
                <th>";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone3"), "html", null, true);
            echo " </th>
                <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.city"), "html", null, true);
            echo " </th>
                <th>";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.street"), "html", null, true);
            echo " </th>
                <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.number"), "html", null, true);
            echo " </th>
                <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.postal_code"), "html", null, true);
            echo " </th>

            </tr>
            ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 43
                echo "                <tr>
                    <td>";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "idUzytkownicy", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "Imie", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "Nazwisko", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "email", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "NIP", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "REGON", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "tel1", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "tel2", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "tel3", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "miasto", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "ulica", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "numer", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "kod_pocztowy", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "        </table>
    ";
        } else {
            // line 61
            echo "        <div>
            List is empty!
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "userdata/displayUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 61,  216 => 59,  207 => 56,  203 => 55,  199 => 54,  195 => 53,  191 => 52,  187 => 51,  183 => 50,  179 => 49,  175 => 48,  171 => 47,  167 => 46,  163 => 45,  159 => 44,  156 => 43,  152 => 42,  146 => 39,  142 => 38,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  122 => 33,  118 => 32,  114 => 31,  110 => 30,  106 => 29,  102 => 28,  98 => 27,  94 => 25,  92 => 24,  87 => 22,  83 => 20,  81 => 17,  80 => 16,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Parts
{% endblock %}

{% block body %}

    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }
    </style>

    {% include 'default/_paginator.html.twig' with {
        paginator: paginator,
        route_name: 'parts_index_paginated',
    } %}

    <h1>
        {{ 'users.index'|trans }}
    </h1>
    {% if paginator.data is defined and paginator.data|length %}
        <table>
            <tr>
                <th>{{ 'id.table'|trans }} </th>
                <th>{{  'label.imie'|trans }} </th>
                <th>{{ 'label.nazwisko'|trans }} </th>
                <th>{{ 'label.email'|trans }} </th>
                <th>{{ 'label.nip'|trans }} </th>
                <th>{{ 'label.regon'|trans }} </th>
                <th>{{ 'label.phone1'|trans }} </th>
                <th>{{ 'label.phone2'|trans }} </th>
                <th>{{ 'label.phone3'|trans }} </th>
                <th>{{ 'label.city'|trans }} </th>
                <th>{{ 'label.street'|trans }} </th>
                <th>{{ 'label.number'|trans }} </th>
                <th>{{ 'label.postal_code'|trans }} </th>

            </tr>
            {% for row in paginator.data %}
                <tr>
                    <td>{{ row.idUzytkownicy }}</td>
                    <td>{{ row.Imie }}</td>
                    <td>{{ row.Nazwisko }}</td>
                    <td>{{ row.email }}</td>
                    <td>{{ row.NIP }}</td>
                    <td>{{ row.REGON }}</td>
                    <td>{{ row.tel1 }}</td>
                    <td>{{ row.tel2 }}</td>
                    <td>{{ row.tel3 }}</td>
                    <td>{{ row.miasto }}</td>
                    <td>{{ row.ulica }}</td>
                    <td>{{ row.numer }}</td>
                    <td>{{ row.kod_pocztowy }}</td>
                </tr>
            {% endfor %}
        </table>
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
{% endblock %}", "userdata/displayUsers.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\userdata\\displayUsers.html.twig");
    }
}
