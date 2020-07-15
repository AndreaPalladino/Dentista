@extends('layouts.app')
@section('main')

@include('components._navbar')

<div class="container py-5 my-5"></div>

<div class="container py-5 my-5">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center mt-5 text-white">{{$nostri}}<span class="font-weight-bold h1 display-4"> {{$servizi}}</span></h1>
            <hr class="mb-5 mt-1">
        </div>
    <div class="wrapper my-5 pt-5">
        <div class="row offset-1">
            @foreach($ser as $s)
            <div class="col-md-7" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="linear">
              <a href="{{route('details', ['name'=>$s[0]['name']])}}">
                <img class="img-fluid w-75 mb-3 overlay mb-5" src="{{$s[0]['img']}}" alt="">
              </a>
            </div>
            <div class="col-md-5 pt-5 my-5" data-aos="fade-right"
            data-aos-offset="300"
            data-aos-easing="linear">
              <h3 class="text-white">{{$s[0]['name']}}</h3>
              <p class="text-white">{{$s[0]['desc']}}</p>
            </div>  
            <div class="col-md-5 pt-5 my-5" data-aos="fade-left"
            data-aos-offset="300"
            data-aos-easing="linear">
              <h3 class="text-white">{{$s[1]['name']}}</h3>
              <p class="text-white">{{$s[1]['desc']}}</p>
            </div>
            <div class="col-md-7" data-aos="fade-left"
            data-aos-offset="300"
            data-aos-easing="linear">
                <a href="{{route('details', ['name'=>$s[1]['name']])}}">
                  <img class="img-fluid w-75 mb-5 overlay" src="{{$s[1]['img']}}" alt="">
                </a>
            </div> 
            @endforeach
        </div>
      </div>  
    </div>
</div>


<div class="container my-5 py-5">
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
    </div>
  </div>
</div>

@include('components._footer')

@push('script')
@push('style')
<style>


.bg-navbarDesktop{
   background-color: rgba(0,0,0,0.7);
   border-bottom: 4px solid rgb(41, 162, 167));
   transition: 0.5s;
 }



body{
  background: url('/media/sfondoservizi.jpeg');
  background-size: cover;
  
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
  height: 90vh;
  min-height: 200px;
  background: url('/media/services.jpeg');
  opacity: 0.9;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  clip-path: polygon(0 0, 100% 0, 100% 83%, 50% 100%, 0 83%);


}
</style>  


@endsection