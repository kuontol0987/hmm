                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body advert">
                                        <?php if ($Banners->isExpired(5) == false) {?>
                                            <a href="<?php echo $Banners->BannerInfo(5)['redirect']; ?>?dstat.pro" target="_blank">
                                            <img src="<?php echo $Banners->BannerInfo(5)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } else { ?>
                                            <a href="https://t.me/dstat_pro" target="_blank">
                                            <img src="/assets/images/dafaultbanner.png" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body advert">
                                     <?php if ($Banners->isExpired(6) == false) {?>
                                            <a href="<?php echo $Banners->BannerInfo(6)['redirect']; ?>?dstat.pro" target="_blank">
                                            <img src="<?php echo $Banners->BannerInfo(6)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } else { ?>
                                            <a href="https://t.me/dstat_pro" target="_blank">
                                            <img src="/assets/images/dafaultbanner.png" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body advert">
                                    <?php if ($Banners->isExpired(7) == false) {?>
                                            <a href="<?php echo $Banners->BannerInfo(7)['redirect']; ?>?dstat.pro" target="_blank">
                                            <img src="<?php echo $Banners->BannerInfo(7)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } else { ?>
                                            <a href="https://t.me/dstat_pro" target="_blank">
                                            <img src="/assets/images/dafaultbanner.png" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="card mini-stats-wid">
                                    <div class="card-body advert">
                                    <?php if ($Banners->isExpired(8) == false) {?>
                                            <a href="<?php echo $Banners->BannerInfo(8)['redirect']; ?>?dstat.pro" target="_blank">
                                            <img src="<?php echo $Banners->BannerInfo(8)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } else { ?>
                                            <a href="https://t.me/dstat_pro" target="_blank">
                                            <img src="/assets/images/dafaultbanner.png" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                        <?php } ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo date('Y'); ?> © dstat.pro
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block" id="footer"></div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

     


        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <!-- apexcharts -->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/toast.js"></script>
        <script src="assets/js/main.js?v=<?php echo time(); ?>"></script>
        <script src="assets/js/jquery.toast.min.js"></script>
        <script>
          var start_time =+ new Date();
            window.onload = function () {
                $("#footer").append("Loaded in " +(+new Date() - start_time) / 1000 +" seconds" +"");
            };
      </script>
        <div id="msg_alert"><?php echo $Alert->PrintAlert(); ?></div>
        <script type="text/javascript">
         setTimeout(function() {
              document.getElementById('msg_alert').innerHTML = '<?php echo $Alert->RemoveAlert(); ?>';
         }, 1000);
        </script>
    </body>

</html>
