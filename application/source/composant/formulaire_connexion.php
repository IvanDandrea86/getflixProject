
<div class="d-flex justify-content-center">
<form class="bg-dark text-light p-3 g-5 mt-5 form-border" action="" method="post">
    <div class="d-flex justify-content-center">
      <img class=" " src="./media/pop.png" alt="popcorn" width="72" height="57">
    </div>
    <h2 id="titre"class="text-center">Getflix</h2>
    <div class="form-group ">
    <label for="Username" class="col-form-label">Username:</label>
    <input type="text" name="Username" class="form-control <?php echo (!empty($username_login_err)) ? 'is-invalid' : ''; ?>" id="username_login">
    <span class="invalid-feedback"><?php echo $username_login_err; ?></span>
</div>
    <div class="form-group"> 
    <label for="password" class="col-form-label">Password:</label>
    <input type="password" class="form-control <?php echo (!empty($password_login_err)) ? 'is-invalid' : ''; ?>" name="Password" id="password_login"></input>
    <span class="invalid-feedback"><?php echo $password_login_err; ?></span>
      </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <p>Not yet registered? <a href="?signup" class="link ">Register here Here</a></p>

    <button class="w-100 btn btn-lg btn-danger" type="submit" name="login" >Sign in</button>
  </form>
  </div>
    
  

