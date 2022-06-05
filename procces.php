<?php
    include "database.php";
    session_start();
    $user_choice_id = $_POST["answer"];
    $q_id = $_POST["question_id"];
    $correct_awnser_id = $db->query("SELECT * FROM answers WHERE q_id = $q_id AND is_true = 1")->fetch_assoc()["ID"];
    $questions = $db->query("SELECT * FROM questions");
    $total = $questions->num_rows;

    if($user_choice_id == $correct_awnser_id)
    {
        $_SESSION["scores"]++;
    }
    $q_id++;
    if(($q_id-1) == $total)
    {
        header("Location:final.php");
    }
    
    else
    {
        header("Location: qustion.php?page=$q_id");
    }
    
    
    
    
?>