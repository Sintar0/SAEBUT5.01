preview = document.getElementById('inputPrev');
domain = document.getElementById('inputDomain');

flag_c = document.getElementById('inputC');

flag_d = document.getElementById('inputD');
flag_q = document.getElementById('inputQ');

function updatePreview() {
    preview.value = "ping " + domain.value + " -c " + flag_c.value;
    if (flag_d.checked) {
        preview.value += " -D";
    }
    if (flag_q.checked) {
        preview.value += " -q ";
    }
}