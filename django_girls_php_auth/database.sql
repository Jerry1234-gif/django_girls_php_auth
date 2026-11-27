-- Import this file in phpMyAdmin to create the database and users table.
CREATE DATABASE IF NOT EXISTS django_girls_auth
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE django_girls_auth;

CREATE TABLE IF NOT EXISTS users (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(190) NOT NULL,
    password_hash VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    UNIQUE KEY uq_users_email (email)
) ENGINE=InnoDB;
