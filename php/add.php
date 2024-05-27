<?php
include 'connn.php';
if (isset($_POST['submit'])) {
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
   

$sql="INSERT INTO data(name,email,pwd) VALUES('$name','$email','$password')";
$result=mysqli_query($conn,$sql);
mysqli_close($conn);
}
?>
<html>
    <head>
        <title>LOGIN</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    </head>
</html>

        <style type="text/css">

          body{
            background-color: rgb(236, 238, 238);
          }
#foter{
  background-color: aliceblue;
}

          .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
        </style>
    </head>
    <body>
      <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="back.avif"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form id="myForm" action ="logincheck.php" method="POST">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3"></p>
                 
      
                  
      
                  
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0"></p>
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="text" name="username" id="username" class="form-control form-control-lg"
                    placeholder="Enter User Name" />
                  <label class="form-label" for="form3Example3">User Name</label>
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="password" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <label class="form-label" for="form3Example4">Password</label>
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  
                  <a href="register.html" class="text-body">Forgot password?</a>
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  
                  <button type="submit" class="btn btn-secondary" value="Login" value="Login">Login</button>
                  <!--<button type="button" class="btn btn-secondary">Login</button>-->
                  <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register.html"
                      class="link-danger">Register</a></p>
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </section>
    </body>
</html>
