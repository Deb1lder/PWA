
<html>
    <head>
        <style>
            input[type="number"] {
                width: 100px;
                margin: 15px 0px 15px 0px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="broj">Upišite broj:</label><br>
            <input type="number" name="broj"><br>
            <input type="submit" value="Provjeri je li broj prost">
        </form>
        <?php
        if(isset($_POST['broj'])){
            $broj = $_POST['broj'];
            if(jeProst($broj)){
                echo "Broj " . $broj . " je prost.<br><br>";
            } else {
                echo "Broj " . $broj . " nije prost.<br><br>";
            }
        }
        function jeProst($n) {
            if ($n < 2) {
                return false;
            }
            if ($n == 2) {
                return true;
            }
            if ($n % 2 == 0) {
                return false;
            }
            $limit = (int) sqrt($n);
            for ($i = 3; $i <= $limit; $i += 2) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }
        ?>
        <form method="post">
            <button  type="submit" name="ispisiProste">Prikaži proste brojeve do 100</button>
        </form>
    </body>
</html>
<?php
if(isset($_POST['ispisiProste'])) {
   for ($i = 2; $i < 100; $i++) {
        if (jeProst($i)) {
            echo $i . "\n";
        }
    }
}
?>