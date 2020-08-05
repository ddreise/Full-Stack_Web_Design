<?php
    // member.php
    
    function update_Network(int $floorNum): int {
        $db = new PDO (
            'mysql:host=127.0.0.1;dbname=quizElevator',            // Data source name
            'ddreise6630',                                     // Username
            'Iloveschool24!'                                   // Password
        );

        $query = "UPDATE carNode SET floorNumber = :floor WHERE nodeID = 1";
        $statement = $db->prepare($query);
        $statement->bindvalue('floor', $floorNum);
        $statement->execute();

        return $floorNum;
    }

    function displayDBContents() {
        $db = new PDO (
            'mysql:host=127.0.0.1;dbname=quizElevator',            // Data source name
            'ddreise6630',                                     // Username
            'Iloveschool24!'                                   // Password
        );

        $rows = $db->query("SELECT t1.*, t2.floorNumber FROM elevatorNodes t1 LEFT JOIN carNode t2 ON t1.nodeID = t2.nodeID");
        
        echo '<table>';
        echo '<tr>';
        echo '<th>Node ID</th>';
        echo '<th>Info</th>';
        echo '<th>Status</th>';
        echo '<th>Floor</th>';
        echo '</tr>';
        
        foreach ($rows as $row) {
            $row1 = $row[0];
            $row2 = $row[1];
            $row3 = $row[2];
            $row4 = $row[3];
            
            echo '<tr>';
            echo '<td>'.$row1.'</td>';
            echo '<td>'.$row2.'</td>';
            echo '<td>'.$row3.'</td>';
            echo '<td>'.$row4.'</td>';
            echo '</tr>';
        }

        echo '</table>';
    }



?>

<html>
    <h1>WELCOME TO THE MEMBERS ONLY PAGE</h1>

    <?php
        if(isset($_POST['floorNum'])) {
            $currentFloor = update_Network($_POST['floorNum']);
            echo "The current floor is " . $currentFloor . "";
        }
    ?>

    <form action="member.php" method="POST">
        <p>Enter a floor number to send the elevator to: <input type="number" name="floorNum"></p>
        <input type="submit" value="Go"/>
    </form>

    <h2>Database Contents</h2>
    <?php
        displayDBContents();
    ?>

</html>

