document.getElementById('inputIpv6').addEventListener('input', function (event) {
    let currentValue = event.target.value;

    // Supprimer les deux-points existants pour éviter la duplication
    currentValue = currentValue.replace(/:/g, '');

    // Ajouter automatiquement les deux-points après chaque groupe de quatre caractères, sauf à la fin
    currentValue = currentValue.replace(/(.{4})(?!$)/g, '$1:');

    event.target.value = currentValue;
});