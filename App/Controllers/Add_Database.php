<?php
if (isset($_POST["submit"])) {
    // Check if any field is empty
    if (empty($_POST["FirstName"]) || empty($_POST["LastName"]) || empty($_POST["PersonID"]) || empty($_POST["Address"]) || empty($_POST["City"])) {
        // Alert the user
        echo "<script>alert('Please fill out all fields');</script>";
    } else {
        // Retrieve form data
        $firstName = $_POST["FirstName"];
        $lastName = $_POST["LastName"];
        $personID = $_POST["PersonID"];
        $address = $_POST["Address"];
        $city = $_POST["City"];

        // Prepare SQL statement with a prepared statement
        $sql = "INSERT INTO testhuman (FirstName, LastName, PersonID, Address, City) VALUES (" .
            "'" . $_POST["FirstName"] . "', '" . $_POST["LastName"] . "', '" . $_POST["PersonID"] . "', '" . $_POST["Address"] . "', '" . $_POST["City"] . "')";

        $databaseObj->Query($sql);
    }
}
