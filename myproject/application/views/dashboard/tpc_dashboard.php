
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tpc_dashboard</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?> ">
    <link rel="stylesheet" href="<?= base_url('assets/css/custome.css') ;?> ">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar Brand-->
        <div class="container-fluid">
            <img src="<?= base_url('assets/uploads/post.png');  ?>" class="logo" alt="pota logo">
            <!-- <h4>Posta Payment Details</h4> -->
        </div>
    </nav>
    <div class="container-fluid py-2 p-1">
        <div class="row">
            <div class="col-xl-3 col-md-5">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Todays collection</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-5">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Todays control Number</div>
                </div>
            </div>

            <div class="col-xl-3 col-md-5">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">This month collection</div>
                </div>
            </div>
            <div class="col-xl-3 col-md-5">
                <div class="card bg-dark text-white mb-4">
                    <div class="card-body">This month control Number</div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Service performance</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>gfs code</th>
                                    <th>Target</th>
                                    <th>collection</th>
                                    <th>status (%)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>278599858584587</td>
                                    <td>100000</td>
                                    <td>10000000</td>
                                    <td>40%</td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h3>Regional Performance</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Region</th>
                                    <th>Target</th>
                                    <th>collection</th>
                                    <th>outstanding</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mbeya</td>
                                    <td>1000000</td>
                                    <td>20000000</td>
                                    <td>101</td>
                                    <td>78%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h3>Payment Details</h3>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Region</th>
                                    <th>Target</th>
                                    <th>collection</th>
                                    <th>outstanding</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Mbeya</td>
                                    <td>1000000</td>
                                    <td>20000000</td>
                                    <td>101</td>
                                    <td>78%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>

