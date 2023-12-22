nbSubnet = document.getElementById("inputNbSubnet");
inputdiv = document.getElementById("div_inputs");
let subnetList = [];
let letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];

createNewSubnet = function(i) {
    let div = document.createElement("div");
    div.id = "nbPcRow";
        let divNameNet = document.createElement("div");
        divNameNet.classList.add("label_i");
        divNameNet.classList.add("nameNet");
        let labelNameNet = document.createElement("label");
        labelNameNet.htmlFor = `inputNameNet_${i}`;
        labelNameNet.textContent = `Nom du réseau ${i}`;
        let inputNameNet = document.createElement("input");
        inputNameNet.type = "text";
        inputNameNet.name = `inputNameNet_${i}`;
        inputNameNet.id = `inputNameNet_${i}`;
        inputNameNet.classList.add("inputNameNet");
        inputNameNet.required = true;
        inputNameNet.placeholder = `ex : Réseau ${letters[i-1]}`;

        divNameNet.appendChild(labelNameNet);
        divNameNet.appendChild(inputNameNet);
        div.appendChild(divNameNet);

        let divNbPc = document.createElement("div");
        divNbPc.classList.add("label_i");
        divNbPc.classList.add("nbpc");
        let labelNbPc = document.createElement("label");
        labelNbPc.htmlFor = `inputNbPc_${i}`;
        labelNbPc.textContent = "Nb. PC";
        let inputNbPc = document.createElement("input");
        inputNbPc.type = "number";
        inputNbPc.name = `inputNbPc_${i}`;
        inputNbPc.id = `inputNbPc_${i}`;
        inputNbPc.classList.add("inputNbPc");
        inputNbPc.value = "10";
        inputNbPc.min = "0";
        inputNbPc.required = true;

        divNbPc.appendChild(labelNbPc);
        divNbPc.appendChild(inputNbPc);
        div.appendChild(divNbPc);
    return div;
}

handleNewNbSubnet = function(i) {
    let value;
    if(i) {
        value = i;
    } else {
        value = nbSubnet.value;
    }
    if(subnetList.length < value) {
        for(let i = subnetList.length; i < value; i++) {
            subnetList.push(createNewSubnet(subnetList.length + 1));
        }
        subnetList.forEach(element => {
            inputdiv.appendChild(element);
        });
    } else {
        for(let i = subnetList.length; i > value; i--) {
            subnetList.pop().remove();
        }
    }
}