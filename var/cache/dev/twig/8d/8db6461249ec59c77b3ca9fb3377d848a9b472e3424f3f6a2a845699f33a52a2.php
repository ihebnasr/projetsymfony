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

/* recruteur/offre_emploi.html.twig */
class __TwigTemplate_a4f0f6d89d5a08b407a603c5a5ece1744914ea2e5c03d6a685b11be5e190b826 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/offre_emploi.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/offre_emploi.html.twig"));

        // line 1
        echo "<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
";
        // line 2
        $this->loadTemplate("BarRecruteur/header.html.twig", "recruteur/offre_emploi.html.twig", 2)->display($context);
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
            <li><a  href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
            
             <li><a  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
              <li><a  class=\"active\" href=\"";
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

<!--=================================  Ajouter offre d'emlpoi =======================-->
<section>
<!--=========== formulaire :method :POST et l'action par la route offrEmploi_creation ====-->
<form class=\"form-row\" method=\"POST\" action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offrEmploi_creation");
        echo "\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>À propos du poste</h4>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>\tTitre * </label>
                  <input type=\"text\" name=\"poste\" class=\"form-control\" value=\"\">
                </div>
                </div>
                <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>Détail de l'offres *</label>
                  <br><span>Donnez des détails à propos du poste </span>
                  <textarea class=\"form-control\" name=\"detail\" rows=\"4\"></textarea>
                </div>
                </diV>
                <div class=\"row\">
                 <div class=\"form-group col-md-6 datetimepickers col-md-6\">
                <label>Date d'expiration d'offre d'emploi</label>
                <div class=\"input-group date\" id=\"datetimepicker-01\" data-target-input=\"nearest\">
                  <input type=\"datetime-local\" name=\"dateExp\" class=\"form-control datetimepicker-input\" placeholder=\"Date\" data-target=\"#datetimepicker-01\">
                  <div class=\"input-group-append\" data-target=\"#datetimepicker-01\" data-toggle=\"datetimepicker\">
                    <div class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></div>
                  </div>
                </div>
              </div>
                <div class=\"form-group col-md-6 select-border\">
                  <label> Domaine </label>
                  <select class=\"form-control basic-select\" name=\"domaine\" >
                    <option value=\"Energy\" selected=\"selected\">Energy</option>
                    <option value=\"Human Resources\">Human Resources</option>
                    <option value=\"IT & Telecoms\">IT & Telecoms</option>
                    <option value=\"Gestion\">Gestion</option>
                    <option value=\"Informatique\">Informatique</option>
                  </select>
                </div>
            </div>
          <div class=\"row\">
                <div class=\"form-group col-md-6 select-border\">
                  <label>Type de Salaire</label>
                  <select class=\"form-control basic-select\" name=\"typeSalaire\">
                    <option value=\"année\">par année</option>
                    <option value=\"mois\">par mois</option>
                    <option value=\"semaine\">par semaine</option>
                     <option value=\"jour\">par jour</option>
                  </select>
                </div>
                <div class=\"form-group col-md-6\">
                  <label>Salaire</label>
                  <input type=\"number\" name=\"salaire\" class=\"form-control\" value=\"\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-12 mb-0\">
                  <label>Compétence professionnelle</label>
                  <input type=\"text\" name=\"exigence\" class=\"form-control\" value=\"\">
                </div>
             </div>
            </div>
          </div>
        </div>
        <div class=\"user-dashboard-info-box\">
      
                <h4 class=\"mb-3\">Critères de l'offre</h4>
                   <div class=\"row\">
            <div class=\"col-12\">
              <form class=\"form-row\">
                <div class=\"form-group col-md-12\">
                      <label>Type de contrat </label>
                      <select class=\"form-control basic-select\" name=\"contrat\">
                        <option value=\"Intérim\">Intérim</option>
                        <option value=\"Freelance / Indépendant\">Freelance / Indépendant</option>
                        <option value=\"Contrat pro\">Contrat pro</option>
                        <option value=\"CDD\">CDD</option>
                        <option value=\"CDI\">CDI</option>
                        <option value=\"Stage\">Stage</option>
                        <option value=\"Apprentissage\">Apprentissage</option>
                      </select>
                    </div>
                  
                       
                  <div class=\"form-group col-md-12\">
                      <label> Type d'emploi</label>
                      <select class=\"form-control basic-select\" name=\"typeEmploi\">
                        <option value=\"Temps plein\">Temps plein </option>
                        <option value=\"Temps partiel \">Temps partiel </option>
                        <option value=\"Temps plein ou Temps partiel\">Temps plein ou Temps partiel </option>
                      </select>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"form-group mb-0\">
            <h4 class=\"mb-4\"> Profil recherché </h4>
            <span> Indiquez précisément le profil souhaité pour le poste.</span>
            <div class=\"form-group\">
              <textarea type=\"text\" name=\"profil\" class=\"form-control\" value=\"\" placeholder=\"profil recherché\"></textarea>
            </div>
           
        </div>
        </div>
         <button type=\"submit\"  class=\"btn btn-lg btn-primary\">Enregistrer</button>
         </form>
      </div>
    </div>
  </div>
  </div>
</section>
<!--=================================  FIN Ajouter offre d'emlpoi =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
";
        // line 154
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/offre_emploi.html.twig", 154)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/offre_emploi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 154,  96 => 33,  80 => 20,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  58 => 12,  48 => 3,  46 => 2,  43 => 1,);
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
            <li><a  href=\"{{ path('dashboard_recruteur', {'id': recruteur.id}) }}\" >Tableau de bord</a></li>
            
             <li><a  href=\"{{ path('profile_recruteur', {'id': recruteur.id}) }}\" >Mon Profile</a></li>
              <li><a  class=\"active\" href=\"{{ path('offre_emploi', {'id': recruteur.id}) }}\">Publier Offre d'emploi</a></li>
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

<!--=================================  Ajouter offre d'emlpoi =======================-->
<section>
<!--=========== formulaire :method :POST et l'action par la route offrEmploi_creation ====-->
<form class=\"form-row\" method=\"POST\" action=\"{{ path('offrEmploi_creation') }}\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-4\">
            <h4>À propos du poste</h4>
          </div>
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>\tTitre * </label>
                  <input type=\"text\" name=\"poste\" class=\"form-control\" value=\"\">
                </div>
                </div>
                <div class=\"row\">
                <div class=\"form-group col-md-12\">
                  <label>Détail de l'offres *</label>
                  <br><span>Donnez des détails à propos du poste </span>
                  <textarea class=\"form-control\" name=\"detail\" rows=\"4\"></textarea>
                </div>
                </diV>
                <div class=\"row\">
                 <div class=\"form-group col-md-6 datetimepickers col-md-6\">
                <label>Date d'expiration d'offre d'emploi</label>
                <div class=\"input-group date\" id=\"datetimepicker-01\" data-target-input=\"nearest\">
                  <input type=\"datetime-local\" name=\"dateExp\" class=\"form-control datetimepicker-input\" placeholder=\"Date\" data-target=\"#datetimepicker-01\">
                  <div class=\"input-group-append\" data-target=\"#datetimepicker-01\" data-toggle=\"datetimepicker\">
                    <div class=\"input-group-text\"><i class=\"far fa-calendar-alt\"></i></div>
                  </div>
                </div>
              </div>
                <div class=\"form-group col-md-6 select-border\">
                  <label> Domaine </label>
                  <select class=\"form-control basic-select\" name=\"domaine\" >
                    <option value=\"Energy\" selected=\"selected\">Energy</option>
                    <option value=\"Human Resources\">Human Resources</option>
                    <option value=\"IT & Telecoms\">IT & Telecoms</option>
                    <option value=\"Gestion\">Gestion</option>
                    <option value=\"Informatique\">Informatique</option>
                  </select>
                </div>
            </div>
          <div class=\"row\">
                <div class=\"form-group col-md-6 select-border\">
                  <label>Type de Salaire</label>
                  <select class=\"form-control basic-select\" name=\"typeSalaire\">
                    <option value=\"année\">par année</option>
                    <option value=\"mois\">par mois</option>
                    <option value=\"semaine\">par semaine</option>
                     <option value=\"jour\">par jour</option>
                  </select>
                </div>
                <div class=\"form-group col-md-6\">
                  <label>Salaire</label>
                  <input type=\"number\" name=\"salaire\" class=\"form-control\" value=\"\">
                </div>
            </div>
            <div class=\"row\">
                <div class=\"form-group col-md-12 mb-0\">
                  <label>Compétence professionnelle</label>
                  <input type=\"text\" name=\"exigence\" class=\"form-control\" value=\"\">
                </div>
             </div>
            </div>
          </div>
        </div>
        <div class=\"user-dashboard-info-box\">
      
                <h4 class=\"mb-3\">Critères de l'offre</h4>
                   <div class=\"row\">
            <div class=\"col-12\">
              <form class=\"form-row\">
                <div class=\"form-group col-md-12\">
                      <label>Type de contrat </label>
                      <select class=\"form-control basic-select\" name=\"contrat\">
                        <option value=\"Intérim\">Intérim</option>
                        <option value=\"Freelance / Indépendant\">Freelance / Indépendant</option>
                        <option value=\"Contrat pro\">Contrat pro</option>
                        <option value=\"CDD\">CDD</option>
                        <option value=\"CDI\">CDI</option>
                        <option value=\"Stage\">Stage</option>
                        <option value=\"Apprentissage\">Apprentissage</option>
                      </select>
                    </div>
                  
                       
                  <div class=\"form-group col-md-12\">
                      <label> Type d'emploi</label>
                      <select class=\"form-control basic-select\" name=\"typeEmploi\">
                        <option value=\"Temps plein\">Temps plein </option>
                        <option value=\"Temps partiel \">Temps partiel </option>
                        <option value=\"Temps plein ou Temps partiel\">Temps plein ou Temps partiel </option>
                      </select>
                    </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"form-group mb-0\">
            <h4 class=\"mb-4\"> Profil recherché </h4>
            <span> Indiquez précisément le profil souhaité pour le poste.</span>
            <div class=\"form-group\">
              <textarea type=\"text\" name=\"profil\" class=\"form-control\" value=\"\" placeholder=\"profil recherché\"></textarea>
            </div>
           
        </div>
        </div>
         <button type=\"submit\"  class=\"btn btn-lg btn-primary\">Enregistrer</button>
         </form>
      </div>
    </div>
  </div>
  </div>
</section>
<!--=================================  FIN Ajouter offre d'emlpoi =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/footer.html.twig' %}", "recruteur/offre_emploi.html.twig", "C:\\wamp64\\www\\JOB\\templates\\recruteur\\offre_emploi.html.twig");
    }
}
