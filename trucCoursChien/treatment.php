<?php

$question = $_POST['question-piege'];

if($question != "feur"){
    header("Location: ./content/redirection/pasfeur.php");
} else {
    header("Location: ./content/redirection/feur.php");
}