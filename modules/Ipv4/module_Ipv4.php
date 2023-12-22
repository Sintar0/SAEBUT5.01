<?php
$navbar = Include "../../component/navbar_module.php";
$footer = Include "../../component/footer.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/default.css">
    <link rel="stylesheet" href="../../css/module_Ipv4.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <title>Hoguins Memory | Ipv4</title>
</head>
<body>
    <?php
        echo $navbar;
    ?>
    <main>
        <h1>Module Ipv4</h1>
        <div id="content">
            <div id="div_left">
                 <form action="traitement_Ipv4.php" method="POST">
                    <div id="div_inputs">
                        <div id="ip_mask">
                            <div class="label_i ipv4">
                                <label for="inputIpv4">Adresse Ipv4/Host</label>
                                <input id="inputIpv4" name="inputIpv4" type="text" placeholder="ex : 192.168.0.1" maxlength="15" minlength="6" pattern="^((25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.){3}(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$" required>
                            </div>
                            <span>/</span>
                            <div class="label_i mask">
                                <label for="inputMask">Masque</label>
                                <input id="inputMask" name="inputMask" type="number" value="24" min="0" max="32" required>
                            </div>
                            <div class="label_i nbSubnet">
                                <label for="inputNbSubnet">Nb. sous-réseaux</label>
                                <select name="inputNbSubnet" id="inputNbSubnet" onchange="handleNewNbSubnet()" required>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9" >9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div id="div_submit">
                        <input type="submit" id="input_submit" value="Calculer" name="input_submit"/>
                    </div>
                </form>
            </div>
            <div id="div_right">
                <label for="result" id="resultLabel">Résultat</label>
                <textarea id="result" readonly rows="4" cols="50">
<?php
if (isset($_COOKIE['returnIpv4']))
	echo $_COOKIE['returnIpv4'];
?>
<?php
if (isset($_COOKIE['errorNbMachine']))
	echo $_COOKIE['errorNbMachine'];
?>
                </textarea>
            </div>
        </div>
    </main>
    <?php
        echo $footer;
    ?>
    <script src="../../scripts/add_remove_input.js" onload="handleNewNbSubnet(2)"></script>
</body>
</html>