<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Einreichen - Nö Card</title>
    <link rel="stylesheet" href="built/app.css">

    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- share data -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Nö Card" />
    <meta name="twitter:description" content="Eine Karte als Protest" />
    <meta name="twitter:url" content="https://noe-club.at" />
    <meta name="twitter:image" content="/share-image.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Nö Card - Eine Karte als Protest" />
    <meta property="og:site_name" content="Nö Card" />
    <meta property="og:locale" content="de" />
    <meta property="og:description" content="Eine Karte als Protest." />
    <meta property="og:url" content="https://noe-club.at" />
    <meta property="og:image" content="/share-image.jpg" />
    <meta property="og:image:width" content="1200" /><meta property="og:image:height" content="628" />
    <meta property="og:image:alt" content="Nö Card - Eine Karte als Protest" />
</head>
<body>
<section class="hero is-medium is-primary">
    <div class="hero-body">
        <div class="container">
            <div class="columns">
                <div class="column is-8-desktop is-offset-2-desktop">
                    <h1 class="title is-2 is-spaced">
                        Wer bist du heute bei Billa & Co?
                    </h1>
                    <h2 class="subtitle is-4">
                        Reiche deine Karte ein und unterstütze das Projekt!
                    </h2>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
                <div class="content">
                    <?php
                        if(isset($_POST['code'])) {
                            // this needs to stay private
                            require __DIR__ . '/process-submission.php';
                        }
                    ?>
                    <br />
                    <h3>Schritt 1: Verstehen</h3>
                    <p>
                        Wenn du uns deine Karten-Nummer schickst werden wir diese Nummer auf Zufallsbasis unter http://app.noe-club.at anbieten.
                    </p>
                    <p>
                        Damit ist deine Karte öffentlich zugänglich, dies inkludiert folgendes:
                    </p>
                    <ul>
                        <li>Andere Nutzer können beliebige Produkte auf deine Karte kaufen.</li>
                        <li>Andere Nutzer können ggf. deine Punkte einlösen.</li>
                        <li>Die Firma <i>Unser Ö-Bonus Club GmbH</i> kann unter Bezugnahme auf die AGB Punkt 6.2.1. mit sofortiger Wirkung deine Mitgliedschaft außerordentlich beendet.</li>
                    </ul>
                    <p>
                        Wir hoffen, das du deine Karte aus idealistischen Motiven einreichst.
                    </p>
                    <h3>Schritt 2: Barcode herausfinden</h3>
                    <p>
                        Als Erstes finden wir den Wert deines Barcodes heraus. Hier gibt es zwei einfache Wege:
                    </p>
                    <ul>
                        <li>Du hast die E-Mail <i>Willkommen im jö Bonus Club bei BILLA!</i> noch. Dann lade das Foto vom Barcode aus der E-Mail unter <a href="https://zxing.org/w/decode.jspx" rel="noopener" target="_blank">https://zxing.org/w/decode.jspx</a> hoch. Das "Plain Result" ist der richtige Code.</li>
                        <li>Du hast eine Barcode Scanner App und scannst damit den Code deiner Karte.</li>
                    </ul>
                    <p>Bitte überprüfe, dass dein Code in der Form <code style="word-break: break-all;">(XX)XXXXXXXXXXXXXX(XX)XXXXXXXXXXXXXXXXXXXX(XX)XXXXXXXXXXX</code> ist (wobei X für eine beliebige Zahl steht).</p>

                    <h3>Schritt 3: Wert an uns senden</h3>
                    <p>
                        Gib den oben ermittelten Wert des Barcodes hier ein und klicke auf absenden:
                    <form method="post" action="/einreichen.php">
                        <input type="text" name="code" minlength="51" maxlength="57" style="width: 100%; font-size: 1.0rem; padding: 0.5rem; margin-bottom: 1rem;">
                        <input type="submit" class="button is-medium is-primary" value="absenden">
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="footer has-text-centered">
    <div class="container">
        <div class="columns">
            <div class="column is-8-desktop is-offset-2-desktop">
                <p>
                    Dies ist ein privates Kunstprojekt, und natürlich ohne Tracking! <a href="impressum.html">Impressum</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
