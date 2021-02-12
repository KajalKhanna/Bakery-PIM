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

/* home/index.html.twig */
class __TwigTemplate_e7d7e502ccd746d0b1522f9d34f9da922fabbf66f34354956aaf5c6282e9774c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ($context["project_name"] ?? null), "html", null, true);
        echo " | Home";
    }

    // line 4
    public function block_front_nav_right_section($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->loadTemplate("includes/menu.html.twig", "home/index.html.twig", 4)->display($context);
    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "
<div class=\"container\">
    <div class=\"row\">
        <div class=\"row\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 12
            echo "                <div class=\"col-md-6\">
                    <div class=\"jumbotron\">
                        <div class=\"col-sm-8\">
                            <div class=\"card-body d-flex flex-column align-items-start\">
                                ";
            // line 17
            echo "                                <h3 class=\"mb-0\">
                                ";
            // line 18
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 19
                echo "                                    <a class=\"text-dark\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show_category", ["id" => twig_get_attribute($this->env, $this->source, $context["category"], "getId", [], "method", false, false, false, 19)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 19), "html", null, true);
                echo "</a>
                                ";
            } else {
                // line 21
                echo "                                     <a onclick=\"alert('Please Register/Login')\" class=\"text-dark\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryName", [], "method", false, false, false, 21), "html", null, true);
                echo "</a>

                                ";
            }
            // line 24
            echo "                                </h3>
                                <div class=\"mb-1 text-muted\">";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCreated", [], "method", false, false, false, 25), ($context["date_format"] ?? null)), "html", null, true);
            echo "</div>
                                <p class=\"card-text mb-auto\">";
            // line 26
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags(twig_get_attribute($this->env, $this->source, $context["category"], "getDescription", [], "method", false, false, false, 26)), 0, 50), "html", null, true);
            echo "</p>
                               ";
            // line 28
            echo "                            </div>
                        </div>
                        <div class=\"col-sm-4\"><img data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\" style=\"max-width: 100%;\" src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("uploads/posts/"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "getCategoryThumbnail", [], "method", false, false, false, 30), "html", null, true);
            echo "\" data-holder-rendered=\"true\"></div>
                        <div class=\"clearfix\"></div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>
    </div>
</div>
";
    }

    // line 39
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 39,  133 => 35,  121 => 30,  117 => 28,  113 => 26,  109 => 25,  106 => 24,  97 => 21,  89 => 19,  87 => 18,  84 => 17,  78 => 12,  74 => 11,  68 => 7,  64 => 6,  57 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "C:\\xampp\\htdocs\\Bakery\\templates\\home\\index.html.twig");
    }
}
