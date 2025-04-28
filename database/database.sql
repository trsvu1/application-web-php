drop database if exists PP_01A_Gestion_Eleve;
create database PP_01A_Gestion_Eleve;
use PP_01A_Gestion_Eleve;

-- Table structure for table `eleve`
create table eleve (
    id_eleve int(5) not null auto_increment primary key,
    num_INE varchar(33) not null,
    nom varchar(33) not null,
    prenom varchar(33) not null,
    date_naissance date not null,
    pays varchar(33) not null,
    classe varchar(33) not null,
    matiere1 decimal(5,2) not null default 0.00,
    matiere2 decimal(5,2) not null default 0.00,
    matiere3 decimal(5,2) not null default 0.00,
    matiere4 decimal(5,2) not null default 0.00,
    matiere5 decimal(5,2) not null default 0.00,
    moyenne decimal(5,2) as ((matiere1 + matiere2 + matiere3 + matiere4 + matiere5) / 5) stored
);

-- Table structure for table `user`
create table user (
    id_user int(5) not null auto_increment primary key,
    nom varchar(33) not null,
    prenom varchar(33) not null,
    email varchar(33) not null,
    pass varchar(255) not null,
    role enum('admin', 'user') not null default 'user',
    date_creation timestamp not null default current_timestamp
);

-- Insert data into `user` table
insert into user (nom, prenom, email, pass, role) values
('Truong', 'Vu', 'admin@mail.com', 'password', 'admin'),
('Son', 'Admin', 'user@mail.com', 'password', 'user');
