/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  28/02/2022 13:43:56                      */
/*==============================================================*/

CREATE DATABASE brief14;
USE brief14;

drop table if exists Client;

drop table if exists Commande;

drop table if exists DetailsCommande;

drop table if exists Produit;

/*==============================================================*/
/* Table : Client                                               */
/*==============================================================*/
create table Client
(
   idClient             int primary key AUTO_INCREMENT,
   nom                  varchar(254),
   prenom               varchar(254),
   adresse              varchar(254),
   telephone            varchar(254),
   email                varchar(254),
   pass                 varchar(254)
);

/*==============================================================*/
/* Table : Commande                                             */
/*==============================================================*/
create table Commande
(
   idCommande           int primary key AUTO_INCREMENT,
   idClient             int not null,
   date                 datetime,
   adresseLivraison     varchar(254)
);

/*==============================================================*/
/* Table : Produit                                              */
/*==============================================================*/
create table Produit
(
   idProduit            int not null,
   libelle              varchar(254),
   description          varchar(254),
   prix                 numeric(8,0),
   stock                int,
   image                varchar(254),
   primary key (idProduit)
);

/*==============================================================*/
/* Table : DetailsCommande                                      */
/*==============================================================*/
create table DetailsCommande
(
   idCommande           int not null,
   idProduit            int not null,
   quantite             int,
   primary key (idCommande, idProduit)
);

alter table Commande add constraint FK_association1 foreign key (idClient)
      references Client (idClient) on delete restrict on update restrict;

alter table DetailsCommande add constraint FK_association2 foreign key (idCommande)
      references Commande (idCommande) on delete restrict on update restrict;

alter table DetailsCommande add constraint FK_association3 foreign key (idProduit)
      references Produit (idProduit) on delete restrict on update restrict;

