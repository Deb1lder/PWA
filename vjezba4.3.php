<html>
    <head>
        <style>
            input[type="text"] {
                width: 500px;
                margin: 15px 0px 15px 0px;
            }
        </style>
    </head>
    <body>
        <form method="post">
            <label for="recenica">Unesite rečenicu:</label><br>
            <input type="text" name="recenica"><br>
            <input type="submit" value="Prebroji riječi u rečenici">
        </form>
    </body>
</html>
<?php
if(isset($_POST['recenica'])){
    $recenica = $_POST['recenica'];
    $brojRijeci = str_word_count($recenica);
    if($brojRijeci == 1){
        echo "U rečenici \"" . $recenica . "\" ima " . $brojRijeci . " riječ.";
    } else {
    echo "U rečenici \"" . $recenica . "\" ima " . $brojRijeci . " riječi.";
    }
}
?>