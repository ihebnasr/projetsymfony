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

/* recruteur/creerEntretien.html.twig */
class __TwigTemplate_6a92d717e087a86613fc6719e8cf90620b4d58442461186ca77740320dd6fa10 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/creerEntretien.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/creerEntretien.html.twig"));

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
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 67, $this->source); })()), "logo", [], "any", false, false, false, 67), "html", null, true);
        echo "\" alt=\"\" style=\"height:120px\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
               <h3 style=\"color: #ffff !important;\">";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 71, $this->source); })()), "nomSociete", [], "any", false, false, false, 71), "html", null, true);
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
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 90, $this->source); })()), "id", [], "any", false, false, false, 90)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
             <li><a  href=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
  <li  class=\" dropdown\">
  <a  >Offre D'emploi</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a>
  <a  href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a>
  </div>
</li>
 <li  class=\" dropdown\">
  <a class=\"active\" > Entretien</a>
  <div class=\"dropdown-content\">
 <a class=\"active\" href=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planifierEntretien", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 102, $this->source); })()), "id", [], "any", false, false, false, 102)]), "html", null, true);
        echo "\">Planifier Entretien</a>
  <a  href=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesEntretiens", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 103, $this->source); })()), "id", [], "any", false, false, false, 103)]), "html", null, true);
        echo "\">Mes Entretiens</a>
  </div>
</li>
              
               <li><a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidatsPostule", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
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
<!--=================================
Dashboard Nav -->

<!--=================================
Post New Job -->

<section>

<form class=\"form-row\" method=\"POST\" action=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("entretien", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 126, $this->source); })()), "id", [], "any", false, false, false, 126)]), "html", null, true);
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>Entretien </h4>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>\tTitre * </label>
                  <input type=\"text\" name=\"poste\" class=\"form-control\" value=\"\">
                </div>
                <div class=\"form-group col-md-12\">
                  <label>\tDescription * </label>
                  <input type=\"text\" name=\"descc\" class=\"form-control\" value=\"\">
                </div>
                </div>
                <br>
                <br>
                  <div class=\"section-title-02 mb-4\">
            <h4>Questions Entretien </h4>
            <span> Le questionnaire comprte au moins deux questions </span>
          </div>
                <div class=\"row\">
            <div class=\"col-12\">

    <div id=\"ajouterQCM\" data-prototype='
     <div class=\"row\">
                <div class=\"form-group col-md-7\">
    
      <br>
    <input type=\"text\" name=\"questionQCM[]\"  placeholder=\"votre question\" class=\"form-control\" />
    <br>
<input type=\"text\" name=\"description[]\"  placeholder=\"description\" class=\"form-control\" />
      <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\"  name=\"check[]\" class=\"custom-control-input\" id=\"__name1__\"\"  >
    
      <label class=\"custom-control-label\" for=\"__name1__\"\"></label>
        <input type=\"text\" name=\"customCheck[]\"  placeholder=\"votre proposition\" class=\"form-control\" />
       
     
    </div>
       
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name2__\"\" name=\"check1[]\" >
    
      <label class=\"custom-control-label\" for=\"__name2__\"\"></label>
        <input type=\"text\" name=\"customCheck1[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
     
    </div>
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name__\" name=\"check2[]\">
    
      <label class=\"custom-control-label\" for=\"__name__\"></label>
        <input type=\"text\" name=\"customCheck2[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
    
    </div>
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name__label__\" name=\"check3[]\" >
    <p> </p>
      <label class=\"custom-control-label\" for=\"__name__label__\"></label>
        <input type=\"text\" name=\"customCheck3[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
     
    </div>

   
      </div>
    </div>
     '>
      <br>
     
   
    
        </div>
         <div id=\"ajouterAutre\" data-prototype='  <div class=\"row\">
                <div class=\"form-group col-md-7\">
   
      <br>
    <input type=\"text\" name=\"questionAutre[]\"  placeholder=\"votre question\" class=\"form-control\" />
     </div>
     </div>'>
     
        </div>
        
                </div>
                <br>
       <button type=\"submit\" class=\"btn btn-lg btn-primary\">Enregistrer</button>
       </form> 
                </div>
                </div>
                </div>
                 </div>
                </div>
 
   
</section>
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#ajouterQCM');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a class=\"btn btn-primary\" href=\"#\"><span>Ajouter QCM </span></a>');
  \$container.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterCategorie(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterCategorie(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, (index+1))
                                                        .replace(/__name__/g, 't'+index)
                                                        .replace(/__name1__/g, 'p'+index)
                                                        .replace(/__name2__/g, 'o'+index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$(' <button style=\"height: 50.5662px;margin-top:20px;\" class=\"btn btn-lg btn-danger\">Supprimer Question</button> ');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>

<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#ajouterAutre');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a class=\"btn btn-dark\" href=\"#\"><span>Ajouter filmer</span></a>');
  \$container.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterQuestion(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterQuestion(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression1(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterQuestion(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                                                        .replace(/__name__/g, index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression1(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression1(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<button style=\"height: 50.5662px;margin-top:20px;\" class=\"btn btn-lg btn-danger\">Supprimer Question</button>');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>
 
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
        return "recruteur/creerEntretien.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 126,  175 => 107,  168 => 103,  164 => 102,  155 => 96,  151 => 95,  144 => 91,  140 => 90,  118 => 71,  111 => 67,  43 => 1,);
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
  <a class=\"active\" > Entretien</a>
  <div class=\"dropdown-content\">
 <a class=\"active\" href=\"{{ path('planifierEntretien', {'id': recruteur.id}) }}\">Planifier Entretien</a>
  <a  href=\"{{ path('MesEntretiens', {'id': recruteur.id}) }}\">Mes Entretiens</a>
  </div>
</li>
              
               <li><a href=\"{{ path('candidatsPostule', {'id': recruteur.id}) }}\">Candidates postulé</a></li>
               <li><a >Statistiques</a></li>
              
                 <li><a >Déconnexion</a></li>
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
Post New Job -->

<section>

<form class=\"form-row\" method=\"POST\" action=\"{{ path('entretien', {'id': recruteur.id}) }}\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>Entretien </h4>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>\tTitre * </label>
                  <input type=\"text\" name=\"poste\" class=\"form-control\" value=\"\">
                </div>
                <div class=\"form-group col-md-12\">
                  <label>\tDescription * </label>
                  <input type=\"text\" name=\"descc\" class=\"form-control\" value=\"\">
                </div>
                </div>
                <br>
                <br>
                  <div class=\"section-title-02 mb-4\">
            <h4>Questions Entretien </h4>
            <span> Le questionnaire comprte au moins deux questions </span>
          </div>
                <div class=\"row\">
            <div class=\"col-12\">

    <div id=\"ajouterQCM\" data-prototype='
     <div class=\"row\">
                <div class=\"form-group col-md-7\">
    
      <br>
    <input type=\"text\" name=\"questionQCM[]\"  placeholder=\"votre question\" class=\"form-control\" />
    <br>
<input type=\"text\" name=\"description[]\"  placeholder=\"description\" class=\"form-control\" />
      <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\"  name=\"check[]\" class=\"custom-control-input\" id=\"__name1__\"\"  >
    
      <label class=\"custom-control-label\" for=\"__name1__\"\"></label>
        <input type=\"text\" name=\"customCheck[]\"  placeholder=\"votre proposition\" class=\"form-control\" />
       
     
    </div>
       
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name2__\"\" name=\"check1[]\" >
    
      <label class=\"custom-control-label\" for=\"__name2__\"\"></label>
        <input type=\"text\" name=\"customCheck1[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
     
    </div>
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name__\" name=\"check2[]\">
    
      <label class=\"custom-control-label\" for=\"__name__\"></label>
        <input type=\"text\" name=\"customCheck2[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
    
    </div>
         <div class=\"custom-control custom-checkbox mb-19\" >

       <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name__label__\" name=\"check3[]\" >
    <p> </p>
      <label class=\"custom-control-label\" for=\"__name__label__\"></label>
        <input type=\"text\" name=\"customCheck3[]\"  placeholder=\"votre prop\" class=\"form-control\" />
       
     
    </div>

   
      </div>
    </div>
     '>
      <br>
     
   
    
        </div>
         <div id=\"ajouterAutre\" data-prototype='  <div class=\"row\">
                <div class=\"form-group col-md-7\">
   
      <br>
    <input type=\"text\" name=\"questionAutre[]\"  placeholder=\"votre question\" class=\"form-control\" />
     </div>
     </div>'>
     
        </div>
        
                </div>
                <br>
       <button type=\"submit\" class=\"btn btn-lg btn-primary\">Enregistrer</button>
       </form> 
                </div>
                </div>
                </div>
                 </div>
                </div>
 
   
</section>
<script src=\"http://code.jquery.com/jquery-1.8.2.min.js\"></script>
<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#ajouterQCM');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a class=\"btn btn-primary\" href=\"#\"><span>Ajouter QCM </span></a>');
  \$container.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterCategorie(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterCategorie(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterCategorie(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, (index+1))
                                                        .replace(/__name__/g, 't'+index)
                                                        .replace(/__name1__/g, 'p'+index)
                                                        .replace(/__name2__/g, 'o'+index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression(\$prototype) {
    // Création du lien
    \$lienSuppression = \$(' <button style=\"height: 50.5662px;margin-top:20px;\" class=\"btn btn-lg btn-danger\">Supprimer Question</button> ');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>

<script type=\"text/javascript\">
\$(document).ready(function() {
  // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
  var \$container = \$('div#ajouterAutre');

  // On ajoute un lien pour ajouter une nouvelle catégorie
  var \$lienAjout = \$('<a class=\"btn btn-dark\" href=\"#\"><span>Ajouter filmer</span></a>');
  \$container.append(\$lienAjout);

  // On ajoute un nouveau champ à chaque clic sur le lien d'ajout.
  \$lienAjout.click(function(e) {
    ajouterQuestion(\$container);
    e.preventDefault(); // évite qu'un # apparaisse dans l'URL
    return false;
  });

  // On définit un compteur unique pour nommer les champs qu'on va ajouter dynamiquement
  var index = \$container.find(':input').length;

  // On ajoute un premier champ directement s'il n'en existe pas déjà un (cas d'un nouvel article par exemple).
  if (index == 0) {
    ajouterQuestion(\$container);
  } else {
    // Pour chaque catégorie déjà existante, on ajoute un lien de suppression
    \$container.children('div').each(function() {
      ajouterLienSuppression1(\$(this));
    });
  }

  // La fonction qui ajoute un formulaire Categorie
  function ajouterQuestion(\$container) {
    // Dans le contenu de l'attribut « data-prototype », on remplace :
    // - le texte \"__name__label__\" qu'il contient par le label du champ
    // - le texte \"__name__\" qu'il contient par le numéro du champ
    var \$prototype = \$(\$container.attr('data-prototype').replace(/__name__label__/g, 'Catégorie n°' + (index+1))
                                                        .replace(/__name__/g, index));

    // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
    ajouterLienSuppression1(\$prototype);

    // On ajoute le prototype modifié à la fin de la balise <div>
    \$container.append(\$prototype);

    // Enfin, on incrémente le compteur pour que le prochain ajout se fasse avec un autre numéro
    index++;
  }

  // La fonction qui ajoute un lien de suppression d'une catégorie
  function ajouterLienSuppression1(\$prototype) {
    // Création du lien
    \$lienSuppression = \$('<button style=\"height: 50.5662px;margin-top:20px;\" class=\"btn btn-lg btn-danger\">Supprimer Question</button>');

    // Ajout du lien
    \$prototype.append(\$lienSuppression);

    // Ajout du listener sur le clic du lien
    \$lienSuppression.click(function(e) {
      \$prototype.remove();
      e.preventDefault(); // évite qu'un # apparaisse dans l'URL
      return false;
    });
  }
});
</script>
 
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
", "recruteur/creerEntretien.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\creerEntretien.html.twig");
    }
}
