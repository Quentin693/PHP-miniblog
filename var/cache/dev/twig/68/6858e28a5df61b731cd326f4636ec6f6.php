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

/* article/list.html.twig */
class __TwigTemplate_50b11816458d968c93a69b8227fb1d1a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/list.html.twig"));

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

        yield "Tous les articles";
        
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
        yield "<section class=\"page-header\">
    <div class=\"container\">
        <h1 class=\"page-title\">Tous nos articles</h1>
        <p class=\"page-subtitle\">";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 9, $this->source); })())), "html", null, true);
        yield " monuments à découvrir</p>
    </div>
</section>

<section class=\"articles-section\">
    <div class=\"container\">
        ";
        // line 15
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 15, $this->source); })())) > 0)) {
            // line 16
            yield "            <div class=\"articles-list\">
                ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 18
                yield "                    <article class=\"article-item\">
                        <a href=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\" class=\"article-item-link\">
                            <div class=\"article-item-image\">
                                ";
                // line 21
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageUrl", [], "any", false, false, false, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 22
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageUrl", [], "any", false, false, false, 22), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 22), "html", null, true);
                    yield "\" loading=\"lazy\">
                                ";
                } else {
                    // line 24
                    yield "                                    <div class=\"article-image-placeholder\">🏰</div>
                                ";
                }
                // line 26
                yield "                            </div>
                            <div class=\"article-item-content\">
                                ";
                // line 28
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "location", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 29
                    yield "                                    <span class=\"article-location\">📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "location", [], "any", false, false, false, 29), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 31
                yield "                                <h2 class=\"article-item-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 31), "html", null, true);
                yield "</h2>
                                <p class=\"article-item-excerpt\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
                                <div class=\"article-meta\">
                                    <span class=\"article-date\">";
                // line 34
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 34), "d M Y"), "html", null, true);
                yield "</span>
                                    <span class=\"article-author\">Par ";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                yield "</span>
                                    <span class=\"article-comments\">💬 ";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["article"], "comments", [], "any", false, false, false, 36)), "html", null, true);
                yield " commentaires</span>
                                </div>
                            </div>
                        </a>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            yield "            </div>

            ";
            // line 44
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 44, $this->source); })()) > 1)) {
                // line 45
                yield "                <div class=\"pagination\">
                    ";
                // line 46
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 46, $this->source); })()) > 1)) {
                    // line 47
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 47, $this->source); })()) - 1)]), "html", null, true);
                    yield "\" class=\"pagination-link\">← Précédent</a>
                    ";
                }
                // line 49
                yield "                    
                    ";
                // line 50
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 50, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 51
                    yield "                        ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 51, $this->source); })()))) {
                        // line 52
                        yield "                            <span class=\"pagination-current\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</span>
                        ";
                    } else {
                        // line 54
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles", ["page" => $context["page"]]), "html", null, true);
                        yield "\" class=\"pagination-link\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 56
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 57
                yield "                    
                    ";
                // line 58
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 58, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 58, $this->source); })()))) {
                    // line 59
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_articles", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 59, $this->source); })()) + 1)]), "html", null, true);
                    yield "\" class=\"pagination-link\">Suivant →</a>
                    ";
                }
                // line 61
                yield "                </div>
            ";
            }
            // line 63
            yield "        ";
        } else {
            // line 64
            yield "            <div class=\"no-articles\">
                <p>Aucun article disponible pour le moment.</p>
            </div>
        ";
        }
        // line 68
        yield "    </div>
</section>
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
        return "article/list.html.twig";
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
        return array (  258 => 68,  252 => 64,  249 => 63,  245 => 61,  239 => 59,  237 => 58,  234 => 57,  228 => 56,  220 => 54,  214 => 52,  211 => 51,  207 => 50,  204 => 49,  198 => 47,  196 => 46,  193 => 45,  191 => 44,  187 => 42,  175 => 36,  171 => 35,  167 => 34,  162 => 32,  157 => 31,  151 => 29,  149 => 28,  145 => 26,  141 => 24,  133 => 22,  131 => 21,  126 => 19,  123 => 18,  119 => 17,  116 => 16,  114 => 15,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Tous les articles{% endblock %}

{% block body %}
<section class=\"page-header\">
    <div class=\"container\">
        <h1 class=\"page-title\">Tous nos articles</h1>
        <p class=\"page-subtitle\">{{ articles|length }} monuments à découvrir</p>
    </div>
</section>

<section class=\"articles-section\">
    <div class=\"container\">
        {% if articles|length > 0 %}
            <div class=\"articles-list\">
                {% for article in articles %}
                    <article class=\"article-item\">
                        <a href=\"{{ path('app_article_show', {slug: article.slug}) }}\" class=\"article-item-link\">
                            <div class=\"article-item-image\">
                                {% if article.imageUrl %}
                                    <img src=\"{{ article.imageUrl }}\" alt=\"{{ article.title }}\" loading=\"lazy\">
                                {% else %}
                                    <div class=\"article-image-placeholder\">🏰</div>
                                {% endif %}
                            </div>
                            <div class=\"article-item-content\">
                                {% if article.location %}
                                    <span class=\"article-location\">📍 {{ article.location }}</span>
                                {% endif %}
                                <h2 class=\"article-item-title\">{{ article.title }}</h2>
                                <p class=\"article-item-excerpt\">{{ article.excerpt }}</p>
                                <div class=\"article-meta\">
                                    <span class=\"article-date\">{{ article.createdAt|date('d M Y') }}</span>
                                    <span class=\"article-author\">Par {{ article.author.name }}</span>
                                    <span class=\"article-comments\">💬 {{ article.comments|length }} commentaires</span>
                                </div>
                            </div>
                        </a>
                    </article>
                {% endfor %}
            </div>

            {% if totalPages > 1 %}
                <div class=\"pagination\">
                    {% if currentPage > 1 %}
                        <a href=\"{{ path('app_articles', {page: currentPage - 1}) }}\" class=\"pagination-link\">← Précédent</a>
                    {% endif %}
                    
                    {% for page in 1..totalPages %}
                        {% if page == currentPage %}
                            <span class=\"pagination-current\">{{ page }}</span>
                        {% else %}
                            <a href=\"{{ path('app_articles', {page: page}) }}\" class=\"pagination-link\">{{ page }}</a>
                        {% endif %}
                    {% endfor %}
                    
                    {% if currentPage < totalPages %}
                        <a href=\"{{ path('app_articles', {page: currentPage + 1}) }}\" class=\"pagination-link\">Suivant →</a>
                    {% endif %}
                </div>
            {% endif %}
        {% else %}
            <div class=\"no-articles\">
                <p>Aucun article disponible pour le moment.</p>
            </div>
        {% endif %}
    </div>
</section>
{% endblock %}

", "article/list.html.twig", "/Users/quentinho/Projets/EEMI/Symfony/Miniblog/templates/article/list.html.twig");
    }
}
