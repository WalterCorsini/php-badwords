<?php
$long_text = $_GET["text"];
$bad_word = $_GET["bad-word"];
$replace = "***";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-BADWORDS</title>
</head>

<body>
    <div class="container">
        <section>
            <h2>il paragrafo inserito è: </h2>
            <?php
                echo "$long_text";
            ?>
        </section>

        <section>
            <h2>la sua lunghezza è di:</h2>
            <div>
                <?php
                    echo strlen("$long_text");
                ?>
                <span>caratteri</span>
            </div>
        </section>

        <section>
            <?php
                $bad_word = strtolower("$bad_word");
                $long_text = strtolower("$long_text");
                $long_text = preg_replace("/\b{$bad_word}\b/","$replace","$long_text");
            ?>
            <h2> il paragrafo con la censura è:</h2>

            <?php 
                echo "$long_text";
            ?>

        </section>
    </div>

</body>

</html>