<html>
    <head>
        <title>Guessing Game for 84ccb6e9</title>
    </head>
    <body>
        <h1>Welcome to my guessing Game</h1>
        <?php
            if(!isset($_GET['guess'])){
                echo ("Missing guess parameter");
            }else if (strlen($_GET['guess'])<1){
                echo ("Your guess is too short");
            }else if (!is_numeric($_GET['guess'])){
                echo ("Your guess is not a number");
            }else if ($_GET['guess'] > 56){
                echo ("Your guess is too high");
            }else if ($_GET['guess'] < 56){
                echo("Your guess is too low");
            }else{
                echo ("Congratulations - You are right");
            }
        ?>
    </body>
</html>