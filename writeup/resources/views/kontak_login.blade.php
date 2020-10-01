@extends('layout/login')

@section('title','Form Tambah Artikel')

@section('container')
<div style="background-color:lightblue;">
<img src="https://i.ytimg.com/vi/5-LyRjHlRgQ/maxresdefault.jpg" alt="home" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%; 
    height: 11%; ">
    
<!-- Container -->
<div class="container">
<!-- Testimonial -->
<div class="card-group">
    <div class="col-md-8 col-xs-12">
    
      <br>
      <h1 style="color: #F96;	display: block;font-size: 30px;font-weight: 400;">Hubungi Kami</h1>
      @if (session('status'))
        <div class="alert alert-success">
          {{ session('status')}}
        </div>
      @endif
      <h4 style="	margin:5px 0 15px;
	display:block;
	font-size:13px;">Tuliskan Tanggapan Anda</h4>  
    <form method="post" action="/" >
        @csrf
        <div class="form-group">
            
            <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
        </div>

        <div class="form-group">
            
            <input type="text" class="form-control @error('email') is-invalid @enderror " id="email" placeholder="Masukkan Email" name="email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <textarea rows=5 cols=60 type="text" class="form-control @error('isi') is-invalid @enderror " id="isi" placeholder="Masukkan isi"  name="isi" value="{{old('isi')}}"></textarea>
          <!-- <input type="text" class="form-control @error('isi') is-invalid @enderror " id="isi" placeholder="Masukkan isi"  name="isi" value="{{old('isi')}}"> -->
            @error('nrp')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary" style="width:100%;
	border:1px solid #CCC;
	background:#FFF;
	margin:0 0 5px;
	padding:10px; cursor:pointer;
	width:100%;
	border:none;
	background:#0CF;
	color:#FFF;
	margin:0 0 5px;
	padding:10px;
	font-size:15px;">Tambah Data!</button>

    </form>

    </div>

<!-- Akhir testimonial -->
    <div class="col-md-4 col-xs-12" style="margin-top:99px">
        <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
          <div class="card-header">Call/SMS-085891296109</div>
        </div>
        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
          <div class="card-header">Email-raihanvans@gmail.com</div>
        </div>
        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
          <div class="card-header">Whatsapp-085891296109</div>
        </div>
        <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
          <div class="card-header">Line-raihan_sonic</div>
        </div>
    </div>
    </div>
</div>
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