<?php 
    $long_text = $_GET["text"];
    $bad_word = $_GET["bad-word"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>il paragrafo inserito</h2>
    <?php
        echo "$long_text";
    ?>
    <h2>è lungo:</h2>
    <?php
        echo strlen("$long_text");
    ?>
    <span>caratteri</span>

    <h2 v-if=""> dal paragrafo abbiamo individuato la parola</h2>
    <?php
        $bad_word = strtolower("$bad_word");
        $long_text = str_replace("$bad_word" , "***", $long_text);
        echo "$long_text";
    ?>

</body>
</html>