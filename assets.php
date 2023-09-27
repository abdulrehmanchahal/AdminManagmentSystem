<?php

ini_set('display_errors', 1);

session_start();


include('includes/db.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r($_POST);
    // extract($_POST);
    // exit;
    $i_code = $_POST["i_code"];
    $ic_code = $_POST["ic_code"];
    $isc_code = $_POST["isc_code"];
    $is_code = $_POST["is_code"];
    $imt_code = $_POST["imt_code"];
    $wl_code = $_POST["wl_code"];
    $i_discription = $_POST["i_discription"];
    $i_make = $_POST["i_make"];
    $i_model = $_POST["i_model"];
    $i_serial_number = $_POST["i_serial_number"];
    $i_price = $_POST["i_price"];
    $i_purchase_date = $_POST["i_purchase_date"];
    $i_retire_date = $_POST["i_retire_date"];
    $i_invoice = $_POST["i_invoice"];
    $i_warranty_period = $_POST["i_warranty_period"];
    // $i_active = $_POST["i_active"];
    // $i_lud = $_POST["i_lud"];
    // $i_lub = $_POST["i_lub"];

    $sql = "INSERT INTO i_item (i_code, ic_code, isc_code, is_code, imt_code, wl_code, i_description, i_make, i_model, i_serial_number, i_price,  i_purchase_date, i_retire_date, i_invoice, i_warranty_period) VALUES('$i_code', '$ic_code', '$isc_code', '$is_code', '$imt_code', '$wl_code','$i_discription', '$i_make', '$i_model', '$i_serial_number', '$i_price', '$i_purchase_date', '$i_retire_date', '$i_invoice', '$i_warranty_period' )";

    // echo $sql;exit;
    $result = mysqli_query($conn, $sql);

    $alert = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
    <strong>Hey!</strong> Added Successfully
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";

    if ($result) {
           echo $alert;
        }
        else
        {
        
        }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Assets Managment System</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">

</head>


<body>


    <div id="wrapper">
        <?php
        include('includes/sidebar.html');
        ?>


        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php
                include('includes/navbar.html');

                ?>
                <!-- End of Topbar -->


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <h1 class="h3 mb-4 text-center">Assets Manipulation</h1>

                    <div>
                        <a href="assets.php" class="btn btn-primary">Add Item</a>
                        <a href="viewitems.php" class="btn btn-info">View Items</a>
                        <a href="updateitems.php" class="btn btn-success">Update Items</a>
                        <a href="delitems.php" class="btn btn-danger">Delete Items</a>
                        <!-- <button class="btn btn-primary">Add Item</button> -->
                        <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal">Add Item</button> -->
                        <!-- <button class="btn btn-info">View Item</button> -->
                        <!-- <button class="btn btn-success">Update Item</button>
                        <button class="btn btn-danger">Delete Item</button> -->
                    </div>


                   

                    

                    <!-- Button trigger modal -->
                    <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Launch demo modal
                    </button> -->

                    <!-- Modal -->
                    <!-- <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="assets.php" method="post">
                                        <div class="mb-3">

                                            <div class="row">

                                                <div class="col">
                                                    <label for="i_code" class="form-label">Code</label>
                                                    <input type="text" class="form-control" id="i_code" name="i_code">
                                                </div>

                                                <div class="col">
                                                    <label for="ic_code" class="form-label">Catoegory Code</label>
                                                    <input type="text" class="form-control" id="ic_code" name="ic_code">
                                                </div>

                                                <div class="col">
                                                    <label for="isc_code" class="form-label">Sub Catoegory Code</label>
                                                    <input type="text" class="form-control" id="isc_code" name="isc_code">
                                                </div>


                                            </div>

                                        </div>

                                        <div class="mb-3">

                                            <div class="row">

                                                <div class="col">
                                                    <label for="is_code" class="form-label">Status Code</label>
                                                    <input type="text" class="form-control" id="is_code" name="is_code">
                                                </div>

                                                <div class="col">
                                                    <label for="imt_code" class="form-label">Maintenance Type Code</label>
                                                    <input type="text" class="form-control" id="imt_code" name="imt_code">

                                                </div>

                                                <div class="col">
                                                    <label for="wl_code" class="form-label">Wing location code</label>
                                                    <input type="text" class="form-control" id="wl_code" name="wl_code">

                                                </div>

                                            </div>

                                        </div>


                                        <div class="mb-3">

                                            <div class="row">

                                                <div class="col">
                                                    <label for="i_discription" class="form-label">Discription</label>
                                                    <textarea class="form-control" id="i_discription" name="i_discription" rows="3" cols="3"></textarea>

                                                </div>

                                                <div class="col">
                                                    <label for="i_make" class="form-label">Make</label>
                                                    <input type="text" class="form-control" id="i_make" name="i_make">
                                                </div>

                                                <div class="col">
                                                    <label for="i_model" class="form-label">Model</label>
                                                    <input type="text" class="form-control" id="i_model" name="i_model">
                                                </div>



                                            </div>

                                        </div>


                                        <div class="mb-3">

                                            <div class="row">

                                                <div class="col">
                                                    <label for="i_serial_number" class="form-label">Serial No</label>
                                                    <input type="text" class="form-control" id="i_serial_number" name="i_serial_number">
                                                </div>

                                                <div class="col">
                                                    <label for="i_price" class="form-label">Price</label>
                                                    <input type="text" class="form-control" id="i_price" name="i_price">
                                                </div>

                                                <div class="col">
                                                    <label for="i_purchase_date" class="form-label">Purchase Date</label>
                                                    <input type="date" class="form-control" id="i_purchase_date" name="i_purchase_date">
                                                </div>



                                            </div>

                                        </div>


                                        <div class="mb-3">

                                            <div class="row">

                                                <div class="col">
                                                    <label for="i_retire_date" class="form-label">Retire Date</label>
                                                    <input type="date" class="form-control" id="i_retire_date" name="i_retire_date">
                                                </div>

                                                <div class="col">
                                                    <label for="i_invoice" class="form-label">Invoice</label>
                                                    <input type="text" class="form-control" id="i_invoice" name="i_invoice">
                                                </div>

                                                <div class="col">
                                                    <label for="i_warranty_period" class="form-label">Warranty Period</label>
                                                    <input type="text" class="form-control" id="i_warranty_period" name="i_warranty_period">
                                                </div>



                                            </div>
                                        </div>

                                        <div class="container text-center">
                                            <button type="submit" class="btn btn-primary">Add</button>

                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <br><br>
                    <form action="assets.php" method="post">
                        <div class="mb-3">

                            <div class="row">

                                <div class="col">
                                    <label for="i_code" class="form-label">Code</label>
                                    <input type="text" class="form-control" id="i_code" name="i_code">
                                </div>

                                <div class="col">
                                    <label for="ic_code" class="form-label">Catoegory Code</label>
                                    <input type="text" class="form-control" id="ic_code" name="ic_code">
                                </div>

                                <div class="col">
                                    <label for="isc_code" class="form-label">Sub Catoegory Code</label>
                                    <input type="text" class="form-control" id="isc_code" name="isc_code">
                                </div>


                            </div>

                        </div>

                        <div class="mb-3">

                            <div class="row">

                                <div class="col">
                                    <label for="is_code" class="form-label">Status Code</label>
                                    <input type="text" class="form-control" id="is_code" name="is_code">
                                </div>

                                <div class="col">
                                    <label for="imt_code" class="form-label">Maintenance Type Code</label>
                                    <input type="text" class="form-control" id="imt_code" name="imt_code">

                                </div>

                                <div class="col">
                                    <label for="wl_code" class="form-label">Wing location code</label>
                                    <input type="text" class="form-control" id="wl_code" name="wl_code">

                                </div>

                            </div>

                        </div>


                        <div class="mb-3">

                            <div class="row">

                                <div class="col">
                                    <label for="i_discription" class="form-label">Discription</label>
                                    <textarea class="form-control" id="i_discription" name="i_discription" rows="3" cols="3"></textarea>

                                </div>

                                <div class="col">
                                    <label for="i_make" class="form-label">Make</label>
                                    <input type="text" class="form-control" id="i_make" name="i_make">
                                </div>

                                <div class="col">
                                    <label for="i_model" class="form-label">Model</label>
                                    <input type="text" class="form-control" id="i_model" name="i_model">
                                </div>



                            </div>

                        </div>


                        <div class="mb-3">

                            <div class="row">

                                <div class="col">
                                    <label for="i_serial_number" class="form-label">Serial No</label>
                                    <input type="text" class="form-control" id="i_serial_number" name="i_serial_number">
                                </div>

                                <div class="col">
                                    <label for="i_price" class="form-label">Price</label>
                                    <input type="text" class="form-control" id="i_price" name="i_price">
                                </div>

                                <div class="col">
                                    <label for="i_purchase_date" class="form-label">Purchase Date</label>
                                    <input type="date" class="form-control" id="i_purchase_date" name="i_purchase_date">
                                </div>



                            </div>

                        </div>


                        <div class="mb-3">

                            <div class="row">

                                <div class="col">
                                    <label for="i_retire_date" class="form-label">Retire Date</label>
                                    <input type="date" class="form-control" id="i_retire_date" name="i_retire_date">
                                </div>

                                <div class="col">
                                    <label for="i_invoice" class="form-label">Invoice</label>
                                    <input type="text" class="form-control" id="i_invoice" name="i_invoice">
                                </div>

                                <div class="col">
                                    <label for="i_warranty_period" class="form-label">Warranty Period</label>
                                    <input type="text" class="form-control" id="i_warranty_period" name="i_warranty_period">
                                </div>



                            </div>
                        </div>

                        <div class="container text-center">
                            <button type="submit" class="btn btn-primary">Add</button>

                        </div>

                    </form>


                </div>

                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

            </div>
        </div>
    </div>



    </div>

    <!-- end page content -->

    </div>


    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>