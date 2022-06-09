<?php
    include "database.php";
    session_start();
    if(isset($_POST["question-text"]) && isset($_POST["correct"]))
    {
        $question = $_POST["question-text"];
        $answers = $_POST["answers"];
        $correct = $_POST['correct'];
        $q_id = $_SESSION["total"] + 1;

        $db->query("INSERT INTO questions(ID,text) VALUES('$q_id','$question')");

        $cnt = 1;
        $temp = 0;

        foreach($answers as $answer) :
            if($answer == $answers[$correct])
            {$temp = 1;}
            $db->query("INSERT INTO answers(text, is_true, q_id) VALUES('$answer', '$temp', '$q_id')");
            $cnt++;
            $temp = 0;
        endforeach;
        
        header("Location: admin.php");
    }
?>
