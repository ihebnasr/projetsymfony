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
class __TwigTemplate_13d54324f7592b10931d72d7e7f9cb9fcf9510b36e4fdb8ae07bd1385c7fd2a9 extends Template
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
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_REC")) {
            echo " 
";
            // line 9
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\RecruteurController:recruteurDashboard"));
            echo "
";
        }
        // line 11
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CAN")) {
            echo " 
";
            // line 12
            $this->loadTemplate("BarCandidat/header.html.twig", "acceuil.html.twig", 12)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 12, $this->source); })())]));
        }
        // line 14
        echo "



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 19
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 20
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
          </div>
        </div>

  <div class=\"row\">
    ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 55, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
                // line 56
                echo "  
          <div class=\"col-md-12 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/01.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 65), "html", null, true);
                echo "</h5>
                    <a href=\"";
                // line 66
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("doffre", ["ido" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\">details</a>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li>";
                // line 70
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 70), "html", null, true);
                echo "</li>
                      
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>";
                // line 72
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "categorie", [], "any", false, false, false, 72), "html", null, true);
                echo "</li>
                    
                      <li><i class=\"fas fa-filter pr-1\">Salaire : </i>";
                // line 74
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "salaire", [], "any", false, false, false, 74), "html", null, true);
                echo " DT</li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-9\">
            <div class=\"job-list-favourite-time\"> 
             <a class=\"btn btn-sm btn-success\" href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretiencan", ["ido" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\"  >Postuler </a>
             
   
              
             </div>
            </div>
            </div>
          </div>
      
          
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 92
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
        }
        // line 118
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
        return array (  248 => 118,  220 => 92,  203 => 81,  193 => 74,  188 => 72,  183 => 70,  176 => 66,  172 => 65,  161 => 56,  157 => 55,  119 => 20,  109 => 19,  95 => 14,  92 => 12,  88 => 11,  83 => 9,  79 => 8,  76 => 6,  72 => 5,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}

{% if is_granted('ROLE_ADMIN')%} 
{% include \"BarCandidat/header.html.twig\" %}
{% endif %}
{% if is_granted('ROLE_REC')%} 
{{ render(controller (\"App\\\\Controller\\\\RecruteurController:recruteurDashboard\")) }}
{% endif %}
{% if is_granted('ROLE_CAN')%} 
{% include \"BarCandidat/header.html.twig\" with {id:id}%}
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
                    <h5 class=\"mb-0\">{{offre.nom_poste}}</h5>
                    <a href=\"{{ path('doffre', {'ido': offre.id}) }}\">details</a>
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
             <a class=\"btn btn-sm btn-success\" href=\"{{ path('entretiencan', {'ido': offre.id}) }}\"  >Postuler </a>
             
   
              
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

{% endif %}

{% endblock %}








", "acceuil.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\acceuil.html.twig");
    }
}
