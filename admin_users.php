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
<!-- DataTables -->
<link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
<?php include('ads_upper.php'); ?>
<div class="row">
   <div class="col-xl-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-4">Tools logs</h4>
            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap w-100">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Username</th>
                     <th scope="col">E-mail</th>
                     <th scope="col">Telegram</th>
                     <th scope="col">Full name</th>
                     <th scope="col">Website</th>
                  </tr>
               </thead>
               <tbody>
               <?php foreach ($User->userList()['Response'] as $b_k => $b_v) { ?>
                  <tr>
                     <th scope="row"><?php echo $Secure->SecureTxt($b_v['id']); ?></th>
                     <td><a href="admin_user.php?id=<?php echo $Secure->SecureTxt($b_v['id']); ?>"><?php echo $Secure->SecureTxt($b_v['username']); ?></a></td>
                     <td><?php echo $Secure->SecureTxt($b_v['email']); ?></td>
                     <td><?php if (empty($b_v['telegram'])) { echo 'Not set'; } else { echo $Secure->SecureTxt($b_v['telegram']); } ?></td>
                     <td><?php if (empty($b_v['fullname'])) {echo 'Not set';} else {echo $Secure->SecureTxt($b_v['fullname']);} ?></td>
                     <td><?php if (empty($b_v['website'])) {echo 'Not set';} else {echo $Secure->SecureTxt($b_v['website']);} ?></td>
                  </tr>
               <?php } ?>
               </tbody>
            </table>
         </div>
         <!-- end card body -->
      </div>
      <!-- end card -->
   </div>
   <!-- end card -->
</div>
</div>
<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<script>$(document).ready(function () {
    $.noConflict();
    var table = $('#datatable').DataTable();
});
</script>
<?php include('footer.php'); ?>