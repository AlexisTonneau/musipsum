


$(document).ready(function () {
    $("#search").autocomplete({
        source: 'francais/models/Autocompletion.php',
        minLength: 3,
        select: function (event,ui) {
           $('#search').val(ui.item.value)
        },
    });
})
function ajaxRequest() {
var req = new XMLHttpRequest();
//console.log(test_id+captor_type);
req.open("GET", "http://127.0.0.1/musipsum/fr/ajax/autocomplete", false);
req.send(null);
console.log(req.responseText);
return  JSON.parse(req.responseText);
}












/*var searchElement = document.getElementById('bar'),
    results = document.getElementById('search'),
    selectedSearch = -1,
    previousRequest,
    previousValue = searchElement.value;

function getResults(keyword){//On créé l'objet xml XMLHttpRequest
    if (window.XMLHttpRequest) {//
        xmlhttp = new XMLHttpRequest();
    } else {
        if (window.ActiveXObject)
            try {
                xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    return NULL;
                }
            }
    }


//regarder pour faire en GET
    xmlhttp.open('POST','./controllers/ControllerAdministration.php');//envoie la requete au serveur
    xmlhttp.send()

    xmlhttp.onreadystatechange=function () { //traite la réponse du serveur
        if (xmlhttp.readyState==4 && xmlhttp.status==200){
           //==4 signifie que la demande est terminée et que la réponse prête
           //==200 signifie que la requete est terminée 'OK'
            displayResults(xmlhttp.responseText);//parametre prend la chaine de caractères de tous les noms & prenoms
        }
    }

    xmlhttp.send(null);
    return xmlhttp;

}

function displayResults(response){
    search.style.display = response.length?'block':'none';//block si la chaine de caractères a un contenu, none sinon
    if(response.length) {
        response = response.split('|');
        var responseLength = response.length;

        search.innerHTML=''; //on vide les anciens résultats

        for (var i=0 ; i < responseLength ; i++) {
            var div;
            div = search.appendChild( document.createElement('div') );
            div.innerHTML = response[i];

            div.addEventListener('click',function (e) {
                chooseResult(e.target);
            })
        }
    }
}

function chooseResult(result){
    searchElement.value = previousValue = result.innerHTML;
    search.style.display = 'none';
    search.className = '';
    selectedSearch = -1;
    searchElement.focus();
    //voir pour afficher la page de l'utilisateur souhaitée
}

searchElement.addEventListener('keyup', function (e) {
    var divs = results.getElementsByTagName('div');

    if (e.key == 38 && selectedSearch > -1){
        divs[selectedSearch--].className='';

        if (selectedResult > -1){
            divs[selectedSearch].className='result_focus';
        }

    }

    else if (e.key==40 && selectedSearch<divs.length-1){
        results.style.display = 'block';
        if (selectedSearch > -1){
            divs[selectedSearch].className='';
        }
        divs[++selectedSearch].className='result_focus';
    }
})*/
