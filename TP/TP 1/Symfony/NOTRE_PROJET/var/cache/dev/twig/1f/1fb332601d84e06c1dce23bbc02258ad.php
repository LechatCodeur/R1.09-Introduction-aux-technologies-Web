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

        yield "Page3";
        
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
  
</style>
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">
      <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Description de l'image\" width=\"120px\" height=\"80px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"";
        // line 20
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page2");
        yield "\">Présentation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 26
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page3");
        yield "\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page4");
        yield "\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
</div>

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    
    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et on vide son contenu
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
        } else {
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

<!-- Footer -->
<footer class=\"bg-dark text-white text-center py-4 mt-5\">
  <p>&copy; 2025 Hugo Sanchez Durante. Portfolio réalisé dans le cadre de la SAE 1.04 - BUT Réseaux et Télécommunications</p>
</footer>

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
        return array (  140 => 29,  134 => 26,  128 => 23,  122 => 20,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page3{% endblock %}

{% block body %}
<style>
  
</style>
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"{{ path('app_page1') }}\">
      <img src=\"{{ asset('images/logo.png') }}\" alt=\"Description de l'image\" width=\"120px\" height=\"80px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link \" href=\"{{ path('app_page1') }}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_page2') }}\">Présentation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ path('app_page3') }}\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"{{ path('app_page4') }}\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

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
</div>

<!-- JavaScript pour gérer les changements de bouton radio -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const iframe = document.getElementById('excel-iframe');
    
    // Écouteur d'événements pour le changement des boutons radio
    document.querySelectorAll('input[name=\"btnradio\"]').forEach(radio => {
      radio.addEventListener('change', function () {
        // Si le bouton \"Rien\" est sélectionné, on cache l'iframe et on vide son contenu
        if (radio.id === 'btnradioNothing') {
          iframe.style.display = 'none';  // Cache l'iframe
          iframe.src = '';  // Vide le contenu de l'iframe
        } else {
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

<!-- Footer -->
<footer class=\"bg-dark text-white text-center py-4 mt-5\">
  <p>&copy; 2025 Hugo Sanchez Durante. Portfolio réalisé dans le cadre de la SAE 1.04 - BUT Réseaux et Télécommunications</p>
</footer>

{% endblock %}
", "page/portfolio.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\portfolio.html.twig");
    }
}
