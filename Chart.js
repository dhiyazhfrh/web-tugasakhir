var temp = [], hum = [], water = [], soil = [];
ref = firebase.database().ref('sensor');

ref.on('value', function(childSnapshot){
    for (let i in childSnapshot.val().humidity){
        humidity.push(childSnapshot.val().hum[i]);
    }

    hum = hum.slice(hum.length-20, hum.length);
    drawGraph(hum);
});

function drawGraph(humidity){
    var label = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18];
    var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new CharacterData(ctx, {
        type: 'line',
        data: {
          labels: labels,
          datasets: [{
          label: "temperature [°C]",
          labelString : "°C",
          borderColor: 'rgb(255, 99, 132)',
          backgroundColor: 'rgb(255, 99, 132)',
          fill: false,
          data: temp,
            yAxisID: "y-axis-temp",
          },
           {
                  label: "humidity [%RH]",
                 labelString : "hum",
      
          borderColor: 'rgb(0, 99, 132)',
          backgroundColor: 'rgb(0, 99, 132)',
          fill: false,
          data: hum,
            yAxisID: "y-axis-temp",         
                     
        },
                       {
                  label: "light [%]",
                 labelString : "light",
      
          borderColor: 'rgb(145, 70, 65)',
          backgroundColor: 'rgb(145, 70, 65)',
          fill: false,
          data: light,
            yAxisID: "y-axis-temp",         
                     
        },
                       {
                  label: "motion [0-1]",
                 labelString : "motion",
      
          borderColor: 'rgb(0, 21, 32)',
          backgroundColor: 'rgb(0, 21, 32)',
          fill: false,
          data: motion,
            yAxisID: "y-axis-temp",         
                     
        }]
        },
                  options: {
                      responsive: true,
                    maintainAspectRatio: false,
                    hoverMode: 'index',
                      stacked: false,
                      title:{
                          display: true,
                          text:'Last 20 room measurements'
                      },
      
                      scales: {
                          yAxes: [{
                              type: "linear", 
                              display: true,
                              position: "left",
                              id: "y-axis-temp",
                              ticks: {
                                beginAtZero:true,
                                suggestedMax: 50
                              }
                    
                          }],
                      }
                  }
        
    });
    }