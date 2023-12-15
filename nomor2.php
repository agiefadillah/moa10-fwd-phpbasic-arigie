<?php
function hitungLuasSegitiga($alas, $tinggi)
{
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alas = isset($_POST["alas"]) ? $_POST["alas"] : 0;
    $tinggi = isset($_POST["tinggi"]) ? $_POST["tinggi"] : 0;

    $luasSegitiga = hitungLuasSegitiga($alas, $tinggi);
} else {
    $luasSegitiga = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 1</title>
</head>

<body>
    <h2>Fungsi yang Bertujuan untuk Menghitung Luas Segitiga Siku-Siku</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="alas">Alas:</label>
        <input type="number" name="alas" id="alas" value="<?php echo isset($_POST["alas"]) ? $_POST["alas"] : 0; ?>">

        <label for="tinggi">Tinggi:</label>
        <input type="number" name="tinggi" id="tinggi" value="<?php echo isset($_POST["tinggi"]) ? $_POST["tinggi"] : 0; ?>">

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Luas Segitiga Siku-Siku: $luasSegitiga</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>