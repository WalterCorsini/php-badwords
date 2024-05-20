<?php
$long_text = $_GET["text"];
$bad_word = $_GET["bad-word"];
$count = 0;
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
            <h2>il paragrafo inserito</h2>
            <?php
            echo "$long_text";
            ?>
        </section>

        <section>
            <h2>è lungo:</h2>
            <div>
                <?php
                echo strlen("$long_text");
                ?>
                <span>caratteri</span>
            </div>
        </section>

        <section>
            <h2> dal paragrafo abbiamo nascosto la parola</h2>
            <?php
            // $bad_word = strtolower("$bad_word");
            //  str_replace per sostituire una parola inclusa in un testo
            //  str_ireplace non è key sensitive e quindi non c'è bisogno di trasformare tutto in minuscolo per cercare la corrispondenza
            $long_text = str_ireplace("$bad_word", "***", $long_text);
            echo "$long_text";
            ?>
        </section>
    </div>

</body>

</html>