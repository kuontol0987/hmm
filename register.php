
<?php
/*----------------------------------
    ============================
    Website: dstat.pro
    Author: Hazze
    Website url: https://dstat.pro/
    ============================
-----------------------------------*/


define('allow', true);
include('includes.php');
if ($User->IsLoged() == true) {
    $Alert->SaveAlert('You are already logged in.', 'error');
    header('Location: /home');
    die();
}


?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Register | DSTAT.PRO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="DSTAT.PRO | Your best choice for online network and hacking tools, we have best Layer 4 and Layer 7 dstat graphs to provide you best precision for testing your power!" name="description" />
        <meta content="DSTAT.PRO" name="author" />
        <meta name="keywords" content="hack tools, hack tool, hacking tools , dstat, dstat.pro, skypegrab, skype resolver, resolver skype, ip logger, iplogger, cloudflare resolver, ip to skype, hacking, hacker, hack, network tools, ip grabber, dstat, layer7 dstat, layer4, ddos graph, ddos dstat, discord resolver, free dstat, dstat layer4 free, dstat online,layer4,l4,layer4 dstat,dstat,graph,layer7,layer7 dstat,ddos,monitor">
        <meta name="robots" content="index, follow">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap-dark.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
        <link href="assets/css/jquery.toast.min.css" rel="stylesheet" type="text/css"></link>
        <script src="assets/js/main.js"></script>
        <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />


    <body>
        
        <div class="account-pages my-5 pt-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card overflow-hidden">
                            <div class="bg-primary bg-soft">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="text-primary p-4">
                                            <h5 class="text-primary">Register</h5>
                                            <p>Get your free dstat.pro account now.</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div>
                                    <a href="index.html">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form id="Register" action="#" method="POST" autocomplete="off">
            
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                                            <div class="invalid-feedback">
                                                Please Enter Username
                                            </div>  
                                        </div>

                                        <div class="mb-3">
                                            <label for="useremail" class="form-label">Email</label>
                                            <input type="email" class="form-control" name="useremail" placeholder="Enter email">  
                                            <div class="invalid-feedback">
                                                Please Enter Email
                                            </div>      
                                        </div>
                
                                        <div class="mb-3">
                                            <label for="userpassword" class="form-label">Password</label>
                                            <input type="password" class="form-control" name="userpassword" placeholder="Enter password">
                                            <div class="invalid-feedback">
                                                Please Enter Password
                                            </div>       
                                        </div>
                                        <div class="mb-3">
                                          <label for="captcha" class="form-label">Captcha</label>
                                          <br>
                                              <img id="image_captcha" src="captcha.php" style="margin-top: 5px;margin-left:3px;" />
                                              <br>
                                              <br>
                                              <input type="text" class="form-control" name="captcha" placeholder="Enter captcha">
                                        </div>
                    
                                        <div class="mt-4 d-grid">
                                            <button type="button" class="btn btn-primary waves-effect waves-light" onclick="Register();">Register</button>
                                        </div>

                
                                        <div class="mt-4 text-center">
                                        <p>Already have an account ? <a href="/login" class="fw-medium text-primary"> Login</a> </p>
                                        </div>
                                    </form>
                                </div>
            
                            </div>
                        </div>
                        <div class="mt-5 text-center">
                            
                            <div>
                                <p>© <?php echo date('Y'); ?> dstat.pro. Made with <i class="mdi mdi-heart text-danger"></i> by <a href="#">@hqzz</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/toast.js"></script>
        <script src="assets/js/jquery.toast.min.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/validation.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>
