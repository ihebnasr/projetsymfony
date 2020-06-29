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

/* experience_profissionnelle/Experience.html.twig */
class __TwigTemplate_6cf2ed5ed124a2d48d3bf3c2e73d3853d6826d81625442470b63b2a8d4b1670a extends Template
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
            'blog' => [$this, 'block_blog'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience_profissionnelle/Experience.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "experience_profissionnelle/Experience.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "experience_profissionnelle/Experience.html.twig", 2);
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
        $this->loadTemplate("BarCandidat/header.html.twig", "experience_profissionnelle/Experience.html.twig", 4)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })())]));
        
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

        echo " Experience";
        
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
<div class=\"header-inner bg-light\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"candidates-user-info\">
          <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
                <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
              <h3>";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 23, $this->source); })()), "prenomCandidat", [], "any", false, false, false, 23), "html", null, true);
        echo "</h3>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
";
        // line 32
        $this->displayBlock('blog', $context, $blocks);
        // line 109
        echo "

  <!--=================================

  







    Dashboard Nav -->
    <section>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"sticky-top secondary-menu-sticky-top\">
              <div class=\"secondary-menu\">
                <ul class=\"list-unstyled mb-0\">
                   <li><a href= ";
        // line 129
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidat_edit", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 129, $this->source); })())]), "html", null, true);
        echo ">Info Génerale </a></li>
                 
                  <li><a href= ";
        // line 131
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 131, $this->source); })())]), "html", null, true);
        echo ">Info profisionnelle </a></li>

                 <li><a href= ";
        // line 133
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 133, $this->source); })())]), "html", null, true);
        echo ">Mon CV</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Dashboard Nav -->


    

 
 



 <!--=================================
    My Resume -->
<section>
  <div class=\"container\">
    <div class=\"row\">
     
      <div class=\"col-md-12\">
      
        <div class=\"user-dashboard-info-box\">
          <div class=\"dashboard-resume-title d-flex align-items-center\">
            <div class=\"section-title-02 mb-sm-3\">
              <h4 class=\"mb-0\">experiences profissionnelles </h4>
            </div>

   <!-- Lorsqu'on clique sur  le bouton Ajouter Experience , modal ajouter experience  va s'affiché -->
<a class=\"btn btn-md ml-sm-auto btn-primary\" href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal13\"><i class=\"fa fa-plus\"></i>Ajouter Experience </a>
           
          
          </div>
          <!--==  On affiche tous  les données des expriences de candidat connecté ==-->

                  ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience_profissionnelles"]) || array_key_exists("experience_profissionnelles", $context) ? $context["experience_profissionnelles"] : (function () { throw new RuntimeError('Variable "experience_profissionnelles" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["experience_profissionnelle"]) {
            // line 174
            echo "

<!-- Les données des expriences !-->
          <div class=\"collapse show\" id=\"dateposted\">
          </div>
          <div class=\"jobber-candidate-timeline mt-4\">
            <div class=\"jobber-timeline-icon\">
              <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div class=\"jobber-timeline-item\">
              <div class=\"jobber-timeline-cricle\">
                <i class=\"far fa-circle\"></i>
              </div>
              <div class=\"jobber-timeline-info\">
                <div class=\"dashboard-timeline-info\">
                  <div class=\"dashboard-timeline-edit\">
                    <ul class=\"list-unstyled d-flex\">
                     
                       <!-- Lorsqu'on clique sur  le bouton Ajouter Experience , modal supprimer experience  va s'affiché -->
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#Modaldelete";
            // line 193
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "id", [], "any", false, false, false, 193), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\" style=\"margin-right:10px;\"><i class=\"far fa-trash-alt\"></i></a></li>





               <!-- Modal Supprimer  Experience-->
<div class=\"modal fade\" id=\"Modaldelete";
            // line 200
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "id", [], "any", false, false, false, 200), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer cette Experience</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment la supprimer <a href=\"#\"></a> ? </span></p>

          </div>
          <div class=\"modal-footer\">

          <a  href=\"";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "id", [], "any", false, false, false, 215), "idc" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 215, $this->source); })())]), "html", null, true);
            echo "\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal Supprimer  Experience -->

                    </ul>
                  </div>


                <!-- Les données des expriences !-->
                  <span class=\"jobber-timeline-time\">";
            // line 229
            ((twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateDebut", [], "any", false, false, false, 229)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateDebut", [], "any", false, false, false, 229), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                 <span class=\"jobber-timeline-time\">";
            // line 230
            ((twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateFin", [], "any", false, false, false, 230)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateFin", [], "any", false, false, false, 230), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                  <h6 class=\"mb-2\">";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "nomExp", [], "any", false, false, false, 231), "html", null, true);
            echo "</h6>
                  <span>- ";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "entreprise", [], "any", false, false, false, 232), "html", null, true);
            echo "</span>
                  <p class=\"mt-2\">";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "description", [], "any", false, false, false, 233), "html", null, true);
            echo "</p>
                </div>

</div>
            </div>
            </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience_profissionnelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 240
        echo "

              ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        // line 33
        echo "

<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal13\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
       <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Experience</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
      
  
    ";
        // line 48
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 49
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 49, $this->source); })())])]);
            echo "


     
                   ";
            // line 53
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "nom_exp", [], "any", false, false, false, 53), 'row', ["attr" => ["class" => "form-control", "placeholder" => "nom"]]);
            echo "
              


           
           <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   ";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "date_fin", [], "any", false, false, false, 61), 'row', ["attr" => ["class" => "form-control", "placeholder" => "date"]]);
            echo "
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "date_debut", [], "any", false, false, false, 66), 'row', ["attr" => ["class" => "form-control", "placeholder" => "date "]]);
            echo "
                </div>
                </div>
        </div>
                 <div class=\"row\">
             
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "description", [], "any", false, false, false, 74), 'row', ["attr" => ["class" => "form-control", "placeholder" => "description "]]);
            echo "
                </div>
                </div>

                 <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "entreprise", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control", "placeholder" => "entreprise "]]);
            echo "
                </div>
                </div>

        </div>

         
               

            <div class=\"modal-footer\">

             ";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "ajouter", [], "any", false, false, false, 91), 'row', ["attr" => ["class" => "btn btn-primary"]]);
            echo "

                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
";
            // line 96
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), 'form_end');
            echo "
";
        }
        // line 98
        echo "
          </div>
         
                        </div>
                    </div>
                </div>
 <!-- end Modal -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "experience_profissionnelle/Experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 98,  423 => 96,  415 => 91,  401 => 80,  392 => 74,  381 => 66,  373 => 61,  362 => 53,  355 => 49,  353 => 48,  336 => 33,  326 => 32,  314 => 240,  301 => 233,  297 => 232,  293 => 231,  289 => 230,  285 => 229,  268 => 215,  250 => 200,  240 => 193,  219 => 174,  215 => 173,  172 => 133,  167 => 131,  162 => 129,  140 => 109,  138 => 32,  124 => 23,  110 => 11,  100 => 10,  81 => 8,  71 => 4,  61 => 3,  38 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# template père base.html.twig  #}
{% extends 'base.html.twig' %}
{% block header %}
{% include \"BarCandidat/header.html.twig\"  with {'id': id }%}
{% endblock %}

{# le block title est remplacé par l'enfant \"experience\" #}
{% block title %} Experience{% endblock %}

{% block body %}

<div class=\"header-inner bg-light\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"candidates-user-info\">
          <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
                <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
              <h3>{{ candidat.username }}  {{ candidat.prenomCandidat }}</h3>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
{% block blog  %}


<!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal13\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
       <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Experience</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
      
  
    {% if form is defined %}
{{ form_start(form, {'action': path('experience_profissionnelle_index' ,{id:id}) })   }}


     
                   {{ form_row(form.nom_exp, {'attr': {'class': 'form-control','placeholder':'nom'}}) }}
              


           
           <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   {{ form_row(form.date_fin, {'attr': {'class': 'form-control','placeholder':'date'}}) }}
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.date_debut,{'attr': {'class': 'form-control','placeholder':'date '}}) }}
                </div>
                </div>
        </div>
                 <div class=\"row\">
             
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.description,{'attr': {'class': 'form-control','placeholder':'description '}}) }}
                </div>
                </div>

                 <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.entreprise,{'attr': {'class': 'form-control','placeholder':'entreprise '}}) }}
                </div>
                </div>

        </div>

         
               

            <div class=\"modal-footer\">

             {{ form_row(form.ajouter,{'attr': {'class': 'btn btn-primary'}}) }}

                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
{{ form_end(form) }}
{% endif %}

          </div>
         
                        </div>
                    </div>
                </div>
 <!-- end Modal -->



{% endblock %}


  <!--=================================

  







    Dashboard Nav -->
    <section>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"sticky-top secondary-menu-sticky-top\">
              <div class=\"secondary-menu\">
                <ul class=\"list-unstyled mb-0\">
                   <li><a href= {{ path('candidat_edit', {id: id}) }}>Info Génerale </a></li>
                 
                  <li><a href= {{ path('experience_profissionnelle_index',{id: id}) }}>Info profisionnelle </a></li>

                 <li><a href= {{ path('cv_index',{id:id}) }}>Mon CV</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Dashboard Nav -->


    

 
 



 <!--=================================
    My Resume -->
<section>
  <div class=\"container\">
    <div class=\"row\">
     
      <div class=\"col-md-12\">
      
        <div class=\"user-dashboard-info-box\">
          <div class=\"dashboard-resume-title d-flex align-items-center\">
            <div class=\"section-title-02 mb-sm-3\">
              <h4 class=\"mb-0\">experiences profissionnelles </h4>
            </div>

   <!-- Lorsqu'on clique sur  le bouton Ajouter Experience , modal ajouter experience  va s'affiché -->
<a class=\"btn btn-md ml-sm-auto btn-primary\" href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal13\"><i class=\"fa fa-plus\"></i>Ajouter Experience </a>
           
          
          </div>
          <!--==  On affiche tous  les données des expriences de candidat connecté ==-->

                  {% for experience_profissionnelle in experience_profissionnelles %}


<!-- Les données des expriences !-->
          <div class=\"collapse show\" id=\"dateposted\">
          </div>
          <div class=\"jobber-candidate-timeline mt-4\">
            <div class=\"jobber-timeline-icon\">
              <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div class=\"jobber-timeline-item\">
              <div class=\"jobber-timeline-cricle\">
                <i class=\"far fa-circle\"></i>
              </div>
              <div class=\"jobber-timeline-info\">
                <div class=\"dashboard-timeline-info\">
                  <div class=\"dashboard-timeline-edit\">
                    <ul class=\"list-unstyled d-flex\">
                     
                       <!-- Lorsqu'on clique sur  le bouton Ajouter Experience , modal supprimer experience  va s'affiché -->
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#Modaldelete{{experience_profissionnelle.id}}\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\" style=\"margin-right:10px;\"><i class=\"far fa-trash-alt\"></i></a></li>





               <!-- Modal Supprimer  Experience-->
<div class=\"modal fade\" id=\"Modaldelete{{experience_profissionnelle.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer cette Experience</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment la supprimer <a href=\"#\"></a> ? </span></p>

          </div>
          <div class=\"modal-footer\">

          <a  href=\"{{ path('experience_profissionnelle_delete', {'id': experience_profissionnelle.id,'idc':id}) }}\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal Supprimer  Experience -->

                    </ul>
                  </div>


                <!-- Les données des expriences !-->
                  <span class=\"jobber-timeline-time\">{{ experience_profissionnelle.dateDebut ? experience_profissionnelle.dateDebut|date('Y-m-d') : '' }}</span>
                 <span class=\"jobber-timeline-time\">{{ experience_profissionnelle.dateFin ? experience_profissionnelle.dateFin|date('Y-m-d') : '' }}</span>
                  <h6 class=\"mb-2\">{{ experience_profissionnelle.nomExp }}</h6>
                  <span>- {{ experience_profissionnelle.entreprise }}</span>
                  <p class=\"mt-2\">{{ experience_profissionnelle.description }}</p>
                </div>

</div>
            </div>
            </div>
              {% endfor %}


              {% endblock %}


", "experience_profissionnelle/Experience.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\experience_profissionnelle\\Experience.html.twig");
    }
}
