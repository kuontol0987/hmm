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
                                        <h4 class="card-title mb-4">Delete duplicate lines</h4>
                                        <form id="deleteduplicates" name="deleteduplicates">
                                            <div class="mb-3">
                                                <label for="String" class="form-label">String</label>
                                                <textarea type="text" class="form-control" rows="5" placeholder="Content per line" name="string"></textarea>
                                            </div>
                                            <div>
                                                <button type="button" onclick="delDuplicates();" class="btn btn-primary w-md">Delete</button>
                                            </div>
                                            <input type="hidden" name="_csrf" value="<?php echo $token; ?>" />
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div id="resultdiv" class="col-xl-6" style="display:none;">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Result</h4>
                                        <form>
                                            <div class="mb-3">
                                                <label for="result" class="form-label">Result without duplicate lines</label>
                                                <!-- <input type="text" class="form-control" placeholder="1.1.1.1" name="ipaddr"> -->
                                                <textarea id="result" rows="5" disabled class="form-control"></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            </div>

<?php include('footer.php'); ?>