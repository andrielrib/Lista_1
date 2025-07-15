<!DOCTYPE html>
<html>
<head><title>Tabuada</title></head>
<body>
<form method="post">
    Número: <input type="number" name="numero">
    <input type="submit" value="Calcular">
</form>

<?php
if (isset($_POST['numero'])) {
    $num = $_POST['numero'];
    for ($i = 1; $i <= 10; $i++) {
        echo "$num x $i = " . ($num * $i) . "<br>";
    }
}
?>
</body>
</html>