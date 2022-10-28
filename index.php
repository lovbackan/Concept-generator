<?php
require './variables.php';
require './functions.php';


        if(isset($_POST['randomConcept'])) {
            randomConceptGenerator($technologies, $parts);
            // print_r($history);
        }
        if(isset($_POST['randomTime'])) {
            timeGenerator();
        }

        if(isset($_POST['randomString'])) {
            randomstring(10);
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concept Generator</title>
</head>
<body>
    <h1>Concept Generator</h1>
<?php for ($i = 0; $i < 256; $i++) : ?>
        <?php $star = $stars[$i % count($stars)]; ?>
        <div class = 'sky' style="
                background-color: <?= $star['color']; ?>;
                height: <?= $star['size']; ?>px;
                left: <?= random_int(1, 99) ?>vw;
                position: absolute;
                top: <?= random_int(1, 99) ?>vh;
                width: <?= $star['size']; ?>px;
            "></div>
    <?php endfor; ?>

<div class = 'container'>

    
    <form method="post">

        <input class = 'button' type="submit" name="randomConcept"
                value="Random concept"/>
          
        <input class = 'button' type="submit" name="randomTime"
                value="Random Time"/>

        <input class = 'button' type="submit" name="randomString"
                value="Random String"/>

    </form>

</div>

</body>
</html>