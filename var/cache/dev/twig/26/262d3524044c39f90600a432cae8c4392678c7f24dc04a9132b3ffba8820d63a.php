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

/* acceuil.html.twig */
class __TwigTemplate_4cbeae5f2819fbf6fae003cf9b398e005f3badec6e3f78f793dc87f80ea847f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo "
";
        // line 5
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            echo " 
";
            // line 6
            $this->loadTemplate("BarCandidat/header.html.twig", "acceuil.html.twig", 6)->display($context);
        }
        // line 8
        echo "
";
        // line 9
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAN")) {
            echo " 
";
            // line 10
            $this->loadTemplate("BarCandidat/header.html.twig", "acceuil.html.twig", 10)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 10, $this->source); })())]));
        }
        // line 12
        echo "
";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REC")) {
            echo " 
";
            // line 14
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\RecruteurController:recruteurDashboard"));
            echo "
";
        }
        // line 16
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAN")) {
            echo " 

<!--=================================
banner -->
<section class=\"header-inner header-inner-big bg-holder text-white\" style=\"background-image: url(/images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"job-search-field\">
          <div class=\"job-search-item\">
            <form class=\"form row\">
              <div class=\"col-lg-5\">
               
              <div class=\"col-lg-5\">
               
              </div>
              <div class=\"col-lg-2 col-sm-12\">
             
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class=\"container\">
    <div class=\"row\">
        
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box mb-0\" >
          <div class=\"row mb-4\">
            <div class=\"col-md-7 col-sm-5 d-flex align-items-center\">
              <div class=\"section-title-02 mb-0 \">
              <br>
              <br>
                <h4 class=\"mb-0\">Postes de Travail</h4>
              </div>
            </div>
            
          </div>
          <div class=\"user-dashboard-table table-responsive\">
         
            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                  <th scope=\"col\">salaire</th>
                  <th scope=\"col\">Categorie</th>
                </tr>
              </thead>
              <tbody>
               <!--==  On affiche tous  les données de ses offres pour le recruteur  ==-->
              ";
            // line 78
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 78, $this->source); })()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 79
                echo "                <tr>
                  <th scope=\"row\">";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 80), "html", null, true);
                echo "
                    <p class=\"mb-1 mt-2\">Date d'Expiration: ";
                // line 81
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 81), "html", null, true);
                echo "</p>
                  </th>
                  <td>";
                // line 83
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "domaine", [], "any", false, false, false, 83), "html", null, true);
                echo "</td>
                  <td>";
                // line 84
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "type_contrat", [], "any", false, false, false, 84), "html", null, true);
                echo "</td>
                  <td>";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 85), "html", null, true);
                echo "</td>
                  <td> ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "categorie", [], "any", false, false, false, 86), "html", null, true);
                echo "</td>
                </tr>
           
     <!-- lorsque li  n'ya pas encore des offres , cette partie va s'execute -->
                   ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 91
                echo "           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "               
              </tbody>
            </table>
          </div>
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Les offres d'emploi =======================-->

";
        }
        // line 108
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "acceuil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 108,  231 => 95,  222 => 91,  212 => 86,  208 => 85,  204 => 84,  200 => 83,  195 => 81,  191 => 80,  188 => 79,  183 => 78,  123 => 21,  113 => 20,  101 => 16,  96 => 14,  92 => 13,  89 => 12,  86 => 10,  82 => 9,  79 => 8,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}

{% if is_granted('ROLE_ADMIN')%} 
{% include \"BarCandidat/header.html.twig\" %}
{% endif %}

{% if is_granted('ROLE_CAN')%} 
{% include \"BarCandidat/header.html.twig\" with {id:id}%}
{% endif %}

{% if is_granted('ROLE_REC')%} 
{{ render(controller (\"App\\\\Controller\\\\RecruteurController:recruteurDashboard\")) }}
{% endif %}


{% endblock %}

{% block body %}
{% if is_granted('ROLE_CAN')%} 

<!--=================================
banner -->
<section class=\"header-inner header-inner-big bg-holder text-white\" style=\"background-image: url(/images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"job-search-field\">
          <div class=\"job-search-item\">
            <form class=\"form row\">
              <div class=\"col-lg-5\">
               
              <div class=\"col-lg-5\">
               
              </div>
              <div class=\"col-lg-2 col-sm-12\">
             
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class=\"container\">
    <div class=\"row\">
        
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box mb-0\" >
          <div class=\"row mb-4\">
            <div class=\"col-md-7 col-sm-5 d-flex align-items-center\">
              <div class=\"section-title-02 mb-0 \">
              <br>
              <br>
                <h4 class=\"mb-0\">Postes de Travail</h4>
              </div>
            </div>
            
          </div>
          <div class=\"user-dashboard-table table-responsive\">
         
            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                  <th scope=\"col\">salaire</th>
                  <th scope=\"col\">Categorie</th>
                </tr>
              </thead>
              <tbody>
               <!--==  On affiche tous  les données de ses offres pour le recruteur  ==-->
              {% for offre in offres %}
                <tr>
                  <th scope=\"row\">{{offre.nom_poste}}
                    <p class=\"mb-1 mt-2\">Date d'Expiration: {{offre.date_expiration}}</p>
                  </th>
                  <td>{{offre.domaine}}</td>
                  <td>{{offre.type_contrat}}</td>
                  <td>{{offre.salaire}}</td>
                  <td> {{offre.categorie}}</td>
                </tr>
           
     <!-- lorsque li  n'ya pas encore des offres , cette partie va s'execute -->
                   {% else %}
           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 {% endfor %}
               
              </tbody>
            </table>
          </div>
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Les offres d'emploi =======================-->

{% endif %}

{% endblock %}











", "acceuil.html.twig", "C:\\wamp64\\www\\JOB\\templates\\acceuil.html.twig");
    }
}
