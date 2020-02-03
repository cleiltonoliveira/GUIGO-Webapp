function Padder(len, pad) {
    if (len === undefined) {
      len = 1;
    } else if (pad === undefined) {
      pad = '0';
    }
  
    var pads = '';
    while (pads.length < len) {
      pads += pad;
    }
  
    this.pad = function (what) {
      var s = what.toString();
      return pads.substring(0, pads.length - s.length) + s;
    };
}

function InsertDB() {
    
    $.ajax({
        url: 'views/Controller.php',
        method: 'POST',
        dataType: 'json',
        data: {
            method: "insertDB",
            param: null
        },
        success: function (data) {
            console.log(data.msg);
        }
    });
}

function SelectDB() {
    $.ajax({
        url: 'views/Controller.php',
        method: 'POST',
        dataType: 'json',
        data: {
            method: "selectDB",
            param: null
        },
        success: function (data) {
            SetChartUpdate(data);
        }
    });
}

function SetChart(receive) {
    
    let temperatura = [];
    let luminosidade = [];
    let humidade = [];
    let ph =[];
    let o2 = [];
    let ce = [];
    var data =[];
    for (let i = 0; i < 7; i++) {
        data[i] = receive[i].data;
        temperatura[i] = parseInt(receive[i].temperatura);
        luminosidade[i] = parseInt(receive[i].luminosidade);
        humidade[i] = parseInt(receive[i].umidade);
        ph[i] = parseInt(receive[i].ph);
        o2[i] = parseInt(receive[i].o2);
        ce[i] = parseInt(receive[i].ce);
    }

    
    ndate = [];

    data.forEach(element => {
         ndate.push(new Date(element));
    });

    var data = [];
    var zero4 = new Padder(2);
    ndate.forEach(element => {
       
        data.push(element.getMinutes() + ':' + zero4.pad(element.getSeconds()));
    });


    chart1.data.datasets[0].data = temperatura;
    chart1.data.labels = data;

    chart2.data.datasets[0].data = luminosidade;
    chart2.data.labels = data;

    chart3.data.datasets[0].data = humidade;
    chart3.data.labels = data;
    
    chart4.data.datasets[0].data = ph;
    chart4.data.labels = data;

    chart5.data.datasets[0].data = o2;
    chart5.data.labels = data;

    chart6.data.datasets[0].data = ce;
    chart6.data.labels = data;

    chart1.update();
    chart2.update();
    chart3.update();
    chart4.update();
    chart5.update();
    chart6.update();
}

let first_update = 0;

function SetChartUpdate(receive) {

    if (first_update != 1) {
        SetChart(receive);
        first_update = 1;
    }

    let temperatura = [];
    let luminosidade = [];
    let humidade = [];
    let ph =[];
    let o2 = [];
    let ce = [];
    var data =[];
    for (let i = 0; i < 7; i++) {
        data[i] = receive[i].data;
        temperatura[i] = parseInt(receive[i].temperatura);
        luminosidade[i] = parseInt(receive[i].luminosidade);
        humidade[i] = parseInt(receive[i].umidade);
        ph[i] = parseInt(receive[i].ph);
        o2[i] = parseInt(receive[i].o2);
        ce[i] = parseInt(receive[i].ce);
    }

    ndate = [];

    // -- Inicio do filtro do minuto e segundo
    data.forEach(element => {
         ndate.push(new Date(element));
    });
    var data = [];
    var zero4 = new Padder(2);
    ndate.forEach(element => {
       
        data.push(element.getMinutes() + ':' + zero4.pad(element.getSeconds()));
    });

    // -- Fim do filtro

    document.getElementById('v-temp').innerHTML = temperatura[0];
    chart1.data.datasets[0].data.push(temperatura[0]);
    chart1.data.datasets[0].data.shift();
    chart1.data.labels = data;
    
    document.getElementById('v-lumi').innerHTML = luminosidade[0];
    chart2.data.datasets[0].data.push(luminosidade[0]);
    chart2.data.datasets[0].data.shift();
    chart2.data.labels = data;

    document.getElementById('v-humi').innerHTML = humidade[0];
    chart3.data.datasets[0].data.push(humidade[0]);
    chart3.data.datasets[0].data.shift();
    chart3.data.labels = data;

    document.getElementById('v-pote').innerHTML = ph[0];
    chart4.data.datasets[0].data.push(ph[0]);
    chart4.data.datasets[0].data.shift();
    chart4.data.labels = data;

    document.getElementById('v-o2').innerHTML = o2[0];
    chart5.data.datasets[0].data.push(o2[0]);
    chart5.data.datasets[0].data.shift();
    chart5.data.labels = data;

    document.getElementById('v-ce').innerHTML = ce[0];
    chart6.data.datasets[0].data.push(ce[0]);
    chart6.data.datasets[0].data.shift();
    chart6.data.labels = data;
    
    chart1.update();
    chart2.update();
    chart3.update();
    chart4.update();
    chart5.update();
    chart6.update();
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
  
async function rotina() {

    while (true) {
        SelectDB();
        await sleep(5000);
        InsertDB();
    }
}

$(function() {    
    rotina();
});