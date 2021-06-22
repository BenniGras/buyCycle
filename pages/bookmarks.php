<!DOCTYPE html>
<html>
<head>
    <title>byeCycle - Merkliste</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/filter.css">
    <link rel="stylesheet" href="../../CSS/preview.css">
</head>
<body>
<?php include "../components/header.php";?>

<div style="display:flex;">
    <?php include "../components/filter.html";?>

    <div style="display:flex;flex-direction:column;flex-grow:1;">
        <?php include "../components/preview.php";?>
    </div>
</div>

</body>
</html>