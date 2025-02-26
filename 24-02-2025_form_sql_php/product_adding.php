<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>
<body class="min-w-full min-h-full w-full h-full bg-[url('../the_gif.gif')] flex justify-center items-center align-middle font-clacon">
    <form action="./product_adding.php" method="post" class="p-3 text-gruvbox-text flex flex-col justify-center items-center align-middle gap-2 border-2 border-gruvbox-aqua">
        <div class="flex flex-col justify-center content-center align-middle">
            <label for="branding">Marca:</label>
            <input type="text" name="branding" id="branding" class="bg-gruvbox-text text-gruvbox-aqua p-2">
        </div>
        <div class="flex flex-col justify-center content-center align-middle">
            <label for="model">Modello:</label>
            <input type="text" name="model" id="model" class="bg-gruvbox-text text-gruvbox-aqua p-2">
        </div>
        <div class="flex flex-col justify-center content-center align-middle">
            <label for="price">Prezzo:</label>
            <input type="text" name="branding" id="branding" class="bg-gruvbox-text text-gruvbox-aqua p-2">
        </div>
        <input type="submit" value="Aggiungi Prodotto" name="submit" class="bg-gruvbox-text text-gruvbox-aqua p-2">
    </form>
</body>
<?php
?>
</html>