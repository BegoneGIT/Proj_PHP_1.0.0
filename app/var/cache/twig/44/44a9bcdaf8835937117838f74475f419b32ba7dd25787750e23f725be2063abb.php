<?php

/* default/_paginator.html.twig */
class __TwigTemplate_68753a7dc493b5ae9811c9a98b2f2741545a4f47fd55bfb1fe5cc510ef3347e7 extends Twig_Template
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
        // line 8
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "page", array()) > 1)) {
            // line 9
            echo "    ";
            $context["previous"] = ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "page", array()) - 1);
            // line 10
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) ? $context["route_name"] : null), array("page" => (isset($context["previous"]) ? $context["previous"] : null))), "html", null, true);
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
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "page", array()) < $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "pages_number", array()))) {
            // line 16
            echo "    ";
            $context["next"] = ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "page", array()) + 1);
            // line 17
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl((isset($context["route_name"]) ? $context["route_name"] : null), array("page" => (isset($context["next"]) ? $context["next"] : null))), "html", null, true);
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
        return array (  52 => 18,  45 => 17,  42 => 16,  40 => 15,  37 => 14,  30 => 11,  24 => 10,  21 => 9,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/_paginator.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\default\\_paginator.html.twig");
    }
}
