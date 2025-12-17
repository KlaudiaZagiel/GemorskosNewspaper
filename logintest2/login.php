<?php

if(isset($_POST["btn1"]))
{
    $a1 = $_POST["eml"];
    $b2 = $_POST["pass1"];

    if($a1 == "" || $b2 == "")
    {
        header("Location: index.php?msg=enter the text in the field");
    }
    else
    {
        if(!filter_var($a1, FILTER_VALIDATE_EMAIL))
        {
            header("Location: index.php?msg=email is not correct");
        }
        else
        {
            if(strlen($b2) < 8 || !preg_match("/[A-Z]/",$b2))
            {
                header("Location: index.php?msg=password is weak");
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
