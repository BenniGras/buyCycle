<!DOCTYPE html>
<html lang="de">
<head>
    <title>byeCycle - Anzeige_erstellen</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/highlight_item.css">
    <script src="https://kit.fontawesome.com/042b7aa4e1.js" crossorigin="anonymous"></script>
</head>
<body>
<?php include "../components/header.php";?>


<a class="preview" href="artikel?id=<?php echo e($item->id); ?>">
    <img class="image" src="../../pictures/<?php echo e($item->picture) ?>" alt="Vorschaubild">

    <div class="text">
        <h3 style="margin: 0;"><?php echo e($item->title); ?></h3> 
        
        <p class="row">

            <span style="font-size: 30px; font-weight: bold;">
            <?php echo e($item->price); ?>€ 
            <?php if ($item->negotiation === "ja"):?>
                <?php echo "VB"?>
            <?php endif; ?></span>
            
            <?php if ($item->status === "neu"): ?>
                <span class="neu"><?php echo "neu"?></span>
            <?php else: ?>
                <span class="gebraucht"><?php echo "gebraucht"?></span>
            <?php endif; ?> 
        </p>
    </div>
</a>

<div class="select-type">
    <div class="type">
        <h3>Highlight</h3>
        <p>ab 4,99€ für 7 Tage</p>
        <div class="infos">
        <ul>
            <li>Farbliche Hervorhebung für mehr Aufmerksamkeit</li>
            <li>Günstige Möglichkeit,  um deiner Anzeige zu mehr Aufmerksamkeit zu verhelfen</li>
        </ul>
        </div>
        <a class="btn green" href="hervorhebung_abschließen?type=highlight&dauer=7&id=<?php echo e($item->id); ?>">Jetzt buchen</a>
    </div>

    <div class="type middle">
        <h3>Top Anzeige</h3>
        <p>ab 7,99€ für 7 Tage</p>
        <div class="infos">
        <ul>
            <li>Deine Anzeige steht mit am Anfang der Liste</li>
            <li>Bestes Preis-Leistungs-Verhältnis</li>
        </ul>
        </div>
        <a class="btn green" href="hervorhebung_abschließen?type=top anzeige&dauer=7&id=<?php echo e($item->id); ?>">Jetzt buchen</a>
    </div>

    <div class="type">
        <h3>Gallerie</h3>
        <p>ab 19,99€ für 7 Tage</p>
        <div class="infos">
        <ul>
            <li>Deine Anzeige mit auf der Startseite</li>
            <li>Optimal für außergewöhnliche Produkte</li>
        </ul>
        </div>
        <a class="btn green" href="hervorhebung_abschließen?type=gallerie&dauer=7&id=<?php echo e($item->id); ?>">Jetzt buchen</a>
    </div>
</div>

</body>
</html>
