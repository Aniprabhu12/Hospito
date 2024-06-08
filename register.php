<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


        <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
    <style>
        .gradient-custom {
/* fallback for old browsers */
background: #6a11cb;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
}
.bg{
  background-color: #5289ab;
}
.cut{
        background-color: #5289ab;
      }
.color{
  color: black;
}
    </style>
</head>
<body>
    



<section class="vh-120 cut">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card text-white bg" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase color">Register</h2>
              <p class="text-black mb-5">Please enter your details!</p>
                <form action="controller/register.php" method="POST" enctype="multipart/form-data">
              <div class="form-outline form-white mb-4">
                <input type="text" name="name" id="typeEmailX" class="form-control form-control-lg" required />
                <label class="form-label text-black" for="typeEmailX">Username</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="tel" name="phone" id="typeEmailX" class="form-control form-control-lg"  title="Please Enter Valid Number" maxlength="10" >
                <label class="form-label text-black" for="typeEmailX">Phone Number</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="file" name="img" id="typeEmailX" class="form-control form-control-lg"/>
                <label class="form-label text-black" for="typeEmailX"></label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" required/>
                <label class="form-label text-black" for="typeEmailX">Email</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                <label class="form-label text-black" for="typePasswordX">Password</label>
              </div>
              <div class="form-outline form-white mb-4">
                <input type="password" name="repassword" id="typePasswordX" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                <label class="form-label text-black" for="typePasswordX">Confirm Password</label>
              </div>

              <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

              <button name="register" class="btn btn-outline-light btn-lg px-5 text-black" type="submit">Register</button>

              </form>

            </div>

            <div style="margin-top: -60px;">
              <p class="mb-0 text-black">Already a user? <a href="login.php" class=" fw-bold text-black">Login</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
</body>
</html>
