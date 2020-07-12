<?php

$db = new PDO (
    'mysql:host=127.0.0.1;dbname=elevator',     // Data source name
    'ddreise6630',                                     // Username
    'Iloveschool24!'                                          // Password
);

//Return arrays with keys that are the name of the fields
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = 'SELECT * FROM elevatorNetwork WHERE nodeID = :nodeID';                     // Formatted query, used for dynamic input. Identified by ':'
            
$statement = $db->prepare($query);          // Object created from query that contains methods for executing (inserting) and fetching data
$statement->bindValue('nodeID', 1);         // Query all entries with nodeID = 1

$result = $statement->execute();    // Execute is a method for inserting the formatted array into the database
$rows = $statement->fetchAll();     // Returns a list of all rows as arrays
var_dump($result);                  // TRUE if successfully added to database

$rows = $db->query('SELECT t1.*, t2.CAN_currentFloor FROM elevatorNetwork t1 LEFT JOIN CAN_subNetwork t2 ON t1.nodeID = t2.CAN_nodeID;');
foreach ($rows as $row){
    var_dump($row);
    echo "<br />";
    echo "<br />";
}



// OLD CODE


// Test for adding static data
/* $result = $db->exec($query);
var_dump($result);
echo "<br />";
$error = $db->errorInfo()[2];
var_dump($error);
echo "<br />";

$rows = $db->query('SELECT * FROM elevatorNetwork ORDER BY nodeID');
foreach ($rows as $row) {
    var_dump($row);
    echo "<br />";
    echo "<br />"; */




?>






