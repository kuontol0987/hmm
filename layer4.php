<?php
define('allow', true);
include_once('includes.php');
include('header.php'); 

if (!isset($GET['server']) || empty(isset($GET['server']))) {

    $Alert->SaveAlert('You need to select server.', 'error');
    header('Location: /home');
    die();
} else {
    $server = $GET['server'];
    if ($server == "1") {
        $ip = '117.27.239.45';
        $name = "Yudun China #1";
        $location = "China";
    } else if ($server == "2") {
        $ip = '115.231.175.7';
        $name = "Yudun China #2";
        $location = "China";
    } else if ($server == "3") {
        $ip = '101.71.138.0';
        $name = "Yudun China #3";
        $location = "China";
    } else if ($server == "4") {
        $ip = '180.188.16.147';
        $name = "Yudun China #4";
        $location = "China";
    } else if ($server == "5") {
        $ip = '43.240.204.71';
        $name = "Yudun China #5";
        $location = "China";
    } else {
        $ip = '/';
        $name = "/";
        $location = "/";
    }

}
?>

                        <?php include('ads_upper.php'); ?>
                        <div class="row">
                                <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Graph info</h4>
                                        <div class="about" wfd-id="62">
                                          <h5>Name</h5>
                                          <p><?php echo $name; ?></p>
                                        </div>
                                        <div class="about" wfd-id="62">
                                          <h5>IP Address</h5>
                                             <p><?php echo $ip; ?></p>
                                             <button type="button" onclick="Copy('<?php echo $ip; ?>', 1);" class="btn btn-sm btn-primary w-sm">Copy</button>
                                        </div>
                                        <br>
                                        <div class="about" wfd-id="62">
                                          <h5>Location</h5>
                                          <p><?php echo $location; ?></p>
                                        </div>
                                        <div class="about" wfd-id="62">
                                          <h5>Layer</h5>
                                          <p>4</p>
                                        </div>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body" style="height:500px;">
                                        <h4 class="card-title mb-4"><?php echo $name; ?></h4>
                                        <center>
                                        <iframe src="/graphs/4.php?server=<?php echo $server; ?>" width="95%" height="600px" frameBorder="0"></iframe>
                                        </center>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            </div>

<?php include('footer.php'); ?>