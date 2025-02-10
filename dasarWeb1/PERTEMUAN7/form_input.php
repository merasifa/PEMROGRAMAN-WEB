<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input dengan Validasi Email</h1>
    <form action="html_aman.php" method="POST"> <!-- Arahkan ke file PHP untuk memproses data -->
        <label for="input">Masukkan Input:</label>
        <input type="text" id="input" name="input" required><br><br>

        <label for="email">Masukkan Email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
