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
class __TwigTemplate_d08ee093741329ae5a8ef97f42b9ab1ffc530bda7365601f1416d014c8faaa61 extends Template
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
              <li><a  class=\"active\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 14, $this->source); })()), "id", [], "any", false, false, false, 14)]), "html", null, true);
        echo "\" >Tableau de bord</a></li>
              <li><a  href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_recruteur", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" >Mon Profile</a></li>
  <li  class=\" dropdown\">
  <a  >Offre D'emploi</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 19, $this->source); })()), "id", [], "any", false, false, false, 19)]), "html", null, true);
        echo "\">Publier Offre d'emploi</a>
  <a  href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gererOffre_emploi", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        echo "\">Mes Offres d'emploi</a>
  </div>
</li>
 <li  class=\" dropdown\">
  <a  > Entretien</a>
  <div class=\"dropdown-content\">
 <a  href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("planifierEntretien", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        echo "\">Planifier Entretien</a>
  <a  href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("MesEntretiens", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        echo "\">Mes Entretiens</a>
  </div>
</li>
               <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidatsPostule", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["recruteur"]) || array_key_exists("recruteur", $context) ? $context["recruteur"] : (function () { throw new RuntimeError('Variable "recruteur" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
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
        // line 65
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "flashes", [0 => "ajouter"], "method", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["m1"]) {
            // line 66
            echo "            <div class=\"alert alert-success\">
                ";
            // line 67
            echo twig_escape_filter($this->env, $context["m1"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        ";
        // line 71
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 71, $this->source); })()), "flashes", [0 => "supp"], "method", false, false, false, 71));
        foreach ($context['_seq'] as $context["_key"] => $context["m2"]) {
            // line 72
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 73
            echo twig_escape_filter($this->env, $context["m2"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
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
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 87, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 88
            echo "                <tr>
                  <th scope=\"row\">";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 89), "html", null, true);
            echo "
                    <p class=\"mb-1 mt-2\">Date d'Expiration: ";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 90), "html", null, true);
            echo "</p>
                  </th>
                  <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "domaine", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                  <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "type_contrat", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                  <td>
                    <ul class=\"list-unstyled mb-0 d-flex\">
                    <!-- Lorsqu'on clique sur  l'icone trash , modal va s'affiché -->
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
                  </td>
                </tr>
            <!-- Modal Supprimer -->
<div class=\"modal fade\" id=\"exampleModall1";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 102), "html", null, true);
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
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 112), "html", null, true);
            echo "? </span></p>

          </div>
          <div class=\"modal-footer\">
          ";
            // line 117
            echo " 
          <a  href=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("offree_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 118)]), "html", null, true);
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
            // line 128
            echo "           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
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
        // line 144
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/gerer_offres.html.twig", 144)->display($context);
        // line 145
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
        return array (  281 => 145,  279 => 144,  265 => 132,  256 => 128,  241 => 118,  238 => 117,  231 => 112,  218 => 102,  210 => 97,  203 => 93,  199 => 92,  194 => 90,  190 => 89,  187 => 88,  182 => 87,  169 => 76,  160 => 73,  157 => 72,  152 => 71,  150 => 70,  141 => 67,  138 => 66,  133 => 65,  96 => 30,  90 => 27,  86 => 26,  77 => 20,  73 => 19,  66 => 15,  62 => 14,  59 => 13,  48 => 3,  46 => 2,  43 => 1,);
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

 ", "recruteur/gerer_offres.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\gerer_offres.html.twig");
    }
}
