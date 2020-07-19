@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <img src="/images/contact_us.png" class="img-fluid py-5" alt="contact us image">
    <div class="container">
    
    <div class="col-md-12 py-3 text-center">       
       <h2 class="pt-1 pb-1 display-4 rounded-circle text-capitalize" style="border-bottom: 10px groove red ">
      Connect with us</h2>
    </div>

  <div class="col-md-12 row text-center py-5">
  <div class="col-md-3">  
   <div class="jumbotron bg-light ">
    <h1 class="display-1 text-primary"> <i class="fa fa-envelope " area-hidden="true"></i></h1>
      <a class="btn btn-link text-decoration-none " href="mailto:support@dwf.co" role="button">support@dwf.co</a>
    </div> 
  </div>
    <div class="col-md-3"> 
    <div class="jumbotron bg-light ">
    <h1 class="display-1 text-primary"> <i class="fa fa-map-marker" area-hidden="true"></i></h1>
      <a class="btn btn-link text-decoration-none " href="https://www.google.com/karachi" role="button">Karachi, Islamabad.</a>
    </div>
     </div>
    <div class="col-md-3"> 
    <div class="jumbotron bg-light ">
    <h1 class="display-1 text-primary"> <i class="fa fa-phone " area-hidden="true"></i></h1>
      <a class="btn btn-link text-decoration-none " href="tel:92312456789" role="button"> +(92) 344 033 9710</a>
    </div>
    </div>
   <div class="col-md-3"> 
    <div class="jumbotron bg-light ">
    <h1 class="display-1 text-primary"> <i class="fab fa-facebook " area-hidden="true"></i></h1>
      <a class="btn btn-link text-decoration-none " href="https://www.facebook.com" role="button">https://facebook.com/dwf</a>
    </div>
     </div>
  </div>
    
    <div class="row col-md-12">
    <div class="col-md-12">
    <div class="col-md-8 py-3 text-center">       
       <h2 class="pt-1 pb-1 display-4 rounded-circle text-capitalize" style="border-bottom: 5px groove red ">
      drop a line :</h2>
    </div>
    </div>
    <div class="form-group col-md-6">
      <label >Name <span class="text-danger">&darr;</span></label>
      <input type="text" name="" id="" class="form-control" placeholder="e.g.Muhammad Ali">
      <div class="invalid-feedback">
        Please enter your sweet name
      </div>
    </div>
    
    <div class="form-group col-md-6">
      <label >Email <span class="text-danger">&darr;</span></label>
      <input type="text" name="" id="" class="form-control" placeholder="e.g. farooq@gmail.com">
      <div class="invalid-feedback">
        Please enter your sweet name
      </div>
    </div>
    
    <div class="form-group col-md-12">
      <label >Subject <span class="text-danger">&darr;</span></label>
      <input type="text" name="" id="" class="form-control" placeholder="e.g. Brillient UI and Excellent UX">
      <div class="invalid-feedback">
        Subject of youe feedback is messing
      </div>
    </div>
    
    <div class="form-group col-md-12">
      <label >Message <span class="text-danger">&darr;</span></label>
      <textarea name="" id="" cols="30" rows="10" class="form-control" placeholder="e.g. I'm enjoying visiting this site."></textarea>
      <div class="invalid-feedback">
        Enter your messege.
      </div>
    </div>
    <div class="form-group col-md-12">
      <input type="submit" value="SEND" class="btn btn-primary col-md-4 col-sm-2">
    </div>

      </div>
    </div>   
  </div>
</div>
@endsection