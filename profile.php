<?php
define('allow', true);
include_once('includes.php');

if ($User->IsLoged() != true) {
    $Alert->SaveAlert('You need to login to use this.', 'error');
    header("Location: /index.php");
    die();
}
include('header.php'); 
?>
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0 font-size-18">IPv4 Ping check</h4>
            <!-- <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Layouts</a></li>
                    <li class="breadcrumb-item active">Horizontal Layout</li>
                </ol>
                </div> -->
        </div>
    </div>
</div>
<!-- end page title -->
<?php include('ads_upper.php'); ?>
<div class="row gutters">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="account-settings">
                    <div class="user-profile">
                        <center>
                        <div class="user-avatar">
                            <img style="background-color:#32394e;border-radius:50%;" src="/assets/images/user.png" alt="Maxwell Admin" height="100">
                        </div><br />
                        <center><h5 class="user-name"><?php echo $User->UserData()["username"]; ?></h5></center>
                        </center>
                        <!-- <br /> -->
                    </div>
                    <br />
                    <div class="about">
                        <h5>Register date</h5>
                        <p><?php echo $Secure->SecureTxt(date('d/m/Y h:i:s', $User->UserData()['registerdate'])); ?></p>
                    </div>
                    <div class="about">
                        <h5>Email adress</h5>
                        <p><?php echo $User->UserData()["email"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
        <div class="card h-100">
            <div class="card-body">
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <form id="editProfile" action="">
                    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" class="form-control" name="fullname" placeholder="Name Lastname" value="<?php echo $Secure->SecureTxt($User->UserData()['fullname']); ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="eMail">Email *</label>
                            <input disabled type="email" class="form-control" name="useremail" value="<?php echo $Secure->SecureTxt($User->UserData()['email']); ?>">
                        </div>
                    </div>
                    </div>
                    <br>
                    <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="telegram">Telegram id</label>
                            <input type="text" class="form-control" name="telegram" placeholder="@yourname" value="<?php echo $Secure->SecureTxt($User->UserData()['telegram']); ?>">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Website URL</label>
                            <input type="url" class="form-control" name="website" placeholder="yourwebsite.com" value="<?php echo $Secure->SecureTxt($User->UserData()['website']); ?>">
                        </div>
                    </div>
                </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Verification</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="telegram">Current password</label>
                            <input type="password" class="form-control" name="cpassword" placeholder="*******">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">New password</label>
                            <input type="password" class="form-control" name="npassword" placeholder="Leave empty for no change.">
                        </div>
                    </div>
                </div>
                <br>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="text-right">
                            <button type="button" onclick="editProfile()" class="btn btn-primary">Update</button>
                            <button type="button" onclick="location.href = '/delete';" class="btn btn-danger">Close account</button>
                        </div>
                    </div>
              </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<?php include('footer.php'); ?>