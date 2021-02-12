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

/* user/dashboard.html.twig */
class __TwigTemplate_62db370ba53f57a2b989dc1e8942b3f6243ec4d3cb82625fd3f2f056f7498c5a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'front_nav_right_section' => [$this, 'block_front_nav_right_section'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $this->parent = $this->loadTemplate("base.html.twig", "user/dashboard.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["project_name"] ?? null), "html", null, true);
        echo " | Dashboard";
    }

    // line 4
    public function block_front_nav_right_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("includes/usermenu.html.twig", "user/dashboard.html.twig", 4)->display($context);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 8
            echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"row\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 12
                echo "                <div class=\"col-md-6\">
                    <div class=\"jumbotron\">
                        <div class=\"col-sm-8\">
                            <div class=\"card-body d-flex flex-column align-items-start\">
                                ";
                // line 17
                echo "                                <h3 class=\"mb-0\">
                                    <a class=\"text-dark\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 18)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getName", [], "method", false, false, false, 18), "html", null, true);
                echo "</a>
                                </h3>
                                <div class=\"mb-1 text-muted\">";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getCreatedAt", [], "method", false, false, false, 20), ($context["date_format"] ?? null)), "html", null, true);
                echo "</div>
                                <p class=\"card-text mb-auto\">";
                // line 21
                echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["product"], "getDescription", [], "method", false, false, false, 21)), 0, 50), "html", null, true);
                echo "</p>
                                <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_product", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "getId", [], "method", false, false, false, 22)]), "html", null, true);
                echo "\">Continue reading</a>
                            </div>
                        </div>
                        <div class=\"col-sm-4\"><img data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\" style=\"max-width: 100%;\" src=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/posts/"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "getProductThumbail", [], "method", false, false, false, 25), "html", null, true);
                echo "\" data-holder-rendered=\"true\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        </div>
    </div>
</div>
";
        }
    }

    // line 35
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "user/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 35,  121 => 30,  109 => 25,  103 => 22,  99 => 21,  95 => 20,  88 => 18,  85 => 17,  79 => 12,  75 => 11,  70 => 8,  68 => 7,  64 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/dashboard.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\user\\dashboard.html.twig");
    }
}
