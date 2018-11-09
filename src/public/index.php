<?php
$nbSubscribers = count(file(__DIR__.'/../data/subscribers.txt'));
$nbSextos = count(file(__DIR__.'/database-verified.txt'));
if (filter_input(INPUT_GET, 'sexto') == 'added') {
    $confirmations = file(__DIR__.'/taunt.txt');
    $confirmation = $confirmations[array_rand($confirmations)];
}
?>
<html>
    <head>
        <meta charset="UTF-8">
		<title>Signé Sexe : Un sexto quotidien pour 1 € par mois</title>
		<meta property="og:image" content="//img/logo.png" />
		<meta property="og:description" content="Signé Sexe est un projet téléphono-pornographique. Il s'adresse à toustes." /> 
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

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-128952125-1"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-128952125-1');
		</script>
    </head>

    <body id="index">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <h1><span class="red" onmouseover="artyom.say('Signé');">S</span>igné <span class="red" onmouseover="artyom.say('Sexe');">S</span>exe</h1>
<?php if (isset($confirmation)): ?>
					<h2 class="confirmation"><?php echo $confirmation ?></h2>
					<audio src="audio/<?php echo sprintf('%s.mp3', rand(1, 6)) ?>" autoplay>
<?php else: ?>
                    <h2>Un <span class="red">s</span>exto par jour pour 1€ par moi<span class="red">s</span></h2>
<?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
					<h3></h3>
<?php if (isset($confirmation)): ?>
					<div class="logo inverted" title="Victor Vasarely">
<?php else: ?>
					<div class="logo" title="Victor Vasarely">
<?php endif; ?>
					</div>
                    <h4>Contribuer gratuitement et avec entrain</h4>
                    <p class="incentive">C'e<span class="red">s</span>t l'occa<span class="red">s</span>ion d'envoyer d'inventive<span class="red">s</span> cochonnerie<span class="red">s</span> à de parfait<span class="red">s</span> inconnu<span class="red">s</span>.</p>
                    <span class="form">
                        <form method="POST" action="api.php">
                            <input type="text" name="sexto" placeholder="Remplis-moi, idole de mes nuits" required>
                            <input type="submit" value="⚲" title="GO !">
                        </form>
                    </span>
                    <legend>
                        <p>
                            Les me<span class="red">s</span><span class="red">s</span>age<span class="red">s</span> <span class="red">s</span>ont modéré<span class="red">s</span> <em>a priori</em>. On <span class="red">s</span>upprime tout ce qui e<span class="red">s</span>t *-phobe, raci<span class="red">s</span>te, <span class="red">s</span>exi<span class="red">s</span>te, etc.
                            Pour le re<span class="red">s</span>te, on cen<span class="red">s</span>ure le moin<span class="red">s</span> po<span class="red">s</span><span class="red">s</span>ible, de bon cœur et arbitrairement.
                        </p>
                        <p>
                            La ba<span class="red">s</span>e de donnée<span class="red">s</span> contient actuellement <?php echo $nbSextos ?> message<span class="red">s</span>.
                        </p>
                    </legend>

                    <h4><span class="red">S</span>'in<span class="red">s</span>crire pour 1€ par moi<span class="red">s</span></h4>
                    <p class="incentive">C'e<span class="red">s</span>t l'occa<span class="red">s</span>ion de recevoir chaque jour un me<span class="red">s</span><span class="red">s</span>age qui - à défaut d'être excitant - <span class="red">s</span>era au moin<span class="red">s</span> étrange et pénétrant.</p>
                    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" id="paypal">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="TQ5RJ2SCNBX2Y">
                        <input type="hidden" name="on0" value="Votre numéro de téléphone"><span style="font-weight: Alegreya;"></span> <input type="text" name="os0" maxlength="200" required pattern="\+[0-9]{2}[0-9]{9}" placeholder="+33612341234" onfocus="this.placeholder=''">                    
                        <input type="submit" value="⚲" title="GO !">
                        <img alt="" border="0" src="https://www.paypalobjects.com/fr_FR/i/scr/pixel.gif" width="1" height="1">
                    </form>
                    <legend>
                        <p>Vous deviendrez ain<span class="red">s</span>i notre <?php echo $nbSubscribers ?>e <span class="red">s</span>ou<span class="red">s</span>cripteur.</p>
                    </legend>
                </div>

                <div class="col-6 apropos">
                    <p>
                        <span class="red">S</span>igné <span class="red">S</span>exe e<span class="red">s</span>t un projet téléphono-pornographique. Il <span class="red">s</span>'adre<span class="red">s</span><span class="red">s</span>e à tou<span class="red">s</span>te<span class="red">s</span>.
                    </p>

                    <p>L'objectif e<span class="red">s</span>t de con<span class="red">s</span>tituer collaborativement une ba<span class="red">s</span>e de donnée<span class="red">s</span> de me<span class="red">s</span><span class="red">s</span>age<span class="red">s</span> inventif<span class="red">s</span>, excitant<span class="red">s</span> <span class="red">s</span>exuellement (pour vou<span class="red">s</span> ou pour un public hypothétique) et de<span class="red">s</span>tiné<span class="red">s</span> à être tran<span class="red">s</span>mi<span class="red">s</span> par <span class="red">S</span>M<span class="red">S</span>.</p>
                    <p>Ce type de me<span class="red">s</span><span class="red">s</span>age e<span class="red">s</span>t dé<span class="red">s</span>igné <span class="red">s</span>ou<span class="red">s</span> l'appellation de <em>sexto</em>. On <span class="red">s</span>e l'envoie habituellement entre partenaire<span class="red">s</span> con<span class="red">s</span>entant<span class="red">s</span> dans un cadre intime.</p>

                    <p><span class="red">S</span>igné <span class="red">S</span>exe <span class="red">s</span>e propo<span class="red">s</span>e de <span class="red">s</span>ortir du cadre intime pour rentrer dan<span class="red">s</span> le cadre public, anonyme et aléatoire.</p>
                    
                    <hr>

                    <h4>Envoyez des in<span class="red">s</span>truction<span class="red">s</span> par <span class="red">S</span>M<span class="red">S</span> au <a href="tel:+33644640908">+33 6 44 64 09 08</a></h4>
                    <dl>
                        <dt><strong>CONTRIB</strong> <span class="red">s</span>uivi d'un me<span class="red">s</span><span class="red">s</span>age</dt>
                        <dd>Permet de contribuer à la ba<span class="red">s</span>e de donnée<span class="red">s</span></dd>

                        <dt><strong>CA<span class="red">S</span>UFFIT</strong></dt>
                        <dd>Permet de <span class="red">s</span>e dé<span class="red">s</span>in<span class="red">s</span>crire à tout jamai<span class="red">s</span></dd>
                    </dl>
                </div>
            </div>

            <div class="row footer">
                <div class="col-12">
                    <hr>
                    <p><a href="https://signesexe.partouze-cagoule.fr">Signé Sexe</a> est un projet de <a href="http://www.constructions-incongrues.net">Constructions Incongrues</a>, hébergé par Pastis Hosting et <a href="https://github.com/constructions-incongrues/fr.partouze-cagoule.signesexe">diffusé</a> sous licence aGPLv3</p>
                </div>
            </div>
        </div>

		<script src="js/behaviors.js"></script>
    </body>
</html>