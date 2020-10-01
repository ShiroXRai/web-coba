
        @extends('layout/login')
@section('title','Web PaaS')

@section('container')
<div style="background-color:#f5fffa;">
<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Write <span>something</span> <br>Worth <span>reading</span></h1>
      <a href="/artikels" class="btn btn-primary tombol"> Our Work</a>
    </div>
  </div>
<!-- Container -->
<div class="container">


<!-- Workingspace -->
<div class="row" style="margin-top: 50px">
  <div class="col-lg-12">
    <ul class="list-group">
      <div class="row row-cols-1 row-cols-md-3">
      @foreach( $artikels as $artikel)
      <div class="col mb-3">
    <div class="card">
      <img src="{{$artikel->getGambar()}}" class="card-img-top" alt="gambar">
      <div class="card-body">
        <h5 class="card-title">{{$artikel->judul}}</h5>
        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{$artikel->isi}}</p>
        <a href="/belumlogin/{{$artikel->id}}" class="btn btn-primary tombol">Lebih lengkap</a> 
      </div>
    </div>
  </div>
  
  @endforeach
</div>
</ul>

  </div>
</div>
<!-- Workingspace -->




<!-- Testimonial -->
<!-- <section class="testimonial">
  <div class="row justify-content-center ">
    <div class="col-lg-8">
      <h5>"Lorem ipsum, dolor sit amet consectetur adipisicing elitadsaasadsadssssss dsasadsad asasdsa ."</h5>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-lg-6 justify-content-center d-flex">
      <figure class="figure">
        <img src="gradien.jpg" class="figure-img img-fluid rounded-circle" alt="testi1">
      </figure>
      <figure class="figure">
        <img src="gradien.jpg" class="figure-img img-fluid rounded-circle utama" alt="testi2">
        <figcaption class="figure-caption">
          <h5>Sunny Ye</h5>
          <p>designer</p>
        </figcaption>
      </figure>
      <figure class="figure">
        <img src="gradien.jpg" class="figure-img img-fluid rounded-circle" alt="testi3">
      </figure>
    </div>
  </div>
</section> -->
<!-- Akhir testimonial -->

<!-- Akhir Container -->
@endsection











    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>
  </body>
</html>