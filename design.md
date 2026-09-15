# Design Document — Portfolio (Plan de Construction)

> Ce document est le plan de référence pour construire et achever le portfolio.
> Chaque section décrit ce qui doit être fait, comment, et avec quels fichiers.

---

## 1. Stack technique

| Technologie       | Version | Rôle                                   |
| :---------------- | :------ | :------------------------------------- |
| PHP               | ^8.3    | Langage backend                        |
| Laravel           | ^13.17  | Framework backend                      |
| Livewire          | ^4.4    | Composants interactifs côté serveur    |
| Tailwind CSS      | ^4.0    | Framework CSS utilitaire               |
| Vite              | ^8.0    | Bundler d'assets (CSS, JS)             |
| Alpine.js         | —       | Interactivité JS légère (via Livewire) |
| SQLite            | —       | Base de données (fichier local)        |
| Google Fonts      | —       | Typographie (Roboto)                   |

---

## 2. Sections de la page

La page unique (`portfolio.blade.php`) contient **5 sections** dans cet ordre :

| #  | Section        | ID HTML        | Type de composant        |
| :- | :------------- | :------------- | :----------------------- |
| 1  | Accueil (Hero) | `#accueil`     | Blade statique           |
| 2  | Projets        | `#projets`     | Composant Livewire       |
| 3  | Compétences    | `#competences` | Blade statique           |
| 4  | À Propos       | `#a-propos`    | Blade statique           |
| 5  | Contact        | `#contact`     | Composant Livewire       |

> **Note** : La section **Parcours** (timeline verticale) sera intégrée **dans** la section À Propos.

---

## 3. Design visuel

### 3.1 Thème et Dark Mode

- **Thème par défaut** : Clair (fond `bg-gray-50`, texte `text-gray-900`)
- **Dark Mode** : Activable via un bouton toggle dans la navbar
- **Mécanisme** : Classe `dark` sur `<html>` + Alpine.js + `localStorage` pour persister le choix
- **Implémentation** : Utiliser le préfixe `dark:` de Tailwind sur chaque élément

### 3.2 Palette de couleurs

| Rôle              | Mode Clair                            | Mode Sombre                          |
| :---------------- | :------------------------------------ | :----------------------------------- |
| Fond de page      | `bg-gray-50`                          | `dark:bg-gray-950`                   |
| Texte principal   | `text-gray-900`                       | `dark:text-gray-100`                 |
| Texte secondaire  | `text-gray-600`                       | `dark:text-gray-400`                 |
| Accent primaire   | `text-blue-600` / `bg-blue-600`       | `dark:text-blue-400` / `dark:bg-blue-500` |
| Fond carte        | `bg-white`                            | `dark:bg-gray-900`                   |
| Bordures          | `border-gray-200`                     | `dark:border-gray-800`               |

### 3.3 Typographie

- Police principale : **Roboto** (Google Fonts)
- Poids utilisés : 300 (light), 400 (regular), 500 (medium), 700 (bold), 900 (black)

### 3.4 Éléments décoratifs

- Dégradés flottants en arrière-plan (bleu, violet, rose, vert) avec `blur-[120px]`
- Grille de fond subtile en pointillés (`4rem` d'espacement)
- Ces éléments doivent s'adapter au dark mode

---

## 4. Détail de chaque section

### 4.1 Section Accueil / Hero (`#accueil`) — ✅ EXISTANTE

**Statut** : Déjà implémentée dans `portfolio.blade.php`.

**Contenu** :
- Badge "Full-Stack Developer • Aspirant Data Scientist"
- Titre d'impact avec gradient
- Paragraphe de présentation
- 2 boutons CTA : "Découvrir mes projets" → `#projets` / "Prendre contact" → `#contact`

**Fichiers** : `resources/views/portfolio.blade.php`

---

### 4.2 Section Projets (`#projets`) — ❌ À CRÉER

**Objectif** : Afficher les projets du portfolio depuis la base de données SQLite.

**Composant** : Livewire (`ProjectList`)

**Affichage** :
- Grille responsive de cartes (1 col mobile, 2 cols tablette, 3 cols desktop)
- Chaque carte contient :
  - Image/capture d'écran du projet
  - Titre du projet
  - Description courte
  - Tags des technologies utilisées (badges)
  - Liens : voir le site / voir le code (GitHub)

**Schéma de la table `projects`** :

| Colonne        | Type         | Description                          |
| :------------- | :----------- | :----------------------------------- |
| `id`           | bigint (PK)  | Identifiant auto-incrémenté         |
| `title`        | string       | Titre du projet                      |
| `description`  | text         | Description du projet                |
| `image`        | string       | Chemin de l'image (storage)          |
| `technologies` | string       | Technologies utilisées (séparées par virgule) |
| `url`          | string (nullable) | Lien vers le site en ligne      |
| `github_url`   | string (nullable) | Lien vers le dépôt GitHub       |
| `is_featured`  | boolean      | Projet mis en avant (oui/non)        |
| `order`        | integer      | Ordre d'affichage                    |
| `timestamps`   | —            | created_at / updated_at              |

**Fichiers à créer/modifier** :
- `database/migrations/xxxx_create_projects_table.php` (modifier la migration existante)
- `app/Models/Project.php` (ajouter les colonnes fillable)
- `app/Livewire/ProjectList.php` (nouveau composant Livewire)
- `resources/views/livewire/project-list.blade.php` (vue du composant)
- `database/seeders/ProjectSeeder.php` (données de démo)

---

### 4.3 Section Compétences (`#competences`) — ❌ À CRÉER

**Objectif** : Afficher les compétences techniques organisées par catégories.

**Composant** : Blade statique (pas besoin de Livewire)

**Organisation par catégories** :

| Catégorie   | Exemples de compétences                            |
| :---------- | :------------------------------------------------- |
| Frontend    | HTML, CSS, JavaScript, Tailwind CSS, Alpine.js     |
| Backend     | PHP, Laravel, Livewire, MySQL, SQLite, REST API    |
| Data Science| Python, Pandas, NumPy, Matplotlib, Scikit-learn    |
| Outils      | Git, GitHub, VS Code, Docker, Linux                |

**Affichage** :
- 4 cartes (une par catégorie)
- Chaque carte contient : icône de catégorie, titre, liste des technologies avec leurs icônes/logos
- Style : cartes avec bordure subtile, hover effect, fond semi-transparent

**Fichiers à créer** :
- `resources/views/components/skills-section.blade.php` (composant Blade)

---

### 4.4 Section À Propos + Parcours (`#a-propos`) — ❌ À CRÉER

**Objectif** : Présenter le développeur et son parcours sous forme de timeline.

**Composant** : Blade statique

**Contenu** :
- **Partie haute** : Texte de présentation (bio personnelle, motivations, objectifs)
- **Partie basse** : Timeline verticale du parcours

**Timeline** :
- Ligne verticale centrale (ou à gauche sur mobile)
- Chaque étape contient : date, titre (école/poste), description, type (formation/expérience)
- Les étapes alternent gauche/droite sur desktop
- Icônes différentes pour formation 🎓 et expérience 💼

**Fichiers à créer** :
- `resources/views/components/about-section.blade.php` (composant Blade)
- `resources/views/components/timeline.blade.php` (composant Blade réutilisable)

---

### 4.5 Section Contact (`#contact`) — ❌ À CRÉER

**Objectif** : Permettre aux visiteurs d'envoyer un message par email via un formulaire Livewire.

**Composant** : Livewire (`ContactForm`)

**Champs du formulaire** :
- Nom complet (requis)
- Adresse email (requis, validé)
- Sujet (requis)
- Message (requis, textarea)
- Bouton "Envoyer"

**Comportement** :
- Validation côté serveur avec les règles Laravel
- Envoi d'un email via `Mail::to()` à l'adresse du propriétaire du portfolio
- Message de confirmation affiché après envoi réussi
- Pas de stockage en BDD (envoi email uniquement)

**Fichiers à créer/modifier** :
- `app/Livewire/ContactForm.php` (composant Livewire)
- `resources/views/livewire/contact-form.blade.php` (vue du formulaire)
- `app/Mail/ContactMail.php` (classe Mailable)
- `resources/views/mail/contact.blade.php` (template de l'email)
- `.env` (configurer MAIL_MAILER, MAIL_HOST, etc.)

---

## 5. Composants existants à modifier

### 5.1 Layout (`components/layouts/app.blade.php`)

Modifications nécessaires :
- Ajouter le mécanisme dark mode (classe `dark` sur `<html>`, script Alpine.js)
- Adapter les dégradés décoratifs pour le dark mode

### 5.2 Navbar (`components/navbar.blade.php`)

Modifications nécessaires :
- Ajouter un bouton toggle dark mode (icône soleil/lune)
- Mettre à jour les liens de navigation pour correspondre aux 5 sections
- Adapter les couleurs pour le dark mode

### 5.3 Footer (dans `layouts/app.blade.php`)

Modifications nécessaires :
- Adapter les couleurs pour le dark mode
- Mettre à jour la navigation du footer pour correspondre aux 5 sections

---

## 6. Base de données

- **SGBD** : SQLite (`database/database.sqlite`)
- **Seule table personnalisée utilisée** : `projects`
- **Tables `skills` et `contact_messages`** : supprimer les migrations inutiles (compétences en dur dans Blade, contact par email uniquement)

---

## 7. Arborescence finale visée

```
Portfolio/
├── app/
│   ├── Livewire/
│   │   ├── ContactForm.php            # [NOUVEAU] Formulaire de contact
│   │   └── ProjectList.php            # [NOUVEAU] Liste des projets
│   ├── Mail/
│   │   └── ContactMail.php            # [NOUVEAU] Email de contact
│   ├── Models/
│   │   ├── Project.php                # [MODIFIER] Ajouter fillable
│   │   └── User.php
│   └── Http/Controllers/
├── database/
│   ├── database.sqlite
│   ├── migrations/
│   │   ├── create_users_table.php
│   │   └── create_projects_table.php  # [MODIFIER] Ajouter colonnes
│   └── seeders/
│       └── ProjectSeeder.php          # [NOUVEAU] Données de démo
├── resources/
│   ├── css/app.css
│   └── views/
│       ├── portfolio.blade.php        # [MODIFIER] Ajouter toutes les sections
│       ├── components/
│       │   ├── layouts/
│       │   │   └── app.blade.php      # [MODIFIER] Dark mode + adaptations
│       │   ├── navbar.blade.php       # [MODIFIER] Toggle dark mode + liens
│       │   ├── skills-section.blade.php   # [NOUVEAU]
│       │   ├── about-section.blade.php    # [NOUVEAU]
│       │   └── timeline.blade.php         # [NOUVEAU]
│       ├── livewire/
│       │   ├── project-list.blade.php     # [NOUVEAU]
│       │   └── contact-form.blade.php     # [NOUVEAU]
│       └── mail/
│           └── contact.blade.php          # [NOUVEAU] Template email
└── routes/
    └── web.php                        # Pas de modification nécessaire
```

---

## 8. Ordre de construction recommandé

| Étape | Tâche                                              |
| :---- | :------------------------------------------------- |
| 1     | Implémenter le dark mode (layout + navbar + footer) |
| 2     | Créer la section Compétences (Blade statique)       |
| 3     | Créer la section À Propos + Timeline (Blade statique) |
| 4     | Modifier la migration `projects` + modèle + seeder  |
| 5     | Créer le composant Livewire `ProjectList`            |
| 6     | Créer le composant Livewire `ContactForm` + Mailable |
| 7     | Assembler toutes les sections dans `portfolio.blade.php` |
| 8     | Tests et ajustements responsive / dark mode          |

---

## 9. Règles de développement

1. **Blade Components** : Composants Blade anonymes (`x-composant`) pour les éléments réutilisables
2. **Livewire** : Uniquement pour les composants interactifs (formulaire contact, liste projets)
3. **Alpine.js** : Interactions visuelles côté client (menu mobile, dark mode toggle, animations)
4. **Tailwind CSS** : Tout le style en classes utilitaires dans les templates Blade
5. **Dark Mode** : Préfixe `dark:` sur chaque élément, persisté via `localStorage`
6. **Responsive** : Mobile-first avec breakpoints Tailwind (`sm:`, `md:`, `lg:`)
7. **Langue** : Interface en **français**
8. **Images** : Stockées dans `storage/app/public/projects/`, servies via `Storage::url()`
