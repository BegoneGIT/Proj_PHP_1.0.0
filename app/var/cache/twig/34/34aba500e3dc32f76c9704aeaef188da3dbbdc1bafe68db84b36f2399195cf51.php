<?php

/* layout.html.twig */
class __TwigTemplate_5ce11cec64ca8ac961bcc7fb0c0bb5346b6ced60f733c32d622948233b20a5ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " Katalog części</title>

        <meta charset=\"UTF-8\">

        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
        <link href='https://fonts.googleapis.com/css?family=Quicksand:300,400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,900' rel='stylesheet' type='text/css'>



        <script type=\"text/javascript\">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);

            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('content', $context, $blocks);
        // line 28
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 27,  63 => 4,  57 => 28,  55 => 27,  33 => 8,  26 => 4,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "C:\\xampp\\htdocs\\Proj_PHP_1.0.0\\app\\templates\\layout.html.twig");
    }
}
