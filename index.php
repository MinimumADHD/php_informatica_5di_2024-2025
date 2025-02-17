<!DOCTYPE html>
<html lang="en" class="w-full h-full min-w-full min-h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Principale PHP</title>
    <link rel="stylesheet" href="./src/output.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body class="w-full h-full font-fira text-[13px] text-zinc-50">
    <header class="flex w-full h-[7%] bg-slate-600 p-3 gap-3 justify-center items-center align-middle">
        <h1 class="font-extrabold text-[15px]">PHP Cappelluti Simone</h1>
        <h1><a href="https://github.com/MinimumADHD">Profilo GitHub</a></h1>
    </header>
    <main class="w-full h-[93%] min-h-[93%] bg-slate-700 flex justify-center items-center align-middle">
        <div class="w-auto h-auto p-3 bg-slate-600 rounded-sm">
            <table class="border-2 p-2 rounded-sm text-center align-middle">
                <thead class="border-2 p-3 bg-slate-700">
                    <td class="border-2 p-2">Index Reale</td>
                    <td class="border-2 p-2">Cartella</td>
                </thead>
                <?php
                $directory = dirname(__FILE__);
                foreach (scandir($directory) as $key => $value) {
                    if ($value == "." || $value == "..") {
                        continue;
                    }

                    $file_path = $directory . DIRECTORY_SEPARATOR . $value;
                    if (is_dir($value) && file_exists($file_path . DIRECTORY_SEPARATOR . "index.php")) {
                        echo "<tr class='border-2 p-2'><td class='border-2 p-2'>{$key}</td><td class='border-2 p-2'><a href='{$value}'>{$value}</a></td></tr>";
                    };
                }
                ?>
            </table>
        </div>
    </main>
</body>

</html>