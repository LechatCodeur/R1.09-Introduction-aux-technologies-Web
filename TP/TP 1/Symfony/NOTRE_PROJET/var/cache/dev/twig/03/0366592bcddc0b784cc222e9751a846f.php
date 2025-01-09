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

/* page/présentation.html.twig */
class __TwigTemplate_9802fdbde13b428909822236c81e6d84 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/présentation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/présentation.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/présentation.html.twig", 1);
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

        yield "Page2";
        
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
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1, h2 {
            color: #333;
        }

        /* Section de présentation */
        .presentation {
            background: #fff;
            padding: 40px 0;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .presentation h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .presentation p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }
        /* Frise chronologique horizontale */
        /* Conteneur principal de la frise */
.timeline-container {
    position: relative;
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
    width: 100%;
    height: 150px; /* Hauteur réduite pour rapprocher les points de la ligne centrale */
    overflow: visible;
}

/* Éléments individuels de la frise */
.timeline-item {
    position: relative;
    width: 30%;
    text-align: center;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px 0;
}

/* Positionnement des points proches de la ligne centrale */
.timeline-item.top .timeline-point {
    top: -2px; /* Rapproche encore plus les points du haut de la ligne centrale */
}

.timeline-item.bottom .timeline-point {
    bottom: -2px; /* Rapproche encore plus les points du bas de la ligne centrale */
}

/* Points circulaires sur la frise */
.timeline-point {
    position: absolute;
    width: 16px;  /* Réduction de la taille des points */
    height: 16px;
    background-color: #007bff;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

/* Relier chaque point à la ligne principale avec une petite ligne verticale */
.timeline-point:after {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #007bff;
    z-index: -1;
}

.timeline-item.top .timeline-point:after {
    top: 100%;
    left: 50%;
    height: 40px; /* Hauteur de la ligne verticale pour les points du haut */
    transform: translateX(-50%);
}

.timeline-item.bottom .timeline-point:after {
    bottom: 100%;
    left: 50%;
    height: 40px; /* Hauteur de la ligne verticale pour les points du bas */
    transform: translateX(-50%);
}

/* Texte caché qui s'affiche au survol */
.timeline-text {
    display: none;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    padding: 15px;
    background-color: #f4f4f9;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 250px;
    font-size: 1rem;
    color: #333;
    text-align: left;
}

/* Affichage du texte lorsque l'on survole un point */
.timeline-item:hover .timeline-text {
    display: block;
}

.timeline-item:hover .timeline-point {
    transform: scale(1.2); /* Agrandissement du point au survol */
    background-color: #0056b3;
}

/* Pour améliorer la lisibilité */
.timeline-item h3 {
    font-size: 1.5rem;
    color: #333;
    margin-top: 10px;
    z-index: 1; /* Assure que le titre soit au-dessus du point */
    position: absolute; /* Position absolue pour éviter qu'il se superpose au point */
}

/* Texte positionné correctement selon que le point est en haut ou en bas */
.timeline-item.top .timeline-text {
    top: 35px; /* Texte positionné en dessous pour les points du haut */
}

.timeline-item.bottom .timeline-text {
    bottom: 35px; /* Texte positionné au-dessus pour les points du bas */
}

/* Positionnement du titre avec plus de distance entre le point et le titre */
.timeline-item.top h3 {
    top: -60px; /* Augmentation de la distance entre le point et le titre pour les points du haut */
    margin-top: 0;
}

.timeline-item.bottom h3 {
    bottom: -60px; /* Augmentation de la distance entre le point et le titre pour les points du bas */
    margin-bottom: 0;
}

/* Relier la ligne principale de la frise */
.timeline-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #007bff;
    z-index: 0;
}

/* Responsivité */
@media screen and (max-width: 768px) {
    .timeline-container {
        flex-direction: column;
    }
    .timeline-item {
        width: 100%;
        text-align: left;
    }
}


        /* Section loisirs */
        .loisirs {
            background: #fff;
            padding: 40px 0;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .loisirs h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .loisirs p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }

        /* Section de contact rapide */
        .contact-btn {
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        footer {
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;  /* Prendre toute la largeur */
    padding: 20px 0;
  }

  /* Si tu veux que le footer se colle toujours au bas de la page, même avec peu de contenu */
  body, html {
    height: 100%;
  }

  .container {
    min-height: 80%; /* Donner une hauteur minimale pour que le contenu ne pousse pas le footer vers le bas */
  }


</style>
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
  <div class=\"container-fluid\">
    <a class=\"navbar-brand\" href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">
      <img src=\"";
        // line 249
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        yield "\" alt=\"Description de l'image\" width=\"120px\" height=\"80px\">
    </a>
    <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor02\" aria-controls=\"navbarColor02\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarColor02\">
      <ul class=\"navbar-nav me-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 257
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"";
        // line 260
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page2");
        yield "\">Présentation</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 263
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page3");
        yield "\">Portfolio</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link\" href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page4");
        yield "\">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class=\"container\">

  <!-- Section de présentation -->
  <div class=\"presentation\">
      <h2>Bonjour, je suis [Ton Nom]</h2>
      <p>
          Je suis étudiant(e) en <strong>BUT Réseaux et Télécommunications</strong> et passionné(e) par le développement web, les nouvelles technologies, et l'innovation. Ce site est mon portfolio, où je mets en avant mes compétences, mes projets et mes passions.
      </p>
      <p>
          J'aime relever des défis, apprendre de nouvelles compétences et développer des solutions innovantes. Mon objectif est de contribuer à des projets intéressants qui ont un impact positif dans le monde numérique.
      </p>
  </div>

  <div class=\"timeline\">
    <h2>Mon parcours</h2>
    <div class=\"timeline-container\">
        <!-- Éléments de la frise -->
        <div class=\"timeline-item top\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                    Actuellement en formation au sein de l'Université de Jean Monnet a Roanne, je me spécialise dans les réseaux et les télécommunications.
                </div>
            </div>
            <h3>2024 - En cours : BUT Réseaux et Télécommunications</h3>
        </div>
        <div class=\"timeline-item bottom\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                  Au lycée, j'ai fait un bac technologique STI2D. Dans ma dernière année, dans le cadre de mon projet de fin d'année, j'ai participé à la compétition First Tech Challenge France
                </div>
            </div>
            <h3>2024 - 2019 : Baccalauréat technologique </h3>
        </div>
        <div class=\"timeline-item top\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                    Au collège j'ai pendant 2 ans fait le club journal ou j'ai rédigé quelque articles, ainsi que dans le cadre purement scolaire j'ai fait l'option latin pendant 3 ans
                </div>
            </div>
            <h3>2019 - 2014: Collège Jean Ferrat</h3>
        </div>
    </div>
</div>



  <!-- Section loisirs -->
  <div class=\"loisirs\">
      <h2>Mes loisirs</h2>
      <p>
          En dehors de mes études, j'aime consacrer du temps à mes loisirs. Je suis passionné(e) par :
      </p>
      <ul style=\"text-align: left; font-size: 1.2rem;\">
          <li><strong>La photographie :</strong> J'aime capturer les moments de la vie à travers mon objectif et explorer la beauté du monde qui m'entoure.</li>
          <li><strong>Le sport :</strong> Je pratique régulièrement la course à pied et le cyclisme pour rester actif et en bonne santé.</li>
          <li><strong>Le gaming :</strong> Le jeu vidéo est une de mes grandes passions, que ce soit pour me détendre ou pour expérimenter des mondes virtuels complexes.</li>
          <li><strong>Le développement personnel :</strong> J'adore lire des livres sur le développement personnel et la gestion de carrière pour améliorer constamment mes compétences.</li>
      </ul>
      <p>
          Ces activités me permettent de rester créatif(ve), équilibré(e) et motivé(e) pour mes projets professionnels et personnels.
      </p>
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
        return "page/présentation.html.twig";
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
        return array (  377 => 266,  371 => 263,  365 => 260,  359 => 257,  348 => 249,  344 => 248,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page2{% endblock %}

{% block body %}
<style>
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }

        h1, h2 {
            color: #333;
        }

        /* Section de présentation */
        .presentation {
            background: #fff;
            padding: 40px 0;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 40px;
        }

        .presentation h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .presentation p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }
        /* Frise chronologique horizontale */
        /* Conteneur principal de la frise */
.timeline-container {
    position: relative;
    display: flex;
    justify-content: space-between;
    margin-top: 50px;
    width: 100%;
    height: 150px; /* Hauteur réduite pour rapprocher les points de la ligne centrale */
    overflow: visible;
}

/* Éléments individuels de la frise */
.timeline-item {
    position: relative;
    width: 30%;
    text-align: center;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 20px 0;
}

/* Positionnement des points proches de la ligne centrale */
.timeline-item.top .timeline-point {
    top: -2px; /* Rapproche encore plus les points du haut de la ligne centrale */
}

.timeline-item.bottom .timeline-point {
    bottom: -2px; /* Rapproche encore plus les points du bas de la ligne centrale */
}

/* Points circulaires sur la frise */
.timeline-point {
    position: absolute;
    width: 16px;  /* Réduction de la taille des points */
    height: 16px;
    background-color: #007bff;
    border-radius: 50%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    transition: all 0.3s ease-in-out;
}

/* Relier chaque point à la ligne principale avec une petite ligne verticale */
.timeline-point:after {
    content: '';
    position: absolute;
    width: 2px;
    background-color: #007bff;
    z-index: -1;
}

.timeline-item.top .timeline-point:after {
    top: 100%;
    left: 50%;
    height: 40px; /* Hauteur de la ligne verticale pour les points du haut */
    transform: translateX(-50%);
}

.timeline-item.bottom .timeline-point:after {
    bottom: 100%;
    left: 50%;
    height: 40px; /* Hauteur de la ligne verticale pour les points du bas */
    transform: translateX(-50%);
}

/* Texte caché qui s'affiche au survol */
.timeline-text {
    display: none;
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    padding: 15px;
    background-color: #f4f4f9;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 250px;
    font-size: 1rem;
    color: #333;
    text-align: left;
}

/* Affichage du texte lorsque l'on survole un point */
.timeline-item:hover .timeline-text {
    display: block;
}

.timeline-item:hover .timeline-point {
    transform: scale(1.2); /* Agrandissement du point au survol */
    background-color: #0056b3;
}

/* Pour améliorer la lisibilité */
.timeline-item h3 {
    font-size: 1.5rem;
    color: #333;
    margin-top: 10px;
    z-index: 1; /* Assure que le titre soit au-dessus du point */
    position: absolute; /* Position absolue pour éviter qu'il se superpose au point */
}

/* Texte positionné correctement selon que le point est en haut ou en bas */
.timeline-item.top .timeline-text {
    top: 35px; /* Texte positionné en dessous pour les points du haut */
}

.timeline-item.bottom .timeline-text {
    bottom: 35px; /* Texte positionné au-dessus pour les points du bas */
}

/* Positionnement du titre avec plus de distance entre le point et le titre */
.timeline-item.top h3 {
    top: -60px; /* Augmentation de la distance entre le point et le titre pour les points du haut */
    margin-top: 0;
}

.timeline-item.bottom h3 {
    bottom: -60px; /* Augmentation de la distance entre le point et le titre pour les points du bas */
    margin-bottom: 0;
}

/* Relier la ligne principale de la frise */
.timeline-container::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    width: 100%;
    height: 2px;
    background-color: #007bff;
    z-index: 0;
}

/* Responsivité */
@media screen and (max-width: 768px) {
    .timeline-container {
        flex-direction: column;
    }
    .timeline-item {
        width: 100%;
        text-align: left;
    }
}


        /* Section loisirs */
        .loisirs {
            background: #fff;
            padding: 40px 0;
            margin-top: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .loisirs h2 {
            font-size: 2.5rem;
            color: #007bff;
        }

        .loisirs p {
            font-size: 1.2rem;
            color: #666;
            max-width: 800px;
            margin: 20px auto;
            line-height: 1.6;
        }

        /* Section de contact rapide */
        .contact-btn {
            margin-top: 30px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1.2rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        footer {
    position: relative;
    bottom: 0;
    left: 0;
    width: 100%;  /* Prendre toute la largeur */
    padding: 20px 0;
  }

  /* Si tu veux que le footer se colle toujours au bas de la page, même avec peu de contenu */
  body, html {
    height: 100%;
  }

  .container {
    min-height: 80%; /* Donner une hauteur minimale pour que le contenu ne pousse pas le footer vers le bas */
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
          <a class=\"nav-link\" href=\"{{ path('app_page1') }}\">Accueil</a>
        </li>
        <li class=\"nav-item\">
          <a class=\"nav-link active\" href=\"{{ path('app_page2') }}\">Présentation</a>
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
<div class=\"container\">

  <!-- Section de présentation -->
  <div class=\"presentation\">
      <h2>Bonjour, je suis [Ton Nom]</h2>
      <p>
          Je suis étudiant(e) en <strong>BUT Réseaux et Télécommunications</strong> et passionné(e) par le développement web, les nouvelles technologies, et l'innovation. Ce site est mon portfolio, où je mets en avant mes compétences, mes projets et mes passions.
      </p>
      <p>
          J'aime relever des défis, apprendre de nouvelles compétences et développer des solutions innovantes. Mon objectif est de contribuer à des projets intéressants qui ont un impact positif dans le monde numérique.
      </p>
  </div>

  <div class=\"timeline\">
    <h2>Mon parcours</h2>
    <div class=\"timeline-container\">
        <!-- Éléments de la frise -->
        <div class=\"timeline-item top\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                    Actuellement en formation au sein de l'Université de Jean Monnet a Roanne, je me spécialise dans les réseaux et les télécommunications.
                </div>
            </div>
            <h3>2024 - En cours : BUT Réseaux et Télécommunications</h3>
        </div>
        <div class=\"timeline-item bottom\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                  Au lycée, j'ai fait un bac technologique STI2D. Dans ma dernière année, dans le cadre de mon projet de fin d'année, j'ai participé à la compétition First Tech Challenge France
                </div>
            </div>
            <h3>2024 - 2019 : Baccalauréat technologique </h3>
        </div>
        <div class=\"timeline-item top\">
            <div class=\"timeline-point\">
                <div class=\"timeline-text\">
                    Au collège j'ai pendant 2 ans fait le club journal ou j'ai rédigé quelque articles, ainsi que dans le cadre purement scolaire j'ai fait l'option latin pendant 3 ans
                </div>
            </div>
            <h3>2019 - 2014: Collège Jean Ferrat</h3>
        </div>
    </div>
</div>



  <!-- Section loisirs -->
  <div class=\"loisirs\">
      <h2>Mes loisirs</h2>
      <p>
          En dehors de mes études, j'aime consacrer du temps à mes loisirs. Je suis passionné(e) par :
      </p>
      <ul style=\"text-align: left; font-size: 1.2rem;\">
          <li><strong>La photographie :</strong> J'aime capturer les moments de la vie à travers mon objectif et explorer la beauté du monde qui m'entoure.</li>
          <li><strong>Le sport :</strong> Je pratique régulièrement la course à pied et le cyclisme pour rester actif et en bonne santé.</li>
          <li><strong>Le gaming :</strong> Le jeu vidéo est une de mes grandes passions, que ce soit pour me détendre ou pour expérimenter des mondes virtuels complexes.</li>
          <li><strong>Le développement personnel :</strong> J'adore lire des livres sur le développement personnel et la gestion de carrière pour améliorer constamment mes compétences.</li>
      </ul>
      <p>
          Ces activités me permettent de rester créatif(ve), équilibré(e) et motivé(e) pour mes projets professionnels et personnels.
      </p>
  </div>
  <footer class=\"bg-dark text-white text-center py-4 mt-5\">
    <p>&copy; 2025 Hugo Sanchez Durante. Portfolio réalisé dans le cadre de la SAE 1.04 - BUT Réseaux et Télécommunications</p>
  </footer>
  
{% endblock %}
", "page/présentation.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\présentation.html.twig");
    }
}
