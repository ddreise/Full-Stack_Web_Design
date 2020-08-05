<?php
    // member.php
    session_start();    // * DON'T FORGET THIS
    
    if (isset($_SESSION['username'])) {
        echo "Welcome, " . $_SESSION['username'] . "!<br />";

        // Add 'members only' content here
        echo "<p>Members only content - for your eyes only</p>";

        echo "Click to <a href='logout.php'>Logout</a>";
    }
    else {
        echo "<p>You must be logged in to acces this site.</p>";
    }