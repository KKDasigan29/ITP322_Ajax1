<!DOCTYPE html>
<html>
  <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Create Account</title>
  </head>
  <body>
    <div class="row  justify-content-center align-content-center">
      <div class="col-8">
        <form style="margin-top: 20%; background: linear-gradient(to right, pink, lightblue); border: 1px inset; padding: 4%; border-radius: 20px;" class= action="" method="post">
          <div class="col text-center">
             <p style="margin-bottom: 2%;"class="h2">Sign Up!</p>
             </div>
             <div class="row">
               <div class="col">
                <input id="first_name" class="form-control text-center mb-3" type="text" placeholder="First Name">
                </div>
              <div class="col">
                <input id="last_name" class="form-control text-center mb-3" type="text" placeholder="Last Name">
              </div>
          </div>
          <input id="username" class="form-control text-center mb-3" type="text" placeholder="Username">
          <input id="email" class="form-control text-center mb-3" type="text" placeholder="Email">
          <input  id="password" class="form-control text-center mb-3" type="text" placeholder="Password">
          <button id="btnSave" type="button" style="margin-top:1%;"class="btn btn-dark" >Create</button>
        </form>
      </div>
      <script src="js/jquery.js"></script>
      <script src="js/create.js"></script>
    </body>
</html>
