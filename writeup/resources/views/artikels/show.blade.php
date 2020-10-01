@extends('layout/main')

@section('title','Isi artikel')

@section('container')

<img src="https://i.ytimg.com/vi/5-LyRjHlRgQ/maxresdefault.jpg" alt="display" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%;
    height: 11%; ">
<!-- Container -->
<div class="container">
<!-- Testimonial -->
  <div class="row">
    <div class="col-lg-11">
        <div class="card-body">
           <h1 class="card-title" style="text-align:center;" >{{ $artikel->judul }}</h1>
        <img src="{{$artikel->getGambar()}}" class="img-circle" alt="gambar" style="display:block; margin: auto;" >
        <br>
           <h5 class="card-text" style="white-space: pre-line;">{{ $artikel->isi }}</h5>
           <br>
           @if(auth()->user()->role == 'admin')
           <a href="{{ $artikel->id}}/edit" class="btn btn-primary">Edit</a>

           <form action="/artikels/{{$artikel->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
             <button type="submit" class="btn btn-danger">Delete</button>
             @endif
           </form>
           <a href="/artikels" class="btn btn-info">kembali</a>
        </div>
    </div>
    </div>
  </div>
</div>
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