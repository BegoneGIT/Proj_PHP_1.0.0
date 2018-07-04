<?php

/* userdata/index.html.twig */
class __TwigTemplate_a444699acd93f7b33baf182b42f8fe886f58219b7f3829484c35f5c8c7ef2886 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    User data
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
    <style>
        table {
            width: 100%;
            border: 1px solid black;
        }
    </style>

    <h1>
        User data
    </h1>
    ";
        // line 19
        if ((array_key_exists("userData", $context) && twig_length_filter($this->env, (isset($context["userData"]) ? $context["userData"] : null)))) {
            // line 20
            echo "    <h3> Login: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "login", array()), "html", null, true);
            echo " </h3>

        <table>
            <tr>
            <th>";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.imie"), "html", null, true);
            echo " </th>
            <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "userData", array()), "Imie", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nazwisko"), "html", null, true);
            echo " </th>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "userData", array()), "Nazwisko", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.email"), "html", null, true);
            echo " </th>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "userData", array()), "email", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.nip"), "html", null, true);
            echo " </th>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "userData", array()), "NIP", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label.regon"), "html", null, true);
            echo " </th>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["userData"]) ? $context["userData"] : null), "userData", array()), "REGON", array()), "html", null, true);
            echo "</td>
            </tr>
        </table>
        <a href='../../index.php'>";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 46
            echo "        <div>
            List is empty!
        </div>
    ";
        }
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
        return array (  118 => 46,  113 => 44,  107 => 41,  103 => 40,  97 => 37,  93 => 36,  87 => 33,  83 => 32,  77 => 29,  73 => 28,  67 => 25,  63 => 24,  55 => 20,  53 => 19,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "userdata/index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\userdata\\index.html.twig");
    }
}
