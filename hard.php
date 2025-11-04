<?php
    session_start();
    if(!isset($_SESSION['answerH'])){
        $_SESSION['answerH'] = rand(1,10);
    }
    if(!isset($_SESSION['chancesH'])){
        $_SESSION['chancesH'] = 3;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $guessTried = $_POST["guessH"];

        if($guessTried != $_SESSION['answerH']){
             $chances = $_SESSION['chancesH'] - $_POST["takenChances"];
             $_SESSION['chancesH'] = $chances;
        }
    }

    $answer = $_SESSION['answerH'];
    $chances = $_SESSION['chancesH'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meduim</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("nav.php");?>
    <div class="container p-10 border-2 border-gray-400 rounded-lg m-3 w-full">
        <div class="py-3">
            <div class="mb-3">
                <p class="text-lg font-bold">Great! You have selected the Meduim difficulty level.</p>
                <p>Let's start the game!</p>
                <?php

                    echo "<p>you have ";
                    echo "<span class='text-green-500'>" . $chances . "</span>"; 
                    echo " Chances</p>";
                ?>
            </div>
            <hr>
            <div class="py-3">
                <form action="hard.php" method="post">
                    <label for="guess">Enter your choices:</label>
                    <input type="number" name="guessH" id="guessH" class="border-2 rounded border-black">
                    <input type="hidden" name="takenChances" value="1" class="border-2 rounded border-black">
                    <div>
                        <button type="submit" class="border-2 px-2 py-1 rounded bg-blue-500 text-white border-blue-800">Send</button>
                    </div>
                </form>
                <?php
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    if($guessTried > $answer){
                        echo "<br> Incorrect! The number is less than " . $guessTried;
                    }
                    elseif($guessTried < $answer){
                        echo "<br> Incorrect! The number is greater than " . $guessTried;
                    }
                    else{
                        echo "<br> Congratulations! You guessed the correct number " . $guessTried;
                        switch ($_SESSION['chancesH']){
                            case '2':
                                echo "<br> Your points is <span class='text-yellow-500'>100</span>";
                                break;
                            case '1':
                                echo "<br> Your points is <span class='text-yellow-500'>90</span>";
                                break;
                            case '0':
                                echo "<br> Your points is <span class='text-yellow-500'>50</span>";
                                break;
                            default:
                                break;
                            
                        }
                        echo "<br><a href='index.php' class='text-blue-500'>Go Back to Home</a>";
                    }
                    if($_SESSION['chancesH'] == 0){
                        echo "<br> You Lose :(";
                    }
                }
                    
                ?>
                <div class="flex justify-end">
                    <form action="reset_game.php" method="get" class="mt-10">
                        <input type="hidden" name="reset" id="reset" value="true">
                        <button type="submit" class="border-2 px-2 py-1 rounded bg-gray-500 text-white border-gray-800">Try again</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>