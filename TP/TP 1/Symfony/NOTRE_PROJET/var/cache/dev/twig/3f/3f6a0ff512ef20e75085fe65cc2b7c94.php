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

/* page/cv.html.twig */
class __TwigTemplate_fe59a74d75b66a4a65738e9e6f09f732 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/cv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/cv.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cv_title"), "html", null, true);
        
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
        yield "    <div class=\"container my-5\" style=\"background: #f7f7f7; padding: 40px; border-radius: 10px; max-width: 900px; margin: 0 auto;\">
        <header class=\"text-center mb-5\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-md-12\">
                    <h1 class=\"display-4 text-primary font-weight-bold\">";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cv_title"), "html", null, true);
        yield "</h1>
                    <p class=\"lead text-muted\">";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cv_description"), "html", null, true);
        yield "</p>
                    <p class=\"font-weight-bold text-info\" style=\"font-size: 18px;\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dream_job_title"), "html", null, true);
        yield ": <span class=\"text-primary\">Responsable des Réseaux et Télécommunications</span></p>
                </div>
            </div>
        </header>

        <!-- Section Formations -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations_title"), "html", null, true);
        yield "</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.0"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.1"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.2"), "html", null, true);
        yield "</li>
            </ul>
        </section>

        <!-- Section Expériences Professionnelles -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences_title"), "html", null, true);
        yield "</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences.0"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences.1"), "html", null, true);
        yield "</li>
            </ul>
        </section>

        <!-- Section Compétences -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences_title"), "html", null, true);
        yield "</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.0"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.1"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.2"), "html", null, true);
        yield "</li>
                <li class=\"list-group-item\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.3"), "html", null, true);
        yield "</li>
            </ul>
        </section>

        <!-- Bouton pour télécharger le CV en PDF -->
        <div class=\"text-center mb-5\">
            <button class=\"btn btn-primary\" id=\"show-form-btn\">";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download_cv"), "html", null, true);
        yield "</button>
        </div>

        <!-- Formulaire Modale -->
        <div id=\"form-popup\" class=\"form-popup\">
            <div class=\"form-popup-content card\" style=\"max-width: 500px; padding: 20px;\">
                <h3 class=\"text-center text-info\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_title"), "html", null, true);
        yield "</h3>
                <form id=\"pdf-form-content\">
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_name"), "html", null, true);
        yield "</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_email"), "html", null, true);
        yield "</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_message"), "html", null, true);
        yield "</label>
                        <textarea class=\"form-control\" id=\"message\" rows=\"3\" required></textarea>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\">";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_generate_pdf"), "html", null, true);
        yield "</button>
                        <button type=\"button\" id=\"close-form\" class=\"btn btn-danger ms-2\">";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form_close"), "html", null, true);
        yield "</button>
                    </div>
                </form>
            </div>
        </div>

    </div> <!-- Fin du conteneur principal -->

    <script src=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jspdf.umd.min.js"), "html", null, true);
        yield "\"></script>
    <script>
        // Afficher le formulaire pop-up
        document.getElementById('show-form-btn').addEventListener('click', function () {
            document.getElementById('form-popup').style.display = 'flex';
        });

        // Fermer la pop-up
        document.getElementById('close-form').addEventListener('click', function () {
            document.getElementById('form-popup').style.display = 'none';
        });

        // Soumettre le formulaire et générer le PDF
        document.getElementById('pdf-form-content').addEventListener('submit', function (event) {
            event.preventDefault();  // Empêcher le formulaire de se soumettre normalement

            // Récupérer les informations du formulaire
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Générer le PDF
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Centrer le texte \"CV de Hugo Sanchez Durante\" sur le PDF
            doc.setFontSize(22);
            doc.setTextColor(34, 68, 122);  // Couleur de texte
            const title = \"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cv_title"), "html", null, true);
        yield "\";
            const pageWidth = doc.internal.pageSize.width;
            const titleWidth = doc.getTextWidth(title);
            doc.text(title, (pageWidth - titleWidth) / 2, 20);  // Centrer le titre

            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.text(\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("cv_description"), "html", null, true);
        yield "\", 20, 30);
            
            // Intitulé du poste
            doc.setFontSize(14);
            doc.setTextColor(0, 123, 255);  // Bleu pour l'intitulé
            doc.text(\"";
        // line 119
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("dream_job_title"), "html", null, true);
        yield "\", 20, 40);
            
            // Section Formations
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);  // Couleur de fond bleu
            doc.rect(20, 45, 180, 8, 'F');  // Rectangle de fond
            doc.setTextColor(255, 255, 255);  // Texte blanc sur fond bleu
            doc.text(\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations_title"), "html", null, true);
        yield "\", 22, 50);
            doc.setTextColor(0, 0, 0);  // Remettre la couleur de texte normale
            doc.setFontSize(12);
            doc.text(\"• ";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.0"), "html", null, true);
        yield "\", 20, 60);  
            doc.text(\"• ";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.1"), "html", null, true);
        yield "\", 20, 70);  
            doc.text(\"• ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("formations.2"), "html", null, true);
        yield "\", 20, 80);  

            // Section Expériences professionnelles
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);
            doc.rect(20, 85, 180, 8, 'F');
            doc.setTextColor(255, 255, 255);
            doc.text(\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences_title"), "html", null, true);
        yield "\", 22, 90);
            doc.setTextColor(0, 0, 0);
            doc.setFontSize(12);
            doc.text(\"• ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences.0"), "html", null, true);
        yield "\", 20, 100);
            doc.text(\"• ";
        // line 142
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("experiences.1"), "html", null, true);
        yield "\", 20, 110);

            // Section Compétences
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);
            doc.rect(20, 115, 180, 8, 'F');
            doc.setTextColor(255, 255, 255);
            doc.text(\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences_title"), "html", null, true);
        yield "\", 22, 120);
            doc.setTextColor(0, 0, 0);
            doc.setFontSize(12);
            doc.text(\"• ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.0"), "html", null, true);
        yield "\", 20, 130);
            doc.text(\"• ";
        // line 153
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.1"), "html", null, true);
        yield "\", 20, 140);
            doc.text(\"• ";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.2"), "html", null, true);
        yield "\", 20, 150);
            doc.text(\"• ";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("competences.3"), "html", null, true);
        yield "\", 20, 160);

            // Télécharger le fichier PDF
            doc.save('CV_Hugo_Sanchez_Durante.pdf');

            // Masquer la pop-up après téléchargement
            document.getElementById('form-popup').style.display = 'none';
        });
    </script>

    <style>
        /* Style pour la pop-up (formulaire) */
        .form-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .form-popup-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

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
        return "page/cv.html.twig";
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
        return array (  362 => 155,  358 => 154,  354 => 153,  350 => 152,  344 => 149,  334 => 142,  330 => 141,  324 => 138,  314 => 131,  310 => 130,  306 => 129,  300 => 126,  290 => 119,  282 => 114,  272 => 107,  241 => 79,  230 => 71,  226 => 70,  219 => 66,  212 => 62,  205 => 58,  199 => 55,  190 => 49,  181 => 43,  177 => 42,  173 => 41,  169 => 40,  164 => 38,  155 => 32,  151 => 31,  146 => 29,  137 => 23,  133 => 22,  129 => 21,  124 => 19,  114 => 12,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ 'cv_title'|trans }}{% endblock %}

{% block body %}
    <div class=\"container my-5\" style=\"background: #f7f7f7; padding: 40px; border-radius: 10px; max-width: 900px; margin: 0 auto;\">
        <header class=\"text-center mb-5\">
            <div class=\"row align-items-center justify-content-center\">
                <div class=\"col-md-12\">
                    <h1 class=\"display-4 text-primary font-weight-bold\">{{ 'cv_title'|trans }}</h1>
                    <p class=\"lead text-muted\">{{ 'cv_description'|trans }}</p>
                    <p class=\"font-weight-bold text-info\" style=\"font-size: 18px;\">{{ 'dream_job_title'|trans }}: <span class=\"text-primary\">Responsable des Réseaux et Télécommunications</span></p>
                </div>
            </div>
        </header>

        <!-- Section Formations -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">{{ 'formations_title'|trans }}</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{{ 'formations.0'|trans }}</li>
                <li class=\"list-group-item\">{{ 'formations.1'|trans }}</li>
                <li class=\"list-group-item\">{{ 'formations.2'|trans }}</li>
            </ul>
        </section>

        <!-- Section Expériences Professionnelles -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">{{ 'experiences_title'|trans }}</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{{ 'experiences.0'|trans }}</li>
                <li class=\"list-group-item\">{{ 'experiences.1'|trans }}</li>
            </ul>
        </section>

        <!-- Section Compétences -->
        <section class=\"mb-5\">
            <h2 class=\"text-center text-white bg-primary p-3 rounded\">{{ 'competences_title'|trans }}</h2>
            <ul class=\"list-group list-group-flush\">
                <li class=\"list-group-item\">{{ 'competences.0'|trans }}</li>
                <li class=\"list-group-item\">{{ 'competences.1'|trans }}</li>
                <li class=\"list-group-item\">{{ 'competences.2'|trans }}</li>
                <li class=\"list-group-item\">{{ 'competences.3'|trans }}</li>
            </ul>
        </section>

        <!-- Bouton pour télécharger le CV en PDF -->
        <div class=\"text-center mb-5\">
            <button class=\"btn btn-primary\" id=\"show-form-btn\">{{ 'download_cv'|trans }}</button>
        </div>

        <!-- Formulaire Modale -->
        <div id=\"form-popup\" class=\"form-popup\">
            <div class=\"form-popup-content card\" style=\"max-width: 500px; padding: 20px;\">
                <h3 class=\"text-center text-info\">{{ 'form_title'|trans }}</h3>
                <form id=\"pdf-form-content\">
                    <div class=\"mb-3\">
                        <label for=\"name\" class=\"form-label\">{{ 'form_name'|trans }}</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"email\" class=\"form-label\">{{ 'form_email'|trans }}</label>
                        <input type=\"email\" class=\"form-control\" id=\"email\" required>
                    </div>
                    <div class=\"mb-3\">
                        <label for=\"message\" class=\"form-label\">{{ 'form_message'|trans }}</label>
                        <textarea class=\"form-control\" id=\"message\" rows=\"3\" required></textarea>
                    </div>
                    <div class=\"text-center\">
                        <button type=\"submit\" class=\"btn btn-success\">{{ 'form_generate_pdf'|trans }}</button>
                        <button type=\"button\" id=\"close-form\" class=\"btn btn-danger ms-2\">{{ 'form_close'|trans }}</button>
                    </div>
                </form>
            </div>
        </div>

    </div> <!-- Fin du conteneur principal -->

    <script src=\"{{ asset('js/jspdf.umd.min.js') }}\"></script>
    <script>
        // Afficher le formulaire pop-up
        document.getElementById('show-form-btn').addEventListener('click', function () {
            document.getElementById('form-popup').style.display = 'flex';
        });

        // Fermer la pop-up
        document.getElementById('close-form').addEventListener('click', function () {
            document.getElementById('form-popup').style.display = 'none';
        });

        // Soumettre le formulaire et générer le PDF
        document.getElementById('pdf-form-content').addEventListener('submit', function (event) {
            event.preventDefault();  // Empêcher le formulaire de se soumettre normalement

            // Récupérer les informations du formulaire
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Générer le PDF
            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            // Centrer le texte \"CV de Hugo Sanchez Durante\" sur le PDF
            doc.setFontSize(22);
            doc.setTextColor(34, 68, 122);  // Couleur de texte
            const title = \"{{ 'cv_title'|trans }}\";
            const pageWidth = doc.internal.pageSize.width;
            const titleWidth = doc.getTextWidth(title);
            doc.text(title, (pageWidth - titleWidth) / 2, 20);  // Centrer le titre

            doc.setFontSize(12);
            doc.setTextColor(0, 0, 0);
            doc.text(\"{{ 'cv_description'|trans }}\", 20, 30);
            
            // Intitulé du poste
            doc.setFontSize(14);
            doc.setTextColor(0, 123, 255);  // Bleu pour l'intitulé
            doc.text(\"{{ 'dream_job_title'|trans }}\", 20, 40);
            
            // Section Formations
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);  // Couleur de fond bleu
            doc.rect(20, 45, 180, 8, 'F');  // Rectangle de fond
            doc.setTextColor(255, 255, 255);  // Texte blanc sur fond bleu
            doc.text(\"{{ 'formations_title'|trans }}\", 22, 50);
            doc.setTextColor(0, 0, 0);  // Remettre la couleur de texte normale
            doc.setFontSize(12);
            doc.text(\"• {{ 'formations.0'|trans }}\", 20, 60);  
            doc.text(\"• {{ 'formations.1'|trans }}\", 20, 70);  
            doc.text(\"• {{ 'formations.2'|trans }}\", 20, 80);  

            // Section Expériences professionnelles
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);
            doc.rect(20, 85, 180, 8, 'F');
            doc.setTextColor(255, 255, 255);
            doc.text(\"{{ 'experiences_title'|trans }}\", 22, 90);
            doc.setTextColor(0, 0, 0);
            doc.setFontSize(12);
            doc.text(\"• {{ 'experiences.0'|trans }}\", 20, 100);
            doc.text(\"• {{ 'experiences.1'|trans }}\", 20, 110);

            // Section Compétences
            doc.setFontSize(16);
            doc.setFillColor(0, 123, 255);
            doc.rect(20, 115, 180, 8, 'F');
            doc.setTextColor(255, 255, 255);
            doc.text(\"{{ 'competences_title'|trans }}\", 22, 120);
            doc.setTextColor(0, 0, 0);
            doc.setFontSize(12);
            doc.text(\"• {{ 'competences.0'|trans }}\", 20, 130);
            doc.text(\"• {{ 'competences.1'|trans }}\", 20, 140);
            doc.text(\"• {{ 'competences.2'|trans }}\", 20, 150);
            doc.text(\"• {{ 'competences.3'|trans }}\", 20, 160);

            // Télécharger le fichier PDF
            doc.save('CV_Hugo_Sanchez_Durante.pdf');

            // Masquer la pop-up après téléchargement
            document.getElementById('form-popup').style.display = 'none';
        });
    </script>

    <style>
        /* Style pour la pop-up (formulaire) */
        .form-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .form-popup-content {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

{% endblock %}
", "page/cv.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web (Complait)\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\cv.html.twig");
    }
}
