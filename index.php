<?php
require __DIR__ . '/functions.php';

//Recuperiamo la lunghezza data dall'utente
if (isset($_GET['length'])) {
    $result = generate_password($_GET['length']);

    if ($result === true) header('Location: success.php');
}

?>

<!DOCTYPE html>
<html lang="en" lang="en" data-bs-theme="dark">

<head>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Generator</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center">
                <h1 class="text-white-50">Strong Password Generator</h1>
                <h2 class="text-white">Genera una password sicura</h2>
            </div>
            <?php if (isset($result)) : ?>
                <div class="col-7">
                    <div class="alert alert-danger">
                        <strong><?= $result ?></strong>
                    </div>
                </div>
            <?php endif ?>
            <div class="col-7">
                <form class="p-3 border border-1 rounded-2 bg-light" action="index.php" method="GET">

                    <div class="row mb-3">
                        <label for="length" class="col-sm-7 col-form-label">Lunghezza password:</label>
                        <div class="col-sm-3">
                            <input type="number" name="length" id="length" class="form-control" value="5" step="1">
                        </div>
                    </div>
                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary me-3">INVIA</button>
                        <button type="reset" class="btn btn-secondary me-3">ANNULLA</button>

                    </div>
                </form>
            </div>
        </div>



    </div>
</body>

</html>