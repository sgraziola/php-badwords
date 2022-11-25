<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome PHP</title>
</head> 
<body>
    <form action="filterPar.php" method="get">
        <label for="newParagraph">Inserisci il paragrafo da filtrare</label><br>
        <textarea name="newParagraph" id="newParagraph" cols="30" rows="10"></textarea>
        <br>
        <label for="badWord">Inserisci parola da oscurare</label><br>
        <input type="text" id="badWord" name="badWord">
        <br><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>