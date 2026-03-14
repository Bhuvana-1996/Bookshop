CREATE DATABASE bookshop;

USE bookshop;

CREATE TABLE books (
id INT AUTO_INCREMENT PRIMARY KEY,
title VARCHAR(100),
author VARCHAR(100),
price INT,
image VARCHAR(200)
);

INSERT INTO books(title,author,price,image) VALUES
('Web Development','John Smith',350,'book1.jpg'),
('PHP Programming','David Lee',450,'book2.jpg'),
('Learn HTML CSS','Mark Henry',300,'book3.jpg');