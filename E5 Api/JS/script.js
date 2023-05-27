function clear (comboBox) {
    while (comboBox.options.length > 0) {
        comboBox.remove(0);
    }
}

function getId() {

    const selectData = document.getElementById("datacenter");
    const selectWorld = document.getElementById("world");


    const value = selectData.options[selectData.selectedIndex].text;


    //World Chaos
    const wCerberus = document.createElement("option");
        wCerberus.value = "Cerberus";
        wCerberus.text = "Cerberus";
    const wLouisoix = document.createElement("option");
        wLouisoix.value = "Louisoix";
        wLouisoix.text = "Louisoix";
    const wMoogle = document.createElement("option");
        wMoogle.value = "Moogle";
        wMoogle.text = "Moogle";
    const wOmega = document.createElement("option");
        wOmega.value = "Omega";
        wOmega.text = "Omega";
    const wphantom = document.createElement("option");
        wphantom.value = "Phantom";
        wphantom.text = "Phantom";
    const wRagnarok = document.createElement("option");
        wRagnarok.value = "Ragnarok";
        wRagnarok.text = "Ragnarok";
    const wSagittarius = document.createElement("option");
        wSagittarius.value = "Sagittarius";
        wSagittarius.text = "Sagittarius";
    const wSpriggan = document.createElement("option");
        wSpriggan.value = "Spriggan";
        wSpriggan.text = "Spriggan";


    //World Light
    const walpha = document.createElement("option");
        walpha.value = "Alpha";
        walpha.text = "Alpha";
    const wlich = document.createElement("option");
        wlich.value = "Lich";
        wlich.text = "Lich";
    const wodin = document.createElement("option");
        wodin.value = "Odin";
        wodin.text = "Odin";
    const wphoenix = document.createElement("option");
        wphoenix.value = "Phoenix";
        wphoenix.text = "Phoenix";
    const wraiden = document.createElement("option");
        wraiden.value = "Raiden";
        wraiden.text = "Raiden";
    const wshiva = document.createElement("option");
        wshiva.value = "Shiva";
        wshiva.text = "Shiva";
    const wtwintania = document.createElement("option");
        wtwintania.value = "Twintania";
        wtwintania.text = "Twintania";
    const wzodiark = document.createElement("option");
        wzodiark.value = "Zodiark";
        wzodiark.text = "Zodiark";


    switch (value) {
        case "Chaos" :
            clear(selectWorld);
            selectWorld.add(wCerberus,null);
            selectWorld.add(wLouisoix,null);
            selectWorld.add(wMoogle,null);
            selectWorld.add(wOmega,null);
            selectWorld.add(wphantom,null);
            selectWorld.add(wRagnarok,null);
            selectWorld.add(wSagittarius,null);
            selectWorld.add(wSpriggan,null);
            break;

        case "Light" :
            clear(selectWorld);
            selectWorld.add(walpha,null);
            selectWorld.add(wlich,null);
            selectWorld.add(wodin,null);
            selectWorld.add(wphoenix,null);
            selectWorld.add(wraiden,null);
            selectWorld.add(wshiva,null);
            selectWorld.add(wtwintania,null);
            selectWorld.add(wzodiark,null);
            break;
    }
}





