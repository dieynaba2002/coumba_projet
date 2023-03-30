<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="taxi/style.css">
   <link rel="stylesheet" href="taxi/fontawesome-free-5.15.3-web/css/all.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>

    <div class="main-container">
        <div class="background-text">
            <h2>réserver un <span>taxi maintenant</span></h2>
        </div>
        <header class="header">
            <a href="#" id="logo"><img src="taxi/images/CabHUB.png" alt=""></a>
            <nav class="navbar">
 
                <a href="#">home</a>
                <a href="#">about</a>
                <a href="#">Contact</a>
                <a href="../adminlogin" >Admin</a>
        
            </nav>
            <a href="#" id="menu-bars" class="fas fa-bars"></a>
        </header>
        <div class="taxi-image">
            <img src="taxi/images/carmain.png" alt="">
        </div>
    </div>

<!-- home section -->
<div class="home-container">
    <div class="home-content">
        <div class="inner-content">
        <h3>Ou Aller vous !</h3>
            <h2>service de taxi de confiance</h2>
            <br>
            @if (Route::has('login'))
                         <a
                            @auth
                                <a href="{{ url('/dashboard') }}" class="booknow">Dashbord</a>
                            @else
                                <a href="{{ route('login') }}"  class="booknow">Reserve maintenant</a>
                            @endauth
                    @endif
        </div>
        
    </div>
</div>
<!-- home section ended -->

<!-- our tariff -->

<div class="main-tariff">
    <h1>Nos<span>tarrif</span></h1>
    <div class="inner-tarrif">
        <div class="tarrif-container">
            <div class="inner-box">
                <img src="taxi/images/image1.png" alt="">
                <h2>economi class</h2>
                <p>route national non climatiser</p>
                <h3>plus bat prix:500f </h3>
                <a href="#">voir plus</a>
            </div>
        </div>

        <div class="tarrif-container">
            <div class="inner-box">
                <img src="taxi/images/image1.png" alt="">
                <h2 class="heading-yellow">Standard class</h2>
                <p>route national avec climatisation</p>
                <h3 class="yellw-section">plus bat prix:1500f</h3>
                <a href="#" class="btn-yellow">voir plus</a>
            </div>
        </div>

        <div class="tarrif-container">
            <div class="inner-box">
                <img src="taxi/images/image1.png" alt="">
                <h2>Luxe class</h2>
                <p> auto route a peage avec climatisation</p>
                <h3>plus bat prix:2500f</h3>
                <a href="#">voir plus</a>
            </div>
        </div>
    </div>
</div>


<!-- our tariff ended -->

<!-- fast booking -->
<div class="fast-booking">
    <h1 class="fast-hading">on fait mieux</h1>
    <h2>que vous ne le souhaitez</h2>
    <div class="inner-fast">
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-star"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>réservation rapide</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
                
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>voyage securiser</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>meilleur condition</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
        <div class="booking-content">
            <div class="icon-fast">
                <span><i class="fas fa-map-marker-alt"></i></span>
            </div>
            <div class="inner-fast-text">
                <h1>confort</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae debitis asperiores adipisci, totam volu</p>
            
            </div>
        </div>
    </div>
</div>

<!-- fast booking end -->

<div class="testimonials">
    <h1 class="heading-test">des clients satisfaits</h1>
    <div class="main-testimonials">
        <div class="inner-test">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis fugit magnam esse, amet adipisci eaque dolore explicabo quidem laudantium ad, enim, obcaecati optio? Harum porro delectus accusamus assumenda ullam.</p>
            <div class="clients">
                <img src="images/jhon.png" alt="">
                <h1>fatou</h1>
            </div>
        </div>
        <div class="inner-test">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe veritatis fugit magnam esse, amet adipisci eaque dolore explicabo quidem laudantium ad, enim, obcaecati optio? Harum porro delectus accusamus assumenda ullam.</p>
            <div class="clients">
                <img src="images/jhon.png" alt="">
                <h1>eva</h1>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
                           
    <script src="script.js"></script>
</body>
</html>

