@extends('layouts.app')
@section('style')
<style>
#navbar{
  display:none;
}
  * {
    margin:0px auto;
    padding: 0px;
  text-align:center;
  }
  
  body {
    background-color: #D4D9ED;
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
  .masthead{
    display:none;
  }
  .mastheadViste{
    display:none;
  }
  section{
    display:none;
  }
  
  </style>
@endsection
@section('content')


<div class="cont_principal">
  <div class="cont_error">
    
  <h1>Oops</h1>  
    <p>La pagina che stavi cercando non è qui...torna alla <a href="{{route('home')}}">HOME</a></p>
    </div>
  <div class="cont_aura_1"></div>
  <div class="cont_aura_2"></div>
  </div>



@push('script')



@push('style')

@endsection