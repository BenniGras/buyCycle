<!DOCTYPE html>
<html>
<head>
    <title>byeCycle - Anmelden</title>
    <meta http-equice="content-type" content="text/html" charset="utf-8"/>
    <link rel="stylesheet" href="../../CSS/style.css">
    <link rel="stylesheet" href="../../CSS/header.css">
    <link rel="stylesheet" href="../../CSS/login.css">
</head>
<body>

<?php if(!empty($error)): ?>
    <p>
        <?php echo $error ?>
    </p>
<?php endif; ?>

<div class="form">
    <div class="content">
    <form method="post" action="">
        <div class="input_div">
        <input style="width: 487px;" name="password" type="password" placeholder="Passwort" required>
        </div>
        <button style="width: 500px;">Login</button>
    </form>
    </div>
</div>
</body>
</html>