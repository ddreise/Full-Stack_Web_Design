<?php
    // * LOGOUT
    session_start();
    session_destroy();

    echo "You have succesfully logged out. Click <a href='login.html'>here</a> to log in again."
?>