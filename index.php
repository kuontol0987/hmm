<?php
   define('allow', true);
   include_once('includes.php');
   include('header.php'); 
   ?>
<!-- start page title -->
<div class="row">
   <div class="col-12">
      <div class="page-title-box d-sm-flex align-items-center justify-content-between">
         <h4 class="mb-sm-0 font-size-18">WELCOME!</h4>
      </div>
   </div>
</div>
<!-- end page title -->
<?php include('ads_upper.php'); ?>
<div class="row">
   <div class="col-xl-6">
      <div class="card">
         <div class="card-body">
            <h4 class="card-title mb-5">News</h4>
            <ul class="verti-timeline list-unstyled">
               <?php foreach ($News->getAllNews() as $n_k => $n_v) { ?>
               <li class="event-list">
                  <div class="event-timeline-dot">
                     <i class="bx bx-right-arrow-circle font-size-18"></i>
                  </div>
                  <div class="media">
                     <div class="me-3">
                        <h5 class="font-size-14"><?php echo date('j M', $n_v['date']); ?> <i class="bx bx-right-arrow-alt font-size-16 text-primary align-middle ms-2"></i></h5>
                     </div>
                     <div class="media-body">
                        <div>
                           <?php echo $n_v['text']; ?>
                        </div>
                     </div>
                  </div>
               </li>
               <?php } ?>
            </ul>
            <div class="text-center mt-4"><a href="#" class="btn btn-primary waves-effect waves-light btn-sm">View More <i class="mdi mdi-arrow-right ms-1"></i></a></div>
         </div>
      </div>
   </div>
   <div class="col-xl-6">
   <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Telegram group</h4>
                                        <div class="text-center">
                                            <div class="avatar-sm mx-auto mb-4">
                                                <span class="avatar-title rounded-circle bg-primary bg-soft font-size-24">
                                                        <i class="mdi mdi-telegram text-primary"></i>
                                                    </span>
                                            </div>
                                            <p class="font-16 text-muted mb-2"></p>
                                            <h5><a href="#" class="text-dark">DSTAT.PRO - <span class="text-muted font-16"><?php echo $Secure->TelegramStats(1); ?> members</span> </a></h5>
                                            <p class="text-muted">Join our community group if you want to chat with our users!</p>
                                            <a href="https://t.me/dstat_pro" target="_blank" class="text-primary font-16"><button class="btn btn-md btn-primary">Join us now!</button></a>
                                        </div>
</div>
</div>
</div>

</div>

<?php include('footer.php'); ?>