<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Películas</title>
</head>
<body>
    <h1>Listado de Películas</h1>
    <h2><?= $nombreVariableVista; ?></h2>
    <h2><?= $nombreVariableVista2; ?></h2>
    <ul>
        <?php foreach($miArray as $element){ ?>
            <li><?= $element; ?></li>
        <?php } ?>
    </ul>
</body>
</html>