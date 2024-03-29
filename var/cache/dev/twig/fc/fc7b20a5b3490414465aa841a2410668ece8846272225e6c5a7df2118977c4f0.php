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

/* home.html.twig */
class __TwigTemplate_1ff908bbcf288328e2af66ae7ef1b74622d9c85a2d0c5bd68b97cf1bf145a503 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'blog' => [$this, 'block_blog'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "baseh.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent = $this->loadTemplate("baseh.html.twig", "home.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        // line 3
        echo "
<!--=================================
Header -->
<header class=\"header header-transparent\">
  <nav class=\"navbar navbar-static-top navbar-expand-lg navbar-light header-sticky\">
    <div class=\"container-fluid\">
      <button id=\"nav-icon4\" type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class=\"navbar-brand\" href=\"index.html\">
        <img class=\"img-fluid\" src=\"images/logo.svg\" alt=\"logo\">
      </a>
  
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
            <a href=\"login.html\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"far fa-user pr-2\"></i>Se connecter</a>
          </div>
          <a class=\"btn btn-white btn-md\" href=\"/register\"> <i class=\"fas fa-plus-circle\"></i>inscription candidat</a>
          <a class=\"btn btn-white btn-md\" href=\"/registerRecruteur\"> <i class=\"fas fa-plus-circle\"></i>inscription recruteur</a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
Header -->

<!--=================================
Banner -->

<section class=\"banner bg-holder bg-overlay-black-30 text-white\" style=\"background-image: url(images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h1 class=\"text-white mb-3\">Déposer<span class=\"text-primary\"> CV  & Obtenir </span> votre emploi souhaité </h1>
        <p class=\"lead mb-4 mb-lg-5 font-weight-normal\">Trouver des emplois & des opportunités d'emploi et de carrière</p>
       
        
      </div>
    </div>
  </div>
</section>
<!--=================================
Banner -->

<!--=================================
Category-style -->
 
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-lg-3 mb-4 mb-lg-0\">
        <div class=\"section-title\">
       
          <h2 class=\"title\">Choose your sector</h2>
          <p class=\"mb-0\">I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
        </div>
        <a class=\"btn btn-outline btn-lg\" href=\"#\">View More Jobs</a>
      </div>
      <div class=\"col-lg-9 mt-0 mt-md-3 mt-lg-0\">
        <div class=\"category-style text-center\">
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-account\"></i>
            </div>
            <h6>Accountancy</h6>
            <span class=\"mb-0\">301 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-conversation\"></i>
            </div>
            <h6>Apprenticeships</h6>
            <span class=\"mb-0\">287 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-money\"></i>
            </div>
            <h6>Banking</h6>
            <span class=\"mb-0\">542 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-mortarboard\"></i>
            </div>
            <h6>Education</h6>
            <span class=\"mb-0\">785 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-worker\"></i>
            </div>
            <h6>Engineering</h6>
            <span class=\"mb-0\">862 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-businessman\"></i>
            </div>
            <h6>Estate Agency</h6>
            <span class=\"mb-0\">423 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-coding\"></i>
            </div>
            <h6>IT & Telecoms</h6>
            <span class=\"mb-0\">253 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-balance\"></i>
            </div>
            <h6>Legal</h6>
            <span class=\"mb-0\">689 Open Position </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Category-style -->

<!--=================================
Divider -->
<div class=\"container \">
  <div class=\"row\">
    <div class=\"col-12\">
      <hr class=\"m-0\">
    </div>
  </div>
</div>
<!--=================================
Divider -->

<!--=================================
Jobs-listing -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"section-title\">
          <h2 class=\"title\">Jobs You May be Interested in</h2>
        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"browse-job d-flex border-0 pb-3\">
          <div class=\"mb-4 mb-md-0\">
            <ul class=\"nav nav-tabs justify-content-center d-flex\" id=\"myTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Hot Jobs</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recent Jobs</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Popular Jobs</a>
              </li>
            </ul>
          </div>
          <div class=\"job-found ml-auto mb-0\">
            <span class=\"badge badge-lg badge-primary\">24123</span>
            <h6 class=\"ml-3 mb-0\">Job Found</h6>
          </div>
        </div>
        <div class=\"tab-content\" id=\"myTabContent\">
          <!-- Hot jobs -->
          <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <div class=\"row mt-3\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Post Room Operative</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Trout Design Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/09.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Web Developer – .net</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Group Marketing Manager</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/17.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Data Entry Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/18.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Stockroom Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Land Development Marketer</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent jobs -->
          <div class=\"tab-pane fade show\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            <div class=\"row mt-4\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/11.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Fast Systems Consultants</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/12.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Senior Rolling Stock Technician</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/13.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Operational Manager Part-Time</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/14.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Communications Trainee Scheme</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/15.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/16.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Customer Service Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Popular jobs -->
          <div class=\"tab-pane fade show\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
            <div class=\"row mt-4\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/17.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Anticoagulation Receptionist</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Fast Systems Consultants</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/18.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Receptionist Office Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Data Entry - Advanced Google Software</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/20.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Payroll and Office Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/01.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Research Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/02.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Personal Shopping Receptionist</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 justify-content-center d-flex mt-md-5 mt-4\">
        <a class=\"btn btn-outline btn-lg\" href=\"#\">View More Jobs</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Jobs-listing -->

<!--=================================
Candidates & Companies -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- Featured Candidates -->
      <div class=\"col-lg-7 mb-4 mb-lg-0\">
        <div class=\"section-title\">
          <h2 class=\"title\">Featured Candidates</h2>
          <p>We know this in our gut, but what can we do about it? How can we motivate ourselves?</p>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/04.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Melissa Doe</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>Construction & Property</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span>
          </div>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/01.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Paul Flavius</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>General Insurance</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Ormskirk Rd, Wigan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
          </div>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/05.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Felica Queen</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>General Insurance</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Union St, New Delhi</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2D ago</span>
          </div>
        </div>
      </div>
      <div class=\"col-lg-1\"></div>
      <!-- Top Companies -->
      <div class=\"col-lg-4\">
        <div class=\"section-title\">
          <h2 class=\"title\">Top Companies</h2>
          <p>Here are some tips and methods for motivating yourself:</p>
        </div>
        <div class=\"owl-carousel owl-nav-bottom-center\" data-nav-arrow=\"false\" data-nav-dots=\"true\" data-items=\"1\" data-md-items=\"1\" data-sm-items=\"2\" data-xs-items=\"1\" data-xx-items=\"1\" data-space=\"15\" data-autoheight=\"true\">
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/09.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Bright Sparks PLC</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">17 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Fleet Improvements Pvt</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">20 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/08.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Suttons Financial Ltd</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Paris, Île-de-France</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">23 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Co-operative Funeralcare</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Lynch Lane, Weymouth</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">30 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Altenwerth and Hamill</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Taunton, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">35 Open position</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Candidates & Companies -->

<!--=================================
Easiest Way to Use -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Easiest Way to Use</h2>
          <p>Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
        </div>
      </div>
    </div>
    <div class=\"row bg-holder-pattern mt-3 mt-md-4 mr-md-0 ml-md-0\" style=\"background-image: url('images/step/pattern-01.png');\">
      <div class=\"col-md-4 mb-4 mb-md-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-resume\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Create Account</h5>
            <p class=\"mb-0\">Create an account and access your saved settings on any device.</p>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-4 mb-md-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-recruitment\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Find Your Vacancy</h5>
            <p class=\"mb-0\">Don't just find. Be found. Put your CV in front of great employers.</p>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-position\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Get A Job</h5>
            <p class=\"mb-0\">Your next career move starts here. Choose Job from thousands of companies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Easiest Way to Use -->

<!--=================================
Feature-info -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 mb-lg-0 mb-4\">
        <div class=\"feature-info feature-info-02 p-4 p-md-5 bg-primary\">
          <div class=\"feature-info-icon mb-3 text-dark\">
            <i class=\"flaticon-team\"></i>
          </div>
          <div class=\"feature-info-content pl-sm-4 pl-0\">
            <h5 class=\"text-white\">Looking For Job?</h5>
            <p class=\"text-white\">Your next role could be with one of these top leading organizations.</p>
            <a href=\"#\">Apply now<i class=\"fas fa-long-arrow-alt-right\"></i> </a>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6\">
        <div class=\"feature-info feature-info-02 p-4 p-md-5 bg-dark\">
          <div class=\"feature-info-icon mb-3 text-primary\">
            <i class=\"flaticon-job-3\"></i>
          </div>
          <div class=\"feature-info-content pl-sm-4 pl-0\">
            <h5 class=\"text-white\">Are You Recruiting?</h5>
            <p class=\"text-white\">Five million searchable CVs in one place with our linked CV database.</p>
            <a href=\"#\">Post a job<i class=\"fas fa-long-arrow-alt-right\"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Feature-info -->





<!--=================================
Clients Say About Us -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Clients Say About Us</h2>
          <p>Focus is having the unwavering attention to complete what you set out to do.</p>
        </div>
      </div>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-10\">
        <div class=\"owl-carousel owl-nav-top-center\" data-nav-arrow=\"true\"  data-items=\"1\" data-md-items=\"1\" data-sm-items=\"1\" data-xs-items=\"1\" data-xx-items=\"1\" data-space=\"0\">
          <div class=\"item\">
            <div class=\"testimonial-item text-center\">
              <div class=\"avatar\">
                <img class=\"img-fluid rounded-circle\" src=\"images/avatar/04.jpg\" alt=\"\">
              </div>
              <div class=\"testimonial-content\">
                <p>Their turnaround time for fixing any issue is just a few minutes, and that is appreciable. Their Business Development Team is always there to help at any point in time. Thank you so much for all your effort.</p>
              </div>
              <div class=\"testimonial-name\">
                <i class=\"fas fa-quote-left quotes\"></i>
                <h6 class=\"mb-1\">Felica Queen</h6>
                <span>Product Designer</span>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"testimonial-item text-center\">
              <div class=\"avatar\">
                <img class=\"img-fluid rounded-circle\" src=\"images/avatar/02.jpg\" alt=\"\">
              </div>
              <div class=\"testimonial-content\">
                <p>Jobber is an excellent job portal. We value the resumes received through this channel. Magic Search and Power search are handy tools. We are delighted with their service.</p>
              </div>
              <div class=\"testimonial-name\">
                <i class=\"fas fa-quote-left quotes\"></i>
                <h6 class=\"mb-1\">John Doe</h6>
                <span>Graphic Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Clients Say About Us -->



<!--=================================
Blog and Career Advice -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Blog and Career Advice</h2>
          <p>Data trends and insights, tips for employers, product updates and best practices</p>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 mb-md-0 mb-4\">
        <div class=\"blog-post justify-content-center text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/03.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">February 4, 2019</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">How to sell yourself in a job interview</a></h5>
              </div>
               <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-md-0 mb-4\">
        <div class=\"blog-post text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/04.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">March 10, 2019</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">Hype or Helpful to the Jobs Market?</a></h5>
              </div>
               <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"blog-post text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/05.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">May 15, 2020</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">How to become an Account Manager</a></h5>
              </div>
             <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Blog and Career Advice -->

<!--=================================
Action box & Counter -->
<section class=\"bg-light py-5\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-lg-7 mb-4 mb-sm-5 mb-lg-0\">
        <div class=\"d-sm-flex\">
          <div class=\"align-self-center footer-top-logo\"><img class=\"img-fluid\" src=\"images/logo-dark.svg\" alt=\"\"></div>
          <div class=\"pl-sm-3 ml-sm-3 mt-3 mt-sm-0 border-sm-left \">Create a free account to find thousands of Jobs, Employment & Career Opportunities around you!</div>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"counter mb-4 mb-sm-0\">
              <div class=\"counter-icon\">
                <i class=\"flaticon-team\"></i>

                 </div>
              <div class=\"counter-content\">
                <span class=\"timer mb-1 text-dark\" data-to=\"1562\" data-speed=\"10000\">1,562</span>
                <label class=\"mb-0\">Jobs Posted</label>
              </div>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"counter\">
              <div class=\"counter-icon\">
                <i class=\"flaticon-job-3\"></i>
              </div>
              <div class=\"counter-content\">
                <span class=\"timer mb-1 text-dark\" data-to=\"240\" data-speed=\"10000\">240</span>
                <label class=\"mb-0\">Companies</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!--=================================
Signin Modal Popup -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header p-4\">
        <h4 class=\"mb-0 text-center\">Se connecter a votre compte</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
       <div class=\"login-register\">
          <fieldset>
            <legend class=\"px-2\">Choisir le type de votre compte</legend>
            <ul class=\"nav nav-tabs nav-tabs-border d-flex\" role=\"tablist\">
              <li class=\"nav-item mr-4\">
                <a class=\"nav-link active\"  data-toggle=\"tab\" href=\"#candidate\" role=\"tab\" aria-selected=\"false\">
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-users\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Candidat</h6>
                      <p class=\"mb-0\">En tant que Candidat</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\"  data-toggle=\"tab\" href=\"#employer\" role=\"tab\" aria-selected=\"false\">
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-suitcase\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Employeur</h6>
                      <p class=\"mb-0\">En tant qu'employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"candidate\" role=\"tabpanel\">
       <form action=\"";
        // line 1258
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" method=\"post\">
                <div class=\"form-row\">
                  <div class=\"form-group col-12\">
                    <label for=\"Email2\">Addresse Email :</label>
                  <input placeholder=\"Adresse email...\" requied name=\"_username\" value =\"";
        // line 1262
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 1262, $this->source); })()), "html", null, true);
        echo "\"
         type=\"text\" class=\"form-control\">
                  </div>
                  <div class=\"form-group col-12\">
                    <label for=\"password2\">Mot de passe*</label>
 <input placeholder=\"Mode de passe...\" requied name=\"_password\"
         type=\"password\" class=\"form-control\">
                           </div>
                </div>
                <div class=\"form-row\">
                <div class=\"col-md-12 text-center\"> 
 <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                  </div>
                 
                </div>
              </form>
            </div>
            <div class=\"tab-pane fade\" id=\"employer\" role=\"tabpanel\">
       <form action=\"";
        // line 1280
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" method=\"post\">
      
                <div class=\"form-row\">
                  <div class=\"form-group col-12\">
                    <label for=\"Email2\">Username / Email Address:</label>
         <input placeholder=\"Adresse email...\" requied name=\"_username\" value =\"";
        // line 1285
        echo twig_escape_filter($this->env, (isset($context["lastUsername"]) || array_key_exists("lastUsername", $context) ? $context["lastUsername"] : (function () { throw new RuntimeError('Variable "lastUsername" does not exist.', 1285, $this->source); })()), "html", null, true);
        echo "\"
         type=\"text\" class=\"form-control\">
                  </div>
                  <div class=\"form-group col-12\">
                    <label for=\"password2\">Password *</label>
<input placeholder=\"Mode de passe...\" requied name=\"_password\"
         type=\"password\" class=\"form-control\">    
                       </div>
                </div>
                
                <div class=\"form-row\">
                  <div class=\"col-md-12\">
 <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                   </div>
                  
                  </div>
                </div>
              </form >
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1361 => 1285,  1353 => 1280,  1332 => 1262,  1325 => 1258,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseh.html.twig' %}
{% block blog %}

<!--=================================
Header -->
<header class=\"header header-transparent\">
  <nav class=\"navbar navbar-static-top navbar-expand-lg navbar-light header-sticky\">
    <div class=\"container-fluid\">
      <button id=\"nav-icon4\" type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class=\"navbar-brand\" href=\"index.html\">
        <img class=\"img-fluid\" src=\"images/logo.svg\" alt=\"logo\">
      </a>
  
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
            <a href=\"login.html\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"far fa-user pr-2\"></i>Se connecter</a>
          </div>
          <a class=\"btn btn-white btn-md\" href=\"/register\"> <i class=\"fas fa-plus-circle\"></i>inscription candidat</a>
          <a class=\"btn btn-white btn-md\" href=\"/registerRecruteur\"> <i class=\"fas fa-plus-circle\"></i>inscription recruteur</a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
Header -->

<!--=================================
Banner -->

<section class=\"banner bg-holder bg-overlay-black-30 text-white\" style=\"background-image: url(images/bg/banner-01.jpg);\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12 text-center\">
        <h1 class=\"text-white mb-3\">Déposer<span class=\"text-primary\"> CV  & Obtenir </span> votre emploi souhaité </h1>
        <p class=\"lead mb-4 mb-lg-5 font-weight-normal\">Trouver des emplois & des opportunités d'emploi et de carrière</p>
       
        
      </div>
    </div>
  </div>
</section>
<!--=================================
Banner -->

<!--=================================
Category-style -->
 
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-lg-3 mb-4 mb-lg-0\">
        <div class=\"section-title\">
       
          <h2 class=\"title\">Choose your sector</h2>
          <p class=\"mb-0\">I truly believe Augustine’s words are true and if you look at history you know it is true.</p>
        </div>
        <a class=\"btn btn-outline btn-lg\" href=\"#\">View More Jobs</a>
      </div>
      <div class=\"col-lg-9 mt-0 mt-md-3 mt-lg-0\">
        <div class=\"category-style text-center\">
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-account\"></i>
            </div>
            <h6>Accountancy</h6>
            <span class=\"mb-0\">301 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-conversation\"></i>
            </div>
            <h6>Apprenticeships</h6>
            <span class=\"mb-0\">287 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-money\"></i>
            </div>
            <h6>Banking</h6>
            <span class=\"mb-0\">542 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-mortarboard\"></i>
            </div>
            <h6>Education</h6>
            <span class=\"mb-0\">785 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-worker\"></i>
            </div>
            <h6>Engineering</h6>
            <span class=\"mb-0\">862 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-businessman\"></i>
            </div>
            <h6>Estate Agency</h6>
            <span class=\"mb-0\">423 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-coding\"></i>
            </div>
            <h6>IT & Telecoms</h6>
            <span class=\"mb-0\">253 Open Position </span>
          </a>
          <a href=\"#\" class=\"category-item\">
            <div class=\"category-icon mb-4\">
              <i class=\"flaticon-balance\"></i>
            </div>
            <h6>Legal</h6>
            <span class=\"mb-0\">689 Open Position </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Category-style -->

<!--=================================
Divider -->
<div class=\"container \">
  <div class=\"row\">
    <div class=\"col-12\">
      <hr class=\"m-0\">
    </div>
  </div>
</div>
<!--=================================
Divider -->

<!--=================================
Jobs-listing -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <div class=\"section-title\">
          <h2 class=\"title\">Jobs You May be Interested in</h2>
        </div>
      </div>
      <div class=\"col-12\">
        <div class=\"browse-job d-flex border-0 pb-3\">
          <div class=\"mb-4 mb-md-0\">
            <ul class=\"nav nav-tabs justify-content-center d-flex\" id=\"myTab\" role=\"tablist\">
              <li class=\"nav-item\">
                <a class=\"nav-link active\" id=\"home-tab\" data-toggle=\"tab\" href=\"#home\" role=\"tab\" aria-controls=\"home\" aria-selected=\"true\">Hot Jobs</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"profile-tab\" data-toggle=\"tab\" href=\"#profile\" role=\"tab\" aria-controls=\"profile\" aria-selected=\"false\">Recent Jobs</a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"contact-tab\" data-toggle=\"tab\" href=\"#contact\" role=\"tab\" aria-controls=\"contact\" aria-selected=\"false\">Popular Jobs</a>
              </li>
            </ul>
          </div>
          <div class=\"job-found ml-auto mb-0\">
            <span class=\"badge badge-lg badge-primary\">24123</span>
            <h6 class=\"ml-3 mb-0\">Job Found</h6>
          </div>
        </div>
        <div class=\"tab-content\" id=\"myTabContent\">
          <!-- Hot jobs -->
          <div class=\"tab-pane fade show active\" id=\"home\" role=\"tabpanel\" aria-labelledby=\"home-tab\">
            <div class=\"row mt-3\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Post Room Operative</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Trout Design Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/09.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Web Developer – .net</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Group Marketing Manager</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/17.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Data Entry Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/18.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Stockroom Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Land Development Marketer</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent jobs -->
          <div class=\"tab-pane fade show\" id=\"profile\" role=\"tabpanel\" aria-labelledby=\"profile-tab\">
            <div class=\"row mt-4\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/11.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Marketing and Communications</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Fast Systems Consultants</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/12.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Senior Rolling Stock Technician</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/13.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Operational Manager Part-Time</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/14.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Communications Trainee Scheme</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/15.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Part-Time Sales Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/16.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Customer Service Assistant</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Popular jobs -->
          <div class=\"tab-pane fade show\" id=\"contact\" role=\"tabpanel\" aria-labelledby=\"contact-tab\">
            <div class=\"row mt-4\">
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/17.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Anticoagulation Receptionist</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Fast Systems Consultants</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Wellesley Rd, London</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Accountancy</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/18.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Receptionist Office Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Needham, MA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Temporary -->
                <div class=\"job-list\">
                  <div class=\" job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Data Entry - Advanced Google Software</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Banking</li>
                          <li><a class=\"temporary\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Full time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/20.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Payroll and Office Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Tan Electrics Ltd</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Park Avenue, Mumbai</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Charity & Voluntary</li>
                          <li><a class=\"full-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6 mb-4 mb-sm-0\">
                <!-- Freelance -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/01.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Research Administrator</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Bright Sparks PLC</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>Financial Services</li>
                          <li><a class=\"freelance\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class=\"col-lg-6\">
                <!-- Part-Time -->
                <div class=\"job-list\">
                  <div class=\"job-list-logo\">
                    <img class=\"img-fluid\" src=\"images/svg/02.svg\" alt=\"\">
                  </div>
                  <div class=\"job-list-details\">
                    <div class=\"job-list-info\">
                      <div class=\"job-list-title\">
                        <h5 class=\"mb-0\"><a href=\"job-detail.html\">Personal Shopping Receptionist</a></h5>
                      </div>
                      <div class=\"job-list-option\">
                        <ul class=\"list-unstyled\">
                          <li>
                            <span>via</span>
                            <a href=\"employer-detail.html\">Carphone Warehouse</a>
                          </li>
                          <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Canyon Village, Ramon</li>
                          <li><i class=\"fas fa-filter pr-1\"></i>IT & Telecoms</li>
                          <li><a class=\"part-time\" href=\"#\"><i class=\"fas fa-suitcase pr-1\"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class=\"job-list-favourite-time\">
                    <a  class=\"job-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
                    <span class=\"job-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-12 justify-content-center d-flex mt-md-5 mt-4\">
        <a class=\"btn btn-outline btn-lg\" href=\"#\">View More Jobs</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Jobs-listing -->

<!--=================================
Candidates & Companies -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- Featured Candidates -->
      <div class=\"col-lg-7 mb-4 mb-lg-0\">
        <div class=\"section-title\">
          <h2 class=\"title\">Featured Candidates</h2>
          <p>We know this in our gut, but what can we do about it? How can we motivate ourselves?</p>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/04.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Melissa Doe</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>Construction & Property</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>6D ago</span>
          </div>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/01.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Paul Flavius</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>General Insurance</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Ormskirk Rd, Wigan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>3D ago</span>
          </div>
        </div>
        <div class=\"candidate-list\">
          <div class=\"candidate-list-image\">
            <img class=\"img-fluid\" src=\"images/avatar/05.jpg\" alt=\"\" >
          </div>
          <div class=\"candidate-list-details\">
            <div class=\"candidate-list-info\">
              <div class=\"candidate-list-title\">
                <h5 class=\"mb-0\"><a href=\"candidate-detail.html\">Felica Queen</a></h5>
              </div>
              <div class=\"candidate-list-option\">
                <ul class=\"list-unstyled\">
                  <li><i class=\"fas fa-filter pr-1\"></i>General Insurance</li>
                  <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Union St, New Delhi</li>
                </ul>
              </div>
            </div>
          </div>
          <div class=\"candidate-list-favourite-time\">
            <a class=\"candidate-list-favourite order-2\" href=\"#\"><i class=\"far fa-heart\"></i></a>
            <span class=\"candidate-list-time order-1\"><i class=\"far fa-clock pr-1\"></i>2D ago</span>
          </div>
        </div>
      </div>
      <div class=\"col-lg-1\"></div>
      <!-- Top Companies -->
      <div class=\"col-lg-4\">
        <div class=\"section-title\">
          <h2 class=\"title\">Top Companies</h2>
          <p>Here are some tips and methods for motivating yourself:</p>
        </div>
        <div class=\"owl-carousel owl-nav-bottom-center\" data-nav-arrow=\"false\" data-nav-dots=\"true\" data-items=\"1\" data-md-items=\"1\" data-sm-items=\"2\" data-xs-items=\"1\" data-xx-items=\"1\" data-space=\"15\" data-autoheight=\"true\">
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/09.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Bright Sparks PLC</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Botchergate, Carlisle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">17 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Fleet Improvements Pvt</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Green Lanes, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">20 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/08.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Suttons Financial Ltd</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Paris, Île-de-France</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">23 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/19.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Co-operative Funeralcare</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Lynch Lane, Weymouth</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">30 Open position</a>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"employers-grid\">
              <div class=\"employers-list-logo\">
                <img class=\"img-fluid\" src=\"images/svg/06.svg\" alt=\"\">
              </div>
              <div class=\"employers-list-details\">
                <div class=\"employers-list-info\">
                  <div class=\"employers-list-title\">
                    <h5 class=\"mb-0\"><a href=\"employer-detail.html\">Altenwerth and Hamill</a></h5>
                  </div>
                  <div class=\"employers-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>Taunton, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class=\"employers-list-position\">
                <a class=\"btn btn-sm btn-dark\" href=\"#\">35 Open position</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Candidates & Companies -->

<!--=================================
Easiest Way to Use -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Easiest Way to Use</h2>
          <p>Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</p>
        </div>
      </div>
    </div>
    <div class=\"row bg-holder-pattern mt-3 mt-md-4 mr-md-0 ml-md-0\" style=\"background-image: url('images/step/pattern-01.png');\">
      <div class=\"col-md-4 mb-4 mb-md-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-resume\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Create Account</h5>
            <p class=\"mb-0\">Create an account and access your saved settings on any device.</p>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-4 mb-md-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-recruitment\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Find Your Vacancy</h5>
            <p class=\"mb-0\">Don't just find. Be found. Put your CV in front of great employers.</p>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-0\">
        <div class=\"feature-step text-center\">
          <div class=\"feature-info-icon\">
            <i class=\"flaticon-position\"></i>
          </div>
          <div class=\"feature-info-content pb-2 pb-md-0\">
            <h5>Get A Job</h5>
            <p class=\"mb-0\">Your next career move starts here. Choose Job from thousands of companies</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Easiest Way to Use -->

<!--=================================
Feature-info -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 mb-lg-0 mb-4\">
        <div class=\"feature-info feature-info-02 p-4 p-md-5 bg-primary\">
          <div class=\"feature-info-icon mb-3 text-dark\">
            <i class=\"flaticon-team\"></i>
          </div>
          <div class=\"feature-info-content pl-sm-4 pl-0\">
            <h5 class=\"text-white\">Looking For Job?</h5>
            <p class=\"text-white\">Your next role could be with one of these top leading organizations.</p>
            <a href=\"#\">Apply now<i class=\"fas fa-long-arrow-alt-right\"></i> </a>
          </div>
        </div>
      </div>
      <div class=\"col-lg-6\">
        <div class=\"feature-info feature-info-02 p-4 p-md-5 bg-dark\">
          <div class=\"feature-info-icon mb-3 text-primary\">
            <i class=\"flaticon-job-3\"></i>
          </div>
          <div class=\"feature-info-content pl-sm-4 pl-0\">
            <h5 class=\"text-white\">Are You Recruiting?</h5>
            <p class=\"text-white\">Five million searchable CVs in one place with our linked CV database.</p>
            <a href=\"#\">Post a job<i class=\"fas fa-long-arrow-alt-right\"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Feature-info -->





<!--=================================
Clients Say About Us -->
<section class=\"space-pb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Clients Say About Us</h2>
          <p>Focus is having the unwavering attention to complete what you set out to do.</p>
        </div>
      </div>
    </div>
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-10\">
        <div class=\"owl-carousel owl-nav-top-center\" data-nav-arrow=\"true\"  data-items=\"1\" data-md-items=\"1\" data-sm-items=\"1\" data-xs-items=\"1\" data-xx-items=\"1\" data-space=\"0\">
          <div class=\"item\">
            <div class=\"testimonial-item text-center\">
              <div class=\"avatar\">
                <img class=\"img-fluid rounded-circle\" src=\"images/avatar/04.jpg\" alt=\"\">
              </div>
              <div class=\"testimonial-content\">
                <p>Their turnaround time for fixing any issue is just a few minutes, and that is appreciable. Their Business Development Team is always there to help at any point in time. Thank you so much for all your effort.</p>
              </div>
              <div class=\"testimonial-name\">
                <i class=\"fas fa-quote-left quotes\"></i>
                <h6 class=\"mb-1\">Felica Queen</h6>
                <span>Product Designer</span>
              </div>
            </div>
          </div>
          <div class=\"item\">
            <div class=\"testimonial-item text-center\">
              <div class=\"avatar\">
                <img class=\"img-fluid rounded-circle\" src=\"images/avatar/02.jpg\" alt=\"\">
              </div>
              <div class=\"testimonial-content\">
                <p>Jobber is an excellent job portal. We value the resumes received through this channel. Magic Search and Power search are handy tools. We are delighted with their service.</p>
              </div>
              <div class=\"testimonial-name\">
                <i class=\"fas fa-quote-left quotes\"></i>
                <h6 class=\"mb-1\">John Doe</h6>
                <span>Graphic Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Clients Say About Us -->



<!--=================================
Blog and Career Advice -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-lg-8 col-md-10\">
        <div class=\"section-title center\">
          <h2 class=\"title\">Blog and Career Advice</h2>
          <p>Data trends and insights, tips for employers, product updates and best practices</p>
        </div>
      </div>
    </div>
    <div class=\"row\">
      <div class=\"col-md-4 mb-md-0 mb-4\">
        <div class=\"blog-post justify-content-center text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/03.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">February 4, 2019</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">How to sell yourself in a job interview</a></h5>
              </div>
               <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4 mb-md-0 mb-4\">
        <div class=\"blog-post text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/04.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">March 10, 2019</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">Hype or Helpful to the Jobs Market?</a></h5>
              </div>
               <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-4\">
        <div class=\"blog-post text-center\">
          <div class=\"blog-post-image\">
            <img class=\"img-fluid\" src=\"images/blog/05.jpg\" alt=\"\">
          </div>
          <div class=\"blog-post-content\">
            <div class=\"blog-post-details pb-0\">
              <div class=\"blog-post-time\">
                <a href=\"#\">May 15, 2020</a>
              </div>
              <div class=\"blog-post-title\">
                <h5><a href=\"#\">How to become an Account Manager</a></h5>
              </div>
             <div class=\"justify-content-center mt-2 d-flex\">
                <a class=\"btn btn-link p-0\" href=\"#\">Read More <i class=\"fas fa-long-arrow-alt-right pl-2\"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Blog and Career Advice -->

<!--=================================
Action box & Counter -->
<section class=\"bg-light py-5\">
  <div class=\"container\">
    <div class=\"row align-items-center\">
      <div class=\"col-lg-7 mb-4 mb-sm-5 mb-lg-0\">
        <div class=\"d-sm-flex\">
          <div class=\"align-self-center footer-top-logo\"><img class=\"img-fluid\" src=\"images/logo-dark.svg\" alt=\"\"></div>
          <div class=\"pl-sm-3 ml-sm-3 mt-3 mt-sm-0 border-sm-left \">Create a free account to find thousands of Jobs, Employment & Career Opportunities around you!</div>
        </div>
      </div>
      <div class=\"col-lg-5\">
        <div class=\"row\">
          <div class=\"col-sm-6\">
            <div class=\"counter mb-4 mb-sm-0\">
              <div class=\"counter-icon\">
                <i class=\"flaticon-team\"></i>

                 </div>
              <div class=\"counter-content\">
                <span class=\"timer mb-1 text-dark\" data-to=\"1562\" data-speed=\"10000\">1,562</span>
                <label class=\"mb-0\">Jobs Posted</label>
              </div>
            </div>
          </div>
          <div class=\"col-sm-6\">
            <div class=\"counter\">
              <div class=\"counter-icon\">
                <i class=\"flaticon-job-3\"></i>
              </div>
              <div class=\"counter-content\">
                <span class=\"timer mb-1 text-dark\" data-to=\"240\" data-speed=\"10000\">240</span>
                <label class=\"mb-0\">Companies</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




<!--=================================
Signin Modal Popup -->
<div class=\"modal fade\" id=\"exampleModalCenter\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-dialog-centered modal-md\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header p-4\">
        <h4 class=\"mb-0 text-center\">Se connecter a votre compte</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
       <div class=\"login-register\">
          <fieldset>
            <legend class=\"px-2\">Choisir le type de votre compte</legend>
            <ul class=\"nav nav-tabs nav-tabs-border d-flex\" role=\"tablist\">
              <li class=\"nav-item mr-4\">
                <a class=\"nav-link active\"  data-toggle=\"tab\" href=\"#candidate\" role=\"tab\" aria-selected=\"false\">
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-users\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Candidat</h6>
                      <p class=\"mb-0\">En tant que Candidat</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class=\"nav-item\">
                <a class=\"nav-link\"  data-toggle=\"tab\" href=\"#employer\" role=\"tab\" aria-selected=\"false\">
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-suitcase\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Employeur</h6>
                      <p class=\"mb-0\">En tant qu'employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"candidate\" role=\"tabpanel\">
       <form action=\"{{ path('app_home') }}\" method=\"post\">
                <div class=\"form-row\">
                  <div class=\"form-group col-12\">
                    <label for=\"Email2\">Addresse Email :</label>
                  <input placeholder=\"Adresse email...\" requied name=\"_username\" value =\"{{lastUsername}}\"
         type=\"text\" class=\"form-control\">
                  </div>
                  <div class=\"form-group col-12\">
                    <label for=\"password2\">Mot de passe*</label>
 <input placeholder=\"Mode de passe...\" requied name=\"_password\"
         type=\"password\" class=\"form-control\">
                           </div>
                </div>
                <div class=\"form-row\">
                <div class=\"col-md-12 text-center\"> 
 <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                  </div>
                 
                </div>
              </form>
            </div>
            <div class=\"tab-pane fade\" id=\"employer\" role=\"tabpanel\">
       <form action=\"{{ path('app_home') }}\" method=\"post\">
      
                <div class=\"form-row\">
                  <div class=\"form-group col-12\">
                    <label for=\"Email2\">Username / Email Address:</label>
         <input placeholder=\"Adresse email...\" requied name=\"_username\" value =\"{{lastUsername}}\"
         type=\"text\" class=\"form-control\">
                  </div>
                  <div class=\"form-group col-12\">
                    <label for=\"password2\">Password *</label>
<input placeholder=\"Mode de passe...\" requied name=\"_password\"
         type=\"password\" class=\"form-control\">    
                       </div>
                </div>
                
                <div class=\"form-row\">
                  <div class=\"col-md-12\">
 <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                   </div>
                  
                  </div>
                </div>
              </form >
            </div>
          </div>
         
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->


{% endblock  %}
", "home.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\home.html.twig");
    }
}
