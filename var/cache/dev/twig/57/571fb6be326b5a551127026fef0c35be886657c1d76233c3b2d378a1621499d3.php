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

/* base.html.twig */
class __TwigTemplate_8835060e13cb395b9786537c27ffbd3a3144d7c1921b20f43afc2ea34a7e775c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'blog' => [$this, 'block_blog'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Favicon -->
    
 ";
        // line 13
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo " 
         ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "    </head>
    <body>
    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 180
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 194
        echo "          
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Jobber - Job Board HTML5 Template";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 14
        echo "
 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "         <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
    <link rel=\"stylesheet\"
href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\"
crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
   <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome/all.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon/flaticon.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\" ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo " \" />
    <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" />

    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "     <header class=\"header bg-dark\">
  <nav class=\"navbar navbar-static-top navbar-expand-lg header-sticky\">
    <div class=\"container-fluid\">
      <button id=\"nav-icon4\" type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class=\"navbar-brand\" href=\"index.html\">
        <img class=\"img-fluid\" src=\"/images/logo.svg\" alt=\"logo\">
      </a>
      <div class=\"navbar-collapse collapse justify-content-start\">
        <ul class=\"nav navbar-nav\">
          <li class=\"nav-item dropdown active\">
            <a class=\"nav-link\" href=\"/home\" id=\"navbarDropdown\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
     
          </li>
     <li class=\"nav-item dropdown \">
            <a class=\"nav-link\" href=\"/gererrecruteur\"  role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"true\">Gerer recruteur</a>
     
          </li>
         
     

        </ul>
      </div>
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
            <a href=\"login.html\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"far fa-user pr-2\"></i>Sign in</a>
          </div>
          <a class=\"btn btn-white btn-md\" href=\"post-a-job.html\"> <i class=\"fas fa-plus-circle\"></i>Post a job</a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
Header -->
 ";
        // line 79
        $this->displayBlock('blog', $context, $blocks);
        // line 81
        echo "
 
<footer class=\"footer bg-light\">
  <div class=\"position-relative\">
    <svg class=\"footer-shape\"
      xmlns=\"http://www.w3.org/2000/svg\"
      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
      width=\"100%\" height=\"85px\">
      <path fill-rule=\"evenodd\"  fill=\"rgb(255, 255, 255)\"
        d=\"M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z\"/>
      </svg>
    </div>
    <div class=\"container pt-5\">
      <div class=\"row mt-5\">
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"footer-link\">
            <h5 class=\"text-dark mb-4\">Trending job</h5>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Browse Jobs</a></li>
              <li><a href=\"#\">Browse Categories</a></li>
              <li><a href=\"#\">Submit Resume</a></li>
              <li><a href=\"dashboard-candidates.html\">Candidate Dashboard</a></li>
              <li><a href=\"#\">Job Alerts</a></li>
              <li><a href=\"#\">My Bookmarks</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\">
          <div class=\"footer-link\">
            <h5 class=\"text-dark mb-4\">Trending Companies</h5>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Shortcodes</a></li>
              <li><a href=\"#\">Job Page</a></li>
              <li><a href=\"#\">Job Page Alternative</a></li>
              <li><a href=\"#\">Resume Page</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\">
          <h5 class=\"text-dark mb-4\">Subscribe Us</h5>
          <div class=\"footer-subscribe\">
            <p>Sign Up to our Newsletter to get the latest news and offers.</p>
            <form>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
              </div>
              <button type=\"submit\" class=\"btn btn-primary btn-md\">Get Notified</button>
            </form>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\">
          <h5 class=\"text-dark mb-4\">Download App</h5>
          <div class=\"footer-subscribe\">
            <p>Download the latest Slick new job apps now</p>
            <div class=\"d-inline-block\">
              <a class=\"btn btn-white btn-sm btn-app \" href=\"#\">
                <i class=\"fab fa-apple\"></i>
                <div class=\"btn-text text-left\">
                  <small>Download on the </small>
                  <span class=\"mb-0 d-block\">App Store</span>
                </div>
              </a>
              <a class=\"btn btn-white btn-sm btn-app mt-3\" href=\"#\">
                <i class=\"fab fa-google-play\"></i>
                <div class=\"btn-text text-left\">
                  <small>Get it on  </small>
                  <span class=\"mb-0 d-block\">Google Play</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom bg-dark mt-5\">
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
Footer-->
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        // line 80
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 180
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 181
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel/owl-carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  415 => 192,  409 => 189,  405 => 188,  401 => 187,  397 => 186,  391 => 183,  387 => 182,  382 => 181,  372 => 180,  362 => 80,  352 => 79,  244 => 81,  242 => 79,  203 => 42,  193 => 41,  181 => 37,  175 => 34,  171 => 33,  165 => 30,  161 => 29,  157 => 28,  145 => 18,  135 => 17,  124 => 14,  114 => 13,  95 => 9,  82 => 194,  79 => 180,  77 => 41,  73 => 39,  71 => 17,  68 => 16,  66 => 13,  59 => 9,  49 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>{% block title %} Jobber - Job Board HTML5 Template{% endblock %}</title>

    <!-- Favicon -->
    
 {% block header %}

 {% endblock %}
 
         {% block stylesheets %}
         <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
    <link rel=\"stylesheet\"
href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css\"
integrity=\"sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh\"
crossorigin=\"anonymous\">

    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
   <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"{{asset ('css/font-awesome/all.min.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{asset ('css/flaticon/flaticon.css') }}\" />
    <link rel=\"stylesheet\" href=\"{{asset ('css/bootstrap/bootstrap.min.css') }}\" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\" {{asset ('css/owl-carousel/owl.carousel.min.css') }} \" />
    <link rel=\"stylesheet\" href=\"{{asset ('css/magnific-popup/magnific-popup.css') }}\" />

    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"{{asset ('css/style.css') }}\" />
        {% endblock %}
    </head>
    <body>
    {% block body %}
     <header class=\"header bg-dark\">
  <nav class=\"navbar navbar-static-top navbar-expand-lg header-sticky\">
    <div class=\"container-fluid\">
      <button id=\"nav-icon4\" type=\"button\" class=\"navbar-toggler\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class=\"navbar-brand\" href=\"index.html\">
        <img class=\"img-fluid\" src=\"/images/logo.svg\" alt=\"logo\">
      </a>
      <div class=\"navbar-collapse collapse justify-content-start\">
        <ul class=\"nav navbar-nav\">
          <li class=\"nav-item dropdown active\">
            <a class=\"nav-link\" href=\"/home\" id=\"navbarDropdown\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">Home</a>
     
          </li>
     <li class=\"nav-item dropdown \">
            <a class=\"nav-link\" href=\"/gererrecruteur\"  role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"true\">Gerer recruteur</a>
     
          </li>
         
     

        </ul>
      </div>
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
            <a href=\"login.html\" data-toggle=\"modal\" data-target=\"#exampleModalCenter\"><i class=\"far fa-user pr-2\"></i>Sign in</a>
          </div>
          <a class=\"btn btn-white btn-md\" href=\"post-a-job.html\"> <i class=\"fas fa-plus-circle\"></i>Post a job</a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
Header -->
 {% block blog  %}
 {% endblock %}

 
<footer class=\"footer bg-light\">
  <div class=\"position-relative\">
    <svg class=\"footer-shape\"
      xmlns=\"http://www.w3.org/2000/svg\"
      xmlns:xlink=\"http://www.w3.org/1999/xlink\"
      width=\"100%\" height=\"85px\">
      <path fill-rule=\"evenodd\"  fill=\"rgb(255, 255, 255)\"
        d=\"M-0.000,-0.001 L1923.000,-0.001 L1923.000,84.999 C1608.914,41.669 1279.532,19.653 962.500,19.000 C635.773,18.326 323.692,40.344 -0.000,84.999 C-0.000,-83.334 -0.000,168.332 -0.000,-0.001 Z\"/>
      </svg>
    </div>
    <div class=\"container pt-5\">
      <div class=\"row mt-5\">
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"footer-link\">
            <h5 class=\"text-dark mb-4\">Trending job</h5>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Browse Jobs</a></li>
              <li><a href=\"#\">Browse Categories</a></li>
              <li><a href=\"#\">Submit Resume</a></li>
              <li><a href=\"dashboard-candidates.html\">Candidate Dashboard</a></li>
              <li><a href=\"#\">Job Alerts</a></li>
              <li><a href=\"#\">My Bookmarks</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-md-0\">
          <div class=\"footer-link\">
            <h5 class=\"text-dark mb-4\">Trending Companies</h5>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\">Shortcodes</a></li>
              <li><a href=\"#\">Job Page</a></li>
              <li><a href=\"#\">Job Page Alternative</a></li>
              <li><a href=\"#\">Resume Page</a></li>
              <li><a href=\"#\">Blog</a></li>
              <li><a href=\"#\">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\">
          <h5 class=\"text-dark mb-4\">Subscribe Us</h5>
          <div class=\"footer-subscribe\">
            <p>Sign Up to our Newsletter to get the latest news and offers.</p>
            <form>
              <div class=\"form-group\">
                <input type=\"email\" class=\"form-control\" id=\"exampleInputEmail1\" placeholder=\"Enter email\">
              </div>
              <button type=\"submit\" class=\"btn btn-primary btn-md\">Get Notified</button>
            </form>
          </div>
        </div>
        <div class=\"col-lg-3 col-md-6 mt-4 mt-lg-0\">
          <h5 class=\"text-dark mb-4\">Download App</h5>
          <div class=\"footer-subscribe\">
            <p>Download the latest Slick new job apps now</p>
            <div class=\"d-inline-block\">
              <a class=\"btn btn-white btn-sm btn-app \" href=\"#\">
                <i class=\"fab fa-apple\"></i>
                <div class=\"btn-text text-left\">
                  <small>Download on the </small>
                  <span class=\"mb-0 d-block\">App Store</span>
                </div>
              </a>
              <a class=\"btn btn-white btn-sm btn-app mt-3\" href=\"#\">
                <i class=\"fab fa-google-play\"></i>
                <div class=\"btn-text text-left\">
                  <small>Get it on  </small>
                  <span class=\"mb-0 d-block\">Google Play</span>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=\"footer-bottom bg-dark mt-5\">
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
Footer-->
{% endblock %}
        {% block javascripts %}
      <script src=\"{{asset ('js/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"{{asset ('js/popper/popper.min.js') }}\"></script>
    <script src=\"{{asset ('js/bootstrap/bootstrap.min.js') }}\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"{{asset ('js/jquery.appear.js') }}\"></script>
    <script src=\"{{asset ('js/counter/jquery.countTo.js') }}\"></script>
    <script src=\"{{asset ('js/owl-carousel/owl-carousel.min.js') }}\"></script>
    <script src=\"{{asset ('js/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"{{asset ('js/custom.js') }}\"></script>
        {% endblock %}
          
    </body>
</html>
", "base.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\base.html.twig");
    }
}
