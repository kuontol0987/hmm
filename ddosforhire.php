<?php
   define('allow', true);
   include_once('includes.php');
   include('header.php'); 
   
   ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.themes.min.css">

<div class="row">
   <div class="col-12">
      <div class="card">
         <div class="card-body">
            <p class="section-filters-bar-title">
            <h1>DSTAT<font color="#556ee6">.PRO</font><br><font style="font-weight:200;" color="white" size="4px"> Top booter / Top stresser list</font></h1>
            <div class="table-rep-plugin">
               <div class="table-wrapper">
                  <div class="btn-toolbar" style="height:60px;">
                       <div class="btn-group dropdown-btn-group pull-right">
                        <button type="button" style="height:45px;width:100px;padding:10px;font-weight:bold;" data-bs-toggle="modal" data-bs-target="#submitsite" class="btn btn-primary">SUBMIT</button>
                       </div>
                  </div>
                  <div class="table-responsive mb-0 fixed-solution" data-pattern="priority-columns">
                     <div  style=" width: auto; top: -1px;">
                        <table id="tech-companies-1-clone" class="table table-striped">
                           <thead>
                              <tr style="background: #556ee6;">
                                 <th id="tech-companies-1-col-0-clone">Name</th>
                                 <th data-priority="1" id="tech-companies-1-col-1-clone">Website link</th>
                                 <th data-priority="3" id="tech-companies-1-col-2-clone">Description</th>
                                 <th data-priority="1" id="tech-companies-1-col-3-clone">Owner</th>
                                 <th data-priority="3" id="tech-companies-1-col-4-clone" style="white-space: nowrap;color: yellow;">Free plan</th>
                                 <th data-priority="3" id="tech-companies-1-col-5-clone">Layer3/4</th>
                                 <th data-priority="6" id="tech-companies-1-col-6-clone">Layer7</th>
                                 <th data-priority="6" id="tech-companies-1-col-7-clone">Logging<font color="yellow">*</font></th>
                                 <th data-priority="6" id="tech-companies-1-col-8-clone">APIs</th>
                                 <th data-priority="6" id="tech-companies-1-col-8-clone">Payment methods</th>
                                 <th data-priority="6" id="tech-companies-1-col-8-clone">Status</th>
                                 <th data-priority="6" id="tech-companies-1-col-8-clone">Last change</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr role="row" class="odd">
                                 <td>Str3ssed</td>
                                 <td><a href="https://str3ssed.co/?ddosforhire.net" rel="nofollow">str3ssed.co</a></td>
                                 <td>Str3ssed is one of most reliable IP Booter on the market and running since 6 years.</td>
                                 <td>AnonNinja</td>
                                 <td>Yes</td>
                                 <td>Yes</td>
                                 <td>No</td>
                                 <td>Yes</td>
                                 <td>No</td>
                                 <td>Crypto</td>
                                 <td>⭐ Premium</td>
                                 <td>2021-01-01</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end col -->
</div>

<div id="submitsite" class="modal fade" tabindex="-1" aria-labelledby="submitsitelabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title mt-0" id="submitsitelabel">Submit your website</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Site name" value="">
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="name">Site link</label>
                                                                <input type="text" class="form-control" name="name" placeholder="Link" value="">
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="name">Owner</label>
                                                                <input type="text" class="form-control" id="owner" name="name" placeholder="Owner" value="">
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">Free plan</label>
                                                                <select class="form-select" id="inlineFormSelectPref">
                                                                    <option selected="">Choose...</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">Layer3/4</label>
                                                                <select class="form-select" id="inlineFormSelectPref">
                                                                    <option selected="">Choose...</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">Layer7</label>
                                                                <select class="form-select" id="inlineFormSelectPref">
                                                                    <option selected="">Choose...</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">Logging</label>
                                                                <select class="form-select" id="inlineFormSelectPref">
                                                                    <option selected="">Choose...</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">APIs</label>
                                                                <select class="form-select" id="inlineFormSelectPref">
                                                                    <option selected="">Choose...</option>
                                                                    <option value="1">Yes</option>
                                                                    <option value="0">No</option>
                                                                </select>
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="freeplan">Payments methods</label>
                                                                <input type="text" class="form-control" name="payments" placeholder="Crypto, Paypal..." value="">
                                                            </div>
                                                            <div style="margin-top:10px;"></div>
                                                            <div class="form-group">
                                                                <label for="name">Description</label>
                                                                <textarea class="form-control" id="desc" name="desc" rows="3"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-danger waves-effect" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
<!-- end page title -->
<script>
    $("#owner").on('change keydown paste input', function(){
        $.getJSON("/core/api.php?task=searchuser&user="+$("#owner").val(), function(users){

    
    // Initializing the typeahead
     $('#owner').typeahead({
        hint: true,
        highlight: true, /* Enable substring highlighting */
        minLength: 1 /* Specify minimum characters required for showing suggestions */
    },
    {
        name: 'users',
        source: users
    });
        });
    });
</script>


<?php include('ads_upper.php'); ?>
<?php include('footer.php'); ?>