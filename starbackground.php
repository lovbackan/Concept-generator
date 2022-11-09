<?php

//Feedback : This should not have inline coding! I should probably convert this into a javascript forloop

//This creates the randomgenerated star background for the site
for ($i = 0; $i < 256; $i++) :
    $star = $stars[$i % count($stars)]; ?>

    <div style="
                background-color: <?= $star['color']; ?>;
                height: <?= $star['size']; ?>px;
                left: <?= random_int(1, 99) ?>vw;
                position: absolute;
                top: <?= random_int(1, 99) ?>vh;
                width: <?= $star['size']; ?>px;
            "></div>
<?php endfor; ?>
