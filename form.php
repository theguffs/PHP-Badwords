<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Inserisci un paragrafo e una parola da censurare</h1>
    <form action="results.php" method="POST">
        <label for="paragrafo">Paragrafo:</label>
        <textarea id="paragrafo" name="paragrafo" required></textarea>
        <label for="parola">Parola da censurare:</label><br>
        <input type="text" id="parola" name="parola" required><br><br>
        <input type="submit" value="Invia">
    </form>
</body>
</html>