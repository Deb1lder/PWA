<?php
$prosjek = '';
$konacnaOcjena = '';
$poruka = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ocjena1 = isset($_POST['ocjena1']) ? (float)$_POST['ocjena1'] : '';
    $ocjena2 = isset($_POST['ocjena2']) ? (float)$_POST['ocjena2'] : '';
    
    if ($ocjena1 !== '' && $ocjena2 !== '') {
        if ($ocjena1 < 1 || $ocjena1 > 5 || $ocjena2 < 1 || $ocjena2 > 5) {
            $poruka = 'Greška: Ocjene moraju biti između 1 i 5!';
        } elseif ($ocjena1 <= 1 || $ocjena2 <= 1) {
            $konacnaOcjena = 'Nedovoljan (1)';
            $prosjek = round(($ocjena1 + $ocjena2) / 2, 2);
            $poruka = 'Jedan od kolokvija je negativan!';
        } else {
            $prosjek = round(($ocjena1 + $ocjena2) / 2, 2);
            $konacnaOcjena = round($prosjek);
            $poruka = 'Čestitamo na prolasku predmeta!';
        }
    } else {
        $poruka = 'Molimo unesite obje ocjene!';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Izračunaj konačnu ocjenu</title>
    <link rel="stylesheet" href="vjezba3.3.css">
</head>
<body>
    <form method="POST">
        <label for="ocjena1">Ocjena za I. kolokvij:</label>
        <input type="number" name="ocjena1" min="1" max="5" required>
        
        <label for="ocjena2">Ocjena za II. kolokvij:</label>
        <input type="number" name="ocjena2" min="1" max="5" required>
        
        <button type="submit">Izračunaj</button>
    </form>
    
    <?php if ($poruka): ?>
        <div class="rezultat <?php echo (strpos($poruka, 'Greška') !== false || strpos($poruka, 'negativan') !== false) ? 'greska' : 'uspjeh'; ?>">
            <?php echo $poruka; ?>
            <?php if ($prosjek !== ''): ?>
                <p><strong>Prosjek:</strong> <?php echo $prosjek; ?></p>
            <?php endif; ?>
            <?php if ($konacnaOcjena !== ''): ?>
                <p><strong>Konačna ocjena:</strong> <?php echo $konacnaOcjena; ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
</body>
</html>