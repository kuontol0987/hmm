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
<link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

<!-- Responsive datatable examples -->
<link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />     
<?php include('ads_upper.php'); ?>
<div class="row">
   <div class="col-xl-12">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-4">User logs</h4>
            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap w-100">
               <thead>
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Username</th>
                     <th scope="col">Action</th>
                     <th scope="col">Date</th>
                     <th scope="col">IP Address</th>
                  </tr>
               </thead>
               <tbody>
               <?php foreach ($Logs->UserLogsDataAll()['Response'] as $Ak => $Av) { ?>
                  <tr>
                     <th scope="row"><?php echo $Av['id']; ?></th>
                     <td><?php if ($Av['userID'] != 0) { echo '<a href="user.php?id='.$Av['userID'].'">'.$User->UserDataID($Av['userID'], 1)['username'].'</a>'; } else { echo $Av['username']; } ?></td>
                     <td><?php echo $Av['action']; ?></td>
                     <td><?php echo date('d/m/Y h:i', $Av['date']); ?></td>
                     <td><?php echo $Av['ip']; ?></td>
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