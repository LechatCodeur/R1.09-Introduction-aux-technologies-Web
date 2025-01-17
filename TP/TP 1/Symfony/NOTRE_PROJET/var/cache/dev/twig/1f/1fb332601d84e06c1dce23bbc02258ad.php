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
#excel-display {
  flex-grow: 1;
  width: 100%;
  height: calc(100vh - 50px); /* Subtract footer height */
  overflow: auto; /* Permet de faire défiler le contenu */
}

iframe {
  width: 100%;
  height: 100%;
  border: none;
}

h5 {
  text-align: center;
  margin: 0;
  font-size: 1.2rem;
  font-weight: bold;
  padding-bottom: 10px;
}

#btnradioNothing:checked ~ #excel-display #circle-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 50%;
}

#circle-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 150px;
  max-width: 1500px;
  margin: 0 auto;
}
svg {
  transform: rotate(-90deg); /* Pour commencer à dessiner du haut */
  width: 100%;
  height: 100%;
}

.circle-outer {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  fill: none;
  stroke: #007bff;
  stroke-width: 20;
}

.circle-wrapper {
  width: calc(33.333% - 150px);
  height: 400px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 100px;
  transition: transform 0.3s ease-in-out; /* Transition pour l'agrandissement */
  overflow: hidden; /* Empêcher l'image de déborder */
}

.circle-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Centrer le contenu dans le cercle */
  text-align: center;
}

.circle-content img {
  max-width: 80%; /* Limite l'image à 80% du diamètre du cercle */
  max-height: 80%; /* Limite également la hauteur de l'image à 80% */
  object-fit: contain; /* L'image conserve ses proportions sans dépasser */
  border-radius: 50%; /* Crée un cercle avec l'image */
}

.circle-text {
  font-size: 1.5rem;
  font-weight: bold;
  color: #007bff;
  margin-top: 20px;
}

/* Texte supplémentaire qui apparaîtra lors du survol */
.additional-text {
  font-size: 1rem;
  color: #000000;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  text-align: center;
  width: 150%;
  padding: 10px;
  white-space: normal; /* Permet d'afficher le texte en plusieurs lignes si nécessaire */
  z-index: 10; /* Met le texte au-dessus de l'image */
}

/* Affichage du texte supplémentaire lors du survol */
.circle-wrapper:hover .additional-text {
  opacity: 1; /* Affiche le texte lors du survol */
}

.circle-wrapper:hover .circle-content img {
  transform: scale(0.9); /* Réduit l'image lorsque le cercle grandit */
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

<!-- Zone d'affichage des fichiers Excel -->
<div id=\"excel-display\">
  <!-- L'iframe est initialement vide ou cachée -->
  <iframe src=\"\" width=\"100%\" height=\"1000px\" id=\"excel-iframe\" style=\"display: none;\"></iframe>

  <div id=\"circle-container\" class=\"circle-container\" style=\"display: none;\">
    <!-- Cercle 1 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"125\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/VS.jpg\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 25%</div>
        <div class=\"additional-text\">
          Je suis capable de créer des programmes simples en C et Python. 
          J'ai notamment travaillé sur des projets tels que la gestion de fonctions, la manipulation de tableaux, ainsi que l'implémentation d'algorithmes de tri.
        </div>
      </div>
    </div>
  
    <!-- Cercle 2 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"250\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/html.png\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 50%</div>
        <div class=\"additional-text\">Cercle 2 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 3 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"375\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/Symfony.png\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 75%</div>
        <div class=\"additional-text\">Cercle 3 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 4 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"0\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 100%</div>
        <div class=\"additional-text\">Cercle 4 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 5 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"125\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 25%</div>
        <div class=\"additional-text\">Cercle 5 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 6 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"250\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 50%</div>
        <div class=\"additional-text\">Cercle 6 - Détails supplémentaires ici</div>
      </div>
    </div>
  </div>
  

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    const circleContainer = document.getElementById('circle-container');
    
    // Changez ici les pourcentages directement dans le code
    const percentages = [80, 50, 75, 100, 25, 50]; // Exemple de pourcentages à changer
    const circles = document.querySelectorAll('.circle-wrapper');

    circles.forEach((circle, index) => {
      const percentage = percentages[index];
      const circlePercentage = circle.querySelector('.circle-text');
      const circleOuter = circle.querySelector('.circle-outer');
      
      // Mise à jour du texte de pourcentage
      circlePercentage.innerHTML = 'Taux : ' + percentage + '%';

      // Calculer le décalage de la bordure en fonction du pourcentage
      const strokeDashoffset = 500 * (1 - (percentage / 100));
      circleOuter.style.strokeDashoffset = strokeDashoffset;
    });

    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et montre les cercles
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
          circleContainer.style.display = 'flex';  // Affiche les cercles
        } else {
          iframe.style.display = 'block'; // Affiche l'iframe
          circleContainer.style.display = 'none'; // Cache les cercles
          
          // En fonction du bouton sélectionné, on met à jour l'iframe
          if (radio.id === 'btnradio2') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1F7H-plknB4YsNLRgMopjwkmjrCdHbkcNLFJrQFoMbW4/edit?gid=1855953082#gid=1855953082\"; 
          } else if (radio.id === 'btnradio3') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1qKpuegvfNUg6fcPG7Oy11UoUvwpVj2XTwtHyUZhUn-E/edit?gid=839854339#gid=839854339\"; 
          } else if (radio.id === 'btnradio4') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1ZdLV1ri1_kleUEuocoA9tXQY9MrwIAdsULnHH82jAZo/edit?gid=950138144#gid=950138144\"; 
          } else if (radio.id === 'btnradio5') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/18SVFn6QqukcF3lAKJx3seFBLkRjWqW23FSQl7dIv2vg/edit?gid=436640704#gid=436640704\"; 
          } else if (radio.id === 'btnradio6') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1fEXeeSLOkNZGP6erv5eQr0swqJoYxGOrb7N40QK20x0/edit?gid=1770696550#gid=1770696550\"; 
          } else if (radio.id === 'btnradio7') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1huByWpbRDLjIdHTadRLNR-r-NS_gNr-te9_tGEQzsdc/edit?gid=524815677#gid=524815677\"; 
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
#excel-display {
  flex-grow: 1;
  width: 100%;
  height: calc(100vh - 50px); /* Subtract footer height */
  overflow: auto; /* Permet de faire défiler le contenu */
}

iframe {
  width: 100%;
  height: 100%;
  border: none;
}

h5 {
  text-align: center;
  margin: 0;
  font-size: 1.2rem;
  font-weight: bold;
  padding-bottom: 10px;
}

#btnradioNothing:checked ~ #excel-display #circle-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 50%;
}

#circle-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 150px;
  max-width: 1500px;
  margin: 0 auto;
}
svg {
  transform: rotate(-90deg); /* Pour commencer à dessiner du haut */
  width: 100%;
  height: 100%;
}

.circle-outer {
  width: 100%;
  height: 100%;
  border-radius: 50%;
  fill: none;
  stroke: #007bff;
  stroke-width: 20;
}

.circle-wrapper {
  width: calc(33.333% - 150px);
  height: 400px;
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 100px;
  transition: transform 0.3s ease-in-out; /* Transition pour l'agrandissement */
  overflow: hidden; /* Empêcher l'image de déborder */
}

.circle-content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Centrer le contenu dans le cercle */
  text-align: center;
}

.circle-content img {
  max-width: 80%; /* Limite l'image à 80% du diamètre du cercle */
  max-height: 80%; /* Limite également la hauteur de l'image à 80% */
  object-fit: contain; /* L'image conserve ses proportions sans dépasser */
  border-radius: 50%; /* Crée un cercle avec l'image */
}

.circle-text {
  font-size: 1.5rem;
  font-weight: bold;
  color: #007bff;
  margin-top: 20px;
}

/* Texte supplémentaire qui apparaîtra lors du survol */
.additional-text {
  font-size: 1rem;
  color: #000000;
  font-weight: bold;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: opacity 0.3s ease-in-out;
  text-align: center;
  width: 150%;
  padding: 10px;
  white-space: normal; /* Permet d'afficher le texte en plusieurs lignes si nécessaire */
  z-index: 10; /* Met le texte au-dessus de l'image */
}

/* Affichage du texte supplémentaire lors du survol */
.circle-wrapper:hover .additional-text {
  opacity: 1; /* Affiche le texte lors du survol */
}

.circle-wrapper:hover .circle-content img {
  transform: scale(0.9); /* Réduit l'image lorsque le cercle grandit */
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

<!-- Zone d'affichage des fichiers Excel -->
<div id=\"excel-display\">
  <!-- L'iframe est initialement vide ou cachée -->
  <iframe src=\"\" width=\"100%\" height=\"1000px\" id=\"excel-iframe\" style=\"display: none;\"></iframe>

  <div id=\"circle-container\" class=\"circle-container\" style=\"display: none;\">
    <!-- Cercle 1 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"125\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/VS.jpg\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 25%</div>
        <div class=\"additional-text\">
          Je suis capable de créer des programmes simples en C et Python. 
          J'ai notamment travaillé sur des projets tels que la gestion de fonctions, la manipulation de tableaux, ainsi que l'implémentation d'algorithmes de tri.
        </div>
      </div>
    </div>
  
    <!-- Cercle 2 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"250\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/html.png\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 50%</div>
        <div class=\"additional-text\">Cercle 2 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 3 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"375\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"/Images/Symfony.png\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 75%</div>
        <div class=\"additional-text\">Cercle 3 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 4 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"0\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 100%</div>
        <div class=\"additional-text\">Cercle 4 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 5 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"125\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 25%</div>
        <div class=\"additional-text\">Cercle 5 - Détails supplémentaires ici</div>
      </div>
    </div>
  
    <!-- Cercle 6 -->
    <div class=\"circle-wrapper\">
      <svg width=\"100\" height=\"100\" viewBox=\"0 0 200 200\">
        <circle class=\"circle-outer\" cx=\"100\" cy=\"100\" r=\"80\" stroke-dasharray=\"500\" stroke-dashoffset=\"250\"></circle>
      </svg>
      <div class=\"circle-content\">
        <img src=\"https://via.placeholder.com/50\" alt=\"Image\">
        <div class=\"circle-text\">Taux : 50%</div>
        <div class=\"additional-text\">Cercle 6 - Détails supplémentaires ici</div>
      </div>
    </div>
  </div>
  

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    const circleContainer = document.getElementById('circle-container');
    
    // Changez ici les pourcentages directement dans le code
    const percentages = [80, 50, 75, 100, 25, 50]; // Exemple de pourcentages à changer
    const circles = document.querySelectorAll('.circle-wrapper');

    circles.forEach((circle, index) => {
      const percentage = percentages[index];
      const circlePercentage = circle.querySelector('.circle-text');
      const circleOuter = circle.querySelector('.circle-outer');
      
      // Mise à jour du texte de pourcentage
      circlePercentage.innerHTML = 'Taux : ' + percentage + '%';

      // Calculer le décalage de la bordure en fonction du pourcentage
      const strokeDashoffset = 500 * (1 - (percentage / 100));
      circleOuter.style.strokeDashoffset = strokeDashoffset;
    });

    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et montre les cercles
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
          circleContainer.style.display = 'flex';  // Affiche les cercles
        } else {
          iframe.style.display = 'block'; // Affiche l'iframe
          circleContainer.style.display = 'none'; // Cache les cercles
          
          // En fonction du bouton sélectionné, on met à jour l'iframe
          if (radio.id === 'btnradio2') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1F7H-plknB4YsNLRgMopjwkmjrCdHbkcNLFJrQFoMbW4/edit?gid=1855953082#gid=1855953082\"; 
          } else if (radio.id === 'btnradio3') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1qKpuegvfNUg6fcPG7Oy11UoUvwpVj2XTwtHyUZhUn-E/edit?gid=839854339#gid=839854339\"; 
          } else if (radio.id === 'btnradio4') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1ZdLV1ri1_kleUEuocoA9tXQY9MrwIAdsULnHH82jAZo/edit?gid=950138144#gid=950138144\"; 
          } else if (radio.id === 'btnradio5') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/18SVFn6QqukcF3lAKJx3seFBLkRjWqW23FSQl7dIv2vg/edit?gid=436640704#gid=436640704\"; 
          } else if (radio.id === 'btnradio6') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1fEXeeSLOkNZGP6erv5eQr0swqJoYxGOrb7N40QK20x0/edit?gid=1770696550#gid=1770696550\"; 
          } else if (radio.id === 'btnradio7') {
            iframe.src = \"https://docs.google.com/spreadsheets/d/1huByWpbRDLjIdHTadRLNR-r-NS_gNr-te9_tGEQzsdc/edit?gid=524815677#gid=524815677\"; 
          }
        }
      });
    });
  });
</script>

{% endblock %}
", "page/portfolio.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web (Complait)\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\portfolio.html.twig");
    }
}
