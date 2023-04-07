<?php
include_once('includes.php');

?>
<div class="col-xl-12">
                                <div class="row">
                                   <div class="col-md-3">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body advert">
                                            <?php if ($Banners->isExpired(1) == false) {?>
                                                <a href="<?php echo $Banners->BannerInfo(1)['redirect']; ?>?dstat.pro" target="_blank">
                                                <img src="<?php echo $Banners->BannerInfo(1)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
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
                                            <?php if ($Banners->isExpired(2) == false) {?>
                                                <a href="<?php echo $Banners->BannerInfo(2)['redirect']; ?>?dstat.pro" target="_blank">
                                                <img src="<?php echo $Banners->BannerInfo(2)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
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
                                            <?php if ($Banners->isExpired(3) == false) {?>
                                                <a href="<?php echo $Banners->BannerInfo(3)['redirect']; ?>?dstat.pro" target="_blank">
                                                <img src="<?php echo $Banners->BannerInfo(3)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
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
                                            <?php if ($Banners->isExpired(4) == false) {?>
                                                <a href="<?php echo $Banners->BannerInfo(4)['redirect']; ?>?dstat.pro" target="_blank">
                                                <img src="<?php echo $Banners->BannerInfo(4)['url']; ?>" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                            <?php } else { ?>
                                                <a href="https://t.me/dstat_pro" target="_blank">
                                                <img src="/assets/images/dafaultbanner.png" style="max-width: 100%;max-height: 100%;" height="60px" width="468px">
                                            <?php } ?>
                                            </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->