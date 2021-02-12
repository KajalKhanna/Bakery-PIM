<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_d3dbd42419d5e61c4785e77041e628cdcfafe66f0200ff073ee2d0da15124bc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'front_nav_left_section' => [$this, 'block_front_nav_left_section'],
            'front_nav_right_section' => [$this, 'block_front_nav_right_section'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
\t
\t<title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<!-- Google font -->
\t<link href=\"https://fonts.googleapis.com/css?family=Cabin:400,700\" rel=\"stylesheet\">

\t<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
\t<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
\t<!--[if lt IE 9]>
\t\t<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
\t\t<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
\t<![endif]-->
\t<!-- Bootstrap -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css", "default"), "html", null, true);
        echo "\" />
\t<!-- Custom stlylesheet -->
\t<link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css", "default"), "html", null, true);
        echo "\" />
\t<!-- Favicon -->
\t<link rel=\"icon\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/favicon.ico", "default"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    ";
        // line 26
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 27
        echo "</head>

<body>
\t<div class=\"section\">
\t\t<nav class=\"navbar navbar-default\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t\t<span class=\"icon-bar\"></span>
\t\t\t\t\t</button>
\t\t\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        echo "\">";
        echo twig_escape_filter($this->env, ($context["project_name"] ?? null), "html", null, true);
        echo "</a>
\t\t\t\t\t";
        // line 41
        $this->displayBlock('front_nav_left_section', $context, $blocks);
        // line 42
        echo "\t\t\t\t</div>
\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">\t
\t\t\t\t\t";
        // line 44
        $this->displayBlock('front_nav_right_section', $context, $blocks);
        // line 45
        echo "\t\t\t\t</div>
\t\t\t</div>
\t\t</nav>
\t\t<div class=\"container\">
            ";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "\t\t</div>
\t\t<footer>
\t\t\t<div class=\"container text-center p-20x\">&copy; Copyright 2020, All Rights Reserved</div>
\t\t</footer>
\t</div>
\t";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
\t<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
\t<script src=\"https://use.fontawesome.com/63d6908806.js\"></script>
</body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["project_name"] ?? null), "html", null, true);
    }

    // line 26
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 41
    public function block_front_nav_left_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 44
    public function block_front_nav_right_section($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 55
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 55,  163 => 49,  157 => 44,  151 => 41,  145 => 26,  138 => 10,  130 => 56,  128 => 55,  121 => 50,  119 => 49,  113 => 45,  111 => 44,  107 => 42,  105 => 41,  99 => 40,  84 => 27,  82 => 26,  78 => 25,  73 => 23,  68 => 21,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\base.html.twig");
    }
}
