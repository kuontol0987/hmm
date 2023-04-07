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
                                        <h4 class="card-title mb-4">Ping</h4>
<script src="https://check-host.net/js/checkhost-api.js"></script>

<link rel="stylesheet" type="text/css" 
      href="https://check-host.net/css/checkhost-whitelabel-default.css"/>


<form id='form-http-check'>
  <input type="submit" value="HTTP check" />
</form>

<div id="check-host_container"></div>
</div>


  <script>
      window.addEventListener("DOMContentLoaded", function() {
        var checkhost = new CheckHost.API();
        var resultDisplayer = new CheckHost.ResultDisplayer["ping"]();

        var datacenter = document.getElementById('form-pinger-datacenter');
        document.getElementById("form-pinger").addEventListener("submit", 
          function(event) {
            event.preventDefault();
    
            checkhost.check({
              "host": datacenter.value, 
              "type": "ping",
              "resultDisplayer": resultDisplayer
            });
            return null;
        });
      });
  </script>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div id="result" class="col-xl-6" style="display:none;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Result</h4>
                                        <form>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Results for ping request</label>
                                                <!-- <input type="text" class="form-control" placeholder="1.1.1.1" name="ipaddr"> -->
                                                <textarea id="hops" rows="12" disabled class="form-control"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            </div>

<?php include('footer.php'); ?>