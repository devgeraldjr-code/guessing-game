<?php
    // 1. Start the session (always required before touching session data)
    session_start();
    
    // 2. Clear all specific game variables
    unset($_SESSION['answer']);
    unset($_SESSION['chances']);
    unset($_SESSION['answerM']);
    unset($_SESSION['chancesM']);
    unset($_SESSION['answerH']);
    unset($_SESSION['chancesH']);
    
    // OR: Destroy the entire session if this page has no other session data
    // session_destroy(); 
    
    // 3. Redirect the user back to the main game page (easy.php)
    $url_string = $_SERVER['HTTP_REFERER'];
    $path = parse_url($url_string, PHP_URL_PATH);
    $filename = basename($path);

    switch($filename){
        case 'easy.php':
            header('Location: easy.php');
            break;
        case 'medium.php':
            header('Location: medium.php');
            break;
        case 'hard.php':
            header('Location: hard.php');
            break;
    }
    exit;
?>