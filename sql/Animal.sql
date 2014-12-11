drop table if exists Colores;

/*==============================================================*/
/* Table: Colores                                               */
/*==============================================================*/
create table Colores
(
   id_color             int not null auto_increment,
   nombre_color         varchar(1024),
   primary key (id_color)
);

INSERT INTO `colores` (`id_color`, `nombre_color`) VALUES
(1, 'Amarillo'),
(2, 'Negro'),
(3, 'Blanco'),
(4, 'Café oscuro'),
(5, 'Café claro'),
(6, 'Gris'),
(7, 'Rojizo ');

/*==============================================================*/
drop table if exists Especie;

/*==============================================================*/
/* Table: Especie                                               */
/*==============================================================*/
create table Especie
(
   id_especie           int not null auto_increment,
   nombre_especie       varchar(1024) not null,
   primary key (id_especie)
);

INSERT INTO `especie` (`id_especie`, `nombre_especie`) VALUES
(1, 'Perro'),
(2, 'Gato');


/*==============================================================*/
drop table if exists Raza;

/*==============================================================*/
/* Table: Raza                                                  */
/*==============================================================*/
create table Raza
(
   id_raza              int not null auto_increment,
   id_especie           int not null,
   nombre_raza          varchar(1024) not null,
   primary key (id_raza)
);

alter table Raza add constraint FK_tiene_raza foreign key (id_especie)
      references Especie (id_especie) on delete cascade on update cascade;

INSERT INTO `raza` (`id_raza`, `id_especie`, `nombre_raza`) VALUES
(1, 2, 'Abisinio'),
(2, 2, 'Abisinio'),
(3, 2, 'Abisinio'),
(4, 2, 'Abisinio'),
(5, 2, 'Abisinio'),
(6, 2, 'Abisinio'),
(7, 2, 'Abisinio'),
(8, 1, 'Doge');


/*==============================================================*/
drop table if exists Animal;

/*==============================================================*/
/* Table: Animal                                                */
/*==============================================================*/
create table Animal
(
   id_animal            int not null auto_increment,
   numero_chip          int not null,
   nombre_animal        varchar(20) not null,
   id_especie           int not null,
   id_raza              int not null,
   id_color             int not null,
   genero_animal        enum('Sin definir','Macho','Hembra'),
   edad_animal          int default NULL,
   peso                 float default NULL,
   desparasitado        enum('Sin definir','Si','No') default NULL,
   esterilizado         enum('Sin definir','Si','No') default NULL,
   vacunas              text default NULL,
   observaciones        text,
   fecha_ingreso        date not null,
   image                varchar(1024) not null,
   adoptado             enum('No','Si'),
   primary key (id_animal)
);

alter table Animal add constraint FK_es_de foreign key (id_especie)
      references Especie (id_especie) on delete cascade on update cascade;

alter table Animal add constraint FK_tiene_color foreign key (id_color)
      references Colores (id_color) on delete cascade on update cascade;
