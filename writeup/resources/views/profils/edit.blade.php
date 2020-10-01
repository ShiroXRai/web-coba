@extends('layout/main')

@section('title','Form Ubah Profil')

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
    <div class="col-lg-8">
      <br>
      <h1> Ubah Data </h1>
        
    <form method="post" action="/profils/{{ $user-> id}}" enctype="multipart/form-data">
        @method('patch')
        @csrf
      
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukkan Nama" name="nama" value="{{$user->name}}">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Masukkan Email" name="email" value="{{$user->email}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="nrp">NRP</label>
            <input type="text" class="form-control @error('nrp') is-invalid @enderror " id="nrp" placeholder="Masukkan NRP" name="nrp" value="{{$user->student->nrp}}">
            @error('nrp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control @error('jurusan') is-invalid @enderror " id="jurusan" placeholder="Masukkan Jurusan" name="jurusan" value="{{$user->student->jurusan}}">
            @error('jurusan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror " id="Password" placeholder="Ubah Password" name="password" value="">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="avatar">avatar</label>
            <input type="hidden" id="avatar" name="avatar"  value="{{$user->student->avatar}}">
            <input type="file" class="form-control @error('avatar') is-invalid @enderror " id="avatar" name="avatar" value="{{$user->student->avatar}}">
            @error('avatar')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>

        <button type="submit" class="btn btn-primary">Ubah Data!</button>

    </form>

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