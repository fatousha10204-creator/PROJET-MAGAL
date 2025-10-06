🧭 Présentation du projet

Magal Touba 2024 est une application web développée dans le cadre de l’organisation du Grand Magal de Touba 2024.
Elle a pour objectif de faciliter la gestion, la planification et la coordination des différentes activités, tout en offrant un tableau de bord clair et interactif.

Ce projet est conçu pour :

Simplifier la gestion des données relatives au Magal

Optimiser la communication entre les acteurs

Offrir une interface moderne et réactive via React

Assurer une sécurité et une fiabilité des opérations grâce à Laravel

✨ Fonctionnalités principales

Voici un aperçu des principales fonctionnalités disponibles dans l’application :

👥 Gestion des utilisateurs

Création, mise à jour et suppression de comptes utilisateurs

Attribution de rôles (admin, coordinateur, membre)

Authentification sécurisée avec Laravel Sanctum

🗂️ Gestion des activités

Ajout, modification et suppression d’activités liées au Magal

Organisation par catégories (logistique, hébergement, transport, communication...)

Suivi en temps réel de l’état d’avancement

📅 Planification

Visualisation des plannings journaliers et hebdomadaires

Notifications pour les événements importants

Rappels automatisés

📊 Tableau de bord

Indicateurs clés et statistiques globales

Graphiques de répartition des activités et ressources

Historique des actions

📁 Centralisation des données

Base de données unique et sécurisée

Exports de données au format CSV ou PDF
⚙️ Installation et configuration
🔧 Prérequis

Assurez-vous d’avoir installé :

PHP 8.2+

Composer

Node.js 18+

MySQL

Git

📥 Étapes d’installation

Cloner le projet

git clone https://github.com/ton-compte/magal-touba-2024.git
cd magal-touba-2024


Installer les dépendances Laravel

composer install


Installer les dépendances React

npm install


Configurer l’environnement

cp .env.example .env


Puis modifier les paramètres de base de données :

DB_DATABASE=magal_touba_2024
DB_USERNAME=root
DB_PASSWORD=


Générer la clé d’application

php artisan key:generate


Exécuter les migrations

php artisan migrate

▶️ Lancer le projet
Backend (Laravel)
php artisan serve


➡️ Serveur lancé sur http://localhost:8000

Frontend (React)

Dans un autre terminal :

npm run dev


➡️ Application accessible sur http://localhost:5173

🧪 Tests

Pour exécuter les tests unitaires Laravel :

php artisan test

🧭 Structure du projet
magal-touba-2024/
├── app/                # Code source Laravel
├── database/           # Migrations et seeders
├── routes/             # Fichiers de routes
├── public/             # Fichiers accessibles publiquement
├── resources/
│   ├── js/             # Dossier React (Vite)
│   └── views/
└── .env                # Variables d'environnement
🧑‍💻 Auteur

Fatou Diallo
📅 Année : 2024 - 2025
📧 Contact : (fatousha10204@gmail.com)

Ce projet a été réalisé dans le cadre de la préparation du Grand Magal de Touba 2024.
