<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Grow Application</title>
        <link rel="stylesheet" type="text/css" href="Style.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="sidebar">
            <div class="sidebar-brand">
            <a href="Home.php"><img class="logo2" src="img/logo2.png"></a>
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a class="list active" href="Dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a></li>
                    <li><a class="list" href="Component.php"><span class="las la-microchip"></span>
                        <span>Components</span></a></li>
                    <li><a class="list" href="Contact.php"><span class="las la-user-friends"></span>
                        <span>About Us</span></a></li>
                    <li><a class="list" href="Home.php"><span class="las la-sign-out-alt"></span>
                        <span>Back to Home</span></a></li>
                </ul>
            </div>
        </div>
        <div class="main-dash">
            <header>
            <nav>
                <ul class="nav__links">
                    <h1>Our Garden</h1>
                </ul>
            </nav>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1 id="soil">0</h1>
                            <span>Soil Moisture</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/mois.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="humidity">0</h1>
                            <span>Humidity</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/humid.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="temperature">0</h1>
                            <span>Temperature</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/temp.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1 id="water_level">0</h1>
                            <span>Water Level</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/water.svg">
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>
    <!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.7.1/firebase-database.js"></script>
<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyB6NQrnRPmZ64UN0fgmCUGN7cy-jv8fbx4",
    authDomain: "smart-garden-project-9d1e5.firebaseapp.com",
    databaseURL: "https://smart-garden-project-9d1e5-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "smart-garden-project-9d1e5",
    storageBucket: "smart-garden-project-9d1e5.appspot.com",
    messagingSenderId: "561294668246",
    appId: "1:561294668246:web:75da4780adb33b01937477"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
</script>
<script src="App.js"></script>

</html> 