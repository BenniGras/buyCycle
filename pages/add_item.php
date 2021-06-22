<!DOCTYPE html>
<html lang="de">
<head>
    <title>byeCycle - Anzeige_erstellen</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/add_user.css">
</head>
<body class="background-gray">
<?php include "../components/header.php";?>

<div class="formular">
<form method="post" action="" id="form" enctype="multipart/form-data">
    <div class="content">

    <h2 class="header">Anzeige erstellen</h2>
    <br />

    <div >
        <label for="title">Überschrift *</label>
        <div class="form-control">
            <input type="text" name="title" id="title" placeholder="Überschrift" class="xl"> 
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <small>Error message</small>
        </div>
	</div>

    <div >
        <label for="description">Beschreibung *</label>
        <div class="form-control">
            <textarea name="description" id="description" style="width: 588px; height: 150px;" placeholder="Beschreibung"></textarea>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <small>Error message</small>
            <small id="characters">Noch <em>100</em> Zeichen</small>
        </div>
	</div>

    <div >
        <label for="price">Preis *</label>
        <div class="form-control">
            <input type="text" id="price" name="price" placeholder="100" style="width: 137px;">
            <span style="font-size:26px;">,00 EUR</span>
            <i class="fa fa-check-circle fa-2x"></i>
            <i class="fa fa-exclamation-circle fa-2x"></i>
            <small>Error message</small>
            <label class="container" style="width:200px;display:inline;margin-left:50px;">Verhandlungsbasis
            <input type="checkbox"  name="negotiation" value="ja">
            <span class="checkmark"></span>
            </label>
        </div>
	</div>

    <label>Zustand *<br />
        <div class="form-control">
        <label class="container" style="display:inline;margin:0 0 30px 0">gebraucht
            <input type="radio" name="status" value="gebraucht">
            <span class="radiobtn"></span>
        </label>

        <label class="container" style="display:inline;margin:0 0 30px 50px">neu
            <input type="radio" name="status" value="neu">
            <span class="radiobtn"></span>
        </label>

        <i class="fa fa-check-circle fa-lg"></i>
        <i class="fa fa-exclamation-circle fa-lg"></i>
        <small>Error message</small>
        </div>
    </label><br />


    <label>Bilder *
        <input type="file" name="pictures" style="width: 586px; height: 150px; border: 2px dashed black; border-radius: 10px;">
    </label>


<!--Details-->
    <h3 class="header" style="padding-top: 50px;">Details</h3><br />

    <label style="display:inline-block;">Kategorie<br />
        <select name="category" style="width: 297px">
            <option>Bitte auswählen</option>
            <option>---</option>
            <option>Mountainbikes</option>
            <option>Rennräder</option>
            <option>E-Bikes/Pedelecs</option>
            <option>Trekkingräder</option>
            <option>Jugend & Kinderräder</option>
            <option>Cityräder</option>
            <option>Lastefahrräder</option>
            <option>---</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;margin-left:15px;">Unterkategorie<br />
        <select name="subcategory" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>Unterkategorie</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Marke<br />
        <input type="text" list="brand">
        <datalist id="brand">
            <option>    3T  </option>
            <option>	A2B	</option>
            <option>	Airstreeem	</option>
            <option>	Atlanta	</option>
            <option>	Bakfiets	</option>
            <option>	Basso	</option>
            <option>	Batavus	</option>
            <option>	BBF	</option>
            <option>	ben-e-bike	</option>
            <option>	Bergamont	</option>
            <option>	BH	</option>
            <option>	Bianchi	</option>
            <option>	Bionicon	</option>
            <option>	Birdy	</option>
            <option>	BMC	</option>
            <option>	Bombtrack	</option>
            <option>	Böttcher	</option>
            <option>	Bottecchia	</option>
            <option>	Breezer	</option>
            <option>	Brompton	</option>
            <option>	Bulls	</option>
            <option>	Cannondale	</option>
            <option>	Centurion	</option>
            <option>	Cervelo	</option>
            <option>	Checker Pig	</option>
            <option>	Cinelli	</option>
            <option>	Coboc	</option>
            <option>	Colnago	</option>
            <option>	Commencal	</option>
            <option>	Contoura	</option>
            <option>	Conway	</option>
            <option>	Corratec	</option>
            <option>	Creme	</option>
            <option>	Cube	</option>
            <option>	Dahon	</option>
            <option>	Diamant	</option>
            <option>	e.bikemanufaktur	</option>
            <option>	Early Rider	</option>
            <option>	EBIKE	</option>
            <option>	Eddy Merckx	</option>
            <option>	Eightshot	</option>
            <option>	Electra	</option>
            <option>	Evil	</option>
            <option>	Excelsior	</option>
            <option>	Falter	</option>
            <option>	Fantic	</option>
            <option>	Feldmeier	</option>
            <option>	Felt	</option>
            <option>	Fitifito	</option>
            <option>	Flyer	</option>
            <option>	Focus	</option>
            <option>	Forbidden	</option>
            <option>	Frog	</option>
            <option>	Fuji	</option>
            <option>	Gazelle	</option>
            <option>	Geomy	</option>
            <option>	Gepida	</option>
            <option>	GermanXia	</option>
            <option>	Ghost	</option>
            <option>	Giant	</option>
            <option>	Giant (Gebraucht)	</option>
            <option>	Grace	</option>
            <option>	Grecos	</option>
            <option>	GreenBike	</option>
            <option>	Green's Bikes	</option>
            <option>	GT	</option>
            <option>	Gudereit	</option>
            <option>	Haibike	</option>
            <option>	HASE BIKES	</option>
            <option>	HEPHA	</option>
            <option>	Hercules	</option>
            <option>	HNF-NICOLAI	</option>
            <option>	Husqvarna	</option>
            <option>	i:SY	</option>
            <option>	Ideal	</option>
            <option>	Intense	</option>
            <option>	Kalkhoff	</option>
            <option>	Katarga	</option>
            <option>	Kayza	</option>
            <option>	Kellys	</option>
            <option>	Kettler	</option>
            <option>	Koga	</option>
            <option>	Kona	</option>
            <option>	Kreidler	</option>
            <option>	KTM	</option>
            <option>	Lapierre	</option>
            <option>	Liv	</option>
            <option>	M1 Sporttechnik	</option>
            <option>	Marin	</option>
            <option>	MASTRO	</option>
            <option>	Merida	</option>
            <option>	Mondraker	</option>
            <option>	Morrison	</option>
            <option>	Moustache	</option>
            <option>	Müsing	</option>
            <option>	myBoo	</option>
            <option>	Naloo	</option>
            <option>	Norco	</option>
            <option>	Nox Cycles	</option>
            <option>	Noxon	</option>
            <option>	NS	</option>
            <option>	Nukeproof	</option>
            <option>	OPUS	</option>
            <option>	Orbea	</option>
            <option>	Pasculli	</option>
            <option>	Pegasus	</option>
            <option>	Pinarello	</option>
            <option>	Pivot	</option>
            <option>	Polygon	</option>
            <option>	Puky	</option>
            <option>	Pyrobikes	</option>
            <option>	Qwic	</option>
            <option>	Rabeneick	</option>
            <option>	Raleigh	</option>
            <option>	Raymon	</option>
            <option>	Rex	</option>
            <option>	Ridley	</option>
            <option>	Riese und Müller	</option>
            <option>	Rock Machine	</option>
            <option>	Rocky Mountain	</option>
            <option>	Rondo	</option>
            <option>	Rotwild	</option>
            <option>	Santa Cruz	</option>
            <option>	Saxonette	</option>
            <option>	Schindelhauer	</option>
            <option>	S'Cool	</option>
            <option>	Scott	</option>
            <option>	Shimano	</option>
            <option>	Simplon	</option>
            <option>	Sonstige	</option>
            <option>	Sparta	</option>
            <option>	Specialized	</option>
            <option>	Staiger	</option>
            <option>	Steppenwolf	</option>
            <option>	Stevens	</option>
            <option>	Strida	</option>
            <option>	Stromer	</option>
            <option>	SWYPE	</option>
            <option>	Tern	</option>
            <option>	Tout Terrain	</option>
            <option>	Trek	</option>
            <option>	Trenoli	</option>
            <option>	Triumph	</option>
            <option>	Univega	</option>
            <option>	Urban Arrow	</option>
            <option>	Velo de Ville	</option>
            <option>	Victoria	</option>
            <option>	VSF Fahrradmanufaktur	</option>
            <option>	We the People	</option>
            <option>	Wilier	</option>
            <option>	Winora	</option>
            <option>	Woom	</option>
            <option>	X-Tract	</option>
            <option>	Yeti	</option>
        </datalist>
    </label>

    <label style="display:inline-block;">Marke<br />
        <select name="brand" style="width: 297px">
            <option>Bitte auswählen</option>
            <option>---</option>
            <option>	3T	</option>
            <option>	A2B	</option>
            <option>	Airstreeem	</option>
            <option>	Atlanta	</option>
            <option>	Bakfiets	</option>
            <option>	Basso	</option>
            <option>	Batavus	</option>
            <option>	BBF	</option>
            <option>	ben-e-bike	</option>
            <option>	Bergamont	</option>
            <option>	BH	</option>
            <option>	Bianchi	</option>
            <option>	Bionicon	</option>
            <option>	Birdy	</option>
            <option>	BMC	</option>
            <option>	Bombtrack	</option>
            <option>	Böttcher	</option>
            <option>	Bottecchia	</option>
            <option>	Breezer	</option>
            <option>	Brompton	</option>
            <option>	Bulls	</option>
            <option>	Cannondale	</option>
            <option>	Centurion	</option>
            <option>	Cervelo	</option>
            <option>	Checker Pig	</option>
            <option>	Cinelli	</option>
            <option>	Coboc	</option>
            <option>	Colnago	</option>
            <option>	Commencal	</option>
            <option>	Contoura	</option>
            <option>	Conway	</option>
            <option>	Corratec	</option>
            <option>	Creme	</option>
            <option>	Cube	</option>
            <option>	Dahon	</option>
            <option>	Diamant	</option>
            <option>	e.bikemanufaktur	</option>
            <option>	Early Rider	</option>
            <option>	EBIKE	</option>
            <option>	Eddy Merckx	</option>
            <option>	Eightshot	</option>
            <option>	Electra	</option>
            <option>	Evil	</option>
            <option>	Excelsior	</option>
            <option>	Falter	</option>
            <option>	Fantic	</option>
            <option>	Feldmeier	</option>
            <option>	Felt	</option>
            <option>	Fitifito	</option>
            <option>	Flyer	</option>
            <option>	Focus	</option>
            <option>	Forbidden	</option>
            <option>	Frog	</option>
            <option>	Fuji	</option>
            <option>	Gazelle	</option>
            <option>	Geomy	</option>
            <option>	Gepida	</option>
            <option>	GermanXia	</option>
            <option>	Ghost	</option>
            <option>	Giant	</option>
            <option>	Giant (Gebraucht)	</option>
            <option>	Grace	</option>
            <option>	Grecos	</option>
            <option>	GreenBike	</option>
            <option>	Green's Bikes	</option>
            <option>	GT	</option>
            <option>	Gudereit	</option>
            <option>	Haibike	</option>
            <option>	HASE BIKES	</option>
            <option>	HEPHA	</option>
            <option>	Hercules	</option>
            <option>	HNF-NICOLAI	</option>
            <option>	Husqvarna	</option>
            <option>	i:SY	</option>
            <option>	Ideal	</option>
            <option>	Intense	</option>
            <option>	Kalkhoff	</option>
            <option>	Katarga	</option>
            <option>	Kayza	</option>
            <option>	Kellys	</option>
            <option>	Kettler	</option>
            <option>	Koga	</option>
            <option>	Kona	</option>
            <option>	Kreidler	</option>
            <option>	KTM	</option>
            <option>	Lapierre	</option>
            <option>	Liv	</option>
            <option>	M1 Sporttechnik	</option>
            <option>	Marin	</option>
            <option>	MASTRO	</option>
            <option>	Merida	</option>
            <option>	Mondraker	</option>
            <option>	Morrison	</option>
            <option>	Moustache	</option>
            <option>	Müsing	</option>
            <option>	myBoo	</option>
            <option>	Naloo	</option>
            <option>	Norco	</option>
            <option>	Nox Cycles	</option>
            <option>	Noxon	</option>
            <option>	NS	</option>
            <option>	Nukeproof	</option>
            <option>	OPUS	</option>
            <option>	Orbea	</option>
            <option>	Pasculli	</option>
            <option>	Pegasus	</option>
            <option>	Pinarello	</option>
            <option>	Pivot	</option>
            <option>	Polygon	</option>
            <option>	Puky	</option>
            <option>	Pyrobikes	</option>
            <option>	Qwic	</option>
            <option>	Rabeneick	</option>
            <option>	Raleigh	</option>
            <option>	Raymon	</option>
            <option>	Rex	</option>
            <option>	Ridley	</option>
            <option>	Riese und Müller	</option>
            <option>	Rock Machine	</option>
            <option>	Rocky Mountain	</option>
            <option>	Rondo	</option>
            <option>	Rotwild	</option>
            <option>	Santa Cruz	</option>
            <option>	Saxonette	</option>
            <option>	Schindelhauer	</option>
            <option>	S'Cool	</option>
            <option>	Scott	</option>
            <option>	Shimano	</option>
            <option>	Simplon	</option>
            <option>	Sonstige	</option>
            <option>	Sparta	</option>
            <option>	Specialized	</option>
            <option>	Staiger	</option>
            <option>	Steppenwolf	</option>
            <option>	Stevens	</option>
            <option>	Strida	</option>
            <option>	Stromer	</option>
            <option>	SWYPE	</option>
            <option>	Tern	</option>
            <option>	Tout Terrain	</option>
            <option>	Trek	</option>
            <option>	Trenoli	</option>
            <option>	Triumph	</option>
            <option>	Univega	</option>
            <option>	Urban Arrow	</option>
            <option>	Velo de Ville	</option>
            <option>	Victoria	</option>
            <option>	VSF Fahrradmanufaktur	</option>
            <option>	We the People	</option>
            <option>	Wilier	</option>
            <option>	Winora	</option>
            <option>	Woom	</option>
            <option>	X-Tract	</option>
            <option>	Yeti	</option>
            <option>---</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;margin-left:15px;">Modell<br />
        <select name="model" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>	Access 200 2020		</option>
            <option>	Access 240 2020		</option>
            <option>	Access 240 Allroad 2020		</option>
            <option>	Access 240 Disc girl 2020		</option>
            <option>	Access WS EAZ 2021		</option>
            <option>	Access WS EAZ 27.5 2021		</option>
            <option>	Access WS Exc 2021		</option>
            <option>	Access WS Exc 27.5 2021		</option>
            <option>	Access WS Pro 2021		</option>
            <option>	Access WS Pro 27.5 2021		</option>
            <option>	Access WS Race 2021		</option>
            <option>	Access WS Race 27.5 2021		</option>
            <option>	Acid 200 2020		</option>
            <option>	Acid 200 2021		</option>
            <option>	Acid 200 Allroad 2021		</option>
            <option>	Acid 200 Disc 2020		</option>
            <option>	Acid 200 Disc 2021		</option>
            <option>	Acid 200 SL 2021		</option>
            <option>	Acid 2021		</option>
            <option>	Acid 240 2020		</option>
            <option>	Acid 240 SL 2021		</option>
            <option>	Acid 260 2020		</option>
            <option>	Acid 260 Disc 2020		</option>
            <option>	Acid CMPT 200 2021		</option>
            <option>	Addict 10 disc 2021		</option>
            <option>	Addict RC 10 2020		</option>
            <option>	Addict RC 20 2020		</option>
            <option>	Addict RC 30 2020		</option>
            <option>	Aethos Pro Ultegra Di2 2021		</option>
            <option>	AGATTU 3.S XXL R 2020		</option>
            <option>	Agree C:62 Race 2021		</option>
            <option>	Agree Hybrid C:62 Race Disc 2019		</option>
            <option>	Agree Hybrid C:62 SL Disc 2019		</option>
            <option>	Aim EX 2021		</option>
            <option>	Aim EX 27.5 2021		</option>
            <option>	Aim Pro 2021		</option>
            <option>	Aim Pro 27.5 2021		</option>
            <option>	Aim Race 2021		</option>
            <option>	Aim Race 27.5 2020		</option>
            <option>	Aim Race 27.5 2021		</option>
            <option>	Aim SL 2021		</option>
            <option>	Aim SL 27.5 2021		</option>
            <option>	Aim SL Allroad 2021		</option>
            <option>	Aim SL Allroad 27.5 2021		</option>
            <option>	Albis Forma 2020		</option>
            <option>	Allant+ 8 2020		</option>
            <option>	Analog RS 2021		</option>
            <option>	AnyTour E+ 1 GTS 2020		</option>
            <option>	AnyTour E+ 2 GTS 2019		</option>
            <option>	Aspect 750 2021		</option>
            <option>	Aspect 910 2021		</option>
            <option>	Aspect 920 2021		</option>
            <option>	Aspect 930 2020		</option>
            <option>	Aspect 930 2021		</option>
            <option>	Aspect 940 2021		</option>
            <option>	Aspect 950 2021		</option>
            <option>	Aspect eRIDE 920 2021		</option>
            <option>	Aspect eRIDE 930 2020		</option>
            <option>	Aspect eRIDE 930 2021		</option>
            <option>	Attain GTC SL 2021		</option>
            <option>	Attain SL 2021		</option>
            <option>	Attention 2021		</option>
            <option>	Attention SL 2021		</option>
            <option>	Axial WS GTC Pro 2021		</option>
            <option>	Axis eRIDE 10 Men 2021		</option>
            <option>	Axis eRIDE 20 Lady 2020		</option>
            <option>	Axis eRIDE 20 Men 2020		</option>
            <option>	Axis eRIDE Evo 2021		</option>
            <option>	Backfire E R760i 2021		</option>
            <option>	Backfire Fit E R760i 2021		</option>
            <option>	Backfire Fit E R860i 2021		</option>
            <option>	Backfire Fit E R860i EQ 2021		</option>
            <option>	Backfire Pro 800 2021		</option>
            <option>	Beat SL 20" 2020		</option>
            <option>	Beryll Deluxe+ RT Wave 2021		</option>
            <option>	Beryll Deluxe+ Tiefeinsteiger 2020		</option>
            <option>	Cairon S 429 2021		</option>
            <option>	Cairon X 300 Trapez 2020		</option>
            <option>	Checkpoint ALR 4 2021		</option>
            <option>	Checkpoint ALR 5 2021		</option>
            <option>	Chisel 2021		</option>
            <option>	Chisel Comp 2021		</option>
            <option>	Como 3.0 Low Entry 700c 2020		</option>
            <option>	Como 4.0 Low Entry 700c 2020		</option>
            <option>	Como 5.0 Low Entry 700c 2020		</option>
            <option>	Contessa 20 2021		</option>
            <option>	Contessa Active 40 2021		</option>
            <option>	Cross Hybrid Pro 625 Allroad 2021		</option>
            <option>	Cross Hybrid Pro 625 Allroad Trapez 2021		</option>
            <option>	Cross Hybrid Race 625 Allroad 2021		</option>
            <option>	Cross Hybrid Race 625 Allroad Trapez 2021		</option>
            <option>	Crossfire Gravel 3000 2021		</option>
            <option>	CrossRay E 5.5 Street 2020		</option>
            <option>	CrossRay E 8.0 2020		</option>
            <option>	CROSSWAY L XT-EDITION HP3 2021		</option>
            <option>	Cubie 120 2021		</option>
            <option>	Cubie 120 walk girl 2020		</option>
            <option>	Cubie 160 2020		</option>
            <option>	Cubie 160 2021		</option>
            <option>	Cubie 160 girl 2020		</option>
            <option>	Cubie 180 SL 2021		</option>
            <option>	CYKE 20-7 Alu Act. 2020		</option>
            <option>	DailyTour E+ 2 2019		</option>
            <option>	dash 26 21-G Tourney 2019		</option>
            <option>	Defy Advanced 1 2020		</option>
            <option>	Demo Expert 2021		</option>
            <option>	Demo Race 2021		</option>
            <option>	Diverge Base Carbon 2021		</option>
            <option>	Diverge Comp Carbon 2021		</option>
            <option>	Diverge Comp E5 2021		</option>
            <option>	Diverge Comp E5 EVO 2021		</option>
            <option>	Diverge E5 2021		</option>
            <option>	Diverge Elite E5 2021		</option>
            <option>	Diverge Sport Carbon 2021		</option>
            <option>	Diverge Sport Carbon 2021		</option>
            <option>	Domane SL 5 2020		</option>
            <option>	Domane SL 6 2020		</option>
            <option>	Domane+ ALR 2021		</option>
            <option>	Domingo 30 Disc Herren 28" 30-G XT mix 2019		</option>
            <option>	E 6.0 500 Trapez 2020		</option>
            <option>	E 9 Rt 500 Wave 28" 2021		</option>
            <option>	E 9.0 RT 400 Wave 2020		</option>
            <option>	E-4X Tour Gent 2020		</option>
            <option>	E-6X Tour Gent 2020		</option>
            <option>	E-8X Gent 2021		</option>
            <option>	E-8X Tour Gent 2021		</option>
            <option>	E-Bormio Forma 2020		</option>
            <option>	E-Bormio Gent 2020		</option>
            <option>	E-Cargoville LJ 70 2020		</option>
            <option>	E-Circle Forma 2020		</option>
            <option>	Eco City 4 CB 2020		</option>
            <option>	Eco City 4 CB 26 2020		</option>
            <option>	Eco City 4 FW 2020		</option>
            <option>	E-Fire City R2500i 2021		</option>
            <option>	E-Fire City R2600i SMC 2021		</option>
            <option>	E-Fire City R750 2021		</option>
            <option>	E-Fire City R960i 2021		</option>
            <option>	E-Fire Sport R2600i 2021		</option>
            <option>	E-Fire Sport R860i 2021		</option>
            <option>	E-Fire Tour R2600i 2021		</option>
            <option>	E-Fire Tour R860i 2021		</option>
            <option>	eFolding 7.5 2020		</option>
            <option>	E-Getaway Gent 2020		</option>
            <option>	E-Grandurance Elite 2020		</option>
            <option>	E-Hazard 29" 2020		</option>
            <option>	E-Horizon Edition Gent 2020		</option>
            <option>	E-Horizon N8 FH 500 Gent 2020		</option>
            <option>	E-Inception AM 8.7 GTF 2021		</option>
            <option>	E-Lavena Forma 2020		</option>
            <option>	E-Lavena Gent 2020		</option>
            <option>	Ella Cruise Hybrid 500 2021		</option>
            <option>	E-Molveno Lady 2020		</option>
            <option>	ENDEAVOUR 5.S XXL 2020		</option>
            <option>	ENDEAVOUR 5.S XXL Herren 2020		</option>
            <option>	ENDEAVOUR 5.S XXL Trapez 2020		</option>
            <option>	ENDEAVOUR 7.B ADVANCE Trapez 2020		</option>
            <option>	ENDEAVOUR 7.B EXCITE 45 Herren 2020		</option>
            <option>	Enduro Comp 2020		</option>
            <option>	Enduro Elite 29 2020		</option>
            <option>	Enduro Expert 2021		</option>
            <option>	ENTICE 7.B EXCITE Herren 2020		</option>
            <option>	Epic Comp 2021		</option>
            <option>	Epic Evo 2021		</option>
            <option>	Epic Evo Comp 2021		</option>
            <option>	Epic Evo Expert 2021		</option>
            <option>	Epic Expert 2021		</option>
            <option>	E-Sledge 27.5" 2020		</option>
            <option>	eTrekking 6.5 2021		</option>
            <option>	E-Triton Plus Forma 2020		</option>
            <option>	E-Triton Plus Forma 2021		</option>
            <option>	E-Triton PT5 Forma 2020		</option>
            <option>	E-Triton PT5 Gent 2020		</option>
            <option>	E-Triton PT5 Lady 2020		</option>
            <option>	E-Triton PT6 Forma 2021		</option>
            <option>	E-Triton PT6 Gent 2021		</option>
            <option>	E-Ville Edition 2020		</option>
            <option>	E-Whaka ES 27.5" 2020		</option>
            <option>	Explore E+ 1 500Wh STA 2021		</option>
            <option>	Explore E+ 1 GTS 2020		</option>
            <option>	Explore E+ 1 Pro STA 2020		</option>
            <option>	Explore E+ 1 STA 2020		</option>
            <option>	Explore E+ 2 GTS 2020		</option>
            <option>	Explore E+ 2 STA 2020		</option>
            <option>	eZESTY AM 9.0 2020		</option>
            <option>	Fuel EX 7 2021		</option>
            <option>	Fuel EX 8 XT 2021		</option>
            <option>	Fuel EX 9.8 GX 2021		</option>
            <option>	FullRay E-Nine 8.0 2021		</option>
            <option>	FullRay E-Nine 9.0 2021		</option>
            <option>	FX 203 ND Wave 2020		</option>
            <option>	FX 203 ND Y-Lite 2020		</option>
            <option>	Fx 203 Nd Y-Lite 2021		</option>
            <option>	Gain D30 2020		</option>
            <option>	Genius 930 2020		</option>
            <option>	Genius 930 2021		</option>
            <option>	Genius 940 2021		</option>
            <option>	Genius 950 2021		</option>
            <option>	Genius 960 2021		</option>
            <option>	Genius eRIDE 920 2021		</option>
            <option>	Girly 6.9 2020		</option>
            <option>	Goroc2 6.50 D0 2020		</option>
            <option>	Gran Urban 6 FW 2020		</option>
            <option>	Habit 4 2020		</option>
            <option>	Habit Neo 3 2021		</option>
            <option>	Habit Neo 4+ 2021		</option>
            <option>	Habit Waves SLV 2021		</option>
            <option>	Haibike SDURO FullNine 7.0 i625Wh 12G SX 2020		</option>
            <option>	Haibike SDURO FullNine 8.0 i625Wh 12G SLX 2020		</option>
            <option>	Haibike SDURO FullSeven Lf LT 7.0 i625Wh 12G SX 2020		</option>
            <option>	Haibike SDURO FullSeven LT 5.0 i500Wh 20G XT 2020		</option>
            <option>	Haibike SDURO FullSeven LT 7.0 i625Wh 12G SX 2020		</option>
            <option>	Haibike SDURO FullSeven LT 8.0 i625Wh 12G SLX 2020		</option>
            <option>	Haibike SDURO HardNine 4.0 500Wh 20G Deore 2020		</option>
            <option>	Haibike SDURO HardSeven 5.0 i500Wh 10G Deore 2020		</option>
            <option>	Haibike SDURO HardSeven 6.0 i500Wh 12G SX Eagle 2020		</option>
            <option>	Haibike SDURO HardSeven Life 2.0 500Wh 10G Deore 2020		</option>
            <option>	Haibike SDURO HardSeven Life 5.0 i500Wh 10G De 2020		</option>
            <option>	Haibike SDURO HardSeven Life 6.0 i500Wh 12G SX 2020		</option>
            <option>	Haibike SDURO Trekking 4.0 Damen 2020		</option>
            <option>	Haibike SDURO Trekking 4.0 Herren 2020		</option>
            <option>	Haibike SDURO Trekking 5.0 Herren 2020		</option>
            <option>	Haibike SDURO Trekking 6.0 Herren 2020		</option>
            <option>	Haibike SDURO Trekking 8.0 Herren 2020		</option>
            <option>	Heckler CC S-KIT 2020		</option>
            <option>	HIGHTOWER 2 C S 2021		</option>
            <option>	HOTWALK INT 2019		</option>
            <option>	Hotwalk Int 2021		</option>
            <option>	HSD P9 2020		</option>
            <option>	Hybride ASX 6.7+ AL U 2020		</option>
            <option>	Hybride HTX 2.7+ 2020		</option>
            <option>	Hybride HTX 4.7+ 2020		</option>
            <option>	Hybride Square Trekking B1.8 AL U 2020		</option>
            <option>	Instinct Alloy 50 2020		</option>
            <option>	JAM2 6.7 NINE 12G 2020		</option>
            <option>	JAM2 6.7 PLUS 12G 2020		</option>
            <option>	JAM2 6.8 NINE 12G 2020		</option>
            <option>	Kathmandu Hybrid 45 625 Trapeze 2020		</option>
            <option>	Kathmandu Hybrid EXC 625 Diamant 2021		</option>
            <option>	Kathmandu Hybrid EXC 625 Trapez 2021		</option>
            <option>	Kathmandu Hybrid EXC 625 Wave 2021		</option>
            <option>	Kathmandu Hybrid ONE 625 Diamant 2021		</option>
            <option>	Kathmandu Hybrid ONE 625 Trapez 2021		</option>
            <option>	Kathmandu Hybrid Pro 625 Diamant 2021		</option>
            <option>	Kathmandu Hybrid Pro 625 Trapez 2021		</option>
            <option>	Kathmandu Hybrid Pro 625 Wave 2021		</option>
            <option>	Kathmandu Hybrid SL 625 Diamant 2021		</option>
            <option>	Kathmandu Hybrid SL 625 Trapez 2021		</option>
            <option>	Kathmandu Pro 2021		</option>
            <option>	Kathmandu Pro Trapez 2021		</option>
            <option>	Kato 2.7 AL U 2020		</option>
            <option>	Kato 20" Base AL U 2021		</option>
            <option>	Kato Essential 27.5 AL U 2021		</option>
            <option>	Kato Universal 27.5 AL U 2021		</option>
            <option>	Kenevo Comp 2020		</option>
            <option>	Kenevo Expert 2020		</option>
            <option>	Kickster 2020		</option>
            <option>	Kid 200 Street 2020		</option>
            <option>	Lanao 20" Essential AL W 2021		</option>
            <option>	Levo HT 29 Nb 2020		</option>
            <option>	Levo SL Comp 29 2020		</option>
            <option>	Levo SL Comp Carbon 29 2020		</option>
            <option>	Levo SL Expert 29 2020		</option>
            <option>	Lhasa E R750i EQ 2021		</option>
            <option>	Lhasa E R860i EQ 2021		</option>
            <option>	LR 1L Br grün 2017		</option>
            <option>	LR 1L Br rot 2017		</option>
            <option>	LR M lila 2017		</option>
            <option>	Macina Aera P272 LFC 2021		</option>
            <option>	Macina Sport 610 Herren 2021		</option>
            <option>	Macina Style 620 Damen 2021		</option>
            <option>	Marlin 5 2021		</option>
            <option>	Mavaro 4 2021		</option>
            <option>	MC 200 2020		</option>
            <option>	Miss Grace C7+ HMB 2021		</option>
            <option>	Moterra Neo 3+ 2021		</option>
            <option>	MS 240 2020		</option>
            <option>	MS 260 2020		</option>
            <option>	Nature Pro Allroad 2021		</option>
            <option>	Nirvana Tour SF Base 2021		</option>
            <option>	Nirvana Tour SF Essential 2021		</option>
            <option>	No Pogo E R2600i 2021		</option>
            <option>	No Pogo E R860i 2021		</option>
            <option>	Nuride Hybrid EXC 625 Allroad 2021		</option>
            <option>	Nuride Hybrid Pro 625 Allroad 2021		</option>
            <option>	Overdrive City Z1000 EQ 2021		</option>
            <option>	Overdrive Gravel Z4000 GT 2021		</option>
            <option>	PARALANE2 9.7 22G 2020		</option>
            <option>	Powerfly 5 2021		</option>
            <option>	Powerfly 7 2021		</option>
            <option>	Powerfly FS 7 2021		</option>
            <option>	POWERKID AL 16 K 2019		</option>
            <option>	Procaliber 9.5 2021		</option>
            <option>	PRORACE 4.9 2020		</option>
            <option>	PRORACE SAT 6.9 2020		</option>
            <option>	PRORACE SAT 8.9 2020		</option>
            <option>	Race ONE 2021		</option>
            <option>	Rail 7 2021		</option>
            <option>	Rail 9.7 2020		</option>
            <option>	Rail 9.7 2021		</option>
            <option>	Rail 9.8 XT 2021		</option>
            <option>	Randonneur Disc Lady 2020		</option>
            <option>	Ransom eRIDE 910 2021		</option>
            <option>	Reaction C:62 One 2021		</option>
            <option>	Reaction C:62 Pro 2021		</option>
            <option>	Reaction C:62 SL 2021		</option>
            <option>	Reaction Hybrid ONE 500 29 2021		</option>
            <option>	Reaction Hybrid ONE 625 29 2021		</option>
            <option>	Reaction Hybrid Performance 625 Allroad 2021		</option>
            <option>	Reaction Hybrid Performance 625 Allroad Trapez 2021		</option>
            <option>	Reaction Hybrid Pro 500 29 2021		</option>
            <option>	Reaction Hybrid Pro 625 29 2021		</option>
            <option>	Reaction Hybrid Pro 625 29 Allroad 2021		</option>
            <option>	Reaction Hybrid Pro 625 29 Allroad Trapez 2021		</option>
            <option>	Reaction Hybrid Pro 625 29 Trapez 2021		</option>
            <option>	Reaction Hybrid Race 625 29 2021		</option>
            <option>	Reaction Hybrid Race 625 29 Trapez 2021		</option>
            <option>	Reaction Hybrid SL 625 29 2021		</option>
            <option>	Reaction Hybrid SLT 625 29 2021		</option>
            <option>	Reaction Pro 2021		</option>
            <option>	Reign E+ 0 Pro 2020		</option>
            <option>	Reign E+ 1 Pro 2020		</option>
            <option>	Reign E+ 2 Pro 2020		</option>
            <option>	Riprock 12 Coaster 2018		</option>
            <option>	Riprock 16 Coaster 2018		</option>
            <option>	RIPROCK 24 INT 2019		</option>
            <option>	Riprock Coaster 12 2017		</option>
            <option>	Riprock Coaster 16 2017		</option>
            <option>	Rockhopper 26 2021		</option>
            <option>	Rockhopper 27.5 2021		</option>
            <option>	Rockhopper Comp 27.5 2x 2021		</option>
            <option>	Rockhopper Comp 29 2x 2020		</option>
            <option>	Rockhopper Elite 29 2021		</option>
            <option>	Rockhopper Expert 29 2021		</option>
            <option>	Rockhopper Sport 27.5 2021		</option>
            <option>	Rockhopper Sport 29 2021		</option>
            <option>	Roubaix Comp 2020		</option>
            <option>	Roubaix Comp 2021		</option>
            <option>	Roubaix Comp Di2 2020		</option>
            <option>	Roxter eRIDE 24 2020		</option>
            <option>	Savoie Lady 2020		</option>
            <option>	Scale 20 2021		</option>
            <option>	Scale 20 rigid 2021		</option>
            <option>	Scale 940 2021		</option>
            <option>	Scale 950 2021		</option>
            <option>	SDURO Trekking S 8.0 Herren 500Wh 20G XT 2019		</option>
            <option>	SDURO Trekking S 9.0 Herren i500Wh 11 XT 2019		</option>
            <option>	Silence eRIDE 20 Men 2020		</option>
            <option>	Sinus iN8 Einrohr i500Wh 28" 8-G Nexus 2019		</option>
            <option>	Sinus iX10 Diamant 2020		</option>
            <option>	Sinus iX10 Wave 2020		</option>
            <option>	Sinus Tria N7 2020		</option>
            <option>	Solero SL 24 Trapez 2020		</option>
            <option>	Solero SL Disc Wave 2020		</option>
            <option>	Sonic EVA 1 27,5 (625 Wh) 2020		</option>
            <option>	Spark 950 2021		</option>
            <option>	Spark 970 2021		</option>
            <option>	Spark RC 900 Team 2020		</option>
            <option>	Speedster Gravel 30 2021		</option>
            <option>	S-Pro 16-1 Alu 2020		</option>
            <option>	S-Pro 18-1 Alu 2020		</option>
            <option>	Stereo 120 HPC TM 29 2021		</option>
            <option>	Stereo 120 Race 29 2021		</option>
            <option>	Stereo 140 HPC Race 27.5 2021		</option>
            <option>	Stereo 140 HPC SL 27.5 2021		</option>
            <option>	Stereo 150 C:62 Race 29 2020		</option>
            <option>	Stereo 150 C:62 Race 29 2021		</option>
            <option>	Stereo Hybrid 120 Pro 625 2021		</option>
            <option>	Stereo Hybrid 120 Pro Allroad 625 2021		</option>
            <option>	Stereo Hybrid 120 Race 625 2020		</option>
            <option>	Stereo Hybrid 120 Race 625 2021		</option>
            <option>	Stereo Hybrid 140 HPC Race 625 2020		</option>
            <option>	Stereo Hybrid 140 HPC Race 625 2021		</option>
            <option>	Stereo Hybrid 140 HPC Race 625 team 2021		</option>
            <option>	Stereo Hybrid 140 HPC SL 625 2021		</option>
            <option>	Stereo Hybrid 140 HPC SLT 625 2020		</option>
            <option>	Stereo Hybrid 140 HPC TM 625 2021		</option>
            <option>	Stereo Hybrid 160 HPC Actionteam 625 27.5 Kiox 2021		</option>
            <option>	Stereo Hybrid 160 HPC SL 625 27.5 2021		</option>
            <option>	Stereo Hybrid 160 HPC TM 625 27.5 2021		</option>
            <option>	STIGMATA 3 CC GRX 22G 2021		</option>
            <option>	Strike eRIDE 910 2021		</option>
            <option>	Strike eRIDE 920 2021		</option>
            <option>	Strike eRIDE 930 2021		</option>
            <option>	Stumpjumper Alloy 2021		</option>
            <option>	Stumpjumper Comp Alloy 2021		</option>
            <option>	Sub Sport eRIDE 10 Diamant 2021		</option>
            <option>	Sub Sport eRIDE 10 Lady 2020		</option>
            <option>	Sub Sport eRIDE 10 Trapez 2021		</option>
            <option>	Sub Sport eRIDE 20 Diamant 2021		</option>
            <option>	Sub Sport eRIDE 20 Trapez 2021		</option>
            <option>	Sub Tour eRIDE 10 Diamant 2021		</option>
            <option>	Sub Tour eRIDE 10 Lady gold 2020		</option>
            <option>	Sub Tour eRIDE 10 Men 2020		</option>
            <option>	Sub Tour eRIDE 10 USX 2020		</option>
            <option>	Supercaliber 9.7 2020		</option>
            <option>	Supercaliber 9.8 GX 2021		</option>
            <option>	S-Works Epic 2021		</option>
            <option>	S-Works Levo SL 29 2020		</option>
            <option>	S-Works Stumpjumper SRAM AXS 29 2020		</option>
            <option>	S-Works Turbo Levo 2021		</option>
            <option>	S-Works Turbo Levo SL 2021		</option>
            <option>	T 3.0 Herren 2020		</option>
            <option>	T 7.0 Herren 2020		</option>
            <option>	Talon E+ 2 29er 2021		</option>
            <option>	Taniwha 29" 2020		</option>
            <option>	Taniwha 29" 2021		</option>
            <option>	Tarmac SL6 2021		</option>
            <option>	Tarmac SL6 Comp 2021		</option>
            <option>	Tarmac SL6 Sport 2021		</option>
            <option>	Tarmac SL7 Expert 2021		</option>
            <option>	Tempt E+ 1 27,5 2021		</option>
            <option>	Tesoro Neo X 2 Remixte 2020		</option>
            <option>	THRON2 6.8 EQP 12G 2020		</option>
            <option>	THRON2 6.9 12G 2020		</option>
            <option>	Tonga 27.5" 2020		</option>
            <option>	Tonga 29" 2021		</option>
            <option>	Top Fuel 9.7 2020		</option>
            <option>	Topstone 1 2021		</option>
            <option>	Topstone Carbon 105 2020		</option>
            <option>	Topstone Carbon 5 2021		</option>
            <option>	Topstone Carbon Lefty 3 2021		</option>
            <option>	Topstone Carbon Ultegra RX 2 2020		</option>
            <option>	Tour Nexus 24" Girl 2020		</option>
            <option>	Touring EXC Diamant 2021		</option>
            <option>	Touring Hybrid 500 2019		</option>
            <option>	Touring Hybrid EXC 500 2020		</option>
            <option>	Touring Hybrid EXC 625 Diamant 2021		</option>
            <option>	Touring Hybrid EXC 625 Trapez 2021		</option>
            <option>	Touring Hybrid ONE 625 Diamant 2021		</option>
            <option>	Touring Hybrid ONE 625 Trapez 2021		</option>
            <option>	Touring Hybrid Pro 500 2020		</option>
            <option>	Touring Hybrid Pro 625 Diamant 2021		</option>
            <option>	Touring Hybrid Pro 625 Trapez 2021		</option>
            <option>	Touring ONE Diamant 2021		</option>
            <option>	Touring ONE Trapez 2021		</option>
            <option>	TourRay 3.0 Diamant 2021		</option>
            <option>	TourRay 3.0 Trapez 2021		</option>
            <option>	TourRay 3.0 Wave 2021		</option>
            <option>	TourRay E 5.0 Gent 2020		</option>
            <option>	TourRay E 6.0 Diamant 2021		</option>
            <option>	TourRay E 6.0 Wave 2021		</option>
            <option>	TourRay E 7.0 Diamant 2021		</option>
            <option>	TourRay E 7.0 Gent 2020		</option>
            <option>	TourRay E 7.0 Trapez 2020		</option>
            <option>	TourRay E 8.0 Wave 2020		</option>
            <option>	Trail SL 3 2021		</option>
            <option>	Trance E+ 0 Pro 2020		</option>
            <option>	Trance E+ 1 Pro 2020		</option>
            <option>	Trance E+ 2 Pro 2020		</option>
            <option>	Trance X E+ 2 2021		</option>
            <option>	Trance X E+ 3 2021		</option>
            <option>	Treadwell Neo EQ 2020		</option>
            <option>	Turbo Como 4.0 700C Low-Entry 2021		</option>
            <option>	Turbo Creo SL Comp Carbon 2021		</option>
            <option>	Turbo Creo SL Comp Carbon EVO 2021		</option>
            <option>	Turbo Creo SL Comp E5 2021		</option>
            <option>	Turbo Creo SL Expert 2020		</option>
            <option>	Turbo Creo SL Expert Evo 2020		</option>
            <option>	Turbo Creo SL Expert EVO 2021		</option>
            <option>	Turbo Levo 2021		</option>
            <option>	Turbo Levo Comp 2020		</option>
            <option>	Turbo Levo Comp 2021		</option>
            <option>	Turbo Levo Expert Carbon 2021		</option>
            <option>	Turbo Levo Expert Carbon 29 2020		</option>
            <option>	Turbo Levo Hardtail Comp 2020		</option>
            <option>	Turbo Levo SL Comp Carbon 2021		</option>
            <option>	Turbo Levo SL Expert Carbon 2021		</option>
            <option>	Turbo Vado 3.0 2020		</option>
            <option>	Turbo Vado 3.0 Step-Through 2020		</option>
            <option>	Turbo Vado 3.0 Step-Through 2021		</option>
            <option>	Turbo Vado 4.0 2020		</option>
            <option>	Turbo Vado 4.0 2021		</option>
            <option>	Turbo Vado 4.0 Step-Through 2020		</option>
            <option>	Turbo Vado 4.0 Step-Through 2021		</option>
            <option>	Turbo Vado 5.0 2020		</option>
            <option>	Turbo Vado 5.0 Step-Through 2020		</option>
            <option>	Turbo Vado 6.0 2020		</option>
            <option>	Turbo Vado SL 4.0 2021		</option>
            <option>	Turbo Vado SL 4.0 EQ 2021		</option>
            <option>	Turbo Vado SL 5.0 2021		</option>
            <option>	Turbo Vado SL 5.0 EQ 2021		</option>
            <option>	Turbo Vado SL 5.0 EQ 2021		</option>
            <option>	TX-E 2019		</option>
            <option>	Vapor 2x11 2021		</option>
            <option>	Vitess N8 Belt Gent 2021		</option>
            <option>	Wahoo 24 2019		</option>
            <option>	WUTSCH 2020		</option>
            <option>	X 1.0 Herren 2020		</option>
            <option>	XDURO AllMtn 3.0 2020		</option>
            <option>	XDURO AllMtn 5.0 2019		</option>
            <option>	Yakun tour 2020		</option>
            <option>	ZL 12-1 Alu 2020		</option>
            <option>	ZL 12-1 Alu lila 2017		</option>
            <option>	ZL 16 Alu lila 2017		</option>
            <option>	ZL 16-1 Alu 2020		</option>
            <option>	ZL 18 Alu blau 2017		</option>
            <option>	ZL 18 Alu grün 2017		</option>
            <option>	Zouma Deluxe+ Diamant 2020		</option>
            <option>	Zouma Deluxe+ TIE 2020		</option>
            <option>-----------------------------------</option>
            <option>Sonstige</option>
        </select>
    </label>

    <label style="display:inline-block;">Geschlecht<br />
        <select name="sex" style="width: 297px">
            <option>Bitte auswählen</option>
            <option>-------------------------------------</option>
            <option>Damen</option>
            <option>Herren</option>
            <option>Unisex</option>
            <option>Kinder</option>
            <option>-------------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;margin-left:15px;">Gänge<br />
        <select name="gear" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
            <option>8</option>
            <option>9</option>
            <option>10</option>
            <option>11</option>
            <option>12</option>
            <option>14</option>
            <option>16</option>
            <option>18</option>
            <option>20</option>
            <option>21</option>
            <option>22</option>
            <option>24</option>
            <option>27</option>
            <option>30</option>
            <option>Stufenlos</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Rahmenmaterial<br />
        <select name="frame_material" style="width: 297px">
            <option>Bitte auswählen</option>
            <option>-------------------------------------</option>
            <option>Aluminium</option>
            <option>Carbon</option>
            <option>Stahl</option>
            <option>Holz</option>
            <option>-------------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;margin-left:15px;">Rahmenform<br />
        <select name="frame_shape" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>Diamant</option>
            <option>Tiefeinsteiger</option>
            <option>Damen Sport</option>
            <option>Fully</option>
            <option>Y-Form</option>
            <option>Doppelrohr</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Rahmenhöhe<br />
        <input name="frame_height" type="text" class="m" placeholder="in cm">
    </label>

    <label style="display:inline-block;margin-left:15px">Laufradgröße<br />
        <select name="wheel_size" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>12"</option>
            <option>14"</option>
            <option>16"</option>
            <option>18"</option>
            <option>20"</option>
            <option>22"</option>
            <option>24"</option>
            <option>26"</option>
            <option>27"</option>
            <option>27,5"</option>
            <option>27,5+"</option>
            <option>28"</option>
            <option>29"</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Federweg<br />
        <input name="spring_travel" type="text" class="m" placeholder="in mm">
    </label>

    <label style="display:inline-block;margin-left:15px;">Federung<br />
        <select name="spring" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>Mit Federung</option>
            <option>Mit Starrgabel</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Gewicht<br />
        <input name="weight" type="text" class="m" placeholder="in kg">
    </label>

    <label style="display:inline-block;margin-left:15px;">Farbe<br />
        <select name="color" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>Schwarz</option>
            <option>Grau</option>
            <option>Blau</option>
            <option>Grün</option>
            <option>Weiß</option>
            <option>Rot</option>
            <option>Silber</option>
            <option>Lila</option>
            <option>Pink</option>
            <option>Orange</option>
            <option>Gelb</option>
            <option>Türkis</option>
            <option>Braun</option>
            <option>Bronze</option>
            <option>Beige</option>
            <option>Gold</option>
            <option>Bunt</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;">Bremse<br />
        <select name="brake" style="width: 297px">
            <option>Bitte auswählen</option>
            <option>-------------------------------------</option>
            <option>Felgenbremse</option>
            <option>Scheibenbremse</option>
            <option>Rücktrittbremse</option>
            <option>V-Brake</option>
            <option>-------------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <label style="display:inline-block;margin-left:15px;">Motor<br />
        <select name="engine" class="m">
            <option>Bitte auswählen</option>
            <option>-----------------------------------</option>
            <option>AEG</option>
            <option>Bafang</option>
            <option>Bosch</option>
            <option>Shimano Steps</option>
            <option>Yamaha</option>
            <option>Giant SyncDrive</option>
            <option>Panasonic</option>
            <option>Specialized</option>
            <option>Stromer</option>
            <option>Fazua</option>
            <option>Ebikemotion</option>
            <option>TQ</option>
            <option>Brose</option>
            <option>SR Suntour</option>
            <option>Impulse</option>
            <option>Coninental</option>
            <option>Bafang</option>
            <option>Rocky Muontain</option>
            <option>Coboc</option>
            <option>Groove</option>
            <option>Xion</option>
            <option>EC Mobility</option>
            <option>8Fun</option>
            <option>Bianchi</option>
            <option>e-motion</option>
            <option>FLYON</option>
            <option>Go SwissDrive</option>
            <option>Mahle</option>
            <option>Neodrive</option>
            <option>-----------------------------------</option>
            <option>Sonstiges</option>
        </select>
    </label>

    <button style="width: 600px;">Anzeige veröffentlichen</button>

    <p style="font-size: 21px; color: gray;">* Mit Stern gekennzeichnete Felder müssen ausgefüllt werden.</p>

    </div>
</form>

<script type="text/javascript" src="../../JS/add_item.js"></script>

</div>
</body>
</html>
