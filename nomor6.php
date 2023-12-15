<?php
function gabungArray($arr1, $arr2)
{
    $gabung = array_merge($arr1, $arr2);
    return $gabung;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputArray1 = isset($_POST["array1"]) ? $_POST["array1"] : '';
    $inputArray2 = isset($_POST["array2"]) ? $_POST["array2"] : '';

    $array1 = explode(',', $inputArray1);
    $array1 = array_map('intval', $array1);

    $array2 = explode(',', $inputArray2);
    $array2 = array_map('intval', $array2);

    $hasilGabung = gabungArray($array1, $array2);
} else {
    $inputArray1 = '';
    $inputArray2 = '';
    $array1 = [];
    $array2 = [];
    $hasilGabung = [];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nomor 6</title>
</head>

<body>
    <h2>Fungsi yang Menerima 2 Parameter berupa Array dan Menggabungkannya</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="array1">Input Data Array 1 (Pisahkan dengan Koma):</label>
        <input type="text" name="array1" id="array1" value="<?php echo implode(",", $array1); ?>">
        <br>
        <label for="array2">Input Data Array 2 (Pisahkan dengan Koma):</label>
        <input type="text" name="array2" id="array2" value="<?php echo implode(",", $array2); ?>">
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Array 1: [" . implode(", ", $array1) . "]</p>";
        echo "<p>Array 2: [" . implode(", ", $array2) . "]</p>";
        echo "<p>Hasil Gabung: [" . implode(", ", $hasilGabung) . "]</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>