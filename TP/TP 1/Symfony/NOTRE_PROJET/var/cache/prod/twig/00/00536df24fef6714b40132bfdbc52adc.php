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
class __TwigTemplate_d100dbb87f2fcd318ddcde23d433360a extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "page/contact.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield "Contact";
        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "<style>
  /* Section de contact */
  .contact-section {
    background: #f9f9f9;
    padding: 30px 20px; /* Réduction du padding pour tout tenir dans un seul écran */
    border-radius: 10px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    max-width: 960px; /* Limite la largeur de la section */
    margin: 0 auto; /* Centre la section horizontalement */
  }

  .contact-section h2 {
    font-size: 2rem; /* Taille modifiée pour s'adapter à la taille de l'écran */
    font-weight: 600;
    color: #333;
    margin-bottom: 20px; /* Moins de marge pour tout tenir sur un seul écran */
    text-align: center;
  }

  .contact-details {
    font-size: 1rem; /* Taille plus petite pour tenir tout sur un seul écran */
    color: #555;
  }

  .contact-details p {
    margin-bottom: 10px;
  }

  .contact-details a {
    color: #007bff;
    text-decoration: none;
  }

  .contact-details a:hover {
    text-decoration: underline;
  }

  /* Icônes de réseaux sociaux */
  .social-icons {
    margin-top: 20px; /* Réduction du margin pour garder de l'espace */
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .social-icons a {
    margin: 0 10px;
    display: inline-block;
    transition: transform 0.3s ease, opacity 0.3s ease;
  }

  .social-icons a:hover {
    transform: scale(1.2); /* Effet d'agrandissement au survol */
  }

  .social-icons img {
    width: 45px;
    height: 45px;
    transition: opacity 0.3s ease;
  }

  .social-icons a:hover img {
    opacity: 0.8;
  }

  /* Pour centrer la boîte de contenu verticalement et horizontalement */
  .contact-page-wrapper {
    display: flex;
    justify-content: center; /* Centre horizontalement */
    align-items: center; /* Centre verticalement */
    height: 100vh; /* Hauteur de la fenêtre pour tenir sur un seul écran */
    padding: 0 20px; /* Espacement horizontal */
    overflow: hidden; /* Empêche le défilement */
  }

  /* Pour les petites tailles d'écran */
  @media (max-width: 767px) {
    .contact-section {
      padding: 20px; /* Moins de padding sur mobile */
    }

    .contact-section h2 {
      font-size: 1.6rem; /* Taille plus petite sur mobile */
    }

    .contact-details {
      font-size: 0.9rem; /* Plus petit sur mobile */
    }

    .social-icons img {
      width: 35px;
      height: 35px; /* Taille réduite des icônes sur mobile */
    }
  }
</style>

<div class=\"contact-page-wrapper\">
  <div class=\"container contact-section\">
    <div class=\"row\">
        <!-- Informations de contact -->
        <div class=\"col-md-6 col-12 mb-4\">
            <h2>Contactez-moi</h2>
            <div class=\"contact-details\">
                <p><strong>Email :</strong> <a href=\"mailto:hsanchezdurante@gmail.com\">hsanchezdurante@gmail.com</a></p>
                <p><strong>Téléphone :</strong> 06 77 64 23 74</p>
                <p><strong>Adresse :</strong> 9 Rue Louis Pergaud, Salaise-Sur-Sanne, France</p>
            </div>
        </div>

        <!-- Réseaux sociaux -->
        <div class=\"col-md-6 col-12\">
            <h2>Retrouvez-moi sur</h2>
            <div class=\"social-icons\">
                <a href=\"https://github.com/LechatCodeur\" target=\"_blank\" title=\"GitHub\">
                    <img src=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/github.png"), "html", null, true);
        yield "\" alt=\"GitHub\">
                </a>
                <a href=\"https://www.linkedin.com/in/tonprofil\" target=\"_blank\" title=\"LinkedIn\">
                    <img src=\"";
        // line 123
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/linkedin-icon.png"), "html", null, true);
        yield "\" alt=\"LinkedIn\">
                </a>
                <a href=\"https://twitter.com/tonprofil\" target=\"_blank\" title=\"Twitter\">
                    <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/icons/twitter-icon.png"), "html", null, true);
        yield "\" alt=\"Twitter\">
                </a>
                <!-- Ajoute d'autres icônes si nécessaire -->
            </div>
        </div>
    </div>
  </div>
</div>

";
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
        return array (  198 => 126,  192 => 123,  186 => 120,  70 => 6,  63 => 5,  52 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "page/contact.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\contact.html.twig");
    }
}
