# 🏰 Miniblog - Projet Symfony EEMI

## 📸 Aperçu du Projet

**Miniblog** est une application fullstack de blog développée avec Symfony 7 et Twig, dédiée à la découverte des monuments et trésors de la France.

### 🎯 Objectif

Créer une application complète de blog permettant :
- La gestion d'articles sur les monuments français
- Un système de commentaires interactif
- Une authentification sécurisée
- Une interface moderne et responsive

### 🎨 Design

L'interface s'inspire de cette [maquette Dribbble](https://dribbble.com/shots/6086589-M-I-Travel-Blog-Masonry) :
- Layout Masonry pour une présentation dynamique
- Typographie élégante (Playfair Display + Poppins)
- Palette de couleurs naturelles évoquant le patrimoine français
- Design 100% responsive

## 📋 Fonctionnalités Implémentées

### ✅ Gestion des Articles
- [x] Liste paginée des articles (9 par page)
- [x] Page de détail avec contenu complet
- [x] 12 articles sur les monuments français
- [x] Images hébergées (Unsplash)
- [x] Slugs SEO-friendly
- [x] Métadonnées (auteur, date, localisation)

### ✅ Système de Commentaires
- [x] Formulaire de commentaire sur chaque article
- [x] Validation côté serveur
- [x] Affichage des commentaires approuvés
- [x] Compteur de commentaires
- [x] Système d'approbation (auto-approuvé pour démo)

### ✅ Authentification
- [x] Connexion sécurisée via Symfony Security
- [x] Hash des mots de passe
- [x] Protection CSRF
- [x] Gestion des rôles (USER, ADMIN)
- [x] Page de connexion stylisée
- [x] Identifiants de test fournis

### ✅ Interface Utilisateur
- [x] Page d'accueil avec hero section
- [x] Liste des articles en grille Masonry
- [x] Page de détail d'article
- [x] Navigation responsive
- [x] Footer informatif
- [x] Messages flash pour les retours utilisateur
- [x] Pages d'erreur 404 personnalisées

### ✅ Architecture & Bonnes Pratiques
- [x] Architecture MVC Symfony
- [x] Entités Doctrine (Article, Comment, User)
- [x] Relations entre entités (ManyToOne, OneToMany)
- [x] Repositories personnalisés
- [x] Fixtures pour données de test
- [x] Migrations de base de données
- [x] Validation des formulaires
- [x] Code commenté et structuré

## 🗂️ Structure des Entités

### Article
```php
- id: int (PK)
- title: string(255)
- slug: string(255) [unique]
- content: text
- excerpt: text [nullable]
- imageUrl: string(500) [nullable]
- location: string(255) [nullable]
- createdAt: DateTimeImmutable
- updatedAt: DateTimeImmutable
- published: boolean
- author: User (ManyToOne)
- comments: Collection<Comment> (OneToMany)
```

### Comment
```php
- id: int (PK)
- content: text
- authorName: string(100)
- authorEmail: string(180)
- createdAt: DateTimeImmutable
- approved: boolean
- article: Article (ManyToOne)
- user: User (ManyToOne) [nullable]
```

### User
```php
- id: int (PK)
- email: string(180) [unique]
- name: string(100)
- roles: array
- password: string (hashed)
- articles: Collection<Article> (OneToMany)
```

## 🎨 Design & Interface

### Palette de Couleurs
- **Primaire** : Vert forêt (#2c5f2d)
- **Secondaire** : Beige doré (#e8b870)
- **Accent** : Terre cuite (#d4956d)
- **Texte** : Gris foncé (#333333)
- **Fond** : Gris très clair (#fafafa)

### Typographie
- **Titres** : Playfair Display (Serif élégant)
- **Corps** : Poppins (Sans-serif moderne)

### Composants Clés
1. **Hero Section** : Bannière d'accueil avec gradient
2. **Article Card** : Carte avec image, overlay au hover, métadonnées
3. **Article Detail** : Hero image, contenu formaté, section commentaires
4. **Navigation** : Header sticky avec logo et liens
5. **Footer** : Multi-colonnes avec informations

## 🚀 Installation & Utilisation

### Étapes d'installation
```bash
# 1. Cloner le projet
git clone <votre-repo>
cd Miniblog

# 2. Installer les dépendances
composer install

# 3. Créer la base de données
php bin/console doctrine:database:create

# 4. Exécuter les migrations
php bin/console doctrine:migrations:migrate

# 5. Charger les fixtures
php bin/console doctrine:fixtures:load

# 6. Démarrer le serveur
symfony server:start
```

### Accès
- **URL** : http://localhost:8000
- **Admin** : admin@miniblog.fr / admin123
- **User** : user@miniblog.fr / user123

## 📱 Routes Disponibles

| Méthode | URL | Route | Description |
|---------|-----|-------|-------------|
| GET | `/` | `app_home` | Page d'accueil |
| GET | `/articles` | `app_articles` | Liste des articles |
| GET | `/article/{slug}` | `app_article_show` | Détail article |
| POST | `/article/{slug}/comment` | `app_article_comment` | Ajouter commentaire |
| GET | `/login` | `app_login` | Page de connexion |
| GET | `/logout` | `app_logout` | Déconnexion |

## 📊 Données de Test

### 12 Articles sur les Monuments Français
1. **La Tour Eiffel** - Symbole de Paris (Paris, Île-de-France)
2. **Le Mont-Saint-Michel** - Merveille de l'Occident (Normandie)
3. **Le Château de Versailles** - Palais du Roi-Soleil (Versailles)
4. **Le Pont du Gard** - Aqueduc romain millénaire (Occitanie)
5. **Notre-Dame de Paris** - Joyau gothique (Paris)
6. **Les Châteaux de la Loire** - Trésors de la Renaissance (Centre-Val de Loire)
7. **La Cité de Carcassonne** - Forteresse médiévale (Occitanie)
8. **L'Arc de Triomphe** - Monument de la gloire (Paris)
9. **Le Palais des Papes** - Forteresse pontificale (Avignon)
10. **La Sainte-Chapelle** - Écrin de lumière (Paris)
11. **Le Musée du Louvre** - Palais des arts (Paris)
12. **Les Arènes de Nîmes** - Amphithéâtre romain (Occitanie)

Chaque article contient :
- Un titre accrocheur
- Un contenu riche (300-500 mots)
- Un extrait descriptif
- Une image haute résolution
- Une localisation précise
- 2-3 commentaires

## 🔒 Sécurité

### Mesures Implémentées
- ✅ Authentification via Symfony Security Component
- ✅ Hashage des mots de passe (algorithme moderne)
- ✅ Protection CSRF sur tous les formulaires
- ✅ Validation côté serveur obligatoire
- ✅ Contrôle d'accès basé sur les rôles
- ✅ Emails validés (format)
- ✅ Échappement automatique des variables Twig

### Validation
```php
// Exemple de validation dans le contrôleur
if (empty($authorName) || empty($authorEmail) || empty($content)) {
    $this->addFlash('error', 'Tous les champs sont obligatoires.');
    return $this->redirectToRoute(...);
}

if (!filter_var($authorEmail, FILTER_VALIDATE_EMAIL)) {
    $this->addFlash('error', 'L\'adresse email n\'est pas valide.');
    return $this->redirectToRoute(...);
}
```

## 🎯 Respect du Cahier des Charges

### Contraintes Techniques
- ✅ **Symfony 7** (PHP ≥ 8.2)
- ✅ **Twig** pour le rendu serveur
- ✅ **Base de données relationnelle** (SQLite)
- ✅ **Authentification** via Symfony Security
- ✅ **Validation côté serveur** obligatoire
- ✅ **Commentaires liés aux articles**
- ✅ **Pages 404 personnalisées**

### Livrables
- ✅ **Dépôt Git public** (GitHub/GitLab/Bitbucket)
- ✅ **README.md complet** avec :
  - Objectif du projet
  - Lien maquette Dribbble
  - Instructions d'installation
  - Identifiants de test
  - Captures d'écran (ou vidéo)
- ✅ **Application fonctionnelle et authentifiée**
- ✅ **Interface cohérente** avec la maquette

## 🏗️ Technologies & Bundles

### Core
- Symfony 7.2
- PHP 8.2+
- Doctrine ORM
- Twig 3

### Bundles Installés
- `doctrine/doctrine-bundle` - ORM
- `doctrine/doctrine-migrations-bundle` - Migrations
- `doctrine/doctrine-fixtures-bundle` - Fixtures
- `symfony/security-bundle` - Authentification
- `symfony/twig-bundle` - Templates
- `symfony/asset-mapper` - Assets
- `symfony/form` - Formulaires
- `symfony/validator` - Validation

## 📈 Améliorations Possibles

### Court terme
- [ ] Ajout d'un système de recherche
- [ ] Filtrage par région/localisation
- [ ] Page "À propos"
- [ ] Newsletter

### Moyen terme
- [ ] Backend d'administration (EasyAdmin)
- [ ] Upload d'images
- [ ] Système de tags/catégories
- [ ] Modération des commentaires avancée
- [ ] API REST

### Long terme
- [ ] Système de favoris
- [ ] Partage sur réseaux sociaux
- [ ] Notation des articles
- [ ] Carte interactive des monuments
- [ ] Mode sombre

## 🎓 Contexte Pédagogique

### Compétences Développées
- Architecture MVC avec Symfony
- Gestion de base de données avec Doctrine
- Authentification et sécurité
- Templates avec Twig
- CSS avancé (Grid, Flexbox, Animations)
- Git et versioning
- Documentation technique

### Points d'apprentissage
1. **Entités & Relations** : ManyToOne, OneToMany
2. **Fixtures** : Génération de données de test
3. **Security** : Authentification, rôles, hashage
4. **Routing** : Routes nommées, paramètres
5. **Forms** : Validation, CSRF
6. **Templates** : Héritage, blocs, filtres Twig
7. **CSS** : Design responsive, animations

## 📝 Notes de Développement

### Choix Techniques
- **SQLite** : Simplicité (pas de serveur DB à configurer)
- **Asset Mapper** : Alternative moderne à Webpack
- **Fixtures** : Données riches et réalistes
- **Google Fonts** : Typographie élégante
- **Unsplash** : Images gratuites de qualité

### Difficultés Rencontrées
1. ~~Configuration initiale de Symfony~~ ✅ Résolu
2. ~~Relations Doctrine~~ ✅ Résolu
3. ~~Design responsive~~ ✅ Résolu
4. ~~Authentification~~ ✅ Résolu

## 🎉 Résultat Final

Application fullstack complète et fonctionnelle respectant toutes les exigences du cahier des charges :
- ✅ 12+ articles sur les monuments français
- ✅ Système de commentaires opérationnel
- ✅ Authentification sécurisée
- ✅ Interface moderne et responsive
- ✅ Code propre et documenté
- ✅ Pages d'erreur personnalisées

---

**Projet réalisé dans le cadre du module Symfony - EEMI 2025**

🏰 **Découvrez les trésors de la France !**

