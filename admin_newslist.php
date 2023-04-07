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
   <!-- new  -->
   <div>
      <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title">Add news</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
               <form id="addnews" name="addnews">
               <div class="mb-3">
                  <label for="title" class="form-label">Title</label>
                  <input class="form-control" name="title" placeholder="Welcome!" />
               </div>
               <div class="mb-3">
                  <label for="text" class="form-label">Text</label>
                  <textarea class="form-control" rows="5" name="text"></textarea>
               </div>
               <div>
                  <button type="button" onclick="AddNews();" class="btn btn-primary w-md">Done</button>
               </div>
               </form>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
   </div>
   <div class="col-xl-12">
      <div class="card">
         <div class="card-body">
            <button style="float:right;" class="btn btn-sm btn-primary w-sm" data-bs-toggle="modal" data-bs-target=".bs-example-modal-center">Add new</button>
            <h4 class="card-title mb-4">Manage news</h4>
            <table id="datatable" class="table table-bordered dt-responsive table-responsive nowrap w-100">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Title</th>
                     <th>Message</th>
                     <th>Date</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($News->getAllNews() as $b_k => $b_v) { ?>
                  <tr>
                     <td><?php echo $Secure->SecureTxt($b_v['id']); ?></td>
                     <td><a href="admin_news.php?id=<?php echo $Secure->SecureTxt($b_v['id']); ?>"><?php echo $Secure->SecureTxt($b_v['title']); ?></a></td>
                     <td><?php echo $Secure->LimitText($Secure->SecureTxt($b_v['text']), 50); ?></td>
                     <td><?php echo date('d/m/Y h:i', $Secure->SecureTxt($b_v['date'])); ?></td>
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