<?php

// this was created by Muhammad Umar; I'm keeping it here just incase
// I created a database so I'm changing things a little

if(isset($_POST["btn1"]))
{
    $a1 = $_POST["eml"];
    $b2 = $_POST["pass1"];

    if($a1 == "" || $b2 == "")
    {
        header("Location: index.php?msg=Enter all required information.");
    }
    else
    {
        if(!filter_var($a1, FILTER_VALIDATE_EMAIL))
        {
            header("Location: index.php?msg=Email is not valid.");
        }
        else
        {
            if(strlen($b2) < 8 || !preg_match("/[A-Z]/",$b2))
            {
                header("Location: index.php?msg=Your password is too weak.");
            }
            else
            {
                // in case of success → show message then redirect
                echo "Logged in thank you";

                header("refresh:2; url=homepage.html");
            }
        }
    }
}

?>