<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login-form.css">
    <script src="login-form.js" defer></script>
    <title>login-page</title>
</head>
<body>
    <div class="pic">
     <div class="header1">
      <h2 class="logo">Logo</h2>
      <ul class="li">
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">Contectus</a></li>
      </ul>
      <h6 class="btn">signup</h6>
     </div>
      <div class="header">
        <h1>Assignment login page</h1>
        <p>Upload your login page and registration page. This page should be designed using html and css etc. Backend should include PHP code to interact with MYsql database.</p>
        <h6 class="btn2">signin/login</h6>
      </div>
        <form  class="form" action="login.php" method="post" >
            <h2>Login</h2><br>
            <label class="label" for="email">Email</label><br>
            <input type="text" required class="input"   name="email"><br>
            <label class="label" for="PASSWORD">Password</label><br>
            <input type="password"  required class="input" name="PASSWORD"><br>
          <div class="check">
            <input type="checkbox" id="password" class="checkbox" required><p>Remember me?</p><br>
          </div>
          <input type="submit" name="signin" value="signin" class="a">
        </form>
    </div>
</body>
</html>