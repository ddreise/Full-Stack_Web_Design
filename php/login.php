<?php 
    // Variable for how many forms submitted
    $submitted = !empty($_POST);        // Form submit successful if POST array NOT empty
    if ($submitted == 1){
        $username = $_POST['username'];     // Alternate is to use $_GET array
        $password = $_POST['password'];     // Alternate is to use $_GET array
        setcookie('username', $username);
        setcookie('password', $password);
    }
    else {                                  // If no username or password submitted
        $username = $_COOKIE['username'];   // COOKIES are information stored on the USER side (browser). SESSIONS are better to use than COOKIES
        $password = $_COOKIE['password'];
    }
 

    echo "<p>Form submmted successfuly (1 for true): $submitted </p>";
    echo "<p><b>Username received</b>: $username </p>";
    echo "<p><b>Password received</b>: $password </p>";

    session_start();
    $username = $_POST['username'];     // Alternate is to use $_GET array
    $password = $_POST['password'];     // Alternate is to use $_GET array

    if($username && $password){
        $_SESSION['username']=$username;
        echo "<p>Congratulations, you are now logged into the site.</p>";
        echo "<p>Please click <a href=\"member.php\">here</a> to be taken to our m embers only page</p>";
        
    }

?>