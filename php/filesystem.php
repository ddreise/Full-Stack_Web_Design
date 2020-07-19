<?php
    // * For using JSON files to save CSV data


    $myarray = ['oranges', 'apples', 'bananas', 'pears', 'avocados', 'mangoes'];
    $file = 'file.JSON';
    $newfile = 'newfile.JSON';

    // Create directory for CSV data (JSON file)    
    // mkdir(__DIR__ . "/../JSON");

    // Open newly created directory
    // TODO: Need to add error checking (if file exists)

    $fp = fopen(__DIR__ . "/../JSON/" . $file, 'w');

    // Put array into file
    file_put_contents(__DIR__ . "/../JSON/" . $file, json_encode($myarray, true));

    // Close file
    fclose($fp);



?>