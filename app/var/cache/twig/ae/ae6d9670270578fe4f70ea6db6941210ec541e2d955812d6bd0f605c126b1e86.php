<?php

/* parts/search.html.twig */
class __TwigTemplate_c0a87ff58cd1aa2c8011be2c5049a6f4ad915bc0e99b554f71868260462b3670 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "parts/search.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parts/search.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "parts/search.html.twig"));

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
        // line 15
        $this->loadTemplate("default/_paginator_search.html.twig", "parts/search.html.twig", 15)->display(array_merge($context, array("paginator" =>         // line 16
(isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "route_name" => "parts_search_paginated")));
        // line 19
        echo "    ";
        if ($this->getAttribute((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "INDEKS", array())) {
            // line 20
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "get", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_index", array("INDEKS" => $this->getAttribute((isset($context["search"]) ? $context["search"] : $this->getContext($context, "search")), "INDEKS", array())))));
            echo "
    ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
    <input type=\"submit\" value=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.search"), "html", null, true);
            echo "\" class=\"btn btn-success\" />
    ";
            // line 23
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        } else {
            // line 25
            echo "    ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "get", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_index", array("INDEKS" => "default"))));
            echo "
    ";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
            echo "
    <input type=\"submit\" value=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.search"), "html", null, true);
            echo "\" class=\"btn btn-success\" />
    ";
            // line 28
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
    ";
        }
        // line 30
        echo "

    <h1>
        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parts.index"), "html", null, true);
        echo "
    </h1>
    ";
        // line 35
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array())))) {
            // line 36
            echo "        <table>
            <tr>
                <th>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("index.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("localization.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("numbers.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price.table"), "html", null, true);
            echo " </th>
            </tr>
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 45
                echo "                <tr>
                    <td><a href= \"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("track_add", array("INDEKS" => $this->getAttribute($context["row"], "INDEKS", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "INDEKS", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "NAZWA", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "LOKALIZACJA", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "STAN_MIN", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "CENA", array()), "html", null, true);
                echo "</td>
                </tr>
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
            List is empty!
        </div>
    ";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "parts/search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 56,  197 => 55,  194 => 53,  185 => 50,  181 => 49,  177 => 48,  173 => 47,  167 => 46,  164 => 45,  160 => 44,  155 => 42,  151 => 41,  147 => 40,  143 => 39,  139 => 38,  135 => 36,  133 => 35,  128 => 33,  123 => 30,  118 => 28,  114 => 27,  110 => 26,  105 => 25,  100 => 23,  96 => 22,  92 => 21,  87 => 20,  84 => 19,  82 => 16,  81 => 15,  72 => 8,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    {% include 'default/_paginator_search.html.twig' with {
        paginator: paginator,
        route_name: 'parts_search_paginated',
    } %}
    {% if search.INDEKS %}
    {{ form_start(form, { method: 'get', action: url('search_index',{'INDEKS':  search.INDEKS }) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.search'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    {% else %}
    {{ form_start(form, { method: 'get', action: url('search_index',{'INDEKS':  'default' }) }) }}
    {{ form_widget(form) }}
    <input type=\"submit\" value=\"{{ 'action.search'|trans }}\" class=\"btn btn-success\" />
    {{ form_end(form) }}
    {% endif %}


    <h1>
        {{ 'parts.index'|trans }}
    </h1>
    {% if paginator.data is defined and paginator.data|length %}
        <table>
            <tr>
                <th>{{ 'index.table'|trans }} </th>
                <th>{{  'name.table'|trans }} </th>
                <th>{{ 'localization.table'|trans }} </th>
                <th>{{ 'numbers.table'|trans }} </th>
                <th>{{ 'price.table'|trans }} </th>
            </tr>
            {% for row in paginator.data %}
                <tr>
                    <td><a href= \"{{ url('track_add', {'INDEKS': row.INDEKS}) }}\">{{ row.INDEKS }}</a></td>
                    <td>{{ row.NAZWA }}</td>
                    <td>{{ row.LOKALIZACJA }}</td>
                    <td>{{ row.STAN_MIN }}</td>
                    <td>{{ row.CENA }}</td>
                </tr>
            {% endfor %}
        </table>
        {#<a href= \"{{ url('homepage') }}\">{{ 'homepage'|trans }}</a>#}
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
{% endblock %}", "parts/search.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\parts\\search.html.twig");
    }
}
