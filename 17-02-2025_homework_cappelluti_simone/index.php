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
        <h1>FORM + POST PER PHP</h1>
    </header>
    <main class="flex bg-slate-700 h-[93%] justify-center items-center font-fira">
        <form action="output.php" method="post" class="flex flex-col justify-center items-center w-150 h-150 bg-slate-600 p-5 rounded-md">
            <div id="personal_data" class="mb-4 w-full">
                <label for="fname" class="block text-sm font-medium text-gray-300 mb-1">Nome</label>
                <input type="text" name="fname" id="fname" class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

                <label for="lname" class="block text-sm font-medium text-gray-300 mt-3 mb-1">Cognome</label>
                <input type="text" name="lname" id="lname" class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

                <label for="bdate" class="block text-sm font-medium text-gray-300 mt-3 mb-1">Data di Nascita</label>
                <input type="date" name="bdate" id="bdate" class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>
            <div id="account_info" class="w-full">
                <label for="username" class="block text-sm font-medium text-gray-300 mb-1">Nome Utente</label>
                <input type="text" name="username" id="username" class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">

                <label for="password" class="block text-sm font-medium text-gray-300 mt-3 mb-1">Password</label>
                <input type="password" name="password" id="password" class="w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <input type="submit" value="Invia" class="m-5 w-full px-3 py-2 bg-slate-700 border border-gray-600 rounded-md text-white placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500">
        </form>
    </main>
</body>

</html>