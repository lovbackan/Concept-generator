<?php require './requirements.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Concept Generator</title>
</head>

<body>
    <main>
        <h1>Sci-fi Concept Generator</h1>

        <h2 class="generatedString">
            <?php
            echo $generatedConceptString;
            ?>
        </h2>

        <form method="post">

            <input class='button' type="submit" name="randomizer[1]" value='Random Concept' />

            <input class='button' type="submit" name="randomizer[1]" value='Random Time' />

            <input class='button' type="submit" name="randomizer[1]" value='Random Name' />

            <input class='button' type="submit" name="randomizer[1]" value='Random String' />


        </form>

        <h3>
            History:
        </h3>

        <ol class="historyList"></ol>

    </main>
    <script src="script.js"></script>
</body>

</html>
