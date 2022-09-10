<?php
    if($_POST["message"]) {
        mail("upperwestcleaners2020@gmail.com", "Form to message", $_POST["message"], "From: an@email.address");
    }
?>