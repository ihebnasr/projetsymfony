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
class __TwigTemplate_2f3017deb25f06bf76651bb9cc53ad6dbc7c06cb81c10e9bf1c16e7c0404b099 extends Template
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
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["candidats"]) || array_key_exists("candidats", $context) ? $context["candidats"] : (function () { throw new RuntimeError('Variable "candidats" does not exist.', 42, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["candidat"]) {
            // line 43
            echo "            <div class=\"col-12\">
              <div class=\"job-list\">
                <div class=\"job-list-logo\">
                  <img class=\"img-fluid\" src=\"/images/avatar/";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "photo_candidat", [], "any", false, false, false, 46), "html", null, true);
            echo "\" alt=\"\">
                </div>
                <div class=\"job-list-details\">
                  <div class=\"job-list-info\">
                    <div class=\"job-list-title\">
                      <h5 class=\"mb-0\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileCandidat", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 51)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "prenom_candidat", [], "any", false, false, false, 51), "html", null, true);
            echo "</a></h5>
                    </div>
                    <div class=\"job-list-option\">
                      <ul class=\"list-unstyled\">
                        <li> <span>Domaine</span> <a href=\"\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "domaine_candidat", [], "any", false, false, false, 55), "html", null, true);
            echo "</a> </li>
                        <li><i class=\"fas fa-map-marker-alt pr-1\"></i>";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "adresse", [], "any", false, false, false, 56), "html", null, true);
            echo "</li>
                        <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["candidat"], "linkedin", [], "any", false, false, false, 57), "html", null, true);
            echo "</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
               ";
            // line 63
            echo " 
                  <div class=\"job-list-favourite-time\"> <a class=\" \" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileCandidat", ["id" => twig_get_attribute($this->env, $this->source, $context["candidat"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"> Voir Profil</a>  </div>
              </div>
            </div>
            <!-- fin de boucle for !-->
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['candidat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        // line 78
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/dashboard.html.twig", 78)->display($context);
        
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
        return array (  172 => 78,  161 => 69,  150 => 64,  147 => 63,  139 => 57,  135 => 56,  131 => 55,  122 => 51,  114 => 46,  109 => 43,  105 => 42,  80 => 20,  74 => 17,  70 => 16,  66 => 15,  61 => 13,  58 => 12,  48 => 3,  46 => 2,  43 => 1,);
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
{% include 'BarRecruteur/footer.html.twig' %}", "recruteur/dashboard.html.twig", "C:\\wamp64\\www\\JOB\\templates\\recruteur\\dashboard.html.twig");
    }
}
