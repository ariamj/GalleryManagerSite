-- INSERT
-- // ADD VISITOR BUTTON - Adds a visitor/user (Name, Phone Number , Email, Age) //
-- // require user input on info //
INSERT INTO Visitor(Visitor_ID, Visitor_DateOfVisit, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age)
VALUES (userInput1, userInput2, userInput3, userInput4, userInput5);


-- SELECTION
-- // ART PIECES VIEWED BUTTON - Select all art pieces user/visitor viewed //
-- // interface for user to specify values for selection condition to be returned //
-- // input: visitor number, date of visit (aka primary keys for visitor) //
SELECT Ap.ArtPiece_ID,
       Ap.ArtPiece_Title,
       Ap.ArtPiece_DateCreated,
       Ap.ArtPiece_Medium,
       Ap.ArtPiece_Price,
       Ap.ArtPiece_Style
FROM Viewed Vw
         INNER JOIN ArtPiece Ap
                    ON Ap.ArtPiece_ID = Vw.ArtPiece_ID
WHERE Vw.Visitor_ID = userInput1

-- AGGREGATION WITH GROUP BY
-- // NUMBER OF ART PIECES PER GALLERY - Get the number of art pieces each gallery contains //
-- // X (can't do) MOST VIEWED ART PIECE BUTTON - Get most popular art pieces per style (aka. art piece with max views) //
-- // interface for user to execute query (HTML Button/Drop Down...) //
SELECT Gallery_Name, COUNT(*) AS numArt
FROM ArtPiece
GROUP BY Gallery_Name


-- DIVISION
-- // DEDICATED VISITORS BUTTON - Select visitors who visited all the art pieces in gallery //
-- // interface for user to execute query (HTML Button...) //
-- // ~~ read from inner to outer brackets ~~
-- // Returns a result if Visitor Vi viewed ArtPiece
-- //       -> NOT EXISTS : Only true if Visitor has never viewed ArtPiece
-- // Find the ArtPieces that Visitor has not viewed before
-- //       -> NOT EXISTS : Only true if there are no ArtPieces that Visitor has
-- //                       never visited (aka. Visitor visited all art pieces
SELECT Vi.Visitor_Name, Vi.Visitor_Email
FROM Visitor Vi
WHERE NOT EXISTS
    (SELECT Ap.ArtPiece_ID
     FROM ArtPiece Ap
     WHERE NOT EXISTS
         (SELECT Vw.Visitor_ID
          FROM Viewed Vw
          WHERE Vw.ArtPiece_ID = Ap.ArtPiece_ID
            AND Vw.Visitor_ID = Vi.Visitor_ID))