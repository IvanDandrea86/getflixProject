<?php
include ("./Composant_php/create.php");
?>
   <form class="bg-dark text-light p-3 g-5 mt-5" action="" method="post">
                    <div class="form-group">
                        <label for="Username" class="col-form-label">Username:</label>
                        <input type="text" name="Username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="username">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" name="Email" id="email"></input>
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password:</label>
                        <input type="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" name="Password" id="password"></input>
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password" class="col-form-label">Confirm Password:</label>
                        <input type="password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" name="confirm_Password" id="confirm_password"></input>
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label for="firstname" class="col-form-label">Firstname:</label>
                        <input type="text" class="form-control" name="FirstName" id="firstname"></input>
                    </div>
                    <div class="form-group">
                        <label for="lastname" class="col-form-label">Lastname:</label>
                        <input type="text" class="form-control" name="LastName" id="lastname"></input>
                    </div>
                    <div class="modal-footer">
                        <p>Alredy have an account? <a href="#" class="link ">Login Here</a></p>
                        
                        <button type="submit" class="btn btn-danger"  name="signin_submit" id="signupBtn">Submit</button>
                    </div>
                </form>