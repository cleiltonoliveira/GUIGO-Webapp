
var ctx = document.getElementById('lumino').getContext('2d');
var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: ['Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sabado', 'domingo'],
    datasets: [{
        label: 'Humidade',
        borderColor:'rgb(35, 107, 35)',
        data: [70, 10, 40, 20, 70, 90, 40]
        }]
},

// Configuration options go here
options: {}
});