-- Delete
DELETE FROM Visitor
WHERE Visitor_ID = userInput1 AND Visitor_DateOfVisit = userInput2;

-- Projection
SELECT ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Style, ArtPiece_Medium
FROM ArtPiece;

-- AGGREGATION WITH Having
SELECT Artist_ID, Artist_Name, Artist_Age
FROM Artist
GROUP BY Artist_ID
HAVING average(Artist_Age) > 40;
