# ⚡ Quick Start - Miniblog

## 🚀 Démarrage Rapide (3 minutes)

### 1️⃣ Vérifier l'installation
```bash
php --version    # PHP 8.2+ requis
composer --version
symfony --version  # optionnel
```

### 2️⃣ Démarrer l'application
```bash
# Depuis le dossier Miniblog
symfony server:start
# OU
php -S localhost:8000 -t public/
```

### 3️⃣ Accéder à l'application
🌐 **http://localhost:8000**

## 👤 Connexion Rapide

### Admin
```
Email: admin@miniblog.fr
Pass:  admin123
```

### User
```
Email: user@miniblog.fr
Pass:  user123
```

## 📍 Pages Principales

| URL | Page |
|-----|------|
| `/` | Accueil |
| `/articles` | Liste articles |
| `/article/la-tour-eiffel-le-symbole-de-paris` | Exemple article |
| `/login` | Connexion |

## 🔄 Réinitialiser les Données

```bash
# Vider et recharger la base
php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:migrations:migrate --no-interaction
php bin/console doctrine:fixtures:load --no-interaction
```

## 🧪 Tester une Fonctionnalité

### Ajouter un Commentaire
1. Aller sur n'importe quel article
2. Scroller vers le bas
3. Remplir le formulaire :
   - Nom : `Test User`
   - Email : `test@example.com`
   - Commentaire : `Super article !`
4. Cliquer "Publier le commentaire"
5. ✅ Commentaire affiché !

## 📊 Commandes Utiles

```bash
# Lister les routes
php bin/console debug:router

# Vider le cache
php bin/console cache:clear

# Voir les entités
php bin/console debug:doctrine

# Requête SQL directe
php bin/console doctrine:query:sql "SELECT * FROM article LIMIT 5"
```

## 🐛 Dépannage

### Erreur "Port déjà utilisé"
```bash
# Changer de port
symfony server:start --port=8001
# OU
php -S localhost:8001 -t public/
```

### Base de données vide
```bash
php bin/console doctrine:fixtures:load --no-interaction
```

### Erreur de cache
```bash
php bin/console cache:clear
rm -rf var/cache/*
```

## 📚 Documentation Complète

- **README.md** - Installation et fonctionnalités
- **PROJET.md** - Détails techniques complets
- **DEMO.md** - Guide de démonstration
- **STATS.md** - Statistiques du projet

## ✅ Vérification Rapide

Tout fonctionne si vous voyez :
- ✅ Page d'accueil avec 9 articles
- ✅ Images chargées
- ✅ Navigation fonctionnelle
- ✅ Login opérationnel

## 🎯 Démo Express (30 secondes)

1. **Page d'accueil** → Voir la grille d'articles
2. **Cliquer sur un article** → Lire le contenu
3. **Ajouter un commentaire** → Tester le formulaire
4. **Se connecter** → Utiliser admin@miniblog.fr / admin123

---

**C'est parti ! 🚀**

*Pour plus d'infos, voir README.md*

