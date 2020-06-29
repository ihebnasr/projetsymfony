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

/* recruteur/dashboard.html.twig */
class __TwigTemplate_a7918c6af7245f16ca64bbbd154bff03985b66a08ef0014e3ba78e936d91ba0d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/dashboard.html.twig"));

        // line 1
        echo "<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
";
        // line 2
        $this->loadTemplate("BarRecruteur/header.html.twig", "recruteur/dashboard.html.twig", 2)->display($context);
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
                 <li><a  class=\"active\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 13, $this->source); })()), "id", [], "any", false, false, false, 13)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
              <li><a  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
  <li  class=\" dropdown\">
  <a  >Offre D'emploi</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a>
  <a  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a>
  </div>
</li>
 <li  class=\" dropdown\">
  <a  > Entretien</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planifierEntretien", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)]), "html", null, true);
        echo "\">Planifier Entretien</a>
  <a  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesEntretiens", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">Mes Entretiens</a>
  </div>
</li>
               <li><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidatsPostule", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
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
<!--========================Fin Menu  recruteur =========================-->

<!--=================================  Dashboard =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
       
        <div class=\"user-dashboard-info-box mb-0\">
          <div class=\"section-title-02 mb-4\">
            <h4>List des candidats</h4>
          </div>
          <div class=\"row\">
       <!--==  On affiche tous  les données des candidats pour le recruteur  ==-->
             ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 55
            echo "            <div class=\"col-12\">
              <div class=\"job-list\">
                <div class=\"job-list-logo\">
                  <img class=\"img-fluid\" src=\"/images/avatar/";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "photo_candidat", [], "any", false, false, false, 58), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"job-list-details\">
                  <div class=\"job-list-info\">
                    <div class=\"job-list-title\">
                      <h5 class=\"mb-0\"><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileCandidat", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 63)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "prenom_candidat", [], "any", false, false, false, 63), "html", null, true);
            echo "</a></h5>
                    </div>
                    <div class=\"job-list-option\">
                      <ul class=\"list-unstyled\">
                        <li> <span>Domaine</span> <a href=\"\">";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "domaine_candidat", [], "any", false, false, false, 67), "html", null, true);
            echo "</a> </li>
                        <li><i class=\"fas fa-map-marker-alt pr-1\"></i>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "adresse", [], "any", false, false, false, 68), "html", null, true);
            echo "</li>
                        <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "linkedin", [], "any", false, false, false, 69), "html", null, true);
            echo "</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
               ";
            // line 75
            echo " 
                  <div class=\"job-list-favourite-time\"> <a class=\" \" href=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileCandidat", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 76)]), "html", null, true);
            echo "\"> Voir Profil</a>  </div>
              </div>
            </div>
            <!-- fin de boucle for !-->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= fin Dashboard =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
";
        // line 90
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/dashboard.html.twig", 90)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 90,  179 => 81,  168 => 76,  165 => 75,  157 => 69,  153 => 68,  149 => 67,  140 => 63,  132 => 58,  127 => 55,  123 => 54,  95 => 29,  89 => 26,  85 => 25,  76 => 19,  72 => 18,  65 => 14,  61 => 13,  58 => 12,  48 => 3,  46 => 2,  43 => 1,);
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
                 <li><a  class=\"active\" href=\"{{ path('dashboard_recruteur', {'id': recruteur.id}) }}\" >Tableau de bord</a></li>
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
<!--========================Fin Menu  recruteur =========================-->

<!--=================================  Dashboard =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
       
        <div class=\"user-dashboard-info-box mb-0\">
          <div class=\"section-title-02 mb-4\">
            <h4>List des candidats</h4>
          </div>
          <div class=\"row\">
       <!--==  On affiche tous  les données des candidats pour le recruteur  ==-->
             {% for candidat in candidats %}
            <div class=\"col-12\">
              <div class=\"job-list\">
                <div class=\"job-list-logo\">
                  <img class=\"img-fluid\" src=\"/images/avatar/{{candidat.photo_candidat}}\" alt=\"\">
                </div>
                <div class=\"job-list-details\">
                  <div class=\"job-list-info\">
                    <div class=\"job-list-title\">
                      <h5 class=\"mb-0\"><a href=\"{{ path('profileCandidat', {'id': candidat.id}) }}\">{{candidat.prenom_candidat}}</a></h5>
                    </div>
                    <div class=\"job-list-option\">
                      <ul class=\"list-unstyled\">
                        <li> <span>Domaine</span> <a href=\"\">{{candidat.domaine_candidat}}</a> </li>
                        <li><i class=\"fas fa-map-marker-alt pr-1\"></i>{{candidat.adresse}}</li>
                        <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>{{candidat.linkedin}}</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
               {# on a utulisés la fonction path()  pour créer un lien vers la page profile candidat 
               et passez le nom de la route comme premier argument et les paramètres de la route comme deuxième argument  #} 
                  <div class=\"job-list-favourite-time\"> <a class=\" \" href=\"{{ path('profileCandidat', {'id': candidat.id}) }}\"> Voir Profil</a>  </div>
              </div>
            </div>
            <!-- fin de boucle for !-->
              {% endfor %}

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= fin Dashboard =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/footer.html.twig' %}", "recruteur/dashboard.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\dashboard.html.twig");
    }
}
