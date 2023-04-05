<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Animated Login Form | CodingNepal</title>
    <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="{{route('store_login')}}">
        @csrf
        <div class="txt_field">
          <input type="email" name="email">

          <span></span>
          <label>Username</label>
        </div>
        @error('email')
        {{ $message }}
        @enderror
        <div class="txt_field">
            <input type="password" name="password">
            <span></span>
            <label>Password</label>
        </div>
        @error('password')
        {{ $message }}
        @enderror
        {{-- <div class="pass">Forgot Password?</div> --}}
        <input type="submit" name="submit" value="Login">
        {{-- <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div> --}}
      </form>
    </div>

  </body>
</html>
