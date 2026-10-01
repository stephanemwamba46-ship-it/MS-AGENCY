MS-AGENCY

MS-AGENCY : est une plateforme web développée avec Laravel pour présenter les services, formations et réalisations d'une agence digitale.

Le projet met en œuvre une architecture Laravel organisée avec des composants Blade réutilisables, une gestion des rôles et permissions ainsi qu'une interface moderne et responsive.

Fonctionnalités

* 🏠 Page d'accueil
* 👤 Présentation de l'agence
* 🛠️ Présentation des services
* 🎓 Présentation des formations
* 💼 Portfolio des réalisations
* 📩 Page de contact
* 🧩 Composants Blade réutilisables
* 🔐 Gestion des rôles et permissions

Technologies utilisées

Backend

* PHP
* Laravel
* Blade
* Laravel Eloquent
* MySQL

Frontend

* HTML
* CSS
* JavaScript
* Tailwind CSS
* Vite

Outils

* Git
* GitHub
* Composer
* npm
* Visual Studio Code

Structure du projet

MS-AGENCY/
├── app/
│   └── View/
│       └── Components/
│
├── config/
├── database/
│   ├── migrations/
│   └── seeders/
│
├── public/
│   └── images/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   └── web.php
│
├── composer.json
├── package.json
└── .gitignore
 
Installation

1. Cloner le projet

git clone https://github.com/stephanemwamba46-ship-it/MS-AGENCY.git
cd MS-AGENCY

2. Installer les dépendances PHP

composer install

3. Configurer l'environnement

Copier le fichier d'environnement :

cp .env.example .env

Sous Windows PowerShell, tu peux utiliser :

Copy-Item .env.example .env

Générer la clé Laravel :

php artisan key:generate

Puis configurer les paramètres de la base de données dans `.env`.

4. Installer les dépendances frontend

npm install

5. Lancer le serveur de développement

Dans un terminal :

php artisan serve

Dans un autre terminal :

npm run dev

Sécurité

Les informations sensibles telles que les mots de passe, clés secrètes, identifiants de base de données et variables d'environnement ne doivent pas être publiées sur GitHub.

Le fichier .env est volontairement exclu du dépôt grâce au .gitignore.

Aperçu

Des captures d'écran et une démonstration du projet pourront être ajoutées ultérieurement.

Auteur

Stéphane Mwamba

Développeur web & logiciel — solutions digitales et entrepreneuriat numérique.
Je transforme des idées en solutions digitales concrètes.

Licence

Ce projet est publié à des fins de présentation et de développement.
