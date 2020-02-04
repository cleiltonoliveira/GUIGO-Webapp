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
        url: getRoot() + 'controllers/controllerSlave',
        method: 'POST',
        dataType: 'json',
        data: {
            method: "insertDB"
        },
        success: function (data) {
            console.log(data.msg);
        }
    });
}

function SelectDB(param) {
    $.ajax({
        url: getRoot() + 'controllers/controllerSlave',
        method: 'POST',
        dataType: 'json',
        data: {
            method: "selectDB",
            param: param
        },
        success: function (data) {
            SetChartUpdate(data);
        }
    });
}

function SetChart(receive) {
    
    let variavel = [];
    var data =[];
    for (let i = 0; i < 10; i++) {
        data[i] = receive[i].data;
        variavel[i] = parseInt(receive[i].variavel);
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


    chart1.data.datasets[0].data = variavel;
    chart1.data.datasets[0].label = capitalize(getName());
    chart1.data.labels = data;

    chart1.update();
}

let first_update = 0;

function SetChartUpdate(receive) {

    if (first_update != 1) {
        SetChart(receive);
        first_update = 1;
        first_update_param = '';
    }

    let variavel = [];
    var data =[];
    for (let i = 0; i < 10; i++) {
        data[i] = receive[i].data;
        variavel[i] = parseInt(receive[i].variavel);
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

    document.getElementById('value-var').innerHTML = variavel[0];
    chart1.data.datasets[0].data.push(variavel[0]);
    chart1.data.datasets[0].data.shift();
    chart1.data.labels = data;
    
    chart1.update();
}

function capitalize(s) {
    if (typeof s !== 'string') return '';
    return s.charAt(0).toUpperCase() + s.slice(1);
}

function getName() {
    let name = document.getElementById('name-v').innerHTML;
    return name.toLowerCase();
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}
  
async function rotina() {

    while (true) {
        SelectDB(getName);
        await sleep(5000);
        InsertDB();
    }
}

$(function() {
    rotina();
});