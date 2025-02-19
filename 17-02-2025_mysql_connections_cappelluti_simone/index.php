<!DOCTYPE html>
<html lang="en" class="w-full h-full min-h-full min-w-full bg-slate-700 font-fira text-[13px] text-neutral-50">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MYSQL + PHP</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body class="w-full h-full min-h-full min-w-full">
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <header class="w-full h-[6%] bg-slate-600 flex justify-center items-center align-middle p-2 gap-3">
            <h1 class="font-extrabold text-[15px]">Connessioni PHP-Database</h1>
            <h1><a href="../">Pagina Principale</a></h1>
        </header>
        <div class="w-full h-0.5 bg-neutral-50"></div>
        <main class="w-full h-full flex justify-center align-middle items-center">
            <table class="w-auto h-auto m-3">
                <?php
                $host_name = (string) "localhost";
                $user_name = (string) "root";
                $pass_word = (string) "";
                $data_base_name = (string) "utenze";

                $connection = mysqli_connect($host_name, $user_name, $pass_word, $data_base_name);
                // $errno_connection = mysqli_errno($connection);
                // echo"{$errno_connection}";
                if (mysqli_connect_errno() && mysqli_errno($connection) != 0)
                    return;
                $table_query = mysqli_query($connection, "SELECT * FROM utente;");

                foreach ($table_query as $i => $value) {
                    echo"<tr class='border-2 gap-2 p-2'>";
                    foreach ($value as $j => $row) {
                        echo "<td class='m-2 p-2 border-2 align-middle items-center'>{$row}</td>";
                    }
                    echo"</tr>";
                }
                ?>
            </table>
        </main>
    </body>

    </html>
</body>

</html>