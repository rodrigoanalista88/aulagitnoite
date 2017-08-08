drop database if exists git2;

create database git2;

use git2;

create table funcionario(
	cod integer auto_increment primary key,
	nome varchar(40) not null,
	email varchar(50) not null
);

desc funcionario;