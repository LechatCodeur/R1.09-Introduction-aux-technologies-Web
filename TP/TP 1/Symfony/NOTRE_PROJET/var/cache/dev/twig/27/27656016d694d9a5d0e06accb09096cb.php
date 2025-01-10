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

/* page/accueil.html.twig */
class __TwigTemplate_79bb1dec90c6d4ffa3f507bab595d58a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/accueil.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/accueil.html.twig", 1);
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

        yield "Acceuil";
        
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
        yield "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<style>
  .hero-section {
    background: linear-gradient(135deg, #4e73df, #1cc88a);
    color: white;
    padding: 50px 0;
    border-radius: 10px;
  }
  .hero-section h1 {
    font-size: 3rem;
    font-weight: 700;
  }
  .lead {
    font-size: 1.25rem;
    max-width: 600px;
    margin: 0 auto;
  }
  .section-title {
    font-size: 2rem;
    font-weight: 600;
    color: #333;
  }
  .btn-primary-custom {
    background-color: #007bff;
    border-color: #007bff;
  }
  .btn-primary-custom:hover {
    background-color: #0056b3;
    border-color: #004085;
  }
  .section {
    margin-top: 50px;
  }

  /* Amélioration de la section À propos */
  .about-section {
    background-color: #f8f9fc; /* Fond clair pour améliorer la lisibilité */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  .about-section p {
    font-size: 1.125rem;
    color: #4e4e4e; /* Texte plus sombre pour une meilleure lisibilité */
    line-height: 1.6;
  }
  .about-section p strong {
    color: #333; /* Accentuation des mots-clés */
  }
  .about-section h2 {
    color: #1cc88a; /* Titre de la section avec une couleur plus vive */
  }
</style>
<div class=\"container py-5\">
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class=\"lead\">Ce site a été créé dans le cadre de la <strong>SAE 1.04</strong> de mon programme <strong>BUT Réseaux et Télécommunications</strong>. L'objectif de cette SAE est de réaliser un portfolio personnel en ligne pour mettre en avant mes compétences et projets.</p>
    </header>

    <section class=\"section about-section\">
        <h2 class=\"section-title mb-4\">À propos de la SAE 1.04</h2>
        <p class=\"text-body mb-3\">
            La <strong>SAE 1.04</strong> fait partie de mon programme d'étude en <strong>BUT Réseaux et Télécommunications</strong>. L'objectif est de concevoir et de développer un site web personnel, en utilisant des technologies comme <strong>HTML</strong>, <strong>CSS</strong>, et <strong>JavaScript</strong>, pour créer un portfolio en ligne. Ce projet permet de démontrer les compétences acquises au cours de la formation et de les mettre en valeur de manière professionnelle.
        </p>
        <p class=\"text-body mb-3\">
            Dans ce portfolio, vous trouverez des informations sur mes compétences, mes projets réalisés pendant ma formation, et mes objectifs professionnels. Ce site est également un moyen pour moi de pratiquer mes compétences en développement web et de mettre en œuvre des bonnes pratiques dans la création de sites modernes et fonctionnels.
        </p>
    </section>
</div>

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
        return "page/accueil.html.twig";
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

{% block title %}Acceuil{% endblock %}

{% block body %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<style>
  .hero-section {
    background: linear-gradient(135deg, #4e73df, #1cc88a);
    color: white;
    padding: 50px 0;
    border-radius: 10px;
  }
  .hero-section h1 {
    font-size: 3rem;
    font-weight: 700;
  }
  .lead {
    font-size: 1.25rem;
    max-width: 600px;
    margin: 0 auto;
  }
  .section-title {
    font-size: 2rem;
    font-weight: 600;
    color: #333;
  }
  .btn-primary-custom {
    background-color: #007bff;
    border-color: #007bff;
  }
  .btn-primary-custom:hover {
    background-color: #0056b3;
    border-color: #004085;
  }
  .section {
    margin-top: 50px;
  }

  /* Amélioration de la section À propos */
  .about-section {
    background-color: #f8f9fc; /* Fond clair pour améliorer la lisibilité */
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  .about-section p {
    font-size: 1.125rem;
    color: #4e4e4e; /* Texte plus sombre pour une meilleure lisibilité */
    line-height: 1.6;
  }
  .about-section p strong {
    color: #333; /* Accentuation des mots-clés */
  }
  .about-section h2 {
    color: #1cc88a; /* Titre de la section avec une couleur plus vive */
  }
</style>
<div class=\"container py-5\">
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class=\"lead\">Ce site a été créé dans le cadre de la <strong>SAE 1.04</strong> de mon programme <strong>BUT Réseaux et Télécommunications</strong>. L'objectif de cette SAE est de réaliser un portfolio personnel en ligne pour mettre en avant mes compétences et projets.</p>
    </header>

    <section class=\"section about-section\">
        <h2 class=\"section-title mb-4\">À propos de la SAE 1.04</h2>
        <p class=\"text-body mb-3\">
            La <strong>SAE 1.04</strong> fait partie de mon programme d'étude en <strong>BUT Réseaux et Télécommunications</strong>. L'objectif est de concevoir et de développer un site web personnel, en utilisant des technologies comme <strong>HTML</strong>, <strong>CSS</strong>, et <strong>JavaScript</strong>, pour créer un portfolio en ligne. Ce projet permet de démontrer les compétences acquises au cours de la formation et de les mettre en valeur de manière professionnelle.
        </p>
        <p class=\"text-body mb-3\">
            Dans ce portfolio, vous trouverez des informations sur mes compétences, mes projets réalisés pendant ma formation, et mes objectifs professionnels. Ce site est également un moyen pour moi de pratiquer mes compétences en développement web et de mettre en œuvre des bonnes pratiques dans la création de sites modernes et fonctionnels.
        </p>
    </section>
</div>

{% endblock %}
", "page/accueil.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\accueil.html.twig");
    }
}
