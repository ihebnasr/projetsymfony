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

/* candidat/offres.html.twig */
class __TwigTemplate_14565feff4609d4995477fe2d21da0cf462b57b6da89bae1ff084c58e73d7399 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offres.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offres.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/offres.html.twig", 2)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 2, $this->source); })())]));
        // line 3
        echo "<!--=================================
Dashboard Nav -->

<!--=================================
Dashboard Nav -->

<!--=================================
Manage Jobs -->
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
         
            
            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                </tr>
              </thead>
              <tbody>
              ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offres"]) || array_key_exists("offres", $context) ? $context["offres"] : (function () { throw new RuntimeError('Variable "offres" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["offre"]) {
            // line 43
            echo "                <tr>
                  <th scope=\"row\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "nom_poste", [], "any", false, false, false, 44), "html", null, true);
            echo "
                    <p class=\"mb-1 mt-2\">Date d'Expiration: ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "date_expiration", [], "any", false, false, false, 45), "html", null, true);
            echo "</p>
                  </th>
                  <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "domaine", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                  <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "type_contrat", [], "any", false, false, false, 48), "html", null, true);
            echo "</td>
                  <td>
                    <ul class=\"list-unstyled mb-0 d-flex\">
                    
                      
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["offre"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
                  </td>
                </tr>
           
                   ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "           <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-filter pr-1\"></i>no records found</li>
            </ul>
 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offre'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "               
              </tbody>
            </table>
          </div>
   
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Manage Jobs -->

 
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
        return "candidat/offres.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 63,  129 => 59,  118 => 53,  110 => 48,  106 => 47,  101 => 45,  97 => 44,  94 => 43,  89 => 42,  48 => 3,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% include \"BarCandidat/header.html.twig\"  with {id:id} %}
<!--=================================
Dashboard Nav -->

<!--=================================
Dashboard Nav -->

<!--=================================
Manage Jobs -->
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
         
            
            <table class=\"table table-bordered\">
              <thead class=\"bg-light\">
                <tr >
                  <th scope=\"col\">Titre d'offre </th>
                  <th scope=\"col\">Domaine</th>
                  <th scope=\"col\">Type contrat</th>
                </tr>
              </thead>
              <tbody>
              {% for offre in offres %}
                <tr>
                  <th scope=\"row\">{{offre.nom_poste}}
                    <p class=\"mb-1 mt-2\">Date d'Expiration: {{offre.date_expiration}}</p>
                  </th>
                  <td>{{offre.domaine}}</td>
                  <td>{{offre.type_contrat}}</td>
                  <td>
                    <ul class=\"list-unstyled mb-0 d-flex\">
                    
                      
                      <li><a  href=\"\" data-toggle=\"modal\" data-target=\"#exampleModall1{{offre.id}}\" class=\"text-danger\" data-toggle=\"tooltip\" title=\"Delete\"><i class=\"far fa-trash-alt\"></i></a></li>
                    </ul>
                  </td>
                </tr>
           
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
<!--=================================
Manage Jobs -->

 
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
", "candidat/offres.html.twig", "C:\\wamp64\\www\\JOB\\templates\\candidat\\offres.html.twig");
    }
}
