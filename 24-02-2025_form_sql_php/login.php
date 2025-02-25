<!DOCTYPE html>
<html lang="en" class="min-w-full min-h-full w-full h-full">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../src/output.css">
</head>

<body class="w-full h-full min-w-full min-h-full font-clacon bg-gruvbox-aqua text-gruvbox-background">
    <header class="w-full h-[6%] flex justify-evenly align-middle items-center p-3 text-xl">
        <h1>Bho</h1>
        <h1>Cosa dovrei scrivere</h1>
        <h1>Deh</h1>
    </header>
    <main class="w-full h-[94%] flex justify-center items-center align-middle gap-4">
        <form action="./index.php" method="post" class="w-auto h-auto border-1 rounded-none p-3 flex flex-col gap-2">
            <div>
                <div class="flex align-middle items-start justify-start">
                    <label for="email">Email:</label>
                </div>
                <input type="email" name="email" id="email" class="bg-gruvbox-text m-2 p-2">
            </div>
            <div>
                <div class="flex align-middle items-start justify-start">
                    <label for="password">Password:</label>
                </div>
                <input type="password" name="password" id="password" class="bg-gruvbox-text m-2 p-2">
            </div>
            <div class="w-full flex justify-center align-middle items-center content-center">
                <input type="submit" value="Login" class="bg-gruvbox-text text-gruvbox-background p-2" name="submit">
            </div>
        </form>
        <div class="w-50 h-70 text-gruvbox-text">
            <h1 class="w-full h-20 flex justify-center items-center align-middle content-center gap-2 bg-gruvbox-red p-2">Honest<img src="../the_gif.gif" alt="bho" class="w-20 h-10">reaction:</h1>
            <img src="../the_gif.gif" alt="bho" class="w-50 h-50">
        </div>
    </main>
</body>

</html>