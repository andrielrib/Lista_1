v<!DOCTYPE html>
<html>
<head><title>Número Perfeito</title></head>
<body>
<form method="post">
    Número: <input type="number" name="num">
    <input type="submit" value="Verificar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['num'];
    $soma = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $soma += $i;
        }
    }
    if ($soma == $num) {
        echo "$num é perfeito.";
    } else {
        echo "$num não é perfeito.";
    }
}
?>
</body>
</html>