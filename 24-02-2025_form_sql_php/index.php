<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class="min-w-full min-h-full w-full h-full font-clacon text-sm text-gruvbox-text bg-gruvbox-background">
    <header class="w-full h-[6%] border-b flex justify-evenly align-middle items-center gap-12 p-3 text-lg">
        <h1 class="p-2 w-auto h-auto font-black">E-Commerce Cannizzaro</h1>
        <h1 class="p-2 w-auto-h-auto"><a href="../">Pagina Principale</a></h1>
        <h1 class="p-2 w-auto-h-auto">Nuovo utente? <a href="./register.php" class="text-gruvbox-aqua">Crea un'account!</a></h1>
    </header>
    <main class="w-full h-[94%] flex flex-col justify-center align-middle items-center gap-3">
        <div id="desc" class="text-2xl flex flex-col justify-center items-center align-middle">
            <h1 class="text-3xl font-black text-gruvbox-yellow">Chi siamo?</h1>
            <p>Noi siamo l'ecommerce meno profittevole e competente del mondo, comparate il nostro tech support con Ubisoft😎</p>
        </div>
        <table id="people_list" class="text-2xl bg-gruvbox-blue border-2">
            <thead class="p-3 bg-gruvbox-aqua">
                <td class="p-3">Marca</td>
                <td class="p-3">Model</td>
                <td class="p-3">Prezzo</td>
            </thead>
            <tbody>
                <?php
                $host_name = "localhost";
                $user_name = "root";
                $pass_word = "";
                $db_name = "ecommerce_cannizzaro";

                $sql_connection = mysqli_connect($host_name, $user_name, $pass_word, $db_name);

                if (mysqli_connect_errno() && mysqli_errno($connection) != 0)
                    return;

                $query = mysqli_query($sql_connection, "SELECT branding, model, price FROM products;");

                foreach ($query as $key => $row) {
                    echo "<tr class='rounded-tl-sm rounded-br-sm'>";
                    foreach ($row as $column_name => $column_value) {
                        if ($column_name != "product_id") {
                            echo "<td class='border-2 p-2 content-center'>{$column_value}</td>";
                        }
                    }
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <p class="text-4xl border-4 p-4 rounded-lg flex justify-center align-middle items-center content-center">
            Prodotti venduti fino ad ORA: 
            <?php
            $host_name = "localhost";
            $user_name = "root";
            $pass_word = "";
            $db_name = "ecommerce_cannizzaro";

            $sql_connection = mysqli_connect($host_name, $user_name, $pass_word, $db_name);

            if (mysqli_connect_errno() && mysqli_errno($connection) != 0)
                return;

            $query = mysqli_query($sql_connection, "SELECT COUNT(purchase_date) FROM purchases;");

            foreach ($query as $key => $row) {
                foreach($row as $cn => $cv) {
                    echo"{$cv}";
                }
            }
            ?>
        </p>
    </main>
</body>

</html>