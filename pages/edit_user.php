<!DOCTYPE html>
<html>
<head>
    <title>buyCycle</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/dashboard.css">
</head>
<body>


<div style="display: flex;align-items: space-between;">

    <div class="nav">
        <a href="startseite"><img src="../../pictures/logo.png" style="width: 250px;"></a>
            
        <div class="nav_links">
            <a href="merkliste">Meine Merkliste</a>
            <a href="meine_daten" style="background-color: #00cc00;color: white;">Meine Daten</a>
            <a href="meine_anzeigen">Meine Anzeigen</a>
            <a href="anzeige_erstellen">Anzeige erstellen</a>
            <a href="abonnement">Abonnement</a>
            <a href="benachrichtigungen">Benachrichtigungen</a>
            <a href="abmelden">Abmelden</a>
        </div>

    </div>
    <div style="flex-grow: 1">
        <div class="content">
        <form method="post">

        <h2 style="margin-top: 100px">Persönliche Daten</h2>
        <p><span class="label">Email</span>
        <input type="email" name="email" value="<?php echo e($user->email) ?>" style="margin:0px;width:387px;">
        </p>

        <p><span class="label">Name</span>
        <?php if($user->companyname): ?>
            <input type="text" name="companyname" value="<?php echo e($user->companyname) ?>" style="margin:0px;width:387px;">
        <?php else: ?>
           <input type="text" name="firstname" value="<?php echo e($user->firstname) ?>" style="margin:0px;width:184px;">
           <input type="text" name="surname" value="<?php echo e($user->surname) ?>" style="margin:0px;width:184px;">
        <?php endif; ?> 
        </p>
        
        <p><span class="label">Straße/Nr</span>
        <input type="text" name="street" value="<?php echo e($user->street) ?>" style="margin:0px;width:281px">
        <input type="text" name="number" value="<?php echo e($user->number) ?>" style="margin:0px;width:87px">
        </p>

        <p><span class="label">Ort</span>
        <input type="text" name="zipcode" value="<?php echo e($user->zipcode) ?>" style="margin:0px;width:87px">
        <input type="text" name="city" value="<?php echo e($user->city) ?>" style="margin:0px;width:281px">
        </p>

        <h2>Kontaktdaten</h2>
        <p><span class="label">Email</span>
        <input type="email" name="customer_email" value="<?php echo e($user->customer_email) ?>" style="margin:0px;width:387px;">
        </p>

        <p><span class="label">Telefon</span>
        <input type="text" name="customer_prefix" value="<?php echo e($user->customer_prefix) ?>" style="margin:0px;width:87px;">
        <input type="text" name="customer_phone" value="<?php echo e($user->customer_phone) ?>" style="margin:0px;width:281px;">
        </p>
        <button class="green">Daten aktualisieren</button>
        <a class="btn green" href="meine_daten">Abbrechen</a>

        </form>
        </div>
    </div>

</div>

</body>
</html>