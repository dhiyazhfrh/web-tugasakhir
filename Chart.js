var temperature = [], humidity = [], water_level = [], moisture = [];

ref.on('value', , function(childSnapshot){
    for (let i in childSnapshot.val().humidity){
        humidity.push(childSnapshot.val().humidity[i]);
    }

    humidity = humidity.slice(humidity.length-20, humidity.length);
    drawGraph(humidity);
});

function drawGraph(humidity){
    var label = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new CharacterData(ctx, {
        type: 'line',
        data : {
                label: "humidity [%RH]",
                labelString : "hum",

                borderColor: 'rgb(0, 99, 132)',
                backgroundColor: 'rgb(0, 99, 132)',
                fill: false,
                data: hum,
                yAxisID: "y-axis-temp", 

            },

            options: {
                responsive: true,
                maintainAspectRatio: false,
                hoverMode: 'index',
                stacked: false,
                title:{
                    display: true,
                    text:'Last 17 sensor measurements'
                },

                scales: {
                    yAxes: [{
                        type: 'linear',
                        display: true,
                        position: "left",
                        id: "y-axis-temp",
                        ticks: {
                            beginAtZero: true,
                            siggestedMax: 50
                        }
                    }],
                }
            }
        
    });
    }