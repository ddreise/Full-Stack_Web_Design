<?php 
    // * COOKIES
    // Variable for how many forms submitted
/*     $submitted = !empty($_POST);        // Form submit successful if POST array NOT empty
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
    echo "<p><b>Password received</b>: $password </p>"; */


    // * SESSIONS
    session_start();
    $username = $_POST['username'];     // Alternate is to use $_GET array
    $password = $_POST['password'];     // Alternate is to use $_GET array

    $userFile = 'users.JSON';           // Name of file holding user login information

    // Get user.json file contents and decode it
    $userArray = json_decode(file_get_contents(__DIR__ . "/../JSON/" . $userFile), true);

    if($username && $password){
        $_SESSION['username']=$username;        // Begin session

        //Check if username exists (loop through userArray)
        foreach ($userArray as $user) {
            if ($user['username'] == $username) {
                if ($user['password'] == $password) {
                    echo "<p>You have successfully logged in.</p>";
                    echo "<p>Please click <a href=\"member.php\">here</a> to be taken to our members only page</p>";
                }
                else {
                    echo "<p>Incorrect password</p>";
                    echo "<p>Click <a href=\"../login.html\">here</a> to try again.";
                }
            }
        }
        
    }

?>