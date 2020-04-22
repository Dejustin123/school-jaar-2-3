//variabelen
var titel = document.getElementById('titel');
var mening = document.getElementById('mening')

var vraag = 0;
var stemmen = [];
var wquestions = []

const partiesSize = 5;

var pointsToParty = {
    "PVV": 0,
    "SP": 0,
    "D66": 0,
    "GroenLinks": 0,
    "Partij voor de Dieren": 0,
    "50Plus": 0,
    "VNL": 0,
    "Nieuwe Wegen": 0,
    "Forum voor Democratie": 0,
    "De Burger Beweging": 0,
    "Vrijzinnige Partij": 0,
    "Piratenpartij": 0,
    "Libertarische Partij": 0,
    "Lokaal in de Kamer": 0,
    "Niet Stemmers": 0,
    "VVD": 0,
    "PvdA": 0,
    "CDA": 0,
    "ChristenUnie": 0,
    "SGP": 0,
    "OndernemersPartij": 0,
    "DENK": 0,
    "Artikel 1": 0
}

//styles
oneensbtn.style.display = 'none';
geenbtn.style.display = 'none';
eensbtn.style.display = 'none';
backbtn.style.display = 'none';
partijbtn.style.display = 'none';
finishbtn.style.display = 'none';
resultbtn.style.display = 'none';
partijen.style.display = 'none';
bigPartiesButton.style.display = "none";
secularPartiesButton.style.display = "none";


//start function
start = () => {
    startbtn.style.display = 'none';
    oneensbtn.style.display = 'inline-block';
    geenbtn.style.display = 'inline-block';
    eensbtn.style.display = 'inline-block';
    backbtn.style.display = 'inline-block';
    partijbtn.style.display = 'inline-block';
    bigPartiesButton.style.display = "inline-block";
    secularPartiesButton.style.display = "inline-block";
    laadvraag(vraag);
    loadBigParties();
    loadSecularParties();
}


//laden van vragen
function laadvraag(question) {
    if (question < 29) {
        titel.innerText = subjects[question]["title"];
        mening.innerText = subjects[question]["statement"];
    } else {
        oneensbtn.style.display = 'none';
        geenbtn.style.display = 'none';
        eensbtn.style.display = 'none';
        finishbtn.style.display = 'inline-block';

    }


}

function stem(vote) {
    stemmen[vraag] = vote;
    vraag++;
    laadvraag(vraag);

}
//vraag terug
function terug() {
    if (vraag > 0) {
        oneensbtn.style.display = 'inline-block';
        geenbtn.style.display = 'inline-block';
        eensbtn.style.display = 'inline-block';
        vraag--;
        laadvraag(vraag);
    }
}


function partijmening() {

    if (partijen.style.display === "none") {
        partijen.style.display = "block";
    } else {
        partijen.style.display = "none";
    }



    subjects[vraag]['parties'].forEach(function (value, key) {
        var PartyName = document.createElement('h1');
        var PartyPosition = document.createElement('p');
        var PartyOpinion = document.createElement('p');
        PartyName.innerText = "Partij: " + value['name'];
        PartyPosition.innerText = "Positie: " + value['position'];
        PartyOpinion.innerText = value['opinion'];
        partijen.appendChild(PartyName);
        partijen.appendChild(PartyPosition);
        partijen.appendChild(PartyOpinion);



    })

}
//kies alle partijen
function toggleAllParties(button) {
     if (button === 'big') {
        bigParties.style.display = "block";
        secularParties.style.display = "none";
    } else if (button === 'secular') {
        bigParties.style.display = "none";
        secularParties.style.display = "block";
    }
}
//laad grote partijen
function loadBigParties() {
    var i = 0;
    parties.forEach(function () {
            if (parties[i]['size'] >= partiesSize) {
                partyName = document.createElement('h5');
                partyLong = document.createElement('p');

                partyName.innerText = parties[i]['name'];

                if (parties[i]['long']) {
                    partyLong.innerText = parties[i]['long'];
                }

                bigParties.appendChild(partyName);
                bigParties.appendChild(partyLong);
                i++;
            }
        }
    );
}
//laden seculaire partijen
function loadSecularParties() {
    var i = 0;
    parties.forEach(function () {
            if (parties[i]['secular'] === true) {
                partyName = document.createElement('h5');
                partyLong = document.createElement('p');

                partyName.innerText = parties[i]['name'];

                if (parties[i]['long']) {
                    partyLong.innerText = parties[i]['long'];
                }

                secularParties.appendChild(partyName);
                secularParties.appendChild(partyLong);
                i++;
            } else {
                i++;
            }
        }
    );
}

finish = () => {
    console.log(stemmen);
    var vraag_id = 0;
    oneensbtn.style.display = 'none';
    geenbtn.style.display = 'none';
    eensbtn.style.display = 'none';
    backbtn.style.display = 'none';
    partijbtn.style.display = 'none';
    finishbtn.style.display = 'none';
    titel.style.display = 'none';
    mening.style.display = 'none';
    resultbtn.style.display = 'inline-block';
    subjects.forEach(function (value) {
        var vraagtitel = document.createElement('p');
        vraagtitel.setAttribute('id', vraag_id);
        vraagtitel.innerText = value['title'];
        vraagtitel.addEventListener('click', function () {
            var elemid = vraagtitel.getAttribute('id')
            weighted(elemid)
        });
        titeldiv.appendChild(vraagtitel);
        vraag_id++;
    })

}


function weighted(vraag_id) {
    if (wquestions.indexOf(vraag_id) == -1) {
        wquestions.push(vraag_id);
    } else {
        var remove = wquestions.indexOf(vraag_id);
        wquestions.splice(remove, 1);
    }
    console.log(wquestions);
}
// resultaten
function results() {
    titeldiv.style.display = 'none';

    for (var i = 0; i < 30; i++) {
        for (var a = 0; a < 23; a++) {
            if (stemmen[i] == subjects[i]["parties"][a]["position"]) {
                if (wquestions.indexOf(i) != -1) {
                    var point = subjects[i]["parties"][a]["name"];
                    pointsToParty[point] += 2;
                    console.log("dubbel")
                } else {
                    var point = subjects[i]["parties"][a]["name"];
                    pointsToParty[point]++;
                    console.log("test");
                }

            };
        };
    };
    printResult(pointsToParty)
};

printResult = () => {

    keysSorted = Object.entries(pointsToParty).sort((a,b) => b[1]-a[1]).map(el=>el[0]);
    console.log(keysSorted);
    
    console.log()
    var names = Object.values(keysSorted)
    console.log(names)

    for (a = 0; a < Object.keys(keysSorted).length; a++) {
        var i = document.createElement('p');
        i.innerHTML = names[a];
        resultdiv.appendChild(i)
    }


}







/* console.log(subjects[0]["parties"][0]["position"]) */




