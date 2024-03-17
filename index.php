<?php 

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

?>


<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-xxl p-5">
        <div class="d-flex flex-column text-center gap-5">
            <h1 class="text-danger">Il Censuratore</h1>
        
            <form action="results.php">
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Inserisci testo da censurare</label>
                    <textarea name="censored-text" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                </div>
                <div>
                    <div class="d-flex flex-column align-items-center mb-3">
                        <label for="">Inserisci la parola da censurare</label>
                        <input name="bad-word" type="text" placeholder="Inserisci parola">
                    </div>
                </div>
                <input type="submit">
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>