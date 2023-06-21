<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/favicon.png" type="image/x-icon">
    <title>Tanzania Posts | Corporation</title>

    <link href="<?php echo base_url();?>/assets/icons/font-awesome/css/font-awesome.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>/assets/icons/material-design/css/materialdesignicons.css" rel="stylesheet"
        type="text/css">


    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/feather-icon.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/datatables.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
    <link id="color" rel="stylesheet" href="<?php echo base_url();?>/assets/css/color-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/datatables.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/vendors/datatable-extension.css">



    <style>
    table,
    th,
    td {
        border: 1px solid;
        border-collapse: collapse;
    }

    th,
    td {
        border-color: #96D4D4;
        padding: 6px;
        margin-left: 10px;

    }
    </style>

</head>

<body class="bg-light">
    <nav class="navbar bg-danger">
        <div class="container-fluid m-auto">
            <a class="navbar-brand text-light" href="#">
                <!-- <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"> -->
                Tanzania Posts Corporation
            </a>
        </div>
    </nav>
    <div class="container-fluid mt-2 m-auto">
        <div class="row">

            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30" style="margin-left:45px">
                    <div class="card-body">
                        <a href="#" style="color: #000;" data-toggle="modal" data-animation="bounce"
                            data-target=".track-box-modal-lg">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-google-maps"></i>
                                    </div>
                                </div>
                                <div class="col-12 align-self-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">
                                            <?php $collection_percentage = number_format(($collection/10000000)*100,2); echo number_format ($collection,2); ?>
                                        </h5>
                                        <p class="mb-0 text-muted "><b>To days collection</b>

                                            <?php if($collection_percentage<50){?>
                                            <span class="font-danger f-12 f-w-500">
                                                <i
                                                    class="icon-arrow-down "></i><span><?=$collection_percentage?>%</span></span>
                                            <?php }else{ ?>
                                            <span class="font-success f-12 f-w-500">
                                                <i
                                                    class="icon-arrow-up"></i><span><?=$collection_percentage?>%</span></span>
                                            <?php } ?>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->

            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <a href="#" style="color: #000;" data-toggle="modal" data-animation="bounce"
                            data-target=".realestate-box-modal-lg">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-home-modern"></i>
                                    </div>
                                </div>
                                <div class="col-12 align-self-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">
                                            <?php $percetage = number_format(($control_no['control']/10000000)*100,2);  echo ($control_no !== null) ? number_format($control_no['control'], 2) : '0.00'; ?>
                                        </h5>
                                        <p class="mb-0 text-muted" style="font-size: 14px;"><b>Todays Control Number</b>

                                            <?php if($percetage<50){?>
                                            <span class="font-danger f-12 f-w-500">
                                                <i class="icon-arrow-down "></i><span><?=$percetage?>%</span></span>
                                            <?php }else{ ?>
                                            <span class="font-success f-12 f-w-500">
                                                <i class="icon-arrow-up"></i><span><?=$percetage?>%</span></span>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->


            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <a href="#" style="color: #000;">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-home-map-marker"></i>
                                    </div>
                                </div>
                                <div class="col-12 align-self-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">
                                            <?php $percv=number_format(($monthly_collect['monthlycollection']/100000000000)*100,2); echo number_format($monthly_collect['monthlycollection'], 2); ?>
                                        </h5>
                                        <p class="mb-0 text-muted"><b>Monthly Collection</b>
                                            <?php if($percv<50){?>
                                            <span class="font-danger f-12 f-w-500">
                                                <i class="icon-arrow-down "></i><span><?=$percv?>%</span></span>
                                            <?php }else{ ?>
                                            <span class="font-success f-12 f-w-500">
                                                <i class="icon-arrow-up"></i><span><?=$percv?>%</span></span>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->

            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <a href="#" style="color: #000;">
                            <div class="d-flex flex-row">
                                <div class="col-3 align-self-center">
                                    <div class="round">
                                        <i class="mdi mdi-package-variant"></i>
                                    </div>
                                </div>
                                <div class="col-12 align-self-center">
                                    <div class="m-l-10">
                                        <h5 class="mt-0 round-inner">
                                            <?php $percv=number_format(($monthly_control['month_control']/100000000000)*100,2); echo number_format($monthly_control['month_control'], 2);  ?>
                                        </h5>
                                        <p class="mb-0 text-muted"><b>Monthly Control Number</b>
                                            <?php if($percv<50){?>
                                            <span class="font-danger f-12 f-w-500">
                                                <i class="icon-arrow-down "></i><span><?=$percv?>%</span></span>
                                            <?php }else{ ?>
                                            <span class="font-success f-12 f-w-500">
                                                <i class="icon-arrow-up"></i><span><?=$percv?>%</span></span>
                                            <?php } ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Column -->
        </div>
    </div>
    <!-- Content here -->
    </div>
    <div class="container-fluid text-success mt-0">
        <div class="row justify-content-center mt-1">
            <!-- <div class="col-sm-6 col-xl-6"> The first Card-->

            <div class="col-xl-4 col-md-5">
                <div class="card" style="width: 34rem; margin-left:4px;">
                    <!-- <h5 class="text-center mt-1">services Peformance</h5> -->
                    <!-- <div class="card-header"><h4>services Peformance</h4></div> -->
                    <div class="card-header card-fluid bg-primary text-center w-100">
                        <h3 style="font-size:15px; height:1.5px;">Posta Service performance</h3>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- <p class="text-center bg-danger my-0">Service Performance</p> -->
                                <table style="width:90%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>
                                                <p class="mb-0">Service</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">GFS Code</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Target</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Collection</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Status</p>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php foreach ($gfs_cod_data as $row) : ?>
                                        <tr>
                                            <td>#1000</td>
                                            <td><?php echo $row->gfs_code; ?></td>
                                            <td>Update</td>
                                            <td><?php echo $row->collection_per_day; ?></td>
                                            <td><span
                                                    class="badge badge-success"><?php echo number_formt((($row->collection_per_day/100000)*100), 2);?>%</span>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>



                            <div class="tab-pane fade table-responsive" id="profile" role="tabpanel"
                                aria-labelledby="profile-tab">
                                <table class="table table-sm mb-0">
                                    <table style="width:90%">
                                        <thead class="text-center bg-primary">
                                            <tr>
                                                <th>
                                                    <p class="mb-0">Service</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">GFS Code</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Target</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Collection</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Status</p>
                                                </th>

                                            </tr>
                                        </thead>

                                        <tbody>
                                            <?php if (isset($gfs_code_per_month) && !empty($gfs_code_per_month)): ?>
                                            <?php foreach ($gfs_code_per_month as $item): 
											  $gfs_code_per_day = number_format((($item->collection_per_threemonths)/1000000000)*100,2);
											?>
                                            <!-- code to display the data here -->
                                            <tr>
                                                <td><?php echo $item->service;?> </td>
                                                <td><?php echo $item->gfs_code;  ?></td>
                                                <td>Update</td>
                                                <td><?php   echo number_format($item->collection_per_threemonths); ?>
                                                </td>
                                                <td> <span
                                                        class="badge w-100 <?=($gfs_code_per_day<50)?'badge-danger':'badge-success'?>">
                                                        <?php print $gfs_code_per_day ?>%</span></td>
                                            </tr>
                                            <?php endforeach; ?>
                                            <?php else: ?>
                                            <p>No data available for the specified period.</p>
                                            <?php endif; ?>


                                            <!-- <?php foreach ($gfs_code_per_month as $row_data) : 
											
											?>
                                        <tr>
                                            <td>#1000</td>
                                            <td><?php echo $row_data->gfs_code;  ?></td>
                                            <td>Update</td>
                                            <td><?php   echo number_format($row_data->collection_per_month); ?></td>
                                            <td> <span class="badge badge-success">Resolved</span></td>
                                        </tr>
                                        <?php  endforeach;  ?> -->
                                        </tbody>

                                    </table>

                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="col-sm-12 table-responsive">
                                    <table style="width:90%">
                                        <thead class="text-center bg-primary">
                                            <tr>
                                                <th>
                                                    <p class="mb-0">Service</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">GFS Code</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Target</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Collection</p>
                                                </th>
                                                <th>
                                                    <p class="mb-0">Status</p>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($gfs_cod_data_peryear as $rows) : 
											
											$gfs_code_per_year = number_format((($rows->collection_per_year)/10000)*100,2);
											
											?>
                                            <tr>
                                                <td><?php echo $rows->service;?></td>
                                                <td><?php echo $rows->gfs_code; ?></td>
                                                <td>Update</td>
                                                <td><?php echo number_format($rows->collection_per_year, 2); ?></td>

                                                <td> <span
                                                        class="badge w-100 <?=($gfs_code_per_year<50)?'badge-danger':'badge-success'?>">
                                                        <?php print $gfs_code_per_year ?>%</span></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>



                                </div>
                            </div>
                        </div>
                        <ul class="simple-wrapper nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item"><a class="nav-link active txt-secondary" id="home-tab"
                                    data-bs-toggle="tab" href="#home" role="tab" aria-controls="home"
                                    aria-selected="true">Today</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="profile-tabs"
                                    data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                                    aria-selected="false">Three
                                    Months</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="contact-tab" data-bs-toggle="tab"
                                    href="#contact" role="tab" aria-controls="contact" aria-selected="false">Year</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-xl-4 col-md-5">
                <div class="card" style="width:  35rem;">
                    <div class="card-header card-fluid bg-primary">
                        <h5 class="text-center" style="height:1px; font-size:15px;">Posta Regional collection Paformance
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-home" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <table style="width:70%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>
                                                <p class="mb-0">Region</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Target</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Collection</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Outstand</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Status</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($gfs_region_per_day as $dats):
										$regional_per_days = number_format((($dats->regional_collection_per_days)/1000000)*100,2);
										?>
                                        <tr>
                                            <td>#1000</td>
                                            <td>Ecommerce</td>
                                            <td><?php echo number_format($dats->regional_collection_per_days, 2); ?>
                                            </td>
                                            <td>1000000</td>
                                            <td> <span
                                                    class="badge w-100 <?=($regional_per_days<50)?'badge-danger':'badge-success'?>">
                                                    <?php print $regional_per_days ?>%</span></td>
                                        </tr>
                                        <?php endforeach; ?>
                                        <tr>
                                            <!-- 
                                    </tr>
                                    <tr>
                                        <td>#1013</td>
                                        <td>Viho-React</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1022</td>
                                        <td>Amazon</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1033</td>
                                        <td>Flipkart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1044</td>
                                        <td>Nyka</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1055</td>
                                        <td>Sugar</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1066</td>
                                        <td>Multikart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1077</td>
                                        <td>Template</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr> -->

                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade table-responsive" id="profile-icon" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
                                <table style="width:70%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>
                                                <p class="mb-0">Region</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Target</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Collection</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Outstand</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Status</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   foreach($regianal_month as $regioana_data) :
											$regional_per_three_month = number_format((($regioana_data->region_collection_per_threemonths)/100000000)*100,2);
										?>
                                        <tr>
                                            <td><?php echo $regioana_data->region; ?></td>
                                            <td>Ecommerce</td>
                                            <td><?php echo number_format($regioana_data->region_collection_per_threemonths); ?>
                                            </td>
                                            <td>1000000</td>
                                            <td> <span
                                                    class="badge w-100 <?=($regional_per_three_month<50)?'badge-danger':'badge-success'?>">
                                                    <?php print $regional_per_three_month ?>%</span></td>
                                        </tr>
                                        <?php  endforeach; ?>
                                        <tr>
                                            <!-- 
                                    </tr>
                                    <tr>
                                        <td>#1013</td>
                                        <td>Viho-React</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1022</td>
                                        <td>Amazon</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1033</td>
                                        <td>Flipkart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1044</td>
                                        <td>Nyka</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1055</td>
                                        <td>Sugar</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1066</td>
                                        <td>Multikart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1077</td>
                                        <td>Template</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr> -->

                                    </tbody>
                                </table>
                                </p>
                            </div>
                            <div class="tab-pane fade table-responsive" id="contact-icon" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <table style="width:90%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>
                                                <p class="mb-0">Region</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Target</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Collection</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Outstand</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Status</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($regional_per_year as $rows):
										$regional = number_format((($rows->regional_collection_per_year)/100000000)*100,2);
										?>
                                        <tr>
                                            <td><?php echo $rows->region; ?></td>
                                            <td>Ecommerce</td>
                                            <td><?php  echo $rows->regional_collection_per_year; ?></td>
                                            <td>Update</td>
                                            <td> <span
                                                    class="badge w-100 <?=($regional<(50))?'badge-danger':'badge-success'?>">
                                                    <?php print $regional ?>%</span></td>
                                        </tr>
                                        <?php endforeach ;?>
                                        <!-- <tr>

                                    </tr>
                                    <tr>
                                        <td>#1013</td>
                                        <td>Viho-React</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1022</td>
                                        <td>Amazon</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1033</td>
                                        <td>Flipkart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1044</td>
                                        <td>Nyka</td>
                                        <td>Changes</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1055</td>
                                        <td>Sugar</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-success">Resolved</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1066</td>
                                        <td>Multikart</td>
                                        <td>Update</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-primary">Open</span></td>
                                    </tr>
                                    <tr>
                                        <td>#1077</td>
                                        <td>Template</td>
                                        <td>Testing</td>
                                        <td>#1000</td>
                                        <td> <span class="badge badge-danger">Pending</span></td>
                                    </tr> -->

                                    </tbody>
                                </table>

                            </div>
                        </div>
                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active txt-secondary" id="icon-home-tab"
                                    data-bs-toggle="tab" href="#icon-home" role="tab" aria-controls="icon-home"
                                    aria-selected="true"> Today</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="profile-icon-tabs"
                                    data-bs-toggle="tab" href="#profile-icon" role="tab" aria-controls="profile-icon"
                                    aria-selected="false">Three Months</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="contact-icon-tab"
                                    data-bs-toggle="tab" href="#contact-icon" role="tab" aria-controls="contact-icon"
                                    aria-selected="false">Year</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="col-sm-6 col-xl-6"> The second card-->

            <!-- </div> -->

            <div class="col-xl-4 col-md-5">
                <div class="card" style="width: 32rem; margin-left:10px;">
                    <!-- <h5 class="text-center mt-1">Payers Paformance</h5> -->
                    <div class="card-header bg-primary text-center" style="height:1px;">
                        <h3 style="font-size:15px">Top payers</h3>
                    </div>

                    <div class="card-body">
                        <div class="tab-content mt-0" id="icon-tabContent">
                            <div class="tab-pane fade show active" id="icon-homes" role="tabpanel"
                                aria-labelledby="icon-home-tab">
                                <table style="width:90%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>
                                                <p class="mb-0">Region</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">Client name</p>
                                            </th>
                                            <!-- <th>
                                                <p class="mb-0">Service</p>
                                            </th> -->
                                            <th>
                                                <p class="mb-0">Ammount</p>
                                            </th>
                                            <th>
                                                <p class="mb-0">status</p>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
									foreach($top_payers_per_day as $items): 
										$perc=number_format((($item->total_amount)/100000)*100,2)
									?>
                                        <tr>
                                            <td><?php echo $items->region; ?></td>
                                            <td><?php echo $tem->client_name; ?></td>
                                            <!-- <td>Update</td> -->
                                            <td><?php echo $item->total_amount; ?></td>
                                            <td> <span
                                                    class="badge w-100 <?=($perc<50)?'badge-danger':'badge-success'?>">
                                                    <?=$perc ?> %</span></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade table-responsive" id="profile-icons" role="tabpanel"
                                aria-labelledby="profile-icon-tab">
                                <table style="width:90%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <th>Region</th>
                                            <th>Client</th>
                                            <!-- <th>Service</th> -->
                                            <th>Amount</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($moth_top_payers as $item) : 
								   $percx=number_format((($item->total_amount)/100000)*100,2)
									?>
                                        <tr>
                                            <td><?php  echo $item->region; ?></td>
                                            <td><?php echo $item->client_name; ?></td>
                                            <!-- <td>#1000</td> -->
                                            <td><?php echo number_format($item->total_amount, 2);?></td>
                                            <td> <span
                                                    class="badge w-100 <?=($percx<50)?'badge-danger':'badge-success'?>">
                                                    <?php print $percx ?>%</span></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade table-responsive" id="contact-icons" role="tabpanel"
                                aria-labelledby="contact-icon-tab">
                                <table style="width:90%">
                                    <thead class="text-center bg-primary">
                                        <tr>
                                            <!-- <th class="text-center" colspan="5">Top Payers</th> -->
                                            <th>Region</th>
                                            <th>Client</th>
                                            <!-- <th>Service</th> -->
                                            <th>Ammount</th>
                                            <th>payment date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   foreach($top_payers as $top_payer): 
										$top_payer_percentage = number_format((($top_payer->total_amount)/100000)*100,2);
										?>

                                        <tr>
                                            <th><?= $top_payer->region; ?></th>
                                            <th><?= $top_payer->client_name; ?></th>
                                            <!-- <td>Update</td> -->
                                            <th><?= number_format($top_payer->total_amount, 2);?></th>
                                            <th><?= $top_payer->pyment_date; ?></th>
                                            <td> <span
                                                    class="badge w-100 <?=($top_payer_percentage<50)?'badge-danger':'badge-success'?>">
                                                    <?php print $top_payer_percentage ?>%</span></td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>

                            </div>

                        </div>

                        <ul class="nav nav-tabs" id="icon-tab" role="tablist">
                            <li class="nav-item"><a class="nav-link active txt-secondary" id="icon-home-tab"
                                    data-bs-toggle="tab" href="#icon-homes" role="tab" aria-controls="icon-home"
                                    aria-selected="true"> Today</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="profile-icon-tabs"
                                    data-bs-toggle="tab" href="#profile-icons" role="tab" aria-controls="profile-icon"
                                    aria-selected="false">Three Months</a></li>
                            <li class="nav-item"><a class="nav-link txt-secondary" id="contact-icon-tab"
                                    data-bs-toggle="tab" href="#contact-icons" role="tab" aria-controls="contact-icon"
                                    aria-selected="false">Year</a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
	<div class="container-fluid m-auto mt-5">
	<footer class="footer m-auto text-dark" style="position: fixed left: 0; bottom: 0; color: black;  text-align: center;">
   
        <div class="row">
            <div class="col-md-12 footer-copyright">
                <p class="mb-0">© <?php echo date("Y");?> Posta Dashboard | Twenzetu Kidigitali. All Rights Reserved.
                </p>
            </div>
        </div>
		</footer>
    </div>

</body>

</html>




<!-- </div> -->
<!-- latest jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo base_url();?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="<?php echo base_url();?>/assets/js/scrollbar/simplebar.js"></script>
<script src="<?php echo base_url();?>/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="<?php echo base_url();?>/assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="<?php echo base_url();?>/assets/js/sidebar-menu.js"></script>
<script src="<?php echo base_url();?>/assets/js/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/slick/slick.js"></script>
<script src="<?php echo base_url();?>/assets/js/header-slick.js"></script>
<script src="<?php echo base_url();?>/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/counter/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/counter/counter-custom.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/support-ticket-custom.js"></script>
<script src="<?php echo base_url();?>/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo base_url();?>/assets/js/script.js"></script>
<script src="<?php echo base_url();?>/assets/js/theme-customizer/customizer.js"></script>

<!-- Plugin used-->



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Bootstrap js-->
<script src="<?php echo base_url();?>/assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="<?php echo base_url();?>/assets/js/scrollbar/simplebar.js"></script>
<script src="<?php echo base_url();?>/assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="<?php echo base_url();?>./assets/js/config.js"></script>
<!-- Plugins JS start-->
<script src="<?php echo base_url();?>/assets/js/sidebar-menu.js"></script>
<script src="<?php echo base_url();?>./assets/js/slick/slick.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/slick/slick.js"></script>
<script src="<?php echo base_url();?>/assets/js/header-slick.js"></script>

<script src="<?php echo base_url();?>/assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/jszip.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/buttons.colVis.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/pdfmake.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/vfs_fonts.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.autoFill.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.select.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/buttons.html5.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/buttons.print.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.colReorder.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.fixedHeader.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.rowReorder.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/dataTables.scroller.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/datatable/datatable-extension/custom.js"></script>
<script src="<?php echo base_url();?>/assets/js/tooltip-init.js"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="../assets/js/script.js"></script>
<script src="../assets/js/theme-customizer/customizer.js"></script>
<!-- Plugin used-->
