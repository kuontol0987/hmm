<?php
   define('allow', true);
   include_once('includes.php');
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
<div class="row">
   <div class="col-xl-6">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-4">Password generator</h4>
            <form id="passgen" name="passgen">
               <div class="mb-3">
                  <label for="lenght" class="form-label">Lenght</label>
                  <select name="lenght" class="form-control">
                     <optgroup label="Weak">
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>>
                     </optgroup>
                     <optgroup label="Strong">
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">29</option>
                     </optgroup>
                     <optgroup label="Unbelievable">
                        <option value="40">40</option>
                        <option value="50">50</option>
                        <option value="60">60</option>
                     </optgroup>
                  </select>
               </div>
               <div id="resultdiv" class="mb-3" style="display:none;">
                  <label for="result" class="form-label">Generated password</label>
                  <input type="text" class="form-control" disabled id="result">
               </div>
               <div>
                  <button type="button" onclick="PassGen();" class="btn btn-primary w-md">Generate</button>
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