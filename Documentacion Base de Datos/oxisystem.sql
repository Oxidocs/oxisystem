/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     06/08/2016 18:33:19                          */
/*==============================================================*/


drop table if exists CONTENIDO;

drop table if exists CONTENIDO_PATH;

drop table if exists DOMINIO;

drop table if exists EMAIL;

drop table if exists ESTADOS;

drop table if exists LINKS;

drop table if exists PATH_IMAGENES;

drop table if exists REDES_SOCIALES;

drop table if exists SECCIONES;

drop table if exists TELEFONO;

drop table if exists TIPO_REDES;

drop table if exists TIPO_SECCIONES;

drop table if exists TIPO_TELEFONO;

drop table if exists USUARIOS;

/*==============================================================*/
/* Table: CONTENIDO                                             */
/*==============================================================*/
create table CONTENIDO
(
   ID                   int not null,
   SECCIONES_ID         int,
   ESTADOS_ID           int not null,
   TITULO               varchar(50) not null,
   DESCRIPCION          varchar(500) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: CONTENIDO_PATH                                        */
/*==============================================================*/
create table CONTENIDO_PATH
(
   CON_ID               int,
   PAT_ID               int,
   ID                   int not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: DOMINIO                                               */
/*==============================================================*/
create table DOMINIO
(
   ID                   int not null,
   USUARIOS_ID          int not null,
   NOMBRE               varchar(100) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: EMAIL                                                 */
/*==============================================================*/
create table EMAIL
(
   ID                   int not null,
   USUARIOS_ID          int not null,
   ESTADOS_ID           int not null,
   EMAIL                varchar(255) not null,
   PREDETERMINADO       bool not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: ESTADOS                                               */
/*==============================================================*/
create table ESTADOS
(
   ID                   int not null auto_increment,
   NOMBRE               varchar(50) not null,
   DESCRIPCION          varchar(255),
   primary key (ID)
);

/*==============================================================*/
/* Table: LINKS                                                 */
/*==============================================================*/
create table LINKS
(
   ID                   int not null,
   CONTENIDOS_ID        int,
   ESTADOS_ID           int not null,
   URL                  varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: PATH_IMAGENES                                         */
/*==============================================================*/
create table PATH_IMAGENES
(
   ID                   int not null,
   ESTADOS_ID           int not null,
   PATH                 varchar(255) not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: REDES_SOCIALES                                        */
/*==============================================================*/
create table REDES_SOCIALES
(
   ID                   int not null,
   TIPO_REDES_ID        int not null,
   ESTADOS_ID           int not null,
   CON_ID               int,
   LINK                 varchar(100) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: SECCIONES                                             */
/*==============================================================*/
create table SECCIONES
(
   ID                   int not null,
   USUARIOS_ID          int not null,
   ESTADOS_ID           int not null,
   TIPO_SECCIONES_ID    int not null,
   TITULO               varchar(50) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: TELEFONO                                              */
/*==============================================================*/
create table TELEFONO
(
   ID                   int not null,
   USUARIOS_ID          int not null,
   TIPO_TELEFONO_ID     int not null,
   ESTADOS_ID           int not null,
   NUMERO               varchar(25) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: TIPO_REDES                                            */
/*==============================================================*/
create table TIPO_REDES
(
   ID                   int not null,
   NOMBRE               varchar(50) not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: TIPO_SECCIONES                                        */
/*==============================================================*/
create table TIPO_SECCIONES
(
   ID                   int not null,
   NOMBRE               varchar(50) not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: TIPO_TELEFONO                                         */
/*==============================================================*/
create table TIPO_TELEFONO
(
   ID                   int not null,
   NOMBRE               varchar(50) not null,
   DESCRIPCION          varchar(255) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: USUARIOS                                              */
/*==============================================================*/
create table USUARIOS
(
   ID                   int not null auto_increment,
   NICKNAME             varchar(20) not null,
   PASSWORD             varchar(255) not null,
   primary key (ID)
);

alter table CONTENIDO add constraint FK_CONTENIDO_SECCIONES foreign key (SECCIONES_ID)
      references SECCIONES (ID) on delete restrict on update restrict;

alter table CONTENIDO add constraint FK_RELATIONSHIP_19 foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table CONTENIDO_PATH add constraint FK_CONTENIDO_CONTENIDO_PATH foreign key (CON_ID)
      references CONTENIDO (ID) on delete restrict on update restrict;

alter table CONTENIDO_PATH add constraint FK_RELATIONSHIP_20 foreign key (PAT_ID)
      references PATH_IMAGENES (ID) on delete restrict on update restrict;

alter table DOMINIO add constraint FK_USUARIOS_DOMINIO foreign key (USUARIOS_ID)
      references USUARIOS (ID) on delete restrict on update restrict;

alter table EMAIL add constraint FK_ESTADOS_EMAIL foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table EMAIL add constraint FK_USUARIOS_EMAIL foreign key (USUARIOS_ID)
      references USUARIOS (ID) on delete restrict on update restrict;

alter table LINKS add constraint FK_CONTENIDO_LINK foreign key (CONTENIDOS_ID)
      references CONTENIDO (ID) on delete restrict on update restrict;

alter table LINKS add constraint FK_ESTADOS_LINKS foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table PATH_IMAGENES add constraint FK_ESTADOS_PATH_IMAGENES foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table REDES_SOCIALES add constraint FK_ESTADOS_REDES_SOCIALES foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table REDES_SOCIALES add constraint FK_SECCIONES_REDES_SOCIALES foreign key (CON_ID)
      references CONTENIDO (ID) on delete restrict on update restrict;

alter table REDES_SOCIALES add constraint FK_TIPO_REDES_SOCIALES foreign key (TIPO_REDES_ID)
      references TIPO_REDES (ID) on delete restrict on update restrict;

alter table SECCIONES add constraint FK_ESTADOS_SECCIONES foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table SECCIONES add constraint FK_SECCIONES_TIPO_SECCIONES foreign key (TIPO_SECCIONES_ID)
      references TIPO_SECCIONES (ID) on delete restrict on update restrict;

alter table SECCIONES add constraint FK_USUARIOS_SECCIONES foreign key (USUARIOS_ID)
      references USUARIOS (ID) on delete restrict on update restrict;

alter table TELEFONO add constraint FK_TELEFONO_ESTADOS foreign key (ESTADOS_ID)
      references ESTADOS (ID) on delete restrict on update restrict;

alter table TELEFONO add constraint FK_TELEFONO_USUARIOS foreign key (USUARIOS_ID)
      references USUARIOS (ID) on delete restrict on update restrict;

alter table TELEFONO add constraint FK_TIPO_TELEFONO foreign key (TIPO_TELEFONO_ID)
      references TIPO_TELEFONO (ID) on delete restrict on update restrict;

