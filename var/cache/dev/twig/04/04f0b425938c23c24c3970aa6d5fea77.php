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

/* article/show.html.twig */
class __TwigTemplate_19b25dbca94cea0d6d528a8dc2826fb0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        yield "<article class=\"article-detail\">
    <div class=\"article-header\">
        ";
        // line 8
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 8, $this->source); })()), "imageUrl", [], "any", false, false, false, 8)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 9
            yield "            <div class=\"article-hero-image\">
                <img src=\"";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "imageUrl", [], "any", false, false, false, 10), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
            yield "\">
            </div>
        ";
        }
        // line 13
        yield "        
        <div class=\"container\">
            <div class=\"article-header-content\">
                ";
        // line 16
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 16, $this->source); })()), "location", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "                    <span class=\"article-location-badge\">📍 ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 17, $this->source); })()), "location", [], "any", false, false, false, 17), "html", null, true);
            yield "</span>
                ";
        }
        // line 19
        yield "                <h1 class=\"article-detail-title\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</h1>
                <div class=\"article-detail-meta\">
                    <span class=\"meta-item\">
                        <strong>Par</strong> ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 22, $this->source); })()), "author", [], "any", false, false, false, 22), "name", [], "any", false, false, false, 22), "html", null, true);
        yield "
                    </span>
                    <span class=\"meta-divider\">•</span>
                    <span class=\"meta-item\">
                        <strong>Publié le</strong> ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 26, $this->source); })()), "createdAt", [], "any", false, false, false, 26), "d M Y"), "html", null, true);
        yield "
                    </span>
                    <span class=\"meta-divider\">•</span>
                    <span class=\"meta-item\">
                        💬 ";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 30, $this->source); })())), "html", null, true);
        yield " commentaire";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 30, $this->source); })())) > 1)) ? ("s") : (""));
        yield "
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"article-body\">
            <div class=\"article-text\">
                ";
        // line 40
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 40, $this->source); })()), "content", [], "any", false, false, false, 40), "html", null, true));
        yield "
            </div>
        </div>

        <div class=\"comments-section\">
            <h2 class=\"section-title\">Commentaires (";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 45, $this->source); })())), "html", null, true);
        yield ")</h2>

            ";
        // line 47
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 47, $this->source); })())) > 0)) {
            // line 48
            yield "                <div class=\"comments-list\">
                    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 50
                yield "                        <div class=\"comment\">
                            <div class=\"comment-header\">
                                <span class=\"comment-author\">";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "authorName", [], "any", false, false, false, 52), "html", null, true);
                yield "</span>
                                <span class=\"comment-date\">";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 53), "d M Y à H:i"), "html", null, true);
                yield "</span>
                            </div>
                            <div class=\"comment-content\">
                                ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 56), "html", null, true);
                yield "
                            </div>
                            ";
                // line 58
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "                                <div class=\"comment-actions\">
                                    <form method=\"post\" action=\"";
                    // line 60
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 60)]), "html", null, true);
                    yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 61
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 61))), "html", null, true);
                    yield "\">
                                        <button type=\"submit\" class=\"btn-comment-delete\">🗑️ Supprimer</button>
                                    </form>
                                </div>
                            ";
                }
                // line 66
                yield "                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "                </div>
            ";
        } else {
            // line 70
            yield "                <p class=\"no-comments\">Soyez le premier à commenter cet article !</p>
            ";
        }
        // line 72
        yield "
            <div class=\"comment-form-section\">
                <h3 class=\"section-subtitle\">Ajouter un commentaire</h3>
                <form method=\"post\" action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_comment", ["slug" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 75, $this->source); })()), "slug", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\" class=\"comment-form\">
                    <div class=\"form-group\">
                        <label for=\"author_name\">Nom *</label>
                        <input type=\"text\" id=\"author_name\" name=\"author_name\" required class=\"form-input\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"author_email\">Email *</label>
                        <input type=\"email\" id=\"author_email\" name=\"author_email\" required class=\"form-input\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"content\">Commentaire *</label>
                        <textarea id=\"content\" name=\"content\" rows=\"5\" required class=\"form-textarea\"></textarea>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">Publier le commentaire</button>
                </form>
            </div>
        </div>

        <div class=\"article-actions-footer\">
            <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-secondary\">← Retour aux articles</a>
            ";
        // line 98
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ARTICLE_EDIT", (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 98, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 99
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 99, $this->source); })()), "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">✏️ Modifier cet article</a>
            ";
        }
        // line 101
        yield "        </div>
    </div>
</article>
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
        return "article/show.html.twig";
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
        return array (  281 => 101,  275 => 99,  273 => 98,  269 => 97,  244 => 75,  239 => 72,  235 => 70,  231 => 68,  224 => 66,  216 => 61,  212 => 60,  209 => 59,  207 => 58,  202 => 56,  196 => 53,  192 => 52,  188 => 50,  184 => 49,  181 => 48,  179 => 47,  174 => 45,  166 => 40,  151 => 30,  144 => 26,  137 => 22,  130 => 19,  124 => 17,  122 => 16,  117 => 13,  109 => 10,  106 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ article.title }}{% endblock %}

{% block body %}
<article class=\"article-detail\">
    <div class=\"article-header\">
        {% if article.imageUrl %}
            <div class=\"article-hero-image\">
                <img src=\"{{ article.imageUrl }}\" alt=\"{{ article.title }}\">
            </div>
        {% endif %}
        
        <div class=\"container\">
            <div class=\"article-header-content\">
                {% if article.location %}
                    <span class=\"article-location-badge\">📍 {{ article.location }}</span>
                {% endif %}
                <h1 class=\"article-detail-title\">{{ article.title }}</h1>
                <div class=\"article-detail-meta\">
                    <span class=\"meta-item\">
                        <strong>Par</strong> {{ article.author.name }}
                    </span>
                    <span class=\"meta-divider\">•</span>
                    <span class=\"meta-item\">
                        <strong>Publié le</strong> {{ article.createdAt|date('d M Y') }}
                    </span>
                    <span class=\"meta-divider\">•</span>
                    <span class=\"meta-item\">
                        💬 {{ comments|length }} commentaire{{ comments|length > 1 ? 's' : '' }}
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"article-body\">
            <div class=\"article-text\">
                {{ article.content|nl2br }}
            </div>
        </div>

        <div class=\"comments-section\">
            <h2 class=\"section-title\">Commentaires ({{ comments|length }})</h2>

            {% if comments|length > 0 %}
                <div class=\"comments-list\">
                    {% for comment in comments %}
                        <div class=\"comment\">
                            <div class=\"comment-header\">
                                <span class=\"comment-author\">{{ comment.authorName }}</span>
                                <span class=\"comment-date\">{{ comment.createdAt|date('d M Y à H:i') }}</span>
                            </div>
                            <div class=\"comment-content\">
                                {{ comment.content }}
                            </div>
                            {% if is_granted('ROLE_ADMIN') %}
                                <div class=\"comment-actions\">
                                    <form method=\"post\" action=\"{{ path('app_admin_comment_delete', {id: comment.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                        <button type=\"submit\" class=\"btn-comment-delete\">🗑️ Supprimer</button>
                                    </form>
                                </div>
                            {% endif %}
                        </div>
                    {% endfor %}
                </div>
            {% else %}
                <p class=\"no-comments\">Soyez le premier à commenter cet article !</p>
            {% endif %}

            <div class=\"comment-form-section\">
                <h3 class=\"section-subtitle\">Ajouter un commentaire</h3>
                <form method=\"post\" action=\"{{ path('app_article_comment', {slug: article.slug}) }}\" class=\"comment-form\">
                    <div class=\"form-group\">
                        <label for=\"author_name\">Nom *</label>
                        <input type=\"text\" id=\"author_name\" name=\"author_name\" required class=\"form-input\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"author_email\">Email *</label>
                        <input type=\"email\" id=\"author_email\" name=\"author_email\" required class=\"form-input\">
                    </div>
                    
                    <div class=\"form-group\">
                        <label for=\"content\">Commentaire *</label>
                        <textarea id=\"content\" name=\"content\" rows=\"5\" required class=\"form-textarea\"></textarea>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">Publier le commentaire</button>
                </form>
            </div>
        </div>

        <div class=\"article-actions-footer\">
            <a href=\"{{ path('app_home') }}\" class=\"btn btn-secondary\">← Retour aux articles</a>
            {% if is_granted('ARTICLE_EDIT', article) %}
                <a href=\"{{ path('app_admin_article_edit', {id: article.id}) }}\" class=\"btn btn-primary\">✏️ Modifier cet article</a>
            {% endif %}
        </div>
    </div>
</article>
{% endblock %}

", "article/show.html.twig", "/Users/quentinho/Projets/EEMI/Symfony/Miniblog/templates/article/show.html.twig");
    }
}
