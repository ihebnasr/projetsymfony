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

/* gerer_recruteur/liste_recruteur.html.twig */
class __TwigTemplate_76ba411fc939030ddfa039797733295c29e4016846df5248ec616a69571c25a4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'blog' => [$this, 'block_blog'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer_recruteur/liste_recruteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gerer_recruteur/liste_recruteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gerer_recruteur/liste_recruteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        // line 5
        echo "
<section>
    
    </section>
   
              <div class=\"header-inner bg-light text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"text-primary\">Recruteur</h2>
        <ol class=\"breadcrumb mb-0 p-0\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\"> <i class=\"fas fa-chevron-right\"></i> <span>Recruteur</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class=\"space-ptb\">
  <div class=\"container\">
   <div class=\"job-filter mb-4 d-sm-flex align-items-center\">
          
        <div class=\"job-alert-bt\"> <a class=\"btn btn-md btn-dark\" href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal13\"><i class=\"fa fa-plus\"></i>Ajouter Recruteur </a> </div>
         <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal13\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
       <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
      
  
    ";
        // line 41
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 42
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruteur_new")]);
            echo "

     <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "prenom_recruteur", [], "any", false, false, false, 47), 'row', ["attr" => ["class" => "form-control", "placeholder" => "prenom"]]);
            echo "
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 52
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "nom_recruteur", [], "any", false, false, false, 52), 'row', ["attr" => ["class" => "form-control", "placeholder" => "nom "]]);
            echo "
                </div>
                </div>
        </div>
            <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "cin_recruteur", [], "any", false, false, false, 59), 'row', ["attr" => ["class" => "form-control", "placeholder" => "cin "]]);
            echo "
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "email_recruteur", [], "any", false, false, false, 64), 'row', ["attr" => ["class" => "form-control", "placeholder" => "email "]]);
            echo "
                </div>
                </div>
        </div>
           <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "nom_societe", [], "any", false, false, false, 71), 'row', ["attr" => ["class" => "form-control", "placeholder" => "societe"]]);
            echo "
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "date", [], "any", false, false, false, 76), 'row', ["attr" => ["class" => "form-control", "placeholder" => "date "]]);
            echo "
                </div>
                </div>
        </div>
                 <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   ";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "domaine", [], "any", false, false, false, 83), 'row', ["attr" => ["class" => "form-control", "placeholder" => "domaine"]]);
            echo "
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "description", [], "any", false, false, false, 88), 'row', ["attr" => ["class" => "form-control", "placeholder" => "description "]]);
            echo "
                </div>
                </div>
        </div>
                <div class=\"row\">
              
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  ";
            // line 96
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "mdp_recruteur", [], "any", false, false, false, 96), 'row', ["attr" => ["class" => "form-control", "placeholder" => "mdp "]]);
            echo "
                </div>
                </div>
        </div>
            <div class=\"modal-footer\">
             ";
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "ajouter", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "btn btn-primary"]]);
            echo "

                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
";
            // line 106
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_end');
            echo "
";
        }
        // line 108
        echo "
          </div>
         
                        </div>
                    </div>
                </div>
 <!-- end Modal -->
          <div class=\"job-shortby ml-sm-auto d-flex align-items-center\">
            <form class=\"form-inline\">
              <div class=\"form-group mb-0\">
               <input value=\"search\">
              
              </div>
            </form>
          </div>
        </div>
        <div class=\"row\">


    ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recruteurs"]) || array_key_exists("recruteurs", $context) ? $context["recruteurs"] : (function () { throw new RuntimeError('Variable "recruteurs" does not exist.', 127, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recruteur"]) {
            // line 128
            echo "          <div class=\"col-12\">
            <div class=\"candidate-list\">
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/04.jpg\" alt=\"\" >
              </div>
              <div class=\"candidate-list-details\">
                <div class=\"candidate-list-info\">
                  <div class=\"candidate-list-title\">
                    <h5 class=\"mb-0\"><a href=\"#\">";
            // line 136
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "prenomRecruteur", [], "any", false, false, false, 136), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomRecruteur", [], "any", false, false, false, 136), "html", null, true);
            echo "</a></h5>
                  </div>
                  <div class=\"candidate-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-envelope pr-1\"></i>";
            // line 140
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "emailRecruteur", [], "any", false, false, false, 140), "html", null, true);
            echo "  </li>
                      <li><i class=\"fas fa-file pr-1\"></i>";
            // line 141
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomSociete", [], "any", false, false, false, 141), "html", null, true);
            echo "</li>
                       <li><i class=\"fas fa-book pr-1\"></i>";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "domaine", [], "any", false, false, false, 142), "html", null, true);
            echo "</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"candidate-list-favourite-time\">
                <ul class=\"list-unstyled mb-0 d-flex\">
                      <li><a   href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal";
            // line 149
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 149), "html", null, true);
            echo "\" title=\"view\" style=\"margin-right:10px;\"><i class=\"far fa-eye\"></i></a></li>
                      <li><a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModallllll";
            // line 150
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 150), "html", null, true);
            echo "\" class=\"text-info\" data-toggle=\"tooltip\" title=\"Edit\" style=\"margin-right:10px;\"><i class=\"fas fa-pencil-alt\"></i></a></li>
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1";
            // line 151
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 151), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\" style=\"margin-right:10px;\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
              </div>
            </div>
          </div>
        

          <!-- Modal edit-->
<div class=\"modal fade\" id=\"exampleModallllll";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
         <form method=\"POST\" action=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruteur_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 171)]), "html", null, true);
            echo "\">
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/01.jpg\" alt=\"\" >
              </div>
              <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Prenom</label>
                  <input type=\"text\" class=\"form-control\"  name=\"prenom\" id=\"prenom\" value=\"";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "prenomRecruteur", [], "any", false, false, false, 179), "html", null, true);
            echo "\">
                </div>
                   <div class=\"form-group\">
                  <label>Nom</label>
                  <input type=\"text\" class=\"form-control\"  name=\"nom\" id=\"nom\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomRecruteur", [], "any", false, false, false, 183), "html", null, true);
            echo "\">
                </div>
                </div>
                
           <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Email</label>
                  <input type=\"text\" class=\"form-control\"  name=\"email\" id=\"email\" value=\"";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "emailRecruteur", [], "any", false, false, false, 190), "html", null, true);
            echo "\">
                </div>
                   <div class=\"form-group\">
                  <label>CIN</label>
                  <input type=\"text\"   name=\"cin\" id=\"cin\"  value=\"";
            // line 194
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "cinRecruteur", [], "any", false, false, false, 194), "html", null, true);
            echo "\">
                </div>
                </div>
           
              </div>
              </div>
      </div>
    <div class=\"modal-footer\">
    <button type=\"submit\" class=\"btn btn-xs btn-success\">Modifier</button>
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   </form>
</div>
 <!-- end Modal -->
 <!-- Modal view -->
<div class=\"modal fade\" id=\"exampleModal";
            // line 214
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 214), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
        
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/01.jpg\" alt=\"\" >
              </div>
              <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Prenom</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"";
            // line 233
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "prenomRecruteur", [], "any", false, false, false, 233), "html", null, true);
            echo "\">
                </div>
                   <div class=\"form-group\">
                  <label>Nom</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"";
            // line 237
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomRecruteur", [], "any", false, false, false, 237), "html", null, true);
            echo "\">
                </div>
                </div>
                
           <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Email</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"";
            // line 244
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "emailRecruteur", [], "any", false, false, false, 244), "html", null, true);
            echo "\">
                </div>
                   <div class=\"form-group\">
                  <label>Societe</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"";
            // line 248
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomSociete", [], "any", false, false, false, 248), "html", null, true);
            echo "\">
                </div>
                </div>
           
              </div>
              </div>
      </div>
    <div class=\"modal-footer\">
  
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   
</div>
 <!-- end Modal -->
  <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModall1";
            // line 268
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 268), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment supprimer <a href=\"#\"></a>  ";
            // line 278
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["recruteur"], "nomRecruteur", [], "any", false, false, false, 278), "html", null, true);
            echo "? </span></p>

          </div>
          <div class=\"modal-footer\">
          <a  href=\"";
            // line 282
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("recruteur_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["recruteur"], "id", [], "any", false, false, false, 282)]), "html", null, true);
            echo "\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal -->
            
           ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 292
            echo "           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recruteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 296
        echo "
 

  <ul class=\"pagination justify-content-center\" style=\"margin-top:10px; margin-left:900px;\">
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"#\">1</a>
             <a class=\"page-link\" href=\"#\">2</a>
        </li>
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    </ul> 

    </div>
    </div>
    </section>
    <br> <br>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "gerer_recruteur/liste_recruteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 296,  469 => 292,  454 => 282,  447 => 278,  434 => 268,  411 => 248,  404 => 244,  394 => 237,  387 => 233,  365 => 214,  342 => 194,  335 => 190,  325 => 183,  318 => 179,  307 => 171,  292 => 159,  281 => 151,  277 => 150,  273 => 149,  263 => 142,  259 => 141,  255 => 140,  246 => 136,  236 => 128,  231 => 127,  210 => 108,  205 => 106,  197 => 101,  189 => 96,  178 => 88,  170 => 83,  160 => 76,  152 => 71,  142 => 64,  134 => 59,  124 => 52,  116 => 47,  108 => 42,  106 => 41,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block blog %}

<section>
    
    </section>
   
              <div class=\"header-inner bg-light text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"text-primary\">Recruteur</h2>
        <ol class=\"breadcrumb mb-0 p-0\">
          <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
          <li class=\"breadcrumb-item active\"> <i class=\"fas fa-chevron-right\"></i> <span>Recruteur</span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class=\"space-ptb\">
  <div class=\"container\">
   <div class=\"job-filter mb-4 d-sm-flex align-items-center\">
          
        <div class=\"job-alert-bt\"> <a class=\"btn btn-md btn-dark\" href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal13\"><i class=\"fa fa-plus\"></i>Ajouter Recruteur </a> </div>
         <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModal13\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
       <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ajouter Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
      
  
    {% if form is defined %}
{{ form_start(form, {'action': path('recruteur_new')}) }}

     <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   {{ form_row(form.prenom_recruteur, {'attr': {'class': 'form-control','placeholder':'prenom'}}) }}
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.nom_recruteur,{'attr': {'class': 'form-control','placeholder':'nom '}}) }}
                </div>
                </div>
        </div>
            <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   {{ form_row(form.cin_recruteur, {'attr': {'class': 'form-control','placeholder':'cin '}}) }}
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.email_recruteur,{'attr': {'class': 'form-control','placeholder':'email '}}) }}
                </div>
                </div>
        </div>
           <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   {{ form_row(form.nom_societe, {'attr': {'class': 'form-control','placeholder':'societe'}}) }}
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.date,{'attr': {'class': 'form-control','placeholder':'date '}}) }}
                </div>
                </div>
        </div>
                 <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                   {{ form_row(form.domaine, {'attr': {'class': 'form-control','placeholder':'domaine'}}) }}
                </div>
                </div>
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.description,{'attr': {'class': 'form-control','placeholder':'description '}}) }}
                </div>
                </div>
        </div>
                <div class=\"row\">
              
                <div class=\"col-md-6 mb-3\">
                   <div class=\"form-group\">
                  {{ form_row(form.mdp_recruteur,{'attr': {'class': 'form-control','placeholder':'mdp '}}) }}
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
          <div class=\"job-shortby ml-sm-auto d-flex align-items-center\">
            <form class=\"form-inline\">
              <div class=\"form-group mb-0\">
               <input value=\"search\">
              
              </div>
            </form>
          </div>
        </div>
        <div class=\"row\">


    {% for recruteur in recruteurs %}
          <div class=\"col-12\">
            <div class=\"candidate-list\">
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/04.jpg\" alt=\"\" >
              </div>
              <div class=\"candidate-list-details\">
                <div class=\"candidate-list-info\">
                  <div class=\"candidate-list-title\">
                    <h5 class=\"mb-0\"><a href=\"#\">{{ recruteur.prenomRecruteur }} {{ recruteur.nomRecruteur }}</a></h5>
                  </div>
                  <div class=\"candidate-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-envelope pr-1\"></i>{{recruteur.emailRecruteur}}  </li>
                      <li><i class=\"fas fa-file pr-1\"></i>{{recruteur.nomSociete}}</li>
                       <li><i class=\"fas fa-book pr-1\"></i>{{recruteur.domaine}}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"candidate-list-favourite-time\">
                <ul class=\"list-unstyled mb-0 d-flex\">
                      <li><a   href=\"\" data-toggle=\"modal\" data-target=\"#exampleModal{{recruteur.id}}\" title=\"view\" style=\"margin-right:10px;\"><i class=\"far fa-eye\"></i></a></li>
                      <li><a href=\"\" data-toggle=\"modal\" data-target=\"#exampleModallllll{{recruteur.id}}\" class=\"text-info\" data-toggle=\"tooltip\" title=\"Edit\" style=\"margin-right:10px;\"><i class=\"fas fa-pencil-alt\"></i></a></li>
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1{{recruteur.id}}\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\" style=\"margin-right:10px;\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
              </div>
            </div>
          </div>
        

          <!-- Modal edit-->
<div class=\"modal fade\" id=\"exampleModallllll{{recruteur.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Modifier Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
         <form method=\"POST\" action=\"{{ path('recruteur_edit', {'id': recruteur.id}) }}\">
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/01.jpg\" alt=\"\" >
              </div>
              <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Prenom</label>
                  <input type=\"text\" class=\"form-control\"  name=\"prenom\" id=\"prenom\" value=\"{{recruteur.prenomRecruteur}}\">
                </div>
                   <div class=\"form-group\">
                  <label>Nom</label>
                  <input type=\"text\" class=\"form-control\"  name=\"nom\" id=\"nom\" value=\"{{recruteur.nomRecruteur}}\">
                </div>
                </div>
                
           <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Email</label>
                  <input type=\"text\" class=\"form-control\"  name=\"email\" id=\"email\" value=\"{{recruteur.emailRecruteur}}\">
                </div>
                   <div class=\"form-group\">
                  <label>CIN</label>
                  <input type=\"text\"   name=\"cin\" id=\"cin\"  value=\"{{recruteur.cinRecruteur }}\">
                </div>
                </div>
           
              </div>
              </div>
      </div>
    <div class=\"modal-footer\">
    <button type=\"submit\" class=\"btn btn-xs btn-success\">Modifier</button>
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   </form>
</div>
 <!-- end Modal -->
 <!-- Modal view -->
<div class=\"modal fade\" id=\"exampleModal{{recruteur.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
        
              <div class=\"candidate-list-image\">
                <img class=\"img-fluid\" src=\"/images/avatar/01.jpg\" alt=\"\" >
              </div>
              <div class=\"row\">
              <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Prenom</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"{{recruteur.prenomRecruteur}}\">
                </div>
                   <div class=\"form-group\">
                  <label>Nom</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"{{recruteur.nomRecruteur}}\">
                </div>
                </div>
                
           <div class=\"col-md-6 mb-3\">
               <div class=\"form-group\">
                  <label>Email</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"{{recruteur.emailRecruteur}}\">
                </div>
                   <div class=\"form-group\">
                  <label>Societe</label>
                  <input type=\"text\" class=\"form-control\"  disabled value=\"{{recruteur.nomSociete }}\">
                </div>
                </div>
           
              </div>
              </div>
      </div>
    <div class=\"modal-footer\">
  
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   
</div>
 <!-- end Modal -->
  <!-- Modal -->
<div class=\"modal fade\" id=\"exampleModall1{{recruteur.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer recruteur</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment supprimer <a href=\"#\"></a>  {{ recruteur.nomRecruteur }}? </span></p>

          </div>
          <div class=\"modal-footer\">
          <a  href=\"{{ path('recruteur_delete', {'id': recruteur.id}) }}\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal -->
            
           {% else %}
           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 {% endfor %}

 

  <ul class=\"pagination justify-content-center\" style=\"margin-top:10px; margin-left:900px;\">
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Previous\">
                <span aria-hidden=\"true\">&laquo;</span>
                <span class=\"sr-only\">Previous</span>
            </a>
        </li>
        <li class=\"page-item\">
            <a class=\"page-link\" href=\"#\">1</a>
             <a class=\"page-link\" href=\"#\">2</a>
        </li>
        <li class=\"page-item disabled\">
            <a class=\"page-link\" href=\"#\" aria-label=\"Next\">
                <span aria-hidden=\"true\">&raquo;</span>
                <span class=\"sr-only\">Next</span>
            </a>
        </li>
    </ul> 

    </div>
    </div>
    </section>
    <br> <br>
{% endblock %}
", "gerer_recruteur/liste_recruteur.html.twig", "C:\\wamp64\\www\\Recrute\\templates\\gerer_recruteur\\liste_recruteur.html.twig");
    }
}
