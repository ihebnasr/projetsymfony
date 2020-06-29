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

/* recruteur/profile_recruteur.html.twig */
class __TwigTemplate_44d3d8b90908b213cb010fb8bc0ca082fecf0286d9e1c12976011a1d1c598358 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/profile_recruteur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/profile_recruteur.html.twig"));

        // line 1
        echo "<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
";
        // line 2
        $this->loadTemplate("BarRecruteur/header.html.twig", "recruteur/profile_recruteur.html.twig", 2)->display($context);
        // line 3
        echo "<!--========================Menu de recruteur =========================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
             ";
        // line 12
        echo " 
           <li><a   href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
            
             <li><a  class=\"active\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
              <li><a  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a></li>
               <li><a  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a></li>

              
                 <li><a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\">Déconnexion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--========================Fin Menu  recruteur =========================-->
<!--=================================  profil recruteur =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>Information Générale</h4>
          </div>
          
         <form >
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <label>Nom société</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"societe\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 43, $this->source); })()), "nomSociete", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Email</label>
                <input type=\"email\" class=\"form-control\" disabled name=\"email\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 47, $this->source); })()), "emailRecruteur", [], "any", false, false, false, 47), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Nom </label>
                <input type=\"text\" class=\"form-control\" disabled name=\"nomrecruteur\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 51, $this->source); })()), "nomRecruteur", [], "any", false, false, false, 51), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Prénom</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"prenomRecruteur\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 55, $this->source); })()), "prenomRecruteur", [], "any", false, false, false, 55), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Cin </label>
                <input type=\"text\" class=\"form-control\" disabled name=\"cinRecruteur\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 59, $this->source); })()), "cinRecruteur", [], "any", false, false, false, 59), "html", null, true);
        echo "\">
              </div>
           
           
              <div class=\"form-group col-md-6\">
                <label>Téléphone</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"telephone\" value=\"";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 65, $this->source); })()), "telephone", [], "any", false, false, false, 65), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-6 select-border\">
                <label>Domaine</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"domaine\" value=\"";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 69, $this->source); })()), "domaine", [], "any", false, false, false, 69), "html", null, true);
        echo "\">
              </div>
  
              <div class=\"form-group col-md-6\">
                <label>Site web</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienSite\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 74, $this->source); })()), "lienSite", [], "any", false, false, false, 74), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-12 mb-0\">
                <label>Description</label>
                <textarea class=\"form-control\" rows=\"5\" disabled name=\"description\">";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), "html", null, true);
        echo "</textarea>
              </div>
            </div>
          </form>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Liens sociaux</h4>
          </div>
          <form>
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <label>Facebook</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienFacebook\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 91, $this->source); })()), "lienFacebook", [], "any", false, false, false, 91), "html", null, true);
        echo "\">
              </div>
              <div class=\"form-group col-md-12 mb-0\">
                <label>Linkedin</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienLinkedin\" value=\"";
        // line 95
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 95, $this->source); })()), "lienLinkedin", [], "any", false, false, false, 95), "html", null, true);
        echo "\">
              </div>
            </div>
          </form>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Adresse</h4>
          </div>
          <form>
            <div class=\"form-row\">
              <div class=\"form-group col-md-12\">
                <label>Enter Your  location</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"adresse\" value=\"";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 108, $this->source); })()), "adresse", [], "any", false, false, false, 108), "html", null, true);
        echo "\" placeholder=\"Enter Your  location\">
              </div>
            </div>
            <div class=\"location-map\">
           <iframe src=\"https://www.google.com/maps?q=";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 112, $this->source); })()), "adresse", [], "any", false, false, false, 112), "html", null, true);
        echo "&output=embed\"></iframe>
            </div>
         
          </form>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--================================= fin profil recruteur =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
";
        // line 124
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/profile_recruteur.html.twig", 124)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/profile_recruteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 124,  211 => 112,  204 => 108,  188 => 95,  181 => 91,  165 => 78,  158 => 74,  150 => 69,  143 => 65,  134 => 59,  127 => 55,  120 => 51,  113 => 47,  106 => 43,  80 => 20,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  58 => 12,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/header.html.twig' %}
<!--========================Menu de recruteur =========================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
             {# on a utulisés la fonction path()  pour créer un lien vers les pages qui peut le recruteur les consultées
               et passez le nom de la route comme premier argument et les paramètres de la route comme deuxième argument  #} 
           <li><a   href=\"{{ path('dashboard_recruteur', {'id': recruteur.id}) }}\" >Tableau de bord</a></li>
            
             <li><a  class=\"active\" href=\"{{ path('profile_recruteur', {'id': recruteur.id}) }}\" >Mon Profile</a></li>
              <li><a  href=\"{{ path('offre_emploi', {'id': recruteur.id}) }}\">Publier Offre d'emploi</a></li>
               <li><a  href=\"{{ path('gererOffre_emploi', {'id': recruteur.id}) }}\">Mes Offres d'emploi</a></li>

              
                 <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--========================Fin Menu  recruteur =========================-->
<!--=================================  profil recruteur =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>Information Générale</h4>
          </div>
          
         <form >
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <label>Nom société</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"societe\" value=\"{{recruteur.nomSociete}}\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Email</label>
                <input type=\"email\" class=\"form-control\" disabled name=\"email\" value=\"{{recruteur.emailRecruteur}}\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Nom </label>
                <input type=\"text\" class=\"form-control\" disabled name=\"nomrecruteur\" value=\"{{recruteur.nomRecruteur}}\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Prénom</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"prenomRecruteur\" value=\"{{recruteur.prenomRecruteur}}\">
              </div>
              <div class=\"form-group col-md-6\">
                <label>Cin </label>
                <input type=\"text\" class=\"form-control\" disabled name=\"cinRecruteur\" value=\"{{recruteur.cinRecruteur}}\">
              </div>
           
           
              <div class=\"form-group col-md-6\">
                <label>Téléphone</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"telephone\" value=\"{{recruteur.telephone}}\">
              </div>
              <div class=\"form-group col-md-6 select-border\">
                <label>Domaine</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"domaine\" value=\"{{recruteur.domaine}}\">
              </div>
  
              <div class=\"form-group col-md-6\">
                <label>Site web</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienSite\" value=\"{{recruteur.lienSite}}\">
              </div>
              <div class=\"form-group col-md-12 mb-0\">
                <label>Description</label>
                <textarea class=\"form-control\" rows=\"5\" disabled name=\"description\">{{recruteur.description}}</textarea>
              </div>
            </div>
          </form>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Liens sociaux</h4>
          </div>
          <form>
            <div class=\"form-row\">
              <div class=\"form-group col-md-6\">
                <label>Facebook</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienFacebook\" value=\"{{recruteur.lienFacebook}}\">
              </div>
              <div class=\"form-group col-md-12 mb-0\">
                <label>Linkedin</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"lienLinkedin\" value=\"{{recruteur.lienLinkedin}}\">
              </div>
            </div>
          </form>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Adresse</h4>
          </div>
          <form>
            <div class=\"form-row\">
              <div class=\"form-group col-md-12\">
                <label>Enter Your  location</label>
                <input type=\"text\" class=\"form-control\" disabled name=\"adresse\" value=\"{{recruteur.adresse}}\" placeholder=\"Enter Your  location\">
              </div>
            </div>
            <div class=\"location-map\">
           <iframe src=\"https://www.google.com/maps?q={{recruteur.adresse}}&output=embed\"></iframe>
            </div>
         
          </form>
        </div>
        
      </div>
    </div>
  </div>
</section>
<!--================================= fin profil recruteur =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/footer.html.twig' %}", "recruteur/profile_recruteur.html.twig", "C:\\wamp64\\www\\JOB\\templates\\recruteur\\profile_recruteur.html.twig");
    }
}
