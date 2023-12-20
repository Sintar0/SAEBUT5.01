<?php
$navbar = require '../../component/navbar_module.php';
$footer = require '../../component/footer.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/default.css">
    <link rel="stylesheet" href="../../css/module_Ping.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Hoguins Memory | Ping</title>
    </head>
<body>
<?php
echo $navbar;
?>
    <main>
        <h1>Module Ping</h1>
        <div id="content">
            <div id="div_left">
                <div id="div_prev">
                    <label for="inputPrev">Prévisualisation de la requête :</label>
                    <input id="inputPrev" type="text" value="ping www.example.com -c 3" readonly onkeydown="return false;">
                </div>

                <form action="./traitement_ping.php" method="POST" onchange="updatePreview()">
                    <div id="div_inputs">
                        <label for="inputDomain">Domaine / IP:</label>
                        <input id="inputDomain" name="inputDomain" type="text" value="www.example.com" placeholder="www.example.com" maxlength="100" required onkeyup="updatePreview()">
                        <?php
                            if (isset($_COOKIE['domaineVide'])) {
                                echo "<p id=\"domaineVide\">".$_COOKIE['domaineVide'];
                            }
                        ?>
                        <div id="flags">
                            <div>
                                <label for="inputC">-c :</label>
                                <input id="inputC" name="inputC" type="number" value="3" step="1" min="1" max="15" onchange="updatePreview()">
                            </div>
                            <div>
                                <label for="inputD">-D :</label>
                                <input type="checkbox" id="inputD" name="inputD"/>
                            </div>
                            <div>
                                <label for="inputQ">-q :</label>
                                <input type="checkbox" id="inputQ" name="inputQ"/>
                            </div>
                        </div>
                        <div id="div_go">
                            <input type="submit" id="input_submit" value="GO" name="input_submit"/>
                        </div>
                    </div>
                </form>
            </div>
            <div id="div_right">
                <label for="result" id="resultLabel">Résultat</label>
                <textarea name="result" id="result" readonly rows="4" cols="50">
<?php
    if (isset($_COOKIE['returnRequest'])) {
    echo $_COOKIE['returnRequest'];
    }
?>
                </textarea>
            </div>
        </div>
    </main>
<?php
    echo $footer;
?>
    <script src="../../scripts/command_preview.js"></script>
</body>
</html>