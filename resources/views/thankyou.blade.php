@extends('layouts.app')
@section('style')
<style>
section {
      padding: 60px 0;
      display: none !important;
  }
  
  
  
  body{
      background-image: url('/media/grazie.jpeg');
      background-repeat: no-repeat;
      background-position-y: -750px;
      background-size: cover;
  }
  @media screen and (max-width: 600px){
      body{
      background-image: url('/media/grazie.jpeg');
      background-position-y: 0px;
      background-size: cover;
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
  
   .bg-navbarDesktop{
     background-color: rgba(0,0,0,0.7);
     border-bottom: 4px solid rgb(41, 162, 167));
     transition: 0.5s;
   }
   .masthead {
    display:none;
  }
  </style>
@endsection
@section('content')


<div class="container py-5 my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-right font-weight-bold display-4 mt-5 pt-5 text-info">GRAZIE <span></span><span class="h3 text-white">  PER AVERCI CONTATTATI!</h1>
           
            <h3 class="text-white text-right">PRESTO RICEVERAI NOSTRE NOTIZIE</h3>
        </div>
    </div>
</div>



    
@endsection