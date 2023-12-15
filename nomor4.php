<?php
function tampilkanNilaiGanjil($arr)
{
    $nilaiGanjil = array_filter($arr, function ($nilai) {
        return $nilai % 2 != 0;
    });

    return $nilaiGanjil;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputArray = isset($_POST["inputArray"]) ? $_POST["inputArray"] : '';

    $inputArray = explode(',', $inputArray);
    $inputArray = array_map('intval', $inputArray);

    $outputArray = tampilkanNilaiGanjil($inputArray);
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
    <title>Nomor 4</title>
</head>

<body>
    <h2>Fungsi yang Bertujuan untuk Menampilkan Nilai Ganjil dalam Sebuah Array</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputArray">Input Array (Pisahkan dengan Koma):</label>
        <input type="text" name="inputArray" id="inputArray" value="<?php echo implode(",", $inputArray); ?>">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Array: [" . implode(", ", $inputArray) . "]</p>";
        echo "<p>Nilai Ganjil: [" . implode(", ", $outputArray) . "]</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>