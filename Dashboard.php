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
            <img href="Home.php" class="logo2" src="img/logo2.png">
            </div>
            <div class="sidebar-menu">
                <ul>
                    <li><a href="Dashboard.php"><span class="las la-igloo"></span>
                        <span>Dashboard</span></a></li>
                    <li><a href="Statistic.php"><span class="las la-chart-line"></span>
                        <span>Statistics</span></a></li>
                    <li><a href="Component.php"><span class="las la-microchip"></span>
                        <span>Components</span></a></li>
                    <li><a href="Contact.php"><span class="las la-user-friends"></span>
                        <span>Developers</span></a></li>
                    <li><a href="#"><span class="las la-sign-out-alt"></span>
                        <span>Logout</span></a></li>
                </ul>
            </div>
        </div>
        <div class="main-dash">
            <header>
            <nav>
                <ul class="nav__links">
                    <li><a>Our Garden</a></li>
                </ul>
            </nav>
            </header>
            <main>
                <div class="cards">
                    <div class="card-single">
                        <div>
                            <h1>0</h1>
                            <span>Soil Moisture</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/mois.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>0</h1>
                            <span>Humidity (%t)</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/humid.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>0</h1>
                            <span>Temperature (*C)</span>
                        </div>
                        <div>
                            <img class="icon2" src="img/temp.svg">
                        </div>
                    </div>
                    <div class="card-single">
                        <div>
                            <h1>0</h1>
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
</html> 