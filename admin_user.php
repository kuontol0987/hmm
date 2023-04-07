<?php
define('allow', true);
include_once('includes.php');

if ($User->IsLoged() != true || $User->UserData()['rank'] != 5) {
    $Alert->SaveAlert('You dont have permission to use this.', 'error');
    header("Location: /index.php");
    die();
}

$userID = $GET['id'];

if(!(isset($userID) || is_numeric($userID))) {
    $Alert->SaveAlert('You need to input valid user id.', 'error');
    header("Location: /admin_users.php");
    die();
}

$IsCreated = $User->CountUserByID($userID)['Count'];

if($IsCreated == 0) {
    $Alert->SaveAlert('This user doesnt exists.', 'error');
    header("Location: /admin_users.php");
    die();
}

include('header.php'); 
?>

                        <?php include('ads_upper.php'); ?>
                        <div class="row">
                                <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Modify user</h4>
                                        <form id="modifyuser" name="modifyuser">
                                              <input type="hidden" class="form-control" name="userID" value="<?php echo $userID; ?>" />
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Username</label>
                                                <input class="form-control" name="username" value="<?php echo $Secure->SecureTxt($User->UserDataID($userID, 1)['username']); ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <input class="form-control" name="fullname" value="<?php echo $Secure->SecureTxt($User->UserDataID($userID, 1)['fullname']); ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input class="form-control" name="email" value="<?php echo $Secure->SecureTxt($User->UserDataID($userID, 1)['email']); ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="telegram" class="form-label">Telegram</label>
                                                <input class="form-control" name="telegram" value="<?php if($Secure->SecureTxt($User->UserDataID($userID, 1)['telegram']) == 'None') { echo ''; } else { echo $Secure->SecureTxt($User->UserDataID($userID, 1)['telegram']); } ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="website" class="form-label">Website</label>
                                                <input class="form-control" name="website" value="<?php if($Secure->SecureTxt($User->UserDataID($userID, 1)['website']) == 'None') { echo ''; } else { echo $Secure->SecureTxt($User->UserDataID($userID, 1)['website']); } ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="newpassword" class="form-label">New password</label>
                                                <input class="form-control" type="password" name="newpw" placeholder="Leave empty for no change." />
                                            </div>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Rank</label>
                                                <select class="form-control" name="rank">
                                                    <option value="0" <?php if ($User->UserDataID($userID, 1)['rank'] != 5) { echo 'selected'; } ?>>User</option>
                                                    <option value="5" <?php if ($User->UserDataID($userID, 1)['rank'] == 5) { echo 'selected'; } ?>>Admin</option>
                                                </select>
                                            </div>
                                            <div>
                                                <button type="button" onclick="ModifyUser();" class="btn btn-primary w-md">Edit</button>
                                                <button type="button" onclick="DeleteUser();" class="btn btn-danger w-md">Delete</button>
                                            </div>
                                            <input type="hidden" name="_csrf" value="<?php echo $token; ?>" />
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                                <!-- end card -->
                            </div>
                            </div>

<?php include('footer.php'); ?>