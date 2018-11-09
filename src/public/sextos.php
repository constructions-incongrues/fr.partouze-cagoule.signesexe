<html>
	<head>
		<meta charset="UTF-8">
		<title>Signé Sexe : Un sexto quotidien, à partir de 1 € par mois</title>
		<link href="style.css" rel="stylesheet"> 
		<meta property="og:image" content="//submit.png" />
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
        <meta name="msapplication-TileColor" content="#000">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#000">
	</head>

    <body id="database">
        <h1><span class="underline">S</span>igné <span class="underline">S</span>exe</h1>
		<div class="center" style="width:634px;">
            <h2>Les <span class="red">SEXTOS</span> validés <br>par notre équipe de <span class="red">MODÉRATEURS</span></h2>
            <h3><a href="contribute.php">PROPOSEZ UN SEXTO</a></h3>
            <ul>
<?php foreach (file(__DIR__.'/database-verified.txt') as $sexto): ?>
                <li><?php echo $sexto ?></li>
<?php endforeach ?>
            </ul>
        </div>
    </body>
</html>