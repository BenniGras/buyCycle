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

        <h2 style="margin-top: 100px">Passwort ändern</h2>
        <p><span class="label">Altes Password</span>
        <input type="password" name="old_password" style="margin:0px;width:387px;">
        </p>

        <p><span class="label">Neues Passwort</span>
        <input type="password" name="password_1" style="margin:0px;width:387px;">
        </p>
        
        <p><span class="label">Neues Passwort wiederholen</span>
        <input type="password" name="password_2" style="margin:0px;width:387px;">
        </p>

        <button class="green">Passwort ändern</button>
        <a class="btn green" href="meine_daten">Abbrechen</a>

        </form>
        <?php if($error): ?>
            <p><?php echo($error)?></p>
        <?php endif; ?>
        </div>
    </div>

</div>

</body>
</html>