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

/* candidat/offres.html.twig */
class __TwigTemplate_422b1145786710e2d286f1a84dc8adc7078aa2a14d3ddc3859988ce0e7fd5ab6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offres.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidat/offres.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 5
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/offres.html.twig", 5)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 5, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Candidat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
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
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"What?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"Where?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-2 col-sm-12\">
                <div class=\"form-group form-action\">
                  <button type=\"submit\" class=\"btn btn-primary mt-0\"><i class=\"fas fa-search-location\"></i> Find Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">

        <div class=\"row mb-4\">
          <div class=\"col-12\">
            <h5 class=\"mb-0\"> <span class=\"text-primary\">28 Postes </span></h5>
          </div>
        </div>

  <div class=\"row\">
    ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 59
            echo "          <div class=\"col-md-12 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/01.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doffre", ["ido" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 67)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 67), "html", null, true);
            echo "</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li>";
            // line 71
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 71), "html", null, true);
            echo "</li>
                      
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>";
            // line 73
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "categorie", [], "any", false, false, false, 73), "html", null, true);
            echo "</li>
                    
                      <li><i class=\"fas fa-filter pr-1\">Salaire : </i>";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 75), "html", null, true);
            echo " DT</li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-9\">
            <div class=\"job-list-favourite-time\"> 
            
                             <a class=\"btn btn-sm btn-success\" href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretiencan", ["ido" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\">Postuler </a>
             </div>
            </div>
            </div>
          </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
\t

   
       
         
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-4\">
            <ul class=\"pagination justify-content-center mb-0\">
              <li class=\"page-item disabled\"> <span class=\"page-link b-radius-none\">Prev</span> </li>
              <li class=\"page-item active\" aria-current=\"page\"><span class=\"page-link\">1 </span> <span class=\"sr-only\">(current)</span></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">25</a></li>
              <li class=\"page-item\"> <a class=\"page-link\" href=\"#\">Next</a> </li>
            </ul>
          </div>
        </div>
</section>
</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 89,  202 => 83,  191 => 75,  186 => 73,  181 => 71,  172 => 67,  162 => 59,  158 => 58,  109 => 11,  99 => 10,  80 => 8,  70 => 5,  60 => 4,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}

{% block header %}
{% include \"BarCandidat/header.html.twig\"  with {'id': id }%}
{% endblock %}

{% block title %}Edit Candidat{% endblock %}

{% block body %}

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
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"What?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"Where?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-2 col-sm-12\">
                <div class=\"form-group form-action\">
                  <button type=\"submit\" class=\"btn btn-primary mt-0\"><i class=\"fas fa-search-location\"></i> Find Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">

        <div class=\"row mb-4\">
          <div class=\"col-12\">
            <h5 class=\"mb-0\"> <span class=\"text-primary\">28 Postes </span></h5>
          </div>
        </div>

  <div class=\"row\">
    {% for offre in offres %}
          <div class=\"col-md-12 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/01.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"{{ path('doffre', {'ido': offre.id}) }}\">{{offre.nom_poste}}</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li>{{offre.date_expiration}}</li>
                      
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>{{offre.categorie}}</li>
                    
                      <li><i class=\"fas fa-filter pr-1\">Salaire : </i>{{offre.salaire}} DT</li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-9\">
            <div class=\"job-list-favourite-time\"> 
            
                             <a class=\"btn btn-sm btn-success\" href=\"{{ path('entretiencan', {'ido': offre.id}) }}\">Postuler </a>
             </div>
            </div>
            </div>
          </div>
          {% endfor %}

\t

   
       
         
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-4\">
            <ul class=\"pagination justify-content-center mb-0\">
              <li class=\"page-item disabled\"> <span class=\"page-link b-radius-none\">Prev</span> </li>
              <li class=\"page-item active\" aria-current=\"page\"><span class=\"page-link\">1 </span> <span class=\"sr-only\">(current)</span></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">...</a></li>
              <li class=\"page-item\"><a class=\"page-link\" href=\"#\">25</a></li>
              <li class=\"page-item\"> <a class=\"page-link\" href=\"#\">Next</a> </li>
            </ul>
          </div>
        </div>
</section>
</div>
</div>
</div>
{% endblock %}
", "candidat/offres.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\candidat\\offres.html.twig");
    }
}
