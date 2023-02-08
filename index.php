<?php
$pass_length = $_GET['password'];
function generatePassword($pass_length)
{
    $pass = '';
    $parts = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
    for ($i = 0; strlen($pass) <= $pass_length - 1; $i++) {
        $pass .= $parts[array_rand($parts)];
    }
    return $pass;
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
        <h1 class="text-center mb-4">Password Generator</h1>
        <form action="" method="GET" class="text-center">
            <input type="number" name="password">
            <button>GENERA</button>
        </form>
        <h3 class="text-center mt-5">La tua passowrd è:<?= generatePassword($pass_length) ?></h3>
    </div>
</body>

</html>