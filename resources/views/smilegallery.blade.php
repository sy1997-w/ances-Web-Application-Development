<?php
use App\Common;
?>
@extends('layouts.ui')

@section('content')

<!DOCTYPE html>
<html>
<head>
    <!-- References: https://github.com/fancyapps/fancyBox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    .img_div{
      float: left;
      margin:15px;
      display: inline-block
      text-align: center
    }
    .img-responsive{
      width:300px;
    }
    </style>
</head>
<body>

  <div class= "container mt-5">
    <div class="jumbotron">
        <h1 class="display-4"><img src="https://img.icons8.com/bubbles/100/000000/tooth-cracked.png"/>Nice Teeth Dental Clinic</h1>
        <p class="lead">Smile Gallery</p>
        <hr class="my-4">
        <p>You can view our patients' picture before and after our treatment!</p>
      </div>
  </div>


<div class="container">
    <div class="row">
    <div class='list-group gallery'>


            @if($images->count())
                @foreach($images as $image)
                <div class='img_div'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                        <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                        <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div> <!-- text-center / end -->
                    </a>
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->


</body>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>
</html>
@endsection
