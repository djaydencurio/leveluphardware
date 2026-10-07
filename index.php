<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>high end gaming gear</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.css">


</head>

<body>
    <?php
    require_once("header.php");
    ?>

    <h1>High-end Gaming Gear</h1>
    <h2>In Breda</h2>
    <div class="laptop-met-tekst-naar-rechts">
        <p class="p">Bij LevelUp Hardware draait alles om performance. Of je nu op zoek bent naar een nieuwe laptop die
            de nieuwste AAA-titels moeiteloos draait,of je huidige rig een professionele onderhoudsbeurt nodig heeft;
            wij staan voor je klaar.</p>
        <img class="laptop-right" src="img/laptop.webp" alt="">
    </div>
    <p class="p">In onze fysieke winkel combineren we de nostalgische sfeer van de jaren '80 arcades met de brute kracht
        van de hardware van morgen</p>
    <h3>Waarom kiezen voor ons?</h3>
    <div class="lijst">
        <img class="storefront" src="img/storefront.png" alt="">

        <ul>
            <li>Curated Selectie: Wij verkopen alleen laptops waar we zelf achter staan. Geen concessies op
                bouwkwaliteit of koeling</li>
            <li>Expert Onderhoud: Van het vervangen van koelpasta tot complexe hardware-upgrades wij verlengen de
                levensduur van je machine</li>
            <li>Persoonlijk advies: Geen standaard verkooppraatjes, maar eerlijk advies gebaseerd op jouw favoriete
                games en workflow.</li>
        </ul>
    </div>
    <div class="knop-iframe-onder-elkaar">
        <button class="knop">schrijf je in voor de niewsbrief</button>
        <?php

        require_once("iframe.php")
            ?>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>