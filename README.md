# 🛍️ TifawinSouk – Application Web de Gestion de Catalogue

## 📌 Contexte du projet
Dans le cadre de la digitalisation de son activité, **TifawinSouk**, une PME marocaine spécialisée dans le commerce local, souhaite disposer d’une application web permettant :

- Au personnel administratif de gérer les **catégories** et les **produits** (Back-Office)
- Aux clients de consulter les **catégories** et les **produits** via une interface publique simple

Ce projet est réalisé dans un cadre **pédagogique**, avec Laravel, et s’adresse à un développeur **débutant sur le framework**.

## 🎯 Objectifs du projet
- Mettre en place un **Back-Office sécurisé**
- Implémenter les **opérations CRUD**
- Créer une **interface publique minimale**
- Respecter les **bonnes pratiques Laravel**

## 🧩 Fonctionnalités
### 🔐 Authentification
- Connexion administrateur sécurisée
- Accès protégé au back-office

### 📂 Gestion des catégories
- CRUD catégories
- Champs : id, nom, slug, description

### 📦 Gestion des produits
- CRUD produits (Soft Deletes)
- Prix, stock, image, catégorie

### 🌐 Interface publique
- Liste des catégories
- Produits par catégorie
- Fiche produit

## 🛠️ Technologies
- Laravel
- Blade
- MySQL
- Laravel Breeze
- Git / GitHub

## 🚀 Installation
```bash
git clone https://github.com/your-username/tifawinsouk.git
cd tifawinsouk
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
```

## 👤 Accès administrateur
- Email : admin@tifawinsouk.ma
- Mot de passe : password

## 📄 Licence
Projet pédagogique.
