<!-- can open by searching up https://www.students.cs.ubc.ca/~tc2780/304GalleryManager/index.php-->
<html>
    <head>
        <meta charset = "utf-8">
        <meta name = "viewport" content = "width=device-width, initial-scale = 1">

        <style media = "screen">
            body {
                margin: 0;
                padding: 0;
            }
            .mainTitle {
                font-family: "Bradley Hand", Verdana;
                color: white;
                text-align: left;
                text-shadow: 4px 4px 5px black;
                text-transform: italic;
                padding-left: 30px;
                padding-top: 30px;
                height: inherit;
            }

            .titleBox {
                background: rgb(153, 130, 130);
            }

            .topBox {
                background:rgb(153, 130, 130);
                position: sticky;
                top: 0px;
            }

            .tabsBox {
                overflow: hidden;
            }

            .tabButton {
            }

            .tabsBox button{
                background: rgb(200, 200, 200);
                cursor: pointer;
                float: left;
                width: 33.33333%;
                padding-top: 10px;
                padding-bottom: 10px;
                transition: 0.3s;
                border: none;
                border-top: 2px solid rgb(133, 110, 110);
                border-bottom: 2px solid rgb(133, 110, 110);
            }

            .tabsBox button:hover {
                background: rgb(175, 175, 175);
            }

            .tabsBox button.active {
                background: rgb(153, 130, 130);
                color: white;
                text-shadow: 4px 4px 5px black;
            }

            .tabContent {
                background: rgb(213, 190, 190);
                /* height: 80%; */
                height: 100%;
            }

            .tabText {
                font-family: Verdana;
                font-size: 20px;
                text-transform: bold;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .addVisitorBox button{
                background: rgb(200, 200, 200);
                cursor: pointer;
                /* float: left; */
                width: 25%;
                height: 50px;
                /* height: 5%; */
                padding-top: 10px;
                padding-bottom: 10px;
                margin: 2.5%;
                transition: 0.3s;
                border: none;
            }

            .addVisitorBox button:hover{
                /* background: rgb(175, 175, 175); */
                background: rgb(153, 130, 130);
            }

            .addVisitorBox button.active {
                background: rgb(153, 130, 130);
                color: white;
                text-shadow: 4px 4px 5px black;
            }

            .addVisitorText {
                font-family: Verdana;
                font-size: 14px;
                text-transform: bold;
                text-align: center;
            }

            .addVisitorInput {
                margin: 2.5%;
                /* padding-left: 6pc; */
            }

            /* Page Buttons */
            .queryBox {
                width: 30%;
                /* overflow: visible; */
                flex-direction: column;
            }

            .queryButtonBox {
                /* ruby-position: under; */
            }

            .queryBox button{
                background: rgb(200, 200, 200);
                cursor: pointer;
                float: left;
                width: 100%;
                /* height: 5%; */
                padding-top: 10px;
                padding-bottom: 10px;
                margin: 2.5%;
                transition: 0.3s;
                border: none;
            }

            .queryBox button:hover {
                /* background: rgb(175, 175, 175); */
                background: rgb(153, 130, 130);
            }

            .queryBox button.active {
                background: rgb(153, 130, 130);
                color: white;
                text-shadow: 4px 4px 5px black;
            }

            .queryButtonContent {
                background: rgb(213, 190, 190);
                /* height: 80%; */
                height: 100%;
            }

            .queryButtonText {
                font-family: Verdana;
                font-size: 15px;
                text-transform: bold;
                padding-left: 10px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .queryInput {
                margin: 2.5%;
                padding-left: 6px;
                /* width: 100%; */
            }

            td, th {
                text-align: left;
                padding: 8px;
            }

        </style>
    </head>

<body class = "fullPage">
<title> Art Gallery Management </title>

<div class = "topBox">
    <!-- for the Gallery Manager title -->
    <div class = "titleBox">
        <h1 class = "mainTitle"> Gallery Manager</h1>
    </div>

    <!-- for the list of tabs under the title -- should be Add Visitor, Edit Visitor and Query Data -->
    <div class = "tabsBox">
        <button class = "tablinks tabButton" id = "addVisitorTab" onclick = "openTab(event, 'addVisitor')">
            <div class = "tabText"> Add Visitor </div>
        </button>
        <button class = "tablinks tabButton" id = "editVisitorTab" onclick = "openTab(event, 'editVisitor')">
            <div class = "tabText"> Edit Visitor </div>
        </button>
        <button class = "tablinks tabButton" id = "queryDataTab" onclick = "openTab(event, 'queryData')">
            <div class = "tabText"> Query Data </div>
        </button>
    </div>
</div>

<!-- Tab content -->

<!-- ADD VISITOR PAGEs -->
<div id = "addVisitor" class = "tabcontent">

    <div class = "addVisitorBox">
        <div style="padding-top:20px;padding-left:20px">Welcome to the Add Visitors page of the Gallary Manager!
        Here you can reset all current data, add a new visitor, and see all current visitors.</div>
        <hr />
        <div id = "resetSection">

                <p style="padding-left:20px"> Click the button to reset all data! (please press if it's your first time here, just to get all the tables set up correctly)
                *There may be a drop table error, but if it doesn't appear after pressing reset again, you're good</p>
                <form style="padding-left:20px" method = "POST" action = "index.php">
                    <input type = "hidden" id = "resetTablesRequest" name = "resetTablesRequest">
                    <button class = "addVisitorInput" id = "resetTablesRequest" name = "reset">
                        <div class = "addVisitorText">Reset</div>
                    </button>
                    <!-- <p><input type = "submit" value = "Reset" name = "reset"></p> -->
                </form>

                <hr />

                <p style = "padding-left: 20px"> If you want to add a visitor, make sure you input their ID (check Query Data for an ID that haven't been used) </p>
                <form style="padding-left:20px" method = "POST" action = "index.php">
                    <input type = "hidden" id = "addVisitorRequest" name = "addVisitorRequest">
                    ID: <input type="text" name= "addVId"> <br /><br />
                    <!-- Date of Visit (YYYY-MM-DD): <input type="text" name= "addVDate"> <br /><br /> -->
                    Name: <input type="text" name= "addVName"> <br /><br />
                    Phone Number (all #s pls): <input type="text" name= "addVNum"> <br /><br />
                    Email: <input type="text" name= "addVEmail"> <br /><br />
                    Age: <input type="text" name= "addVAge"> <br /><br />
                    <button class = "addVisitorInput" id = "addVisitorRequest" name = "addNewV">
                        <div class = "addVisitorText">Add New Visitor</div>
                    </button>
                    <!-- <p><input type = "submit" value = "Add New Visitor" name = "addNewV"></p> -->
                </form>

                <hr />

                <?php
                    // check if POST request is reset (from clicking reset button)
                    if (isset($_POST['reset']) || isset($_POST['addNewV']) || isset($_POST['seeAllV'])) {
                        handlePOSTRequest(); // handle will check the post value again, connect to DB, call handleResetRequest and then disconnect
                    }
                    function handleResetRequest() {
                        global $db_conn;
                        createAllTables();
                        $initialInsert = file_get_contents('initialQueries.SQL');
                        executePlainSQL($initialInsert);
                        echo sprintf("<p> Reset done! <p/>");
                        OCICommit($db_conn);
                    }

                    function handleAddVisitorRequest() {
                        global $db_conn, $success;
                        $vname = "NULL";
                        $vnum = "NULL";
                        $vemail = "NULL";
                        $vage = "NULL";
                        if ($_POST['addVName']) {
                            $vname = "'".$_POST['addVName']."'";
                        }
                        if ($_POST['addVNum']) {
                            $vnum = $_POST['addVNum'];
                        }
                        if ($_POST['addVEmail']) {
                            $vemail = "'".$_POST['addVEmail']."'";
                        }
                        if ($_POST['addVAge']) {
                            $vage = $_POST['addVAge'];
                        }
                        // QUERYREQ: INSERT
                        executePlainSQL("INSERT into Visitor VALUES (".$_POST['addVId'].", "
                            .$vname.", ".$vnum.", ".$vemail.", ".$vage.")");
                        if($success != false) {
                            echo "<p>New visitor with ID ".$_POST['addVId']." has been added!</p>";
                        }
                        $result = executePlainSQL("SELECT Count(*) FROM Visitor");
                        if (($row = oci_fetch_row($result)) != false) {
                            echo "<p> Current Count:" . $row[0] . "</p>";
                        }
                        OCICommit($db_conn);
                    }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- EDIT VISITOR PAGE -->
<div id = "editVisitor" class = "tabcontent">
    <div class = "addVisitorBox">
        <div style="padding-top:20px;padding-left:20px">
            You're at the Edit Visitors page! To edit a visitor, please make sure you input a valid Visitor ID.
            You can check the added visitors in the Add Visitor page if needed!
            If you leave any inputs other than ID empty, it will be treated as blank --
            the old value will be overwritted with a null, so be careful
        </div>
        <hr />
        <div id = "deleteSection">
                    <table style="width:100%;text-align:left;">
                    <tr><th><p style = "padding-left:20px;padding-bottom:20px"> Update Visitor Info </p></th>
                    <th><p style = "padding-left:20px;padding-bottom:20px"> Delete Visitor </p></th></tr>
                    <tr>
                        <td>
                            <form style = "padding-left:20px" method = "POST" action = "index.php">
                                <input type = "hidden" id = "editVisitorRequest" name = "editVisitorRequest">
                                Given ID: <input type = "text" name = "editVID"> <br /> <br />
                                <!-- Given Date of Visit (YYYY-MM-DD): <input type = "text" name = "editDOV"> <br /> <br /> -->
                                Update Name to: <input type = "text" name = "editVName"> <br /> <br />
                                Update Phone # to: <input type = "text" name = "editVNum"> <br /> <br />
                                Update Email to: <input type = "text" name = "editVEmail"> <br /> <br />
                                Update Age to: <input type = "text" name = "editVAge"> <br /> <br />
                                <button class = "addVisitorInput" id = "editVisitorRequest" name = "editSubmit">
                                    <div class = "addVisitorText">Update</div>
                                </button>
                                <!-- <p><input type = "submit" value = "Update" name = "editSubmit"></p> -->
                            </form>
                        </td>
                    <td>
                    <form style = "padding-left:20px" method = "POST" action = "index.php">
                    <input type = "hidden" id = "deleteVisitorRequest" name = "deleteVisitorRequest">
                        ID: <input type = "text" name = "deleteVID"> <br /> <br />
                        <button class = "addVisitorInput" id = "deleteVisitorRequest" name = "deleteSubmit">
                            <div class = "addVisitorText">Delete Visitor!</div>
                        </button>
                        <!-- <p><input type = "submit" value = "Delete Visitor!" name = "deleteSubmit"></p> -->
                    </form>
                    </td></tr>
                    </table>

                    <hr />

                    <?php
                        if (isset($_POST['deleteVisitorRequest']) || isset($_POST['editVisitorRequest'])) {
                            handlePOSTRequest();
                        }

                        function handleDeleteVisitorRequest() {
                            global $db_conn, $success;

                            // QUERYREQ: DELETE
                            executePlainSQL("DELETE FROM Visitor WHERE Visitor_ID = ".$_POST['deleteVID']."");
                            if($success != false) {
                                echo "<p>Visitor with ID ".$_POST['addVId']." has been deleted!</p>";
                            }
                            $result = executePlainSQL("SELECT COUNT(*) FROM Visitor");
                            if (($row = oci_fetch_row($result)) != false) {
                                echo "<p> Current count:" . $row[0] . "</p>";
                            }
                            OCICommit($db_conn);
                        }

                        function handleEditVisitorRequest() {
                            global $db_conn, $success;
                            $newName = "NULL";
                            $newNumber = "NULL";
                            $newEmail = "NULL";
                            $newAge = "NULL";
                            if ($_POST['editVName'] != "") {
                                $newName = "'".$_POST['editVName']."'";
                            }
                            if ($_POST['editVNum']) {
                                $newNumber = $_POST['editVNum'];
                            }
                            if ($_POST['editVEmail']) {
                                $newEmail = "'".$_POST['editVEmail']."'";
                            }
                            if ($_POST['editVAge']) {
                                $newAge = $_POST['editVAge'];
                            }
                            // QUERYREQ: UPDATE
                            executePlainSQL("UPDATE Visitor
                            SET Visitor_Name = ".$newName.", Visitor_PhoneNumber = ".$newNumber.", Visitor_Email = ".$newEmail.", Visitor_Age = ".$newAge."
                            WHERE Visitor_ID = ".$_POST['editVID']."");
                            if ($success != false) {
                                echo "<p>Visitor with ID ".$_POST['addVId']." has been updated!</p>";
                            }
                            OCICommit($db_conn);
                        }
                    ?>
            </div>
        </div>
    </div>
</div>

    <!-- QUERY DATA PAGE -- fill it with buttons -->
    <div id = "queryData" class = "tabcontent">
        <div style="padding-top:20px;padding-left:20px">You've reached the Query Data page!
        Here, you can execute different kinds of queries on the current data. Click on a button to see the result!</div>
        <hr />
        <div class = "queryBox">
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <input class="queryInput" type="text" placeholder="Visitor Number" name="getVisitorNum">
                <button class = "queryButton" id = "artPieceViewedRequest" name="artPieceViewedRequest">
                    <div class = "queryButtonText">Art Pieces Viewed</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <input class="queryInput" type="text" placeholder="Artist" name="getArtist">
                <button class = "queryButton" id = "showAllArtPiecesRequest" name="showAllArtPiecesRequest">
                    <div class = "queryButtonText">Show All Art Pieces</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <button class = "queryButton" id = "showAllVisitorsRequest" name = "showAllVisitorsRequest">
                    <div class = "queryButtonText">Show All Visitors</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <button class = "queryButton" id = "showNumArtRequest" name="showNumArtRequest">
                    <div class = "queryButtonText">Number of Art Pieces per Gallery</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <button class = "queryButton" id = "artMediumFilterRequest" name="artMediumFilterRequest">
                    <div class = "queryButtonText">Filter Art Piece Medium</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <button class = "queryButton" id = "avgArtPriceRequest" name="avgArtPriceRequest">
                    <div class = "queryButtonText">Average Price of "Modern" Art Pieces</div>
                </button>
            </form>
            </div>
            <div>
            <form style="padding-left:20px" method="POST" action="index.php">
                <button class = "queryButton" id = "dedicatedVisitorsRequest" name="dedicatedVisitorsRequest">
                    <div class = "queryButtonText">Dedicated Visitors</div>
                </button>
            </form>
            </div>
        </div>

        <?php
            if (isset($_POST['artPieceViewedRequest']) || isset($_POST['showAllArtPiecesRequest']) || isset($_POST['showAllVisitorsRequest'])
            || isset($_POST['showNumArtRequest']) || isset($_POST['artMediumFilterRequest'])
            || isset($_POST['avgArtPriceRequest']) || isset($_POST['dedicatedVisitorsRequest'])) {
                handlePOSTRequest();
            }

            function handleArtPieceViewedRequest() {
                global $db_conn;
                $titleText = "QUERY: ART PIECES VIEWED";
                if ($_POST['getVisitorNum']) {
                    echo "<p><strong>".$titleText." BY USER WITH ID ".$_POST['getVisitorNum']."</string><br></p><hr />";
                    // QUERYREQ: SELECTION
                    $result = executePlainSQL("SELECT Ap.ArtPiece_ID, Ap.ArtPiece_Title, Ap.ArtPiece_DateCreated, Ap.ArtPiece_Medium, Ap.ArtPiece_Price, Ap.ArtPiece_Style
                    FROM Viewed Vw
                            INNER JOIN ArtPiece Ap
                            ON Ap.ArtPiece_ID = Vw.ArtPiece_ID
                    WHERE Vw.Visitor_ID = ".$_POST['getVisitorNum']."");

                    echo "<p></p>";
                    echo "<table>";
                    echo "<tr><th>ID</th><th>Title</th><th>Date Created</th><th>Medium</th><th>Price</th><th>Style</th></tr>";

                    while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                        echo "<tr><td>" . $row["ARTPIECE_ID"] . "</td><td>" . $row["ARTPIECE_TITLE"] . "</td><td>"
                        . $row["ARTPIECE_DATECREATED"] . "</td><td>" . $row["ARTPIECE_MEDIUM"] . "</td><td>" . $row["ARTPIECE_PRICE"] . "</td><td>"
                        . $row["ARTPIECE_STYLE"] . "</td></tr>";
                    }
                    echo "</table>";
                } else {
                    echo "<p><strong>".$titleText."</string><br></p><hr />";
                    echo "<p><b><i>Please provide your Visitor ID</i></b></p>";
                }

                OCICommit($db_conn);
            }

            function handleShowAllArtPiecesRequest() {
                global $db_conn;
                $titleText = "QUERY: ALL ART PIECES";
                $artistName = "IN (SELECT a2.Artist_Name FROM Artist a2)";
                if ($_POST['getArtist']) {
                    $artistName = "= '".$_POST['getArtist']."'";
                    $byArtistText = "BY ".$_POST['getArtist'];
                    echo "<p><strong>".$titleText." ".strtoupper($byArtistText)."</strong><br></p><hr />";
                } else {
                    echo "<p><strong>".$titleText."</strong><br></p><hr />";
                    echo "<p><b><i>Provide an Artist's name to filter</i></b></p>";
                }
                // QUERYREQ: JOIN
                $result = executePlainSQL("SELECT ap.ArtPiece_Title, a1.Artist_Name, ap.ArtPiece_DateCreated, ap.ArtPiece_Style, ap.ArtPiece_Medium
                FROM ArtPiece ap INNER JOIN Created c
                ON ap.ArtPiece_ID = c.ArtPiece_ID
                INNER JOIN Artist a1 ON a1.Artist_ID = c.Artist_ID
                WHERE c.Artist_ID IN (SELECT a.Artist_ID
                                       FROM Artist a
                                       WHERE a.Artist_Name ".$artistName.")");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>Title</th><th>Artist</th><th>Date Created</th><th>Style</th><th>Medium</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["ARTPIECE_TITLE"] . "</td><td>" . $row["ARTIST_NAME"] . "</td><td>" . $row["ARTPIECE_DATECREATED"] . "</td><td>"
                    . $row["ARTPIECE_STYLE"] . "</td><td>" . $row["ARTPIECE_MEDIUM"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }

            function handleShowAllVisitorsRequest() {
                global $db_conn;

                echo "<p><strong>QUERY: ALL VISITORS</strong><br></p><hr />";
                // QUERYREQ: PROJECTION
                $result = executePlainSQL("SELECT Visitor_ID, Visitor_Name, Visitor_PhoneNumber, Visitor_Email, Visitor_Age FROM Visitor");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>ID</th><th>Name</th><th>Phone Number</th><th>Email</th><th>Age</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["VISITOR_ID"] . "</td><td>"
                    . $row["VISITOR_NAME"] . "</td><td>" . $row["VISITOR_PHONENUMBER"] . "</td><td>" . $row["VISITOR_EMAIL"] . "</td><td>"
                    . $row["VISITOR_AGE"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }

            function handleShowNumArtRequest() {
                global $db_conn;

                echo "<p><strong>QUERY: NUMBER OF ART PIECES PER GALLERY</strong><br></p><hr />";
                // QUERYREQ: AGGREGATION WITH GROUP BY
                $result = executePlainSQL("SELECT Gallery_Name, COUNT(*) AS numArt FROM ArtPiece GROUP BY Gallery_Name");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>Gallery Name</th><th></th><th>Number of Art Pieces</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["GALLERY_NAME"] . "</td><th></th><td>" . $row["NUMART"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }

            function handleArtMediumFilterRequest() {
                global $db_conn;

                echo "<p><strong>QUERY: POPULARITY OF ART MEDIUMS</strong><br></p><hr />";
                // QUERYREQ: AGGREGATION WITH HAVING

                $result = executePlainSQL("SELECT ArtPiece_Medium, SUM(ArtPiece_NumberOfViews) AS totalViews
                FROM ArtPiece
                GROUP BY ArtPiece_Medium
                HAVING SUM(ArtPiece_NumberOfViews) > 2");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>Medium</th><th>Total Number of Views</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["ARTPIECE_MEDIUM"] . "</td><td>" . $row["TOTALVIEWS"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }

            function handleAvgArtPriceRequest() {
                global $db_conn;

                echo "<p><strong>QUERY: AVERAGE ART PRICES</strong><br></p><hr />";
                // QUERYREQ: NESTED AGGREGATION WITH GROUP BY

                $result = executePlainSQL("SELECT ap1.ArtPiece_Style, AVG(ap1.ArtPiece_Price) AS averagePrice
                FROM ArtPiece ap1
                GROUP BY ap1.ArtPiece_Style
                HAVING ap1.ArtPiece_Style IN (SELECT ap2.ArtPiece_Style
                                            FROM ArtPiece ap2
                                            WHERE ap2.ArtPiece_DateCreated >= DATE '1990-01-01')");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>Style</th><th>Average Price</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["ARTPIECE_STYLE"] . "</td><td>" . $row["AVERAGEPRICE"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }

            function handleDedicatedVisitorsRequest() {
                global $db_conn;

                echo "<p><strong>QUERY: DEDICATED VISITORS</strong><br></p><hr />";
                // QUERYREQ: DIVISION

                $result = executePlainSQL("SELECT Vi.Visitor_Name, Vi.Visitor_Email
                FROM Visitor Vi
                WHERE NOT EXISTS
                    (SELECT Ap.ArtPiece_ID
                     FROM ArtPiece Ap
                     WHERE NOT EXISTS
                         (SELECT Vw.Visitor_ID
                          FROM Viewed Vw
                          WHERE Vw.ArtPiece_ID = Ap.ArtPiece_ID
                            AND Vw.Visitor_ID = Vi.Visitor_ID))");
                echo "<p></p>";
                echo "<table>";
                echo "<tr><th>Visitor's Name</th><th>Email</th></tr>";

                while ($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                    echo "<tr><td>" . $row["VISITOR_NAME"] . "</td><td>" . $row["VISITOR_EMAIL"] . "</td></tr>";
                }

                echo "</table>";
                OCICommit($db_conn);
            }
        ?>
    </div>

    <!-- the script here is for tab functionality -->
    <script>
        // ref for tabs: https://www.w3schools.com/howto/howto_js_tabs.asp
        function openTab(e, tabName) {
            var tabName2 = tabName + "Tab"
            localStorage.setItem("activeTab", tabName2);
            var tabContent = document.getElementsByClassName("tabcontent");
            for (var i = 0; i < tabContent.length; i++) {
                tabContent[i].style.display = "none"
            }

            var tabLinks = document.getElementsByClassName("tablinks");
            for (var i = 0; i < tabLinks.length; i++) {
                tabLinks[i].className = tabLinks[i].className.replace(" active", "");
            }

            document.getElementById(tabName).style.display = "block";
            e.currentTarget.className += " active"
        }

        // checks if there was a prev stored tab in the session, if there is, it loads it instead of add (default)
        // https://www.w3schools.com/html/html5_webstorage.asp
        if (typeof (Storage) !== "undefined") {
            const activeTab = localStorage.getItem("activeTab");
            document.getElementById(activeTab).click();
        } else {
            document.getElementById("addVisitorTab").click();
        }
    </script>


<!-- here is the functionality for all DB stuff -->
    <?php
    // ref (throughout most of doc actually): https://www.students.cs.ubc.ca/%7Ecs-304/resources/php-oracle-resources/php-setup.html
       $success = True;
       $db_conn = NULL;
       $show_debug_alert_message = False;

        function debugAlertMessage($message) {
            global $show_debug_alert_message;

            if ($show_debug_alert_message) {
                echo "<script type = 'text/javascript'>alert('oh no bug" . $message . "');</script>";
            }
       }

        // executes SQL, given the cmdstr is a single VALID query
       function executePlainSQL($cmdstr) {
            global $db_conn, $success;
            $success = true;

            $statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                echo "<br> Can't execute command: " . $cmdstr . "<br>";
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = false;
            }

            $r = OCIExecute($statement, OCI_DEFAULT);
            if(!$r) {
                echo "<br> Can't execute command: " . $cmdstr . "<br>";
                $e = oci_error($statement);
                echo htmlentities($e['message']);
                $success = false;
            }
            return $statement;
       }

        // use if same statement has to b executed multiple times but with diff parameters (which will b in list)
        function executeBoundSQL($cmdstr, $list) {
            global $db_conn, $success;
            $statement = OCIParse($db_conn, $cmdstr);

            if (!$statement) {
                $e = OCI_Error($db_conn);
                echo htmlentities($e['message']);
                $success = False;
            }

            foreach($list as $tuple) {
                foreach($tuple as $bind => $val) {
                    OCIBindByName($statement, $bind, $val);
                    unset($val);
                }

                $r = OCIExecute($statement, OCI_DEFAULT);
                if(!$r) {
                    echo "<br>Cannot execute the following command: " . $cmdstr . "<br>";
                    $e = OCI_Error($statement);
                    echo htmlentities($e['message']);
                    echo "<br>";
                    $success = False;
                }
            }
       }

       function printResult($result) {
            while($row = OCI_Fetch_Array($result, OCI_BOTH)) {
                //
            }
            //
       }

       // connects to DB --- replace it w your user and pass if needed (or use this one, it's fine lol)
        function connectToDB() {
            global $db_conn;

            // $db_conn = OCILogon("", "", "dbhost.students.cs.ubc.ca:1522/stu");

            if ($db_conn) {
                debugAlertMessage("Database is Connected");
                return true;
            } else {
                debugAlertMessage("Can't connect to database");
                $e = OCI_Error();
                echo htmlentities($e['message']);
                return false;
            }
        }

        function disconnectFromDB() {
            global $db_conn;

            debugAlertMessage("Disconnect from Database");
            OCILogoff($db_conn);
        }

        // this handles all POST request --- so when you click a button, state the method as "POST" and it'll hit here in the php
        // but also make sure you check the post and msg in the tab content page above (the if (isset($_POST... )) function),
        //  or echo will print things in a weird place
        // ---check the ressetTablesRequest for an example
        function handlePOSTRequest() {
            if(connectToDB()) {
                if(array_key_exists('resetTablesRequest', $_POST)) {
                    handleResetRequest();
                } else if (array_key_exists('addVisitorRequest', $_POST)) {
                    handleAddVisitorRequest();
                } else if (array_key_exists('deleteVisitorRequest', $_POST)) {
                    handleDeleteVisitorRequest();
                } else if (array_key_exists('editVisitorRequest', $_POST)) {
                    handleEditVisitorRequest();
                } else if (array_key_exists('artPieceViewedRequest', $_POST)) {
                    handleArtPieceViewedRequest();
                } else if (array_key_exists('showAllArtPiecesRequest', $_POST)) {
                    handleShowAllArtPiecesRequest();
                } else if (array_key_exists('showAllVisitorsRequest', $_POST)) {
                    handleShowAllVisitorsRequest();
                } else if (array_key_exists('showNumArtRequest', $_POST)) {
                    handleShowNumArtRequest();
                } else if (array_key_exists('artMediumFilterRequest', $_POST)) {
                    handleArtMediumFilterRequest();
                } else if (array_key_exists('avgArtPriceRequest', $_POST)) {
                    handleAvgArtPriceRequest();
                } else if (array_key_exists('dedicatedVisitorsRequest', $_POST)) {
                    handleDedicatedVisitorsRequest();
                }
                disconnectFromDB();
            }
        }

        // TODO UPDATE
        // if (isset($_POST['reset'])) {
        //     echo "HEREEE";
        //     handlePOSTRequest();
        // } else if (isset($_GET['countTupleRequest'])) {
        //     handleGETRequest();
        // }
        // if (isset($_POST['reset']) || isset($_POST['updateSubmit']) || isset($_POST['insertSubmit'])) {
        //     handlePOSTRequest();
        // } else if (isset($_GET['countTupleRequest'])) {
        //     handleGETRequest();
        // }

        // function handleGETRequest() {
        //     disconnectFromDB();
        // }
        function createAllTables() {
            global $db_conn;
            executePlainSQL("drop table Artist cascade constraints");
            executePlainSQL("drop table Visitor cascade constraints");
            executePlainSQL("drop table Owner cascade constraints");
            executePlainSQL("drop table Gallery cascade constraints");
            executePlainSQL("drop table ArtPiece cascade constraints");
            executePlainSQL("drop table Exhibition cascade constraints");
            executePlainSQL("drop table Rooms cascade constraints");
            // executePlainSQL("drop table ArtPieceRoom  cascade constraints");
            // executePlainSQL("drop table ExhibitionRoomSettings  cascade constraints");
            executePlainSQL("drop table Created cascade constraints");
            executePlainSQL("drop table Viewed cascade constraints");

            executePlainSQL("CREATE TABLE Artist
            (
                Artist_ID              INTEGER,
                Artist_Age             INTEGER,
                Artist_Name            CHAR(50),
                Artist_DeathDate       DATE,
                Artist_BirthDate       DATE,
                Artist_LocationOfBirth CHAR(50),
                PRIMARY KEY (Artist_ID)
            )");
            executePlainSQL("CREATE TABLE Visitor
            (
                Visitor_ID          INTEGER,
                Visitor_Name        CHAR(50),
                Visitor_PhoneNumber INTEGER,
                Visitor_Email       CHAR(50),
                Visitor_Age         INTEGER,
                PRIMARY KEY (Visitor_ID)
            )");
            executePlainSQL("CREATE TABLE Owner
            (
                Owner_Name              CHAR(50),
                Owner_PhoneNumber       INTEGER,
                Owner_Age               INTEGER,
                Owner_DateOfAcquisition DATE,
                PRIMARY KEY (Owner_Name, Owner_PhoneNumber)
            )");
            executePlainSQL("CREATE TABLE Gallery
            (
                Gallery_Name            CHAR(50),
                Gallery_AccessType      CHAR(50),
                Gallery_EntryPrice      NUMBER,
                Owner_Name              CHAR(50),
                Owner_PhoneNumber       INTEGER,
                Building_City           CHAR(50),
                Building_BuildingNumber INTEGER,
                Building_StreetName     CHAR(50),
                PRIMARY KEY (Gallery_Name),
                FOREIGN KEY (Owner_Name, Owner_PhoneNumber) REFERENCES Owner(Owner_Name, Owner_PhoneNumber) ON DELETE SET NULL,
                UNIQUE (Building_City, Building_BuildingNumber, Building_StreetName)
            )");
            executePlainSQL("CREATE TABLE ArtPiece
            (
                ArtPiece_ID            INTEGER,
                ArtPiece_Title         CHAR(50),
                ArtPiece_DateCreated   DATE,
                ArtPiece_Medium        CHAR(50),
                ArtPiece_Price         NUMBER,
                ArtPiece_Style         CHAR(50),
                ArtPiece_NumberOfViews INTEGER,
                Owner_Name             CHAR(50),
                Owner_PhoneNumber      INTEGER,
                Gallery_Name           CHAR(50),
                Room_Temperature       NUMBER,
                PRIMARY KEY (ArtPiece_ID),
                FOREIGN KEY (Owner_Name, Owner_PhoneNumber) REFERENCES Owner(Owner_Name, Owner_PhoneNumber) ON DELETE SET NULL,
                FOREIGN KEY (Gallery_Name) REFERENCES Gallery(Gallery_Name) ON DELETE SET NULL
            )");
            executePlainSQL("CREATE TABLE Exhibition
            (
                Exhibition_Name      CHAR(50),
                Exhibition_StartDate DATE,
                Exhibition_EndDate   DATE,
                Exhibition_Theme     CHAR(50),
                Gallery_Name         CHAR(50),
                PRIMARY KEY (Exhibition_Name, Exhibition_StartDate),
                FOREIGN KEY (Gallery_Name) REFERENCES Gallery(Gallery_Name) ON DELETE SET NULL
            )");
            executePlainSQL("CREATE TABLE Rooms
            (
                Rooms_RoomNumber        INTEGER,
                Rooms_Temperature       NUMBER,
                Rooms_Size              CHAR(50),
                Rooms_Lighting          CHAR(50),
                Rooms_Theme             CHAR (50),
                Building_City           CHAR(50),
                Building_StreetName     CHAR(50),
                Building_BuildingNumber INTEGER,
                PRIMARY KEY (Building_City, Building_BuildingNumber, Building_StreetName, Rooms_RoomNumber),
                FOREIGN KEY (Building_City, Building_BuildingNumber,Building_StreetName)
                REFERENCES Gallery(Building_City, Building_BuildingNumber, Building_StreetName)
                ON DELETE CASCADE
            )");
            // executePlainSQL("CREATE TABLE ArtPieceRoom
            // (
            //     ArtPiece_Medium         CHAR(50),
            //     Rooms_Temperature       NUMBER,
            //     ArtPiece_ID             INTEGER,
            //     Building_City           CHAR(50),
            //     Building_StreetName     CHAR(50),
            //     Building_BuildingNumber INTEGER,
            //     Rooms_RoomNumber        INTEGER,
            //     PRIMARY KEY (ArtPiece_ID, Rooms_RoomNumber, Building_City, Building_StreetName, Building_BuildingNumber),
            //     FOREIGN KEY (ArtPiece_ID, ArtPiece_Medium) REFERENCES ArtPiece(ArtPiece_ID, ArtPiece_Medium)
            //     -- FOREIGN KEY (Rooms_Temperature, Building_City, Building_StreetName, Building_BuildingNumber, Rooms_RoomNumber) REFERENCES Rooms(Rooms_Temperature, Building_City, Building_StreetName, Building_BuildingNumber, Rooms_RoomNumber)
            // )");
            // executePlainSQL("CREATE TABLE ExhibitionRoomSettings
            // (
            //     Exhibition_Theme CHAR(50),
            //     Rooms_Lighting   CHAR(50),
            //     Rooms_Theme      CHAR(50),
            //     PRIMARY KEY (Exhibition_Theme),
            //     FOREIGN KEY (Exhibition_Theme) REFERENCES Exhibition(Exhibition_Theme),
            //     FOREIGN KEY (Rooms_Lighting, Rooms_Theme) REFERENCES Rooms(Rooms_Lighting, Rooms_Theme)
            // )");
            executePlainSQL("CREATE TABLE Created
            (
                ArtPiece_ID             INTEGER,
                Artist_ID               INTEGER,
                Exhibition_Name         CHAR(50),
                Exhibition_StartDate    DATE,
                Visitor_ID              INTEGER,
                Rooms_RoomNumber        INTEGER,
                Building_City           CHAR(50),
                Building_StreetName     CHAR(50),
                Building_BuildingNumber INTEGER,
                PRIMARY KEY (ArtPiece_ID, Artist_ID, Exhibition_Name, Exhibition_StartDate, Visitor_ID, Rooms_RoomNumber),
                FOREIGN KEY (ArtPiece_ID) REFERENCES ArtPiece(ArtPiece_ID) ON DELETE CASCADE,
                FOREIGN KEY (Artist_ID) REFERENCES Artist(Artist_ID) ON DELETE CASCADE,
                FOREIGN KEY (Exhibition_Name, Exhibition_StartDate) REFERENCES Exhibition(Exhibition_Name, Exhibition_StartDate) ON DELETE CASCADE,
                FOREIGN KEY (Visitor_ID) REFERENCES Visitor(Visitor_ID) ON DELETE CASCADE,
                FOREIGN KEY (Rooms_RoomNumber, Building_City, Building_StreetName, Building_BuildingNumber) REFERENCES Rooms(Rooms_RoomNumber, Building_City, Building_StreetName, Building_BuildingNumber) ON DELETE CASCADE
            )");
            executePlainSQL("CREATE TABLE Viewed
            (
                Visitor_ID          INTEGER,
                Visitor_DateOfVisit DATE,
                ArtPiece_ID         INTEGER,
                PRIMARY KEY (Visitor_ID, Visitor_DateOfVisit, ArtPiece_ID),
                FOREIGN KEY (Visitor_ID) REFERENCES Visitor(Visitor_ID) ON DELETE CASCADE,
                FOREIGN KEY (ArtPiece_ID) REFERENCES ArtPiece(ArtPiece_ID) ON DELETE CASCADE
            )");
            OCICommit($db_conn);
        }
    ?>
    </body>
</html>