window.onload = function () {
    getMahlzeiten();
}

function getMahlzeiten(){
    var i = 0;
    var content = document.getElementById("content");

    for(i; i < 10; i++){
        var elem = document.createElement("div");
        elem.setAttribute("class","menucontainer");
        elem.setAttribute("onclick","location.href='menu.html'");


        var detail = document.createElement("a");

        var datumcontainer = document.createElement("div");

        var mahlzeitcontainer = document.createElement("div");
        var buttoncontainer = document.createElement("div");


        var datum = $mahlzeitens;
        var mahlzeiten = "Mahlzeit";

        datumcontainer.innerHTML += datum;
        mahlzeitcontainer.innerHTML += mahlzeiten;
        buttoncontainer.innerHTML += "<button>Ja</button>";
        buttoncontainer.innerHTML += "<button>Nein</button>";



        //elem.innerHTML += datum;
        //elem.innerHTML += mahlzeiten;
        elem.appendChild(datumcontainer);
        elem.appendChild(mahlzeitcontainer);
        elem.appendChild(buttoncontainer);





        content.appendChild(elem);
    }
}
