-- Active: 1666468590274@@127.0.0.1@3306@carrental
create database jollibee;

use jollibee;

create table menu (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NULl,
    meals VARCHAR(100) NULL,
    price VARCHAR(100) NULL,
    image VARCHAR(100) NULL,
    description VARCHAR(100) NULL,
    status VARCHAR(100) NULL,
    created_at DATETIME NULL,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);