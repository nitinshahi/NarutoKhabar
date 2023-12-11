<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <link rel="stylesheet" href="../backend/asstes/style.css" />
  </head>
  <body>
    <div class="main">
      <div class="login">
        <div class="head">
          <h2>Naruto Khabar</h2>
        </div>

        <form action="{{route('login')}}" class="form" method="post">
          @csrf
          @method('post')
          
          <input
            type="email"
            placeholder="Email@example.com"
            class="text"
            id="username"
            name="email"
          /><br />
          <input
            type="password"
            placeholder="••••••••••••••"
            class="password"
            id="password"
            name="password"
          /><br />
          <div class="btns">
            <button class="btn-login" onclick="loginValidation()">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
        </form>
        <p>Hello Chief Welcome to <a href="../index.html">Nauto News. </a></p>
      </div>
    </div>
    <script src="../backend/asstes/backedjs.js"></script>
  </body>
</html>
