<?php if(isset($_SESSION['login'])): ?>
<div style="background-color: #FFFFFF;">
<header>

    <a href="startseite" style="padding: 0px;"><img src="../../pictures/logo.png"></a>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"></a>
    <nav>
    <ul class="navigation">
        <li><a href="anzeige_erstellen" class="btn">Anzeige erstellen</a></li>
        <li><a href="merkliste" class="btn">Merkliste</a></li>
        <div class="dropdown">
        <li class="dropbtn">Mein Profil</li>
            <div class="dropdown-content">
            <li><a href="meine_daten" style="padding: 0px;">Meine Daten</a></li>
            <li><a href="meine_anzeigen" style="padding: 0px;">Meine Anzeigen</a></li>
        <!--    <li><a href="abonnement" style="padding: 0px;">Abonnement</a></li>
            <li><a href="benachrichtigungen" style="padding: 0px;">Benachrichtigungen</a></li>-->
            <li><a href="abmelden" style="padding: 0px;">Abmelden</a></li> 
            </div>
        </div>
    </ul>
    </nav>

</header>

<div class="line"></div> 
</div>

<?php else: ?>
<div style="background-color: #FFFFFF;">
<header>

    <a href="startseite" style="padding: 0px;"><img src="../../pictures/logo.png"></a>
    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ"></a>
    <nav>
    <ul class="navigation">
        <li><a href="anmelden" class="btn">Anmelden</a></li>
        <li><a href="registrieren" class="btn green">Registrieren</a></li>
    </ul>
    </nav>

</header>

<div class="line"></div> 
</div>

<?php endif; ?>