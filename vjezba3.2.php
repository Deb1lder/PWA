<html>
    <head>
        <title>Kalkulator pomoću switch naredbe</title>
    </head>
    <body>
    <form method="POST">
        <label for="broj1">Unesite prvi broj:</label><br><br>
        <input type="number" name="broj1" value="<?php echo $_POST['broj1'] ?? 10; ?>" required><br><br>
        <label for="broj2">Unesite drugi broj:</label><br><br>
        <input type="number" name="broj2" value="<?php echo $_POST['broj2'] ?? 5; ?>" required><br><br>
        <label for="operacija">Odaberite operaciju:</label><br><br>
        <button type="submit" name="operacija" value="+">+</button>
        <button type="submit" name="operacija" value="-">-</button>
        <button type="submit" name="operacija" value="*">*</button>
        <button type="submit" name="operacija" value="/">/</button>
    </form>
    </body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $broj1 = intval($_POST['broj1']);
    $broj2 = intval($_POST['broj2']);
    $operacija = $_POST['operacija'];
    
switch ($operacija) {
    case "+":
        $rezultat = $broj1 + $broj2;
        echo "Rezultat: $broj1 + $broj2 = $rezultat";
        break;
    case "-":
        $rezultat = $broj1 - $broj2;
        echo "Rezultat: $broj1 - $broj2 = $rezultat";
        break;
    case "*":
        $rezultat = $broj1 * $broj2;
        echo "Rezultat: $broj1 * $broj2 = $rezultat";
        break;
    case "/":
        if ($broj2 != 0) {
            $rezultat = $broj1 / $broj2;
            echo "Rezultat: $broj1 / $broj2 = $rezultat";
        } else {
            echo "Greška: Dijeljenje sa nulom nije dozvoljeno!";
        }
        break;
    default:
        echo "Nepoznata operacija!";
    }
}
?>