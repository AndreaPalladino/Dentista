@extends('layouts.app')
@section('style')
<style>
.wrapper{
    background-color: rgba(33, 44, 44, 0.5);
    height:50vh;
    width:70vh;
  }

.boxinput{
    border:1px solid rgb(41, 162, 167);
}

 .box-border{
     border-top:0;
     border-left:0;
     border-right:0;
     border-radius: 0;
     border-bottom:3px solid rgb(41, 162, 167) !important;
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
   .masthead{
     display:none;
   }
   .mastheadViste{
     display:none;
   }
   .card{
       height:200px;
       width:350px;
       background-color: rgba(0,0,0,0.5);
   }
</style>
@endsection

@section('content')

<div class="container py-5 my-5">
    <div class="row my-5">
        <div class="col-12">
            <div class="card text-center mx-auto">
                <div class="card-body">
                  <h5 class="card-title text-white">{{$contact->name}}</h5>
                  <p class="card-text text-white">{{$contact->email}}</p>
                  <p class="card-text text-white">{{$contact->phone}}</p>
                  <a href="{{route('contacts.edit',compact('contact'))}}" class="btn btn-info mr-2">Modifica</a>
                </div>
              </div>
        </div>
    </div>
</div>





@endsection
