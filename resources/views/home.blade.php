@extends('layouts.app')

@section('content')

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


<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
