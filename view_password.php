<?php 

    include __DIR__ . "../functions/function.php";

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;700&display=swap" rel="stylesheet">

        <!-- Style -->
        <link rel="stylesheet" href="styles/style.css">

        <title>PHP Strong Password Generator</title>
    </head>
    <body>

        <main>

            <div class="container">

                <h2> Password: </h2>

                <p class="password-container"> <?php echo $_SESSION['password']; ?>  </p>

            </div>

        </main>

    </body>
</html>