<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Genarator</title>
</head>

<body>
    <main>
        <div class="container">
            <div class="title"></div>
            <div class="contain">
                <form action="./logic/process-form.php" method="post">
                    <input type="number" placeholder="Cantidad de Caracteres" required value="12" name="charsNumbers" id="charsNumbers">
                    <div>
                        <p>¿Qué caracteres permitirá?</p>
                        <div>
                            <label>
                                <input type="checkbox" name="chars[]" value="uppercase"> A - Z
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="chars[]" value="lowercase"> a - z
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="chars[]" value="numbers"> 1 - 9
                            </label>
                        </div>
                        <div>
                            <label>
                                <input type="checkbox" name="chars[]" value="special"> Caracteres Extraños
                            </label>
                        </div>
                    </div>
                    <div class="submit-container" >
                        <input type="submit" class="submit-btn">
                    </div>
                </form>
            </div>
        </div>
    </main>
    <footer></footer>
</body>

</html>