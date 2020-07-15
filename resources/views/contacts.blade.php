@extends('layouts.app')
@section('style')
<style>

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
  
  .bg-navbarDesktop{
     background-color: rgba(0,0,0,0.7);
     border-bottom: 4px solid rgb(41, 162, 167));
     transition: 0.5s;
   }
  .foot{
      clip-path: polygon(50% 6%, 100% 0, 100% 100%, 0 100%, 0 0);
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
   body{
       background-image: url('/media/contatti.jpeg');
       background-position: 0px -500px;
   }
  </style>  
  
    
@endsection
@section('main')


<div class="container py-5 my-5"></div>

<div class="container py-5 mb-2">
    <div class="row align-items-center">
       <div class="col-12">
           <h1 class="text-white text-center">LASCIACI LE TUE<span class="text-white font-weight-bold display-4"> INFO</span></h1>
           <hr class="mb-5 mt-1">
       </div>
    </div>
</div>



<div class="page">
    <div class="containerBox">
      <div class="sinistra display-4">
        <div class="h2 login">{{$mess}}</div>
        <div class="eula mb-5">{{$disclaimer}}</div>
      </div>
      <div class="destra display-4">
        <svg viewBox="0 0 320 300">
          <defs>
            <linearGradient
                            inkscape:collect="always"
                            id="linearGradient"
                            x1="13"
                            y1="193.49992"
                            x2="307"
                            y2="193.49992"
                            gradientUnits="userSpaceOnUse">
              <stop
                    style="stop-color:rgb(41, 162, 167);"
                    offset="0"
                    id="stop876" />
              <stop
                    style="stop-color:rgb(41, 162, 167);"
                    offset="1"
                    id="stop878" />
            </linearGradient>
          </defs>
          <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
        </svg>
        <form class="form" method="POST" action="{{route('contacts-submit')}}">
            @csrf
          <label for="email">Email</label>
          <input name="email" type="email" id="email">
          <label for="password">Telefono</label>
          <input name="phone" type="phone" id="password">
          <input type="submit" id="submit" value="Invia">
        </form>
      </div>
    </div>
</div>


  <div class="container py-5 my-5"></div>







   

  
@push('script')
<script src="/anime/anime.min.js"></script>
<script src="/anime/script.js"></script>

@endsection