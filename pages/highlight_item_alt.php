<!DOCTYPE html>
<html lang="de">
<head>
    <title>byeCycle - Anzeige_erstellen</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/highlight_item.css">
</head>
<body>
<?php include "../components/header.php";?>

<div class="frame">
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
    <form method="post">
    <div class="card">
        <div class="card-header">
            <label class="container">
                <input type="radio" name="type" value="Gallerie" id="input-gallery">
                <span class="radiobtn"></span>
            </label>
            <span class="type">Gallerie</span>
            <span class="price"> ab 19,99€</span>
            <i class="fas fa-chevron-up card-arrow"></i>
        </div>
        <div class="card-body">
            <p>für 7 Tage: 19,99€</p>
            <p>für 14 Tage: 34,99€</p>
            <p>für 21 Tage: 49,99€</p>
            <p>für 28 Tage: 59,99€</p>
        </div>
    </div>

    <div class="card"> 
        <div class="card-header">
            <label class="container">
                <input type="radio" name="type" value="Top Anzeige" id="input-top">
                <span class="radiobtn"></span>
            </label>
            <span class="type">Top Anzeige </span>
            <span class="price"> ab 7,99€</span>
            <i class="fas fa-chevron-down card-arrow"></i> 
        </div>
        <div class="card-body">
            <p>für 7 Tage: 7,99€</p>
            <p>für 14 Tage: 12,99€</p>
            <p>für 21 Tage: 19,99€</p>
            <p>für 28 Tage: 24,99€</p>
        </div>
    </div>

    <div class="card">        
        <div class="card-header">
            <label class="container">
                <input type="radio" name="type" value="Highlight" id="input-highlight" required>
                <span class="radiobtn"></span>
            </label>
            <span class="type">Highlight</span>
            <span class="price"> ab 4,99€</span>
            <i class="fas fa-chevron-down card-arrow"></i>
        </div>
        <div class="card-body">
            <p>für 7 Tage: 4,99€</p>
            <p>für 14 Tage: 8,99€</p>
            <p>für 21 Tage: 12,99€</p>
            <p>für 28 Tage: 15,99€</p>
        </div>
    </div>
    <button style="width: 300px;margin:0 0 50px 50px;">Anzeige hervorheben</button>
    <select  name="duration" id="select-length">
        <option value="604800">7 Tage</option>
        <option value="1209600">14 Tage</option>
        <option value="1814400">21 Tage</option>
        <option value="2419200">28 Tage</option>
    </select>
    </form>
</div>



<script src="../../JS/highlight_item.js"></script>
</body>
</html>
