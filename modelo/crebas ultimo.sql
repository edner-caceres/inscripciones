/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     3/23/2012 8:59:41 PM                         */
/*==============================================================*/


drop index puede_tener_cuenta_fk;

drop index rol_de_la_cuenta_fk;

drop index cuentas_pk;

drop table cuentas;

drop index cursos_pk;

drop table cursos;

drop index tiene_descripcion_fk;

drop index descripciones_pk;

drop table descripciones;

drop index es_devuelto_fk;

drop index devoliciones_pk;

drop table devoliciones;

drop index gestiones_pk;

drop table gestiones;

drop index instructor_fk;

drop index tiene_grupos_fk;

drop index dictado_en_al_gestion_fk;

drop index grupos_pk;

drop table grupos;

drop index inscribio_fk;

drop index inscrito_al_grupo_fk;

drop index se_inscripbe_fk;

drop index inscripciones_pk;

drop table inscripciones;

drop index personas_pk;

drop table personas;

drop index roles_pk;

drop table roles;

drop index tiene_temas_fk;

drop index temas_pk;

drop table temas;

/*==============================================================*/
/* Table: cuentas                                               */
/*==============================================================*/
create table cuentas (
   id_cuenta            serial               not null,
   id_rol               int4                 not null,
   identificador        int4                 not null,
   nombre_de_usuario    varchar(20)          null,
   password             char(40)             null,
   fecha_inicio_validez date                 null,
   fecha_fin_validez    date                 null,
   constraint pk_cuentas primary key (id_cuenta)
);

/*==============================================================*/
/* Index: cuentas_pk                                            */
/*==============================================================*/
create unique index cuentas_pk on cuentas (
id_cuenta
);

/*==============================================================*/
/* Index: rol_de_la_cuenta_fk                                   */
/*==============================================================*/
create  index rol_de_la_cuenta_fk on cuentas (
id_rol
);

/*==============================================================*/
/* Index: puede_tener_cuenta_fk                                 */
/*==============================================================*/
create  index puede_tener_cuenta_fk on cuentas (
identificador
);

/*==============================================================*/
/* Table: cursos                                                */
/*==============================================================*/
create table cursos (
   id_curso             serial               not null,
   nombre_del_curso     varchar(100)         null,
   objetivo_del_curso   varchar(255)         null,
   costo_auxiliares     decimal(3,2)         null,
   costo_estudiantes    decimal(3,2)         null,
   costo_otros          decimal(3,2)         null,
   constraint pk_cursos primary key (id_curso)
);

/*==============================================================*/
/* Index: cursos_pk                                             */
/*==============================================================*/
create unique index cursos_pk on cursos (
id_curso
);

/*==============================================================*/
/* Table: descripciones                                         */
/*==============================================================*/
create table descripciones (
   id_descripcion       serial               not null,
   id_curso             int4                 not null,
   descripcion_general  text                 null,
   afiche               char(1024)           null,
   banner               char(512)            null,
   constraint pk_descripciones primary key (id_descripcion)
);

/*==============================================================*/
/* Index: descripciones_pk                                      */
/*==============================================================*/
create unique index descripciones_pk on descripciones (
id_descripcion
);

/*==============================================================*/
/* Index: tiene_descripcion_fk                                  */
/*==============================================================*/
create  index tiene_descripcion_fk on descripciones (
id_curso
);

/*==============================================================*/
/* Table: devoliciones                                          */
/*==============================================================*/
create table devoliciones (
   id_devolucion        serial               not null,
   id_inscripcion       int4                 not null,
   fecha_devolucion     date                 null,
   motivo_devolucion    varchar(255)         null,
   comprobante_devolucion char(255)            null,
   constraint pk_devoliciones primary key (id_devolucion)
);

/*==============================================================*/
/* Index: devoliciones_pk                                       */
/*==============================================================*/
create unique index devoliciones_pk on devoliciones (
id_devolucion
);

/*==============================================================*/
/* Index: es_devuelto_fk                                        */
/*==============================================================*/
create  index es_devuelto_fk on devoliciones (
id_inscripcion
);

/*==============================================================*/
/* Table: gestiones                                             */
/*==============================================================*/
create table gestiones (
   id_gestion           serial               not null,
   nombre_gestion       char(7)              null,
   descripcion_gestion  varchar(255)         null,
   constraint pk_gestiones primary key (id_gestion)
);

/*==============================================================*/
/* Index: gestiones_pk                                          */
/*==============================================================*/
create unique index gestiones_pk on gestiones (
id_gestion
);

/*==============================================================*/
/* Table: grupos                                                */
/*==============================================================*/
create table grupos (
   id_grupo             serial               not null,
   id_curso             int4                 null,
   id_gestion           int4                 not null,
   identificador        int4                 not null,
   nombre_grupo         varchar(10)          null,
   hora_inicio          time                 null,
   hora_fin             time                 null,
   constraint pk_grupos primary key (id_grupo)
);

/*==============================================================*/
/* Index: grupos_pk                                             */
/*==============================================================*/
create unique index grupos_pk on grupos (
id_grupo
);

/*==============================================================*/
/* Index: dictado_en_al_gestion_fk                              */
/*==============================================================*/
create  index dictado_en_al_gestion_fk on grupos (
id_gestion
);

/*==============================================================*/
/* Index: tiene_grupos_fk                                       */
/*==============================================================*/
create  index tiene_grupos_fk on grupos (
id_curso
);

/*==============================================================*/
/* Index: instructor_fk                                         */
/*==============================================================*/
create  index instructor_fk on grupos (
identificador
);

/*==============================================================*/
/* Table: inscripciones                                         */
/*==============================================================*/
create table inscripciones (
   id_inscripcion       serial               not null,
   id_cuenta            int4                 not null,
   id_grupo             int4                 null,
   identificador        int4                 null,
   fecha_inscripcion    date                 null,
   constraint pk_inscripciones primary key (id_inscripcion)
);

/*==============================================================*/
/* Index: inscripciones_pk                                      */
/*==============================================================*/
create unique index inscripciones_pk on inscripciones (
id_inscripcion
);

/*==============================================================*/
/* Index: se_inscripbe_fk                                       */
/*==============================================================*/
create  index se_inscripbe_fk on inscripciones (
identificador
);

/*==============================================================*/
/* Index: inscrito_al_grupo_fk                                  */
/*==============================================================*/
create  index inscrito_al_grupo_fk on inscripciones (
id_grupo
);

/*==============================================================*/
/* Index: inscribio_fk                                          */
/*==============================================================*/
create  index inscribio_fk on inscripciones (
id_cuenta
);

/*==============================================================*/
/* Table: personas                                              */
/*==============================================================*/
create table personas (
   identificador        serial               not null,
   ci                   int4                 null,
   sis                  int4                 null,
   nombres              varchar(30)          null,
   apellido_paterno     varchar(30)          null,
   apellido_materno     varchar(30)          null,
   telefono             int4                 null,
   enail                varchar(50)          null,
   constraint pk_personas primary key (identificador)
);

/*==============================================================*/
/* Index: personas_pk                                           */
/*==============================================================*/
create unique index personas_pk on personas (
identificador
);

/*==============================================================*/
/* Table: roles                                                 */
/*==============================================================*/
create table roles (
   id_rol               serial               not null,
   nombre_rol           varchar(20)          null,
   descripcion_rol      varchar(255)         null,
   constraint pk_roles primary key (id_rol)
);

/*==============================================================*/
/* Index: roles_pk                                              */
/*==============================================================*/
create unique index roles_pk on roles (
id_rol
);

/*==============================================================*/
/* Table: temas                                                 */
/*==============================================================*/
create table temas (
   id_tema              serial               not null,
   id_curso             int4                 not null,
   numero_tema          int4                 null,
   nombre_tema          varchar(100)         null,
   descripcion_tema     varchar(255)         null,
   constraint pk_temas primary key (id_tema)
);

/*==============================================================*/
/* Index: temas_pk                                              */
/*==============================================================*/
create unique index temas_pk on temas (
id_tema
);

/*==============================================================*/
/* Index: tiene_temas_fk                                        */
/*==============================================================*/
create  index tiene_temas_fk on temas (
id_curso
);

alter table cuentas
   add constraint fk_cuentas_puede_ten_personas foreign key (identificador)
      references personas (identificador)
      on delete restrict on update restrict;

alter table cuentas
   add constraint fk_cuentas_rol_de_la_roles foreign key (id_rol)
      references roles (id_rol)
      on delete restrict on update restrict;

alter table descripciones
   add constraint fk_descripc_tiene_des_cursos foreign key (id_curso)
      references cursos (id_curso)
      on delete restrict on update restrict;

alter table devoliciones
   add constraint fk_devolici_es_devuel_inscripc foreign key (id_inscripcion)
      references inscripciones (id_inscripcion)
      on delete restrict on update restrict;

alter table grupos
   add constraint fk_grupos_dictado_e_gestione foreign key (id_gestion)
      references gestiones (id_gestion)
      on delete restrict on update restrict;

alter table grupos
   add constraint fk_grupos_instructo_personas foreign key (identificador)
      references personas (identificador)
      on delete restrict on update restrict;

alter table grupos
   add constraint fk_grupos_tiene_gru_cursos foreign key (id_curso)
      references cursos (id_curso)
      on delete restrict on update restrict;

alter table inscripciones
   add constraint fk_inscripc_inscribio_cuentas foreign key (id_cuenta)
      references cuentas (id_cuenta)
      on delete restrict on update restrict;

alter table inscripciones
   add constraint fk_inscripc_inscrito__grupos foreign key (id_grupo)
      references grupos (id_grupo)
      on delete restrict on update restrict;

alter table inscripciones
   add constraint fk_inscripc_se_inscri_personas foreign key (identificador)
      references personas (identificador)
      on delete restrict on update restrict;

alter table temas
   add constraint fk_temas_tiene_tem_cursos foreign key (id_curso)
      references cursos (id_curso)
      on delete restrict on update restrict;

