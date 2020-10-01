@extends('layout/main')

@section('title','Artikel')

@section('container')

<img src="css/gradien.jpg" alt="home" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%;
    height: 11%; ">
<!-- Container -->
<div class="container">

@if(auth()->user()->role == 'admin')
<a href="/artikels/create" class ="btn btn-primary my-3">Tambah Data Artikel</a>
@endif
<!-- Working space -->
<div class="row" style="margin-top: 50px">
  <div class="col-lg-12">
    <ul class="list-group">
      <div class="row row-cols-1 row-cols-md-4">
      @foreach( $artikels as $artikel)
      <div class="col mb-3">
    <div class="card">
      <img src="{{$artikel->getGambar()}}" class="card-img-top" alt="gambar">
      <div class="card-body">
        <h5 class="card-title">{{$artikel->judul}}</h5>
        <p class="card-text" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;">{{$artikel->isi}}</p>
        <a href="/artikels/{{$artikel->id}}" class="btn btn-primary tombol">Lebih lengkap</a> 
      </div>
    </div>
  </div>
  <!-- <img src="{{$artikel->getGambar()}}" alt="gambar" class="img-fluid" style=""> 
</div>
<div class="col-lg-5">
  <h3>{{$artikel->judul}}</h3>
  <p>{{$artikel->isi}}</p>
  <a href="/artikels/{{$artikel->id}}" class="btn btn-primary tombol">Lebih lengkap</a> -->
  
  @endforeach
</div>
</ul>
<!-- <img src="images/122.jpg" alt="gradien" class="img-fluid">
  </div>
  <div class="col-lg-5">
    <h3>You <span>Work</span> like at <span>home</span> </h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis?</p>
    <a href="" class="btn btn-primary tombol">Lebih lengkap</a> -->
  </div>
</div>
</div>
<!-- Testimonial -->
  

<!-- Akhir testimonial -->

<!-- Akhir Container -->
@endsection

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>