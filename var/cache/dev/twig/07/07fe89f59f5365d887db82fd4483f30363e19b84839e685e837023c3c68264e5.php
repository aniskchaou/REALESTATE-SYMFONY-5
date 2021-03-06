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

/* home.html.twig */
class __TwigTemplate_4c2858fd862e547baa5f9016c02ff85e90637a7c3eb693aaba41c47ab61424de extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " 
 Home
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "
<!-- search -->
<div class=\"row\">
    <div class=\"col s12 m12\">
      <div class=\"card green darken-1\">
        <div class=\"card-content white-text\">
          <span class=\"card-title\">Search properties for sale and to rent</span>
          <p>";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), 'form_start');
        echo "
             ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'widget');
        echo "
            <input type=\"submit\" class=\"btn\" value=\"Start\" />
            ";
        // line 19
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), 'form_end');
        echo "
          </p>
        </div>
      </div>
    </div>
  </div>
<br>


<div class=\"row\">
    ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 30
            echo "        <div class=\"col s12 m4\">
            <div class=\"card\">
                
                <!-- image -->
                <div class=\"card-image\">
                ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, $context["property"], "image", [], "any", false, false, false, 35)) {
                // line 36
                echo "                <img src=\"/images/properties/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "image", [], "any", false, false, false, 36), "html", null, true);
                echo "\" height=\"200\" />
                ";
            } else {
                // line 38
                echo "                <img src=\"/images/logo-building.png\" height=\"200\">
                ";
            }
            // line 40
            echo "                </div>

                <!-- title + price -->
                <div class=\"card-content\">
                <p>
                <h5>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "title", [], "any", false, false, false, 45), "html", null, true);
            echo "</h5>
                <p> ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["property"], "price", [], "any", false, false, false, 46), "html", null, true);
            echo " €</p>
                </p>
                </div>

                <!-- view -->
                <div class=\"card-action\">
                <a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("show", ["id" => twig_get_attribute($this->env, $this->source, $context["property"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" class=\"waves-effect waves-light btn\">Voir plus</a>
                </div>


            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "
</div>

<!-- pagination -->
<br>
";
        // line 64
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 64, $this->source); })()));
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 64,  177 => 59,  164 => 52,  155 => 46,  151 => 45,  144 => 40,  140 => 38,  134 => 36,  132 => 35,  125 => 30,  121 => 29,  108 => 19,  103 => 17,  99 => 16,  90 => 9,  80 => 8,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %} 
 Home
{% endblock %}

{% block body %}

<!-- search -->
<div class=\"row\">
    <div class=\"col s12 m12\">
      <div class=\"card green darken-1\">
        <div class=\"card-content white-text\">
          <span class=\"card-title\">Search properties for sale and to rent</span>
          <p>{{ form_start(form) }}
             {{ form_widget(form) }}
            <input type=\"submit\" class=\"btn\" value=\"Start\" />
            {{ form_end(form) }}
          </p>
        </div>
      </div>
    </div>
  </div>
<br>


<div class=\"row\">
    {% for property in properties %}
        <div class=\"col s12 m4\">
            <div class=\"card\">
                
                <!-- image -->
                <div class=\"card-image\">
                {% if property.image %}
                <img src=\"/images/properties/{{property.image}}\" height=\"200\" />
                {% else %}
                <img src=\"/images/logo-building.png\" height=\"200\">
                {% endif %}
                </div>

                <!-- title + price -->
                <div class=\"card-content\">
                <p>
                <h5>{{property.title}}</h5>
                <p> {{property.price}} €</p>
                </p>
                </div>

                <!-- view -->
                <div class=\"card-action\">
                <a href=\"{{ path('show', {'id': property.id}) }}\" class=\"waves-effect waves-light btn\">Voir plus</a>
                </div>


            </div>
        </div>
    {% endfor %}

</div>

<!-- pagination -->
<br>
{{ knp_pagination_render(properties) }}
{% endblock %}
", "home.html.twig", "D:\\projects\\REALESTATE-SYMFONY-5\\templates\\home.html.twig");
    }
}
