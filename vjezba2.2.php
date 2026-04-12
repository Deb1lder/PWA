<?php
$naslov = "Najbolji PHP dokument na internetu - nastavak";
$autor = "Tomislav Delač";
$opis = "Ova stranica je još bolja od prošle i služi za uvježbavanje varijabli, ispisa i osnovnog CSS-a.";
$link_href = "https://theuselessweb.com/";
$link_text = "Posjeti beskorisnu stranicu";
$linkInfo    = "https://www.php.net";
$linkNatrag  = "vjezba2.1.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($naslov); ?></title>
  

  <style>

    :root{
    --bg:#800020; 
    --card:#ffffff; 
    --text:#111827; 
    --muted:#cc1100; 
    --accent:#ff0000; 
    }

    body{ 
      font-family: system-ui,-apple-system,"Segoe UI",Roboto,sans-serif;
      margin:0;
      background:var(--bg); 
      color:var(--text); 
    }

    .wrap{ 
      max-width:720px; 
      margin:48px auto; 
      background:var(--card); 
      padding:32px;
      border-radius:16px; 
      box-shadow:0 10px 30px rgba(0,0,0,.08); 
    }

    *{
      box-sizing: border-box; 
    }

    h1{ 
      margin:0 0 16px; 
      font-size:3rem; 
    }

    p{ 
      margin:0 0 14px; 
      line-height:1.8; 
    }

    .btn{ 
    display:inline-block;
    padding:10px 16px;
    border:1px solid var(--accent);
    border-radius:10px; 
    text-decoration:none; 
    }

    .btn:hover{ 
      background:var(--accent); 
      color:#fff; 
    }

    .btn:focus-visible {
      outline: 3px solid var(--accent)
    }

    .btn:active {
    opacity: 0.6;
    }
    footer{ 
    margin-top:30px; 
    font-size:.8rem; 
    color:var(--muted); 
  }

  </style>
</head>
<body>
  <main class="wrap">
    <h1><?php echo htmlspecialchars($naslov); ?></h1>
    <p>Ovu stranicu izradio/la je <strong><?php echo htmlspecialchars($autor); ?></strong>.</p>
    <p><?php echo $opis; ?></p>
    <div class="row">
      <a class="btn" href="<?php echo $linkInfo; ?>" target="_blank">Saznaj više o PHP-u</a>
      <a class="btn" href="<?php echo $linkNatrag; ?>">Natrag na vježba 1b</a>
    </div>
   
    <footer>&copy; <?php echo date('Y'); ?> — Demo za PHP</footer>
  </main>
</body>
</html>
<!-- Naziv datoteke: vjezba2.2.php -->