<?php
session_start();
$difficulty = $_POST['difficulty'];
switch ($difficulty) {
    case 'easy':
        unset($_SESSION['answer']);
        unset($_SESSION['chances']);
        header("Location: http://localhost/website/guesing-game/easy.php");
        break;
    case 'medium':
        unset($_SESSION['answerM']);
        unset($_SESSION['chancesM']);
        header("Location: http://localhost/website/guesing-game/medium.php");
        break;
    case 'hard':
        unset($_SESSION['answerH']);
        unset($_SESSION['chancesH']);
        header("Location: http://localhost/website/guesing-game/hard.php");
        break;
    default:
        // no default
        break;

}
exit;
?>