--- database sql

-- create database
CREATE DATABASE my_company;

-- create table
DROP TABLE IF EXISTS my_customers;
CREATE TABLE my_customers
(
id              int primary key not null auto_increment,
first_name      varchar(255) not null,
last_name       varchar(255) not null,
email           varchar(255) not null,
home_address    text,
home_phone      bigint not null,         
cell_phone      bigint
);

-- insert record
INSERT INTO my_customers
VALUES (1, 'Tianyu', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (2, 'Yuxiang', 'Chen', 'cao@gmail.com', '122 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (3, 'Chikei', 'Loi', 'cao@gmail.com', '141 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (4, 'Gaochao', 'Wang', 'cao@gmail.com', '421 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (5, 'Xiaoting', 'Jin', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (6, 'Emily', 'Wu', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (7, 'Lily', 'Sanford', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (8, 'Tony', 'Lim', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (9, 'Mark', 'Su', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (10, 'Mike', 'Ye', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (11, 'Faro', 'Wu', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (12, 'Azakaban', 'Wang', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (13, 'Holdem', 'Kim', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (14, 'Cloud', 'Xie', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (15, 'Potter', 'Me', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (16, 'Snape', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (17, 'Kitty', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (18, 'Jessie', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (19, 'Ryan', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');
INSERT INTO my_customers
VALUES (20, 'Ben', 'Cao', 'cao@gmail.com', '121 Sunnyvale', '1234556678','1234156678');