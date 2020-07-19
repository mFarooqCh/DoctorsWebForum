@extends('layouts.app')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<div class="container-fluid">
<div id="mainSlider" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#mainSlider" data-slide-to="0" class="active"></li>
        <li data-target="#mainSlider" data-slide-to="1"></li>
        <li data-target="#mainSlider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="max-height: 750px" >
            <img src="/images/wel.jpg" alt="First slide" class="img-fluid">
        </div>
        <div class="carousel-item" style="max-height: 750px">
            <img src="/images/DocPic.jpg" alt="Second slide" class="img-fluid">
        </div>
        <div class="carousel-item" style="max-height: 750px" >
            <img src="/images/Hlth.jpg" alt="Third slide" class="img-fluid">
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row justify-content-center">
       
       <div class="col-md-12 py-3 text-center">
       
        <h2 class="pt-3 pb-1 display-4 rounded-circle " style="border-bottom: 10px groove red ">
        The Professional Healers .</h2>
        </div>
       
       
        <div class="col-md-12 py-3 row  px-0">
        <div class="col-md-6">
        <h4 class="text-small text-uppercase text-primary">what we do</h4>
        <h1 class="text-capitalize pb-3">  health information you can trust</h1>
        

        <p class="px-0">
        Join and start lively discussions in the forum and receive quick responses to your clinical and non-clinical questions.
        Access the latest medical news stories each day, take part in market research and Update your clinical knowledge.
        <br> Browse a range of clinical and non-clinical resources including journal reviews, blogs, articles and videos.
        <br><br>

        <button class="btn btn-outline-danger h3 ">About Us</button>
        </p>
        </div>

        <div class="col-md-6 d-flex justify-content-center">

         <img src="/images/sfd1.png" alt="welcoming doctor" height="400px" class="rounded-circle">
        
        </div>
    
       
    
    </div>
</div>
@endsection
