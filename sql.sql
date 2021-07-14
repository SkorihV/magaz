
CREATE TABLE products (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255)  NOT NULL,
    `price` INT DEFAULT 0,
    `article` VARCHAR(255) NOT NULL DEFAULT '',
    `currency` VARCHAR(255) NOT NULL DEFAULT 'RUB',
    `amount` INT DEFAULT 0,
    `body` VARCHAR(255) NOT NULL DEFAULT '',
    `weight` INT NOT NULL DEFAULT 0,
    `unitWeight` VARCHAR(255) NOT NULL DEFAULT 'г'
);


CREATE TABLE products (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` varchar(255)  NOT NULL,
    `price` INT DEFAULT 0,
    `article` VARCHAR(255) DEFAULT '',
    `currency` TINYTEXT DEFAULT 'RUB'
);

CREATE TABLE products
( id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  price int(11) DEFAULT '0',
  article varchar(255) NOT NULL DEFAULT '',
  currency varchar(255) NOT NULL DEFAULT 'RUB',
  amount int(11) DEFAULT '0',body varchar(255) NOT NULL DEFAULT '',
  weight int(11) NOT NULL DEFAULT '0',
  unitWeight varchar(255) NOT NULL DEFAULT 'г',
  PRIMARY KEY (id)) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO products (`name`, `price`, `article`, `currency`, `amount`, `weight`, `unitWeight`) VALUES ("Название товара", 999, "йййцуу", "руб", 222, 333, "яблоки");



CREATE  TABLE category (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name varchar(255) NOT NULL
)



CREATE TABLE product_images (
    id int unsigned NOT NULL PRIMARY KEY AUTO_INCREMENT,
    product_id int unsigned NOT NULL,
    name varchar(255) NOT NULL,
    path varchar(255) NOT NULL
);


















