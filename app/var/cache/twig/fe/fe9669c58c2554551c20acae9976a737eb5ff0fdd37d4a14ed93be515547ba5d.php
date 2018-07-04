<?php

/* default/_single_alert_message.html.twig */
class __TwigTemplate_a44deb699a9f97857ab5a2843c9a70a0b70e197e090fba2f07a00cc58786bfd1 extends Twig_Template
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
        echo "
";
        // line 10
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : null), true)) : (true))) {
            // line 11
            echo "<div class=\"x_content bs-example-popovers\">
    ";
        }
        // line 13
        echo "    <div class=\"alert alert-dismissible alert-";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "\" role=\"alert\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
        </button>
        ";
        // line 17
        if ( !($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : null)) === (isset($context["message"]) ? $context["message"] : null))) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["message"]) ? $context["message"] : null)), "html", null, true);
            echo "
        ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
            echo "
        ";
        }
        // line 22
        echo "    </div>
    ";
        // line 23
        if (((array_key_exists("is_single_message", $context)) ? (_twig_default_filter((isset($context["is_single_message"]) ? $context["is_single_message"] : null), true)) : (true))) {
            // line 24
            echo "</div>
";
        }
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
        return array (  55 => 24,  53 => 23,  50 => 22,  44 => 20,  38 => 18,  36 => 17,  28 => 13,  24 => 11,  22 => 10,  19 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/_single_alert_message.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\default\\_single_alert_message.html.twig");
    }
}
