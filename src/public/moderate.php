<?php
$new = trim(file_get_contents(__DIR__.'/database-new.txt'));
$newCount = count(explode("\n", $new));
$verified = trim(file_get_contents(__DIR__.'/database-verified.txt'));
$verifiedCount = count(explode("\n", $verified));
$subscribers = trim(file_get_contents(__DIR__.'/../data/subscribers.txt'));
$subscribersCount = count(explode("\n", $subscribers));
$blacklist = trim(file_get_contents(__DIR__.'/../data/blacklist.txt'));
$blacklistCount = count(explode("\n", $blacklist));

?>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Signé Sexe : Modération</title>
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
        <link href="css/simple-grid.min.css" rel="stylesheet"> 
        <link href="css/main.css" rel="stylesheet">
		<script src="node_modules/artyom.js/build/artyom.window.min.js"></script>
    </head>

    <body id="moderate">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><span class="red" onmouseover="artyom.say('Signé');">S</span>igné <span class="red" onmouseover="artyom.say('Sexe');">S</span>exe</h1>
                    <h2>Modération</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
<?php if ($new): ?>
                    <a href="#new">Nouveaux messages</a> |
<?php endif; ?>
                    <a href="#verified">Messages validés</a> |
                    <a href="#send">Envoyer un sexto</a> |
                    <a href="#blacklist">Désinscriptions</a> |
                    <a href="#subscribers">Inscrits</a> |
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <h3 id="verified">Envoyer un message</h3>
                    <form>
                        <input type="text" required pattern="\+[0-9]{2}[0-9]{9}" placeholder="+33612341234">
                        <input type="submit" value="⚲">
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>

<?php if ($new): ?>
            <div class="row">
                <div class="col-12">
                    <h3 id="new">Nouveaux messages (<?php echo $newCount ?>)</h3>
                    <form method="POST" action="api.php">
                        <input type="submit" value="Accepter">
                        <textarea name="new" rows="<?php echo $newCount ?>"><?php echo $new ?></textarea>
                    </form>
                </div>
            </div>
<?php endif; ?>
            <div class="row">
                <div class="col-12">
                    <h3 id="verified">Messages validés (<?php echo $verifiedCount ?>)</h3>
                    <textarea rows="25" readonly><?php echo $verified ?></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <hr>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <h3 id="subscribers">Inscrits (<?php echo $subscribersCount ?>)</h3>
                    <form>
                        <input type="text" required pattern="\+[0-9]{2}[0-9]{9}" placeholder="+33612341234">
                        <input type="submit" value="⚲" title="Ajouter">
                        <textarea rows="<?php echo $subscribersCount ?>" readonly><?php echo $subscribers ?></textarea>
                    </form>
                </div>
                <div class="col-6">
                    <h3 id="blacklist">Désinscrits (<?php echo $blacklistCount ?>)</h3>
                    <form>
                        <input type="text" required pattern="\+[0-9]{2}[0-9]{9}" placeholder="+33612341234">
                        <input type="submit" value="⚲" title="Ajouter">
                        <textarea rows="<?php echo $blacklistCount ?>" readonly><?php echo $blacklist ?></textarea>
                    </form>
                </div>
            </div>

        </div>
    </body>
</html>