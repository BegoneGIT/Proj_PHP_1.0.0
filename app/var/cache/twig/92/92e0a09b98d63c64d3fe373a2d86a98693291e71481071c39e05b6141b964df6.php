<?php

/* index.html.twig */
class __TwigTemplate_66c65a9ffe19dbd65de15be818a1acc2664ede398ab77d8abcd4971aa2740f88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->loadTemplate("default/_flash_messages.html.twig", "index.html.twig", 8)->display($context);
        // line 9
        echo "    <h1>
       ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("catalogue.parts"), "html", null, true);
        echo "
    </h1>

    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 14
            echo "        ";
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
<div class=\"wrapper\">
    <ul>
        <li><a class=\"first after\"  href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("search_index", array("INDEKS" => "default"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("action.search"), "html", null, true);
        echo "</a></li>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["companies"]) ? $context["companies"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["company"]) {
            // line 21
            echo "                <li>
                    <a class=\"first after\"  href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("parts_index", array("company" => $this->getAttribute($context["company"], "FIRMA", array()))), "html", null, true);
            echo "\">
                            <span class=\"capitalize\"> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["company"], "FIRMA", array()), "html", null, true);
            echo "</span>
                    </a>
                </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['company'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "

        ";
        // line 29
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 30
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("user_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_users"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("show_for_delete");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("delete.user"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href= \"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("addCsv");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.addcsv"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 34
        echo "        ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 35
            echo "            <li><a class=\"first after\"  href= \"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("track_index", array("company" => "mixed"));
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("tracked"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("account_index");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("userdata"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 37
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.logout.label"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 38
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("deleteUser");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.delete_user"), "html", null, true);
            echo "</a></li>

        ";
        } else {
            // line 41
            echo "            <li><a class=\"first after\"  href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("register");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title.register"), "html", null, true);
            echo "</a></li>
            <li><a class=\"first after\"  href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("auth_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("auth.login.label"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 44
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 44,  162 => 42,  155 => 41,  147 => 38,  141 => 37,  135 => 36,  128 => 35,  125 => 34,  118 => 32,  112 => 31,  105 => 30,  103 => 29,  99 => 27,  89 => 23,  85 => 22,  82 => 21,  78 => 20,  72 => 19,  67 => 16,  58 => 14,  54 => 13,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  32 => 5,  29 => 4,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "index.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\index.html.twig");
    }
}
