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

        yield "Page1";
        
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
        /* Espacement entre les sections */
        .section {
            margin-top: 50px;
        }
</style>
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">
        <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Description de l'image\" width=\"120px\" height=\"80px\">
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
        <ul class=\"navbar-nav me-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page2");
        yield "\">Présentation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page3");
        yield "\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 60
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page4");
        yield "\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container py-5\">

    <!-- En-tête : Hero Section -->
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class=\"lead\">Ce site a été créé dans le cadre de la <strong>SAE 1.04</strong> de mon programme <strong>BUT Réseaux et Télécommunications</strong>. L'objectif de cette SAE est de réaliser un portfolio personnel en ligne pour mettre en avant mes compétences et projets.</p>
    </header>

    <!-- Introduction à la SAE 1.04 -->
    <section class=\"section\">
        <h2 class=\"section-title mb-4\">À propos de la SAE 1.04</h2>
        <p class=\"text-body mb-3\">
            La <strong>SAE 1.04</strong> fait partie de mon programme d'étude en <strong>BUT Réseaux et Télécommunications</strong>. L'objectif est de concevoir et de développer un site web personnel, en utilisant des technologies comme <strong>HTML</strong>, <strong>CSS</strong>, et <strong>JavaScript</strong>, pour créer un portfolio en ligne. Ce projet permet de démontrer les compétences acquises au cours de la formation et de les mettre en valeur de manière professionnelle.
        </p>
        <p class=\"text-body mb-3\">
            Dans ce portfolio, vous trouverez des informations sur mes compétences, mes projets réalisés pendant ma formation, et mes objectifs professionnels. Ce site est également un moyen pour moi de pratiquer mes compétences en développement web et de mettre en œuvre des bonnes pratiques dans la création de sites modernes et fonctionnels.
        </p>
    </section>

</div>
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
        return array (  171 => 60,  165 => 57,  159 => 54,  153 => 51,  142 => 43,  138 => 42,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page1{% endblock %}

{% block body %}
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
        /* Espacement entre les sections */
        .section {
            margin-top: 50px;
        }
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
            <a class=\"nav-link active\" href=\"{{ path('app_page1') }}\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_page2') }}\">Présentation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_page3') }}\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_page4') }}\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container py-5\">

    <!-- En-tête : Hero Section -->
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>Bienvenue sur mon Portfolio</h1>
        <p class=\"lead\">Ce site a été créé dans le cadre de la <strong>SAE 1.04</strong> de mon programme <strong>BUT Réseaux et Télécommunications</strong>. L'objectif de cette SAE est de réaliser un portfolio personnel en ligne pour mettre en avant mes compétences et projets.</p>
    </header>

    <!-- Introduction à la SAE 1.04 -->
    <section class=\"section\">
        <h2 class=\"section-title mb-4\">À propos de la SAE 1.04</h2>
        <p class=\"text-body mb-3\">
            La <strong>SAE 1.04</strong> fait partie de mon programme d'étude en <strong>BUT Réseaux et Télécommunications</strong>. L'objectif est de concevoir et de développer un site web personnel, en utilisant des technologies comme <strong>HTML</strong>, <strong>CSS</strong>, et <strong>JavaScript</strong>, pour créer un portfolio en ligne. Ce projet permet de démontrer les compétences acquises au cours de la formation et de les mettre en valeur de manière professionnelle.
        </p>
        <p class=\"text-body mb-3\">
            Dans ce portfolio, vous trouverez des informations sur mes compétences, mes projets réalisés pendant ma formation, et mes objectifs professionnels. Ce site est également un moyen pour moi de pratiquer mes compétences en développement web et de mettre en œuvre des bonnes pratiques dans la création de sites modernes et fonctionnels.
        </p>
    </section>

</div>
<footer class=\"bg-dark text-white text-center py-4 mt-5\">
  <p>&copy; 2025 Hugo Sanchez Durante. Portfolio réalisé dans le cadre de la SAE 1.04 - BUT Réseaux et Télécommunications</p>
</footer>

{% endblock %}
", "page/accueil.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\accueil.html.twig");
    }
}
