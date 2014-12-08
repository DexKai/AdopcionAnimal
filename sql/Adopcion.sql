drop table if exists Adopcion;

/*==============================================================*/
/* Table: Adopcion                                              */
/*==============================================================*/
create table Adopcion
(
   id_adopcion          int not null auto_increment,
   id_animal            int,
   RUT                  varchar(12) not null,
   fecha_adopcion       date,
   primary key (id_adopcion)
);

alter table Adopcion add constraint FK_adopta foreign key (RUT)
      references Persona (RUT) on delete restrict on update restrict;

alter table Adopcion add constraint FK_adoptado foreign key (id_animal)
      references Animal (id_animal) on delete restrict on update restrict;