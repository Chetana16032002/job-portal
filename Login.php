<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Register</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 <style media="screen">
  body{
    background-image: url('https://images.pexels.com/photos/4240586/pexels-photo-4240586.jpeg?auto=compress&cs=tinysrgb&w=1600');
    background-size: cover;
  }
   form{
     margin-top:6em ;
     margin-left: 30em;
     margin-right: 10em;
     padding: 30px;
     box-shadow: 10px 10px 8px #888888;
     background-color: #fff;
   }
 </style>
  </head>
  <body>
    <div class="container">
      <form>
  <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="email" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
<br>
New User ?   <a href="Register.php">Sign Up</a>

</form>
    </div>
  </body>
</html>
