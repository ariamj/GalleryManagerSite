-- update
-- Update user/visitor profile (Update email, name, phone number, age)
-- PRIMARY KEY (Visitor_ID,Visitor_DateOfVisit)
UPDATE Visitor
SET Visitor_Name = UserInput1, Visitor_PhoneNumber = UserInput2,
    Visitor_Email = UserInput3, Visitor_Age = UserInput4
WHERE Visitor_ID = UserID AND Visitor_DateOfVisit = DateOfVisit;
-- SET column1 = value1, column2 = value2, ...
--     WHERE condition;

-- join
-- show all art pieces, join art piece with artist -- display artist with art
-- get user to specify which artists art they want to see all art pieces from

SELECT ArtPiece_Title, ArtPiece_DateCreated, ArtPiece_Style, ArtPiece_Medium
FROM ArtPiece INNER JOIN Created
WHERE Artist_ID IN (SELECT Artist_ID
                       FROM Artist
                       WHERE Artist_Name = UserInput)

-- NESTED AGGREGATION WITH GROUP BY
-- Create one query that finds some aggregated value for each group
--     (e.g., use a nested subquery, such as finding the average number
--     of items purchased per customer, subject to some constraint).
--     Some examples for the Sailors table are given in the project specs.
--     Note the difference between this query and the above Aggregation Query.
--     You must use separate distinct queries for this criterion and the
--     Aggregation Query (i.e., do not double dip).

--     NESTED AGGREGATION WITH GROUP BY
--     ■ FILTER BY DATE CREATED BUTTON
--     ■ Group by art piece art style
--     ■ Group by date created
--  for each year >= 1990, get the count of all paintings
-- get the average price for paintings of each style created after 1990-01-01
SELECT ap1.ArtPiece_Style, AVG(ap1.ArtPiece_Price) AS averagePrice
FROM ArtPiece ap1
GROUP BY ap1.ArtPiece_Style
HAVING ap1.ArtPiece_Style IN (SELECT ap2.ArtPiece_Style
                              FROM ArtPiece ap2
                              WHERE ap2.ArtPiece_DateCreated >= 1990-01-01);