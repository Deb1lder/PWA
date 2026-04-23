

<!DOCTYPE html>
<html >
<head>
</head>
<body>
    <p>Probajte pogoditi zamišljeni broj od 1 do 9</p>
    <form method="post">
        <label for="input">Unesite broj:</label>
        <input type="number" name="input" min="1" max="9" required><br><br>
        <button type="submit">Probaj pogoditi</button><br><br>
    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $unos = intval($_POST['input']);
    $randomNumber = rand(1, 9);
    
    if ($unos == $randomNumber) {
        echo "<div style='color: green;'>Pogodili ste broj! Zamišljeni broj je bio $randomNumber.</div>";
    } else {
        echo "<div style='color: red;'>Niste pogodili. Zamišljeni broj je bio $randomNumber, a vi ste unijeli $unos.</div>";
    }
}
?>