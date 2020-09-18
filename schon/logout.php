<?php
ob_start();
session_start();
include_once("../framework/sitefunc.php");

if(isset($_SESSION['lo']))
{
    
    // logged in
    

    output_msg("s","Logged Out Successfuly");
    session_destroy();
    redirect(2,"index.php");
    //session_destroy();

}
else
{
    include_once("login.php");
}

?>