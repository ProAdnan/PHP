CREATE DATABASE auth_system;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(150),
    email VARCHAR(150) UNIQUE,
    mobile VARCHAR(14),
    password VARCHAR(255),
    dob DATE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    last_login TIMESTAMP NULL
);