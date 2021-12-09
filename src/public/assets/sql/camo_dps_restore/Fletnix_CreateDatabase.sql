DROP DATABASE IF EXISTS Fletnix_2;
CREATE DATABASE Fletnix_2;
USE Fletnix_2;
DROP TABLE IF EXISTS `Movies`;
CREATE TABLE `Movies`
(
  `id` INT NOT NULL,
  `Title` VARCHAR(255) NOT NULL,
  `Description` VARCHAR(1000) NULL,
  `Genre` VARCHAR(255) NOT NULL,
  `AuthorId` INT NOT NULL,
  `Cast` VARCHAR(255) NOT NULL,
  `PublicationDate` DATE NULL,
  `PlayingTime` INT NULL,
  `PreviewImg` VARCHAR(255) NOT NULL,
  `Trailers` VARCHAR(255) NULL,
  `Entertainment` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Genres`;
CREATE TABLE `Genres`
(
  `id` INT NOT NULL,
  `Genrenaam` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Authors`;
CREATE TABLE `Authors`
(
  `id` INT NOT NULL,
  `FirstName` VARCHAR(255) NOT NULL,
  `LastName` VARCHAR(255) NOT NULL,
  `Birthdate` DATE NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Customers`;
CREATE TABLE `Customers`
(
  `id` INT NOT NULL,
  `EmailAdress` VARCHAR(255) NOT NULL,
  `FirstName` VARCHAR(255) NOT NULL,
  `LastName` VARCHAR(255) NOT NULL,
  `PaymentMethod` VARCHAR(255) NULL,
  `PaymentCardNumber` INT NULL,
  `SubscriptionStart` DATE NULL,
  `SubscriptionEnd` DATE NULL,
  `Username` VARCHAR(255) NOT NULL,
  `Password` VARCHAR(255) NOT NULL,
  `Country` VARCHAR(255) NULL,
  `Gender` CHAR(1) NULL,
  `Birthdate` DATE NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Countrys`;
CREATE TABLE `Countrys`
(
  `id` INT NOT NULL,
  `CountryName` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `WatchHistory`;
CREATE TABLE `WatchHistory`
(
  `id` INT NOT NULL,
  `MovieId` INT NOT NULL,
  `CustomerEmailAdress` VARCHAR(255) NOT NULL,
  `WatchDate` DATE NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Medias`;
CREATE TABLE `Medias`
(
  `id` INT NOT NULL,
  `MultimediaKind` VARCHAR(255) NOT NULL,
  `MediaDir` VARCHAR(255) NOT NULL,
  `Movie` INT NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Multimediakind`;
CREATE TABLE `MultimediaKind`
(
  `id` INT NOT NULL,
  `MultimediaName` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Payments`;
CREATE TABLE `Payments`
(
  `id` INT NOT NULL,
  `PaymentMethods` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

DROP TABLE IF EXISTS `Entertainments`;
CREATE TABLE `Entertainments`
(
  `id` INT NOT NULL,
  `EntertainmentName` VARCHAR(255) NOT NULL
) ENGINE=InnoDB COLLATE=utf8_general_ci;

ALTER TABLE `Medias` ADD PRIMARY KEY (`id`);
ALTER TABLE `MultimediaKind` ADD PRIMARY KEY (`id`);
ALTER TABLE `Movies` ADD INDEX `ix26623_FK_Fillms_REF_Genre` (`Genre`);
ALTER TABLE `Customers` ADD INDEX `ix26626_FK_Customers_REF_Countrys` (`Country`);
ALTER TABLE `Movies` ADD INDEX `ix26623_FK_Movies_REF_WatchHistory` (`id`);
ALTER TABLE `Medias` ADD INDEX `ix26629_FK_Medias_REF_MultimediaKind` (`MultimediaKind`);
ALTER TABLE `Movies` ADD INDEX `ix26623_FK_Movies_REF_Medias` (`PreviewImg`);
ALTER TABLE `WatchHistory` ADD PRIMARY KEY (`id`);
ALTER TABLE `Movies` ADD PRIMARY KEY (`id`);
ALTER TABLE `Customers` ADD PRIMARY KEY (`id`);
ALTER TABLE `Authors` ADD PRIMARY KEY (`id`);
ALTER TABLE `Genres` ADD PRIMARY KEY (`id`);
ALTER TABLE `WatchHistory` ADD INDEX `ix26628_FK_WatchHistory_REF_Customers` (`CustomerEmailAdress`);
ALTER TABLE `Payments` ADD PRIMARY KEY (`id`);
ALTER TABLE `Customers` ADD INDEX `ix26626_FK_Customers_REF_Payments` (`PaymentMethod`);
ALTER TABLE `Genres` ADD INDEX `ix26624_FK_Genres_REF_Movies` (`Genrenaam`);
ALTER TABLE `Countrys` ADD INDEX `ix26627_FK_Countrys_REF_Customers` (`CountryName`);
ALTER TABLE `Payments` ADD INDEX `ix26636_FK_Payments_REF_Customers` (`PaymentMethods`);
ALTER TABLE `WatchHistory` ADD INDEX `ix26628_FK_WatchHistory_REF_Movies` (`MovieId`);
ALTER TABLE `Medias` ADD INDEX `ix26629_FK_Medias_REF_Movies` (`MediaDir`);
ALTER TABLE `MultimediaKind` ADD INDEX `ix26630_FK_Medias_REF_MultimediaKind` (`MultimediaName`);
ALTER TABLE `Entertainments` ADD PRIMARY KEY (`id`);
ALTER TABLE `Entertainments` ADD INDEX `ix26637_FK_Entertainments_REF_Customers` (`EntertainmentName`);
ALTER TABLE `Countrys` ADD PRIMARY KEY (`id`);
ALTER TABLE `Medias` ADD INDEX `ix26629_FK_Movies_REF_Medias_ATR_Movie` (`Movie`);
ALTER TABLE `Customers` ADD CONSTRAINT `FK_WatchHistory_REF_Customers_ATR_EmailAdress` FOREIGN KEY (`EmailAdress`) REFERENCES `WatchHistory` (`CustomerEmailAdress`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Movies` ADD CONSTRAINT `FK_Genres_REF_Movies_ATR_Genre` FOREIGN KEY (`Genre`) REFERENCES `Genres` (`Genrenaam`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Customers` ADD CONSTRAINT `FK_Countrys_REF_Customers_ATR_Country` FOREIGN KEY (`Country`) REFERENCES `Countrys` (`CountryName`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Customers` ADD CONSTRAINT `FK_Payments_REF_Customers_ATR_PaymentMethod` FOREIGN KEY (`PaymentMethod`) REFERENCES `Payments` (`PaymentMethods`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Movies` ADD CONSTRAINT `FK_Medias_REF_Movies_ATR_PreviewImg` FOREIGN KEY (`PreviewImg`) REFERENCES `Medias` (`MediaDir`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Medias` ADD CONSTRAINT `FK_Medias_REF_MultimediaKind_ATR_MultimediaKind` FOREIGN KEY (`MultimediaKind`) REFERENCES `MultimediaKind` (`MultimediaName`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `WatchHistory` ADD CONSTRAINT `FK_Movies_REF_WatchHistory_ATR_MovieId` FOREIGN KEY (`MovieId`) REFERENCES `Movies` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Movies` ADD CONSTRAINT `FK_Movies_REF_Authors_ATR_AuthorId` FOREIGN KEY (`AuthorId`) REFERENCES `Authors` (`id`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Movies` ADD CONSTRAINT `FK_Movies_REF_Entertainments_ATR_Entertainment` FOREIGN KEY (`Entertainment`) REFERENCES `Entertainments` (`EntertainmentName`) ON UPDATE RESTRICT ON DELETE RESTRICT;
ALTER TABLE `Movies` ADD CONSTRAINT `FK_Movies_REF_Medias_ATR_Movie` FOREIGN KEY (`id`) REFERENCES `Medias` (`Movie`);