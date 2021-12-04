<!-- USER SETTINGS DASHBOARD -->
<?php
    // SQLQUERY TO GET INFO BASED ON LOGGED IN USER
      $sql = "SELECT * FROM Users WHERE Username= '".$_SESSION["auth"]."'";
     $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
                $username=$row["Username"];
                $email=$row["Email"];
                $userpassword=$row["User_Password"];
                $firstname=$row["FirstName"];
                $lastname=$row["LastName"];
                $bio=$row["Bio"];
                $location=$row["User_location"];
                $date_reg=$row["Registration"];
            }
?>
<div class="container">
    <div class="row g-1">
        <div class=" col-md-4 d-none d-md-block">
            <div class="card text-light bg-dark">
                <div class="card-body ">
                    <nav class="nav  flex-column nav-pills nav-gap-y-1">
                        <a href="#profile" data-bs-toggle="tab" class=" nav-item nav-link has-icon nav-link-faded active ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user me-2">
                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                <circle cx="12" cy="7" r="4"></circle>
                            </svg>Profile Information
                            
                        </a>
                        <a href="#account" data-bs-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings me-2">
                                <circle cx="12" cy="12" r="3"></circle>
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                            </svg>Account Settings
                        </a>
                        <a href="#security" data-bs-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield me-2">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>Security
                        </a>
                        <a href="#achivement" data-bs-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell me-2">
                                <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                            </svg>Achivement
                        </a>
                        <a href="#billing" data-bs-toggle="tab" class="nav-item nav-link has-icon nav-link-faded">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card me-2">
                                <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                <line x1="1" y1="10" x2="23" y2="10"></line>
                            </svg>Billing
                        </a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card bg-dark text-light">
                <div class="card-header border-bottom mb-3 d-flex d-md-none">
                    <ul class="nav nav-tabs card-header-tabs nav-gap-x-1" role="tablist">
                        <li class="nav-item">
                            <a href="#profile" data-bs-toggle="tab" class="nav-link has-icon active"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#account" data-bs-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#security" data-bs-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shield">
                                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#achivement" data-bs-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                    <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                    <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                </svg></a>
                        </li>
                        <li class="nav-item">
                            <a href="#billing" data-bs-toggle="tab" class="nav-link has-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg></a>
                        </li>
                    </ul>
                </div>
                <div class="card-body tab-content">
                    <div class="tab-pane active" id="profile">
                        <h6>YOUR PROFILE INFORMATION</h6>
                        <hr>
                        <form method="post">
                            <div class="form-group">
                                <label for="FristName" class="mb-2">Firstname</label>
                                <input type="text" class="form-control " name="FristName_setting" aria-describedby="fullNameHelp" placeholder="Enter your firstname" value="<?php echo($firstname);?>">
                                <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                            </div>
                            <div class="form-group">
                                <label for="LastName" class="mb-2">Lastname</label>
                                <input type="text" class="form-control " name="LastName_setting" aria-describedby="fullNameHelp" placeholder="Enter your lastname" value="<?php echo($lastname);?>">
                                <small id="fullNameHelp" class="form-text text-muted">Your name may appear around here where you are mentioned. You can change or remove it at any time.</small>
                            </div>
                            <div class="form-group">
                                <label for="username"class="mb-2">Username</label>
                                <input type="text" class="form-control" 
                                name="Username_setting" aria-describedby="usernameHelp" placeholder="Enter your username" value="<?php echo($username);?>">
                                <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                            </div>
                            <div class="form-group">
                                <label for="username" class="mb-2">Email</label>
                                <input type="email" class="form-control " 
                                name="Email_setting" aria-describedby="usernameHelp" placeholder="Enter your username" value="<?php echo($email);?>">
                                <small id="usernameHelp" class="form-text text-muted">After changing your username, your old username becomes available for anyone else to claim.</small>
                            </div>
                            <div class="form-group">
                                <label for="bio" class="mb-2">Your Bio</label>
                                <textarea class="form-control autosize " name="Bio_setting" placeholder="Write something about you" tyle="overflow: hidden; overflow-wrap: break-word; resize: none; height: 62px;">
                                <?php echo($bio);?></textarea>
                            </div>
    
                            <div class="form-group">
                                <label for="location"class="mb-2">Location</label>
                                <input type="text" class="form-control " name="Location_setting" placeholder="Enter your location" 
                                value="<?php echo($location);?>">
                            </div>
                            <div class="form-group small text-muted">
                                All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
                            </div>

                            <button type="submit" name="update" class="btn btn-danger mt-2">Update Profile</button>
                            <button type="reset" class="btn btn-secondary mt-2">Reset Changes</button>
                        </form>
                    </div>
                    <div class="tab-pane" id="account">
                        <h6>ACCOUNT SETTINGS</h6>
                        <hr>
                        <form>
                            <hr>
                            <div class="form-group">
                                <label class="d-block text-danger ">Delete Account</label>
                                <p class="text-muted font-size-sm">Once you delete your account, there is no going back. Please be certain.</p>
                            </div>
                            <button class="btn btn-danger mb-2" type="button" data-bs-toggle="modal" data-bs-target="#popUp">Delete Account</button>
                            <div class="form-group mb-0">
                                <label class="d-block mb-2">Notifications</label>
                                <ul class="list-group list-group-sm">
                                    <li class="list-group-item has-icon">
                                        New Comments
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                                            <label class="custom-control-label" for="customSwitch1"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item has-icon">
                                        New Stars
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch2">
                                            <label class="custom-control-label" for="customSwitch2"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item has-icon">
                                        Reminders
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch3" checked="">
                                            <label class="custom-control-label" for="customSwitch3"></label>
                                        </div>
                                    </li>
                                    <li class="list-group-item has-icon">
                                        Events
                                        <div class="custom-control custom-control-nolabel custom-switch ml-auto">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch4" checked="">
                                            <label class="custom-control-label" for="customSwitch4"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="security">
                        <h6>SECURITY SETTINGS</h6>
                        <hr>
                        
                           
                                <form action="" method="post">
                                <div class="form-group">
                                <label class="d-block mb-2">Change Password</label>
                                <input type="password" class="form-control <?php echo (isset($old_password_err)) ? 'is-invalid' : ''; ?>" name="old_pass" placeholder="Enter your old password">
                                <span class="invalid-feedback"><?php echo $old_password_err; ?></span>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control <?php echo (isset($password_err)) ? 'is-invalid' : ''; ?> mt-1" name="new_pass" placeholder="New password">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                                </div>
                                <div class="form-group">
                                <input type="password" class="form-control <?php echo (isset($conf_password_err)) ? 'is-invalid' : ''; ?> mt-1" name="confirm_new_pass"placeholder="Confirm new password">
                                <span class="invalid-feedback"><?php echo $conf_password_err; ?></span>
                                </div>
                                <button type="submit" name="changePass"class="btn btn-danger mt-2">Confirm</button>    
                            </form>
                            
                        
                        <hr>
                        <form>
                            <div class="form-group">
                                <label class="d-block mb-2">Two Factor Authentication</label>
                                <button class="btn btn-secondary" type="button">Enable two-factor authentication</button>
                                <p class="small text-muted mt-2">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</p>
                            </div>
                        </form>
                        <hr>
                        <form>
                            <div class="form-group mb-0">
                                <label class="d-block">Sessions</label>
                                <p class="font-size-sm text-secondary">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>
                                <ul class="list-group list-group-sm">
                                    <li class="list-group-item has-icon">
                                        <div>
                                            <h6 class="mb-0">Brussel 190.24.335.55</h6>
                                            <small class="text-muted">Your current session seen in Belgium</small>
                                        </div>
                                        <button class="btn btn-light btn-sm ml-auto" type="button">More info</button>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane" id="achivement">
                        <h6>Achivement</h6>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col d-flex flex-column">
                                <span class="badge m-3 opacity-100 m-3 bg-primary"><i class="bi bi-trophy"></i>First Comment</span>
                        <span class="badge m-3 opacity-25 m-3 bg-secondary"><i class="bi bi-trophy"></i>
 100 Comments</span>
                        <span class="badge m-3 opacity-100 m-3 bg-success"><i class="bi bi-trophy"></i>First Watch</span>
                        <span class="badge m-3 opacity-25 m-3 bg-danger">100 Watchs</span>
                        <span class="badge m-3 opacity-25 m-3 bg-warning text-dark">500 Comments</span>
                        <span class="badge m-3 opacity-25 m-3 bg-info text-dark">I500 Watchs</span>
                        <span class="badge m-3 opacity-25 m-3 bg-light text-dark"></span>
                        
                                </div>
                                <div class="col d-flex flex-column"> <span class="badge m-3 opacity-25 m-3 bg-primary">Primary</span>
                        <span class="badge m-3 opacity-25 m-3 bg-secondary">Secondary</span>
                        <span class="badge m-3 opacity-25 m-3 bg-success">Success</span>
                        <span class="badge m-3 opacity-25 m-3 bg-danger">Danger</span>
                        <span class="badge m-3 opacity-25 m-3 bg-warning text-dark">Warning</span>
                        <span class="badge m-3 opacity-25 m-3 bg-info text-dark">Info</span>
                        <span class="badge m-3 opacity-25 m-3 bg-light text-dark">Light</span>
                        
                            </div>
                        </div>
                        </div>

                    </div>
                    <div class="tab-pane" id="billing">
                        <h6>BILLING SETTINGS</h6>
                        <hr>
                        <form>
                            <div class="form-group">
                                <label class="d-block mb-0">Payment Method</label>
                                <div class="small text-muted mb-3">You have not added a payment method</div>
                                <button class="btn btn-secondary mb-2" type="button">Add Payment Method</button>
                            </div>
                            <div class="form-group mb-0">
                                <label class="d-block mb-2">Payment History</label>
                                <div class="border border-gray-500 bg-gray-200 p-3 text-center font-size-sm">You have not made any payment.</div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
