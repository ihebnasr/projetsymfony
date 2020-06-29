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

/* candidat/moncv.html.twig */
class __TwigTemplate_02da149be200d028151315277093c65dd95490f2424b97890c4744b08de78281 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/moncv.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/moncv.html.twig"));

        // line 1
        echo "      <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.4.1.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/popper/popper.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.appear.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/counter/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl-carousel/owl-carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/magnific-popup/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
          

           <link href=\"/images/favicon.ico\" rel=\"shortcut icon\" />

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




          
           <!--=================================
    My Resume -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-lg-5\">
            <div class=\"resume-base bg-light user-dashboard-info-box\">
              <div class=\"profile\">
                <div class=\"jobber-user-info\">
                  <div class=\"profile-avatar\">
 <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">

                  </div>
                  <div class=\"profile-avatar-info mt-3\">
                    <h5>";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 51, $this->source); })()), "prenomCandidat", [], "any", false, false, false, 51), "html", null, true);
        echo "</h5>
                  </div>
                </div>
              </div>
              <div class=\"about-candidate border-top\">
                <div class=\"candidate-info\">
                  <h6>Nom et prenom:</h6>
                  <p>";
        // line 58
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 58, $this->source); })()), "username", [], "any", false, false, false, 58), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 58, $this->source); })()), "prenomCandidat", [], "any", false, false, false, 58), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Email:</h6>
                  <p>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 62, $this->source); })()), "email", [], "any", false, false, false, 62), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Telephone:</h6>
                  <p>";
        // line 66
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 66, $this->source); })()), "telCandidat", [], "any", false, false, false, 66), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Date de naissance:</h6>
                  <p>";
        // line 70
        ((twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 70, $this->source); })()), "dateNaissance", [], "any", false, false, false, 70)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 70, $this->source); })()), "dateNaissance", [], "any", false, false, false, 70), "Y-m-d"), "html", null, true))) : (print ("")));
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Adresse:</h6>
                  <p>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 74, $this->source); })()), "adresse", [], "any", false, false, false, 74), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Genre:</h6>
                  <p>";
        // line 78
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 78, $this->source); })()), "genreCandidat", [], "any", false, false, false, 78), "html", null, true);
        echo "</p>
                </div>
                <p>The old expression is absolutely true – whether you think you can or you can’t, you’re right!   One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
              </div>
            </div>
          </div>
         
              <div class=\"timeline-box mt-4\">
                <h5 class=\"resume-experience-title\"> Experience:</h5>



                 ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience_profissionnelles"]) || array_key_exists("experience_profissionnelles", $context) ? $context["experience_profissionnelles"] : (function () { throw new RuntimeError('Variable "experience_profissionnelles" does not exist.', 90, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["experience_profissionnelle"]) {
            // line 91
            echo "
          <div class=\"collapse show\" id=\"dateposted\">
            
          </div>
          <div class=\"jobber-candidate-timeline mt-4\">
            <div class=\"jobber-timeline-icon\">
              <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div class=\"jobber-timeline-item\">
              <div class=\"jobber-timeline-cricle\">
                <i class=\"far fa-circle\"></i>
              </div>
              <div class=\"jobber-timeline-info\">
                <div class=\"dashboard-timeline-info\">
                 



                  <span class=\"jobber-timeline-time\">";
            // line 109
            ((twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateDebut", [], "any", false, false, false, 109)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateDebut", [], "any", false, false, false, 109), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                 <span class=\"jobber-timeline-time\">";
            // line 110
            ((twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateFin", [], "any", false, false, false, 110)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "dateFin", [], "any", false, false, false, 110), "Y-m-d"), "html", null, true))) : (print ("")));
            echo "</span>
                  <h6 class=\"mb-2\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "nomExp", [], "any", false, false, false, 111), "html", null, true);
            echo "</h6>
                  <span>- ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "entreprise", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
                  <p class=\"mt-2\">";
            // line 113
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["experience_profissionnelle"], "description", [], "any", false, false, false, 113), "html", null, true);
            echo "</p>
                </div>

</div>
            </div>
            </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience_profissionnelle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "

               
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
My Resume -->

    <!--=================================
    Back To Top-->
    <div id=\"back-to-top\" class=\"back-to-top\">
      <i class=\"fas fa-angle-up\"></i>
    </div>
    <!--=================================
    Back To Top-->

 <div class=\"col-lg-2 text-lg-right\">

        <a class=\"btn btn-primary btn-md mb-4 mb-lg-0\" href=";
        // line 144
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("acceuil");
        echo ">Retour </a>
      </div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "candidat/moncv.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 144,  253 => 120,  240 => 113,  236 => 112,  232 => 111,  228 => 110,  224 => 109,  204 => 91,  200 => 90,  185 => 78,  178 => 74,  171 => 70,  164 => 66,  157 => 62,  148 => 58,  136 => 51,  111 => 29,  105 => 26,  101 => 25,  95 => 22,  91 => 21,  87 => 20,  76 => 12,  70 => 9,  66 => 8,  62 => 7,  58 => 6,  52 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("      <script src=\"{{asset ('js/jquery-3.4.1.min.js') }}\"></script>
    <script src=\"{{asset ('js/popper/popper.min.js') }}\"></script>
    <script src=\"{{asset ('js/bootstrap/bootstrap.min.js') }}\"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"{{asset ('js/jquery.appear.js') }}\"></script>
    <script src=\"{{asset ('js/counter/jquery.countTo.js') }}\"></script>
    <script src=\"{{asset ('js/owl-carousel/owl-carousel.min.js') }}\"></script>
    <script src=\"{{asset ('js/magnific-popup/jquery.magnific-popup.min.js') }}\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"{{asset ('js/custom.js') }}\"></script>
          

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




          
           <!--=================================
    My Resume -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-md-9\">
        <div class=\"row\">
          <div class=\"col-lg-5\">
            <div class=\"resume-base bg-light user-dashboard-info-box\">
              <div class=\"profile\">
                <div class=\"jobber-user-info\">
                  <div class=\"profile-avatar\">
 <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">

                  </div>
                  <div class=\"profile-avatar-info mt-3\">
                    <h5>{{ candidat.username }}  {{ candidat.prenomCandidat }}</h5>
                  </div>
                </div>
              </div>
              <div class=\"about-candidate border-top\">
                <div class=\"candidate-info\">
                  <h6>Nom et prenom:</h6>
                  <p>{{ candidat.username }}  {{ candidat.prenomCandidat }}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Email:</h6>
                  <p>{{ candidat.email }}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Telephone:</h6>
                  <p>{{ candidat.telCandidat }}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Date de naissance:</h6>
                  <p>{{ candidat.dateNaissance ? candidat.dateNaissance|date('Y-m-d') : '' }}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Adresse:</h6>
                  <p>{{ candidat.adresse }}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Genre:</h6>
                  <p>{{ candidat.genreCandidat }}</p>
                </div>
                <p>The old expression is absolutely true – whether you think you can or you can’t, you’re right!   One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing them with beliefs that will help them to accomplish their desires.</p>
              </div>
            </div>
          </div>
         
              <div class=\"timeline-box mt-4\">
                <h5 class=\"resume-experience-title\"> Experience:</h5>



                 {% for experience_profissionnelle in experience_profissionnelles %}

          <div class=\"collapse show\" id=\"dateposted\">
            
          </div>
          <div class=\"jobber-candidate-timeline mt-4\">
            <div class=\"jobber-timeline-icon\">
              <i class=\"fas fa-graduation-cap\"></i>
            </div>
            <div class=\"jobber-timeline-item\">
              <div class=\"jobber-timeline-cricle\">
                <i class=\"far fa-circle\"></i>
              </div>
              <div class=\"jobber-timeline-info\">
                <div class=\"dashboard-timeline-info\">
                 



                  <span class=\"jobber-timeline-time\">{{ experience_profissionnelle.dateDebut ? experience_profissionnelle.dateDebut|date('Y-m-d') : '' }}</span>
                 <span class=\"jobber-timeline-time\">{{ experience_profissionnelle.dateFin ? experience_profissionnelle.dateFin|date('Y-m-d') : '' }}</span>
                  <h6 class=\"mb-2\">{{ experience_profissionnelle.nomExp }}</h6>
                  <span>- {{ experience_profissionnelle.entreprise }}</span>
                  <p class=\"mt-2\">{{ experience_profissionnelle.description }}</p>
                </div>

</div>
            </div>
            </div>
              {% endfor %}


               
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
My Resume -->

    <!--=================================
    Back To Top-->
    <div id=\"back-to-top\" class=\"back-to-top\">
      <i class=\"fas fa-angle-up\"></i>
    </div>
    <!--=================================
    Back To Top-->

 <div class=\"col-lg-2 text-lg-right\">

        <a class=\"btn btn-primary btn-md mb-4 mb-lg-0\" href={{ path('acceuil') }}>Retour </a>
      </div>
", "candidat/moncv.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\candidat\\moncv.html.twig");
    }
}
