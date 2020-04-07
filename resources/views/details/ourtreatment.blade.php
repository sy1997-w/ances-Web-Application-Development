<?php
use App\Common;
?>
@extends('layouts.ui')

@section('content')
<!DOCTYPE html>
<html lang="en">
<body>
<main role="main">

  <div class= "container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><img src="https://img.icons8.com/bubbles/100/000000/tooth-cracked.png"/>Nice Teeth Dental Clinic</h1>
        <p class="lead">Our Treatment!</p>
        <hr class="my-4">
        <p>We provide various type of service for you to choose! Refer to the treatment list below!</p>
      </div>
  </div>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-12">
        <h2>Braces</h2>
        <p>Orthodontic treatments work by moving and straightening teeth, with an end goal of overall improvements in the appearance of a smile. These treatments also assist in the longevity of your teeth and oral health.</p>
        </br></br>
        <h2>Teeth Whitening</h2>
        <p>The tooth whitening process is incredible. This procedure lightens the shades of tooth enamel to remove discoloration and staining. Tooth whitening is one of the most popular dental procedures, as it provides excellent improvement of the overall quality of the smile with minimal work or time expenditure.</p>
        </br></br>
        <h2>Tooth Implants</h2>
        <p>Tooth implants help protect the structure of the jaw and provide support to other teeth, reducing the need for carrying out the procedure on adjacent teeth. In the long run, they make it easier to speak clearly and also help preserve natural facial beauty by reducing wrinkles.</p>
        </br></br>
      </div>
      
    </div>

  </div> <!-- /container -->

</main>

</body>

</html>
@endsection