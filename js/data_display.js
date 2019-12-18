window.onload = function () {
    var id = document.getElementById('test_id').textContent;
    var req2 = new XMLHttpRequest();
    req2.open("GET", "http://127.0.0.1/musipsum/ajax/graph/"+id, false);
    req2.send(null);
    console.log(req2.responseText);
    for (var i=0; i<req2.responseText.length;i++){
        if(req2.responseText[i] === "1"){
            createChartTemp(id);
        }

        if(req2.responseText[i] === "2"){
            createChartFreq(id);
        }
    }






};

function ajaxRequest(test_id,captor_type) {
    var req = new XMLHttpRequest();
    req.open("GET", "http://127.0.0.1/musipsum/ajax/graph/"+test_id+"/"+captor_type, false);
    req.send(null);
    console.log(req.responseText);
    return  JSON.parse(req.responseText);

}



function createChartTemp(test_id) {
    var rep = ajaxRequest(test_id,"1");
    var dps = []; // dataPoints
    var chart = new CanvasJS.Chart("chartContainerTemp", {
        animationEnabled: true,
        title :{
            text: "Température",
            //fontFamily: "gotham-book,serif",
        },
        axisY: {
            minimum: 30,
            title:"Valeur (en °C)",
            includeZero: false,
        },
        axisX:{
            title: "Temps (en s)",
            minimum: 0,
        },
        data: [{
            type: "line",
            dataPoints: dps,
        }]
    });
    addData(rep, chart, dps);
}

function createChartFreq(test_id) {
    var rep = ajaxRequest(test_id,"2");
    var dps = []; // dataPoints
    var chart = new CanvasJS.Chart("chartContainerFreq", {
        animationEnabled: true,

        title :{
            text: "Tension cardiaque",
            //fontFamily: "gotham-book,serif",
        },
        axisY: {
            minimum: 50,
            title:"Valeur (en bpm)",
            includeZero: false,
        },
        axisX:{
            title: "Temps (en s)",
            minimum: 0,
        },
        data: [{
            type: "line",
            dataPoints: dps,
        }]
    });
    addData(rep, chart, dps);

}

function addData(data, chart, dps) {
    for (var i = 0; i < data.length; i++) {
        var date = data[i][1]-data[0][1];

        dps.push({
            x: date,
            y: data[i][2]
        });
    }


    chart.render();
}

/*function subDates(date, refDate) {
    date.setFullYear(date.getFullYear()-refDate.getFullYear());
    date.setMonth(date.getMonth()-refDate.getMonth());
    date.setDate(date.getDate()-refDate.getDate());
    date.setHours(date.getHours()-refDate.getHours());
    date.setMinutes(date.getMinutes()-refDate.getMinutes());
    date.setSeconds(date.getSeconds()-refDate.getSeconds());

}*/
