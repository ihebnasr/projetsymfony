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

/* candidat/offredetail.html.twig */
class __TwigTemplate_a342ad70eb21ee3f7704fa3f7c15754d677b1cedbee079e24fe13b0d310b3108 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offredetail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offredetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidat/offredetail.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/offredetail.html.twig", 6)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 6, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
<!--=================================
job list -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"job-list border\">
              <div class=\" job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 >";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 27, $this->source); })()), "nom_poste", [], "any", false, false, false, 27), "html", null, true);
        echo "</h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 31, $this->source); })()), "telephone", [], "any", false, false, false, 31), "html", null, true);
        echo "</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"border p-4 mt-4 mt-lg-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-debit-card\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\"> Salaire offert</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 47, $this->source); })()), "salaire", [], "any", false, false, false, 47), "html", null, true);
        echo " DT</span>
                </div>
              </div>
            </div>
            
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-bar-chart\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Type salaire</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 57, $this->source); })()), "type_salaire", [], "any", false, false, false, 57), "html", null, true);
        echo "</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-md-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-apartment\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Societé</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 66, $this->source); })()), "nom_societe", [], "any", false, false, false, 66), "html", null, true);
        echo "</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-sm-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-medal\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Experience</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">2 Years</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\"> Description de L'offre</h5>
          <p class=\"font-italic\">";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true);
        echo "</p>
        </div>
        <hr>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Profil demandé</h5>
          <ul class=\"list-unstyled list-style\">
";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 90, $this->source); })()), "profil_recherche", [], "any", false, false, false, 90), "html", null, true);
        echo "
          </ul>
        </div>
        <hr>
        <div class=\"mt-4 mt-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Exigences </h5>
          <ul class=\"list-unstyled list-style mb-4 mb-lg-0\">
";
        // line 97
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 97, $this->source); })()), "exigence", [], "any", false, false, false, 97), "html", null, true);
        echo "
          </ul>
        </div>
      </div>
      <!--=================================
      sidebar -->
      <div class=\"col-lg-4\">
        <div class=\"sidebar mb-0\">
          <div class=\"widget\">
          </div>
          <div class=\"widget\">
            <div class=\"company-detail-meta\">
             
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"company-address widget-box\">
              <div class=\"company-address-map\">
                <iframe src=\"https://www.google.com/maps/embed?q=";
        // line 115
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 115, $this->source); })()), "adresse", [], "any", false, false, false, 115), "html", null, true);
        echo "&output=embed\"  height=\"230\" allowfullscreen></iframe>

              </div>
              <ul class=\"list-unstyled mt-3\">
                <li><a href=\"#\"><i class=\"fas fa-link fa-fw\"></i><span class=\"pl-2\">";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 119, $this->source); })()), "lien_site", [], "any", false, false, false, 119), "html", null, true);
        echo "</span></a></li>
                <li><a href=\"tel:+905389635487\"><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">";
        // line 120
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 120, $this->source); })()), "telephone", [], "any", false, false, false, 120), "html", null, true);
        echo "</span></a></li>
                <li><a href=\"mailto:ali.potenza@job.com\"><i class=\"fas fa-envelope fa-fw\"></i><span class=\"pl-2\">";
        // line 121
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 121, $this->source); })()), "email_recruteur", [], "any", false, false, false, 121), "html", null, true);
        echo "</span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"jobber-company-view\">
              <ul class=\"list-unstyled\">
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-clock fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 132, $this->source); })()), "date_expiration", [], "any", false, false, false, 132), "html", null, true);
        echo "</span>
                    </div>
                  </div>
                </li>
               
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-personal-profile fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["offre"]) || array_key_exists("offre", $context) ? $context["offre"] : (function () { throw new RuntimeError('Variable "offre" does not exist.', 141, $this->source); })()), "description", [], "any", false, false, false, 141), "html", null, true);
        echo "</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--=================================
      sidebar -->
    </div>
  </div>
</section>
<!--=================================
job list -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/offredetail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 141,  248 => 132,  234 => 121,  230 => 120,  226 => 119,  219 => 115,  198 => 97,  188 => 90,  179 => 84,  158 => 66,  146 => 57,  133 => 47,  114 => 31,  107 => 27,  89 => 11,  79 => 10,  69 => 6,  59 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block header %}
{% include \"BarCandidat/header.html.twig\"  with {'id': id }%}
{% endblock %}


{% block body %}

<!--=================================
job list -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-8\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"job-list border\">
              <div class=\" job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 >{{offre.nom_poste}}</h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">{{offre.telephone}}</span></li>
                    </ul>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
        <div class=\"border p-4 mt-4 mt-lg-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-debit-card\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\"> Salaire offert</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">{{offre.salaire}} DT</span>
                </div>
              </div>
            </div>
            
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-bar-chart\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Type salaire</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">{{offre.type_salaire}}</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-md-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-apartment\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Societé</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">{{offre.nom_societe}}</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-sm-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-medal\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Experience</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">2 Years</span>
                </div>
              </div>
            </div>
            
          </div>
        </div>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\"> Description de L'offre</h5>
          <p class=\"font-italic\">{{offre.description}}</p>
        </div>
        <hr>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Profil demandé</h5>
          <ul class=\"list-unstyled list-style\">
{{offre.profil_recherche}}
          </ul>
        </div>
        <hr>
        <div class=\"mt-4 mt-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Exigences </h5>
          <ul class=\"list-unstyled list-style mb-4 mb-lg-0\">
{{offre.exigence}}
          </ul>
        </div>
      </div>
      <!--=================================
      sidebar -->
      <div class=\"col-lg-4\">
        <div class=\"sidebar mb-0\">
          <div class=\"widget\">
          </div>
          <div class=\"widget\">
            <div class=\"company-detail-meta\">
             
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"company-address widget-box\">
              <div class=\"company-address-map\">
                <iframe src=\"https://www.google.com/maps/embed?q={{offre.adresse}}&output=embed\"  height=\"230\" allowfullscreen></iframe>

              </div>
              <ul class=\"list-unstyled mt-3\">
                <li><a href=\"#\"><i class=\"fas fa-link fa-fw\"></i><span class=\"pl-2\">{{offre.lien_site}}</span></a></li>
                <li><a href=\"tel:+905389635487\"><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">{{offre.telephone}}</span></a></li>
                <li><a href=\"mailto:ali.potenza@job.com\"><i class=\"fas fa-envelope fa-fw\"></i><span class=\"pl-2\">{{offre.email_recruteur}}</span></a></li>
              </ul>
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"jobber-company-view\">
              <ul class=\"list-unstyled\">
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-clock fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">{{offre.date_expiration}}</span>
                    </div>
                  </div>
                </li>
               
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-personal-profile fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">{{offre.description}}</span>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--=================================
      sidebar -->
    </div>
  </div>
</section>
<!--=================================
job list -->



{% endblock %}", "candidat/offredetail.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\candidat\\offredetail.html.twig");
    }
}
