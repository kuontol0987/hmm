<?php
define('allow', true);
include_once('includes.php');
include('header.php'); 
?>
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dns resolver</h4>

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
                                <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">DNS Resolver</h4>
                                        <form>
                                            <div class="mb-3">
                                                <label for="IPv4" class="form-label">Host (URL or Domain)</label>
                                                <input type="text" class="form-control" placeholder="google.com" name="ipaddr">
                                            </div>
                                            <div class="mb-3">
                                            <label for="IPv4" class="form-label">Term</label>
                                                <select class="form-select" wfd-id="217">
                                                <option value="ALL">Any</option>
                                                    <option value="A">A</option>
                                                    <option value="AAAA">AAAA</option>
                                                    <option value="CNAME">CNAME</option>
                                                    <option value="MX">MX</option>
                                                    <option value="TXT">TXT</option>
                                                    <option value="NS">NS</option>
                                                    <option value="PTR">PTR</option>
                                                    <option value="HINFO">HINFO</option>
                                                    <option value="NAPTR">NAPTR</option> 
                                                    <option value="SRV">SRV</option>
                                                </select>
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Resolve</button>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>

<?php include('footer.php'); ?>