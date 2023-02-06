<?php
$bad_word = $_GET['badword'];
$paragraph = $_GET['paragraph'];
$paragraph_censured = str_replace($bad_word, '****',$paragraph );
$paragraph_length = strlen($paragraph);
$paragraph_censured_length = strlen($paragraph_censured);
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
        <p class="fst-italic">Il Paragrafo originale è lungo <?php echo $paragraph_length ?> caratteri.</p>
        <hr>
    <!-- CENSURED RESULT -->
    <h4>Paragrafo censurato</h4>
        <p><?php echo $paragraph_censured ?></p>
        <p class="fst-italic">Il Paragrafo censurato è lungo <?php echo $paragraph_censured_length ?>caratteri.</p>
    </div>
</body>
</html>