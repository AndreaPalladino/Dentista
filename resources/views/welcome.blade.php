@extends('layouts.app')
@section('style')

<style>
  .bg-navbarDesktop{
     background-color: rgba(0,0,0,0.7);
     border-bottom: 4px solid rgb(41, 162, 167));
     transition: 0.5s;
   }
  
  
  section {
      padding: 60px 0;
  }
  
  section .section-title {
      text-align: center;
      color: #031e25;
      margin-bottom: 50px;
      text-transform: uppercase;
  }
  #footer {
      background: rgb(41, 162, 167)!important;
  }
  #footer h5{
    padding-left: 10px;
      border-left: 3px solid #eeeeee;
      padding-bottom: 6px;
      margin-bottom: 20px;
      color:#ffffff;
  }
  #footer a {
      color: #ffffff;
      text-decoration: none !important;
      background-color: transparent;
      -webkit-text-decoration-skip: objects;
  }
  #footer ul.social li{
    padding: 3px 0;
  }
  #footer ul.social li a i {
      margin-right: 5px;
    font-size:25px;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
  }
  #footer ul.social li:hover a i {
    font-size:30px;
    margin-top:-10px;
  }
  #footer ul.social li a,
  #footer ul.quick-links li a{
    color:#ffffff;
  }
  #footer ul.social li a:hover{
    color:#eeeeee;
  }
  #footer ul.quick-links li{
    padding: 3px 0;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
  }
  #footer ul.quick-links li:hover{
    padding: 3px 0;
    margin-left:5px;
    font-weight:700;
  }
  #footer ul.quick-links li a i{
    margin-right: 5px;
  }
  #footer ul.quick-links li:hover a i {
      font-weight: 700;
  }
  
  @media (max-width:767px){
    #footer h5 {
      padding-left: 0;
      border-left: transparent;
      padding-bottom: 0px;
      margin-bottom: 10px;
  }
  }
  
  
  .foot{
      clip-path: polygon(50% 6%, 100% 0, 100% 100%, 0 100%, 0 0);
  }
  
  
      html, body {
         
         
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
      }
  
      .full-height {
          height: 100vh;
      }
  
      .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
      }
  
      .position-ref {
          position: relative;
      }
  
      .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
      }
  
      .content {
          text-align: center;
      }
  
      .title {
          font-size: 84px;
      }
  
      .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 13px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
      }
  
      .m-b-md {
          margin-bottom: 30px;
      }
      .brand {
    background-color: transparent;
    border: none;
    width:400px;
    padding: 16px 32px;
    text-align: center;
    font-size: 16px;
    transition: 0.3s;
  }
  
  .brand:hover {
    background-color:rgb(41, 162, 167);
    color: black !important;
   }
  
   .masthead {
    height: 100vh;
    min-height: 500px;
    background-image: url('/media/headerHome.jpeg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }
  .mastheadViste {
      display:none;
    }
  
  </style>
    
@endsection





@section('content')
    

<div class="container-fluid py-5 my-5">
    <div class="container">
      <div class="row">
    
        <div class="col-12 col-md-4 p-5 box box:hover">
          <i class="fas fa-tooth fa-2x iconX pb-2"></i>
          <h3 class="text-custom text-center text60">{{$parodont}}</h3>
          <hr>
          <div class="text-center">
          <p class="text-custom text30 text-prag">{{$descr1}}</p>
        </div>
        </div>
        
        <div class="col-12 col-md-4 p-5 box box:hover">
          <i class="fas fa-grimace fa-2x iconX pb-2"></i>
          <h3 class="text-custom text-center text60">{{$pulizia}}</h3>
          <hr>
          <div class="text-center">
          <p class="text-custom text30 text-prag">{{$descr2}}</p>
          </div>
          
        </div>
        
        <div class="col-12 col-md-4 p-5 box box:hover">
          <i class="fas fa-teeth-open fa-2x iconX pb-2"></i>
        <h3 class="text-custom text-center text60">{{$cura}}</h3>
        <hr>
        <div class="text-center">
            <p class="text-custom text30 text-prag">{{$descr3}}</p>
        </div>
        </div>
      </div>
    </div>
</div>

<div class="container col">

    <div class="row align-items-center justify-content-between">
      <div class="col-12 col-md-6">

        <!-- Image -->
        <div class="text-right py-5">
          <img src="/media/felice.jpeg" alt="..." class="img-fluid w-75">
        </div>

      </div>
      <div class="col-12 col-md-6 col-lg-5">

        <!-- Preheading -->
        <h6 class="heading-xxs mb-3 text-gray-400">
          Chi siamo
        </h6>

        <!-- Heading -->
        <h2 class="mb-7">{{$brand}}</h2>

        <!-- Text -->
        <p class="font-size-lg text-trenta">
          {{$chisiamo}}
        </p>
        <p class="mb-7 font-size-lg text-trenta">
            {{$chisiamo}}
        </p>

        <!-- Link -->
        <a class="link-underline text-custom text-white" href="{{route('chi')}}">Scopri di più</a>

      </div>
    </div>
</div>




<div class="container-fluid my-5 py-5">
<div class="row">
<div class="col-12">
    <div class="content-section col2 text-white" >
        <div class="container text-center" data-aos="fade-up"
        data-aos-anchor-placement="top-center">
          <h2 class="mb-4">SUPER PROMO SBIANCAMENTO DEI DENTI</h2>
          <hr>
          <h2 class="mb-4"><span class="h2 font-weight-bold display-4">30%</span> di sconto ai primi <span class="h2 font-weight-bold display-4">dieci</span> che prenotano</h2>
          <a href="{{route('contacts')}}" class="btn btn-xl btn-dark">Prenota Ora!</a>
        </div>
    </div>
<div id="contact" >
    <iframe class="map" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
    <br>
    <small>
      <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
  </div>
</div>
</div>
</div>         

 
 
 










 

@endsection
 
 
 
 
 
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}