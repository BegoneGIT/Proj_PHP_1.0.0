<?php

/* default/_single_alert_message.html.twig */
class __TwigTemplate_9a54ef3be7c8c479768e20d2ad4fb0e4edd6d49c0f3cd7909df8c17da7ec46ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_single_alert_message.html.twig"));

        // line 8
        echo "
";
        // line 10
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 11
            echo "<div class=\"x_content bs-example-popovers\">
    ";
        }
        // line 13
        echo "    <div class=\"alert alert-dismissible alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" role=\"alert\">
";
        // line 17
        echo "        ";
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))) === (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")))) {
            // line 18
            echo "            <span class=\"error-style\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message"))), "html", null, true);
            echo " </span>
        ";
        } else {
            // line 20
            echo "            <span class=\"error-style\"> ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
            echo " </span>
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : $this->getContext($context, "is_single_message")), true)) : (true))) {
            // line 24
            echo "</div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/_single_alert_message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 24,  57 => 23,  54 => 22,  48 => 20,  42 => 18,  39 => 17,  34 => 13,  30 => 11,  28 => 10,  25 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
    Single alert message.

    parameters:
        * `type`: message type (success|info|warning|danger)
        * `message`: message
#}

{# Bootstrap alert, see http://getbootstrap.com/components/#alerts #}
{% if is_single_message|default(true) %}
<div class=\"x_content bs-example-popovers\">
    {% endif %}
    <div class=\"alert alert-dismissible alert-{{ type }}\" role=\"alert\">
{#        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>#}
        {% if message|trans is not same as(message) %}
            <span class=\"error-style\"> {{ message|trans }} </span>
        {% else %}
            <span class=\"error-style\"> {{ message }} </span>
        {% endif %}
    </div>
    {% if is_single_message|default(true) %}
</div>
{% endif %}", "default/_single_alert_message.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\default\\_single_alert_message.html.twig");
    }
}
