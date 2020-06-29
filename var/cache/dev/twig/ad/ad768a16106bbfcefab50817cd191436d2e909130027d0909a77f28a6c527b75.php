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

/* recruteur/gerer_offres.html.twig */
class __TwigTemplate_2c4e14ebe1818bda0c13a5ea82c1ec65887fdf5acaf9783b2d57a1e10ad4bea2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/gerer_offres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/gerer_offres.html.twig"));

        // line 1
        echo "<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
";
        // line 2
        $this->loadTemplate("BarRecruteur/header.html.twig", "recruteur/gerer_offres.html.twig", 2)->display($context);
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
        // line 13
        echo " 
                <li><a  href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
            
             <li><a  href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 16, $this->source); })()), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
              <li><a  href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 17, $this->source); })()), "id", [], "any", false, false, false, 17)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a></li>
               <li><a class=\"active\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a></li>

              
                 <li><a href=\"";
        // line 21
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

<!--=================================  Mes offres d'emploi =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
        
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box mb-0\" >
          <div class=\"row mb-4\">
            <div class=\"col-md-7 col-sm-5 d-flex align-items-center\">
              <div class=\"section-title-02 mb-0 \">
                <h4 class=\"mb-0\">Mes offres d'emploi</h4>
              </div>
            </div>
            <div class=\"col-md-5 col-sm-7 mt-3 mt-sm-0\">
              <div class=\"search\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
              </div>
            </div>
          </div>
          <div class=\"user-dashboard-table table-responsive\">
          ";
        // line 53
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", [0 => "ajouter"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
            // line 54
            echo "            <div class=\"alert alert-success\">
                ";
            // line 55
            echo twig_escape_filter($this->env, $context["m1"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        // line 59
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "flashes", [0 => "supp"], "method", false, false, false, 59));
        foreach ($context['_seq'] as $context["_key"] => $context["m2"]) {
            // line 60
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 61
            echo twig_escape_filter($this->env, $context["m2"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
               <!--==  On affiche tous  les données de ses offres pour le recruteur  ==-->
              ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 75, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 76
            echo "                <tr>
                  <th scope=\"row\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 77), "html", null, true);
            echo "
                    <p class=\"mb-1 mt-2\">Date d'Expiration: ";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 78), "html", null, true);
            echo "</p>
                  </th>
                  <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "domaine", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                  <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "type_contrat", [], "any", false, false, false, 81), "html", null, true);
            echo "</td>
                  <td>
                    <ul class=\"list-unstyled mb-0 d-flex\">
                    <!-- Lorsqu'on clique sur  l'icone trash , modal va s'affiché -->
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 85), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
                  </td>
                </tr>
            <!-- Modal Supprimer -->
<div class=\"modal fade\" id=\"exampleModall1";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 90), "html", null, true);
            echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer Offre d'emploi</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment supprimer <a href=\"#\"></a>  ";
            // line 100
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 100), "html", null, true);
            echo "? </span></p>

          </div>
          <div class=\"modal-footer\">
          ";
            // line 105
            echo " 
          <a  href=\"";
            // line 106
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offree_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 106)]), "html", null, true);
            echo "\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal supprimer -->
     <!-- lorsque le recruteur  n'a pas encore ajouter des offres , cette partie va s'execute -->
                   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 116
            echo "           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "               
              </tbody>
            </table>
          </div>
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Mes offres d'emploi =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
";
        // line 132
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/gerer_offres.html.twig", 132)->display($context);
        // line 133
        echo "
 ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/gerer_offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 133,  261 => 132,  247 => 120,  238 => 116,  223 => 106,  220 => 105,  213 => 100,  200 => 90,  192 => 85,  185 => 81,  181 => 80,  176 => 78,  172 => 77,  169 => 76,  164 => 75,  151 => 64,  142 => 61,  139 => 60,  134 => 59,  132 => 58,  123 => 55,  120 => 54,  115 => 53,  81 => 21,  75 => 18,  71 => 17,  67 => 16,  62 => 14,  59 => 13,  48 => 3,  46 => 2,  43 => 1,);
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
              <li><a  href=\"{{ path('offre_emploi', {'id': recruteur.id}) }}\">Publier Offre d'emploi</a></li>
               <li><a class=\"active\" href=\"{{ path('gererOffre_emploi', {'id': recruteur.id}) }}\">Mes Offres d'emploi</a></li>

              
                 <li><a href=\"{{ path('app_logout') }}\">Déconnexion</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--========================Fin Menu  recruteur =========================-->

<!--=================================  Mes offres d'emploi =======================-->
<section>
  <div class=\"container\">
    <div class=\"row\">
        
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box mb-0\" >
          <div class=\"row mb-4\">
            <div class=\"col-md-7 col-sm-5 d-flex align-items-center\">
              <div class=\"section-title-02 mb-0 \">
                <h4 class=\"mb-0\">Mes offres d'emploi</h4>
              </div>
            </div>
            <div class=\"col-md-5 col-sm-7 mt-3 mt-sm-0\">
              <div class=\"search\">
                <i class=\"fas fa-search\"></i>
                <input type=\"text\" class=\"form-control\" placeholder=\"Rechercher...\">
              </div>
            </div>
          </div>
          <div class=\"user-dashboard-table table-responsive\">
          {# On affiche tous les messages flash dont le nom est « ajouter » #}
          {% for m1 in app.flashes('ajouter') %}
            <div class=\"alert alert-success\">
                {{ m1 }}
            </div>
        {% endfor %}
        {# On affiche tous les messages flash dont le nom est « supp » #}
              {% for m2 in app.flashes('supp') %}
            <div class=\"alert alert-danger\">
                {{ m2 }}
            </div>
        {% endfor %}
            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                  <th scope=\"col\">Actions</th>
                </tr>
              </thead>
              <tbody>
               <!--==  On affiche tous  les données de ses offres pour le recruteur  ==-->
              {% for offre in offres %}
                <tr>
                  <th scope=\"row\">{{offre.nom_poste}}
                    <p class=\"mb-1 mt-2\">Date d'Expiration: {{offre.date_expiration}}</p>
                  </th>
                  <td>{{offre.domaine}}</td>
                  <td>{{offre.type_contrat}}</td>
                  <td>
                    <ul class=\"list-unstyled mb-0 d-flex\">
                    <!-- Lorsqu'on clique sur  l'icone trash , modal va s'affiché -->
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1{{offre.id}}\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
                  </td>
                </tr>
            <!-- Modal Supprimer -->
<div class=\"modal fade\" id=\"exampleModall1{{offre.id}}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\" id=\"exampleModalLabel\">Supprimer Offre d'emploi</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\" >
         <p><span>Voulez-vous vraiment supprimer <a href=\"#\"></a>  {{ offre.nom_poste }}? </span></p>

          </div>
          <div class=\"modal-footer\">
          {# on a utulisés la fonction path()  pour executer la route offree_delete
        passez le nom de la route comme premier argument et  l'id de l'offre comme deuxième argument  #} 
          <a  href=\"{{ path('offree_delete', {'id': offre.id}) }}\"  class=\"text-danger\"  >Supprimerr</a>
                                <button type=\"button\" class=\"btn btn-default \" data-dismiss=\"modal\">Annuler</button>
                               
                            </div>
                        </div>
                    </div>
                </div>
 <!-- end Modal supprimer -->
     <!-- lorsque le recruteur  n'a pas encore ajouter des offres , cette partie va s'execute -->
                   {% else %}
           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 {% endfor %}
               
              </tbody>
            </table>
          </div>
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--================================= Mes offres d'emploi =======================-->
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/footer.html.twig' %}

 ", "recruteur/gerer_offres.html.twig", "C:\\wamp64\\www\\JOB\\templates\\recruteur\\gerer_offres.html.twig");
    }
}
