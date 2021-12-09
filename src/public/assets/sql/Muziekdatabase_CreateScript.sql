/*==============================================================*/
/* Database name:  muziekdatabase                               */
/* Script:		   DDL			                                */
/* Created on:     19-10-2016		                            */
/*==============================================================*/

drop database if exists muziekdatabase;


/*==============================================================*/
/* Database: muziekdatabase                                     */
/*==============================================================*/
create database muziekdatabase;


use muziekdatabase;


/*==============================================================*/
/* Table: Bezettingsregel                                       */
/*==============================================================*/
create table Bezettingsregel (
   stuknr               numeric(5)           not null,
   instrumentnaam       varchar(14)          not null,
   toonhoogte           varchar(7)           not null,
   aantal               numeric(2)           not null,
   constraint PK_BEZETTINGSREGEL primary key  (stuknr, instrumentnaam, toonhoogte)
);


/*==============================================================*/
/* Table: Componist                                             */
/*==============================================================*/
create table Componist (
   componistId          numeric(4)           not null,
   naam                 varchar(20)          not null,
   geboortedatum        datetime             null,
   schoolId             numeric(2)           null,
   constraint PK_COMPONIST primary key  (componistId),
   constraint AK_COMPONIST unique (naam)
);


/*==============================================================*/
/* Table: Genre                                                 */
/*==============================================================*/
create table Genre (
   genrenaam            varchar(10)          not null,
   constraint PK_GENRE primary key  (genrenaam)
);


/*==============================================================*/
/* Table: Instrument                                            */
/*==============================================================*/
create table Instrument (
   instrumentnaam       varchar(14)          not null,
   toonhoogte           varchar(7)           not null,
   constraint PK_INSTRUMENT primary key  (instrumentnaam, toonhoogte)
);
 


/*==============================================================*/
/* Table: Muziekschool                                          */
/*==============================================================*/
create table Muziekschool (
   schoolId             numeric(2)           not null,
   naam                 varchar(30)          not null,
   plaatsnaam           varchar(20)          not null,
   constraint PK_MUZIEKSCHOOL primary key  (schoolId),
   constraint AK_MUZIEKSCHOOL unique (naam, plaatsnaam)
 );
 


/*==============================================================*/
/* Table: Niveau                                                */
/*==============================================================*/
create table Niveau (
   niveaucode           char(1)              not null,
   omschrijving         varchar(15)          not null,
   constraint PK_NIVEAU primary key  (niveaucode),
   constraint AK_NIVEAU unique (omschrijving)
 );
 


/*==============================================================*/
/* Table: Stuk                                                  */
/*==============================================================*/
create table Stuk (
   stuknr               numeric(5)           not null,
   componistId          numeric(4)           not null,
   titel                varchar(20)          not null,
   stuknrOrigineel      numeric(5)           null,
   genrenaam            varchar(10)          not null,
   niveaucode           char(1)              null,
   speelduur            numeric(3,1)         null,
   jaartal              numeric(4)           not null,
   constraint PK_STUK primary key  (stuknr),
   constraint AK_STUK unique (componistId, titel)
 );
 


alter table Bezettingsregel
   add constraint FK_BEZETTIN_REF_STUK foreign key (stuknr)
      references Stuk (stuknr)
      on update cascade on delete cascade;
 


alter table Bezettingsregel
   add constraint FK_BEZETTIN_REF_INSTRUME foreign key (instrumentnaam, toonhoogte)
      references Instrument (instrumentnaam, toonhoogte)
      on update cascade on delete no action;
 


alter table Componist
   add constraint FK_COMPONIS_REF_MUZIEKSC foreign key (schoolId)
      references Muziekschool (schoolId)
      on update cascade on delete no action;
 


alter table Stuk
   add constraint FK_STUK_REF_COMPONIST foreign key (componistId)
      references Componist (componistId)
	on update cascade on delete no action;
 


alter table Stuk
   add constraint FK_STUK_REF_GENRE foreign key (genrenaam)
      references Genre (genrenaam)
	on update cascade on delete no action;
 


alter table Stuk
   add constraint FK_STUK_REF_NIVEAU foreign key (niveaucode)
      references Niveau (niveaucode)
	on update cascade on delete no action;
 


alter table Stuk
   add constraint FK_STUK_REF_STUK foreign key (stuknrOrigineel)
      references Stuk (stuknr)
	on update no action on delete no action;
 


