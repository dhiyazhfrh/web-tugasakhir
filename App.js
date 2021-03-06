//--------Value element------
const soil = document.getElementById('soil');
const humidity = document.getElementById('humidity');
const temperature = document.getElementById('temperature');
const water_level = document.getElementById('water_level');

//-----database------
var database = firebase.database();

//-----database reference------
const reff = database.ref('sensor');
const soilref = database.ref('sensor').child('moisture');
const humref = database.ref('sensor').child('humidity');
const tempref = database.ref('sensor').child('temperature');
const waterref = database.ref('sensor').child('water_level');

//-----data snapshot-------
soilref.limitToLast(1).on('value', function(snapshot){
    snapshot.forEach(function(childSnapshot){
        var childData = childSnapshot.val();
        console.log("moisture level : " + childData);
        soil.innerText = childData;
    });
});

humref.limitToLast(1).on('value', function(snapshot){
    snapshot.forEach(function(childSnapshot){
        var childData = childSnapshot.val();
        console.log("humidity : " + childData);
        humidity.innerText = childData;
    });
});

tempref.limitToLast(1).on('value', function(snapshot){
    snapshot.forEach(function(childSnapshot){
        var childData = childSnapshot.val();
        console.log("temperature : " + childData);
        temperature.innerText = childData;
    });
});

waterref.limitToLast(1).on('value', function(snapshot){
    snapshot.forEach(function(childSnapshot){
        var childData = childSnapshot.val();
        console.log("water level : " + childData);
        water_level.innerText = childData;
    });
});

