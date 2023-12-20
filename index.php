<?php
$navbar = require 'component/navbar_index.php';
$footer = require 'component/footer.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="icon" type="image/png" href="./img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <title>Hoguins Memory | Home</title>
</head>
<body>
<?php
echo $navbar;
?>
<main id="content">
<div id="content-header">
    <h1>Bienvenue</h1>
</div>
<div id="content-body">
<?php
$dirList = glob("./modules" . '/*' , GLOB_ONLYDIR);
for($i=0; $i < count($dirList); $i++) {
    $fileName = explode("/",$dirList[$i])[2];
    echo "
    <a href='./modules/$fileName/module_$fileName.php'>
    <div id='module'>
        <div id='module-header' style='background-image: url(\"./modules/$fileName/cover_module_$fileName.png\");'>
    </div>
    ";
    echo "
        <div id='module-body'>
            <h2 id='titre_module'>$fileName</h2>
            <p id='description_module'>
        ";
        $fo = fopen("./modules/$fileName/description.txt", "r");
        while(!feof($fo)) {
            $line = fgets($fo);
            echo $line;
        }
        echo "
            </p>
        </div>
    </div>
    </a>
    ";
}
?>
</div>
</main>
