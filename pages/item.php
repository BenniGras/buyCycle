<!DOCTYPE html>
<html>
<head>
    <title>byeCycle - Artikel</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/artikel.css">
</head>
<body>
<?php include "../components/header.php";?>

<div class="formular">
    <div class="content">

    <h2><?php echo e($item->title); ?></h2>
    
    <div class="flex">

        <img class="image" style="flex-shrink: 0;" src="../../pictures/<?php echo e($item->picture) ?>">
        
        <div>
        <div class="seller">
        <?php if($user->companyname): ?>
            <h3><?php echo e($user->companyname) ?></h3>
            <p>Händler</p>
            <p><?php echo e($user->street." ".$user->number) ?></p>
        <?php else: ?>
            <h3><?php echo e($user->firstname." ".$user->surname) ?></h3>
            <p>Privat</p>
        <?php endif; ?>             
            <p><?php echo e($user->zipcode." ".$user->city) ?></p>
        </div>
        <button>Tel.: <?php echo e($user->customer_prefix." ".$user->customer_phone) ?></button>
        <button><?php echo e($user->customer_email) ?></button>
        </div>

    </div>

    <div class="container" style="width: 600px;justify-content: space-around;align-items: baseline;">
        <h3><?php echo e($item->price); ?>€ <?php 
        if ($item->negotiation == "ja") {
            echo "VB";
        } ?></h3>
        <p>Zustand: <?php echo e($item->status); ?></p>
    </div>

    <h3>Beschreibung:</h3>
    <p><?php echo nl2br(e($item->description)); ?></p>

    <h3>Details:</h3>
    <table class="table">
        <tbody>
            <tr>
                <th>Kategorie</th>
                <td>
                <?php if($item->category =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->category);}
                 ?></td>
            </tr>
            <tr>
                <th>Unterkategorie</th>
                <td><?php if($item->subcategory =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->subcategory);}
                 ?></td>
            </tr>
            <tr>
                <th>Marke</th>
                <td><?php if($item->brand =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->brand);}
                 ?></td>
            </tr>
            <tr>
                <th>Modell</th>
                <td><?php if($item->model =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->model);}
                 ?></td>
            </tr>
            <tr>
                <th>Geschlecht</th>
                <td><?php if($item->sex =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->sex);}
                 ?></td>
            </tr>
            <tr>
                <th>Gänge</th>
                <td><?php if($item->gear =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->gear);}
                 ?></td>
            </tr>
            <tr>
                <th>Rahmenmaterial</th>
                <td><?php if($item->frame_material =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->frame_material);}
                 ?></td>
            </tr>
            <tr>
                <th>Rahmenform</th>
                <td><?php if($item->frame_shape =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->frame_shape);}
                 ?></td>
            </tr>
            <tr>
                <th>Rahmenhöhe</th>
                <td><?php if($item->frame_height =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->frame_height);?>cm
                <?php } ?></td>
            </tr>
            <tr>
                <th>Laufradgröße</th>
                <td><?php if($item->wheel_size =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->wheel_size);}
                 ?></td>
            </tr>
            <tr>
                <th>Federweg</th>
                <td><?php if($item->spring_travel =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->spring_travel);?>mm
                <?php } ?></td>
            </tr>
            <tr>
                <th>Federung</th>
                <td><?php if($item->spring =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->spring);}
                 ?></td>
            </tr>
            <tr>
                <th>Gewicht</th>
                <td><?php if($item->weight =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->weight);?>kg
                <?php } ?> </td>
            </tr>
            <tr>
                <th>Farbe</th>
                <td><?php if($item->color =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->color);}
                 ?></td>
            </tr>
            <tr>
                <th>Bremse</th>
                <td><?php if($item->brake =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->brake);}
                 ?></td>
            </tr>
            <tr>
                <th>Motor</th>
                <td><?php if($item->engine =="Bitte auswählen"){ 
                    echo ("n/a");
                } else { echo e($item->engine);}
                 ?></td>
            </tr>
        </tbody>
    </table>

    </div>
</div>


</body>
</html>