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

/* candidat/entretiens.html.twig */
class __TwigTemplate_0492439571b4ffe686cceee77ab1dc2323bf75a7bae74411a69451c02075ef02 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/entretiens.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/entretiens.html.twig"));

        // line 1
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/entretiens.html.twig", 1)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 1, $this->source); })())]));
        // line 2
        echo "

";
        // line 4
        $this->displayBlock('body', $context, $blocks);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "
<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box table-responsive pb-4 mb-0\">
          <table class=\"table manage-candidates-top mb-0\">
              
            <thead>
              <tr>
                <th>Entretien</th>
                <th>Société </th>
                 <th>Poste </th>
                <th>Date entretien</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entret"]) || array_key_exists("entret", $context) ? $context["entret"] : (function () { throw new RuntimeError('Variable "entret" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["en"]) {
            // line 24
            echo "              <tr class=\"candidates-list\">
                <td class=\"title\">
                  ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["en"], "nom_entretien", [], "any", false, false, false, 26), "html", null, true);
            echo "
                </td>
                <td class=\"candidate-list-favourite-time\">
                 ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["en"], "nom_societe", [], "any", false, false, false, 29), "html", null, true);
            echo "
                </td>
                
                <td class=\"candidate-list-favourite-time\">
                ";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["en"], "nom_poste", [], "any", false, false, false, 33), "html", null, true);
            echo "
                </td>

                <td class=\"candidate-list-favourite-time\">
             ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["en"], "date_entretien", [], "any", false, false, false, 37), "html", null, true);
            echo " 
                            </td>



                <td class=\"candidate-list-favourite-time\">
                    <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("interview", ["ide" => twig_get_attribute($this->env, $this->source, $context["en"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\" 
                    class=\"btn btn-success\" > Passer</a>
                </td>



       
              </tr>
            
   
                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['en'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/entretiens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 54,  126 => 43,  117 => 37,  110 => 33,  103 => 29,  97 => 26,  93 => 24,  89 => 23,  69 => 5,  50 => 4,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include \"BarCandidat/header.html.twig\" with {id:id}%}


{% block body %}

<section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box table-responsive pb-4 mb-0\">
          <table class=\"table manage-candidates-top mb-0\">
              
            <thead>
              <tr>
                <th>Entretien</th>
                <th>Société </th>
                 <th>Poste </th>
                <th>Date entretien</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             {% for en in entret %}
              <tr class=\"candidates-list\">
                <td class=\"title\">
                  {{en.nom_entretien}}
                </td>
                <td class=\"candidate-list-favourite-time\">
                 {{en.nom_societe}}
                </td>
                
                <td class=\"candidate-list-favourite-time\">
                {{en.nom_poste}}
                </td>

                <td class=\"candidate-list-favourite-time\">
             {{en.date_entretien}} 
                            </td>



                <td class=\"candidate-list-favourite-time\">
                    <a href=\"{{ path('interview', {'ide': en.id}) }}\" 
                    class=\"btn btn-success\" > Passer</a>
                </td>



       
              </tr>
            
   
                   {% endfor %}

           
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

{% endblock %}
", "candidat/entretiens.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\candidat\\entretiens.html.twig");
    }
}
