<?php

$data = $_GET;

$paragrafo = isset($_GET['paragrafo']) ? $_GET['paragrafo'] : '';

$parola_da_censurare = $_GET['parola_da_censurare'] ?? '';

$paragrafo_censurato = str_replace($parola_da_censurare, '***', $paragrafo);

var_dump($data);
var_dump($parola_da_censurare)


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testo Censurato</title>
</head>

<body>
    <?php
    if (strlen($paragrafo) > 0) {
    ?>
        <div>
            <p>
                <?php
                echo $_GET['paragrafo']
                ?>
            </p>

            <p>
                Il paragrafo è lungo: <strong> <?php echo strlen($paragrafo) ?></strong>
            </p>
        </div>
    <?php
    } else {
        echo 'Nessun paragrafo da mostrare';
    }

    if (strlen($parola_da_censurare) > 0) {
    ?>
        <div>
            <p>
                <?php echo $paragrafo_censurato; ?>
            </p>
            <p>
                <strong> <?php echo 'Il paragrafo censurato è lungo: ' . strlen($paragrafo_censurato); ?></strong>.
            </p>
        </div>
    <?php
    } else {
        echo 'nessuna parola da censurare';
    }
    ?>
</body>

</html>

