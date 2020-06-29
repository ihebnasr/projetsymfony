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

/* candidat/edit.html.twig */
class __TwigTemplate_65975875c6ff5f1d3feb5215e68e772800276fe8008480746bbca56bb5438631 extends Template
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
            'blog' => [$this, 'block_blog'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidat/edit.html.twig", 1);
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
        $this->loadTemplate("BarCandidat/header.html.twig", "candidat/edit.html.twig", 4)->display(twig_array_merge($context, ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 4, $this->source); })())]));
        
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
<div class=\"header-inner bg-light\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"candidates-user-info\">
          <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
                <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
              <h3>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), "html", null, true);
        echo "  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["candidat"]) || array_key_exists("candidat", $context) ? $context["candidat"] : (function () { throw new RuntimeError('Variable "candidat" does not exist.', 22, $this->source); })()), "prenomCandidat", [], "any", false, false, false, 22), "html", null, true);
        echo "</h3>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
";
        // line 31
        $this->displayBlock('blog', $context, $blocks);
        // line 63
        echo "


";
        // line 66
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 66, $this->source); })()), 'form_start');
        echo "
    

     <section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-2\">
            <h4>Information Génerale </h4>
          </div>
          <div class=\"cover-photo-contact\">
            <div class=\"upload-file\">
              <div class=\"custom-file\">
     <label class=\"custom-file-label\">Upload Cover Photo</label>

     ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 82, $this->source); })()), "photo_candidat", [], "any", false, false, false, 82), 'row', ["attr" => ["class" => "custom-file-input"]]);
        echo "

              </div>
            </div>
          </div>


            <div class=\"form-row\">
              <div class=\"form-group col-md-3\">

        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 92, $this->source); })()), "username", [], "any", false, false, false, 92), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
              </div>
              <div class=\"form-group col-md-3\">
        ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 95, $this->source); })()), "prenom_candidat", [], "any", false, false, false, 95), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

              </div>
              <div class=\"form-group col-md-6\">
               

            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 101, $this->source); })()), "email", [], "any", false, false, false, 101), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

              </div>

              <div class=\"form-group col-md-3\">
                <div class=\"input-group date\" id=\"datetimepicker-01\" data-target-input=\"nearest\">
            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 107, $this->source); })()), "date_naissance", [], "any", false, false, false, 107), 'row', ["attr" => ["class" => "form-control datetimepicker-input"]]);
        echo "

                  
                </div>
              </div>

              <div class=\"form-group col-md-3\">
            ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 114, $this->source); })()), "tel_candidat", [], "any", false, false, false, 114), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

              </div>
             



             <div class=\"form-group col-md-6\">

               <div class=\"form-group col-md-6 select-border\">

                    ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 125, $this->source); })()), "genre_candidat", [], "any", false, false, false, 125), 'row', ["attr" => ["class" => "form-control basic-select"]]);
        echo "

                  </div>
              </div>
             
              <div class=\"form-group col-md-6 select-border\">
               <div class=\"form-group col-md-6 select-border\">

                    ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 133, $this->source); })()), "domaine_candidat", [], "any", false, false, false, 133), 'row', ["attr" => ["class" => "form-control basic-select"]]);
        echo "

                  </div>
              </div>

              
              
            </div>

        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Vos Liens Socials</h4>
          </div>
            <div class=\"form-row\">
              
              <div class=\"form-group mb-0 col-md-12\">
            ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 150, $this->source); })()), "linkedin", [], "any", false, false, false, 150), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

              </div>
            </div>
        </div>
         <div class=\"user-dashboard-info-box\">
          <div class=\"form-group mb-0\">
            <h4 class=\"mb-3\">Adresse</h4>
            <div class=\"form-group\">


            ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 161, $this->source); })()), "adresse", [], "any", false, false, false, 161), 'row', ["attr" => ["class" => "form-control"]]);
        echo "

            </div>
            <div class=\"company-address-map\">
              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin\"  height=\"400\" allowfullscreen></iframe>
            </div>
          </div>
        </div>

              
          <div class=\"form-group mb-0 col-md-12\">
            ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 172, $this->source); })()), "password", [], "any", false, false, false, 172), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
          </div>

          <div class=\"form-group mb-0 col-md-12\">
            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 176, $this->source); })()), "confirm_password", [], "any", false, false, false, 176), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
          </div>


    <button class=\"btn btn-md btn-primary\">";
        // line 180
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 180, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        echo "</button>


";
        // line 183
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form1"]) || array_key_exists("form1", $context) ? $context["form1"] : (function () { throw new RuntimeError('Variable "form1" does not exist.', 183, $this->source); })()), 'form_end');
        echo "


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 31
    public function block_blog($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "blog"));

        // line 32
        echo "

<!--=================================



    Dashboard Nav -->
    <section>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"sticky-top secondary-menu-sticky-top\">
              <div class=\"secondary-menu\">
                <ul class=\"list-unstyled mb-0\">
                  <li><a href= ";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("candidat_edit", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 46, $this->source); })())]), "html", null, true);
        echo ">Info Génerale </a></li>
                 
                  <li><a href= ";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("experience_profissionnelle_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 48, $this->source); })())]), "html", null, true);
        echo ">Info profisionnelle </a></li>


                 <li><a href= ";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cv_index", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 51, $this->source); })())]), "html", null, true);
        echo ">Mon CV</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Dashboard Nav -->
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  355 => 51,  349 => 48,  344 => 46,  328 => 32,  318 => 31,  304 => 183,  298 => 180,  291 => 176,  284 => 172,  270 => 161,  256 => 150,  236 => 133,  225 => 125,  211 => 114,  201 => 107,  192 => 101,  183 => 95,  177 => 92,  164 => 82,  145 => 66,  140 => 63,  138 => 31,  124 => 22,  110 => 10,  100 => 9,  81 => 7,  71 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}
{% include \"BarCandidat/header.html.twig\"  with {'id': id }%}
{% endblock %}

{% block title %}Edit Candidat{% endblock %}

{% block body %}

<div class=\"header-inner bg-light\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6\">
        <div class=\"candidates-user-info\">
          <div class=\"jobber-user-info\">
            <div class=\"profile-avatar\">
                <img class=\"img-fluid\" src=\"/images/avatar/05.jpg\" alt=\"avatar\">
              <i class=\"fas fa-pencil-alt\"></i>
            </div>
            <div class=\"profile-avatar-info ml-4\">
              <h3>{{ candidat.username }}  {{ candidat.prenomCandidat }}</h3>
            </div>
          </div>
        </div>
      </div>
     
    </div>
  </div>
</div>
{% block blog  %}


<!--=================================



    Dashboard Nav -->
    <section>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-12\">
            <div class=\"sticky-top secondary-menu-sticky-top\">
              <div class=\"secondary-menu\">
                <ul class=\"list-unstyled mb-0\">
                  <li><a href= {{ path('candidat_edit', {id:id}) }}>Info Génerale </a></li>
                 
                  <li><a href= {{ path('experience_profissionnelle_index',{id:id}) }}>Info profisionnelle </a></li>


                 <li><a href= {{ path('cv_index',{id:id}) }}>Mon CV</a></li>

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Dashboard Nav -->
    {% endblock %}



{{ form_start(form1) }}
    

     <section>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-2\">
            <h4>Information Génerale </h4>
          </div>
          <div class=\"cover-photo-contact\">
            <div class=\"upload-file\">
              <div class=\"custom-file\">
     <label class=\"custom-file-label\">Upload Cover Photo</label>

     {{ form_row(form1.photo_candidat ,{ 'attr': {'class': 'custom-file-input'} }) }}

              </div>
            </div>
          </div>


            <div class=\"form-row\">
              <div class=\"form-group col-md-3\">

        {{ form_row(form1.username, { 'attr': {'class': 'form-control'} }) }}
              </div>
              <div class=\"form-group col-md-3\">
        {{ form_row(form1.prenom_candidat, { 'attr': {'class': 'form-control'} }) }}

              </div>
              <div class=\"form-group col-md-6\">
               

            {{ form_row(form1.email, { 'attr': {'class': 'form-control'} }) }}

              </div>

              <div class=\"form-group col-md-3\">
                <div class=\"input-group date\" id=\"datetimepicker-01\" data-target-input=\"nearest\">
            {{ form_row(form1.date_naissance ,{ 'attr': {'class': 'form-control datetimepicker-input'} }) }}

                  
                </div>
              </div>

              <div class=\"form-group col-md-3\">
            {{ form_row(form1.tel_candidat ,{ 'attr': {'class': 'form-control'} }) }}

              </div>
             



             <div class=\"form-group col-md-6\">

               <div class=\"form-group col-md-6 select-border\">

                    {{ form_row(form1.genre_candidat ,{ 'attr': {'class': 'form-control basic-select'} }) }}

                  </div>
              </div>
             
              <div class=\"form-group col-md-6 select-border\">
               <div class=\"form-group col-md-6 select-border\">

                    {{ form_row(form1.domaine_candidat ,{ 'attr': {'class': 'form-control basic-select'} }) }}

                  </div>
              </div>

              
              
            </div>

        </div>
        <div class=\"user-dashboard-info-box\">
          <div class=\"section-title-02 mb-3\">
            <h4>Vos Liens Socials</h4>
          </div>
            <div class=\"form-row\">
              
              <div class=\"form-group mb-0 col-md-12\">
            {{ form_row(form1.linkedin ,{ 'attr': {'class': 'form-control'} }) }}

              </div>
            </div>
        </div>
         <div class=\"user-dashboard-info-box\">
          <div class=\"form-group mb-0\">
            <h4 class=\"mb-3\">Adresse</h4>
            <div class=\"form-group\">


            {{ form_row(form1.adresse ,{ 'attr': {'class': 'form-control'} }) }}

            </div>
            <div class=\"company-address-map\">
              <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509374!2d144.95373531590414!3d-37.817323442021134!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1559039794237!5m2!1sen!2sin\"  height=\"400\" allowfullscreen></iframe>
            </div>
          </div>
        </div>

              
          <div class=\"form-group mb-0 col-md-12\">
            {{ form_row(form1.password,{ 'attr': {'class': 'form-control'} })}}
          </div>

          <div class=\"form-group mb-0 col-md-12\">
            {{ form_row(form1.confirm_password,{ 'attr': {'class': 'form-control'} }) }}
          </div>


    <button class=\"btn btn-md btn-primary\">{{ button_label|default('Sauvegarder') }}</button>


{{ form_end(form1) }}


{% endblock %}
", "candidat/edit.html.twig", "C:\\wamp64\\www\\JOB\\templates\\candidat\\edit.html.twig");
    }
}
