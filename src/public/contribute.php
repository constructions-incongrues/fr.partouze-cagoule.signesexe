<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $sexto = trim(filter_input(INPUT_POST, 'sexto', FILTER_SANITIZE_STRING));
    if ($sexto) {
        if (!array_key_exists($sexto, array_flip(file(__DIR__.'/database-new.txt')))) {
            file_put_contents(__DIR__.'/database-new.txt', $sexto."\n", FILE_APPEND);
        }
        $confirmations = file(__DIR__.'/taunt.txt');
        $confirmation = $confirmations[array_rand($confirmations)];
    }
}
?>
<html>
    <head>
        <link href="style.css" rel="stylesheet"> 
        <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
        <link rel="manifest" href="favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body style="text-align:center; margin: auto; padding: auto;">
        <div class="center" style="width:642px;">
            <h1><span class="underline">S</span>ex <span class="underline">I</span>s <span class="underline">H</span>ell</h1>
<?php if (isset($confirmation)): ?>
                <h2 style="color:red;"><?php echo $confirmation; ?><br><a href="" title="ENCORE !">ENCORE ?</a></h2>            
                <h2>
                <p style="text-align:center; margin-top:0.1em; margin-top:0.1em;">
                    <a href=""><img src="submit.png" value="CUM AS YOU ARE" title="ENCORE !"></a>
                </p>
                <audio src="audio/<?php echo sprintf('%s.mp3', rand(1, 6)) ?>" autoplay>
            </h2>
            
<?php else: ?>
            <h2 style="font-size: 2.5em; margin-bottom:0.1em; margin-top:0.1em;">Let's make it <span style="color: red; font-weight: bold;"><a href=".">HOTTER</a></span></h2>
            <br>
            <form action="" method="POST">
                <span style="text-align:center;">
                    <input type="text" name="sexto" maxlength="140" class="contribute" placeholder="Il suffira d'un maximum de 140 signes" required style="text-align:center;" autofocus>
                    <br><br>
                    <input type="submit" value="Envoyer !">
                <span>
                <br>
                <br>
                <p style="text-align:center; margin-top:0.1em; margin-top:0.1em;"><a href="index.php"><img src="submit.png" value="CUM AS YOU ARE" title="https://fr.wikipedia.org/wiki/Victor_Vasarely"></a></p>
            </form>
<?php endif; ?>
        </div>
    </body>
</html>
