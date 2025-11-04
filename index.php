<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guessing Game</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("nav.php");?>

    <div class="container p-10 border-2 border-gray-400 rounded-lg m-3 w-full">
        <div class="text-lg font-bold">
            Welcome to the Number Guessing Game!
        </div>
        <hr>
        <div class="py-3">
            
            <div>
                <form action="difficulty.php" method="post">
                <ul>
                    <li>
                        <input type="radio" name="difficulty" id="easy" value="easy">
                        Easy (10 chances)
                        <p class="text mb-3">I'm thinking of a number between 1 and 100.</p>
                    </li>
                    <li>
                        <input type="radio" name="difficulty" id="medium" value="medium">
                        Medium (5 chances)
                        <p class="text mb-3">I'm thinking of a number between 1 and 50.</p>
                    </li>
                    <li>
                        <input type="radio" name="difficulty" id="hard" value="hard">
                        Hard (3 chances)
                        <p class="text mb-3">I'm thinking of a number between 1 and 10.</p>
                    </li>
                </ul>
                <input type="submit" value="Select" class="border px-2 py-1 rounded bg-blue-600 text-white border-2 border-blue-500">
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>