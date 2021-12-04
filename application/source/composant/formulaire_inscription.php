<!-- 
SIGNUP FORM PAGE 
-->
<div class="full_screen">
<div class="d-flex justify-content-center ">
    <form class="bg-dark text-light p-3 g-1  form-border" style="height:100%;" action="" method="post">
        <div class="d-flex justify-content-center">
            <img class=" " src="./media/pop.png" alt="popcorn" width="72" height="57">
        </div>
        <h2 id="titre" class="text-center">Getflix</h2>
        <div class="form-group">
            <label for="Username" class="col-form-label">Username:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="text" name="Username" class="form-control 
                        <?php echo (isset($username_err)) ? 'is-invalid' : ''; ?>
                        " id="username">
            <span class="invalid-feedback"><?php echo $username_err; ?></span>
            <span class="valid-feedback" id="valid-user"></span>
        </div>
        <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="email" class="form-control 
                    <?php echo (isset($email_err)) ? 'is-invalid' : ''; ?>
                    " name="Email" id="email"></input>
            <span class="invalid-feedback"><?php echo $email_err; ?></span>
            <span class="valid-feedback" id="valid-mail"></span>
        </div>
        <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control 
             <?php echo (isset($password_err)) ? 'is-invalid' : ''; ?>
             " name="Password" id="password"></input>
            <span class="invalid-feedback"><?php echo $password_err; ?></span>
            <span class="valid-feedback" id="valid-user"></span>
        </div>
        <div class="form-group">
            <label for="confirm_password" class="col-form-label">Confirm Password:</label>
            <!-- Input with php injected to control invaid status -->
            <input type="password" class="form-control 
            <?php echo (isset($confirm_password_err)) ? 'is-invalid' : ''; ?>
            " name="confirm_Password" id="confirm_password"></input>
            <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        </div>
        <div class="form-group">
            <label for="firstname" class="col-form-label">Firstname:</label>
            <input type="text" class="form-control <?php echo (isset($firstname_err)) ? 'is-invalid' : ''; ?>" 
            name="FirstName" id="firstname"></input>
            <span class="invalid-feedback"><?php echo $firstname_err; ?></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        </div>
        <div class="form-group">
            <label for="lastname" class="col-form-label">Lastname:</label>
            <input type="text" class="form-control <?php echo (isset($lastname_err)) ? 'is-invalid' : ''; ?>" 
            name="LastName" id="lastname"></input>
            <span class="invalid-feedback"><?php echo $lastname_err; ?></span>
            <span class="valid-feedback" id="valid-confirm"></span>
        
        </div>
        <div class="modal-footer">
            <p>Alredy have an account? <a href="?login" class="no-style"><button class="no-style">Login Here</button></a></p>
           
            <button type="submit" class="btn btn-danger" name="signin_submit" id="signupBtn">Submit</button>
        </div>
    </form>
</div>
</div>