<?php
function reverseString($input)
{
    $reversedString = strrev($input);
    return $reversedString;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputData = $_POST["inputForm"];
    $outputData = reverseString($inputData);
} else {
    $inputData = "";
    $outputData = "";
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
    <h2>Fungsi yang Bertujuan untuk Mengembalikan Nilai Reverse String</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="inputForm">Input Data:</label>
        <input type="text" name="inputForm" id="inputForm" value="<?php echo htmlspecialchars($inputData); ?>">
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        echo "<p>Input: $inputData</p>";
        echo "<p>Output: $outputData</p>";
    }
    ?>

    <a href="index.php">Back</a>
</body>

</html>