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
class __TwigTemplate_bef79f8cfaec1623455e1330fa8c9107e2f97f1f6314bd52d7e0c135fbd462b7 extends Template
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
                <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\">Payroll and Office Administrator</h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                      <li><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">(123) 345-6789</span></li>
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
        </div>
        <div class=\"border p-4 mt-4 mt-lg-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-debit-card\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Offered Salary</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">£15,000 - £20,000</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-love\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Gender</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Female</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-bar-chart\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Career Level</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Executive</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-md-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-apartment\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Industry</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Management</span>
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
            <div class=\"col-md-4 col-sm-6\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-mortarboard\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Qualification</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Bachelor Degree</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Job Description</h5>
          <p>One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
          <p class=\"font-italic\">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>
        </div>
        <hr>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Required Knowledge, Skills, and Abilities</h5>
          <ul class=\"list-unstyled list-style\">
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Commitment – understanding the price and having the willingness to pay that price</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Belief – believing in yourself and those around you</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Taking action – practice Ready, Fire, Aim…</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will drift aimlessly until you arrive back at the original dock</li>
            <li class=\"mb-0\"><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will run aground and become hopelessly stuck in the mud</li>
          </ul>
        </div>
        <hr>
        <div class=\"mt-4 mt-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Education + Experience</h5>
          <ul class=\"list-unstyled list-style mb-4 mb-lg-0\">
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will sail along until you collide with an immovable object, after which you will sink to the bottom</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Clarity – developing the Vision</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Focus – having a plan</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee that tomorrow will come.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Now go push your own limits and succeed!</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when you are in need of motivation.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Belief – believing in yourself and those around you</li>
            <li class=\"mb-0\"><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it!</li>
          </ul>
        </div>
      </div>
      <!--=================================
      sidebar -->
      <div class=\"col-lg-4\">
        <div class=\"sidebar mb-0\">
          <div class=\"widget\">
            <a class=\"btn btn-primary btn-block\" href=\"#\"><i class=\"far fa-paper-plane\"></i>Apply for job</a>
          </div>
          <div class=\"widget\">
            <div class=\"company-detail-meta\">
             
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"company-address widget-box\">
              <div class=\"company-address-map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin\"  height=\"230\" allowfullscreen></iframe>
              </div>
              <ul class=\"list-unstyled mt-3\">
                <li><a href=\"#\"><i class=\"fas fa-link fa-fw\"></i><span class=\"pl-2\">www.infojob.com</span></a></li>
                <li><a href=\"tel:+905389635487\"><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">+(456) 478-2589</span></a></li>
                <li><a href=\"mailto:ali.potenza@job.com\"><i class=\"fas fa-envelope fa-fw\"></i><span class=\"pl-2\">support@jobber.demo</span></a></li>
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
                      <span class=\"pl-3\">35 Days</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-loupe fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">35697 Displayed</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-personal-profile fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">300-500 Application</span>
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
        return array (  89 => 11,  79 => 10,  69 => 6,  59 => 5,  36 => 2,);
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
                <img class=\"img-fluid\" src=\"images/svg/10.svg\" alt=\"\">
              </div>
              <div class=\"job-list-details\">
                <div class=\"job-list-info\">
                  <div class=\"job-list-title\">
                    <h5 class=\"mb-0\">Payroll and Office Administrator</h5>
                  </div>
                  <div class=\"job-list-option\">
                    <ul class=\"list-unstyled\">
                      <li><i class=\"fas fa-map-marker-alt pr-1\"></i>New Castle, PA</li>
                      <li><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">(123) 345-6789</span></li>
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
        </div>
        <div class=\"border p-4 mt-4 mt-lg-5\">
          <div class=\"row\">
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-debit-card\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Offered Salary</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">£15,000 - £20,000</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-love\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Gender</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Female</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-bar-chart\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Career Level</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Executive</span>
                </div>
              </div>
            </div>
            <div class=\"col-md-4 col-sm-6 mb-md-0 mb-4\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-apartment\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Industry</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Management</span>
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
            <div class=\"col-md-4 col-sm-6\">
              <div class=\"d-flex\">
                <i class=\"font-xll text-primary align-self-center flaticon-mortarboard\"></i>
                <div class=\"feature-info-content pl-3\">
                  <label class=\"mb-1\">Qualification</label>
                  <span class=\"mb-0 font-weight-bold d-block text-dark\">Bachelor Degree</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Job Description</h5>
          <p>One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
          <p class=\"font-italic\">It is truly amazing the damage that we, as parents, can inflict on our children. So why do we do it? For the most part, we don’t do it intentionally or with malice. In the majority of cases, the cause is a well-meaning but unskilled or un-thinking parent, who says the wrong thing at the wrong time, and the message sticks – as simple as that!</p>
        </div>
        <hr>
        <div class=\"my-4 my-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Required Knowledge, Skills, and Abilities</h5>
          <ul class=\"list-unstyled list-style\">
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Commitment – understanding the price and having the willingness to pay that price</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Belief – believing in yourself and those around you</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Taking action – practice Ready, Fire, Aim…</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will drift aimlessly until you arrive back at the original dock</li>
            <li class=\"mb-0\"><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will run aground and become hopelessly stuck in the mud</li>
          </ul>
        </div>
        <hr>
        <div class=\"mt-4 mt-lg-5\">
          <h5 class=\"mb-3 mb-md-4\">Education + Experience</h5>
          <ul class=\"list-unstyled list-style mb-4 mb-lg-0\">
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>You will sail along until you collide with an immovable object, after which you will sink to the bottom</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Clarity – developing the Vision</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Focus – having a plan</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Give yourself the power of responsibility. Remind yourself the only thing stopping you is yourself.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Do it today. Remind yourself of someone you know who died suddenly and the fact that there is no guarantee that tomorrow will come.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Now go push your own limits and succeed!</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Let success motivate you. Find a picture of what epitomizes success to you and then pull it out when you are in need of motivation.</li>
            <li><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>Belief – believing in yourself and those around you</li>
            <li class=\"mb-0\"><i class=\"far fa-check-circle font-md text-primary mr-2\"></i>So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it!</li>
          </ul>
        </div>
      </div>
      <!--=================================
      sidebar -->
      <div class=\"col-lg-4\">
        <div class=\"sidebar mb-0\">
          <div class=\"widget\">
            <a class=\"btn btn-primary btn-block\" href=\"#\"><i class=\"far fa-paper-plane\"></i>Apply for job</a>
          </div>
          <div class=\"widget\">
            <div class=\"company-detail-meta\">
             
            </div>
          </div>
          <div class=\"widget\">
            <div class=\"company-address widget-box\">
              <div class=\"company-address-map\">
                <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin\"  height=\"230\" allowfullscreen></iframe>
              </div>
              <ul class=\"list-unstyled mt-3\">
                <li><a href=\"#\"><i class=\"fas fa-link fa-fw\"></i><span class=\"pl-2\">www.infojob.com</span></a></li>
                <li><a href=\"tel:+905389635487\"><i class=\"fas fa-phone fa-flip-horizontal fa-fw\"></i><span class=\"pl-2\">+(456) 478-2589</span></a></li>
                <li><a href=\"mailto:ali.potenza@job.com\"><i class=\"fas fa-envelope fa-fw\"></i><span class=\"pl-2\">support@jobber.demo</span></a></li>
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
                      <span class=\"pl-3\">35 Days</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-loupe fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">35697 Displayed</span>
                    </div>
                  </div>
                </li>
                <li>
                  <div class=\"widget-box\">
                    <div class=\"d-flex\">
                      <i class=\"flaticon-personal-profile fa-2x fa-fw text-primary\"></i>
                      <span class=\"pl-3\">300-500 Application</span>
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



{% endblock %}", "candidat/offredetail.html.twig", "C:\\wamp64\\www\\JOB\\templates\\candidat\\offredetail.html.twig");
    }
}
