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
      height: 60vh;
      min-height: 200px;
      background: url('/media/staff.jpeg');
      opacity: 0.9;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      clip-path: polygon(30% 0%, 70% 0%, 100% 0, 100% 84%, 70% 100%, 30% 100%, 0 84%, 0 0);
      border-bottom: 4px solid rgb(41, 162, 167);
    }
    </style>
    
@endsection
@section('main')

@include('components._headerViste')



<div class="container py-5 my-5">
    <div class="row">
        <div class="col-12">
        <h1 class="text-center">{{$chisiamo}}</h1>
        <hr class="mb-5 mt-1">
        <p>{{$story}}</p>
        </div>
    </div>
</div>




<div class="container-fluid bg-dark py-5 my-5 boh">
    <h2 class="text-center display-4 text-white">{{$title}} <span class="h2 display-4 font-weight-bold text-white"> {{$cont}}</span></h2>
    <hr>
    <div class="row pt-5">
    <div class="container">
        <div class="row">
      <!-- Team Member 1 -->
      @foreach($staff as $s)
      <div class="col-12 col-md-6 mb-4 mx-auto" data-aos="zoom-in-up" data-aos-duration="1500">
        
          <img src="{{$s['img']}}" class=" img-fluid w-50 iconX" alt="...">
          <div class="card-body text-center" data-aos="fade-down"
          data-aos-easing="linear"
          data-aos-duration="1500">
            <h5 class="card-title text-white mb-0">{{$s['name']}}</h5>
            <div class="card-text text-white-50">{{$s['prof']}}</div>
            <hr>
            <p class="text-center text-white">{{$s['desc']}}</p>
          </div>
        
      </div>
      @endforeach
    </div>
    </div>
    </div>
    <!-- /.row -->
  
  </div>









  @include('components._footer')
    
@endsection