<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technoscape</title>
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- <style> @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap'); </style> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <section>
        <nav>
            <!-- <a href=""><img src="tlogo.png" alt=""></a> -->
            <div class="Logo">
                <ul>
                    <li>
                        <a href="/" style="color: lightpink;">Home</a>
                        <a href="/register">Register</a>
                        <a href="/login">Login</a>
                        <a href="/payment">Payment</a>
                    </li>
                    <!-- <li>
                        <a href="login.html">Login</a>
                    </li> -->
                </ul>
            </div>
        </nav>
    </section>
    <section class="home">
        <h1> <b>Technoscape</b></h1>
        <h2>Hackathon</h2>
        <p>Hackthon merupakan acara teknologi tahunan terbesar yang diselenggarakan oleh Bina Nusantara Computer Club (BNCC)
            sebagai wadah untuk memberdayakan pengetahuan teknologi dan menghasilkan karya inovatif. Hackthon telah hadir sejak tahun
            2018 dan tahun ini, Hackthon akan hadir dengan tiga rangkaian acara, yaitu Virtual Conference, Developer Workshop,
            dan Hackathon 5.0.</p>
    </section>
        <section class="sponsor">
            <h2><b>Sponsors</b></h2>
            <div class="platspon">
                <h4>Platinum Sponsor</h4>
                <img src="{{ asset('css/Tokopedia.png') }}" alt="Tokopedia">
                <img src="{{ asset('css/Accenture-logo.png') }}" alt="Accenture">
                <img src="{{ asset('css/Gojek.png') }}" alt="Gojek">
            </div>
            <div class="goldspon">
                <h4>Gold Sponsor</h4>
                <img src="{{ asset('css/dewaweb.png') }}" alt="DewaWeb">
                <img src="{{ asset('css/blibli.png') }}" alt="Blibli">
                <img src="{{ asset('css/Traveloka.png') }}" alt="Traveloka">
            </div>
            <!-- <div class="bg">
               <img src="sponsorbg.jpg" alt=""> 
            </div> -->
        </section>
        <section class="high">
            <h2><b>Highlight</b></h2>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('css/h.jpg') }}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('css/a.jpeg') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('css/c.jpg') }}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </section>
    <section class="footer">
        <div class="sm">
            <ul style="align-items: center;">
                <li><a href="https://twitter.com/bncc_binus?lang=en"><i class="fa fa-twitter" style="color: whitesmoke"></i></a></li>
                <li><a href="https://id-id.facebook.com/bina.nusantara.computer.club/"><i class="fa fa-facebook" style="color: whitesmoke"></i></a></li>
                <li><a href="https://www.instagram.com/technoscapebncc/"><i class="fa fa-instagram" style="color: whitesmoke"></i></a></li> 
            </ul>
            <p>
               Copyright © 2022 BNCC. All Rights Reserved
            </p>
        </div>
    </section>  
</body>
</html>