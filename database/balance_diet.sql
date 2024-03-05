create database balance_diet;

use balance_diet;

create table username(
    id int auto_increment,
    Email varchar(50),
    password varchar(20),
    location varchar(50),
    role int(1),
    google_map_link text,
    b_name text,
    primary key(id,Email)
);

create table Vendor(
Name varchar(50),
id int,
bussines_name varchar(50),
FOREIGN KEY (`id`) REFERENCES username(`id`)
);

create table lunch(
    id int,
    food_id int auto_increment primary key,
    proteins varchar(20),
    carbohydrates varchar(20),
    vitmins varchar(20),
    fats varchar(20),
    minerals varchar(20),
    fiber varchar(20),
    how_it_read text,
    Additional text,
    Price int,
    FOREIGN KEY (`id`) REFERENCES username(`id`)
);

create table cus_order(
    order_id int auto_increment primary key,
    Vendor_id int,
    food_id int,
    cus_email varchar(50),
    statues text,
    food_time text
);

create table info(
    id int,
    name varchar(20),
    gender int(1),
    Age int(2),
    FOREIGN KEY (`id`) REFERENCES username(`id`)
);

create table dinner(
    id int,
    food_id int auto_increment primary key,
    proteins varchar(20),
    carbohydrates varchar(20),
    vitmins varchar(20),
    fats varchar(20),
    minerals varchar(20),
    fiber varchar(20),
    how_it_read text,
    Additional text,
    Price int,
    FOREIGN KEY (`id`) REFERENCES username(`id`)
);

create table snacks(
    id int,
    food_id int auto_increment primary key,
    proteins varchar(20),
    carbohydrates varchar(20),
    vitmins varchar(20),
    fats varchar(20),
    minerals varchar(20),
    fiber varchar(20),
    how_it_read text,
    Additional text,
    Price int,
    FOREIGN KEY (`id`) REFERENCES username(`id`)
);


create table breakfast(
    id int,
    food_id int auto_increment primary key,
    proteins varchar(20),
    carbohydrates varchar(20),
    vitmins varchar(20),
    fats varchar(20),
    minerals varchar(20),
    fiber varchar(20),
    how_it_read text,
    Additional text,
    Price int,
    FOREIGN KEY (`id`) REFERENCES username(`id`)
);