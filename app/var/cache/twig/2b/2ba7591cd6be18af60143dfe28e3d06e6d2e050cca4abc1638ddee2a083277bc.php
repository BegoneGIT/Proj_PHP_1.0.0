<?php

/* auth/login.html.twig */
class __TwigTemplate_2f737153f81b9dc7f855c65f78271b3bbedfaa1c37f1c623b00b9998b0dbd9b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "auth/login.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.auth_login"), "html", null, true);
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_horizontal_layout.html.twig", 1 => "form/form_errors.html.twig"), true);
        // line 7
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.auth_login"), "html", null, true);
        echo "</h1>

    ";
        // line 9
        if ((array_key_exists("error", $context) && twig_length_filter($this->env, (isset($context["error"]) ? $context["error"] : null)))) {
            // line 10
            echo "        ";
            $this->loadTemplate("default/_single_alert_message.html.twig", "auth/login.html.twig", 10)->display(array_merge($context, array("is_single_message" => true, "is_dismissible" => false, "type" => "danger", "message" =>             // line 14
(isset($context["error"]) ? $context["error"] : null))));
            // line 16
            echo "    ";
        }
        // line 17
        echo "
    <div>
        ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("auth_login_check")));
        echo "
        ";
        // line 20
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
        <input type=\"submit\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.login"), "html", null, true);
        echo "\" class=\"btn btn-success\" />
        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "auth/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  68 => 21,  64 => 20,  60 => 19,  56 => 17,  53 => 16,  51 => 14,  49 => 10,  47 => 9,  41 => 7,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "auth/login.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\auth\\login.html.twig");
    }
}
