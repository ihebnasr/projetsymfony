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

/* recruteur/candidats_postule.html.twig */
class __TwigTemplate_e4a037dea31e4b026277159b91e1cfc288ae77b98bddb37d1475e1f3a328be03 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidats_postule.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidats_postule.html.twig"));

        // line 1
        echo "

<!DOCTYPE html>
<html lang=\"en\">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/search-style-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:15 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title>Recruteur</title>

    <!-- Favicon -->
    <link href=\"images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"/css/font-awesome/all.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/flaticon/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\"/css/select2/select2.css\" />

    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" />

  </head>


<!--=================================
header -->
       <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body>

<div class=\"header-inner bg-light\" style=\"background: #ff8a00 !important;\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
              <img class=\"img-fluid \" src=\"/images/svg/";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 71, $this->source); })()), "logo", [], "any", false, false, false, 71), "html", null, true);
        echo "\" alt=\"\" style=\"height:120px\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
               <h3 style=\"color: #ffff !important;\">";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 75, $this->source); })()), "nomSociete", [], "any", false, false, false, 75), "html", null, true);
        echo "</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
                <li><a  href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
              <li><a  href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
  <li  class=\" dropdown\">
  <a  >Offre D'emploi</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a>
  <a  href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a>
  </div>
</li>
 <li  class=\" dropdown\">
  <a  > Entretien</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planifierEntretien", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 106, $this->source); })()), "id", [], "any", false, false, false, 106)]), "html", null, true);
        echo "\">Planifier Entretien</a>
  <a  href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesEntretiens", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
        echo "\">Mes Entretiens</a>
  </div>
</li>
              
               <li><a class=\"active\" href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidatsPostule", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 111, $this->source); })()), "id", [], "any", false, false, false, 111)]), "html", null, true);
        echo "\">Candidates postulé</a></li>
               <li><a >Statistiques</a></li>
              
                 <li><a >Déconnexion</a></li>
            </ul>
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
                <h4 class=\"mb-0\">Candidats </h4>
              </div>
            </div>
            <div class=\"col-md-5 col-sm-7 mt-3 mt-sm-0\">
              <div class=\"search\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
              </div>
            </div>
          </div>
        <div class=\"user-dashboard-info-box table-responsive pb-4 mb-0\">
          <table class=\"table manage-candidates-top mb-0\">
            <thead>
              <tr>
                <th>Nom et prenom Candidat</th>
                <th class=\"text-center\">Offre d'emploi</th>
                <th class=\"action text-right\">Action</th>
              </tr>
            </thead>
            <tbody>
            ";
        // line 151
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 151, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["can"]) {
            // line 152
            echo "            ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["can"], "etat", [], "any", false, false, false, 152), 0)) {
                // line 153
                echo "              <tr class=\"candidates-list\">
                <td class=\"title\">
                  <div class=\"thumb\">
                    <img class=\"img-fluid\" src=\"/images/avatar/";
                // line 156
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "photo_candidat", [], "any", false, false, false, 156), "html", null, true);
                echo "\" alt=\"\">
                  </div>
                  <div class=\"candidate-list-details\">
                    <div class=\"candidate-list-info\">
                      <div class=\"candidate-list-title\">
                        <h5 class=\"mb-0\"><a href=\"#\">";
                // line 161
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "prenom_candidat", [], "any", false, false, false, 161), "html", null, true);
                echo "</a></h5>
                      </div>
                      <div class=\"candidate-list-option\">
                        <ul class=\"list-unstyled\">
                          <li><i class=\"fas fa-filter pr-1\"></i>";
                // line 165
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "domaine_candidat", [], "any", false, false, false, 165), "html", null, true);
                echo "</li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>";
                // line 166
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "adresse", [], "any", false, false, false, 166), "html", null, true);
                echo "</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class=\"candidate-list-favourite-time text-center\">
                 
                  <span class=\"candidate-list-time order-1\">";
                // line 174
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "nom_poste", [], "any", false, false, false, 174), "html", null, true);
                echo "</span>
                </td>
                <td>
                  <ul class=\"list-unstyled mb-0 d-flex justify-content-end\">
                    
                    <li><a data-toggle=\"modal\" data-target=\"#exampleModallllll";
                // line 179
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "id", [], "any", false, false, false, 179), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "id_entretien_id", [], "any", false, false, false, 179), "html", null, true);
                echo "\"class=\"text-info\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"accepté\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"";
                // line 180
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidatsDetail", ["id" => twig_get_attribute($this->env, $this->source, $context["can"], "id", [], "any", false, false, false, 180)]), "html", null, true);
                echo "\" class=\"text-success\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"voir\"><i class=\"far fa-eye\"></i></a></li>
                    <li><a href=\"#\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"refusé\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i></a></li>
                  </ul>
                </td>
              </tr>
                <!-- Modal ajout-->
<div class=\"modal fade\" id=\"exampleModallllll";
                // line 186
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "id", [], "any", false, false, false, 186), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["can"], "id_entretien_id", [], "any", false, false, false, 186), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidat Entretien</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
         <form method=\"POST\" action=\"";
                // line 198
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ajouter_candidatEntretien", ["id" => twig_get_attribute($this->env, $this->source, $context["can"], "id", [], "any", false, false, false, 198), "idd" => twig_get_attribute($this->env, $this->source, $context["can"], "id_entretien_id", [], "any", false, false, false, 198)]), "html", null, true);
                echo "\">
            
              <div class=\"row\">
               <div class=\"form-group\">
                  <label>Date Entretien</label>
                  <input type=\"datetime-local\" class=\"form-control datetimepicker-input\"   name=\"date\" id=\"date\"  >
               
                   
                </div>
                
           
      </div>
    <div class=\"modal-footer\">
    <button type=\"submit\" class=\"btn btn-xs btn-success\">Ajouter </button>
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   </form>
</div>
 <!-- end Modal -->
            ";
            }
            // line 223
            echo "             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['can'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 224
        echo "        
             
            </tbody>
          </table>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-3 mb-4 mt-sm-3\">
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
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Candidates -->
<!--=================================
footer -->
<footer class=\"footer mt-5 mt-md-5 pt-0\">
    <div class=\"footer-bottom bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 \">
            <div class=\"d-flex justify-content-md-start justify-content-center\">
              <ul class=\"list-unstyled d-flex mb-0\">
                <li><a href=\"#\">Privacy Policy</a></li>
                <li><a href=\"about.html\">About</a></li>
                <li><a href=\"#\">Team</a></li>
                <li><a href=\"contact-us.html\">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-6 text-center text-md-right mt-4 mt-md-0\">
            <p class=\"mb-0\"> &copy;Copyright <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href=\"#\"> Jobber </a> All Rights Reserved </p>
          </div>
        </div>
      </div>
    </div>
</footer>
<!--=================================
footer -->







<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src=\"/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/js/popper/popper.min.js\"></script>
    <script src=\"/js/bootstrap/bootstrap.min.js\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"/js/select2/select2.full.js\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/search-style-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:15 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/candidats_postule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 224,  330 => 223,  302 => 198,  286 => 186,  277 => 180,  272 => 179,  264 => 174,  253 => 166,  249 => 165,  242 => 161,  234 => 156,  229 => 153,  226 => 152,  222 => 151,  179 => 111,  172 => 107,  168 => 106,  159 => 100,  155 => 99,  148 => 95,  144 => 94,  122 => 75,  115 => 71,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("

<!DOCTYPE html>
<html lang=\"en\">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/search-style-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:15 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    
    <title>Recruteur</title>

    <!-- Favicon -->
    <link href=\"images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\">
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js\"></script>
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"/css/font-awesome/all.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/flaticon/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\"/css/select2/select2.css\" />

    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" />

  </head>


<!--=================================
header -->
       <style>
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 250px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  padding: 12px 16px;
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}
</style>

<body>

<div class=\"header-inner bg-light\" style=\"background: #ff8a00 !important;\">

  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
              <img class=\"img-fluid \" src=\"/images/svg/{{recruteur.logo}}\" alt=\"\" style=\"height:120px\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
               <h3 style=\"color: #ffff !important;\">{{recruteur.nomSociete}}</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
                <li><a  href=\"{{ path('dashboard_recruteur', {'id': recruteur.id}) }}\" >Tableau de bord</a></li>
              <li><a  href=\"{{ path('profile_recruteur', {'id': recruteur.id}) }}\" >Mon Profile</a></li>
  <li  class=\" dropdown\">
  <a  >Offre D'emploi</a>
  <div class=\"dropdown-content\">
 <a  href=\"{{ path('offre_emploi', {'id': recruteur.id}) }}\">Publier Offre d'emploi</a>
  <a  href=\"{{ path('gererOffre_emploi', {'id': recruteur.id}) }}\">Mes Offres d'emploi</a>
  </div>
</li>
 <li  class=\" dropdown\">
  <a  > Entretien</a>
  <div class=\"dropdown-content\">
 <a  href=\"{{ path('planifierEntretien', {'id': recruteur.id}) }}\">Planifier Entretien</a>
  <a  href=\"{{ path('MesEntretiens', {'id': recruteur.id}) }}\">Mes Entretiens</a>
  </div>
</li>
              
               <li><a class=\"active\" href=\"{{ path('candidatsPostule', {'id': recruteur.id}) }}\">Candidates postulé</a></li>
               <li><a >Statistiques</a></li>
              
                 <li><a >Déconnexion</a></li>
            </ul>
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
                <h4 class=\"mb-0\">Candidats </h4>
              </div>
            </div>
            <div class=\"col-md-5 col-sm-7 mt-3 mt-sm-0\">
              <div class=\"search\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
              </div>
            </div>
          </div>
        <div class=\"user-dashboard-info-box table-responsive pb-4 mb-0\">
          <table class=\"table manage-candidates-top mb-0\">
            <thead>
              <tr>
                <th>Nom et prenom Candidat</th>
                <th class=\"text-center\">Offre d'emploi</th>
                <th class=\"action text-right\">Action</th>
              </tr>
            </thead>
            <tbody>
            {% for can in candidats %}
            {% if can.etat == 0 %}
              <tr class=\"candidates-list\">
                <td class=\"title\">
                  <div class=\"thumb\">
                    <img class=\"img-fluid\" src=\"/images/avatar/{{can.photo_candidat}}\" alt=\"\">
                  </div>
                  <div class=\"candidate-list-details\">
                    <div class=\"candidate-list-info\">
                      <div class=\"candidate-list-title\">
                        <h5 class=\"mb-0\"><a href=\"#\">{{can.prenom_candidat}}</a></h5>
                      </div>
                      <div class=\"candidate-list-option\">
                        <ul class=\"list-unstyled\">
                          <li><i class=\"fas fa-filter pr-1\"></i>{{can.domaine_candidat}}</li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>{{can.adresse}}</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td class=\"candidate-list-favourite-time text-center\">
                 
                  <span class=\"candidate-list-time order-1\">{{can.nom_poste}}</span>
                </td>
                <td>
                  <ul class=\"list-unstyled mb-0 d-flex justify-content-end\">
                    
                    <li><a data-toggle=\"modal\" data-target=\"#exampleModallllll{{can.id}}{{can.id_entretien_id}}\"class=\"text-info\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"accepté\"><i class=\"fa fa-check\" aria-hidden=\"true\"></i></a></li>
                    <li><a href=\"{{ path('candidatsDetail', {'id': can.id}) }}\" class=\"text-success\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"voir\"><i class=\"far fa-eye\"></i></a></li>
                    <li><a href=\"#\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"\" data-original-title=\"refusé\"><i class=\"fa fa-ban\" aria-hidden=\"true\"></i></a></li>
                  </ul>
                </td>
              </tr>
                <!-- Modal ajout-->
<div class=\"modal fade\" id=\"exampleModallllll{{can.id}}{{can.id_entretien_id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
 
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Candidat Entretien</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\" candidate-grid\">
         <form method=\"POST\" action=\"{{ path('ajouter_candidatEntretien', {'id': can.id,'idd':can.id_entretien_id}) }}\">
            
              <div class=\"row\">
               <div class=\"form-group\">
                  <label>Date Entretien</label>
                  <input type=\"datetime-local\" class=\"form-control datetimepicker-input\"   name=\"date\" id=\"date\"  >
               
                   
                </div>
                
           
      </div>
    <div class=\"modal-footer\">
    <button type=\"submit\" class=\"btn btn-xs btn-success\">Ajouter </button>
                            <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">Fermer</button>

                        </div>
               

    </div>
  </div>
   </form>
</div>
 <!-- end Modal -->
            {% endif  %}
             {% endfor  %}
        
             
            </tbody>
          </table>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-3 mb-4 mt-sm-3\">
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
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Candidates -->
<!--=================================
footer -->
<footer class=\"footer mt-5 mt-md-5 pt-0\">
    <div class=\"footer-bottom bg-light\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-6 \">
            <div class=\"d-flex justify-content-md-start justify-content-center\">
              <ul class=\"list-unstyled d-flex mb-0\">
                <li><a href=\"#\">Privacy Policy</a></li>
                <li><a href=\"about.html\">About</a></li>
                <li><a href=\"#\">Team</a></li>
                <li><a href=\"contact-us.html\">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class=\"col-md-6 text-center text-md-right mt-4 mt-md-0\">
            <p class=\"mb-0\"> &copy;Copyright <span id=\"copyright\"> <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></span> <a href=\"#\"> Jobber </a> All Rights Reserved </p>
          </div>
        </div>
      </div>
    </div>
</footer>
<!--=================================
footer -->







<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src=\"/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/js/popper/popper.min.js\"></script>
    <script src=\"/js/bootstrap/bootstrap.min.js\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"/js/select2/select2.full.js\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/search-style-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:15 GMT -->
</html>
", "recruteur/candidats_postule.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\candidats_postule.html.twig");
    }
}
