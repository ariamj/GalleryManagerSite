-- GALLERY
-- R1(G.N, O.N, O.P, B.C, B.B, B.S, G.A, G.E)
CREATE TABLE Gallery
(
    Gallery_Name            CHAR(50) PRIMARY KEY,
    Gallery_AccessType      CHAR(50),
    Gallery_EntryPrice      NUMBER,
    Owner_Name              CHAR(50),
    Owner_PhoneNumber       INTEGER,
    Building_City           CHAR(50),
    Building_BuildingNumber INTEGER,
    Building_StreetName     CHAR(50)
        FOREIGN KEY (Owner_Name, Owner_PhoneNumber) REFERENCES Owner(Owner_Name, Owner_PhoneNumber)
        ON DELETE SET NULL
        -- ON UPDATE CASCADE -- (not supported in oracle)
        UNIQUE (Building_City, Building_BuildingNumber, Building_StreetName)
) INSERT INTO Gallery(Gallery_Name, Gallery_AccessType, Gallery_EntryPrice, Owner_Name,
                    Owner_PhoneNumber, Building_City, Building_BuildingNumber, Building_StreetName)
    VALUES ("Decora", "Public", 55, "Bobby", 41633454354, "Toronto", 1234, "Dundas"),
    ("Antiquities", Private, 650, "Norman", 41643454754, "Vancouver", 232,
    "Manor"),
    ("Artovox", "Public", 750, "Nicole", 60443454654, "Winnipeg", 23312, "Walter Main"),
    ("Mural", "Public", 70, "Summer", 64743454614, "Calgary", 1212, "Scurfield"),
    ("Patronizing", "Private", 1170, "Dion", 2896564783, "Toronto", 2360, "Younge")

-- ARTIST
-- R2(A.ID, A.A, A.N, A.D, A.B, A.L)
CREATE TABLE Artist
(
    Artist_ID              INTEGER PRIMARY KEY,
    Artist_Age             INTEGER,
    Artist_Name            CHAR(50),
    Artist_DeathDate       DATE,
    Artist_BirthDate       DATE,
    Artist_LocationOfBirth CHAR(50) -- !!! GEO???
) INSERT INTO Artist(Artist_ID, Artist_Age, Artist_Name, Artist_DeathDate, Artist_BirthDate,
                   Artist_LocationOfBirth)
    VALUES (1111, 64, "Bobby Brown", 2019 - 04 - 09, 1954 - 05 - 12, "Toronto") ,
    (1112, 50, "Charlie Red", 2020-05-19, 1970-01-11, "Mexico"),
    (1113, 43, "Donald Dan", 1995-04-01, 1952-02-17, "Shanghai"),
    (1114, 106, "Daisy Dry", 2022-10-01, 1916-01-01, "Vancouver"),
    (1115, 30, "Mickey Mountain", 2008-10-01, 1978-09-12, "Calgary")

-- ART PIECE
-- R3(AP.ID, O.N, O.P, AP.T, AP.D, AP.M, AP.P, AP.S, AP.N)
CREATE TABLE ArtPiece
(
    ArtPiece_ID            INTEGER PRIMARY KEY,
    ArtPiece_Title         CHAR(50),
    ArtPiece_DateCreated   DATE,
    ArtPiece_Medium        CHAR(50),
    ArtPiece_Price         NUMBER,
    ArtPiece_Style         CHAR(50),
    ArtPiece_NumberOfViews INTEGER,
    Owner_Name             CHAR(50),
    Owner_PhoneNumber      INTEGER,
    Gallery_Name           CHAR(50),

    FOREIGN KEY (Owner_Name, Owner_PhoneNumber) REFERENCES Owner (Owner_Name, Owner_PhoneNumber)
        ON DELETE SET NULL
        -- ON UPDATE CASCADE
        FOREIGN KEY (Gallery_Name) REFERENCES Gallery(Gallery_Name)
        ON DELETE SET NULL
    -- ON UPDATE CASCADE
) INSERT INTO ArtPiece(ArtPiece_ID, ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Medium,
                     ArtPiece_Price, ArtPiece_Style, ArtPiece_NumberOfViews, Owner_Name,
                     Owner_PhoneNumber, Gallery_Name)
    VALUES (10, "Mona Lisa", 1503 - 09 - 27, "Oil", 100000, "Human Portrait", 123455432, "Bobby", 41633454354, "Decora"),
    (11, "Starry Nights", 1490-01-12, "Water colour", 1338484, "Art Deco", 6367488, "Norman", 41643454754, "Antiquities"),
    (12, "Mouse in the Trap", 1990-12-01, "Acrylics", 348990, "Baroque", 839829, "Summer", 60443454654, "Artovox"),
    (13, "Duck Duck Goose", 1998-08-27, "Chalk", 3498394839, "Bauhaus", 29302803, "Nicole", 64743454614, "Mural"),
    (14, "NeonRed In Your Area", 2014-04-06, "Charcoal", 34938943, "Art Nouveau", 93843, "Dion", 2896564783, "Patronizing")

-- ART PIECE ROOM
-- R4(AP.M, R.TE)
CREATE TABLE ArtPieceRoom
(
    ArtPiece_Medium   CHAR(50) PRIMARY KEY,
    Rooms_Temperature NUMBER,

    FOREIGN KEY (ArtPiece_Medium) REFERENCES ArtPiece (ArtPiece_Medium)
        FOREIGN KEY (Room_Temperature) REFERENCES Rooms(Room_Temperature)
) INSERT INTO ArtPieceRoom(ArtPiece_Medium, Room_Temperature)
    VALUES ("Oil", 23, 4),
    ("Water colour", 24.3),
    ("Acrylics", 24.3),
    ("Chalk", 23.4),
    ("Charcoal", 25.1)

-- VISITOR
-- R6(V.ID, V.D, V.N, V.P, V.E, V.A)
CREATE TABLE Visitor
(
    Visitor_ID          INTEGER,
    Visitor_DateOfVisit DATE,
    Visitor_Name        CHAR(50),
    Visitor_PhoneNumber INTEGER,
    Visitor_Email       CHAR(50),
    Visitor_Age         INTEGER,

    PRIMARY KEY (Visitor_ID, Visitor_DateOfVisit)
) INSERT INTO Visitor(Visitor_ID, Visitor_DateOfVisit, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
    VALUES (1, 2022 - 10 - 10, "Alan", 4161111111, "alan.apple@gmail.com", 45),
    (2, 2022-05-05, "Bob", 4162222222, "bob.banana@gmail.com", 13),
    (3, 2022-07-10, "Cameron", 4162322323, "cameron.cherrie@gmail.com", 61),
    (4, 2022-08-11, "Daniel", 4163233322, "daniel.date@gmail.com", 62),
    (5, 2022-02-14, "Ethan", 4161144141, "ethan.eggplant@gmail.com", 65),
    (6, 2022-10-13, "Frankie", 4161233213, "frankie.fruit@gmail.com", 12)

-- OWNER
-- R7(O.N, O.P, O.A, O.D)
CREATE TABLE Owner
(
    Owner_Name              CHAR(50),
    Owner_PhoneNumber       INTEGER,
    Owner_Age               INTEGER,
    Owner_DateOfAcquisition DATE,

    PRIMARY KEY (Owner_Name, Owner_PhoneNumber)
) INSERT INTO Owner(Owner_Name, Owner_PhoneNumber, Owner_Age, Owner_DateOfAcquisition)
    VALUES ("Bobby", 41633454354, 56, 2019 - 05 - 05),
    ("Norman", 41643454754, 54, 2018-04-15),
    ("Summer", 60443454654, 78, 2022-09-05),
    ("Nicole", 64743454614, 88, 2012-01-05),
    ("Dion", 2896564783, 10, 2004-06-05)

-- EXHIBITION
-- R8(E.N, E.S, G.N, E.E, E.T)
CREATE TABLE Exhibition
(
    Exhibition_Name      CHAR(50),
    Exhibition_StartDate DATE,
    Exhibition_EndDate   DATE,
    Exhibition_Theme     CHAR(50),
    Gallery_Name         CHAR(50),

    PRIMARY KEY (Exhibition_Name, Exhibition_StartDate),
    FOREIGN KEY (Gallery_Name) REFERENCES Gallery (Gallery_Name)
        ON DELETE SET NULL
    -- ON UPDATE CASCADE
) INSERT INTO Exhibition(Exhibition_Name, Exhibition_StartDate, Exhibition_EndDate, Exhibition_Theme, Gallery_Name)
    VALUES ("DoomsDay", 2022 - 10 - 01, 2022 - 12 - 01, "Wine & Dine", "Decora"),
    ("SoupDay", 2021-05-01, 2021-08-01, "Cheese with a side of Pizza", "Antiquities"),
    ("YAHOO", 2014-06-01, 2014-12-01, "Casual Date", "Artovox"),
    ("BOOMBAYAH", 2017-08-01, 2017-09-01, "Black with a dash of Pink", "Mural"),
    ("Love Dive", 2022-02-01, 2022-04-01, "Be Narcissistic", "Patronizing")

-- EXHIBITION ROOM SETTINGS
-- R9(E.T, R.TH, R.L)
CREATE TABLE ExhibitionRoomSettings
(
    Exhibition_Theme CHAR(50) PRIMARY KEY,
    Rooms_Lighting   CHAR(50),
    Rooms_Theme      CHAR(50)
        FOREIGN KEY (Exhibition_Theme) REFERENCES Exhibition(Exhibition_Theme)
        FOREIGN KEY (Rooms_Lighting, Rooms_Theme) REFERENCES Rooms(Rooms_Lighting, Rooms_Theme)
) INSERT INTO ExhibitionRoomSettings(Exhibition_Theme, Rooms_Lighting, Rooms_Theme)
    VALUES ("Wine & Dine", "Dim lights", "Gloomy"),
   ("SoupDay", "Bright lights", "Rainy with a chance of spaghetti"),
   ("YAHOO", "Ambient lights", "Midwest Vibes"),
   ("BOOMBAYAH", "Neon lights", "DDU DU DDU DU"),
   ("Love Dive", "Accent lights", "Flying Cars")

-- ROOMS
-- R10(R.R, B.C, B.S, B.B, R.TE, R.S, R.L, R.TH)
CREATE TABLE Rooms
(
    Rooms_RoomNumber        CHAR(50),
    Rooms_Temperature       NUMBER,
    Rooms_Size              NUMBER,
    Rooms_Lighting          CHAR(50)
        Rooms_Theme CHAR (50),
    Building_City           CHAR(50),
    Building_StreetName     CHAR(50),
    Building_BuildingNumber INTEGER,

    PRIMARY KEY (Building_City, Building_BuildingNumber, Building_StreetName, Rooms_RoomNumber)
        FOREIGN KEY (Building_City, Building_BuildingNumber,Building_StreetName)
        REFERENCES Gallery(Building_City, Building_BuildingNumber, Building_StreetName)
        ON DELETE CASCADE
    -- ON UPDATE CASCADE
) INSERT INTO Rooms(Rooms_RoomNumber, Rooms_Temperature, Rooms_Size, Rooms_Lighting, Rooms_Theme, Building_City, Building_StreetName, Building_BuildingNumber)
    VALUES (1, 23.4, "Small", "Dim lights", "Gloomy", "Toronto", 1234, "Dundas"),
    (2, 24.3, " Medium ", "Bright lights", "Rainy with a chance of spaghetti", "Vancouver", 232, "Manor"),
    (3, 24.3, "Large", "Ambient lights", "Midwest Vibes", "Winnipeg", 23312, "Walter Main "),
    (4, 23.4, "Small", "Neon lights", "DDU DU DDU DU", "Calgary", 1212, "Scurfield"),
    (5, 25.1, "Small", "Accent lights", "Flying Cars", "Toronto", 2360, "Younge")

-- CREATED
-- R11(AP.ID, A.ID, E.S, E.N, V.ID, V.D, R.R)
CREATE TABLE Created
(
    ArtPiece_ID INTEGER
        Artist_ID INTEGER
        Exhibition_Name CHAR (50)
        Exhibition_StartDate DATE
        Visitor_VisitorNumber INTEGER
        Visitor_DateOfVisit DATE
        Rooms_RoomNumber INTEGER
        PRIMARY KEY (ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_VisitorNumber, Visitor_DateOfVisit, Rooms_RoomNumber)
        FOREIGN KEY (ArtPiece_ID) REFERENCES ArtPiece(ArtPiece_ID)
        ON DELETE CASCADE
        -- ON UPDATE CASCADE

        FOREIGN KEY (Artist_ID) REFERENCES Artist(Artist_ID)
        ON DELETE CASCADE
        -- ON UPDATE CASCADE

        FOREIGN KEY (Exhibition_Name, Exhibition_StartDate) REFERENCES Exhibition(Exhibition_Name, Exhibition_StartDate)
        ON DELETE CASCADE
        -- ON UPDATE CASCADE

        FOREIGN KEY (Visitor_VisitorNumber, Visitor_DateOfVisit) REFERENCES Visitor(Visitor_VisitorNumber, Visitor_DateOfVisit)
        ON DELETE CASCADE
        -- ON UPDATE CASCADE

        FOREIGN KEY (Rooms_RoomNumber) REFERENCES Rooms(Rooms_RoomNumber)
        ON DELETE CASCADE
    -- ON UPDATE CASCADE
) INSERT INTO Created(ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_VisitorNumber, Visitor_DateOfVisit, Rooms_RoomNumber)
    VALUES (10, 1111, "DoomsDay", 2022-10-01, 1, 2022-10-10, 1),
    (11, 1112, "SoupDay", 2021-05-01, 2, 2021-05-05, 2),
    (12, 1113, "YAHOO", 2014-06-01, 3, 2014-07-10, 3),
    (13, 1114, "BOOMBAYAH", 2017-08-01, 4, 2017-08-11, 4),
    (14, 1115, "Love Dive", 2022-02-01, 5, 2022-02-14, 5)


