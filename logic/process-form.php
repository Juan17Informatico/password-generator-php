<?php

require_once('./password_generator.php');

$request = $_REQUEST;

$chars = charsAllowed($request["chars"]);
$password = passwordGenerator($request["charsNumbers"], $chars);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="title">
                <h2>Resultado</h2>
            </div>
            <div class="contain">
                <p><?= $password ?></p>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>