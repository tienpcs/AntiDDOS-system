<?php
    try{
        if (!file_exists('anti_ddos/start.php'))
            throw new Exception ('anti_ddos/start.php does not exist');
        else
            require_once('anti_ddos/start.php');
    }
    //CATCH the exception if something goes wrong.
    catch (Exception $ex) {
        // et's print a message saying there is an error
        echo '<div style="padding:10px;color:white;position:fixed;top:0;left:0;width:100%;background:black;text-align:center;">The <a href="https://github.com/tienpcs/antiddos-system" target="_blank">"AntiDDOS System"</a> failed to load properly on this Web Site, please de-comment the \'catch Exception\' to see what happening!</div>';
        //Print out the exception message.
        //echo $ex->getMessage();
    }
    // cp -r AntiDDOS-system/ /var/www/html/
?>
---- THE HTML PAGE CONTENT ----
