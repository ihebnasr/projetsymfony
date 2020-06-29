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

/* candidat/interview.html.twig */
class __TwigTemplate_5b2511c6b50c2bfecfac2a790ca0e47540bfb4ea3ddb05b7e393a94ef3ac2c5c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/interview.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "candidat/interview.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "candidat/interview.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        $context["y"] = 0;
        // line 5
        $context["z"] = 0;
        // line 6
        echo "<section class=\"space-ptb bg-light\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12\">
        <div class=\"section-title text-center\">
        <h2 class=\"text-primary\">Passer Entretien</h2>
       </div>
      </div>
    
    </div>
  </div>
</section>

     <style>
     .clear {
    clear: both;
}
     </style>     

<section class=\"space-ptb bg-light\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">


          <form class=\"form-row\" method=\"POST\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reponseCandidat", ["idee" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 30, $this->source); })())]), "html", null, true);
        echo "\">
<div class=\"clear\">
               ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) || array_key_exists("questions", $context) ? $context["questions"] : (function () { throw new RuntimeError('Variable "questions" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["q"]) {
            echo " 
               
               
               <br/> 
               <h2> Question ";
            // line 36
            echo twig_escape_filter($this->env, ((isset($context["z"]) || array_key_exists("z", $context) ? $context["z"] : (function () { throw new RuntimeError('Variable "z" does not exist.', 36, $this->source); })()) + 1), "html", null, true);
            echo ":</h2> <br/> 
            <h3> ";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["q"], "contenu", [], "any", false, false, false, 37), "html", null, true);
            echo " </h3> <br/>
            
           ";
            // line 39
            $context["i"] = 0;
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["propos"]) || array_key_exists("propos", $context) ? $context["propos"] : (function () { throw new RuntimeError('Variable "propos" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 41
                echo "    ";
                if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["q"], "id", [], "any", false, false, false, 41), twig_get_attribute($this->env, $this->source, $context["p"], "id_question_id", [], "any", false, false, false, 41))) {
                    // line 42
                    echo "    
         <div class=\"custom-control custom-checkbox\">
          ";
                    // line 44
                    $context["y"] = ((isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 44, $this->source); })()) + 1);
                    // line 45
                    echo "                <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name";
                    echo twig_escape_filter($this->env, (isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 45, $this->source); })()), "html", null, true);
                    echo "__\"\" name=\"check";
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 45, $this->source); })()), "html", null, true);
                    echo "[]\" >
               
            <label class=\"custom-control-label\" for=\"__name";
                    // line 47
                    echo twig_escape_filter($this->env, (isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo "__\"\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "nom_prop", [], "any", false, false, false, 47), "html", null, true);
                    echo " check";
                    echo twig_escape_filter($this->env, (isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo twig_escape_filter($this->env, (isset($context["y"]) || array_key_exists("y", $context) ? $context["y"] : (function () { throw new RuntimeError('Variable "y" does not exist.', 47, $this->source); })()), "html", null, true);
                    echo " </label> <br/>
             ";
                    // line 48
                    $context["i"] = ((isset($context["i"]) || array_key_exists("i", $context) ? $context["i"] : (function () { throw new RuntimeError('Variable "i" does not exist.', 48, $this->source); })()) + 1);
                    // line 49
                    echo "          </div>  
          ";
                }
                // line 51
                echo "        
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "          ";
            $context["z"] = ((isset($context["z"]) || array_key_exists("z", $context) ? $context["z"] : (function () { throw new RuntimeError('Variable "z" does not exist.', 53, $this->source); })()) + 1);
            // line 54
            echo "          
           
           
           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['q'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "</div>
<div class=\"clear\">
                  ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["autrequestion"]) || array_key_exists("autrequestion", $context) ? $context["autrequestion"] : (function () { throw new RuntimeError('Variable "autrequestion" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["qau"]) {
            echo "  
            <h2> Question ";
            // line 61
            echo twig_escape_filter($this->env, ((isset($context["z"]) || array_key_exists("z", $context) ? $context["z"] : (function () { throw new RuntimeError('Variable "z" does not exist.', 61, $this->source); })()) + 1), "html", null, true);
            echo ":</h2> <br/> 
            <h3 > ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["qau"], "contenu", [], "any", false, false, false, 62), "html", null, true);
            echo "</h3>
             <textarea class=\"form-control\" name=\"reponse[]\" rows=\"4\"></textarea> 
            
           ";
            // line 65
            $context["z"] = ((isset($context["z"]) || array_key_exists("z", $context) ? $context["z"] : (function () { throw new RuntimeError('Variable "z" does not exist.', 65, $this->source); })()) + 1);
            // line 66
            echo "           ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qau'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "           <br/>
<button type=\"submit\" href=\"/entretienpasser\" class=\"btn btn-lg btn-primary\">Enregistrer</button>
</div>
</form> 
</div>
</div>
</section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "candidat/interview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 67,  201 => 66,  199 => 65,  193 => 62,  189 => 61,  183 => 60,  179 => 58,  170 => 54,  167 => 53,  160 => 51,  156 => 49,  154 => 48,  145 => 47,  137 => 45,  135 => 44,  131 => 42,  128 => 41,  123 => 40,  121 => 39,  116 => 37,  112 => 36,  103 => 32,  98 => 30,  72 => 6,  70 => 5,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
{%set y =0%}
{%set z =0%}
<section class=\"space-ptb bg-light\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">
      <div class=\"col-12\">
        <div class=\"section-title text-center\">
        <h2 class=\"text-primary\">Passer Entretien</h2>
       </div>
      </div>
    
    </div>
  </div>
</section>

     <style>
     .clear {
    clear: both;
}
     </style>     

<section class=\"space-ptb bg-light\">
  <div class=\"container\">
    <div class=\"row justify-content-center\">


          <form class=\"form-row\" method=\"POST\" action=\"{{ path('reponseCandidat', {'idee': id}) }}\">
<div class=\"clear\">
               {% for q in questions %} 
               
               
               <br/> 
               <h2> Question {{z+1}}:</h2> <br/> 
            <h3> {{q.contenu}} </h3> <br/>
            
           {%set i =0%}
            {%for p in propos %}
    {%if q.id == p.id_question_id %}
    
         <div class=\"custom-control custom-checkbox\">
          {%set y =y+1 %}
                <input type=\"checkbox\" class=\"custom-control-input\" id=\"__name{{y}}__\"\" name=\"check{{i}}[]\" >
               
            <label class=\"custom-control-label\" for=\"__name{{y}}__\"\">{{p.nom_prop}} check{{i}}{{y}} </label> <br/>
             {%set i =i+1%}
          </div>  
          {% endif %}
        
 {% endfor %}
          {% set z=z+1 %}
          
           
           
           {% endfor %}
</div>
<div class=\"clear\">
                  {% for qau in autrequestion %}  
            <h2> Question {{z+1}}:</h2> <br/> 
            <h3 > {{qau.contenu}}</h3>
             <textarea class=\"form-control\" name=\"reponse[]\" rows=\"4\"></textarea> 
            
           {% set z=z+1 %}
           {% endfor %}
           <br/>
<button type=\"submit\" href=\"/entretienpasser\" class=\"btn btn-lg btn-primary\">Enregistrer</button>
</div>
</form> 
</div>
</div>
</section>
{% endblock %}


", "candidat/interview.html.twig", "C:\\Users\\ihebn\\Downloads\\JOB-20200619T090250Z-001\\JOB\\templates\\candidat\\interview.html.twig");
    }
}
