CREATE DATABASE database_wwlocacoes

CREATE TABLE table_user
(
	id int AUTO_INCREMENT NOT NULL,
	name varchar(15) NOT NULL,
	surname varchar(15) NOT NULL,
	email varchar(70) NOT NULL,
	password varchar(15) NOT NULL,
	level varchar(25) NOT NULL,
	
	PRIMARY KEY(id)
);

INSERT INTO table_user(name, surname, email, password, level) VALUES("Admin", "Admin", "admin@admin.com", "admin", "Administrador");

CREATE TABLE table_news
(
	id int AUTO_INCREMENT NOT NULL,
	cover varchar(25),
	title varchar(60) NOT NULL,
	description varchar(150) NOT NULL,
	news mediumtext NOT NULL,
	
	PRIMARY KEY(id)
);

CREATE TABLE table_gallery
(
	id int AUTO_INCREMENT NOT NULL,
	photo varchar(25) NOT NULL,
	category int NOT NULL,
	
	PRIMARY KEY(id)
);