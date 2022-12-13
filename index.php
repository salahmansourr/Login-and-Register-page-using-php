<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- font awesome import -->
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Css file import-->
    <link rel="stylesheet" href="2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
        <div class="row px-3">
            <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">
                <div class="img-left d-none d-md-flex"></div>
                <div class="card-body">
                    <h4 class="title text-center mt-4" id="tite">welcome back</h4>
                    <?php if(isset($_GET['error'])){?>
                        <p class="error" style="background-color: rgb(255, 194, 194); color:rgb(114, 0, 0);padding: 7px;width: 90%; margin-left:23px;"><?php echo $_GET['error']; ?></p>
                    <?php }
                    if(isset($_GET['erroremail'])){?>
                        <p class="error" style="background-color: rgb(255, 194, 194); color:rgb(114, 0, 0);padding: 7px;width: 90%; margin-left:23px;"><?php echo $_GET['erroremail']; ?></p>
                    <?php }
                    ?>
                    <form action="login.php" method="post" class="form-box px-3">
                        <div class="form-input">
                            <input type="email" name="email" placeholder="example@gmail.com" tabindex="10" class="input1" >
                        </div>
                        <div class="form-input">
                            <input type="password" name="password" placeholder="Enter your password" class="input1" >
                        </div>
                        <div class="mb-3">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="remeber" id="cb1">
                                <label class="custom-control-label" for="cb1">Remember me</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="log" class="btn btn-block tex-uppercase">Login</button>
                        </div>
                        <div class="text right"><a href="#" class="forget-link">Forget Password ?</a>
                        <span class="erroe" style="margin-left: 50px; color: red;"></span>
                        </div>
                        <div class="text center mb-3">Login with :</div>
                        <div class="row mb-3">
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-facebook">Facebook</a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-google">Google</a>
                            </div>
                            <div class="col-4">
                                <a href="#" class="btn btn-block btn-social btn-twitter">Twitter</a>
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="text-center mb-2">
                            <p>don't have account ? <a href="register.php" class="register-link">create new account</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>