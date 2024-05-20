<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP-BADWORDS</title>
</head>

<body class="body">
    <form action="server.php" method="GET">
        <h3>Nascondiamo le parole proibite...</h3>
        <div class="textarea">
        <span>inserisci qui il tuo paragrafo</span>
        <textarea rows="5" cols="20" name="text" placeholder="Inserisci qui le tue informazioni"> </textarea>
        </div>

        <div class="input">
            <label for="bad-word"> inserisci la parola da nascondere</label>
            <input type="text" name=bad-word>
        </div>

        <button type="submit"> invia </button>
    </form>
</body>

</html>