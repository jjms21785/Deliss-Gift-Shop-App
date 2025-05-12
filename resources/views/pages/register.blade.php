@extends('layouts.app')

@section('title', 'Register')

@section('styles')
<style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
  }

  body {
    background: url('storage/images/donuts-dark.png');
    background-size: cover;
    color: #fff;
  }

  /* Layout */
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
    width: 100%;
    max-width: 1000px;
  }

  .register-left,
  .register-right {
    flex: 1;
    padding: 50px 5px 25px;
  }

  /* Left Section */
  .register-left {
    background: #1c1c1c;
  }

  .register-left h2 {
    font-size: 52px;
    font-weight: bold;
  }

  .form-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    background: #1c1c1c;
    padding: 30px;
    border-radius: 10px;
    max-width: 800px;
    margin: auto;
  }

  .form-grid input,
  .form-grid textarea {
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

  textarea {
    resize: none;
    height: 100%;
    min-height: 100px;
    grid-column: 2;
    grid-row: 1 / span 3;
  }

  .terms {
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    gap: 10px;
    font-size: 12px;
  }

  .terms a {
    color: #fff;
    text-decoration: underline;
    font-weight: bold;
  }

  .create-btn {
    margin: 30px auto;
    padding: 15px 30px;
    font-size: 19px;
    font-weight: bold;
    color: black;
    background: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
  }

  /* Right Section */
  .register-right {
    background: #f2f2f2;
    text-align: center;
    justify-content: center;
    max-width: 350px;
  }

  .register-top h2 {
    font-size: 92px;
    color: pink;
  }

  .register-tagline {
    width: 300px;
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
    width: 70%;
    margin: 15px auto 5px;
    font-size: 12px;
    color: black;
    letter-spacing: 2px;
    line-height: 1.8;
  }

  .login-btn {
    width: 175px;
    margin: 20px auto 40px;
    padding: 15px 25px;
    font-size: 19px;
    font-weight: bold;
    background: white;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  }

  .register-bottom {
    width: 80px;
    margin: -10px auto 0;
    font-size: 12px;
    color: black;
    background: #f2f2f2;
    text-align: center;
    justify-content: center;
    align-items: center;
  }

  .social-login {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 10px;
    margin-top: 10px;
  }

  .facebook-btn,
  .google-btn {
    width: 125px;
    padding: 8px 20px;
    font-size: 19px;
    font-weight: bold;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
  }

  .facebook-btn {
    color: white;
    background: #1876EF;
  }

  .google-btn {
    color: rgb(100, 100, 100);
  }
</style>
@endsection

@section('content')
<main class="container">
  <div class="register-box">
    <div class="register-left">
      <h2>REGISTER</h2>
      <form>
        <div class="form-grid">
          <input type="email" placeholder="Email">
          <input type="text" placeholder="Username">
          <input type="text" placeholder="Contact Number">
          <div class="password-wrapper">
            <input type="password" placeholder="Password">
            <span class="eye-icon"></span>
          </div>
          <input type="password" placeholder="Confirm Password">
          <textarea placeholder="Address"></textarea>
        </div>
        <div class="terms">
          <input type="checkbox" id="terms" required />
          <label for="terms">ACCEPT THE <a href="#">TERMS & CONDITIONS</a></label>
        </div>
        <button type="submit" class="create-btn">CREATE</button>
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
          ALREADY HAVE AN ACCOUNT? LOGIN NOW!
        </p>
      </div>
      <button class="login-btn">LOGIN</button>
      <hr />
      <p class="register-bottom">OR USE</p>
      <div class="social-login">
        <button class="facebook-btn">facebook</button>
        <button class="google-btn">google</button>
      </div>
    </div>
  </div>
</main>
@endsection
