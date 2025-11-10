# 🏰 Miniblog - Découvrez les Trésors de la France

Application fullstack de blog développée avec **Symfony 7** et **Twig**, dédiée à la découverte des monuments et merveilles architecturales de la France.

## 📋 Objectif du Projet

Développer une application complète de type blog avec Symfony 7 et Twig. L'application permet la gestion d'articles et de commentaires, inclut un système d'authentification, une interface inspirée d'un design Dribbble, et respecte les bonnes pratiques de structure et de sécurité.

## ✨ Fonctionnalités

### Gestion des Articles
- ✅ **Affichage** : Plus de 12 articles sur les monuments français
- ✅ **CRUD complet** : Créer, modifier, supprimer des articles
- ✅ **Dashboard admin** : Interface de gestion pour les auteurs
- ✅ **Pagination** : Navigation fluide entre les articles
- ✅ **Brouillons** : Publier ou garder en brouillon

### Système de Commentaires
- ✅ **Commenter** : Les visiteurs peuvent commenter les articles
- ✅ **Modération** : Les admins peuvent supprimer les commentaires
- ✅ **Validation** : Validation des formulaires côté serveur

### Sécurité & Authentification
- ✅ **Connexion sécurisée** : Login avec hash de mot de passe
- ✅ **Rôles** : ROLE_USER et ROLE_ADMIN
- ✅ **Voter** : Contrôle des droits sur les articles
- ✅ **Protection CSRF** : Sur tous les formulaires

### Design & UX
- ✅ **Interface moderne** : Inspiré de [la maquette Dribbble](https://dribbble.com/shots/6086589-M-I-Travel-Blog-Masonry)
- ✅ **Header transparent** : Avec effet blur et glassmorphism
- ✅ **Hero fullscreen** : Image de monument en fond
- ✅ **100% Responsive** : Mobile, tablette, desktop
- ✅ **Pages d'erreur** : 404, 500 personnalisées

## 🛠️ Technologies Utilisées

- **PHP 8.2+**
- **Symfony 7** (Framework PHP)
- **Twig** (Moteur de templates)
- **Doctrine ORM** (Base de données)
- **SQLite** (Base de données légère)
- **Symfony Security** (Authentification)
- **Asset Mapper** (Gestion des assets)

## 📦 Installation

### Prérequis

- PHP 8.2 ou supérieur
- Composer
- Symfony CLI (recommandé)

### Étapes d'installation

1. **Cloner le projet**
```bash
git clone <votre-repo>
cd Miniblog
```

2. **Installer les dépendances**
```bash
composer install
```

3. **Configurer la base de données**

Le projet utilise SQLite par défaut. La configuration est déjà dans `.env.local` :
```env
DATABASE_URL="sqlite:///%kernel.project_dir%/var/data.db"
```

4. **Créer la base de données et exécuter les migrations**
```bash
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate
```

5. **Charger les fixtures (données de test)**
```bash
php bin/console doctrine:fixtures:load
```

Cette commande créera automatiquement :
- 2 utilisateurs de test
- 12 articles sur les monuments français (Tour Eiffel, Mont-Saint-Michel, Versailles, etc.)
- Des commentaires sur chaque article

## 🚀 Démarrage

### Avec Symfony CLI (recommandé)
```bash
symfony server:start
```

### Avec PHP
```bash
php -S localhost:8000 -t public/
```

L'application sera accessible sur **http://localhost:8000**

## 👤 Identifiants de Test

### Administrateur
- **Email** : `admin@miniblog.fr`
- **Mot de passe** : `admin123`

### Utilisateur
- **Email** : `user@miniblog.fr`
- **Mot de passe** : `user123`

## 📂 Structure du Projet

```
Miniblog/
├── assets/               # CSS et JavaScript
│   └── styles/
│       └── app.css      # Styles personnalisés
├── config/              # Configuration Symfony
├── migrations/          # Migrations de base de données
├── public/              # Point d'entrée (index.php)
├── src/
│   ├── Controller/      # Contrôleurs
│   │   ├── ArticleController.php
│   │   └── SecurityController.php
│   ├── Entity/          # Entités Doctrine
│   │   ├── Article.php
│   │   ├── Comment.php
│   │   └── User.php
│   ├── Repository/      # Repositories
│   └── DataFixtures/    # Fixtures de données
└── templates/           # Templates Twig
    ├── article/
    │   ├── index.html.twig
    │   ├── list.html.twig
    │   └── show.html.twig
    ├── security/
    │   └── login.html.twig
    └── base.html.twig
```

## 🎨 Design

L'interface est inspirée de cette [maquette Dribbble](https://dribbble.com/shots/6086589-M-I-Travel-Blog-Masonry) avec :

- **Layout Masonry** : Grille responsive pour l'affichage des articles
- **Typographie élégante** : Playfair Display pour les titres, Poppins pour le corps
- **Palette de couleurs** : Tons verts naturels évoquant le patrimoine français
- **Design responsive** : Adapté mobile, tablette et desktop
- **Animations fluides** : Effets hover et transitions douces

## 🔒 Sécurité

- ✅ **Authentification** via le système de sécurité Symfony
- ✅ **Hashage des mots de passe** avec l'algorithme moderne de Symfony
- ✅ **Protection CSRF** sur tous les formulaires
- ✅ **Validation côté serveur** pour tous les champs de formulaire
- ✅ **Contrôle d'accès** basé sur les rôles (`ROLE_USER`, `ROLE_ADMIN`)

## 📱 Routes Principales

### Routes Publiques
| Route | URL | Description |
|-------|-----|-------------|
| `app_home` | `/` | Page d'accueil avec liste des articles |
| `app_articles` | `/articles` | Liste complète des articles |
| `app_article_show` | `/article/{slug}` | Détail d'un article |
| `app_article_comment` | `/article/{slug}/comment` | Ajouter un commentaire (POST) |
| `app_login` | `/login` | Connexion |
| `app_logout` | `/logout` | Déconnexion |

### Routes Administration (Connecté)
| Route | URL | Description |
|-------|-----|-------------|
| `app_admin_dashboard` | `/admin/` | Dashboard d'administration |
| `app_admin_article_new` | `/admin/article/new` | Créer un nouvel article |
| `app_admin_article_edit` | `/admin/article/{id}/edit` | Modifier un article |
| `app_admin_article_delete` | `/admin/article/{id}/delete` | Supprimer un article (POST) |
| `app_admin_comment_delete` | `/admin/comment/{id}/delete` | Supprimer un commentaire (POST, ADMIN) |

## 🗃️ Entités

### Article
- Titre, slug, contenu, extrait
- Image URL, localisation
- Dates de création/modification
- Statut de publication
- Relation avec User (auteur)
- Relation OneToMany avec Comment

### Comment
- Contenu, nom et email de l'auteur
- Date de création
- Statut d'approbation
- Relation avec Article

### User
- Email (identifiant unique)
- Nom, mot de passe hashé
- Rôles (ROLE_USER, ROLE_ADMIN)
- Relation OneToMany avec Article

## 📊 Données de Test

Le projet inclut 12 articles sur les monuments français :

1. La Tour Eiffel
2. Le Mont-Saint-Michel
3. Le Château de Versailles
4. Le Pont du Gard
5. Notre-Dame de Paris
6. Les Châteaux de la Loire
7. La Cité de Carcassonne
8. L'Arc de Triomphe
9. Le Palais des Papes d'Avignon
10. La Sainte-Chapelle
11. Le Musée du Louvre
12. Les Arènes de Nîmes

## 🎯 Fonctionnalités Avancées

### Backend
- **CRUD complet** : Créer, lire, modifier, supprimer des articles
- **Voter Symfony** : Contrôle granulaire des permissions
- **Slugs SEO-friendly** : URLs optimisées pour le référencement
- **Timestamps automatiques** : Dates de création et modification gérées automatiquement
- **Formulaires Symfony** : Validation côté serveur avec contraintes
- **Messages flash** : Retours visuels pour toutes les actions

### Frontend
- **Dashboard responsive** : Interface d'administration moderne
- **Header transparent** : Effet glassmorphism avec blur
- **Hero immersif** : Image fullscreen qui passe sous le header
- **Scroll dynamique** : Header change au scroll
- **Pagination** : Navigation intuitive entre les pages
- **Commentaires modérables** : Les admins peuvent supprimer

## 🧪 Commandes Utiles

```bash
# Créer une nouvelle entité
php bin/console make:entity

# Créer une migration
php bin/console make:migration

# Exécuter les migrations
php bin/console doctrine:migrations:migrate

# Charger les fixtures
php bin/console doctrine:fixtures:load

# Vider le cache
php bin/console cache:clear

# Lister les routes
php bin/console debug:router
```

## 📝 Licence

Projet éducatif - EEMI 2025

## 👨‍💻 Auteur

Développé dans le cadre du module Symfony - EEMI

## 🎓 Contexte Pédagogique

Ce projet respecte le cahier des charges suivant :
- ✅ Utilisation de Symfony 7 avec PHP ≥ 8.2
- ✅ Twig pour le rendu serveur
- ✅ Base de données relationnelle (SQLite)
- ✅ Authentification et autorisation via Symfony Security
- ✅ Validation côté serveur obligatoire
- ✅ Gestion des commentaires liés aux articles
- ✅ Pages d'erreur 404 personnalisées
- ✅ Interface inspirée d'une maquette Dribbble
- ✅ Structure et bonnes pratiques respectées

---

**Enjoy discovering the treasures of France! 🇫🇷**

