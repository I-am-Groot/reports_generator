<html lang="en">
<head>
<title>:: Lucid HR :: Invoices</title>

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../public/css/bootstrap.min.css">

<!-- MAIN CSS -->
<!-- <link rel="stylesheet" href="../public/css/main.css"> -->
</head>
<body class="theme-orange">

<div id="wrapper">

    <div id="main-content w-100">
        <div class="container-fluid">

            <div class="row clearfix">

                <div class="col-lg-12 col-md-12">
                    <div class="card invoice1 mb-2 mt-2">                        
                        <div class="body">
                            <div class="invoice-top clearfix" style="display: block; clear: both;">
                                <div class="logo" style="float: left; height: 100px; width: 100px;">
                                    <img src="../public/img/ched-logo.png" alt="Logo" class="rounded-circle img-fluid">
                                </div>
                                <div class="info" style="float: left; margin-left: 20px;">
                                    <h6 class="font-weight-bold mb-0">Cocoa Health And Extension Division</h6>
                                    <p> info@ched.com.gh <br>
                                        +233 302 666 946 <br>
                                        +233 302 666 949
                                    </p>
                                </div>
                                <div class="title" style="float: right;">
                                    <h6 class="font-weight-bold mb-0">Regional Report</h6>
                                    <p>
                                        Region: Ayawaso Prampram <br>
                                        Date: May 27, 2018<br>
                                        Report Type: 
                                    </p>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th style="width: 5%;">#</th>
                                            <th style="width: 25%;">Department</th>
                                            <th style="width: 20%;">Pending</th>
                                            <th style="width: 20%;">Processed</th>
                                            <th style="width: 15%;">Approved For Payment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $counter = 0; ?>
                                        <?php foreach($records as $record): ?>
                                        <tr>
                                            <!-- <td><?php echo $counter + 1; ?></td>
                                            <td><?php echo $record->department_name; ?></td>
                                            <td><?php echo $record->pending; ?></td>
                                            <td><?php echo $record->processed; ?></td>
                                            <td><?php echo $record->approved_for_payment; ?></td> -->

                                            <td><?php echo $counter + 1; ?></td>
                                            <td>Dummy Department</td>
                                            <td>Dummy Pending</td>
                                            <td>Dummy Processed</td>
                                            <td>Dummy Approved</td>
                                        </tr>
                                        <?php $counter += 1; ?>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    
</div>
</body>
</html>
