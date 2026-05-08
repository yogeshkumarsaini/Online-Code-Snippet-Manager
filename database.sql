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