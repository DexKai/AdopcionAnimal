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


drop table if exists Raza;

/*==============================================================*/
/* Table: Raza                                                  */
/*==============================================================*/
create table Raza
(
   id_raza              int not null auto_increment,
   id_especie           int not null,
   id_color             int,
   nombre_raza          varchar(1024) not null,
   primary key (id_raza)
);

alter table Raza add constraint FK_tiene_color foreign key (id_color)
      references Colores (id_color) on delete restrict on update restrict;

alter table Raza add constraint FK_tiene_raza foreign key (id_especie)
      references Especie (id_especie) on delete restrict on update restrict;




drop table if exists Animal;

/*==============================================================*/
/* Table: Animal                                                */
/*==============================================================*/
create table Animal
(
   id_animal            int not null auto_increment,
   id_especie           int not null,
   numero_chip          int not null,
   nombre_animal        varchar(20) not null,
   edad_animal          int default NULL,
   genero_animal        enum('Sin definir','Macho','Hembra') not null,
   peso                 float default NULL,
   desparasitado        enum('Sin definir','Si','No') default NULL,
   estirilizado         enum('Sin definir','Si','No') default NULL,
   vacunas              text default NULL,
   observaciones        text,
   fecha_ingreso        date not null,
   image                varchar(1024),
   primary key (id_animal)
);


alter table Animal add constraint FK_es_de foreign key (id_especie)
      references Especie (id_especie) on delete restrict on update restrict;
