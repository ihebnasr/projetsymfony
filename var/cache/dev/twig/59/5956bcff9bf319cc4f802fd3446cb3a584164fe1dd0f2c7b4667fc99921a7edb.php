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

/* recruteur/candidatProfile.html.twig */
class __TwigTemplate_28c2acceecf078207a503a86e0dde8431732fdec624eed3d104a5f43e30729f2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidatProfile.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recruteur/candidatProfile.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:21 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Profile candidat</title>
    <!-- Favicon -->
    <link href=\"images/favicon.ico\" rel=\"shortcut icon\" />
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"/css/font-awesome/all.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/flaticon/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\"/css/datetimepicker/datetimepicker.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/select2/select2.css\" />
    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" />
  </head>
  
<!--======================== CV  candidat  =========================-->
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
                    <img class=\"img-fluid \" src=\"/images/avatar/";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 38, $this->source); })()), "photo_candidat", [], "any", false, false, false, 38), "html", null, true);
        echo "\" alt=\"\">
                  </div>
                  <div class=\"profile-avatar-info mt-3\">
                    <h5>";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 41, $this->source); })()), "prenom_candidat", [], "any", false, false, false, 41), "html", null, true);
        echo "</h5>
                  </div>
                </div>
              </div>
              <div class=\"about-candidate border-top\">
                <div class=\"candidate-info\">
                  <h6>Nom:</h6>
                  <p>";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 48, $this->source); })()), "prenom_candidat", [], "any", false, false, false, 48), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Domaine:</h6>
                  <p>";
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 52, $this->source); })()), "domaine_candidat", [], "any", false, false, false, 52), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Téléphone:</h6>
                  <p>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 56, $this->source); })()), "tel_candidat", [], "any", false, false, false, 56), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Date de naissance:</h6>
                  <p>";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 60, $this->source); })()), "date_naissance", [], "any", false, false, false, 60), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Adresse:</h6>
                  <p>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 64, $this->source); })()), "adresse", [], "any", false, false, false, 64), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Genre:</h6>
                  <p>";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 68, $this->source); })()), "genre_candidat", [], "any", false, false, false, 68), "html", null, true);
        echo "</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Linkedin:</h6>
                  <p>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 72, $this->source); })()), "linkedin", [], "any", false, false, false, 72), "html", null, true);
        echo "</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"resume-experience pl-0\">
              <div class=\"timeline-box\">
                <h5 class=\"resume-experience-title\">Experience profissionnelles:</h5>
                
                    ";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experience_profissionnelles"]) || array_key_exists("experience_profissionnelles", $context) ? $context["experience_profissionnelles"] : (function () { throw new RuntimeError('Variable "experience_profissionnelles" does not exist.', 82, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["exp"]) {
            // line 83
            echo "                    <div class=\"jobber-candidate-timeline\">
                  <div class=\"jobber-timeline-item mb-0\">
                    <div class=\"jobber-timeline-cricle\">
                      <i class=\"far fa-circle\"></i>
                    </div>
                    <div class=\"jobber-timeline-info\">
                      <div class=\"dashboard-timeline-info\">
                        <span class=\"jobber-timeline-time\">";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "date_debut", [], "any", false, false, false, 90), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "date_fin", [], "any", false, false, false, 90), "html", null, true);
            echo "</span>
                        <h6 class=\"mb-2\">";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "nom_exp", [], "any", false, false, false, 91), "html", null, true);
            echo "</h6>
                        <span>-";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "entreprise", [], "any", false, false, false, 92), "html", null, true);
            echo "</span>
                        <p class=\"mt-2\">";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["exp"], "description", [], "any", false, false, false, 93), "html", null, true);
            echo "</p>
                      </div>
                    </div>
                  </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['exp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 99
        echo "              </div>
        
       
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--========================Fin CV candidat =========================-->

    <!--=================================
    Back To Top-->
    <div id=\"back-to-top\" class=\"back-to-top\">
      <i class=\"fas fa-angle-up\"></i>
    </div>
    <!--=================================
    Back To Top-->
    
    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src=\"/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/js/popper/popper.min.js\"></script>
    <script src=\"/js/bootstrap/bootstrap.min.js\"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"/js/select2/select2.full.js\"></script>
    <script src=\"/js/datetimepicker/moment.min.js\"></script>
    <script src=\"/js/datetimepicker/datetimepicker.min.js\"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>
  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:21 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "recruteur/candidatProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 99,  180 => 93,  176 => 92,  172 => 91,  166 => 90,  157 => 83,  153 => 82,  140 => 72,  133 => 68,  126 => 64,  119 => 60,  112 => 56,  105 => 52,  98 => 48,  88 => 41,  82 => 38,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  
<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:21 GMT -->
<head>
    <meta charset=\"utf-8\">
    <meta name=\"keywords\" content=\"HTML5 Template\" />
    <meta name=\"description\" content=\"Jobber - Job Board HTML5 Template\" />
    <meta name=\"author\" content=\"potenzaglobalsolutions.com\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <title>Profile candidat</title>
    <!-- Favicon -->
    <link href=\"images/favicon.ico\" rel=\"shortcut icon\" />
    <!-- Google Font -->
    <link href=\"https://fonts.googleapis.com/css?family=Poppins:400,500,600,700\" rel=\"stylesheet\">
    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel=\"stylesheet\" href=\"/css/font-awesome/all.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/flaticon/flaticon.css\" />
    <link rel=\"stylesheet\" href=\"/css/bootstrap/bootstrap.min.css\" />
    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel=\"stylesheet\" href=\"/css/datetimepicker/datetimepicker.min.css\" />
    <link rel=\"stylesheet\" href=\"/css/select2/select2.css\" />
    <!-- Template Style -->
    <link rel=\"stylesheet\" href=\"/css/style.css\" />
  </head>
  
<!--======================== CV  candidat  =========================-->
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
                    <img class=\"img-fluid \" src=\"/images/avatar/{{candidat.photo_candidat}}\" alt=\"\">
                  </div>
                  <div class=\"profile-avatar-info mt-3\">
                    <h5>{{candidat.prenom_candidat}}</h5>
                  </div>
                </div>
              </div>
              <div class=\"about-candidate border-top\">
                <div class=\"candidate-info\">
                  <h6>Nom:</h6>
                  <p>{{candidat.prenom_candidat}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Domaine:</h6>
                  <p>{{candidat.domaine_candidat}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Téléphone:</h6>
                  <p>{{candidat.tel_candidat}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Date de naissance:</h6>
                  <p>{{candidat.date_naissance}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Adresse:</h6>
                  <p>{{candidat.adresse}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Genre:</h6>
                  <p>{{candidat.genre_candidat}}</p>
                </div>
                <div class=\"candidate-info\">
                  <h6>Linkedin:</h6>
                  <p>{{candidat.linkedin}}</p>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-7\">
            <div class=\"resume-experience pl-0\">
              <div class=\"timeline-box\">
                <h5 class=\"resume-experience-title\">Experience profissionnelles:</h5>
                
                    {% for exp in experience_profissionnelles %}
                    <div class=\"jobber-candidate-timeline\">
                  <div class=\"jobber-timeline-item mb-0\">
                    <div class=\"jobber-timeline-cricle\">
                      <i class=\"far fa-circle\"></i>
                    </div>
                    <div class=\"jobber-timeline-info\">
                      <div class=\"dashboard-timeline-info\">
                        <span class=\"jobber-timeline-time\">{{exp.date_debut}} - {{exp.date_fin}}</span>
                        <h6 class=\"mb-2\">{{exp.nom_exp}}</h6>
                        <span>-{{exp.entreprise}}</span>
                        <p class=\"mt-2\">{{exp.description}}</p>
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
<!--========================Fin CV candidat =========================-->

    <!--=================================
    Back To Top-->
    <div id=\"back-to-top\" class=\"back-to-top\">
      <i class=\"fas fa-angle-up\"></i>
    </div>
    <!--=================================
    Back To Top-->
    
    <!--=================================
    Javascript -->
    <!-- JS Global Compulsory (Do not remove)-->
    <script src=\"/js/jquery-3.4.1.min.js\"></script>
    <script src=\"/js/popper/popper.min.js\"></script>
    <script src=\"/js/bootstrap/bootstrap.min.js\"></script>
    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src=\"/js/select2/select2.full.js\"></script>
    <script src=\"/js/datetimepicker/moment.min.js\"></script>
    <script src=\"/js/datetimepicker/datetimepicker.min.js\"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>
  </body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/my-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:21 GMT -->
</html>
", "recruteur/candidatProfile.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\recruteur\\candidatProfile.html.twig");
    }
}
