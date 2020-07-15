

     <nav id="navbar" class="navbar navbar-expand  fixed-top d-none d-md-flex ">
        <a class="navbar-brand" href="#"></a>
    
    
        <div class="collapse navbar-collapse" id="navbarsExample02">
         

          <div class="mx-auto d-none d-md-flex">
            <ul class="navbar-nav">
                <li class="nav-item mx-5 left"><a class="nav-link text-white pt-3" href="{{route('home')}}">Home</a></li>
                <li class="nav-item mx-5 left"><a class="nav-link text-white pt-3 " href="{{route('chi')}}">Chi Siamo</a></li>
            </ul>
            <div class="navbar-brand navbar-brand-centered mx-auto brand brand:hover"><a href="{{route('home')}}"><img src="/media/logo.png" alt="" height="60" width="60"></a></div>
            <ul class="navbar-nav">
                <li class="nav-item right mx-5"><a class="nav-link text-white pt-3 " href="{{route('servizi')}}">Servizi</a></li>
                <li class="nav-item right mx-5"><a class="nav-link text-white pt-3 " href="{{route('contacts.create')}}">Contatti</a></li>
            </ul>
          </div>
        </div>
      </nav>
  
@push('script')
<script>
  document.addEventListener('scroll', ()=>{
  let navbar =document.querySelector('#navbar')

  if(window.scrollY>120){
      navbar.classList.add('bg-navbarDesktop')
  }else{
      navbar.classList.remove('bg-navbarDesktop')
  }
})
</script>