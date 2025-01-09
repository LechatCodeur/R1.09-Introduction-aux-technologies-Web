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

/* page/contact.html.twig */
class __TwigTemplate_f888ba043c2b42eb72e84901c5eccf21 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/contact.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/contact.html.twig", 1);
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

        yield "Page4";
        
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
  .contact-section {
            background: #f9f9f9;
            padding: 60px 0;
            border-radius: 10px;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 30px;
        }

        .contact-details {
            font-size: 1.2rem;
            margin-top: 30px;
        }
        
        .contact-details p {
            margin-bottom: 15px;
        }

        .social-icons {
            margin-top: 30px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .social-icons a {
            margin-right: 20px;
            display: inline-block;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2); /* Effet d'agrandissement au survol */
        }

        .social-icons img {
            width: 40px; /* Taille des icônes */
            height: 40px;
            transition: opacity 0.3s ease;
        }

        .social-icons a:hover img {
            opacity: 0.8;
        }
</style>
<nav class=\"navbar navbar-expand-lg bg-dark\" data-bs-theme=\"dark\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">
        <img src=\"";
        // line 59
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
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page1");
        yield "\">Accueil</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page2");
        yield "\">Présentation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page3");
        yield "\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page4");
        yield "\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container contact-section\">
    <div class=\"row\">
        <!-- Informations de contact -->
        <div class=\"col-lg-6\">
            <h2>Contactez-moi</h2>
            <div class=\"contact-details\">
                <p><strong>Email :</strong> <a href=\"mailto:hsanchezdurante@gmail.com\">hsanchezdurante@gmail.com</a></p>
                <p><strong>Téléphone :</strong> 06 77 64 23 74</p>
                <p><strong>Adresse :</strong> 9 Rue Louis Pergaud, Salaise-Sur-Sanne, France</p>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class=\"col-lg-6\">
            <h2>Retrouvez-moi sur</h2>
            <div class=\"social-icons\">
                <a href=\"https://github.com/LechatCodeur\" target=\"_blank\" title=\"GitHub\">
                    <img src=\"/Images/github.png\" alt=\"GitHub\">
                </a>
                <a href=\"https://www.linkedin.com/in/tonprofil\" target=\"_blank\" title=\"LinkedIn\">
                    <img src=\"/images/icons/linkedin-icon.png\" alt=\"LinkedIn\">
                </a>
                <a href=\"https://twitter.com/tonprofil\" target=\"_blank\" title=\"Twitter\">
                    <img src=\"/images/icons/twitter-icon.png\" alt=\"Twitter\">
                </a>
                <!-- Ajoute d'autres icônes si nécessaire -->
            </div>
        </div>
    </div>
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
        return "page/contact.html.twig";
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
        return array (  187 => 76,  181 => 73,  175 => 70,  169 => 67,  158 => 59,  154 => 58,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page4{% endblock %}

{% block body %}
<style>
  .contact-section {
            background: #f9f9f9;
            padding: 60px 0;
            border-radius: 10px;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 30px;
        }

        .contact-details {
            font-size: 1.2rem;
            margin-top: 30px;
        }
        
        .contact-details p {
            margin-bottom: 15px;
        }

        .social-icons {
            margin-top: 30px;
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }

        .social-icons a {
            margin-right: 20px;
            display: inline-block;
            transition: transform 0.3s ease, opacity 0.3s ease;
        }

        .social-icons a:hover {
            transform: scale(1.2); /* Effet d'agrandissement au survol */
        }

        .social-icons img {
            width: 40px; /* Taille des icônes */
            height: 40px;
            transition: opacity 0.3s ease;
        }

        .social-icons a:hover img {
            opacity: 0.8;
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
            <a class=\"nav-link\" href=\"{{ path('app_page2') }}\">Présentation</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('app_page3') }}\">Portfolio</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"{{ path('app_page4') }}\">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class=\"container contact-section\">
    <div class=\"row\">
        <!-- Informations de contact -->
        <div class=\"col-lg-6\">
            <h2>Contactez-moi</h2>
            <div class=\"contact-details\">
                <p><strong>Email :</strong> <a href=\"mailto:hsanchezdurante@gmail.com\">hsanchezdurante@gmail.com</a></p>
                <p><strong>Téléphone :</strong> 06 77 64 23 74</p>
                <p><strong>Adresse :</strong> 9 Rue Louis Pergaud, Salaise-Sur-Sanne, France</p>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class=\"col-lg-6\">
            <h2>Retrouvez-moi sur</h2>
            <div class=\"social-icons\">
                <a href=\"https://github.com/LechatCodeur\" target=\"_blank\" title=\"GitHub\">
                    <img src=\"/Images/github.png\" alt=\"GitHub\">
                </a>
                <a href=\"https://www.linkedin.com/in/tonprofil\" target=\"_blank\" title=\"LinkedIn\">
                    <img src=\"/images/icons/linkedin-icon.png\" alt=\"LinkedIn\">
                </a>
                <a href=\"https://twitter.com/tonprofil\" target=\"_blank\" title=\"Twitter\">
                    <img src=\"/images/icons/twitter-icon.png\" alt=\"Twitter\">
                </a>
                <!-- Ajoute d'autres icônes si nécessaire -->
            </div>
        </div>
    </div>
</div>
  <footer class=\"bg-dark text-white text-center py-4 mt-5\">
    <p>&copy; 2025 Hugo Sanchez Durante. Portfolio réalisé dans le cadre de la SAE 1.04 - BUT Réseaux et Télécommunications</p>
  </footer>

{% endblock %}
", "page/contact.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\contact.html.twig");
    }
}
