<?php 

$bad_word = $_GET['bad-word'];
$censored_text = $_GET['censored-text'];
$text_length = strlen($censored_text);
$new_text = str_replace($bad_word, "****", $censored_text);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container-xxl p-5">

        <div class="d-flex flex-column text-center gap-5">
            <h1 class="text-danger">Ecco il tuo documento censurato</h1>
            <h5>Numero di caratteri presenti nel testo: <?php echo $text_length ?></h5>
            <div class="my_sheet d-flex flex-column">

                <?php echo $new_text ?>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>