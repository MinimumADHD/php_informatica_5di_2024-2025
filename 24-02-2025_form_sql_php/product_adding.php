<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body class="min-w-full min-h-full w-full h-full bg-gruvbox-aqua flex justify-center items-center align-middle font-clacon">
    <form action="./product_adding.php" method="post" class="p-3 text-gruvbox-text flex flex-col justify-center items-center align-middle gap-2 border-2 border-gruvbox-text">
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
            <input type="number" required min="1.00" max="999.99" step=".01" name="price" id="price" class="bg-gruvbox-text text-gruvbox-aqua p-2">
        </div>
        <input type="submit" value="Aggiungi Prodotto" name="submit" class="bg-gruvbox-text text-gruvbox-aqua p-2 animate-pulse">
    </form>
</body>
<?php
if (!isset($_POST["submit"])) {
    return;
}

$host_name = (string) "localhost";
$user_name = (string) "root";
$pass_word = (string) "";
$data_base_name = (string) "ecommerce_cannizzaro";

$connection = mysqli_connect($host_name, $user_name, $pass_word, $data_base_name);

if (mysqli_connect_errno()) {
    return;
}

$query = mysqli_query($connection, "INSERT INTO products (branding, model, price) VALUES ('{$_POST['branding']}', '{$_POST['model']}', {$_POST['price']})");
?>

</html>