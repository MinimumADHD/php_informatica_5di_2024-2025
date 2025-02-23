<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
</head>

<body class="min-w-full min-h-full w-full h-full font-clacon text-sm text-gruvbox-text bg-gruvbox-background">
    <header class="w-full h-14 border-b flex justify-center align-middle items-center gap-12 p-3 text-xl overflow-x-auto">
        <h1 class="p-3 w-auto h-auto font-black">E-Commerce Cannizzaro Registrazione Utenti</h1>
    </header>
    <main class="w-full h-full flex justify-center align-middle items-center">
        <form action="register.php" method="post" class="w-auto h-auto p-4 bg-gruvbox-red text-lg rounded-sm shadow-2xl">
            <div id="personal_data">
                <label for="fname">Nome:</label>
                <input type="text" name="fname" id="fname" class="w-full">
                <br>
                <label for="lname">Cognome:</label>
                <input type="text" name="lname" id="lname" class="w-full">
                <br>
                <label for="mail">Email:</label>
                <input type="email" name="mail" id="mail" class="w-full">
                <p class="text-base text-gruvbox-red" id="email_warning">Pattern e-mail non corretto.</p>
            </div>
            <div id="login_info">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
                <p class="text-base text-gruvbox-red" id="password_warning">Password non abbastanza forte. CONSIGLIO: Da 8 a 14 caratteri, Almeno 1 numero, Almeno 1 carattere speciale.</p>
            </div>
            <br>
            <input type="submit" name="submit" value="Registrati" id="submit_button" class="p-2 w-auto h-auto bg-gruvbox-text text-gruvbox-red self-center justify-self-centers">
        </form>
        <div id="php_div">
            <table>
                <?php
                $host_name = (string) "localhost";
                $user_name = (string) "root";
                $pass_word = (string) "";
                $data_base_name = (string) "ecommerce_cannizzaro";

                if (isset($_POST["submit"]) && !empty($_POST)) {
                    $fname_post = $_POST["fname"];
                    $lname_post = $_POST["lname"];
                    $email_post = $_POST["mail"];
                    $password_post = $_POST["password"];

                    $connection = mysqli_connect($host_name, $user_name, $pass_word, $data_base_name);

                    if (mysqli_connect_errno() && mysqli_errno($connection) != 0)
                        return;
                    $table_query = mysqli_query($connection, "INSERT INTO users (fname, lname, email, pass_word) VALUES ('{$fname_post}', '{$lname_post}', '{$email_post}', '{$password_post}');");
                    /*$search_query = mysqli_query($connection, "SELECT * FROM users");
                    foreach ($search_query as $key => $row) {
                        echo "<tr>";
                        foreach ($row as $column_name => $column_value) {
                            echo "<td>{$column_value}</td>";
                        }
                        echo "</tr>";
                    }*/
                    if ($table_query) {
                        header('./index.php');
                        exit();
                    } else {
                        echo"Errore inserimento dati.";
                    }
                }
                ?>
            </table>
        </div>
    </main>
</body>
<script src="./register.js"></script>

</html>