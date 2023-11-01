<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bg-white {
            background-color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-card {
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 20px;
            width: 80%;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login-form {
            width: 60%;
        }

        .login-image {
            width: 100%;
            max-height: 80vh;
            border-radius: 10px;
        }
    </style>
    <link rel="stylesheet" href="view/src/css/bootstrap.min.css">
    <title>login</title>
</head>
<body>
<section class="bg-white">
  <div class="container-fluid justify-content-center" >
    <div class="row login-card" style="margin: auto;">
      <div class="col-sm-6 px-0 d-none d-sm-block d-flex align-items-center justify-content-center">
        <div class="">
          <form class="login-form" method="POST">
            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
              <input type="email" id="form2Example18" class="form-control form-control-lg" name="email"/>
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="form2Example28" class="form-control form-control-lg" name="pass"/>
              <label class="form-label" for "form2Example28">Password</label>
            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">Login</button>
            </div>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="/college_project/teacher_login">log in as a teacher?</a></p>
            <p>Don't have an account? <a href="/college_project/register" class="link-info">Register here</a></p>
          </form>
        </div>
      </div>

      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="view/src/imgs/loginpage.jpg" alt="Login image" class="login-image" style="object-fit: cover; object-position: left; border-radius: 10px;"/>
      </div>
    </div>
  </div>
</section>
<script src="/viewsrc/js/bootstrap.bundle.min.js"></script>
</body>
</html>



