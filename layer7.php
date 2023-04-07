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
        $ip = 'http://38.27.122.103/hit';
        $name = "Cogent";
        $location = "United States";
    } else if ($server == "2") {
        $ip = 'http://135.181.79.113/hit';
        $name = "Hetzner #1";
        $location = "Finland";
    } else if ($server == "3") {
        $ip = 'http://85.10.195.175/hit';
        $name = "Hetzner #2";
        $location = "Germany";
    } else if ($server == "4") {
        $ip = 'http://23.237.42.18/hit';
        $name = "FDCServers";
        $location = "United States";
    } else if ($server == "5") {
        $ip = 'http://51.15.25.208/hit';
        $name = "Scaleway";
        $location = "Netherlands";
    } else if ($server == "6") {
        $ip = 'http://51.159.30.249/hit';
        $name = "Scaleway #2";
        $location = "France";
    } else if ($server == "7") {
        $ip = 'http://109.71.9.87/hit';
        $name = "Selectel";
        $location = "Russia";
    } else if ($server == "8") {
        $ip = 'http://49.51.35.158/hit';
        $name = "Tencent";
        $location = "China";
    } else if ($server == "9") {
        $ip = 'http://46.166.142.81/hit';
        $name = "NForce";
        $location = "Netherlands";
    } else if ($server == "10") {
        $ip = 'http://35.221.231.4/hit';
        $name = "Google cloud";
        $location = "United States";
    } else if ($server == "11") {
        $ip = 'http://69.162.108.171/hit';
        $name = "Limestone";
        $location = "United States";
    } else if ($server == "12") {
        $ip = 'http://91.232.174.39/hit';
        $name = "Superonline";
        $location = "Turkey";
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
                                          <h5>URL</h5>
                                             <p><?php echo $ip; ?></p>
                                             <button type="button" onclick="Copy('<?php echo $ip; ?>', 2);" class="btn btn-sm btn-primary w-sm">Copy</button>
                                        </div>
                                        <br>
                                        <div class="about" wfd-id="62">
                                          <h5>Location</h5>
                                          <p><?php echo $location; ?></p>
                                        </div>
                                        <div class="about" wfd-id="62">
                                          <h5>Layer</h5>
                                          <p>7</p>
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
                                        <iframe src="/graphs/7.php?server=<?php echo $server; ?>" width="95%" height="600px" frameBorder="0"></iframe>
                                        </center>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            </div>

<?php include('footer.php'); ?>