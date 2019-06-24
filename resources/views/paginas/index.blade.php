@extends('template.menu_e_footer')

@section('content')
<div class="conteiner" id="divCarrossel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active carrosselItem">
        <img id="homeImagemSlide1" class="imgCarrossel" src="{{ asset('img/FundoPreto.jpg') }}" class="d-block w-100;">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide1">First slide label</h5>
          <p id="homeTextoSlide1">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrosselItem">
        <img id="homeImagemSlide2" class="imgCarrossel" src="{{ asset('img/FundoVermelho.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide2">Second slide label</h5>
          <p id="homeTextoSlide2">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item carrosselItem">
        <img id="homeImagemSlide3" class="imgCarrossel" src="{{ asset('img/FundoRosa.jpg') }}" class="d-block w-100">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="homeTituloSlide3">Third slide label</h5>
          <p id="homeTextoSlide3">Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div> 
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div class="card-deck" id="divParceiros">
  <div class="card divParceiros">
    <h2>Parceiros</h2>
    <p>Lorem ipsum dolo sit amet consectetur, adipisicing elit. Ut veniam odio minima quod perspiciatis deleniti accusantium omnis voluptas quaerat quia. Eos, molestiae voluptatum amet in quas dolorum obcaecati? Quisquam, possimus.</p>
  </div>
  <div class="card divParceiros">
    <img id="homeImagemContribuidores " src="{{ asset('img/FundoPreto.jpg') }}">
  </div>
</div>
<div class="card-deck card-home" >
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/FundoPreto.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Fique atualizado</h5>
      <p class="card-text">Fique por dentro de tudo que está acontecendo no Abrigo!</p>
      <a href="/noticias" class="btn btn-primary">Visitar</a>  
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/FundoVermelho.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-titleA">Doe</h5>
      <p class="card-text">Nos ajude financeiramente para que possamos manter nosssas atividades!</p>
      <a href="/doacoes" class="btn btn-primary">Visitar</a>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{ asset('img/FundoRosa.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Seja um voluntário</h5>
      <p class="card-text">Estamos sempre precisando de pessoas para nos ajudar!</p>
      <a href="/cadastroVoluntario" class="btn btn-primary">Visitar</a>    
    </div>
  </div>
</div>

@endsection