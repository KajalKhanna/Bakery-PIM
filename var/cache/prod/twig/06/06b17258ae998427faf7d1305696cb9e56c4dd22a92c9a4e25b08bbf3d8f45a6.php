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

/* security/login.html.twig */
class __TwigTemplate_4edc7a7fd61466a57fcff2d8f7a81904f2f873647899a76903c347158c6d0536 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["project_name"] ?? null), "html", null, true);
        echo " | Login";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"row\">
        <div class=\"form login-form\">

            ";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 9)) {
            // line 10
            echo "                <div class=\"mb-3\">
                    You are logged in as ";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, false, false, 11), "username", [], "any", false, false, false, 11), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
                </div>
            ";
        }
        // line 14
        echo "            <form method=\"post\">
                <div class=\"form-header\">
                    <h2 class=\"text-center\">Login</h2>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        ";
        // line 20
        if (($context["error"] ?? null)) {
            // line 21
            echo "                            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", [], "any", false, false, false, 21), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", [], "any", false, false, false, 21), "security"), "html", null, true);
            echo "</div>
                        ";
        }
        // line 23
        echo "                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Email</span>
                            <input class=\"form-control\" name=\"email\" type=\"text\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Enter your email\" autofocus>
                        </div>
                    </div>
                    <div class=\"col-md-12\">
                        <div class=\"form-group\">
                            <span class=\"form-label\">Password</span>
                            <input class=\"form-control\" name=\"password\" type=\"Password\" placeholder=\"Enter your password\">
                        </div>
                    </div>
                     <div class=\"col-md-6 text-left\">
                        <div class=\"form-check\">
                            <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"remember-me\">
                            <label class=\"form-check-label\" for=\"remember-me\">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class=\"col-md-6 text-right\">
                      <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forgot_password_request");
        echo "\" > Forgot Password?</a>
                    </div> 
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
                </div>
                <div class=\"form-btn\">
                    <button type=\"submit\" class=\"submit-btn\">Login</button>
                </div>
            </form>
        </div>
    </div>
    ";
    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 47,  120 => 45,  99 => 27,  93 => 23,  87 => 21,  85 => 20,  77 => 14,  69 => 11,  66 => 10,  64 => 9,  59 => 6,  55 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "security/login.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\security\\login.html.twig");
    }
}
