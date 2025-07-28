# 🧾 Stock Management System

![Laravel](https://img.shields.io/badge/Feito%20com-Laravel-red?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-blue?style=for-the-badge&logo=php&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-10.x-lightgrey?style=for-the-badge&logo=mariadb&logoColor=003545)
![Vite](https://img.shields.io/badge/Vite-Dev%20Server-yellow?style=for-the-badge&logo=vite&logoColor=blue)
![DBeaver](https://img.shields.io/badge/Gestão%20BD-DBeaver-5c7f94?style=for-the-badge&logo=databricks&logoColor=white)

Web application developed with **Laravel (PHP)** and **MariaDB**, with full **CRUD** functionality, authentication, and administrative panel.
Project developed as part of a degree in Computer Engineering.

## ✨ Features
- User authentication (login/registration)
- Creation, editing, and removal of products
- Filters by category and stock status
- Administrative panel with data summary
- Responsive interface with Bootstrap
- Use of **Vite** for frontend compilation

## 🛠️ Technologies and Tools Used
- **Language:** PHP 8.x
- **Framework:** Laravel 10  
- **Database:** MariaDB  
- **DB Management:** DBeaver  
- **Frontend:** Blade, HTML, CSS, Bootstrap  
- **Build and Dev Server:** Vite (`npm run dev`)  
- **Other tools:** Git, Composer, VS Code

  ## 📸 Screenshots

### Add Products Panel
![Add Item](screenshots/itemsadd.png)

### List Produto
![List Item](screenshots/itemslist.png)

### Edit Produto
![Edit Item](screenshots/itemsedit.png)

### Add Category
![Add Category](screenshots/categoryadd.png)

### List Category
![List Category](screenshots/categorylist.png)

### Edit Category
![Edit Category](screenshots/categoryedit.png)

### Add Brands
![Add Brand](screenshots/brandadd.png)

### List Brands
![List Brands](screenshots/brandlist.png)

### Edit Brands
![Edit Brands](screenshots/brandedit.png)

### Add Suppliers
![Add Suppliers](screenshots/supplieradd.png)

### List Suppliers
![List Suppliers](screenshots/supplierlist.png)

### Edit Suppliers
![Edit Suppliers](screenshots/supplieredit.png)


## 🚀 How to run locally

```bash
# Clone the repository
git clone https://github.com/teu-username/stock-management-laravel.git
cd stock-management-laravel

# Install backend dependencies
composer install

# Install frontend dependencies
npm install

# Copy .env file and generate key
cp .env.example .env
php artisan key:generate

# Configure the database in .env
DB_DATABASE=nome_da_base
DB_USERNAME=teu_utilizador
DB_PASSWORD=sua_password

# Migrate the tables
php artisan migrate

# Start the Laravel server
php artisan serve

# Start Vite (frontend development server)
npm run dev


