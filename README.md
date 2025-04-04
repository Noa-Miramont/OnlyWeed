# 🌿 OnlyWeed - Marketplace Sécurisée pour Produits Artistique

## Lien du figma : https://www.figma.com/design/UsJ1VnzoN06dIWQrFxbahv/OnlyWeed?node-id=187-17&t=Kj4tzbxwPeG2Eo07-1

<<<<<<< HEAD
## 🛠 Technologies

### Frontend
twig

### Backend
PHP 8+
Symfony
MySQL
Apache

## 📁 Structure du Projet
```bash
=======
🛠 Technologies
Frontend
twig

Backend
PHP 8+ Symfony MySQL Apache

📁 Structure du Projet
>>>>>>> dev
├── assets/                       # Fichiers front-end (CSS, JS, images)
├── bin/                          # Scripts exécutables Symfony
├── config/                       # Configuration de l’application
├── migrations/                   # Migrations de base de données
├── public/                       # Point d’entrée du backend (index.php, assets exposés)
├── src/                          # Code source principal (Controllers, Entities, Services)
├── templates/                    # Fichiers de templates Twig (views)
├── tests/                        # Tests unitaires et fonctionnels
├── translations/                 # Fichiers de traduction pour l’internationalisation
├── var/                          # Cache, logs et fichiers temporaires
├── vendor/                       # Dépendances installées via Composer
│
├── .env                          # Variables d’environnement
├── .env.dev                      # Variables d’environnement pour le mode développement
├── .env.test                     # Variables d’environnement pour les tests
├── .gitignore                    # Fichiers et dossiers à exclure de Git
│
├── compose.override.yaml         # Configuration Docker spécifique
├── compose.yaml                  # Configuration Docker principale
├── composer.json                 # Dépendances et scripts PHP
├── composer.lock                 # Version verrouillée des dépendances PHP
├── importmap.php                 # Gestionnaire d’imports pour les assets JavaScript
├── phpunit.xml.dist              # Configuration de PHPUnit pour les tests
│
└── README.md                     # Documentation du projet
└── symfony.lock
<<<<<<< HEAD
```

## ⚙️ Installation
### 1. Cloner le projet

```bash
git clone https://github.com/2021413/OnlyWeed.git
cd OnlyWeed
```

### 2. Configuration du Backend
=======
⚙️ Installation
1. Cloner le projet
git clone https://github.com/2021413/OnlyWeed.git
cd OnlyWeed
2. Configuration du Backend
>>>>>>> dev
Assurez-vous d’avoir PHP 8+, Apache/Nginx et MySQL/MariaDB installés.

Importez le fichier schema.sql situé dans database/ dans votre base de données.

<<<<<<< HEAD
### Configurez les paramètres dans backend/src/config/env.php :

```bash
=======
Configurez les paramètres dans backend/src/config/env.php :
>>>>>>> dev
define('DB_HOST', 'localhost');
define('DB_NAME', 'onlyweed');
define('DB_USER', 'root');
define('DB_PASS', 'secret');
define('JWT_SECRET', 'votre_cle_secrete_jwt');
<<<<<<< HEAD
```

### 3. Lancement du Frontend
```bash
symfony server:start
```
puis aller a l'url indiqué par le serveur


### 🔒 Prérequis
=======
3. Lancement du Frontend
symfony server:start
puis aller a l'url indiqué par le serveur

🔒 Prérequis
>>>>>>> dev
PHP ≥ 8.0

MySQL / MariaDB

Apache ou Nginx (avec mod_rewrite activé)

Node.js ≥ 16

<<<<<<< HEAD
npm ≥ 8
=======
npm ≥ 8
>>>>>>> dev
