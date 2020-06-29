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

/* candidat/offre.html.twig */
class __TwigTemplate_c1f697f6f239a085fc7918b2bb1c95a7bdff5d1f1ca927fee62b7120f5de633f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/offre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidat/offre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 4
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/offre.html.twig", 4)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })())]));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit Candidat";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
<!--=================================
banner -->
<section class=\"header-inner header-inner-big bg-holder text-white\" style=\"background-image: url(/images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"job-search-field\">
          <div class=\"job-search-item\">
            <form class=\"form row\">
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"What?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"Where?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-2 col-sm-12\">
                <div class=\"form-group form-action\">
                  <button type=\"submit\" class=\"btn btn-primary mt-0\"><i class=\"fas fa-search-location\"></i> Find Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">

        <div class=\"row mb-4\">
          <div class=\"col-12\">
            <h5 class=\"mb-0\"> <span class=\"text-primary\">28 Postes </span></h5>
          </div>
        </div>

  <div class=\"row\">
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/01.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fast Systems Consultants</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                      <li><a class=\"freelance\" href=\"\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>
            </div>
          </div>
         
        
         
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
             
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fast Systems Consultants</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                      <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/05.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Wollens Building Supplies</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Customer Service</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
 <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Stockroom Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Suttons Financial Ltd</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Customer Service</li>
                      <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Operational manager part-time</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fleet Home Improvements Pvt</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy (Qualified)</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/08.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Post Room Operative</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Playroom Day Nursery</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Ormskirk Rd, Wigan</li>
                      <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Communications Trainee Scheme</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Northwood (Torbay) Ltd</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Engineering</li>
                      <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span> </div>
            </div>
          </div>
       
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/13.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">NameThe Raj Douth</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Health & Medicine</li>
                      <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/14.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Anticoagulation Receptionist</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fleet Home Improvements Pvt</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy (Qualified)</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span> </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-4\">
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
</section>
</div>
</div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/offre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 10,  99 => 9,  80 => 7,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}
{% include \"BarCandidat/header.html.twig\"  with {'id': id }%}
{% endblock %}

{% block title %}Edit Candidat{% endblock %}

{% block body %}

<!--=================================
banner -->
<section class=\"header-inner header-inner-big bg-holder text-white\" style=\"background-image: url(/images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"job-search-field\">
          <div class=\"job-search-item\">
            <form class=\"form row\">
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"What?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-5\">
                <div class=\"form-group left-icon\">
                  <input type=\"text\" class=\"form-control\" name=\"job_title\" placeholder=\"Where?\">
                <i class=\"fas fa-search\"></i> </div>
              </div>
              <div class=\"col-lg-2 col-sm-12\">
                <div class=\"form-group form-action\">
                  <button type=\"submit\" class=\"btn btn-primary mt-0\"><i class=\"fas fa-search-location\"></i> Find Job</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">

        <div class=\"row mb-4\">
          <div class=\"col-12\">
            <h5 class=\"mb-0\"> <span class=\"text-primary\">28 Postes </span></h5>
          </div>
        </div>

  <div class=\"row\">
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/01.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fast Systems Consultants</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                      <li><a class=\"freelance\" href=\"\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>
            </div>
          </div>
         
        
         
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
             
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fast Systems Consultants</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                      <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
               <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>
            </div>
          </div>

          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"/images/svg/05.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Wollens Building Supplies</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Customer Service</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
 <div class=\"col-md-12\">
            <div class=\"job-list-favourite-time\"> 
                             <a class=\"btn btn-sm btn-primary\" href=\"#\">Postuler </a>
                            <a class=\"btn btn-sm btn-dark\" href=\"#\">Details </a>
             </div>
            </div>            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Stockroom Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Suttons Financial Ltd</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Customer Service</li>
                      <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Operational manager part-time</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fleet Home Improvements Pvt</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy (Qualified)</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/08.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Post Room Operative</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Playroom Day Nursery</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Ormskirk Rd, Wigan</li>
                      <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Communications Trainee Scheme</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Northwood (Torbay) Ltd</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Engineering</li>
                      <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span> </div>
            </div>
          </div>
       
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/13.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">NameThe Raj Douth</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Health & Medicine</li>
                      <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span> </div>
            </div>
          </div>
          <div class=\"col-md-6 col-lg-4\">
            <div class=\"job-list job-grid\">
              <div class=\"job-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/14.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\"><a href=\"job-detail.html\">Anticoagulation Receptionist</a></h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li> <span>via</span> <a href=\"employer-detail.html\">Fleet Home Improvements Pvt</a> </li>
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                      <li><i class=\"fas fa-filter pr-1\"></i>Accountancy (Qualified)</li>
                      <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"job-list-favourite-time\"> <a class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a> <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span> </div>
            </div>
          </div>
        </div>
        <div class=\"row\">
          <div class=\"col-12 text-center mt-4\">
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
</section>
</div>
</div>
</div>
{% endblock %}
", "candidat/offre.html.twig", "C:\\wamp64\\www\\JOB\\templates\\candidat\\offre.html.twig");
    }
}
