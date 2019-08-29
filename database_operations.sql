
sudu su
mysql -u root -p -h localhost

mysql -u admin -p -h localhost

CREATE USER 'admin'@'localhost' IDENTIFIED BY 12345678;

GRANT ALL PRIVILEGES ON my_company.* TO 'admin'@'localhost';
--- database sql

-- create database
CREATE DATABASE my_company;

USE my_company;

-- create table
DROP TABLE IF EXISTS products;
CREATE TABLE products
(
id              int primary key not null auto_increment,
name      		varchar(255) not null,
description     varchar(1000) not null,
image_path      varchar(255),
company         varchar(255) not null,
url             varchar(255) not null
);

-- insert record
INSERT INTO my_customers
VALUES (1, 'Tianyu', 'Cao', 'cao@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (2, 'Wenxiag', 'Hu', 'hu@gmail.com', '122 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (3, 'Chikei', 'Loi', 'Chikei@gmail.com', '141 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (4, 'Gaochao', 'Wang', 'gao@gmail.com', '421 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (5, 'Xiaoting', 'Jin', 'xiaoting@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (6, 'Emily', 'Wu', 'emily@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (7, 'Lily', 'Sanford', 'lily@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (8, 'Tony', 'Lim', 'tony@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (9, 'Mark', 'Su', 'mark@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (10, 'Mike', 'Ye', 'mike@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (11, 'Faro', 'Wu', 'faro@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (12, 'Azakaban', 'Wang', 'Azakaban@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (13, 'Holdem', 'Kim', 'holdem@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (14, 'Cloud', 'Xie', 'cloud@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (15, 'Potter', 'Me', 'potter@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (16, 'Snape', 'Cao', 'snape@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (17, 'Kitty', 'Cao', 'kitty@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (18, 'Jessie', 'Cao', 'jessie@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (19, 'Ryan', 'Cao', 'ryan@gmail.com', '121 Sunnyvale', 1234556678,1234156678);
INSERT INTO my_customers
VALUES (20, 'Ben', 'Cao', 'ben@gmail.com', '121 Sunnyvale', 1234556678,1234156678);