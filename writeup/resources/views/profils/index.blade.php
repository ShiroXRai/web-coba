@extends('layout/main')

@section('title','Profil')

@section('container')

<link rel="stylesheet" type="text/css" href=" {{asset('css/Profil.css')}}">

	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<!-- Jumbotron -->
<img src="https://i.ytimg.com/vi/5-LyRjHlRgQ/maxresdefault.jpg" alt="home" class="cover" 
 style=" margin-top: -75px; content: '';
    display: block;
    width: 100%;
    height: 11%; ">
<!-- Akhir Jumbotron-->

<!-- Container -->
<div class="container">

<!-- INI yang bener -->
<div class="profile">
    
		<div class="image-container">
			<img src="{{$user->student->getAvatar()}}" style="width:100%">
		</div>

		<div class="title-pro">
			<h2>Profil</h2>
		</div>

		<div class="main-container">
			<p><i class="fa fa-user-circle icon"></i>{{ $user->name }}</p>
			<p><i class="fa fa-envelope icon"></i>{{ $user->email }}</p>
			<p><i class="fa fa-user-o icon"></i>{{ $user->role }}</p>
      <p><i class="fa fa-id-card icon"></i>{{ $user->student->nrp }}</p>
      <p><i class="fa fa-briefcase icon"></i>{{ $user->student->jurusan }}</p>
			<hr>
           <a href="{{ $user->id }}/edit" class="btn btn-primary" style="margin: auto;">Edit</a>
		
			</div>
		</div>
	</div>
<!-- Testimonial -->

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