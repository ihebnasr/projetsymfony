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

/* recruteur/candidat_detail.html.twig */
class __TwigTemplate_3c834b745a556f667a3704b28ea5e07841350542860b72a047b2efddcac93c39 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidat_detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidat_detail.html.twig"));

        // line 1
        echo "<!--==== intégration  de fichier BarRecruteur/header.html.twig en utilisant la fonction include() ====-->
";
        // line 2
        $this->loadTemplate("BarRecruteur/header.html.twig", "recruteur/candidat_detail.html.twig", 2)->display($context);
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
      <div class=\"col-12\">
        <div class=\"candidate-list bg-light\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/04.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\">Melissa Doe</h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>Construction & Property</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>24 SL Road, London. UK</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"widget ml-auto mb-0\">
            <div class=\"company-detail-meta ml-auto\">
              <a class=\"btn btn-primary\" href=\"#\">Download CV <i class=\"fas fa-download ml-1\"></i></a>
              <ul class=\"list-unstyled mt-3 mb-0 ml-2 ml-sm-0\">
                <li>
                  <div class=\"share-box share-dark-bg\">
                    <a href=\"#\"> <i class=\"fas fa-share-alt\"></i><span class=\"pl-2\">Share</span></a>
                    <ul class=\"list-unstyled share-box-social\">
                      <li> <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li> <a href=\"#\"><i class=\"fab fa-twitter\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-linkedin\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-instagram\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-pinterest\"></i></a> </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href=\"#\"><i class=\"fas fa-print\"></i><span class=\"pl-2\">Print</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
banner -->

<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
              <li><a href=\"#about\"> À propos de candidat </a></li>
              <li><a href=\"#experience\"> L'expérience professionnelle </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-8 mb-4 mb-lg-0\">
        <div class=\"jobber-candidate-detail\">
          <div id=\"about\">
            <h5 class=\"mb-3\">About Me</h5>
            <div class=\"border p-3\">
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-account\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Name:</label>
                      <span class=\"d-block font-weight-bold text-dark\">Melissa Doe</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-curriculum\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Fax:</label>
                      <span class=\"d-block font-weight-bold text-dark\">(456) 478-2589</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-contact\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Phone :</label>
                      <span class=\"d-block font-weight-bold text-dark\">(123)-456-7890</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-appointment\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Date Of Birth :</label>
                      <span class=\"d-block font-weight-bold text-dark\">22/08/1992</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-map\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Address :</label>
                      <span class=\"d-block font-weight-bold text-dark\">24 SL Road, London. UK</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-man\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Sex :</label>
                      <span class=\"d-block font-weight-bold text-dark\">Female</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-12\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-approval\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Email:</label>
                      <span class=\"d-block font-weight-bold text-dark\">Melissa@website.com</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <hr class=\"my-4 my-md-5\">
          <div id=\"experience\">
            <h5 class=\"mb-3\">Work & Experience</h5>
            <div class=\"jobber-candidate-timeline\">
              <div class=\"jobber-timeline-icon\">
                <i class=\"fas fa-briefcase\"></i>
              </div>
              <div class=\"jobber-timeline-item\">
                <div class=\"jobber-timeline-cricle\">
                  <i class=\"far fa-circle\"></i>
                </div>
                <div class=\"jobber-timeline-info\">
                  <span class=\"jobber-timeline-time\">2018-6-01 <b>to</b> 2020-2-01</span>
                  <h6 class=\"mb-2\">Web Designer</h6>
                  <span>- Inwave Studio</span>
                  <p class=\"mt-2\">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
                </div>
              </div>
              <div class=\"jobber-timeline-item\">
                <div class=\"jobber-timeline-cricle\">
                  <i class=\"far fa-circle\"></i>
                </div>
                <div class=\"jobber-timeline-info\">
                  <span class=\"jobber-timeline-time\">2017-6-01 <b>to</b> 2018-6-01</span>
                  <h6 class=\"mb-2\">Secondary School Certificate</h6>
                  <span>- Engineering High School</span>
                  <p class=\"mt-2\">Figure out what you want, put a plan together to achieve it, understand the cost, believe in yourself then go and get it!</p>
                </div>
              </div>
            </div>
          </div>
        
          
       
           
          </div>
        </div>
     
        
      </div>
    </div>
    <!--=================================
    sidebar -->
    <div class=\"col-lg-4\">
      <div class=\"sidebar mb-0\">
       
        
       
        <div class=\"widget\">
          <div class=\"widget-add\">
          <img class=\"img-fluid\" src=\"images/add-banner.png\" alt=\"\"></div>
        </div>
      </div>
    </div>
    <!--=================================
    sidebar -->

  </div>
</div>
</section>
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
";
        // line 243
        $this->loadTemplate("BarRecruteur/footer.html.twig", "recruteur/candidat_detail.html.twig", 243)->display($context);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/candidat_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 243,  95 => 29,  89 => 26,  85 => 25,  76 => 19,  72 => 18,  65 => 14,  61 => 13,  58 => 12,  48 => 3,  46 => 2,  43 => 1,);
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
      <div class=\"col-12\">
        <div class=\"candidate-list bg-light\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/04.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\">Melissa Doe</h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>Construction & Property</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>24 SL Road, London. UK</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"widget ml-auto mb-0\">
            <div class=\"company-detail-meta ml-auto\">
              <a class=\"btn btn-primary\" href=\"#\">Download CV <i class=\"fas fa-download ml-1\"></i></a>
              <ul class=\"list-unstyled mt-3 mb-0 ml-2 ml-sm-0\">
                <li>
                  <div class=\"share-box share-dark-bg\">
                    <a href=\"#\"> <i class=\"fas fa-share-alt\"></i><span class=\"pl-2\">Share</span></a>
                    <ul class=\"list-unstyled share-box-social\">
                      <li> <a href=\"#\"><i class=\"fab fa-facebook-f\"></i></a></li>
                      <li> <a href=\"#\"><i class=\"fab fa-twitter\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-linkedin\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-instagram\"></i></a> </li>
                      <li> <a href=\"#\"><i class=\"fab fa-pinterest\"></i></a> </li>
                    </ul>
                  </div>
                </li>
                <li>
                  <a href=\"#\"><i class=\"fas fa-print\"></i><span class=\"pl-2\">Print</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
banner -->

<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"sticky-top secondary-menu-sticky-top\">
          <div class=\"secondary-menu\">
            <ul>
              <li><a href=\"#about\"> À propos de candidat </a></li>
              <li><a href=\"#experience\"> L'expérience professionnelle </a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-lg-8 mb-4 mb-lg-0\">
        <div class=\"jobber-candidate-detail\">
          <div id=\"about\">
            <h5 class=\"mb-3\">About Me</h5>
            <div class=\"border p-3\">
              <div class=\"row\">
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-account\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Name:</label>
                      <span class=\"d-block font-weight-bold text-dark\">Melissa Doe</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-curriculum\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Fax:</label>
                      <span class=\"d-block font-weight-bold text-dark\">(456) 478-2589</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-contact\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Phone :</label>
                      <span class=\"d-block font-weight-bold text-dark\">(123)-456-7890</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-appointment\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Date Of Birth :</label>
                      <span class=\"d-block font-weight-bold text-dark\">22/08/1992</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-map\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Address :</label>
                      <span class=\"d-block font-weight-bold text-dark\">24 SL Road, London. UK</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-4 col-sm-6 mb-4\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-man\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Sex :</label>
                      <span class=\"d-block font-weight-bold text-dark\">Female</span>
                    </div>
                  </div>
                </div>
                <div class=\"col-md-12\">
                  <div class=\"d-flex\">
                    <i class=\"font-xll text-primary align-self-center flaticon-approval\"></i>
                    <div class=\"feature-info-content pl-3\">
                      <label class=\"mb-0\">Email:</label>
                      <span class=\"d-block font-weight-bold text-dark\">Melissa@website.com</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <hr class=\"my-4 my-md-5\">
          <div id=\"experience\">
            <h5 class=\"mb-3\">Work & Experience</h5>
            <div class=\"jobber-candidate-timeline\">
              <div class=\"jobber-timeline-icon\">
                <i class=\"fas fa-briefcase\"></i>
              </div>
              <div class=\"jobber-timeline-item\">
                <div class=\"jobber-timeline-cricle\">
                  <i class=\"far fa-circle\"></i>
                </div>
                <div class=\"jobber-timeline-info\">
                  <span class=\"jobber-timeline-time\">2018-6-01 <b>to</b> 2020-2-01</span>
                  <h6 class=\"mb-2\">Web Designer</h6>
                  <span>- Inwave Studio</span>
                  <p class=\"mt-2\">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
                </div>
              </div>
              <div class=\"jobber-timeline-item\">
                <div class=\"jobber-timeline-cricle\">
                  <i class=\"far fa-circle\"></i>
                </div>
                <div class=\"jobber-timeline-info\">
                  <span class=\"jobber-timeline-time\">2017-6-01 <b>to</b> 2018-6-01</span>
                  <h6 class=\"mb-2\">Secondary School Certificate</h6>
                  <span>- Engineering High School</span>
                  <p class=\"mt-2\">Figure out what you want, put a plan together to achieve it, understand the cost, believe in yourself then go and get it!</p>
                </div>
              </div>
            </div>
          </div>
        
          
       
           
          </div>
        </div>
     
        
      </div>
    </div>
    <!--=================================
    sidebar -->
    <div class=\"col-lg-4\">
      <div class=\"sidebar mb-0\">
       
        
       
        <div class=\"widget\">
          <div class=\"widget-add\">
          <img class=\"img-fluid\" src=\"images/add-banner.png\" alt=\"\"></div>
        </div>
      </div>
    </div>
    <!--=================================
    sidebar -->

  </div>
</div>
</section>
<!--==== intégration  de fichier BarRecruteur/footer.html.twig en utilisant la fonction include() ====-->
{% include 'BarRecruteur/footer.html.twig' %}", "recruteur/candidat_detail.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\candidat_detail.html.twig");
    }
}
