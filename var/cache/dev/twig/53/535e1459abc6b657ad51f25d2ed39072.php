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

/* article/index.html.twig */
class __TwigTemplate_b485f7fcc164da2469aa96e1fcbf7783 extends Template
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
            'body_class' => [$this, 'block_body_class'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "article/index.html.twig"));

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

        yield "Accueil";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body_class(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        yield "class=\"home-page\"";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<section class=\"hero\">
    <div class=\"hero-content\">
        <h1 class=\"hero-title\">Monuments de France</h1>
        <p class=\"hero-subtitle\">Découvrez les joyaux architecturaux et sites historiques qui font la splendeur du patrimoine français</p>
    </div>
</section>

<section class=\"filters-section\">
    <div class=\"container\">
        <div class=\"filters-wrapper\">
            <div class=\"filter-group\">
                <h3 class=\"filter-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path>
                        <circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
                    </svg>
                    Régions
                </h3>
                <div class=\"filter-buttons\">
                    <a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 27, $this->source); })())]), "html", null, true);
        yield "\" 
                       class=\"filter-btn ";
        // line 28
        if ((($tmp =  !(isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 28, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\">
                        Toutes
                    </a>
                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["regions"]) || array_key_exists("regions", $context) ? $context["regions"] : (function () { throw new RuntimeError('Variable "regions" does not exist.', 31, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["region"]) {
            // line 32
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["region" => $context["region"], "category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 32, $this->source); })())]), "html", null, true);
            yield "\" 
                           class=\"filter-btn ";
            // line 33
            if (((isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 33, $this->source); })()) == $context["region"])) {
                yield "active";
            }
            yield "\">
                            ";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["region"], "html", null, true);
            yield "
                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['region'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "                </div>
            </div>

            <div class=\"filter-group\">
                <h3 class=\"filter-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                        <polyline points=\"2 17 12 22 22 17\"></polyline>
                        <polyline points=\"2 12 12 17 22 12\"></polyline>
                    </svg>
                    Catégories
                </h3>
                <div class=\"filter-buttons\">
                    <a href=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 50, $this->source); })())]), "html", null, true);
        yield "\" 
                       class=\"filter-btn ";
        // line 51
        if ((($tmp =  !(isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 51, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "active";
        }
        yield "\">
                        Toutes
                    </a>
                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 55
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["category" => $context["category"], "region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 55, $this->source); })())]), "html", null, true);
            yield "\" 
                           class=\"filter-btn ";
            // line 56
            if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 56, $this->source); })()) == $context["category"])) {
                yield "active";
            }
            yield "\">
                            ";
            // line 57
            if (($context["category"] == "monuments")) {
                // line 58
                yield "                                🏛️ Monuments
                            ";
            } elseif ((            // line 59
$context["category"] == "châteaux")) {
                // line 60
                yield "                                🏰 Châteaux
                            ";
            } elseif ((            // line 61
$context["category"] == "cathédrales")) {
                // line 62
                yield "                                ⛪ Cathédrales
                            ";
            } elseif ((            // line 63
$context["category"] == "décors")) {
                // line 64
                yield "                                🌳 Décors
                            ";
            } else {
                // line 66
                yield "                                ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $context["category"]), "html", null, true);
                yield "
                            ";
            }
            // line 68
            yield "                        </a>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        yield "                </div>
            </div>
        </div>

        ";
        // line 74
        if (((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 74, $this->source); })()) || (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 74, $this->source); })()))) {
            // line 75
            yield "            <div class=\"active-filters\">
                <span class=\"active-filters-label\">Filtres actifs :</span>
                ";
            // line 77
            if ((($tmp = (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 77, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 78
                yield "                    <span class=\"active-filter-badge\">
                        ";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 79, $this->source); })())), "html", null, true);
                yield "
                        <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 80, $this->source); })())]), "html", null, true);
                yield "\" class=\"remove-filter\">×</a>
                    </span>
                ";
            }
            // line 83
            yield "                ";
            if ((($tmp = (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 83, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 84
                yield "                    <span class=\"active-filter-badge\">
                        ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 85, $this->source); })()), "html", null, true);
                yield "
                        <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 86, $this->source); })())]), "html", null, true);
                yield "\" class=\"remove-filter\">×</a>
                    </span>
                ";
            }
            // line 89
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
            yield "\" class=\"clear-filters\">Réinitialiser tous les filtres</a>
            </div>
        ";
        }
        // line 92
        yield "    </div>
</section>

<section class=\"articles-section\">
    <div class=\"container\">
        ";
        // line 97
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 97, $this->source); })())) > 0)) {
            // line 98
            yield "            <div class=\"articles-grid\">
                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 99, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 100
                yield "                    <article class=\"article-card\">
                        <a href=\"";
                // line 101
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_article_show", ["slug" => CoreExtension::getAttribute($this->env, $this->source, $context["article"], "slug", [], "any", false, false, false, 101)]), "html", null, true);
                yield "\" class=\"article-link\">
                            <div class=\"article-image\">
                                ";
                // line 103
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageUrl", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 104
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "imageUrl", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 104), "html", null, true);
                    yield "\" loading=\"lazy\">
                                ";
                } else {
                    // line 106
                    yield "                                    <div class=\"article-image-placeholder\">🏰</div>
                                ";
                }
                // line 108
                yield "                                <div class=\"article-overlay\">
                                    <span class=\"read-more\">Lire l'article →</span>
                                </div>
                            </div>
                            <div class=\"article-content\">
                                ";
                // line 113
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["article"], "location", [], "any", false, false, false, 113)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 114
                    yield "                                    <span class=\"article-location\">📍 ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "location", [], "any", false, false, false, 114), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 116
                yield "                                <h2 class=\"article-title\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 116), "html", null, true);
                yield "</h2>
                                <p class=\"article-excerpt\">";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "excerpt", [], "any", false, false, false, 117), "html", null, true);
                yield "</p>
                                <div class=\"article-meta\">
                                    <span class=\"article-date\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["article"], "createdAt", [], "any", false, false, false, 119), "d M Y"), "html", null, true);
                yield "</span>
                                    <span class=\"article-author\">Par ";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["article"], "author", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                        </a>
                    </article>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['article'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "            </div>

            ";
            // line 128
            if (((isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 128, $this->source); })()) > 1)) {
                // line 129
                yield "                <div class=\"pagination\">
                    ";
                // line 130
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 130, $this->source); })()) > 1)) {
                    // line 131
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 131, $this->source); })()) - 1), "category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 131, $this->source); })()), "region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 131, $this->source); })())]), "html", null, true);
                    yield "\" class=\"pagination-link\">← Précédent</a>
                    ";
                }
                // line 133
                yield "                    
                    ";
                // line 134
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(range(1, (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 134, $this->source); })())));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 135
                    yield "                        ";
                    if (($context["page"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 135, $this->source); })()))) {
                        // line 136
                        yield "                            <span class=\"pagination-current\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</span>
                        ";
                    } else {
                        // line 138
                        yield "                            <a href=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["page" => $context["page"], "category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 138, $this->source); })()), "region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 138, $this->source); })())]), "html", null, true);
                        yield "\" class=\"pagination-link\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["page"], "html", null, true);
                        yield "</a>
                        ";
                    }
                    // line 140
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['page'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 141
                yield "                    
                    ";
                // line 142
                if (((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 142, $this->source); })()) < (isset($context["totalPages"]) || array_key_exists("totalPages", $context) ? $context["totalPages"] : (function () { throw new RuntimeError('Variable "totalPages" does not exist.', 142, $this->source); })()))) {
                    // line 143
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home", ["page" => ((isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 143, $this->source); })()) + 1), "category" => (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 143, $this->source); })()), "region" => (isset($context["selectedRegion"]) || array_key_exists("selectedRegion", $context) ? $context["selectedRegion"] : (function () { throw new RuntimeError('Variable "selectedRegion" does not exist.', 143, $this->source); })())]), "html", null, true);
                    yield "\" class=\"pagination-link\">Suivant →</a>
                    ";
                }
                // line 145
                yield "                </div>
            ";
            }
            // line 147
            yield "        ";
        } else {
            // line 148
            yield "            <div class=\"no-articles\">
                <p>Aucun article disponible pour le moment.</p>
            </div>
        ";
        }
        // line 152
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
        return "article/index.html.twig";
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
        return array (  457 => 152,  451 => 148,  448 => 147,  444 => 145,  438 => 143,  436 => 142,  433 => 141,  427 => 140,  419 => 138,  413 => 136,  410 => 135,  406 => 134,  403 => 133,  397 => 131,  395 => 130,  392 => 129,  390 => 128,  386 => 126,  374 => 120,  370 => 119,  365 => 117,  360 => 116,  354 => 114,  352 => 113,  345 => 108,  341 => 106,  333 => 104,  331 => 103,  326 => 101,  323 => 100,  319 => 99,  316 => 98,  314 => 97,  307 => 92,  300 => 89,  294 => 86,  290 => 85,  287 => 84,  284 => 83,  278 => 80,  274 => 79,  271 => 78,  269 => 77,  265 => 75,  263 => 74,  257 => 70,  250 => 68,  244 => 66,  240 => 64,  238 => 63,  235 => 62,  233 => 61,  230 => 60,  228 => 59,  225 => 58,  223 => 57,  217 => 56,  212 => 55,  208 => 54,  200 => 51,  196 => 50,  181 => 37,  172 => 34,  166 => 33,  161 => 32,  157 => 31,  149 => 28,  145 => 27,  124 => 8,  111 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body_class %}class=\"home-page\"{% endblock %}

{% block body %}
<section class=\"hero\">
    <div class=\"hero-content\">
        <h1 class=\"hero-title\">Monuments de France</h1>
        <p class=\"hero-subtitle\">Découvrez les joyaux architecturaux et sites historiques qui font la splendeur du patrimoine français</p>
    </div>
</section>

<section class=\"filters-section\">
    <div class=\"container\">
        <div class=\"filters-wrapper\">
            <div class=\"filter-group\">
                <h3 class=\"filter-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <path d=\"M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z\"></path>
                        <circle cx=\"12\" cy=\"10\" r=\"3\"></circle>
                    </svg>
                    Régions
                </h3>
                <div class=\"filter-buttons\">
                    <a href=\"{{ path('app_home', {category: selectedCategory}) }}\" 
                       class=\"filter-btn {% if not selectedRegion %}active{% endif %}\">
                        Toutes
                    </a>
                    {% for region in regions %}
                        <a href=\"{{ path('app_home', {region: region, category: selectedCategory}) }}\" 
                           class=\"filter-btn {% if selectedRegion == region %}active{% endif %}\">
                            {{ region }}
                        </a>
                    {% endfor %}
                </div>
            </div>

            <div class=\"filter-group\">
                <h3 class=\"filter-title\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"20\" height=\"20\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
                        <polygon points=\"12 2 2 7 12 12 22 7 12 2\"></polygon>
                        <polyline points=\"2 17 12 22 22 17\"></polyline>
                        <polyline points=\"2 12 12 17 22 12\"></polyline>
                    </svg>
                    Catégories
                </h3>
                <div class=\"filter-buttons\">
                    <a href=\"{{ path('app_home', {region: selectedRegion}) }}\" 
                       class=\"filter-btn {% if not selectedCategory %}active{% endif %}\">
                        Toutes
                    </a>
                    {% for category in categories %}
                        <a href=\"{{ path('app_home', {category: category, region: selectedRegion}) }}\" 
                           class=\"filter-btn {% if selectedCategory == category %}active{% endif %}\">
                            {% if category == 'monuments' %}
                                🏛️ Monuments
                            {% elseif category == 'châteaux' %}
                                🏰 Châteaux
                            {% elseif category == 'cathédrales' %}
                                ⛪ Cathédrales
                            {% elseif category == 'décors' %}
                                🌳 Décors
                            {% else %}
                                {{ category|capitalize }}
                            {% endif %}
                        </a>
                    {% endfor %}
                </div>
            </div>
        </div>

        {% if selectedCategory or selectedRegion %}
            <div class=\"active-filters\">
                <span class=\"active-filters-label\">Filtres actifs :</span>
                {% if selectedCategory %}
                    <span class=\"active-filter-badge\">
                        {{ selectedCategory|capitalize }}
                        <a href=\"{{ path('app_home', {region: selectedRegion}) }}\" class=\"remove-filter\">×</a>
                    </span>
                {% endif %}
                {% if selectedRegion %}
                    <span class=\"active-filter-badge\">
                        {{ selectedRegion }}
                        <a href=\"{{ path('app_home', {category: selectedCategory}) }}\" class=\"remove-filter\">×</a>
                    </span>
                {% endif %}
                <a href=\"{{ path('app_home') }}\" class=\"clear-filters\">Réinitialiser tous les filtres</a>
            </div>
        {% endif %}
    </div>
</section>

<section class=\"articles-section\">
    <div class=\"container\">
        {% if articles|length > 0 %}
            <div class=\"articles-grid\">
                {% for article in articles %}
                    <article class=\"article-card\">
                        <a href=\"{{ path('app_article_show', {slug: article.slug}) }}\" class=\"article-link\">
                            <div class=\"article-image\">
                                {% if article.imageUrl %}
                                    <img src=\"{{ article.imageUrl }}\" alt=\"{{ article.title }}\" loading=\"lazy\">
                                {% else %}
                                    <div class=\"article-image-placeholder\">🏰</div>
                                {% endif %}
                                <div class=\"article-overlay\">
                                    <span class=\"read-more\">Lire l'article →</span>
                                </div>
                            </div>
                            <div class=\"article-content\">
                                {% if article.location %}
                                    <span class=\"article-location\">📍 {{ article.location }}</span>
                                {% endif %}
                                <h2 class=\"article-title\">{{ article.title }}</h2>
                                <p class=\"article-excerpt\">{{ article.excerpt }}</p>
                                <div class=\"article-meta\">
                                    <span class=\"article-date\">{{ article.createdAt|date('d M Y') }}</span>
                                    <span class=\"article-author\">Par {{ article.author.name }}</span>
                                </div>
                            </div>
                        </a>
                    </article>
                {% endfor %}
            </div>

            {% if totalPages > 1 %}
                <div class=\"pagination\">
                    {% if currentPage > 1 %}
                        <a href=\"{{ path('app_home', {page: currentPage - 1, category: selectedCategory, region: selectedRegion}) }}\" class=\"pagination-link\">← Précédent</a>
                    {% endif %}
                    
                    {% for page in 1..totalPages %}
                        {% if page == currentPage %}
                            <span class=\"pagination-current\">{{ page }}</span>
                        {% else %}
                            <a href=\"{{ path('app_home', {page: page, category: selectedCategory, region: selectedRegion}) }}\" class=\"pagination-link\">{{ page }}</a>
                        {% endif %}
                    {% endfor %}
                    
                    {% if currentPage < totalPages %}
                        <a href=\"{{ path('app_home', {page: currentPage + 1, category: selectedCategory, region: selectedRegion}) }}\" class=\"pagination-link\">Suivant →</a>
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

", "article/index.html.twig", "/Users/quentinho/Projets/EEMI/Symfony/Miniblog/templates/article/index.html.twig");
    }
}
