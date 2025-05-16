@extends('layouts.login-register')

@section('title', 'Login')

@section('styles')
<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  body {
    background: url('images/donuts-dark.png');
    background-size: cover;
    color: #fff;
  }

  .container {
    display: flex;
    justify-content: center;
    margin-top: 40px;
  }

  .register-box {
    display: flex;
    text-align: center;
    border-radius: 30px;
    overflow: hidden;
  }

  .register-left,
  .register-right {
    flex: 1;
    padding: 50px 5px 50px;
  }

  .register-left {
    background: #1c1c1c;
  }

  .register-left h2 {
    font-size: 82px;
    color: pink;
    font-weight: bold;
  }

  .form-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 20px;
    background: #1c1c1c;
    padding: 30px;
    border-radius: 10px;
    max-width: 500px;
    margin: auto;
  }

  .form-grid input {
    width: 100%;
    padding: 12px;
    font-size: 14px;
    border: none;
    border-radius: 8px;
  }

  .password-wrapper {
    position: relative;
    display: flex;
    align-items: center;
  }

  .password-wrapper input {
    width: 100%;
    padding-right: 40px;
  }

  .eye-icon {
    position: absolute;
    right: 10px;
    cursor: pointer;
  }

  .forgot {
    font-size: 12px;
    color: #ccc;
    margin-top: 10px;
  }

  .forgot a {
    color: white;
    text-decoration: underline;
    font-weight: bold;
  }

  .create-btn {
    margin: auto;
    padding: 15px 30px;
    font-size: 19px;
    font-weight: bold;
    color: black;
    background: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
  }

  .register-right {
    background: #FFFFFF;
    text-align: center;
    justify-content: center;
    max-width: 450px;
  }

  .register-top h2 {
    font-size: 92px;
    color: pink;
  }

  .register-tagline {
    width: 330px;
    margin-bottom: -30px;
    font-size: 12px;
    text-align: right;
    color: black;
  }

  .register-top .subtitle {
    margin: -12px 5px 20px;
    font-size: 12px;
    color: black;
    letter-spacing: 1px;
  }

  .register-deliss-note {
    width: 80%;
    margin: 15px auto 5px;
    font-size: 12px;
    color: black;
    letter-spacing: 1px;
    line-height: 1.8;
  }

  .login-btn {
    width: 150px;
    margin: 20px auto 40px;
    padding: 10px;
    font-size: 19px;
    font-weight: bold;
    background: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  }


  .social-login {
    width: 80%;
    margin: auto;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 10px;
  }
  .social-login img {
    height: 25px;
    width: 25px;
    border-radius: 5px;
  }

  .follow-us {
    color: black;
    font-size: 11px;
  }

  .facebook-btn,
  .insta-btn,
  .tiktok-btn {
    width: 125px;
    padding: 5px;
    text-align: left;
    font-size: 15px;
    font-weight: bold;
    color: rgb(100, 100, 100);
    background: none;
    border: none;
    cursor: pointer;
  }

</style>
@endsection

@section('content')
<main class="container">
  <div class="register-box">
    <div class="register-left">
      <h2>LOGIN</h2>
      <form method="POST" action="">
        @csrf
        <div class="form-grid">
          <input type="text" name="username" placeholder="Username" required>
          <div class="password-wrapper">
            <input type="password" name="password" placeholder="Password" required>
            <span class="eye-icon">👁️</span>
          </div>
          <div class="forgot">
            <p>DID YOU FORGOT YOUR PASSWORD? <a href="">CLICK HERE</a></p>
          </div>
        </div>
        <button type="submit" class="create-btn">LOGIN</button>
      </form>
    </div>

    <div class="register-right">
      <div class="register-top">
        <p class="register-tagline">EST 2025</p>
        <h2>Deliss</h2>
        <p class="subtitle">WHERE ELEGANCE MEETS SWEETNESS</p>
        <hr />
        <p class="register-deliss-note">
          USE AN ACCOUNT TO KEEP YOUR ORDERS ON TRACK AND SAFE 
          <br>
          DON'T HAVE AN ACCOUNT YET?
        </p>
      </div>
      <a href="">
        <button class="login-btn">SIGN UP</button>
      </a>
      <p class="follow-us">TO KEEP UPDATED, FOLLOW OUR SOCIALS!</p>
      <div class="social-login">
        <img src="{{ asset('icons/fb-icon.png') }}" alt="facebook">
        <button class="facebook-btn">facebook</button>
        <img src="{{ asset('icons/ig-icon.png') }}" alt="instagram">
        <button class="insta-btn">instagram</button>
        <img src="{{ asset('icons/tiktok-icon.png') }}" alt="tiktok">
        <button class="tiktok-btn">tiktok</button>
      </div>
    </div>
  </div>
</main>
@endsection
