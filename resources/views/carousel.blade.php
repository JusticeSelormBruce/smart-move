
<style>
    img{
        height: 75vh!important
    }
    @media(max-width: 730px){
        img{
        height: 50vh!important
    }
    }
</style>
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>

    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset("carousel/1.jpg")}}" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="{{asset("carousel/2.jpg")}}" class="d-block w-100" alt="...">

      </div>
      <div class="carousel-item">
        <img src="{{asset("carousel/contemporary-exterior.jpg")}}" class="d-block w-100" alt="...">
        
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

