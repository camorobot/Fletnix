INSERT INTO Genres
VALUES(1,'Horror'),
        (2,'Action'),
        (3,'Family'),
        (4,'Thriller'),
        (5,'Crime'),
        (6, 'Romantic');

INSERT INTO MultimediaKind
VALUES(1,'Cover'),
        (2,'Trailer'),
        (3,'CoverBig');

INSERT INTO Entertainments
VALUES(1,'Film'),
        (2,'Serie'),
        (3,'Miniserie'),
        (4,'Documentary');

INSERT INTO Medias
VALUES(1,'Cover','/assets/img/db/1/1.jpg', 1),
        (2,'Cover','/assets/img/db/2/2.jpg', 2),
        (3,'Cover','/assets/img/db/3/3.jpg', 3),
        (4,'Cover', '/assets/img/db/4/4.jpg', 4),
        (5,'Cover', '/assets/img/db/5/5.jpg', 5),
        (6,'Cover', '/assets/img/db/6/6.jpg', 6),
        (7,'Cover', '/assets/img/db/7/7.jpg', 7);


INSERT INTO Authors
VALUES(1,'Tim', 'Sands', '1999-01-02'),
        (2, 'Mark', 'Froms', '1956-09-11'),
        (3, 'Mark', 'Ants', '1998-02-15'),
        (4, 'Robbert', 'Gustafsson', '1976-11-11'),
        (5, 'James', 'Clauws', '1996-10-17'),
        (6, 'Thomas', 'Hart', '1988-09-30');

INSERT INTO Movies
VALUES(1,'Homeland','CIA agente','Thriller',1,'Cardy Mall','2017-12-11',56,'/assets/img/db/1/1.jpg',NULL,'Serie'),
        (2,'Formula 1','Meest spannende race film','Thriller',2,'Max Verstappen','2019-03-11',213,'/assets/img/db/2/2.jpg',NULL,'Serie'),
        (3,'Jigsaw','Rennen voor de spoken','Horror',3,'Timmy Verstappen','2019-04-11',188,'/assets/img/db/3/3.jpg',NULL,'Film'),
        (4,'Den Osannolika','In deze serie wordt verteld hoe een man die een getuige van de moord op de Zweedse premier Olof Palme beweert te zijn, mogelijk met moord is weggekomen.','Crime',4,'Peter Andersson','2021-01-01',52,'/assets/img/db/4/4.jpg',NULL,'Miniserie'),
        (5,'The Great Hack','Ontdek hoe het databedrijf Cambridge Analytica in de nasleep van de Amerikaanse presidentsverkiezingen van 2016 een symbool werd voor de duistere kant van social media.','Thriller',5,'Cardy Maddoson','2019-06-03',114,'/assets/img/db/5/5.jpg',NULL,'Documentary'),
        (6,'The Great Hack','Deze spannende dramaserie gaat over de professionele en persoonlijke levens van brandweerlieden en paramedici die onder lastige omstandigheden werken in Chicago.','Action',1,'Max Jasson','2019-12-12',68,'/assets/img/db/6/6.jpg',NULL,'Serie'),
        (7,'Love Heart','Een schrijfster reist 5000 kilometer om met kerst de man te verrassen die ze op een datingapp heeft ontmoet, en ontdekt dan dat ze is genept.','Romantic',6,'Jenny Loeps','2010-12-25',106,'/assets/img/db/7/7.jpg',NULL,'Film')