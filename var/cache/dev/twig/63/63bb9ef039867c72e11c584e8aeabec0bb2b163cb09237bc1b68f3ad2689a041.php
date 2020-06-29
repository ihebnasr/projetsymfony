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

/* BarRecruteur/footer.html.twig */
class __TwigTemplate_62d25c0563a24db045003a502e977cdfcc8629f414938229a456cc58a5b8889b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarRecruteur/footer.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "BarRecruteur/footer.html.twig"));

        // line 1
        echo "<!--=================================
footer -->
<footer class=\"footer mt-5 mt-md-5 pt-0\">
    <div class=\"footer-bottom bg-light\">
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
footer -->

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

    <!-- map -->
    <script src=\"/js/apexcharts/apexcharts.min.js\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>

    <script>
        var options = {
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            colors: ['#ff8a00', '#001935'],

            xaxis: {
                type: 'datetime',
                categories: [\"2018-09-19T00:00:00\", \"2018-09-19T01:30:00\", \"2018-09-19T02:30:00\", \"2018-09-19T03:30:00\", \"2018-09-19T04:30:00\", \"2018-09-19T05:30:00\", \"2018-09-19T06:30:00\"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector(\"#chart\"),
            options
        );

        chart.render();
    </script>

</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/dashboard-employer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:17 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "BarRecruteur/footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--=================================
footer -->
<footer class=\"footer mt-5 mt-md-5 pt-0\">
    <div class=\"footer-bottom bg-light\">
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
footer -->

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

    <!-- map -->
    <script src=\"/js/apexcharts/apexcharts.min.js\"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src=\"/js/custom.js\"></script>

    <script>
        var options = {
            chart: {
                height: 350,
                type: 'area',
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth'
            },
            series: [{
                name: 'series1',
                data: [31, 40, 28, 51, 42, 109, 100]
            }, {
                name: 'series2',
                data: [11, 32, 45, 32, 34, 52, 41]
            }],
            colors: ['#ff8a00', '#001935'],

            xaxis: {
                type: 'datetime',
                categories: [\"2018-09-19T00:00:00\", \"2018-09-19T01:30:00\", \"2018-09-19T02:30:00\", \"2018-09-19T03:30:00\", \"2018-09-19T04:30:00\", \"2018-09-19T05:30:00\", \"2018-09-19T06:30:00\"],
            },
            tooltip: {
                x: {
                    format: 'dd/MM/yy HH:mm'
                },
            }
        }

        var chart = new ApexCharts(
            document.querySelector(\"#chart\"),
            options
        );

        chart.render();
    </script>

</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/dashboard-employer.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Mar 2020 09:32:17 GMT -->
</html>
", "BarRecruteur/footer.html.twig", "C:\\wamp64\\www\\JOB\\templates\\BarRecruteur\\footer.html.twig");
    }
}
