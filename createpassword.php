<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>
</head>
<body>
    <!-- Section: Design Block -->
<section class="">
  <!-- Jumbotron -->
  <div class="px-4 py-5 px-md-5 text-center text-lg-start vh-100" style="background-color: hsl(0, 0%, 96%)">
    <div class="container">
    
     

        <div class="col-lg-6 mb-5 mb-lg-0" style="margin-left: 300px;">
          <div class="card" >
            <div class="card-body py-5 px-md-5">
                <div>
                    <h3 class="text-center">Create Password</h3>
                </div>
              <form action="controller/repassword.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
              
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example3" class="form-control" name="password"/>
                  <label class="form-label" for="form3Example3">Enter Password</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4" class="form-control" name="cpassword"/>
                  <label class="form-label" for="form3Example4">Repeat Password</label>
                </div>

                <!-- Checkbox -->
               

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4" name="repass">
                  Create
                </button>
              
                <!-- Register buttons -->
                
                
              </form>
            </div>
          </div>
  
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
    <!-- MDB -->
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</body>
</html>