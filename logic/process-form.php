<?php

require_once('./password_generator.php');

$request = $_REQUEST;

$charsInputValue = $request["chars"];

$charsAmountInputValues = $request["charsNumbers"];

$chars = charsAllowed($charsInputValue);
$password = passwordGenerator( $charsAmountInputValues, $chars);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link rel="stylesheet" href="../styles/process_form.css">
</head>

<body>
    <main>
        <div class="container">
            <div class="title">
                <h2>Resultado</h2>
            </div>
            <div class="contain">
                <div class="result-container">
                    <p style="text-align: center;" ><?= $password ?></p>
                </div>
                <div class="back-container">
                    <form  class="form-btn" action="process-form.php" method="POST" >
                        <?php foreach ($charsInputValue as $char) : ?>
                            <input type="hidden" name="chars[]" value="<?= htmlspecialchars($char) ?>" >
                        <?php endforeach; ?>
                        <input type="hidden" name="charsNumbers" value="<?= $charsAmountInputValues ?>"  >
                        <button type="submit" href="process-form.php" class="back-btn">Generar Nueva Contraseña</button>
                    </form>
                    <a href="../index.php" class="back-btn">Volver a inicio</a>
                </div>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>