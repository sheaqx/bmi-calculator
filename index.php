<?php
require_once 'bmi.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css"> -->
    <link rel="stylesheet" href="style.css">
    <title>BMI</title>
</head>

<body>
    <div class="container">
        <h2 style="text-align:center">Bmi Calculator</h2>
        <form method="post">
            <p class="inputs">
                <label>Height (CM): </label>
                <input type="number" name="height" required>
            </p>
            <p class="inputs">
                <label>Weight (KG): </label>
                <input type="number" name="weight" required>
            </p>

            <button class="button">Calculate</button>
            <div style="margin-top: 20px;">Your BMI is: <p id="results"><?php echo $results ?></p>
            </div>
            <p id="message"><?php echo $message ?></p>
        </form>
    </div>
</body>

</html>