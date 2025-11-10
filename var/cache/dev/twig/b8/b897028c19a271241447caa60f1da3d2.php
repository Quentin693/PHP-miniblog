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

/* admin/dashboard.html.twig */
class __TwigTemplate_b4ef8930992ca5d47cc0dbc96dfc1c76 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Dashboard Admin";
        
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
        yield "<section class=\"admin-section\">
    <div class=\"container\">
        <div class=\"admin-header\">
            <h1 class=\"page-title\">📊 Dashboard Administration</h1>
            <a href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_new");
        yield "\" class=\"btn btn-primary\">
                ➕ Nouvel Article
            </a>
        </div>

        <div class=\"admin-stats\">
            <div class=\"stat-card\">
                <div class=\"stat-icon\">📝</div>
                <div class=\"stat-content\">
                    <h3>";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 19, $this->source); })())), "html", null, true);
        yield "</h3>
                    <p>Articles récents</p>
                </div>
            </div>
            ";
        // line 23
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 24
            yield "                <div class=\"stat-card\">
                    <div class=\"stat-icon\">💬</div>
                    <div class=\"stat-content\">
                        <h3>";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 27, $this->source); })())), "html", null, true);
            yield "</h3>
                        <p>Commentaires récents</p>
                    </div>
                </div>
            ";
        }
        // line 32
        yield "        </div>

        <div class=\"admin-content\">
            <div class=\"admin-section-block\">
                <h2 class=\"section-title\">Mes Articles</h2>
                
                ";
        // line 38
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 38, $this->source); })())) > 0)) {
            // line 39
            yield "                    <div class=\"admin-table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 50, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 51
                yield "                                    <tr>
                                        <td>
                                            <a href=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"article-link-admin\">
                                                ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 54), "html", null, true);
                yield "
                                            </a>
                                        </td>
                                        <td>
                                            ";
                // line 58
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "published", [], "any", false, false, false, 58)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 59
                    yield "                                                <span class=\"badge badge-success\">Publié</span>
                                            ";
                } else {
                    // line 61
                    yield "                                                <span class=\"badge badge-draft\">Brouillon</span>
                                            ";
                }
                // line 63
                yield "                                        </td>
                                        <td>";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 64), "d/m/Y"), "html", null, true);
                yield "</td>
                                        <td class=\"admin-actions\">
                                            ";
                // line 66
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ARTICLE_EDIT", $context["article"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 67
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 67)]), "html", null, true);
                    yield "\" class=\"btn-icon\" title=\"Modifier\">
                                                    ✏️
                                                </a>
                                            ";
                }
                // line 71
                yield "                                            ";
                if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ARTICLE_DELETE", $context["article"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 72
                    yield "                                                <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_article_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 72)]), "html", null, true);
                    yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 73
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 73))), "html", null, true);
                    yield "\">
                                                    <button type=\"submit\" class=\"btn-icon\" title=\"Supprimer\">🗑️</button>
                                                </form>
                                            ";
                }
                // line 77
                yield "                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            yield "                            </tbody>
                        </table>
                    </div>
                ";
        } else {
            // line 84
            yield "                    <p class=\"no-content\">Aucun article pour le moment.</p>
                ";
        }
        // line 86
        yield "            </div>

            ";
        // line 88
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 88, $this->source); })())) > 0))) {
            // line 89
            yield "                <div class=\"admin-section-block\">
                    <h2 class=\"section-title\">Commentaires Récents</h2>
                    
                    <div class=\"comments-admin-list\">
                        ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["comments"]) || array_key_exists("comments", $context) ? $context["comments"] : (function () { throw new RuntimeError('Variable "comments" does not exist.', 93, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 94
                yield "                            <div class=\"comment-admin-item\">
                                <div class=\"comment-admin-header\">
                                    <strong>";
                // line 96
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "authorName", [], "any", false, false, false, 96), "html", null, true);
                yield "</strong>
                                    <span class=\"comment-admin-date\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 97), "d/m/Y H:i"), "html", null, true);
                yield "</span>
                                </div>
                                <div class=\"comment-admin-content\">
                                    ";
                // line 100
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "content", [], "any", false, false, false, 100), "html", null, true);
                yield "
                                </div>
                                <div class=\"comment-admin-footer\">
                                    <a href=\"";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 103), "slug", [], "any", false, false, false, 103)]), "html", null, true);
                yield "\">
                                        Sur: ";
                // line 104
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "article", [], "any", false, false, false, 104), "title", [], "any", false, false, false, 104), "html", null, true);
                yield "
                                    </a>
                                    <form method=\"post\" action=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 106)]), "html", null, true);
                yield "\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 107))), "html", null, true);
                yield "\">
                                        <button type=\"submit\" class=\"btn-small btn-danger\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            yield "                    </div>
                </div>
            ";
        }
        // line 116
        yield "        </div>
    </div>
</section>

<style>
.admin-section {
    padding: 4rem 0;
    min-height: 60vh;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.admin-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
    color: white;
    padding: 2rem;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: var(--shadow-md);
}

.stat-icon {
    font-size: 3rem;
}

.stat-content h3 {
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0;
}

.stat-content p {
    margin: 0;
    opacity: 0.9;
}

.admin-section-block {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-sm);
}

.admin-table table {
    width: 100%;
    border-collapse: collapse;
}

.admin-table th {
    background: var(--color-bg);
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid var(--color-border);
}

.admin-table td {
    padding: 1rem;
    border-bottom: 1px solid var(--color-border);
}

.admin-actions {
    display: flex;
    gap: 0.5rem;
}

.btn-icon {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    padding: 0.25rem;
    transition: transform 0.2s;
}

.btn-icon:hover {
    transform: scale(1.2);
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
}

.badge-success {
    background: #d4edda;
    color: #155724;
}

.badge-draft {
    background: #fff3cd;
    color: #856404;
}

.article-link-admin {
    color: var(--color-primary);
    text-decoration: none;
    font-weight: 500;
}

.article-link-admin:hover {
    text-decoration: underline;
}

.comment-admin-item {
    background: var(--color-bg);
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.comment-admin-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
}

.comment-admin-date {
    color: var(--color-text-light);
    font-size: 0.9rem;
}

.comment-admin-content {
    margin: 0.75rem 0;
    color: var(--color-text);
}

.comment-admin-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 0.75rem;
    padding-top: 0.75rem;
    border-top: 1px solid var(--color-border);
}

.btn-small {
    padding: 0.35rem 0.75rem;
    font-size: 0.85rem;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    transition: var(--transition);
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-danger:hover {
    background: #c82333;
}

.no-content {
    text-align: center;
    padding: 2rem;
    color: var(--color-text-light);
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
        return "admin/dashboard.html.twig";
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
        return array (  309 => 116,  304 => 113,  292 => 107,  288 => 106,  283 => 104,  279 => 103,  273 => 100,  267 => 97,  263 => 96,  259 => 94,  255 => 93,  249 => 89,  247 => 88,  243 => 86,  239 => 84,  233 => 80,  225 => 77,  218 => 73,  213 => 72,  210 => 71,  202 => 67,  200 => 66,  195 => 64,  192 => 63,  188 => 61,  184 => 59,  182 => 58,  175 => 54,  171 => 53,  167 => 51,  163 => 50,  150 => 39,  148 => 38,  140 => 32,  132 => 27,  127 => 24,  125 => 23,  118 => 19,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Dashboard Admin{% endblock %}

{% block body %}
<section class=\"admin-section\">
    <div class=\"container\">
        <div class=\"admin-header\">
            <h1 class=\"page-title\">📊 Dashboard Administration</h1>
            <a href=\"{{ path('app_admin_article_new') }}\" class=\"btn btn-primary\">
                ➕ Nouvel Article
            </a>
        </div>

        <div class=\"admin-stats\">
            <div class=\"stat-card\">
                <div class=\"stat-icon\">📝</div>
                <div class=\"stat-content\">
                    <h3>{{ articles|length }}</h3>
                    <p>Articles récents</p>
                </div>
            </div>
            {% if is_granted('ROLE_ADMIN') %}
                <div class=\"stat-card\">
                    <div class=\"stat-icon\">💬</div>
                    <div class=\"stat-content\">
                        <h3>{{ comments|length }}</h3>
                        <p>Commentaires récents</p>
                    </div>
                </div>
            {% endif %}
        </div>

        <div class=\"admin-content\">
            <div class=\"admin-section-block\">
                <h2 class=\"section-title\">Mes Articles</h2>
                
                {% if articles|length > 0 %}
                    <div class=\"admin-table\">
                        <table>
                            <thead>
                                <tr>
                                    <th>Titre</th>
                                    <th>Statut</th>
                                    <th>Date</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for article in articles %}
                                    <tr>
                                        <td>
                                            <a href=\"{{ path('app_article_show', {slug: article.slug}) }}\" class=\"article-link-admin\">
                                                {{ article.title }}
                                            </a>
                                        </td>
                                        <td>
                                            {% if article.published %}
                                                <span class=\"badge badge-success\">Publié</span>
                                            {% else %}
                                                <span class=\"badge badge-draft\">Brouillon</span>
                                            {% endif %}
                                        </td>
                                        <td>{{ article.createdAt|date('d/m/Y') }}</td>
                                        <td class=\"admin-actions\">
                                            {% if is_granted('ARTICLE_EDIT', article) %}
                                                <a href=\"{{ path('app_admin_article_edit', {id: article.id}) }}\" class=\"btn-icon\" title=\"Modifier\">
                                                    ✏️
                                                </a>
                                            {% endif %}
                                            {% if is_granted('ARTICLE_DELETE', article) %}
                                                <form method=\"post\" action=\"{{ path('app_admin_article_delete', {id: article.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cet article ?');\">
                                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ article.id) }}\">
                                                    <button type=\"submit\" class=\"btn-icon\" title=\"Supprimer\">🗑️</button>
                                                </form>
                                            {% endif %}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                {% else %}
                    <p class=\"no-content\">Aucun article pour le moment.</p>
                {% endif %}
            </div>

            {% if is_granted('ROLE_ADMIN') and comments|length > 0 %}
                <div class=\"admin-section-block\">
                    <h2 class=\"section-title\">Commentaires Récents</h2>
                    
                    <div class=\"comments-admin-list\">
                        {% for comment in comments %}
                            <div class=\"comment-admin-item\">
                                <div class=\"comment-admin-header\">
                                    <strong>{{ comment.authorName }}</strong>
                                    <span class=\"comment-admin-date\">{{ comment.createdAt|date('d/m/Y H:i') }}</span>
                                </div>
                                <div class=\"comment-admin-content\">
                                    {{ comment.content }}
                                </div>
                                <div class=\"comment-admin-footer\">
                                    <a href=\"{{ path('app_article_show', {slug: comment.article.slug}) }}\">
                                        Sur: {{ comment.article.title }}
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_admin_comment_delete', {id: comment.id}) }}\" style=\"display:inline;\" onsubmit=\"return confirm('Supprimer ce commentaire ?');\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                        <button type=\"submit\" class=\"btn-small btn-danger\">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
        </div>
    </div>
</section>

<style>
.admin-section {
    padding: 4rem 0;
    min-height: 60vh;
}

.admin-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 3rem;
    flex-wrap: wrap;
    gap: 1rem;
}

.admin-stats {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 2rem;
    margin-bottom: 3rem;
}

.stat-card {
    background: linear-gradient(135deg, var(--color-primary) 0%, var(--color-primary-dark) 100%);
    color: white;
    padding: 2rem;
    border-radius: 12px;
    display: flex;
    align-items: center;
    gap: 1rem;
    box-shadow: var(--shadow-md);
}

.stat-icon {
    font-size: 3rem;
}

.stat-content h3 {
    font-size: 2.5rem;
    font-weight: 800;
    margin: 0;
}

.stat-content p {
    margin: 0;
    opacity: 0.9;
}

.admin-section-block {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    margin-bottom: 2rem;
    box-shadow: var(--shadow-sm);
}

.admin-table table {
    width: 100%;
    border-collapse: collapse;
}

.admin-table th {
    background: var(--color-bg);
    padding: 1rem;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid var(--color-border);
}

.admin-table td {
    padding: 1rem;
    border-bottom: 1px solid var(--color-border);
}

.admin-actions {
    display: flex;
    gap: 0.5rem;
}

.btn-icon {
    background: none;
    border: none;
    font-size: 1.2rem;
    cursor: pointer;
    padding: 0.25rem;
    transition: transform 0.2s;
}

.btn-icon:hover {
    transform: scale(1.2);
}

.badge {
    padding: 0.25rem 0.75rem;
    border-radius: 50px;
    font-size: 0.85rem;
    font-weight: 600;
}

.badge-success {
    background: #d4edda;
    color: #155724;
}

.badge-draft {
    background: #fff3cd;
    color: #856404;
}

.article-link-admin {
    color: var(--color-primary);
    text-decoration: none;
    font-weight: 500;
}

.article-link-admin:hover {
    text-decoration: underline;
}

.comment-admin-item {
    background: var(--color-bg);
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
}

.comment-admin-header {
    display: flex;
    justify-content: space-between;
    margin-bottom: 0.5rem;
}

.comment-admin-date {
    color: var(--color-text-light);
    font-size: 0.9rem;
}

.comment-admin-content {
    margin: 0.75rem 0;
    color: var(--color-text);
}

.comment-admin-footer {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 0.75rem;
    padding-top: 0.75rem;
    border-top: 1px solid var(--color-border);
}

.btn-small {
    padding: 0.35rem 0.75rem;
    font-size: 0.85rem;
    border-radius: 4px;
    border: none;
    cursor: pointer;
    transition: var(--transition);
}

.btn-danger {
    background: #dc3545;
    color: white;
}

.btn-danger:hover {
    background: #c82333;
}

.no-content {
    text-align: center;
    padding: 2rem;
    color: var(--color-text-light);
}
</style>
{% endblock %}

", "admin/dashboard.html.twig", "/Users/quentinho/Projets/EEMI/Symfony/Miniblog/templates/admin/dashboard.html.twig");
    }
}
