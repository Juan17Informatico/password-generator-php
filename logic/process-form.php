<?php 

require_once('./password_generator.php');

$request = $_REQUEST;

$chars = charsAllowed($request["chars"]);
print_r(passwordGenerator($request["charsNumbers"], $chars));

// $allowedCharsArray = array_merge($uppercase, $numbers, $lowercase, ['@', '#', '$']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    
</body>
</html>
