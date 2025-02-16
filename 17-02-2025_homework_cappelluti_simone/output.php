<!DOCTYPE html>
<html lang="en" class="h-full w-full min-h-full min-w-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESERCIZI PHP SIMONE CAPPELLUTI</title>
    <link rel="stylesheet" href="../src/output.css">
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
</head>

<body class="w-full h-full text-zinc-50">
    <header class="h-[7%] flex font-fira font-extralight text-base justify-center items-center gap-5 p-1 bg-slate-600">
        <h1 class="text-lg">PHP Simone Cappelluti</h1>
        <h1>OUTPUT FORM + POST PER PHP</h1>
    </header>
    <main class="flex bg-slate-700 h-[93%] justify-center items-center font-fira">
        <div class="bg-slate-600 w-100 h-100 rounded-md m-4">
            <div class="flex bg-slate-800 w-full h-[15%] align-middle items-center justify-center">
                <h1>OUTPUT INFORMAZIONI</h1>
            </div>
            <div class="flex h-[85%] justify-center align-middle items-center">
                <table class="h-full w-full m-3">
                    <?php
                    // so che ora si starà chiedendo dove sono i miei commenti. io non commento quasi mai il mio codice, ammeno che non è roba veramente complessa come il codice di un mio gioco
                    foreach ($_POST as $key => $value) {
                        echo "<tr><td>{$key}</td><td>{$value}</td></tr>";
                    }
                    ?>
                </table>
            </div>

        </div>
    </main>
</body>

</html>