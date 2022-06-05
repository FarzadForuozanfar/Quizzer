<?php
    $db = new mysqli("localhost","root","","quizzer");
    if($db->connect_error)
    {
        echo $db->connect_error;
    }
?>