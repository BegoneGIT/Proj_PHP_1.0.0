<?php

/* default/_paginator.html.twig */
class __TwigTemplate_c674a114dae607059cccee18006c878ad81a38a5c51cc18b9cf33aa15c2ec4c2 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_paginator.html.twig"));

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/_paginator.html.twig"));

        // line 8
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "page", array()) > 1)) {
            // line 9
            echo "    ";
            $context["previous"] = ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "page", array()) - 1);
            // line 10
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), array("page" => (isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous")), "company" => (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nav.prev"), "html", null, true);
            echo "\">        ";
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("labels.nav.prev"), "html", null, true);
            echo "
    </a>
";
        }
        // line 14
        echo "
";
        // line 15
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "page", array()) < $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages_number", array()))) {
            // line 16
            echo "    ";
            $context["next"] = ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "page", array()) + 1);
            // line 17
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) ? $context["route_name"] : $this->getContext($context, "route_name")), array("page" => (isset($context["next"]) ? $context["next"] : $this->getContext($context, "next")), "company" => (isset($context["company"]) ? $context["company"] : $this->getContext($context, "company")))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nav.next"), "html", null, true);
            echo "\">
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nav.next"), "html", null, true);
            echo "
    </a>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/_paginator.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  51 => 17,  48 => 16,  46 => 15,  43 => 14,  36 => 11,  30 => 10,  27 => 9,  25 => 8,);
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
    Default view for paginator.

    parameters:
        * `paginator` - paginator
        * `route_name` - route name
#}
{% if paginator.page > 1 %}
    {% set previous = (paginator.page - 1) %}
    <a href=\"{{ url(route_name, {'page': previous, 'company': company}) }}\" title=\"{{ 'label.nav.prev'|trans }}\">        {#powinno byc jeszcze 'label.nav.prev'|trans#}
        {{ 'labels.nav.prev'|trans}}
    </a>
{%  endif %}

{% if paginator.page < paginator.pages_number %}
    {% set next = (paginator.page + 1) %}
    <a href=\"{{ url(route_name, {'page': next, 'company': company}) }}\" title=\"{{ 'label.nav.next'|trans}}\">
        {{ 'label.nav.next'|trans}}
    </a>
{% endif  %}", "default/_paginator.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\default\\_paginator.html.twig");
    }
}
