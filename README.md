# 💻 Online Code Snippet Manager (PHP Project)

A modern **PHP + MySQL** web application to save, manage, and organize code snippets with syntax highlighting, user authentication, and AJAX functionality.

## 🚀 Features

- User Registration / Login / Logout
- Password Hashing Security
- Add / View / Delete Snippets
- AJAX Save/Delete (No Page Reload)
- Syntax Highlighting using Prism.js
- Bootstrap 5 Responsive UI
- Dark Theme Dashboard

  ---

## 🛠 Tech Stack

- PHP 8+
- MySQL
- PDO
- Bootstrap 5
- JavaScript (Fetch API)
- Prism.js

  ---

## 📁 Project Structure

```bash
snippet-manager/
├── config/db.php
├── auth/login.php
├── auth/register.php
├── auth/logout.php
├── snippets/add.php
├── snippets/fetch.php
├── snippets/delete.php
├── includes/header.php
├── includes/footer.php
├── assets/js/script.js
├── dashboard.php
└── index.php
```
---

## 🗄 Database Setup

```sql
CREATE DATABASE snippet_manager;
USE snippet_manager;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE snippets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    title VARCHAR(255),
    language VARCHAR(50),
    code TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```
---

## ⚙️ Installation

1. Copy project to XAMPP htdocs
2. Import database SQL
3. Update config/db.php
4. Open http://localhost/snippet-manager

   ---

## 🔐 Default Flow
- Register New Account
- Login
- Add Code Snippet
- View Highlighted Code
- Delete Snippets
  
