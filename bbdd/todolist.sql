drop database if exists todolist;

create database if not exists todolist;

use todolist;


create table tareas (

    id int NOT NULL AUTO_INCREMENT,

    nombretarea varchar(100),

    tipotarea varchar(100),

    contenidotarea varchar(500),

    PRIMARY KEY (id)

);