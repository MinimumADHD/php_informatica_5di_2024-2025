-- Utenti (id*, email, nome, cognome, password)
-- Prodotti (id*, marca, modello, prezzo)
-- Acquisto (id*, data, id_utente-, id_prodotto-)
DROP DATABASE IF EXISTS ecommerce_cannizzaro;

CREATE DATABASE ecommerce_cannizzaro;

USE ecommerce_cannizzaro;

CREATE TABLE
    users (
        user_id INT AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(35) UNIQUE NOT NULL,
        fname VARCHAR(25) NOT NULL,
        lname VARCHAR(25) NOT NULL,
        pass_word VARCHAR(12) NOT NULL
    );

CREATE TABLE
    products (
        product_id INT AUTO_INCREMENT PRIMARY KEY,
        branding VARCHAR(25) NOT NULL,
        model VARCHAR(25) UNIQUE NOT NULL,
        price DECIMAL(5, 2)
    );

CREATE TABLE
    purchases (
        purchase_id INT AUTO_INCREMENT PRIMARY KEY,
        purchase_date DATE NOT NULL,
        user_id INT,
        product_id INT,
        CONSTRAINT fk_users FOREIGN KEY (user_id) REFERENCES users (user_id) ON DELETE CASCADE,
        CONSTRAINT fk_products FOREIGN KEY (product_id) REFERENCES products (product_id)
    );