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

/* admin/article_form.html.twig */
class __TwigTemplate_6aee748cf63c80d9b1a0767ea374e30a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/article_form.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Modifier") : ("Nouvel"));
        yield " Article";
        
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
        yield "<section class=\"form-section\">
    <div class=\"container\">
        <div class=\"form-header\">
            <h1 class=\"page-title\">
                ";
        // line 10
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("✏️ Modifier") : ("➕ Créer"));
        yield " un Article
            </h1>
            <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-secondary\">
                ← Retour au dashboard
            </a>
        </div>

        <div class=\"form-container\">
            ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "admin-form"]]);
        yield "
                
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "title", [], "any", false, false, false, 22), 'label');
        yield "
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), 'widget');
        yield "
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "location", [], "any", false, false, false, 30), 'label');
        yield "
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "location", [], "any", false, false, false, 31), 'widget');
        yield "
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "location", [], "any", false, false, false, 32), 'errors');
        yield "
                        <small class=\"form-hint\">Ex: Paris, Île-de-France</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "imageUrl", [], "any", false, false, false, 39), 'label');
        yield "
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "imageUrl", [], "any", false, false, false, 40), 'widget');
        yield "
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "imageUrl", [], "any", false, false, false, 41), 'errors');
        yield "
                        <small class=\"form-hint\">URL d'une image depuis Unsplash ou autre</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "excerpt", [], "any", false, false, false, 48), 'label');
        yield "
                        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "excerpt", [], "any", false, false, false, 49), 'widget');
        yield "
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "excerpt", [], "any", false, false, false, 50), 'errors');
        yield "
                        <small class=\"form-hint\">Court résumé affiché sur les cartes</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "content", [], "any", false, false, false, 57), 'label');
        yield "
                        ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "content", [], "any", false, false, false, 58), 'widget');
        yield "
                        ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "content", [], "any", false, false, false, 59), 'errors');
        yield "
                        <small class=\"form-hint\">Contenu complet de l'article (minimum 100 caractères)</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group-checkbox\">
                        ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "published", [], "any", false, false, false, 66), 'widget');
        yield "
                        ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "published", [], "any", false, false, false, 67), 'label');
        yield "
                        ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "published", [], "any", false, false, false, 68), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        ";
        // line 74
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("💾 Enregistrer") : ("✨ Créer l'article"));
        yield "
                    </button>
                    <a href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"btn btn-secondary\">
                        Annuler
                    </a>
                </div>

            ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</section>

<style>
.form-section {
    padding: 4rem 0;
    min-height: 70vh;
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.form-container {
    max-width: 900px;
    margin: 0 auto;
    background: white;
    padding: 3rem;
    border-radius: 16px;
    box-shadow: var(--shadow-md);
}

.admin-form .form-row {
    margin-bottom: 2rem;
}

.admin-form .form-group label {
    display: block;
    font-weight: 600;
    color: var(--color-text);
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.admin-form .form-hint {
    display: block;
    color: var(--color-text-light);
    font-size: 0.9rem;
    margin-top: 0.5rem;
    font-style: italic;
}

.form-group-checkbox {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.form-group-checkbox input[type=\"checkbox\"] {
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.form-group-checkbox label {
    margin: 0;
    cursor: pointer;
    font-weight: 500;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid var(--color-border);
}

.admin-form .form-error {
    color: #dc3545;
    font-size: 0.9rem;
    margin-top: 0.5rem;
}

@media (max-width: 768px) {
    .form-container {
        padding: 2rem 1.5rem;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-actions .btn {
        width: 100%;
    }
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
        return "admin/article_form.html.twig";
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
        return array (  247 => 81,  239 => 76,  234 => 74,  225 => 68,  221 => 67,  217 => 66,  207 => 59,  203 => 58,  199 => 57,  189 => 50,  185 => 49,  181 => 48,  171 => 41,  167 => 40,  163 => 39,  153 => 32,  149 => 31,  145 => 30,  136 => 24,  132 => 23,  128 => 22,  121 => 18,  112 => 12,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.id ? 'Modifier' : 'Nouvel' }} Article{% endblock %}

{% block body %}
<section class=\"form-section\">
    <div class=\"container\">
        <div class=\"form-header\">
            <h1 class=\"page-title\">
                {{ article.id ? '✏️ Modifier' : '➕ Créer' }} un Article
            </h1>
            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-secondary\">
                ← Retour au dashboard
            </a>
        </div>

        <div class=\"form-container\">
            {{ form_start(form, {'attr': {'class': 'admin-form'}}) }}
                
                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.title) }}
                        {{ form_widget(form.title) }}
                        {{ form_errors(form.title) }}
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.location) }}
                        {{ form_widget(form.location) }}
                        {{ form_errors(form.location) }}
                        <small class=\"form-hint\">Ex: Paris, Île-de-France</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.imageUrl) }}
                        {{ form_widget(form.imageUrl) }}
                        {{ form_errors(form.imageUrl) }}
                        <small class=\"form-hint\">URL d'une image depuis Unsplash ou autre</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.excerpt) }}
                        {{ form_widget(form.excerpt) }}
                        {{ form_errors(form.excerpt) }}
                        <small class=\"form-hint\">Court résumé affiché sur les cartes</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group\">
                        {{ form_label(form.content) }}
                        {{ form_widget(form.content) }}
                        {{ form_errors(form.content) }}
                        <small class=\"form-hint\">Contenu complet de l'article (minimum 100 caractères)</small>
                    </div>
                </div>

                <div class=\"form-row\">
                    <div class=\"form-group-checkbox\">
                        {{ form_widget(form.published) }}
                        {{ form_label(form.published) }}
                        {{ form_errors(form.published) }}
                    </div>
                </div>

                <div class=\"form-actions\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        {{ article.id ? '💾 Enregistrer' : '✨ Créer l\\'article' }}
                    </button>
                    <a href=\"{{ path('app_admin_dashboard') }}\" class=\"btn btn-secondary\">
                        Annuler
                    </a>
                </div>

            {{ form_end(form) }}
        </div>
    </div>
</section>

<style>
.form-section {
    padding: 4rem 0;
    min-height: 70vh;
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.form-container {
    max-width: 900px;
    margin: 0 auto;
    background: white;
    padding: 3rem;
    border-radius: 16px;
    box-shadow: var(--shadow-md);
}

.admin-form .form-row {
    margin-bottom: 2rem;
}

.admin-form .form-group label {
    display: block;
    font-weight: 600;
    color: var(--color-text);
    margin-bottom: 0.5rem;
    font-size: 1rem;
}

.admin-form .form-hint {
    display: block;
    color: var(--color-text-light);
    font-size: 0.9rem;
    margin-top: 0.5rem;
    font-style: italic;
}

.form-group-checkbox {
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.form-group-checkbox input[type=\"checkbox\"] {
    width: 20px;
    height: 20px;
    cursor: pointer;
}

.form-group-checkbox label {
    margin: 0;
    cursor: pointer;
    font-weight: 500;
}

.form-actions {
    display: flex;
    gap: 1rem;
    margin-top: 2.5rem;
    padding-top: 2rem;
    border-top: 2px solid var(--color-border);
}

.admin-form .form-error {
    color: #dc3545;
    font-size: 0.9rem;
    margin-top: 0.5rem;
}

@media (max-width: 768px) {
    .form-container {
        padding: 2rem 1.5rem;
    }
    
    .form-actions {
        flex-direction: column;
    }
    
    .form-actions .btn {
        width: 100%;
    }
}
</style>
{% endblock %}

", "admin/article_form.html.twig", "/Users/quentinho/Projets/EEMI/Symfony/Miniblog/templates/admin/article_form.html.twig");
    }
}
