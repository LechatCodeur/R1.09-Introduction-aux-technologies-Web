<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* page/portfolio.html.twig */
class __TwigTemplate_e022f6499e0e752e978f308b241b7006 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/portfolio.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/portfolio.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/portfolio.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Portfolio";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

#excel-display {
    flex-grow: 1; /* Allow the iframe container to take up available space */
    width: 100%;
    height: calc(100vh - [footer_height]); /* Subtract footer height */
}

footer {
    height: [footer_height]; /* Set the footer height explicitly */
    /* Example: height: 50px; */
}

iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.progress-container {
    display: flex;
    flex-direction: column;
    flex-grow: 1; /* Make the container take up the remaining space */
    justify-content: space-evenly; /* Evenly distribute the space */
    padding: 20px;
    gap: 20px; /* Add space between the bars */
}

.progress {
    margin-bottom: 10px;
    width: 100%;
}

.progress-bar {
    height: 50px; /* Adjust the height of each progress bar */
    border-radius: 25px; /* Optional: Add rounded corners to the progress bars */
}

h5 {
    text-align: center; /* Center the titles */
    margin: 0;
    font-size: 1.2rem; /* Adjust font size */
    font-weight: bold;
    padding-bottom: 10px;
}

</style>

<div class=\"btn-group\" role=\"group\" aria-label=\"Radio toggle button group\">
  <!-- Radio Button pour afficher rien -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradioNothing\" autocomplete=\"off\" checked>
  <label class=\"btn btn-outline-primary\" for=\"btnradioNothing\">Présentation</label>

  <!-- Radio Button 2 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio2\">RT1/S1</label>

  <!-- Radio Button 3 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio3\">RT1/S2</label>

  <!-- Radio Button 4 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio4\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio4\">RT2/S1</label>

  <!-- Radio Button 5 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio5\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio5\">RT2/S2</label>

  <!-- Radio Button 6 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio6\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio6\">RT3/S1</label>

  <!-- Radio Button 7 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio7\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio7\">RT3/S2</label>
</div>

<!-- Zone d'affichage des barres de progression (Présentation) -->
<div class=\"progress-container\" id=\"progress-container\">
  <div>
    <h5>Progression 1</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 10%;\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 2</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 3</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 4</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 5</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 6</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-dark\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 7</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 8</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
</div>

<!-- Zone d'affichage des fichiers Excel -->
<div id=\"excel-display\">
  <!-- L'iframe est initialement vide ou cachée -->
  <iframe src=\"\" width=\"100%\" height=\"1000px\" id=\"excel-iframe\" style=\"display: none;\"></iframe>
</div>

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    const progressContainer = document.getElementById('progress-container');
    
    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et on affiche les barres de progression
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
          progressContainer.style.display = 'block'; // Affiche les barres de progression
        } else {
          progressContainer.style.display = 'none'; // Cache les barres de progression
          iframe.style.display = 'block'; // Affiche l'iframe
          
          // En fonction du bouton sélectionné, on met à jour l'iframe
          if (radio.id === 'btnradio2') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1F7H-plknB4YsNLRgMopjwkmjrCdHbkcNLFJrQFoMbW4/edit?gid=1855953082#gid=1855953082\"; 
            iframe.width = \"100%\";
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio3') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1qKpuegvfNUg6fcPG7Oy11UoUvwpVj2XTwtHyUZhUn-E/edit?gid=839854339#gid=839854339\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio4') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1ZdLV1ri1_kleUEuocoA9tXQY9MrwIAdsULnHH82jAZo/edit?gid=950138144#gid=950138144\"; 
            iframe.width = \"100%\";
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio5') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/18SVFn6QqukcF3lAKJx3seFBLkRjWqW23FSQl7dIv2vg/edit?gid=436640704#gid=436640704\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio6') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1fEXeeSLOkNZGP6erv5eQr0swqJoYxGOrb7N40QK20x0/edit?gid=1770696550#gid=1770696550\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio7') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1huByWpbRDLjIdHTadRLNR-r-NS_gNr-te9_tGEQzsdc/edit?gid=524815677#gid=524815677\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          }
        }
      });
    });
  });
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "page/portfolio.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Portfolio{% endblock %}

{% block body %}
<style>
  html, body {
    height: 100%;
    margin: 0;
    display: flex;
    flex-direction: column;
}

#excel-display {
    flex-grow: 1; /* Allow the iframe container to take up available space */
    width: 100%;
    height: calc(100vh - [footer_height]); /* Subtract footer height */
}

footer {
    height: [footer_height]; /* Set the footer height explicitly */
    /* Example: height: 50px; */
}

iframe {
    width: 100%;
    height: 100%;
    border: none;
}

.progress-container {
    display: flex;
    flex-direction: column;
    flex-grow: 1; /* Make the container take up the remaining space */
    justify-content: space-evenly; /* Evenly distribute the space */
    padding: 20px;
    gap: 20px; /* Add space between the bars */
}

.progress {
    margin-bottom: 10px;
    width: 100%;
}

.progress-bar {
    height: 50px; /* Adjust the height of each progress bar */
    border-radius: 25px; /* Optional: Add rounded corners to the progress bars */
}

h5 {
    text-align: center; /* Center the titles */
    margin: 0;
    font-size: 1.2rem; /* Adjust font size */
    font-weight: bold;
    padding-bottom: 10px;
}

</style>

<div class=\"btn-group\" role=\"group\" aria-label=\"Radio toggle button group\">
  <!-- Radio Button pour afficher rien -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradioNothing\" autocomplete=\"off\" checked>
  <label class=\"btn btn-outline-primary\" for=\"btnradioNothing\">Présentation</label>

  <!-- Radio Button 2 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio2\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio2\">RT1/S1</label>

  <!-- Radio Button 3 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio3\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio3\">RT1/S2</label>

  <!-- Radio Button 4 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio4\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio4\">RT2/S1</label>

  <!-- Radio Button 5 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio5\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio5\">RT2/S2</label>

  <!-- Radio Button 6 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio6\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio6\">RT3/S1</label>

  <!-- Radio Button 7 -->
  <input type=\"radio\" class=\"btn-check\" name=\"btnradio\" id=\"btnradio7\" autocomplete=\"off\">
  <label class=\"btn btn-outline-primary\" for=\"btnradio7\">RT3/S2</label>
</div>

<!-- Zone d'affichage des barres de progression (Présentation) -->
<div class=\"progress-container\" id=\"progress-container\">
  <div>
    <h5>Progression 1</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 10%;\" aria-valuenow=\"10\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 2</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 25%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 3</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-info\" role=\"progressbar\" style=\"width: 50%;\" aria-valuenow=\"50\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 4</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-warning\" role=\"progressbar\" style=\"width: 75%;\" aria-valuenow=\"75\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 5</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-danger\" role=\"progressbar\" style=\"width: 100%;\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 6</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-dark\" role=\"progressbar\" style=\"width: 85%;\" aria-valuenow=\"85\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 7</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped\" role=\"progressbar\" style=\"width: 90%;\" aria-valuenow=\"90\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
  <div>
    <h5>Progression 8</h5>
    <div class=\"progress\">
      <div class=\"progress-bar progress-bar-striped bg-success\" role=\"progressbar\" style=\"width: 95%;\" aria-valuenow=\"95\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
    </div>
  </div>
</div>

<!-- Zone d'affichage des fichiers Excel -->
<div id=\"excel-display\">
  <!-- L'iframe est initialement vide ou cachée -->
  <iframe src=\"\" width=\"100%\" height=\"1000px\" id=\"excel-iframe\" style=\"display: none;\"></iframe>
</div>

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    const progressContainer = document.getElementById('progress-container');
    
    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et on affiche les barres de progression
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
          progressContainer.style.display = 'block'; // Affiche les barres de progression
        } else {
          progressContainer.style.display = 'none'; // Cache les barres de progression
          iframe.style.display = 'block'; // Affiche l'iframe
          
          // En fonction du bouton sélectionné, on met à jour l'iframe
          if (radio.id === 'btnradio2') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1F7H-plknB4YsNLRgMopjwkmjrCdHbkcNLFJrQFoMbW4/edit?gid=1855953082#gid=1855953082\"; 
            iframe.width = \"100%\";
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio3') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1qKpuegvfNUg6fcPG7Oy11UoUvwpVj2XTwtHyUZhUn-E/edit?gid=839854339#gid=839854339\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio4') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1ZdLV1ri1_kleUEuocoA9tXQY9MrwIAdsULnHH82jAZo/edit?gid=950138144#gid=950138144\"; 
            iframe.width = \"100%\";
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio5') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/18SVFn6QqukcF3lAKJx3seFBLkRjWqW23FSQl7dIv2vg/edit?gid=436640704#gid=436640704\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio6') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1fEXeeSLOkNZGP6erv5eQr0swqJoYxGOrb7N40QK20x0/edit?gid=1770696550#gid=1770696550\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          } else if (radio.id === 'btnradio7') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1huByWpbRDLjIdHTadRLNR-r-NS_gNr-te9_tGEQzsdc/edit?gid=524815677#gid=524815677\"; 
            iframe.width = \"100%\"; 
            iframe.height = \"1000\";
          }
        }
      });
    });
  });
</script>

{% endblock %}
", "page/portfolio.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\portfolio.html.twig");
    }
}
