<?php
// PAROLA CENSURATA
$bad_word = $_GET['badword'];
// PARAGRAFO ORIGINALE
$paragraph = $_GET['paragraph'];
// PARAGRAFO ORIGINALE LENGTH
$paragraph_length = strlen($paragraph);
// PARAGRAFO CENSURATO
$paragraph_censured = str_replace($bad_word, '****',$paragraph );
// PARAGRAFO CENSURATO LENGTH
$paragraph_censured_length = strlen($paragraph_censured);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>badword_result</title>
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid text-center d-flex flex-column align-items-center">
        <!-- ORIGINAL RESULT -->
        <div class="card w-50 m-3 p-3">
            <h4 class="text-primary">Paragrafo originale</h4>
            <p><?php echo $paragraph ?></p>
            <p class="fst-italic">Il Paragrafo originale è lungo <?php echo $paragraph_length ?> caratteri.</p>
        </div>
        <!-- CENSURED RESULT -->
       <div class="card w-50 m-3 p-3">
            <h4 class="text-danger">Paragrafo censurato</h4>
            <p><?php echo $paragraph_censured ?></p>
            <p class="fst-italic">Il Paragrafo censurato è lungo <?php echo $paragraph_censured_length ?>caratteri.</p>
       </div>
    </div>
</body>
</html>