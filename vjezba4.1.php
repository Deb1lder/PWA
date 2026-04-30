<?php
$cars = array("Audi", "BMW", "Renault", "Citroen");
$selected = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['car'])) {
    $selected = $_POST['car'];
   
}
echo "<p>Označi željeno vozilo:</p>";
echo "<form method='post'>";
foreach ($cars as $car) {
    $checked = ($car === $selected) ? ' checked' : '';
    echo "<label><input type='radio' name='car' value=\"$car\"$checked> $car</label><br>";
}   
echo "<br><button type='submit'>Odaberi</button>";
echo "</form>";
if ($selected !== '') {
    echo "<p>Odabrano vozilo: <strong>$selected</strong></p>";
}

echo "<ul>";
?>