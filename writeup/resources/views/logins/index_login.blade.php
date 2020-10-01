@extends('layout/login')

@section('title','Web PaaS')

@section('container')
<link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
<div class="cont">
<form method="post" action="/postlogin" >
  <div class="form sign-in">
    <h2>Get Back Here,</h2>
    @if (session('status'))
        <div class="alert alert-success" style="text-align:center; ">
          {{ session('status')}}
        </div>
      @endif
    @csrf
    <label>
      <span>Email</span>
      <input type="email" class="form-control" id="signin-email" name="email">
    </label>
    <label>
      <span>Password</span>
      <input type="password" class="form-control" id="signin-password" name="password">
    </label>
    <p class="forgot-pass">Forgot password?</p>
    <button type="sumbit" class="submit">Sign In</button>
   <!--  <button type="button" class="fb-btn">Connect with <span>facebook</span></button> -->
  </div>
</form>
  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Create Your Account Here!</h2>
        <p>Sign Up and Explore more Articles</p>
      </div>
      <div class="img__text m--in">
        <h2>Get Back to your Account!</h2>
        <p>Sign In to your previous Account</p>
      </div>
      <div class="img__btn">
        <span class="m--up">Sign Up</span>
        <span class="m--in">Sign In</span>
      </div>
    </div>
    <form method="POST" action="/signup">
    @csrf
    <div class="form sign-up" >
      <h2>Create Your Account</h2>

      <label>
        <span>Name</span>
        <input type="text" class="form-control @error('nama') is-invalid @enderror " id="nama"  name="nama" value="{{old('nama')}}">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
      </label>
      <label>
        <span>Email</span>
        <input type="text" class="form-control @error('email') is-invalid @enderror " id="email"  name="email" value="{{old('email')}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
      </label>
      <label>
        <span>Password</span>
        <input type="text" class="form-control @error('password') is-invalid @enderror " id="password"  name="password" value="{{old('password')}}">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
      </label>
      <button type="submit" class="submit">Sign Up</button>
    </div>
    </form>
  </div>
</div>
<script type="text/javascript" src="{{asset('css/script.js')}}"></script>
@endsection