<?php
$bad_word = $_GET['badword'];
$paragraph = $_GET['paragraph'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword_result</title>
</head>
<body>
    <!-- ORIGINAL RESULT -->
    <div class="container-fluid">
        <h4>Paragrafo originale</h4>
        <p><?php echo $paragraph ?></p>
        <p class="fst-italic">Il Paragrafo originale è lungo </p>
        <hr>
    <!-- CENSURED RESULT -->
    <h4>Paragrafo censurato</h4>
        <p><?php echo $paragraph ?></p>
        <p class="fst-italic">Il Paragrafo censurato è lungo </p>
    </div>
</body>
</html>