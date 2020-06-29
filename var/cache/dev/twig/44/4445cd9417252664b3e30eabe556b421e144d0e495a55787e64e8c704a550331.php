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

/* BarCandidat/header.html.twig */
class __TwigTemplate_39bf70b8aaefd2de79dbc9d7287fcd2b9e5ea6764ed31c3edaa656df7665980a extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarCandidat/header.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarCandidat/header.html.twig"));

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
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    </head>
    <body>
    ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 89
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

    // line 14
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 15
        echo "         <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
   <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome/all.min.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/flaticon/flaticon.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap/bootstrap.min.css"), "html", null, true);
        echo "\" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\" ";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl-carousel/owl.carousel.min.css"), "html", null, true);
        echo " \" />
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup/magnific-popup.css"), "html", null, true);
        echo "\" />

    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 34
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
            <a class=\"nav-link\" href=";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo " id=\"navbarDropdown\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"true\">Liste des offres_d'emploi </a>
     
          </li>
     <li class=\"nav-item dropdown \">
            <a class=\"nav-link\"  href= ";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidat_edit", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 52, $this->source); })())]), "html", null, true);
        echo "  role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
          </li>

          
         
        

        </ul>
      </div>
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
        
            <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\"><i class=\"far fa-user pr-2\"></i>Déconnexion</a>
          </div>
        </div>
    </div>
  </nav>
</header>




";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel/owl-carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BarCandidat/header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  273 => 87,  267 => 84,  263 => 83,  259 => 82,  255 => 81,  249 => 78,  245 => 77,  240 => 76,  230 => 75,  209 => 64,  194 => 52,  187 => 48,  171 => 34,  161 => 33,  149 => 29,  143 => 26,  139 => 25,  133 => 22,  129 => 21,  125 => 20,  118 => 15,  108 => 14,  89 => 9,  76 => 89,  73 => 75,  71 => 33,  67 => 31,  65 => 14,  57 => 9,  47 => 1,);
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
    

        {% block stylesheets %}
         <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" />

    <!-- Google Font -->
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
            <a class=\"nav-link\" href={{ path('acceuil') }} id=\"navbarDropdown\" role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"true\">Liste des offres_d'emploi </a>
     
          </li>
     <li class=\"nav-item dropdown \">
            <a class=\"nav-link\"  href= {{ path('candidat_edit', {id:id} ) }}  role=\"button\"  aria-haspopup=\"true\" aria-expanded=\"false\">Mon Profil</a>
          </li>

          
         
        

        </ul>
      </div>
      <div class=\"add-listing\">
          <div class=\"login d-inline-block mr-4\">
        
            <a href=\"{{ path('app_logout') }}\"><i class=\"far fa-user pr-2\"></i>Déconnexion</a>
          </div>
        </div>
    </div>
  </nav>
</header>




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
", "BarCandidat/header.html.twig", "C:\\wamp64\\www\\JOB\\templates\\BarCandidat\\header.html.twig");
    }
}
