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
  .about-section {
    background-color: #f8f9fc;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  .about-section p {
    font-size: 1.125rem;
    color: #4e4e4e;
    line-height: 1.6;
  }
  .about-section p strong {
    color: #333;
  }
  .about-section h2 {
    color: #1cc88a;
  }
  .link {
    align: center;
    color: #c81c1c;
  }
</style>
<div class=\"container py-5\">
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("bienvenue_portfolio"), "html", null, true);
        yield "</h1>
        <p class=\"lead\">
            ";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("objectif_projet"), "html", null, true);
        yield "
            <strong>";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("sae_1_04"), "html", null, true);
        yield "</strong>
            ";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("but_reseaux_telecommunications"), "html", null, true);
        yield "
            ";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("objectif_projet"), "html", null, true);
        yield "
        </p>
    </header>

    <section class=\"section about-section\">
        <h2 class=\"section-title mb-4\">";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("a_propos_sae_1_04"), "html", null, true);
        yield "</h2>
        <p class=\"text-body mb-3\">
            ";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("description_sae_1_04"), "html", null, true);
        yield "
        </p>
        <p class=\"text-body mb-3\">
            ";
        // line 78
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("portfolio_objectif"), "html", null, true);
        yield "
        </p>
        
        <a class=\"link\" href=\"";
        // line 81
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_page2");
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("en_savoir_plus"), "html", null, true);
        yield "</a>
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
        return array (  201 => 81,  195 => 78,  189 => 75,  184 => 73,  176 => 68,  172 => 67,  168 => 66,  164 => 65,  159 => 63,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'accueil'|trans }}{% endblock %}

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
  .about-section {
    background-color: #f8f9fc;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }
  .about-section p {
    font-size: 1.125rem;
    color: #4e4e4e;
    line-height: 1.6;
  }
  .about-section p strong {
    color: #333;
  }
  .about-section h2 {
    color: #1cc88a;
  }
  .link {
    align: center;
    color: #c81c1c;
  }
</style>
<div class=\"container py-5\">
    <header class=\"hero-section text-center rounded-3 mb-5\">
        <h1>{{ 'bienvenue_portfolio'|trans }}</h1>
        <p class=\"lead\">
            {{ 'objectif_projet'|trans }}
            <strong>{{ 'sae_1_04'|trans }}</strong>
            {{ 'but_reseaux_telecommunications'|trans }}
            {{ 'objectif_projet'|trans }}
        </p>
    </header>

    <section class=\"section about-section\">
        <h2 class=\"section-title mb-4\">{{ 'a_propos_sae_1_04'|trans }}</h2>
        <p class=\"text-body mb-3\">
            {{ 'description_sae_1_04'|trans }}
        </p>
        <p class=\"text-body mb-3\">
            {{ 'portfolio_objectif'|trans }}
        </p>
        
        <a class=\"link\" href=\"{{ path('app_page2') }}\">{{ 'en_savoir_plus'|trans }}</a>
    </section>
</div>

{% endblock %}
", "page/accueil.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web (Complait)\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\accueil.html.twig");
    }
}
