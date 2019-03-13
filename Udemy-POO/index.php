<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exo POO - Udemy</title>
</head>
<body>
    <?php include('Terre.php');
    $terre = new Terre();
    ?>
    <div id="content">
    <h1>Hello! Je suis une <?php echo $terre->type .'' . $terre->form; ?> du nom de <?php echo $terre->nom; ?></h1>

    </div>



</body>
</html>