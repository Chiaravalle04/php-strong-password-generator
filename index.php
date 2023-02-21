<?php 

    session_start();

    if (isset($_GET['number-value'])) {

        include __DIR__ . "../functions/function.php";

        $_SESSION['password'] = generatePassword($_GET['number-value']);

    }

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

                <h1>PHP Strong Password Generator</h1>

                <div class="form-container">

                    <form action="" method="get">

                        <input type="number" id="number" name="number-value" value="25"></input>

                        <input type="range" id="range" name="number-value" min="1" max="50" value="25">

                        <button id="btn-sub" type="submit">Genera</button>

                    </form>

                </div>

                <?php if (isset($_GET['number-value'])) { ?>

                <a href="view_password.php">View password</a>

                <?php } ?>

            </div>

        </main>

        <script src="scripts/script.js"></script>

    </body>
</html>