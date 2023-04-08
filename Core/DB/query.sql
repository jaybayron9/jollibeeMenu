-- Active: 1666468590274@@127.0.0.1@3306@carrental
create database jollibee;

use jollibee;

create table orders (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    order_id VARCHAR(100) NULL,
    customer_name VARCHAR(100) NULL,
    purchase VARCHAR(100) NULL,
    price VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

create table menu (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100) NULl,
    meals VARCHAR(100) NULL,
    price VARCHAR(100) NULL,
    image VARCHAR(100) NULL,
    description VARCHAR(100) NULL,
    status VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

create table admin (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NULL,
    email VARCHAR(100) NULL,
    password VARCHAR(100) NULL,
    status VARCHAR(100) NULL,
    token VARCHAR(100) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

select * from menu;
drop table admin;