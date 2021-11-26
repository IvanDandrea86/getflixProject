
<<<<<<< HEAD
    <?php
include ("./Composant_php/login.php");
?>
=======
>>>>>>> 341c6cbe3bca6edecaba8100e144d01772c493d3

  <form class="form-signin col-4 bg-dark text-light mt-5 g-3" method="post">
    <img class="mb-4 align-self-center" src="./media/pop.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
    <div class="form-floating">
    <label for="Username" class="col-form-label">Username:</label>
    <input type="text" name="Username" class="form-control <?php echo (!empty($username_login_err)) ? 'is-invalid' : ''; ?>" id="username_login">
    <span class="invalid-feedback"><?php echo $username_login_err; ?></span>
</div>
    <div class="form-floating"> 
    <label for="password" class="col-form-label">Password:</label>
    <input type="password" class="form-control <?php echo (!empty($password_login_err)) ? 'is-invalid' : ''; ?>" name="Password" id="password_login"></input>
    <span class="invalid-feedback"><?php echo $password_login_err; ?></span>
      </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>

    <button class="w-100 btn btn-lg btn-danger" type="submit" name="login" >Sign in</button>
  </form>

    
  

