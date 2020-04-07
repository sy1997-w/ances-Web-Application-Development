<?php 
  use Illuminate\Support\Facades\Auth;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Nice Teeth Dental Clinic</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<!-- CSS And JavaScript -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</head>

<body>
  <nav class="navbar navbar-expand-md navbar-light bg-light">
    <a href="#" class="navbar-brand">
        <img src="https://img.icons8.com/bubbles/50/000000/tooth-cracked.png"/>
        Nice Teeth
    </a>
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ml-auto">
            @if (Auth::check())
            <a href="{{ route('home') }}" class="nav-item nav-link">Home</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link">Logout</a>
            @else
            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>
            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
            @endif    
        </div>
    </div>
</nav>
<main role="main">

  <div class= "container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><img src="https://img.icons8.com/bubbles/100/000000/tooth-cracked.png"/>Nice Teeth Dental Clinic</h1>
        <p class="lead">We at Nice Teeth Dental Clinic are reputable dental providers in Malaysia. While our smile designers offer a vast array of services at our 3 locations across the Klang Valley, below are a few of our featured services of note.</p>
        <hr class="my-4">
        <p>If you’ve found yourself wondering, “Where is the best dental clinic for me?”. We are proud to be your solution. We at Nice Teeth Dental Clinic are a reputable dental group in Malaysia that has dental clinics in 3 different locations across the Klang Valley. Nice Teeth Dental Clinic’s friendly and highly skilled dental surgeons are here to ensure that your smile is something to be excited about. Most of our dental clinics are open from morning to night, 7 days a week, best suited for your busy city lifestyle and cater to dental emergencies.</p>
        <a class="btn btn-primary btn-lg" href="{{ URL::to('learnmore') }}" role="button">About Us</a>
      </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Our Treatment</h2>
        <p>Click to check out what services we provide to you.</p>
        <p><a class="btn btn-secondary" href="{{ URL::to('ourtreatment') }}" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Smile Gallery</h2>
        <p>Our aim is to help you to find back your smile!</p>
        <p><a class="btn btn-secondary" href="{{ URL::to('smilegallery') }}" role="button">View details »</a></p>
      </div>
      <div class="col-md-4">
        <h2>Contact Us</h2>
        <p>Nice Teeth Dental Clinic are a reputable dental group in Malaysia that has dental clinics in 3 different locations across the Klang Valley. Click View details to look for all locations.</p>
        <p><a class="btn btn-secondary" href="{{ URL::to('contactus') }}" role="button">View details »</a></p>
      </div>
    </div>

    <hr>

  </div> <!-- /container -->

</main>

</body>
<footer class="bottom bg-light">
  <div class="text-center">© 2020 Copyright: Nice Teeth Dental Clinic</a></div>
</footer>
</html>