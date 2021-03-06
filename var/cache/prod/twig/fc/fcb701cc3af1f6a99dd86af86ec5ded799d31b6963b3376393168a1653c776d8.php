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

/* includes/usermenu.html.twig */
class __TwigTemplate_a3a6205cb12c9ce5da0952057456310dd76ba64ca808488ddeff7f5264743876 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 2
            echo "    <ul class=\"nav navbar-nav navbar-right\">
        <li class=\"dropdown\">
            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"true\">";
            // line 4
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "getFirstName", [], "method", false, false, false, 4), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 4), "getLastName", [], "method", false, false, false, 4), "html", null, true);
            echo " <span class=\"caret\"></span></a>
            <ul class=\"dropdown-menu\">
                <li><a href=\"";
            // line 6
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_dashboard");
            echo "\">Dashboard</a></li>
                <li><a href=\"";
            // line 7
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_profile");
            echo "\">Profile</a></li>
                ";
            // line 8
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 9
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Admin</a></li>
                ";
            }
            // line 11
            echo "                 ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MANAGER")) {
                // line 12
                echo "                <li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Manger</a></li>
                ";
            }
            // line 14
            echo "                <li role=\"separator\" class=\"divider\"></li>
                <li><a href=\"";
            // line 15
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
            </ul>
        </li>
    </ul>
    ";
        } else {
            // line 20
            echo "<img src=data:image/jpeg;base64,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></img>

";
        }
    }

    public function getTemplateName()
    {
        return "includes/usermenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  78 => 15,  75 => 14,  69 => 12,  66 => 11,  60 => 9,  58 => 8,  54 => 7,  50 => 6,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "includes/usermenu.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\includes\\usermenu.html.twig");
    }
}
