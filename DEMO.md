# 🎬 Guide de Démonstration - Miniblog

## 🚀 Accès Rapide

**URL de l'application** : http://localhost:8000

**Serveur** : 
```bash
symfony server:start
# ou
php -S localhost:8000 -t public/
```

## 👥 Comptes de Test

### 👨‍💼 Administrateur
```
Email    : admin@miniblog.fr
Password : admin123
Rôle     : ROLE_ADMIN
```

### 👤 Utilisateur Standard
```
Email    : user@miniblog.fr
Password : user123
Rôle     : ROLE_USER
```

## 📍 Parcours de Démonstration

### 1️⃣ Page d'Accueil (/)
**Ce qu'on y voit :**
- 🎨 Hero section avec titre et description
- 📰 Grille de 9 articles (layout Masonry)
- 🏞️ Images des monuments français
- 📍 Localisation de chaque monument
- 📅 Date et auteur
- ⏭️ Pagination

**Points à montrer :**
- Design responsive et moderne
- Effet hover sur les cartes
- Animation au survol des images
- Bouton "Lire l'article"

### 2️⃣ Liste Complète (/articles)
**Ce qu'on y voit :**
- 📋 Tous les articles en liste
- 🖼️ Layout alternatif (liste horizontale)
- 💬 Nombre de commentaires par article
- 🔄 Pagination pour navigation

**Points à montrer :**
- Différence de layout avec la page d'accueil
- Informations plus détaillées
- Navigation intuitive

### 3️⃣ Détail d'un Article (/article/{slug})
**Exemple** : http://localhost:8000/article/la-tour-eiffel-le-symbole-de-paris

**Ce qu'on y voit :**
- 🏞️ Image hero en pleine largeur
- 📝 Contenu riche et formaté
- 📍 Badge de localisation
- 📊 Métadonnées (auteur, date, commentaires)
- 💬 Section commentaires
- ✍️ Formulaire d'ajout de commentaire

**Points à montrer :**
- Typographie élégante et lisible
- Système de commentaires fonctionnel
- Validation des champs du formulaire
- Messages flash de succès/erreur

### 4️⃣ Ajout de Commentaire
**Procédure :**
1. Aller sur n'importe quel article
2. Scroller jusqu'à "Ajouter un commentaire"
3. Remplir les champs :
   - Nom : "Marie Dupont"
   - Email : "marie@example.com"
   - Commentaire : "Magnifique article !"
4. Cliquer sur "Publier le commentaire"

**Résultat :**
- ✅ Message de succès
- 💬 Commentaire affiché immédiatement
- 🔄 Redirection vers l'article

### 5️⃣ Connexion (/login)
**Procédure :**
1. Aller sur /login
2. Utiliser les identifiants admin ou user
3. Se connecter

**Ce qu'on y voit :**
- 🎨 Page de connexion stylisée
- 🔒 Formulaire sécurisé (CSRF)
- 💡 Identifiants de test affichés
- ✅ Redirection après connexion

**Points à montrer :**
- Protection CSRF
- Hashage des mots de passe
- Navigation adaptée selon le statut (connecté/déconnecté)

### 6️⃣ Page 404 (/article/inexistant)
**Procédure :**
- Taper une URL inexistante : http://localhost:8000/article/monument-inexistant

**Ce qu'on y voit :**
- 🏰 Page d'erreur personnalisée
- 🎨 Design cohérent avec le site
- 🔙 Liens de retour (accueil, articles)

## 🎯 Fonctionnalités à Démontrer

### ✅ Fonctionnalités Techniques

#### 1. Base de Données & ORM
```bash
# Voir la structure
php bin/console doctrine:schema:validate

# Voir les entités
php bin/console debug:doctrine

# Voir les fixtures
php bin/console doctrine:fixtures:load
```

#### 2. Routes
```bash
# Lister toutes les routes
php bin/console debug:router

# Détail d'une route
php bin/console debug:router app_article_show
```

#### 3. Sécurité
```bash
# Voir la configuration de sécurité
php bin/console debug:firewall
```

#### 4. Cache
```bash
# Vider le cache
php bin/console cache:clear
```

### ✅ Fonctionnalités Métier

#### Articles
- [x] Affichage de 12 articles sur les monuments français
- [x] Pagination (9 articles par page)
- [x] Slugs SEO-friendly
- [x] Images de qualité (Unsplash)
- [x] Métadonnées complètes
- [x] Filtrage par publication

#### Commentaires
- [x] Ajout de commentaire (formulaire)
- [x] Validation côté serveur
- [x] Affichage des commentaires approuvés
- [x] Compteur de commentaires
- [x] Association article-commentaire

#### Authentification
- [x] Connexion sécurisée
- [x] Déconnexion
- [x] Navigation adaptée
- [x] Rôles utilisateurs
- [x] Protection CSRF

#### Interface
- [x] Design responsive (mobile, tablette, desktop)
- [x] Animations et transitions
- [x] Messages flash
- [x] Pages d'erreur personnalisées

## 📊 Données de Test

### Articles Disponibles

1. **La Tour Eiffel** - /article/la-tour-eiffel-le-symbole-de-paris
2. **Le Mont-Saint-Michel** - /article/le-mont-saint-michel-merveille-de-l-occident
3. **Le Château de Versailles** - /article/le-chateau-de-versailles-palais-du-roi-soleil
4. **Le Pont du Gard** - /article/le-pont-du-gard-aqueduc-romain-millenaire
5. **Notre-Dame de Paris** - /article/la-cathedrale-notre-dame-de-paris-joyau-gothique
6. **Les Châteaux de la Loire** - /article/les-chateaux-de-la-loire-tresors-de-la-renaissance
7. **La Cité de Carcassonne** - /article/la-cite-de-carcassonne-forteresse-medievale
8. **L'Arc de Triomphe** - /article/l-arc-de-triomphe-monument-de-la-gloire
9. **Le Palais des Papes** - /article/le-palais-des-papes-d-avignon-forteresse-pontificale
10. **La Sainte-Chapelle** - /article/la-sainte-chapelle-ecrin-de-lumiere
11. **Le Louvre** - /article/le-musee-du-louvre-palais-des-arts
12. **Les Arènes de Nîmes** - /article/les-arenes-de-nimes-amphitheatre-romain

### Commentaires Types
Chaque article contient 2-3 commentaires avec :
- Nom d'auteur varié
- Email fictif
- Contenu pertinent
- Date de création

## 🎨 Aspects Visuels à Mettre en Valeur

### Design Global
- ✨ Palette de couleurs harmonieuse (verts naturels)
- 📱 Responsive parfait (mobile-first)
- 🎭 Typographie élégante (Playfair + Poppins)
- 🌊 Transitions fluides

### Composants
- **Header** : Navigation sticky avec logo
- **Hero** : Bannière dégradée avec texte
- **Cards** : Hover avec overlay et bouton
- **Footer** : Multi-sections avec liens
- **Forms** : Inputs stylisés avec focus
- **Buttons** : Effets hover et transitions

### Animations
- Hover sur les cartes (translateY + shadow)
- Zoom sur les images
- Apparition de l'overlay
- Messages flash (slide-in)
- Transitions de navigation

## 🔍 Tests de Validation

### Formulaire de Commentaire
```
Test 1 : Champs vides
→ Message d'erreur "Tous les champs sont obligatoires"

Test 2 : Email invalide
→ Message d'erreur "L'adresse email n'est pas valide"

Test 3 : Données valides
→ Message de succès + commentaire affiché
```

### Authentification
```
Test 1 : Identifiants incorrects
→ Message d'erreur

Test 2 : Identifiants corrects
→ Connexion réussie + navigation adaptée

Test 3 : Déconnexion
→ Retour à l'état non connecté
```

### Navigation
```
Test 1 : Pagination
→ Navigation fluide entre les pages

Test 2 : Article inexistant
→ Page 404 personnalisée

Test 3 : Liens de retour
→ Navigation cohérente
```

## 📸 Points Photo/Vidéo pour Documentation

### Captures à Faire
1. Page d'accueil (hero + grille)
2. Détail d'un article (full page)
3. Section commentaires + formulaire
4. Page de connexion
5. Page 404
6. Version mobile (responsive)

### Vidéo de Démonstration (≤ 2 min)
1. **0:00-0:15** : Navigation sur la page d'accueil
2. **0:15-0:30** : Clic sur un article et lecture
3. **0:30-0:45** : Ajout d'un commentaire
4. **0:45-1:00** : Connexion
5. **1:00-1:15** : Navigation connecté
6. **1:15-1:30** : Test responsive (resize)
7. **1:30-2:00** : Retour aux features clés

## ✅ Checklist de Démonstration

Avant de présenter, vérifier :
- [ ] Serveur démarré (port 8000)
- [ ] Base de données avec fixtures chargées
- [ ] Cache vidé
- [ ] Navigateur avec bonne résolution
- [ ] Aucun message d'erreur dans les logs
- [ ] Identifiants de test notés
- [ ] URLs des articles notées
- [ ] Scénarios de test préparés

## 🎤 Script de Présentation (5 min)

**Minute 1** - Introduction
- Présenter le contexte (blog monuments français)
- Montrer la maquette Dribbble d'inspiration
- Annoncer les technologies (Symfony 7, Twig)

**Minute 2** - Navigation
- Démontrer la page d'accueil
- Montrer le design responsive
- Naviguer vers un article

**Minute 3** - Fonctionnalités
- Ajouter un commentaire (avec validation)
- Montrer le message de succès
- Se connecter avec un compte

**Minute 4** - Technique
- Expliquer l'architecture (MVC)
- Montrer les entités et relations
- Parler de la sécurité

**Minute 5** - Conclusion
- Récapituler les features
- Montrer le code (si demandé)
- Questions/réponses

## 🎯 Arguments de Vente

### Points Forts du Projet
1. **Design Professionnel** : Interface moderne et soignée
2. **Code Propre** : Architecture MVC respectée
3. **Sécurité** : Authentification complète et validations
4. **Données Riches** : 12 articles documentés avec images
5. **Responsive** : Adapté à tous les écrans
6. **Bonnes Pratiques** : Fixtures, migrations, documentation

### Aspects Techniques Avancés
- Relations Doctrine complexes (ManyToOne, OneToMany)
- Système de slugs automatiques
- Pagination manuelle optimisée
- Messages flash contextuels
- Pages d'erreur personnalisées
- Protection CSRF native

---

**Prêt pour la démo ? Let's go! 🚀**

*Bonne chance pour votre présentation !*

