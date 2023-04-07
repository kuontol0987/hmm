<?php
define('allow', true);
include_once('includes.php');

if ($User->IsLoged() != true || $User->UserData()['rank'] != 5) {
    $Alert->SaveAlert('You dont have permission to use this.', 'error');
    header("Location: /index.php");
    die();
}
include('header.php'); 
?>

                        <?php include('ads_upper.php'); ?>
                        <div class="row">
                                <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Modify banners</h4>
                                        <form id="changebanner" name="changebanner">
                                            <div class="mb-3">
                                                <label for="position" class="form-label">Banner position</label>
                                                <select class="form-control" name="bannerpos">
                                                    <option value="1">TOP #1</option>
                                                    <option value="2">TOP #2</option>
                                                    <option value="3">TOP #3</option>
                                                    <option value="4">TOP #4</option>
                                                    <option value="5">BOTTOM #1</option>
                                                    <option value="6">BOTTOM #2</option>
                                                    <option value="7">BOTTOM #3</option>
                                                    <option value="8">BOTTOM #4</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Name</label>
                                                <!-- <input type="text" class="form-control" placeholder="1.1.1.1" name="ipaddr"> -->
                                                <input class="form-control" name="bannername" placeholder="Input name of banner" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Banner URL (imgur only)</label>
                                                <!-- <input type="text" class="form-control" placeholder="1.1.1.1" name="ipaddr"> -->
                                                <input class="form-control" name="bannerurl" placeholder="Input banner url" />
                                            </div>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Expiring</label>
                                                <!-- <input type="text" class="form-control" placeholder="1.1.1.1" name="ipaddr"> -->
                                                <select class="form-control" name="expiring">
                                                    <option value="7">7 Days from now</option>
                                                    <option value="14">14 Days from now</option>
                                                    <option value="30">30 Days from now</option>
                                                    <option value="30">60 Days from now</option>
                                                    <option value="999">Lifetime</option>
                                                </select>
                                            </div>
                                            <div>
                                                <button type="button" onclick="ChangeBanner();" class="btn btn-primary w-md">Change</button>
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