<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <?php
    require_once("header.php");
    ?>

    <h1>Producten</h1>
    <h2>voor de serieuze gamer</h2>
    <div class="alles-naast-elkaar">
        <img class="laptopkleiner" src="img/laptop.webp" alt="">
        <div class="tekst-onder-elkaar">
            <h3 class="kleur-rood">Gaming Laptop X1</h3>
            <p class="grotere-lettertype">€1499</p>
            <P class="grotere-lettertype">Krachtige laptop met de nieuwste GPU voor ultieme gaming prestaties</P>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="alles-naast-elkaar">
        <img class="laptopkleiner" src="img/pc.png" alt="">
        <div class="tekst-onder-elkaar">
            <h3 class="kleur-rood">Custom Gaming PC</h3>
            <p class="grotere-lettertype">€1999</p>
            <p class="grotere-lettertype">Op maat gemaakte desktop met topkwaliteit componenten voor maximale snelheid
            </p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="alles-naast-elkaar">
        <img class="laptopkleiner" src="img/headset.webp">
        <div class="tekst-onder-elkaar">
            <h3 class="kleur-rood">Pro Gaming Headset</h3>
            <p class="grotere-lettertype">€199</p>
            <p class="grotere-lettertype">Comfortabele headset met surround sound voor een meeslepende game-ervaring.
            </p>
        </div>
    </div>
    <?php
    require_once("footer.php");
    ?>
</body>

</html>