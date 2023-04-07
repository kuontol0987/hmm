
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
    header('Location: /home');
    die();
}
?>
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <title>Authentication | DSTAT.PRO</title>
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
                                            <h5 class="text-primary">Welcome back!</h5>
                                            <p>Sign in to continue to dstat.pro</p>
                                        </div>
                                    </div>
                                    <div class="col-5 align-self-end">
                                        <img src="assets/images/profile-img.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0"> 
                                <div class="auth-logo">
                                    <a href="index.html" class="auth-logo-light">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo-light.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>

                                    <a href="index.html" class="auth-logo-dark">
                                        <div class="avatar-md profile-user-wid mb-4">
                                            <span class="avatar-title rounded-circle bg-light">
                                                <img src="assets/images/logo.svg" alt="" class="rounded-circle" height="34">
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2">
                                    <form id="Login" class="form-horizontal" action="">
        
                                        <div class="mb-3">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Enter username">
                                        </div>
                
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <div class="input-group auth-pass-inputgroup">
                                                <input type="password" name="userpassword" class="form-control" placeholder="Enter password">
                                                <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                                            </div>
                                        </div>

                                        
                                        <div class="mt-3 d-grid">
                                            <button type="button" onclick="Login()" class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
                                        </div>
            

                                        <div class="mt-4 text-center">
                                         <p>Don't have an account ? <a href="/register" class="fw-medium text-primary"> Signup now </a> </p>
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
        <!-- end account-pages -->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/js/toast.js"></script>
        <script src="assets/js/jquery.toast.min.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
</html>
