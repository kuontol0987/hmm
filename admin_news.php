<?php
define('allow', true);
include_once('includes.php');

if ($User->IsLoged() != true || $User->UserData()['rank'] != 5) {
    $Alert->SaveAlert('You dont have permission to use this.', 'error');
    header("Location: /index.php");
    die();
}

$NewsID = $GET['id'];

if(!(isset($NewsID) || is_numeric($NewsID))) {
    $Alert->SaveAlert('You need to input valid message id.', 'error');
    header("Location: /admin_users.php");
    die();
}

$IsCreated = $News->CountNewsByID($NewsID)['Count'];

if($IsCreated == 0) {
    $Alert->SaveAlert('This message doesnt exists.', 'error');
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
                                        <h4 class="card-title mb-4">Modify message</h4>
                                        <form id="modifymsg" name="modifymsg">
                                              <input type="hidden" class="form-control" name="messid" value="<?php echo $NewsID; ?>" />
                                            <div class="mb-3">
                                                <label for="title" class="form-label">Title</label>
                                                <input class="form-control" name="title" value="<?php echo $Secure->SecureTxt($News->NewsDataID($NewsID, 1)['title']); ?>" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="fullname" class="form-label">Full Name</label>
                                                <textarea class="form-control" rows="7" name="text"><?php echo $Secure->SecureTxt($News->NewsDataID($NewsID, 1)['text']); ?></textarea>
                                            </div>
                                            <input type="hidden" name="_csrf" value="<?php echo $token; ?>" />
                                            <div>
                                                <button type="button" onclick="ModifyMessage();" class="btn btn-primary w-md">Edit</button>
                                                <button type="button" onclick="DeleteMessage();" class="btn btn-danger w-md">Delete</button>
                                            </div>
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