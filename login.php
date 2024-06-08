<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css" rel="stylesheet" />

    <style>
        /* body{
            background: linear-gradient(to right, red, blue);
        } */
        /* .gradient-custom { */
        /* fallback for old browsers */
        /* background: #6a11cb; */

        /* Chrome 10-25, Safari 5.1-6 */
        /* background: -webkit-linear-gradient(to right, rgb(120, 20, 210,8), rgba(37, 117, 252, 1)); */

        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        /* background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)) */
        /* } */
        /* .panel{
            background: linear-gradient(to right, red, blue);
        }
        .mb-2{
            background: linear-gradient(to right, rgb(233, 74, 100), rgb(233, 80, 233));
        } */
        body {
            background: linear-gradient(to right, rgba(246, 247, 246, 0.879), rgb(62, 98, 145));
            background-color: rgb(161, 11, 113);
        }

        .panel {
            background: linear-gradient(to right, rgba(248, 249, 249, 0.55), rgb(62, 82, 155));
        }
    </style>
</head>

<body>




    <section class="vh-120 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="panel">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Please enter your User Name and Password!</p>
                                    <form action="controller/login.php" method="POST">
                                        <div class="form-outline form-white mb-4">
                                            <input type="email" name="email" id="typeEmailX" class="form-control form-control-lg" required />
                                            <label class="form-label" for="typeEmailX">Email</label>
                                        </div>

                                        <div class="form-outline form-white mb-4">
                                            <input type="password" name="password" id="typePasswordX" class="form-control form-control-lg" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required />
                                            <label class="form-label" for="typePasswordX">Password</label>
                                        </div>

                                        <!-- <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p> -->

                                        <button name="login" class="btn btn-outline-light btn-lg px-5" type="submit">Login</button><br>
                                        <a href="" class="text-light" data-toggle="modal" data-target="#exampleModalCenter">Forgot Password?</a>

                                    </form>

                                </div>

                                <div style="margin-top: -60px;">
                                    <p class="mb-0">Don't have an account? <a href="register.php" class="text-white-50 fw-bold">Sign Up</a>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-primary text-light">
                        <h5 class="modal-title" id="exampleModalLongTitle">Enter Your Email Address.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="controller/enteremail.php" method="post">
                            <div class="form-group">
                                <label for="">Enter Your Email</label><br>
                                <input type="email" placeholder="Enter Email" name="email" class="form-control">
                            </div>
                            <input type="submit" name="enteremail" class="btn btn-info">
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
</body>

</html>