<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/4.4/examples/sign-in/signin.css">
    <title>Login</title>
  </head>
  <body>
    <form class="form-signin" action="<?= base_url().'admin/login/login_post' ?>" method="post">

      <?php   
            if ($error != "NO_ERROR") {
              echo '<div class="alert alert-danger" role="alert">';
              echo "$error";
              echo '</div>';
            }

       ?>

  	  <img class="mb-4" src="/docs/4.4/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  	  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  	  <label for="inputEmail" class="sr-only">Username</label>
  	  <input type="text" name="email" id="inputEmail" class="form-control" placeholder="Username" required="" autofocus="">
  	  <label for="inputPassword" class="sr-only">Password</label>
  	  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
  	  <div class="checkbox mb-3">
  	    <label>
  	      <input type="checkbox" value="remember-me"> Remember me
  	    </label>
  	  </div>
  	  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  	  <p class="mt-5 mb-3 text-muted">© 2017-2020</p>
	</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>