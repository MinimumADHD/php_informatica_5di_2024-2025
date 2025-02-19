<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class="w-full h-full bg-amber-600">
    <table class="w-auto h-auto">
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

        foreach ($table_query as $row) {
            echo "<tr class='border-2 gap-2 p-2'>";
            foreach ($row as $column_name => $column_value) {
                echo "<td class='m-2 p-2 border-2 align-middle items-center'>{$column_value}</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>