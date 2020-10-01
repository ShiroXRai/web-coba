@extends('layout/main')

@section('title','Detail Murid')

@section('container')
<img src="https://i.ytimg.com/vi/5-LyRjHlRgQ/maxresdefault.jpg" alt="home" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%;
    height: 11%; ">
<!-- Container -->
<div class="container">
<!-- Testimonial -->
  <div class="row">
    <div class="col-lg-6">
      <br>
      <h1>DAFTAR MURID</h1>
        <div class="card-body">
        <img src="{{$student->getAvatar()}}" class="img-circle" alt="avatar" width="140px" height="150">
           <h5 class="card-title">{{ $student->nama }}</h5>
           <h6 class="card-subtitle mb-2 text-muted">{{ $student->nrp}}</h6>
           <p class="card-text">{{ $student->email }}</p>
           <p class="card-text">{{ $student->jurusan }}</p>

@if(auth()->user()->role == 'admin')
           <a href="{{ $student->id}}/edit" class="btn btn-primary">Edit</a>

           <form action="/students/{{$student->id}}" method="post" class="d-inline">
            @method('delete')
            @csrf
             <button type="submit" class="btn btn-danger">Delete</button>
@endif
           </form>
           <a href="/students" class="btn btn-info  ">kembali</a>
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