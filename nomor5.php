<?php
function generateFibonacci($n)
{
    $fibonacci = [];

    if ($n >= 1) {
        $fibonacci[] = 0;
    }
    if ($n >= 2) {
        $fibonacci[] = 1;
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $n = isset($_POST["n"]) ? $_POST["n"] : 0;

    $n = max(0, intval($n));

    $outputFibonacci = generateFibonacci($n);
} else {
    $n = 0;
    $outputFibonacci = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 5</title>
</head>

<body>
    <h2>Fungsi untuk Menampilkan Bilangan Fibonacci</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="n">Jumlah Bilangan Fibonacci yang Akan Ditampilkan:</label>
        <input type="number" name="n" id="n" value="<?php echo $n; ?>">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>n = $n</p>";
        echo "<p>Bilangan Fibonacci = [" . implode(", ", $outputFibonacci) . "]</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>