<?php

/* userdata/index.html.twig */
class __TwigTemplate_8930c27b5313ce6b257119847290a048a4bd81847dba324f72b1b0dda4fa0e8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "userdata/index.html.twig", 1);
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userdata/index.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "userdata/index.html.twig"));

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
        echo "    User data
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
";
        // line 15
        echo "
    <h1>
        User data
    </h1>
    ";
        // line 19
        if ((array_key_exists("userData", $context) && twig_length_filter($this->env, (isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData"))))) {
            // line 20
            echo "    <h3> Login: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "login", array()), "html", null, true);
            echo " </h3>

        <table class=\"zui-table\">
            <tr>
            <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.imie"), "html", null, true);
            echo " </th>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userData", array()), "Imie", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nazwisko"), "html", null, true);
            echo " </th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userData", array()), "Nazwisko", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
            echo " </th>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userData", array()), "email", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nip"), "html", null, true);
            echo " </th>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userData", array()), "NIP", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.regon"), "html", null, true);
            echo " </th>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "userData", array()), "REGON", array()), "html", null, true);
            echo "</td>
            </tr>
";
            // line 43
            if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "phone", array())) {
                // line 44
                echo "            <tr>
                <th>";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone1"), "html", null, true);
                echo " </th>
                <td>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "phone", array()), "tel1", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone2"), "html", null, true);
                echo " </th>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "phone", array()), "tel2", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>";
                // line 53
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.phone3"), "html", null, true);
                echo " </th>
                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "phone", array()), "tel3", array()), "html", null, true);
                echo "</td>
            </tr>
    ";
            }
            // line 57
            echo "    ";
            if ($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "adress", array())) {
                // line 58
                echo "            <tr>
                <th>";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.city"), "html", null, true);
                echo " </th>
                <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "adress", array()), "city", array()), "html", null, true);
                echo "</td>
            </tr>
            <tr>
                <th>";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.street"), "html", null, true);
                echo " </th>
                <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "adress", array()), "street", array()), "html", null, true);
                echo "</td>
            </tr>
        <tr>
            <th>";
                // line 67
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.number"), "html", null, true);
                echo " </th>
            <td>";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "adress", array()), "number", array()), "html", null, true);
                echo "</td>
        </tr>
        <tr>
            <th>";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.postal_code"), "html", null, true);
                echo " </th>
            <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : $this->getContext($context, "userData")), "adress", array()), "postal_code", array()), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            // line 75
            echo "        </table>
        <a href= \"";
            // line 76
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("account_edit");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("account_edit"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 78
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
        return "userdata/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 78,  222 => 76,  219 => 75,  213 => 72,  209 => 71,  203 => 68,  199 => 67,  193 => 64,  189 => 63,  183 => 60,  179 => 59,  176 => 58,  173 => 57,  167 => 54,  163 => 53,  157 => 50,  153 => 49,  147 => 46,  143 => 45,  140 => 44,  138 => 43,  133 => 41,  129 => 40,  123 => 37,  119 => 36,  113 => 33,  109 => 32,  103 => 29,  99 => 28,  93 => 25,  89 => 24,  81 => 20,  79 => 19,  73 => 15,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    User data
{% endblock %}

{% block body %}

{#    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }
    </style>#}

    <h1>
        User data
    </h1>
    {% if userData is defined and userData|length %}
    <h3> Login: {{ userData.login }} </h3>

        <table class=\"zui-table\">
            <tr>
            <th>{{ 'label.imie'|trans }} </th>
            <td>{{ userData.userData.Imie }}</td>
            </tr>
            <tr>
                <th>{{ 'label.nazwisko'|trans }} </th>
                <td>{{ userData.userData.Nazwisko }}</td>
            </tr>
            <tr>
                <th>{{ 'label.email'|trans }} </th>
                <td>{{ userData.userData.email }}</td>
            </tr>
            <tr>
                <th>{{ 'label.nip'|trans }} </th>
                <td>{{ userData.userData.NIP }}</td>
            </tr>
            <tr>
                <th>{{ 'label.regon'|trans }} </th>
                <td>{{ userData.userData.REGON }}</td>
            </tr>
{% if userData.phone %}
            <tr>
                <th>{{ 'label.phone1'|trans }} </th>
                <td>{{ userData.phone.tel1 }}</td>
            </tr>
            <tr>
                <th>{{ 'label.phone2'|trans }} </th>
                <td>{{ userData.phone.tel2 }}</td>
            </tr>
            <tr>
                <th>{{ 'label.phone3'|trans }} </th>
                <td>{{ userData.phone.tel3 }}</td>
            </tr>
    {% endif %}
    {% if userData.adress %}
            <tr>
                <th>{{ 'label.city'|trans }} </th>
                <td>{{ userData.adress.city }}</td>
            </tr>
            <tr>
                <th>{{ 'label.street'|trans }} </th>
                <td>{{ userData.adress.street }}</td>
            </tr>
        <tr>
            <th>{{ 'label.number'|trans }} </th>
            <td>{{ userData.adress.number }}</td>
        </tr>
        <tr>
            <th>{{ 'label.postal_code'|trans }} </th>
            <td>{{ userData.adress.postal_code }}</td>
        </tr>
    {% endif %}
        </table>
        <a href= \"{{ url('account_edit') }}\">{{ 'account_edit'|trans }}</a>
    {% else %}
        <div>
            List is empty!
        </div>
    {% endif %}
{% endblock %}", "userdata/index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\userdata\\index.html.twig");
    }
}
