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

        yield "Présentation";
        
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
    }

    .container {
        width: 100%;
        padding: 0 20px;
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
    .timeline-container {
        position: relative;
        display: flex;
        justify-content: space-between;
        margin-top: 50px;
        width: 100%;
        height: 150px;
        overflow: visible;
    }

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

    .timeline-item.top .timeline-point {
        top: -2px;
    }

    .timeline-item.bottom .timeline-point {
        bottom: -2px;
    }

    .timeline-point {
        position: absolute;
        width: 16px;
        height: 16px;
        background-color: #007bff;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

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
        height: 40px;
        transform: translateX(-50%);
    }

    .timeline-item.bottom .timeline-point:after {
        bottom: 100%;
        left: 50%;
        height: 40px;
        transform: translateX(-50%);
    }

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

    .timeline-item:hover .timeline-text {
        display: block;
    }

    .timeline-item:hover .timeline-point {
        transform: scale(1.2);
        background-color: #0056b3;
    }

    .timeline-item h3 {
        font-size: 1.5rem;
        color: #333;
        margin-top: 10px;
        z-index: 1;
        position: absolute;
    }

    .timeline-item.top .timeline-text {
        top: 35px;
    }

    .timeline-item.bottom .timeline-text {
        bottom: 35px;
    }

    .timeline-item.top h3 {
        top: -60px;
        margin-top: 0;
    }

    .timeline-item.bottom h3 {
        bottom: -60px;
        margin-bottom: 0;
    }

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

    body, html {
        height: 100%;
    }

    .container {
        min-height: 80%;
    }

</style>


<div class=\"container\">

    <!-- Section de présentation -->
    <div class=\"presentation\">
        <h2>Bonjour, je suis Hugo Sanchez Durante</h2>
        <p>
            Je suis étudiant(e) en <strong>BUT Réseaux et Télécommunications</strong> et passionné(e) par le développement web, les nouvelles technologies, et l'innovation. Ce site est mon portfolio, où je mets en avant mes compétences, mes projets et mes passions.
        </p>
        <p>
            J'aime relever des défis, apprendre de nouvelles compétences et développer des solutions innovantes. Mon objectif est de contribuer à des projets intéressants qui ont un impact positif dans le monde numérique.
        </p>
    </div>

    <!-- Timeline -->
    <div class=\"timeline\">
        <h2>Mon parcours</h2>
        <div class=\"timeline-container\">
            <div class=\"timeline-item top\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Actuellement en formation au sein de l'Université de Jean Monnet à Roanne, je me spécialise dans les réseaux et les télécommunications.
                    </div>
                </div>
                <h3>2024 - En cours : BUT Réseaux et Télécommunications</h3>
            </div>
            <div class=\"timeline-item bottom\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Au lycée, j'ai fait un bac technologique STI2D. Dans ma dernière année, j'ai participé à la compétition First Tech Challenge France.
                    </div>
                </div>
                <h3>2024 - 2019 : Baccalauréat technologique</h3>
            </div>
            <div class=\"timeline-item top\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Au collège j'ai participé au club journal pendant 2 ans et j'ai fait l'option latin pendant 3 ans.
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
            <li><strong>Les jeux vidéo :</strong> Jeux de statègie en temps réels comme Starcraft II.</li>
            <li><strong>La lecture:</strong> Lire des romans.</li>
        </ul>
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Présentation{% endblock %}

{% block body %}
<style>
    html, body {
        height: 100%;
        margin: 0;
    }

    .container {
        width: 100%;
        padding: 0 20px;
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
    .timeline-container {
        position: relative;
        display: flex;
        justify-content: space-between;
        margin-top: 50px;
        width: 100%;
        height: 150px;
        overflow: visible;
    }

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

    .timeline-item.top .timeline-point {
        top: -2px;
    }

    .timeline-item.bottom .timeline-point {
        bottom: -2px;
    }

    .timeline-point {
        position: absolute;
        width: 16px;
        height: 16px;
        background-color: #007bff;
        border-radius: 50%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease-in-out;
    }

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
        height: 40px;
        transform: translateX(-50%);
    }

    .timeline-item.bottom .timeline-point:after {
        bottom: 100%;
        left: 50%;
        height: 40px;
        transform: translateX(-50%);
    }

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

    .timeline-item:hover .timeline-text {
        display: block;
    }

    .timeline-item:hover .timeline-point {
        transform: scale(1.2);
        background-color: #0056b3;
    }

    .timeline-item h3 {
        font-size: 1.5rem;
        color: #333;
        margin-top: 10px;
        z-index: 1;
        position: absolute;
    }

    .timeline-item.top .timeline-text {
        top: 35px;
    }

    .timeline-item.bottom .timeline-text {
        bottom: 35px;
    }

    .timeline-item.top h3 {
        top: -60px;
        margin-top: 0;
    }

    .timeline-item.bottom h3 {
        bottom: -60px;
        margin-bottom: 0;
    }

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

    body, html {
        height: 100%;
    }

    .container {
        min-height: 80%;
    }

</style>


<div class=\"container\">

    <!-- Section de présentation -->
    <div class=\"presentation\">
        <h2>Bonjour, je suis Hugo Sanchez Durante</h2>
        <p>
            Je suis étudiant(e) en <strong>BUT Réseaux et Télécommunications</strong> et passionné(e) par le développement web, les nouvelles technologies, et l'innovation. Ce site est mon portfolio, où je mets en avant mes compétences, mes projets et mes passions.
        </p>
        <p>
            J'aime relever des défis, apprendre de nouvelles compétences et développer des solutions innovantes. Mon objectif est de contribuer à des projets intéressants qui ont un impact positif dans le monde numérique.
        </p>
    </div>

    <!-- Timeline -->
    <div class=\"timeline\">
        <h2>Mon parcours</h2>
        <div class=\"timeline-container\">
            <div class=\"timeline-item top\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Actuellement en formation au sein de l'Université de Jean Monnet à Roanne, je me spécialise dans les réseaux et les télécommunications.
                    </div>
                </div>
                <h3>2024 - En cours : BUT Réseaux et Télécommunications</h3>
            </div>
            <div class=\"timeline-item bottom\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Au lycée, j'ai fait un bac technologique STI2D. Dans ma dernière année, j'ai participé à la compétition First Tech Challenge France.
                    </div>
                </div>
                <h3>2024 - 2019 : Baccalauréat technologique</h3>
            </div>
            <div class=\"timeline-item top\">
                <div class=\"timeline-point\">
                    <div class=\"timeline-text\">
                        Au collège j'ai participé au club journal pendant 2 ans et j'ai fait l'option latin pendant 3 ans.
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
            <li><strong>Les jeux vidéo :</strong> Jeux de statègie en temps réels comme Starcraft II.</li>
            <li><strong>La lecture:</strong> Lire des romans.</li>
        </ul>
    </div>
</div>
{% endblock %}
", "page/présentation.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\présentation.html.twig");
    }
}
