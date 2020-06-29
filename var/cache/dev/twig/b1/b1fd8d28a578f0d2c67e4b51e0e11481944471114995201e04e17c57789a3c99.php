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

/* BarCandidat/footer.html.twig */
class __TwigTemplate_d5fbff835a446aec1540733c48744c6227c56cf3b4a22f7a7b3c3e480fe1327c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarCandidat/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarCandidat/footer.html.twig"));

        // line 1
        echo "
 
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
Footer-->";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BarCandidat/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
 
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
Footer-->", "BarCandidat/footer.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\BarCandidat\\footer.html.twig");
    }
}
