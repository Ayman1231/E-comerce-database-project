<?php
session_start();
include_once("../framework/sitefunc.php");
include_once("../framework/config.php");


if(isset($_SESSION['log']))
{
    // logged in
    include_once("header.php");
    ?>
     <div class="jumbotron">
                        <h3>Username : <?php echo $_SESSION['a_name']; ?></h3>
                        <p>E-mail : <?php echo $_SESSION['a_email']; ?></p>
                      
                    </div>
     <?php
    include_once("footer.php");
}
else
{
    include_once("login.php");
}

?>