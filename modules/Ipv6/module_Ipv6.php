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
    <link rel="stylesheet" href="../../css/module_Ipv6.css">
    <link rel="icon" type="image/png" href="../../img/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
    <title>Hoguins Memory | Ipv6</title>
</head>
<body>
    <?php
        echo $navbar;
    ?>
    <main>
        <h1>Module Ipv6</h1>
        <div id="content">
            <div id="div_left">
                 <form action="traitement_IPV6.php" method="POST">
                    <div id="div_inputs">
                        <label for="inputIpv6">Ipv6 valide (":" automatiques)</label>
                        <input id="inputIpv6" name="inputIpv6" type="text" placeholder="ex : 61fd:6da5:b89f:fd68:07d4:bbc5:146e:96cd" pattern="^(?:[0-9a-fA-F]{1,4}:){7}[0-9a-fA-F]{1,4}$" maxlength="39" minlength="39" required>
                        <?php
                            if (isset($_COOKIE['badValue'])) {
                                echo "<p id=\"badValue\">".$_COOKIE['badValue'];
                            }
                        ?>
                    </div>
                    <div id="div_submit">
                        <input type="submit" id="input_submit" value="Simplifier/Savoir la classe" name="input_submit"/>
                    </div>
                </form>
            </div>
            <div id="div_right">
                <label for="result" id="resultLabel">Résultat</label>
                <textarea id="result" readonly rows="4" cols="50">
<?php
if (isset($_COOKIE['typeIpv6'])) {
    echo $_COOKIE['typeIpv6'];
}
?>

<?php
if (isset($_COOKIE['simplifyIpv6'])) {
    echo "Simplification de l'adresse : " . $_COOKIE['simplifyIpv6'];
}
?>
                </textarea>
            </div>
        </div>
    </main>
    <?php
        echo $footer;
    ?>
    <script src="../../scripts/ip_autocomplete.js"></script>
</body>
</html>