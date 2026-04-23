<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["a"] ?? 0;
    $b = $_POST["b"] ?? 0;
    $c = (3*$a - $b) / 2;
    echo "a = $a<br>";
    echo "b = $b<br>";
    echo "c = $c<br>";
}
?>

<form method="POST">
    <label>Unesite vrijednost a:</label>
    <input type="number" name="a" required><br><br>
    
    <label>Unesite vrijednost b:</label>
    <input type="number" name="b" required><br><br>
    
    <button type="submit">Posalji</button>
</form>