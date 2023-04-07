<?php
   define('allow', true);
   include_once('includes.php');
   include('header.php'); 
   ?>
<!-- start page title -->
<div class="row">
   <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
         <h4 class="mb-sm-0 font-size-18">Get string before</h4>
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
<div class="row">
   <div class="col-xl-6">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-4">Get string before</h4>
            <form id="stringbefore" name="stringbefore">
               <div class="mb-3">
                  <label for="string" class="form-label">String</label>
                  <input class="form-control" name="string" placeholder="this|is|my|string" />
               </div>
               <div class="mb-3">
                  <label for="char" class="form-label">Characther</label>
                  <input class="form-control" name="char" placeholder="|" />
               </div>
               <div id="resultdiv" class="mb-3" style="display:none;">
                  <label for="result" class="form-label">Result</label>
                  <input type="text" class="form-control" disabled id="result">
               </div>
               <div>
                  <button type="button" onclick="getStringBeforeChar();" class="btn btn-primary w-md">Get</button>
               </div>
               <input type="hidden" name="_csrf" value="<?php echo $token; ?>" />
            </form>
         </div>
         <!-- end card body -->
      </div>
      <!-- end card -->
   </div>
</div>
<?php include('footer.php'); ?>