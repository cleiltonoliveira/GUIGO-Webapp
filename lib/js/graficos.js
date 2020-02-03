var ctx = document.getElementById('temp').getContext('2d');
var chart1 = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',
    
    // The data for our dataset
    data: {
        labels: [],
        datasets: [{
            label: 'Temperatura',
            borderColor:'rgb(35, 107, 35)',
            data: []
        }]
    },
    
    // Configuration options go here
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('humild').getContext('2d');
var chart2 = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: [],
    datasets: [{
        label: 'Humidade',
        borderColor:'rgb(35, 107, 35)',
        data: []
    }]
},

// Configuration options go here
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});

var ctx = document.getElementById('lumino').getContext('2d');
var chart3 = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: [],
    datasets: [{
        label: 'Luminosidade',
        borderColor:'rgb(35, 107, 35)',
        data: []
        }]
},

// Configuration options go here
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});

var ctx = document.getElementById('poten').getContext('2d');
var chart4 = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: [],
    datasets: [{
        label: 'Luminosidade',
        borderColor:'rgb(35, 107, 35)',
        data: []
        }]
},

// Configuration options go here
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});

var ctx = document.getElementById('o2').getContext('2d');
var chart5 = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: [],
    datasets: [{
        label: 'Luminosidade',
        borderColor:'rgb(35, 107, 35)',
        data: []
        }]
},

// Configuration options go here
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});

var ctx = document.getElementById('ce').getContext('2d');
var chart6 = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
    labels: [],
    datasets: [{
        label: 'Luminosidade',
        borderColor:'rgb(35, 107, 35)',
        data: []
        }]
},

// Configuration options go here
options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
});