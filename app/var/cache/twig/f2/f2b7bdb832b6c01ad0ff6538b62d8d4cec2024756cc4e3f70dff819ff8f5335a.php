<?php

/* parts/index.html.twig */
class __TwigTemplate_58bfce7352853a2f5d0113690c93fec428e04f6f3c19131196e4fc76c154f32c extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Parts
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

    ";
        // line 16
        $this->loadTemplate("default/_paginator.html.twig", "parts/index.html.twig", 16)->display(array_merge($context, array("paginator" =>         // line 17
(isset($context["paginator"]) ? $context["paginator"] : null), "route_name" => "parts_index_paginated")));
        // line 20
        echo "
    <h1>
        ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("parts.index"), "html", null, true);
        echo "
    </h1>
    ";
        // line 24
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array(), "any", true, true) && twig_length_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array())))) {
            // line 25
            echo "        <table>
            <tr>
                <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("index.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("name.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("localization.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("numbers.table"), "html", null, true);
            echo " </th>
                <th>";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("price.table"), "html", null, true);
            echo " </th>
            </tr>
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "data", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
                // line 34
                echo "                <tr>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "INDEKS", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "NAZWA", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "LOKALIZACJA", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "STAN_MIN", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["row"], "CENA1", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        </table>
        <a href='../../index.php'>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("homepage"), "html", null, true);
            echo "</a>
    ";
        } else {
            // line 45
            echo "        <div>
            List is empty!
        </div>
    ";
        }
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
        return array (  129 => 45,  124 => 43,  121 => 42,  112 => 39,  108 => 38,  104 => 37,  100 => 36,  96 => 35,  93 => 34,  89 => 33,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  68 => 27,  64 => 25,  62 => 24,  57 => 22,  53 => 20,  51 => 17,  50 => 16,  40 => 8,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "parts/index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\parts\\index.html.twig");
    }
}
