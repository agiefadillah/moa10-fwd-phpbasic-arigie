<?php
function cariNilaiTerbesar($arr)
{
    $nilaiTerbesar = max($arr);
    return $nilaiTerbesar;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputArray = isset($_POST["inputArray"]) ? $_POST["inputArray"] : [];
    $inputArray = explode(',', $inputArray);
    $inputArray = array_map('intval', $inputArray);

    $outputArray = cariNilaiTerbesar($inputArray);
} else {
    $inputArray = [];
    $outputArray = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 3</title>
</head>

<body>
    <h2>Fungsi yang Bertujuan untuk Mencari Nilai Terbesar dalam Sebuah Array</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputArray">Input Data Array (Pisahkan dengan Koma):</label>
        <input type="text" name="inputArray" id="inputArray" value="<?php echo implode(",", $inputArray); ?>">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Array: [" . implode(", ", $inputArray) . "]</p>";
        echo "<p>Nilai Terbesar: " . ($outputArray !== null ? $outputArray : "Tidak Ada Nilai") . "</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>