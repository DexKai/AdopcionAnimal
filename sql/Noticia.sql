drop table if exists Noticia;

/*==============================================================*/
/* Table: Noticia                                               */
/*==============================================================*/
create table Noticia
(
   id_noticia           int not null auto_increment,
   titulo               varchar(100),
   fecha_publicacion    date not null,
   cuerpo               text,
   foto                 varchar(128),
   primary key (id_noticia)
);
