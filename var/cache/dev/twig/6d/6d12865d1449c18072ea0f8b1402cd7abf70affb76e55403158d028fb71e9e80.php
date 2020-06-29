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

/* experience_profissionnelle/show.html.twig */
class __TwigTemplate_f5725d86f7e72023be8d9bd8601654f614b8c844f607c371b5edac0ae9ccc93c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience_profissionnelle/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience_profissionnelle/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "experience_profissionnelle/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "ExperienceProfissionnelle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>ExperienceProfissionnelle</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom_exp</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 16, $this->source); })()), "nomExp", [], "any", false, false, false, 16), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>";
        // line 20
        ((twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 20, $this->source); })()), "dateDebut", [], "any", false, false, false, 20)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 20, $this->source); })()), "dateDebut", [], "any", false, false, false, 20), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>";
        // line 24
        ((twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 24, $this->source); })()), "dateFin", [], "any", false, false, false, 24), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 28, $this->source); })()), "entreprise", [], "any", false, false, false, 28), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 32, $this->source); })()), "description", [], "any", false, false, false, 32), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["experience_profissionnelle"]) || array_key_exists("experience_profissionnelle", $context) ? $context["experience_profissionnelle"] : (function () { throw new RuntimeError('Variable "experience_profissionnelle" does not exist.', 39, $this->source); })()), "id", [], "any", false, false, false, 39)]), "html", null, true);
        echo "\">edit</a>

    ";
        // line 41
        echo twig_include($this->env, $context, "experience_profissionnelle/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "experience_profissionnelle/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 41,  144 => 39,  139 => 37,  131 => 32,  124 => 28,  117 => 24,  110 => 20,  103 => 16,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}ExperienceProfissionnelle{% endblock %}

{% block body %}
    <h1>ExperienceProfissionnelle</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ experience_profissionnelle.id }}</td>
            </tr>
            <tr>
                <th>Nom_exp</th>
                <td>{{ experience_profissionnelle.nomExp }}</td>
            </tr>
            <tr>
                <th>Date_debut</th>
                <td>{{ experience_profissionnelle.dateDebut ? experience_profissionnelle.dateDebut|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Date_fin</th>
                <td>{{ experience_profissionnelle.dateFin ? experience_profissionnelle.dateFin|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Entreprise</th>
                <td>{{ experience_profissionnelle.entreprise }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>{{ experience_profissionnelle.description }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('experience_profissionnelle_index') }}\">back to list</a>

    <a href=\"{{ path('experience_profissionnelle_edit', {'id': experience_profissionnelle.id}) }}\">edit</a>

    {{ include('experience_profissionnelle/_delete_form.html.twig') }}
{% endblock %}
", "experience_profissionnelle/show.html.twig", "C:\\wamp64\\www\\Recrute\\templates\\experience_profissionnelle\\show.html.twig");
    }
}
