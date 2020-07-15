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

 .mastheadViste {
  height: 90vh;
  min-height: 100px;
  background-image: url('/media/dettaglio.jpeg');
  background-size: cover;
  background-position-y: -200px;
  background-repeat: no-repeat;
 }
 .masthead {
    display:none;
  }
</style>
    
@endsection
@section('content')




<div class="container py-5 my-5">
    <div class="row align-items-center">
        <div class="col-12">
            <h1 class="text-center">I NOSTRI <span class="h1 font-weight-bold display-4"> SERVIZI</span></h1>
            <hr>
        </div>
    </div>
</div>

<div class="container py-5 my-5">
   <div class="row">
       <div class="col-12 col-md-6">
           <img src="{{$selectedName['img']}}" alt="" class="img-fluid mb-5">
       </div>
       <div class="col-12 col-md-6">
           <h3 class="text-center mt-5">{{$selectedName['name']}}</h3>
       </div>
   </div>
   <div class="row">
       <div class="col-12">
           <p class="my-5">{{$selectedName['dett']}}</p>
           <p class="my-5">{{$selectedName['dett']}}</p>
           <p class="my-5">{{$selectedName['dett']}}</p>
       </div>
   </div>
</div>








    
@endsection