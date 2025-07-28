# 🧾 Sistema de Gestão de Stock

![Laravel](https://img.shields.io/badge/Feito%20com-Laravel-red?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.x-blue?style=for-the-badge&logo=php&logoColor=white)
![MariaDB](https://img.shields.io/badge/MariaDB-10.x-lightgrey?style=for-the-badge&logo=mariadb&logoColor=003545)
![Vite](https://img.shields.io/badge/Vite-Dev%20Server-yellow?style=for-the-badge&logo=vite&logoColor=blue)
![DBeaver](https://img.shields.io/badge/Gestão%20BD-DBeaver-5c7f94?style=for-the-badge&logo=databricks&logoColor=white)

Aplicação web desenvolvida com **Laravel (PHP)** e **MariaDB**, com funcionalidades completas de **CRUD**, autenticação e painel administrativo.  
Projeto desenvolvido no âmbito da licenciatura em Engenharia Informática.

## ✨ Funcionalidades
- Autenticação de utilizadores (login/registo)
- Criação, edição e remoção de produtos
- Filtros por categoria e estado do stock
- Painel administrativo com resumo de dados
- Interface responsiva com Bootstrap
- Utilização do **Vite** para compilação do frontend

## 🛠️ Tecnologias e Ferramentas Utilizadas
- **Linguagem:** PHP 8.x  
- **Framework:** Laravel 10  
- **Base de Dados:** MariaDB  
- **Gestão da BD:** DBeaver  
- **Frontend:** Blade, HTML, CSS, Bootstrap  
- **Build e Dev Server:** Vite (`npm run dev`)  
- **Outras ferramentas:** Git, Composer, VS Code

  ## 📸 Capturas de Ecrã

### Painel Adicionar Produtos
![Painel Add](screenshots/itemsadd.png)

### List Produto
![List Item](screenshots/itemslist.png)

### Edit Produto
![List Item](screenshots/itemsedit.png)

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


## 🚀 Como executar localmente

```bash
# Clonar o repositório
git clone https://github.com/teu-username/stock-management-laravel.git
cd stock-management-laravel

# Instalar dependências do backend
composer install

# Instalar dependências do frontend
npm install

# Copiar ficheiro .env e gerar chave
cp .env.example .env
php artisan key:generate

# Configurar a base de dados no .env
DB_DATABASE=nome_da_base
DB_USERNAME=teu_utilizador
DB_PASSWORD=sua_password

# Migrar as tabelas
php artisan migrate

# Iniciar o servidor Laravel
php artisan serve

# Iniciar Vite (servidor de desenvolvimento do frontend)
npm run dev


