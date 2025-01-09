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

/* page/page2.html.twig */
class __TwigTemplate_ed62033ea818532e3dcae1268eec832f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/page2.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "page/page2.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "page/page2.html.twig", 1);
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

        yield "Page1!";
        
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

<div class=\"Labarre\">
    <a href=\"\">Le Jeux/Les Lieux Important</a>
    <a href=\"Metier.html\">Les Compétances</a>
    <a href=\"Personage.html\">Les Personnages important</a>
    <span id=\"heure\"></span> 
    <form action=\"#\" method=\"post\">
      <label for=\"nom\">Nom:</label>
      <input type=\"text\" id=\"nom\" name=\"nom\" required>
  
      <label for=\"email\">Email:</label>
      <input type=\"email\" id=\"email\" name=\"email\" required>
  
      <label for=\"message\">Message:</label>
      <textarea id=\"message\" name=\"message\" required></textarea>
  
      <button type=\"submit\">Envoyer</button>
  </form>
  </div>
  <br>
  <div class=\"Case\">
    <h1>Le Jeu</h1>
    <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stardew1.jpg"), "html", null, true);
        yield "\" alt=\"Stardew\">
    <div class=\"text\">
      <p>
        But du jeux:<br>        
        -Faire de l'argent<br>
        -Organiser sa ferme<br>
        -Découvrir PelicanTown et ses habitants<br> 
      </p>
    </div>
    <h2>Le 26/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>La Ferme</h1>
    <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stardew2.jpg"), "html", null, true);
        yield "\" alt=\"Ferme\">
    <div class=\"text\">
      <p>Notre lieu de vie et de travail on nous allons cultiver des champs,élever des animaux ,décorer comme bon nous le semble</p>
    </div>
    <h2>Le 30/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>La Mine</h1>
    <img src=\"";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stardew3.jpg"), "html", null, true);
        yield "\" alt=\"Mine\">
    <div class=\"text\">
      <p>Un endroit rempli de richesse des minerais,des pierre précieuse ainsi que de nombre danger </p>
    </div>
    <h2>Le 31/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>Pelican Town</h1>
    <img src=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/stardew4.jpg"), "html", null, true);
        yield "\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Le lieu de vie des villageois un endroit regorgeant de mystère et d'intèraction</p>
    </div>
    <h2>Le 05/03/2016</h2>
  </div>
  <div class=\"Case\">
    <h1>Desert</h1>
    <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/desert.jpg"), "html", null, true);
        yield "\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Le desert un endroit dangereux ou l'on peut acquérir de grande richesse mais il ne faut pas être trop avare</p>
    </div>
    <h2>Le 08/03/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>île gingembre</h1>
    <img src=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/île.jpg"), "html", null, true);
        yield "\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Une île paradisiaque ou règne un été eternel et ou l'on peut visiter le volcan</p>
    </div>
    <h2>Le 15/03/2016</h2>
  </div>
  <h>hugo sanchez durante 2024</h>
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
        return "page/page2.html.twig";
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
        return array (  191 => 80,  179 => 71,  168 => 63,  156 => 54,  144 => 45,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page1!{% endblock %}

{% block body %}
<style>
  
</style>

<div class=\"Labarre\">
    <a href=\"\">Le Jeux/Les Lieux Important</a>
    <a href=\"Metier.html\">Les Compétances</a>
    <a href=\"Personage.html\">Les Personnages important</a>
    <span id=\"heure\"></span> 
    <form action=\"#\" method=\"post\">
      <label for=\"nom\">Nom:</label>
      <input type=\"text\" id=\"nom\" name=\"nom\" required>
  
      <label for=\"email\">Email:</label>
      <input type=\"email\" id=\"email\" name=\"email\" required>
  
      <label for=\"message\">Message:</label>
      <textarea id=\"message\" name=\"message\" required></textarea>
  
      <button type=\"submit\">Envoyer</button>
  </form>
  </div>
  <br>
  <div class=\"Case\">
    <h1>Le Jeu</h1>
    <img src=\"{{ asset('images/stardew1.jpg') }}\" alt=\"Stardew\">
    <div class=\"text\">
      <p>
        But du jeux:<br>        
        -Faire de l'argent<br>
        -Organiser sa ferme<br>
        -Découvrir PelicanTown et ses habitants<br> 
      </p>
    </div>
    <h2>Le 26/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>La Ferme</h1>
    <img src=\"{{ asset('images/stardew2.jpg') }}\" alt=\"Ferme\">
    <div class=\"text\">
      <p>Notre lieu de vie et de travail on nous allons cultiver des champs,élever des animaux ,décorer comme bon nous le semble</p>
    </div>
    <h2>Le 30/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>La Mine</h1>
    <img src=\"{{ asset('images/stardew3.jpg') }}\" alt=\"Mine\">
    <div class=\"text\">
      <p>Un endroit rempli de richesse des minerais,des pierre précieuse ainsi que de nombre danger </p>
    </div>
    <h2>Le 31/02/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>Pelican Town</h1>
    <img src=\"{{ asset('images/stardew4.jpg') }}\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Le lieu de vie des villageois un endroit regorgeant de mystère et d'intèraction</p>
    </div>
    <h2>Le 05/03/2016</h2>
  </div>
  <div class=\"Case\">
    <h1>Desert</h1>
    <img src=\"{{ asset('images/desert.jpg') }}\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Le desert un endroit dangereux ou l'on peut acquérir de grande richesse mais il ne faut pas être trop avare</p>
    </div>
    <h2>Le 08/03/2016</h2>
  </div>

  <div class=\"Case\">
    <h1>île gingembre</h1>
    <img src=\"{{ asset('images/île.jpg') }}\" alt=\"Pelican Town\">
    <div class=\"text\">
      <p>Une île paradisiaque ou règne un été eternel et ou l'on peut visiter le volcan</p>
    </div>
    <h2>Le 15/03/2016</h2>
  </div>
  <h>hugo sanchez durante 2024</h>
{% endblock %}
", "page/page2.html.twig", "C:\\Users\\Utilisateur\\Desktop\\Cours\\S1 RT1 2024_2025\\Cours_TD_TP\\R1.09 Introduction aux technologies Web\\TP\\TP 1\\Symfony\\NOTRE_PROJET\\templates\\page\\page2.html.twig");
    }
}
