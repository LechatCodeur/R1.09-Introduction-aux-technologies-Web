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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("accueil"), "html", null, true);
        
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
    /* Agrandir la taille des icônes */
    .social-icon {
        width: 60px; /* Taille plus grande des icônes */
        height: 60px;
        object-fit: cover;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .social-icon:hover {
        transform: scale(1.2); /* Agrandir l'icône au survol */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Ajouter une ombre lors du survol */
    }

    /* Supprimer le cercle noir */
    .social-btn {
        padding: 0; /* Supprimer le padding pour ne pas avoir de cercle */
        transition: transform 0.3s ease;
    }

    .social-btn:hover {
        transform: scale(1.1);
    }
</style>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"mb-4 text-center\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("contact"), "html", null, true);
        yield "</h1>

            <!-- Informations de contact -->
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h4>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("informations_contact"), "html", null, true);
        yield "</h4>
                    <ul class=\"list-unstyled\">
                        <li><img src=\"Images/tel.png\" alt=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("telephone"), "html", null, true);
        yield "\" width=\"40px\" height=\"30px\" class=\"me-2\" /> <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("telephone"), "html", null, true);
        yield ":</strong> +33 6 77 64 23 74</li>
                        <li><img src=\"Images/house.png\" alt=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("adresse"), "html", null, true);
        yield "\" width=\"40px\" height=\"40px\" class=\"me-2\" /> <strong>";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("adresse"), "html", null, true);
        yield ":</strong> 9 Rue Louis Pergaud, Salaise-Sur-Sanne, France</li>
                    </ul>
                </div>
            </div>

            <hr class=\"my-5\">

            <!-- Réseaux sociaux -->
            <div class=\"text-center\">
                <h4>";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("retrouvez_moi"), "html", null, true);
        yield "</h4>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"https://github.com/LechatCodeur\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"Images/github.png\" alt=\"GitHub\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://www.linkedin.com/in/votre-nom\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"path/to/linkedin-icon.png\" alt=\"LinkedIn\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://twitter.com/votre-utilisateur\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"path/to/twitter-icon.png\" alt=\"Twitter\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://www.instagram.com/votre-utilisateur\" class=\"social-btn\" target=\"_blank\">
                        <img src=\"path/to/instagram-icon.png\" alt=\"Instagram\" class=\"social-icon\" />
                    </a>
                </div>
            </div>
        </div>
    </div>
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
        return array (  164 => 52,  150 => 43,  144 => 42,  139 => 40,  131 => 35,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'accueil'|trans }}{% endblock %}

{% block body %}
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
<style>
    /* Agrandir la taille des icônes */
    .social-icon {
        width: 60px; /* Taille plus grande des icônes */
        height: 60px;
        object-fit: cover;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .social-icon:hover {
        transform: scale(1.2); /* Agrandir l'icône au survol */
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Ajouter une ombre lors du survol */
    }

    /* Supprimer le cercle noir */
    .social-btn {
        padding: 0; /* Supprimer le padding pour ne pas avoir de cercle */
        transition: transform 0.3s ease;
    }

    .social-btn:hover {
        transform: scale(1.1);
    }
</style>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <h1 class=\"mb-4 text-center\">{{ 'contact'|trans }}</h1>

            <!-- Informations de contact -->
            <div class=\"card shadow-sm\">
                <div class=\"card-body\">
                    <h4>{{ 'informations_contact'|trans }}</h4>
                    <ul class=\"list-unstyled\">
                        <li><img src=\"Images/tel.png\" alt=\"{{ 'telephone'|trans }}\" width=\"40px\" height=\"30px\" class=\"me-2\" /> <strong>{{ 'telephone'|trans }}:</strong> +33 6 77 64 23 74</li>
                        <li><img src=\"Images/house.png\" alt=\"{{ 'adresse'|trans }}\" width=\"40px\" height=\"40px\" class=\"me-2\" /> <strong>{{ 'adresse'|trans }}:</strong> 9 Rue Louis Pergaud, Salaise-Sur-Sanne, France</li>
                    </ul>
                </div>
            </div>

            <hr class=\"my-5\">

            <!-- Réseaux sociaux -->
            <div class=\"text-center\">
                <h4>{{ 'retrouvez_moi'|trans }}</h4>
                <div class=\"d-flex justify-content-center\">
                    <a href=\"https://github.com/LechatCodeur\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"Images/github.png\" alt=\"GitHub\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://www.linkedin.com/in/votre-nom\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"path/to/linkedin-icon.png\" alt=\"LinkedIn\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://twitter.com/votre-utilisateur\" class=\"social-btn me-2\" target=\"_blank\">
                        <img src=\"path/to/twitter-icon.png\" alt=\"Twitter\" class=\"social-icon\" />
                    </a>
                    <a href=\"https://www.instagram.com/votre-utilisateur\" class=\"social-btn\" target=\"_blank\">
                        <img src=\"path/to/instagram-icon.png\" alt=\"Instagram\" class=\"social-icon\" />
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock %}
", "page/contact.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web (Complait)\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\contact.html.twig");
    }
}
