BEGIN
INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate, Artist_LocationOfBirth)
VALUES (1111, 64, 'Bobby Brown', DATE '2019-04-09', DATE '1954-05-12', 'Toronto');
INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate, Artist_LocationOfBirth)
VALUES (1112, 50, 'Charlie Red', DATE '2020-05-19', DATE '1970-01-11', 'Mexico');
INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate, Artist_LocationOfBirth)
VALUES (1113, 43, 'Donald Dan', DATE '1995-04-01', DATE '1952-02-17', 'Shanghai');
INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate, Artist_LocationOfBirth)
VALUES (1114, 106, 'Daisy Dry', DATE '2022-10-01', DATE '1916-01-01', 'Vancouver');
INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate, Artist_LocationOfBirth)
VALUES (1115, 30, 'Mickey Mountain', DATE '2008-10-01', DATE '1978-09-12', 'Calgary');

INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (1, 'Alan', 4161111111, 'alan.apple@gmail.com', 45);
INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (2, 'Bob', 4162222222, 'bob.banana@gmail.com', 13);
INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (3, 'Cameron', 4162322323, 'cameron.cherrie@gmail.com', 61);
INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (4, 'Daniel', 4163233322, 'daniel.date@gmail.com', 62);
INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (5, 'Ethan', 4161144141, 'ethan.eggplant@gmail.com', 65);
INSERT INTO Visitor(Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (6, 'Frankie', 4161233213, 'frankie.fruit@gmail.com', 12);

INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
VALUES ('Bobby', 41633454354, 56, DATE '2019-05-05');
INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
VALUES ('Norman', 41643454754, 54, DATE '2018-04-15');
INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
VALUES ('Summer', 60443454654, 78, DATE '2022-09-05');
INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
VALUES ('Nicole', 64743454614, 88, DATE '2012-01-05');
INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
VALUES ('Dion', 2896564783, 10, DATE '2004-06-05');

INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name, Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES ('Decora', 'Public', 55, 'Bobby', 41633454354, 'Toronto', 1234, 'Dundas');
INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name, Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES ('Antiquities', 'Private', 650, 'Norman', 41643454754, 'Vancouver', 232, 'Manor');
INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name, Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES ('Artovox', 'Public', 750, 'Nicole', 64743454614, 'Winnipeg', 23312, 'Walter Main');
INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name, Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES ('Mural', 'Public', 70, 'Summer', 60443454654, 'Calgary', 1212, 'Scurfield');
INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name, Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES ('Patronizing', 'Private', 1170, 'Dion', 2896564783, 'Toronto', 2360, 'Younge');

INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium, ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name, Room_Temperature)
VALUES (10, 'Mona Lisa', DATE '1503-09-27', 'Oil', 100000, 'Human Portrait', 123455432, 'Bobby', 41633454354, 'Decora', 20);
INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium, ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name, Room_Temperature)
VALUES (11, 'Starry Nights', DATE '1490-01-12', 'Water colour', 1338484, 'Art Deco', 6367488, 'Norman', 41643454754, 'Antiquities', 23);
INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium, ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name, Room_Temperature)
VALUES (12, 'Mouse in the Trap', DATE '1990-12-01', 'Acrylics', 348990, 'Baroque', 839829, 'Summer', 60443454654, 'Artovox', 23.2);
INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium, ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name, Room_Temperature)
VALUES (13, 'Duck Duck Goose', DATE '1998-08-27', 'Chalk', 3498394839, 'Bauhaus', 29302803, 'Nicole', 64743454614, 'Mural',24);
INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium, ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name, Room_Temperature)
VALUES (14, 'NeonRed In Your Area', DATE '2014-04-06', 'Charcoal', 34938943, 'Art Nouveau', 93843, 'Dion', 2896564783, 'Patronizing', 25);

INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
VALUES ('DoomsDay', DATE '2022-10-01', DATE '2022-12-01', 'Wine and Dine', 'Decora');
INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
VALUES ('SoupDay', DATE '2021-05-01', DATE '2021-08-01', 'Cheese with a side of Pizza', 'Antiquities');
INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
VALUES ('YAHOO', DATE '2014-06-01', DATE '2014-12-01', 'Casual Date', 'Artovox');
INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
VALUES ('BOOMBAYAH', DATE '2017-08-01', DATE '2017-09-01', 'Black with a dash of Pink', 'Mural');
INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
VALUES ('Love Dive', DATE '2022-02-01', DATE '2022-04-01', 'Be Narcissistic', 'Patronizing');

INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (1, 23.4, 'Small', 'Dim lights', 'Gloomy', 'Toronto', 1234, 'Dundas');
INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (2, 24.3, ' Medium ', 'Bright lights', 'Rainy with a chance of spaghetti', 'Vancouver', 232, 'Manor');
INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (3, 24.3, 'Large', 'Ambient lights', 'Midwest Vibes', 'Winnipeg', 23312, 'Walter Main ');
INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (4, 23.4, 'Small', 'Neon lights', 'DDU DU DDU DU', 'Calgary', 1212, 'Scurfield');
INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (5, 25.1, 'Small', 'Accent lights', 'Flying Cars', 'Toronto', 2360, 'Younge');
-- CREATE TABLE ArtPieceRoom
-- (
--     ArtPiece_Medium   CHAR(50) PRIMARY KEY,
--     Rooms_Temperature NUMBER,
--     FOREIGN KEY (ArtPiece_Medium) REFERENCES ArtPiece (ArtPiece_Medium),
--     FOREIGN KEY (Room_Temperature) REFERENCES Rooms(Room_Temperature)
-- );
-- INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
--     VALUES ('Oil', 23, 4);
-- INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
--     VALUES ('Water colour', 24.3);
-- INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
--     VALUES ('Acrylics', 24.3);
-- INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
--     VALUES ('Chalk', 23.4);
-- INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
--     VALUES ('Charcoal', 25.1);
-- CREATE TABLE ExhibitionRoomSettings
-- (
--     Exhibition_Theme CHAR(50) PRIMARY KEY,
--     Rooms_Lighting   CHAR(50),
--     Rooms_Theme      CHAR(50),
--     FOREIGN KEY (Exhibition_Theme) REFERENCES Exhibition(Exhibition_Theme),
--     FOREIGN KEY (Rooms_Lighting, Rooms_Theme) REFERENCES Rooms(Rooms_Lighting, Rooms_Theme)
-- );
-- INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
--     VALUES ('Wine & Dine', 'Dim lights', 'Gloomy');
-- INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
--     VALUES ('SoupDay', 'Bright lights', 'Rainy with a chance of spaghetti');
-- INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
--     VALUES ('YAHOO', 'Ambient lights', 'Midwest Vibes');
-- INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
--     VALUES ('BOOMBAYAH', 'Neon lights', 'DDU DU DDU DU');
-- INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
--     VALUES ('Love Dive', 'Accent lights', 'Flying Cars');
-- CREATE TABLE Created
-- (
--     ArtPiece_ID             INTEGER,
--     Artist_ID               INTEGER,
--     Exhibition_Name         CHAR (50),
--     Exhibition_StartDate    DATE,
--     Visitor_VisitorNumber   INTEGER,
--     Visitor_DateOfVisit     DATE,
--     Rooms_RoomNumber        INTEGER,
--     PRIMARY KEY (ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_VisitorNumber, Visitor_DateOfVisit, Rooms_RoomNumber),
--     FOREIGN KEY (ArtPiece_ID) REFERENCES ArtPiece(ArtPiece_ID) ON DELETE CASCADE,
--     FOREIGN KEY (Artist_ID) REFERENCES Artist(Artist_ID) ON DELETE CASCADE,
--     FOREIGN KEY (Exhibition_Name, Exhibition_StartDate) REFERENCES Exhibition(Exhibition_Name, Exhibition_StartDate) ON DELETE CASCADE,
--     FOREIGN KEY (Visitor_VisitorNumber, Visitor_DateOfVisit) REFERENCES Visitor(Visitor_VisitorNumber, Visitor_DateOfVisit) ON DELETE CASCADE,
--     FOREIGN KEY (Rooms_RoomNumber) REFERENCES Rooms(Rooms_RoomNumber) ON DELETE CASCADE
-- );
INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (10, 1111, 'DoomsDay', DATE '2022-10-01', 1, 1, 'Toronto', 1234, 'Dundas');
INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (11, 1112, 'SoupDay', DATE '2021-05-01', 2, 2, 'Vancouver', 232, 'Manor');
INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (12, 1113, 'YAHOO', DATE '2014-06-01', 3, 3, 'Winnipeg', 23312, 'Walter Main ');
INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (13, 1114, 'BOOMBAYAH', DATE '2017-08-01', 4, 4, 'Calgary', 1212, 'Scurfield');
INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber, Building_City, Building_BuildingNumber, Building_StreetName)
VALUES (14, 1115, 'Love Dive', DATE '2022-02-01', 5, 5, 'Toronto', 2360, 'Younge');

INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (1, DATE '2022-10-10', 10);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (1, DATE '2022-10-10', 11);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (3, DATE '2022-07-10', 12);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (4, DATE '2022-08-11', 12);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (5, DATE '2022-03-14', 10);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (5, DATE '2022-02-14', 11);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (5, DATE '2022-02-20', 12);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (5, DATE '2020-02-13', 13);
INSERT INTO Viewed(Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID)
VALUES (5, DATE '2021-11-11', 14);
END;