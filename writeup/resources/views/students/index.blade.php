@extends('layout/main')

@section('title','Data Murid')

@section('container')
<img src="https://i.ytimg.com/vi/5-LyRjHlRgQ/maxresdefault.jpg" alt="home" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%;
    height: 11%; ">

<!-- Container -->
<div class="container">
<!-- Testimonial -->
  <div class="row justify-content-center ">
    <div class="col-lg-6">
      <br>
      <h3>DAFTAR MURID</h3>
      @if (session('data'))
        <div class="alert alert-success">
          {{ session('data')}}
        </div>
      @endif

      @if(auth()->user()->role == 'admin')
      <a href="/students/create" class ="btn btn-primary my-3">Tambah Data Siswa</a>
      @endif

        
      <ul class="list-group">
         @foreach($students as $student) 
        <li class="list-group-item d-flex justify-content-between align-items-center">
         {{ $student->nama }}
          <a href="/students/{{$student->id}}" class="badge badge-info">detail</a>
        </li>
        @endforeach
      </ul>
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