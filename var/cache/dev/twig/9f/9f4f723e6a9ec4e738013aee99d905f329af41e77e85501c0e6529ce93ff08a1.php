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

/* register.html.twig */
class __TwigTemplate_64e6be33cc74cfa0e598b69d1dbe671d3a5040ce3611780f3fd904c3b6229b51 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "register.html.twig"));

        $this->parent = $this->loadTemplate("baseh.html.twig", "register.html.twig", 1);
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
inner banner -->
<div class=\"header-inner bg-light text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"text-primary\">S'inscrire</h2>
        <ol class=\"breadcrumb mb-0 p-0\">
          <li class=\"breadcrumb-item\"><a href=\"/home\"> Acceuil </a></li>
          <li class=\"breadcrumb-item active\"> <i class=\"fas fa-chevron-right\"></i> <span> Inscription </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-8 col-lg-10 col-md-12\">
        <div class=\"login-register\">
         <div class=\"section-title\">
          <h4 class=\"text-center\">Créer Votre Compte</h4>
         </div>
         
            <ul class=\"nav nav-tabs nav-tabs-border d-flex\" role=\"tablist\">
              <li class=\"nav-item mr-4\">
                <a class=\"nav-link active\"  data-toggle=\"tab\" href=\"#candidate\" role=\"tab\" >
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-users\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Candidat</h6>
                      
                    </div>
                  </div>
                </a>
              </li>
              
            </ul>
    
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"candidate\" role=\"tabpanel\">
";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start');
        echo "
                <div class=\"form-row\">
                  <div class=\"form-group col-md-6\">
 ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "username", [], "any", false, false, false, 55), 'row', ["label" => "Nom", "attr" => ["class" => "form-control"]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                     ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "prenom_candidat", [], "any", false, false, false, 58), 'row', ["label" => "Prenom", "attr" => ["class" => "form-control"]]);
        echo "

                  </div>
                  <div class=\"form-group col-md-6\">
 ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "password", [], "any", false, false, false, 62), 'row', ["label" => "Mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Mot de passe..."]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "confirm_password", [], "any", false, false, false, 65), 'row', ["label" => "Confirmation mot de passe", "attr" => ["class" => "form-control", "placeholder" => "Répétez votre mot de passe..."]]);
        // line 66
        echo "                  </div>
                 
                <div class=\"form-group col-md-6\">
 ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "date_naissance", [], "any", false, false, false, 69), 'row', ["label" => "Date naissance", "attr" => ["class" => "form-control", "placeholder" => "01/01/1990..."]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                     ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "tel_candidat", [], "any", false, false, false, 72), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Telephone..."]]);
        echo "

                  </div>

 <div class=\"form-group col-md-6\">
 ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "domaine_candidat", [], "any", false, false, false, 77), 'row', ["label" => "Domaine", "attr" => ["class" => "form-control", "placeholder" => "Nom d'utilisateur..."]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                     ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "adresse", [], "any", false, false, false, 80), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Adresse..."]]);
        echo "

                  </div>


                  <div class=\"form-group col-md-6\">
 ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "linkedin", [], "any", false, false, false, 86), 'row', ["label" => "Linkedin", "attr" => ["class" => "form-control", "placeholder" => "linkedin..."]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                     ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "genre_candidat", [], "any", false, false, false, 89), 'row', ["attr" => ["class" => "form-control", "placeholder" => "Femme/homme..."]]);
        echo "

                  </div>

                    <div class=\"form-group col-md-6\">
 ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "email", [], "any", false, false, false, 94), 'row', ["label" => "Email", "attr" => ["class" => "form-control", "placeholder" => "user@gmail.com..."]]);
        echo "
                  </div>
                  <div class=\"form-group col-md-6\">
                     ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "photo_candidat", [], "any", false, false, false, 97), 'row', ["attr" => ["class" => "form-control", "placeholder" => "photo..."]]);
        echo "

                  </div>


                 
                </div>
                <div class=\"form-row\">
                  <div class=\"col-md-6\">
  <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
                  </div>
                  <div class=\"col-md-6 text-md-right mt-2 text-center\">
                    <p>vous avez un compte? <a href=\"/\">Connectez-vous</a></p>
                  </div>
                </div>
 ";
        // line 112
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'form_end');
        echo "
            </div>
           
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Register -->



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 112,  200 => 97,  194 => 94,  186 => 89,  180 => 86,  171 => 80,  165 => 77,  157 => 72,  151 => 69,  146 => 66,  144 => 65,  138 => 62,  131 => 58,  125 => 55,  119 => 52,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'baseh.html.twig' %}
{% block blog %}

<!--=================================
inner banner -->
<div class=\"header-inner bg-light text-center\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-12\">
        <h2 class=\"text-primary\">S'inscrire</h2>
        <ol class=\"breadcrumb mb-0 p-0\">
          <li class=\"breadcrumb-item\"><a href=\"/home\"> Acceuil </a></li>
          <li class=\"breadcrumb-item active\"> <i class=\"fas fa-chevron-right\"></i> <span> Inscription </span></li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Register -->
<section class=\"space-ptb\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-xl-8 col-lg-10 col-md-12\">
        <div class=\"login-register\">
         <div class=\"section-title\">
          <h4 class=\"text-center\">Créer Votre Compte</h4>
         </div>
         
            <ul class=\"nav nav-tabs nav-tabs-border d-flex\" role=\"tablist\">
              <li class=\"nav-item mr-4\">
                <a class=\"nav-link active\"  data-toggle=\"tab\" href=\"#candidate\" role=\"tab\" >
                  <div class=\"d-flex\">
                    <div class=\"tab-icon\">
                      <i class=\"flaticon-users\"></i>
                    </div>
                    <div class=\"ml-3\">
                      <h6 class=\"mb-0\">Candidat</h6>
                      
                    </div>
                  </div>
                </a>
              </li>
              
            </ul>
    
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"candidate\" role=\"tabpanel\">
{{ form_start(form) }}
                <div class=\"form-row\">
                  <div class=\"form-group col-md-6\">
 {{ form_row(form.username, { 'label':'Nom', 'attr': {'class': 'form-control'} }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                     {{ form_row(form.prenom_candidat, { 'label':'Prenom','attr': { 'class': 'form-control' } }  ) }}

                  </div>
                  <div class=\"form-group col-md-6\">
 {{ form_row(form.password, { 'label':'Mot de passe', 'attr': {'class': 'form-control','placeholder':'Mot de passe...' } }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
{{ form_row(form.confirm_password, { 'label':'Confirmation mot de passe',
                                      'attr':{'class': 'form-control','placeholder':'Répétez votre mot de passe...' } }) }}                  </div>
                 
                <div class=\"form-group col-md-6\">
 {{ form_row(form.date_naissance, { 'label':'Date naissance', 'attr': {'class': 'form-control','placeholder':'01/01/1990...' } }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                     {{ form_row(form.tel_candidat, { 'attr': { 'class': 'form-control' ,'placeholder': 'Telephone...' } }  ) }}

                  </div>

 <div class=\"form-group col-md-6\">
 {{ form_row(form.domaine_candidat, { 'label':'Domaine', 'attr': {'class': 'form-control','placeholder':'Nom d\\'utilisateur...' } }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                     {{ form_row(form.adresse, { 'attr': { 'class': 'form-control' ,'placeholder': 'Adresse...' } }  ) }}

                  </div>


                  <div class=\"form-group col-md-6\">
 {{ form_row(form.linkedin, { 'label':'Linkedin', 'attr': {'class': 'form-control','placeholder':'linkedin...' } }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                     {{ form_row(form.genre_candidat, { 'attr': { 'class': 'form-control' ,'placeholder': 'Femme/homme...' } }  ) }}

                  </div>

                    <div class=\"form-group col-md-6\">
 {{ form_row(form.email, { 'label':'Email', 'attr': {'class': 'form-control','placeholder':'user@gmail.com...' } }) }}
                  </div>
                  <div class=\"form-group col-md-6\">
                     {{ form_row(form.photo_candidat, { 'attr': { 'class': 'form-control' ,'placeholder': 'photo...' } }  ) }}

                  </div>


                 
                </div>
                <div class=\"form-row\">
                  <div class=\"col-md-6\">
  <button type=\"submit\" class=\"btn btn-success\">Inscription</button>
                  </div>
                  <div class=\"col-md-6 text-md-right mt-2 text-center\">
                    <p>vous avez un compte? <a href=\"/\">Connectez-vous</a></p>
                  </div>
                </div>
 {{ form_end(form) }}
            </div>
           
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Register -->



{% endblock  %}
", "register.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\register.html.twig");
    }
}
