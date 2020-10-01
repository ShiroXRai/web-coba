@extends('layout/main')

@section('title','Form Edit Artikel')

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
      <h1>Form Edit Artikel</h1>
        
    <form method="post" action="/artikels/{{ $artikel -> id }}" enctype="multipart/form-data">
    @method('patch')
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control @error('judul') is-invalid @enderror " id="judul" placeholder="Masukkan Judul" name="judul" value="{{$artikel->judul}}">
            @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>

        <div class="form-group">
         <label for="gambar">gambar</label>
         <input type="hidden" id="gambar" name="gambar"  value="{{$artikel->gambar}}">
            <input type="file" class="form-control @error('gambar') is-invalid @enderror " id="gambar" name="gambar"  value="{{$artikel->gambar}}">
            @error('gambar')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>

        <div class="form-group">
            <label for="isi">ISI</label>
            
            <textarea rows=5 cols=60 type="text" class="form-control @error('isi') is-invalid @enderror " id="isi" placeholder="Masukkan isi"  name="isi" value="{{$artikel->isi}}">{{$artikel->isi}}</textarea>
            
          <!-- <input row=5 cols=60 type="text" class="form-control @error('isi') is-invalid @enderror " id="isi" placeholder="Masukkan isi"  name="isi" value="{{$artikel->isi}}">
            @error('isi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror -->
        </div>

        <button type="submit" class="btn btn-primary">Tambah Data!</button>

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