<!DOCTYPE html>
<html>
<head><title>Par ou Ímpar</title></head>
<body>
<form method="post">
    Número: <input type="number" name="numero">
    <input type="submit" value="Verificar">
</form>

<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];
    if ($num% 2 == 0) {
        echo "O número é par.";
    } else {
        echo "O número é ímpar.";
    }
}
?>
</body>
</html>