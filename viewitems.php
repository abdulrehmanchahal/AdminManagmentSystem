<?php

ini_set('display_errors', 1);


include('includes/db.php');

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // echo '<pre>';
//     // print_r($_POST);
//     // extract($_POST);
//     // exit;
//     $i_code = $_POST["i_code"];
//     $ic_code = $_POST["ic_code"];
//     $isc_code = $_POST["isc_code"];
//     $is_code = $_POST["is_code"];
//     $imt_code = $_POST["imt_code"];
//     $wl_code = $_POST["wl_code"];
//     $i_discription = $_POST["i_discription"];
//     $i_make = $_POST["i_make"];
//     $i_model = $_POST["i_model"];
//     $i_serial_number = $_POST["i_serial_number"];
//     $i_price = $_POST["i_price"];
//     $i_purchase_date = $_POST["i_purchase_date"];
//     $i_retire_date = $_POST["i_retire_date"];
//     $i_invoice = $_POST["i_invoice"];
//     $i_warranty_period = $_POST["i_warranty_period"];
//     // $i_active = $_POST["i_active"];
//     // $i_lud = $_POST["i_lud"];
//     // $i_lub = $_POST["i_lub"];

//     $sql = "INSERT INTO i_item (i_code, ic_code, isc_code, is_code, imt_code, wl_code, i_description, i_make, i_model, i_serial_number, i_price,  i_purchase_date, i_retire_date, i_invoice, i_warranty_period) VALUES('$i_code', '$ic_code', '$isc_code', '$is_code', '$imt_code', '$wl_code','$i_discription', '$i_make', '$i_model', '$i_serial_number', '$i_price', '$i_purchase_date', '$i_retire_date', '$i_invoice', '$i_warranty_period' )";

//     // echo $sql;exit;
//     $result = mysqli_query($conn, $sql);

//     if ($result) {
//         echo "Record has been added successfully";
//     } else {
//         echo "Record has not been added successfully";
//     }
// }

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

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
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

                    <h1 class="h3 mb-4 text-center">View Items</h1>

                    <div>
                        <a href="assets.php" class="btn btn-primary">Add Item</a>
                        <a href="viewitems.php" class="btn btn-info">View Items</a>
                        <a href="updateitems.php" class="btn btn-success">Update Items</a>
                        <a href="delitems.php" class="btn btn-danger">Delete Items</a>
                    </div>

                    <br><br>

                    <div>

                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                <th scope="col">Sr No</th>
                                <th scope="col">Code</th>
                                <th scope="col">Category Code</th>
                                <th scope="col">Sub Catoegory Code</th>
                                <th scope="col">Status Code</th>
                                <th scope="col">Maintenance Type Code</th>
                                <th scope="col">Wing location code</th>
                                <th scope="col">Discription</th>
                                <th scope="col">Make</th>
                                <th scope="col">Model</th>
                                <th scope="col">Serial No</th>
                                <th scope="col">Price</th>
                                <!-- <th scope="col">Purchase Date</th>
                                <th scope="col">Retire Date</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Warranty Period</th>
                                <th scope="col">Acticve</th>
                                <th scope="col">LUD</th>
                                <th scope="col">LUB</th>                              -->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $sql = "SELECT * FROM `i_item`";
                                    $result = mysqli_query($conn, $sql);
                                    $sno = 0;
                                    while($row = mysqli_fetch_assoc($result)){
                                        $sno = $sno + 1;
                                        echo "<tr>
                                        <th scope='row'>" . $sno . "</th>
                                        <td>" . $row['i_code'] . "</td>
                                        <td>" . $row['ic_code'] . "</td>
                                        <td>" . $row['isc_code'] . "</td>
                                        <td>" . $row['is_code'] . "</td>
                                        <td>" . $row['imt_code'] . "</td>
                                        <td>" . $row['wl_code'] . "</td>
                                        <td>" . $row['i_description'] . "</td>
                                        <td>". $row['i_make'] . "</td>
                                        <td>" . $row['i_model'] . "</td>
                                        <td>" . $row['i_serial_number'] . "</td>
                                        <td>" . $row['i_price'] . "</td>
                                    </tr>";
                                    }
                                ?>
                                <!-- <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td> -->
                                    <!-- <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td>
                                    <td>@mdo</td> -->
                                </tr>
                                <!-- <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry the Bird</td>
                                    <td>Thornton</td>
                                    <td>@twitter</td>
                                </tr> -->
                            </tbody>
                        </table>

                    </div>









                </div>

                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->

            </div>
        </div>
    </div>



    </div>

    <!-- end page content -->

    </div>


    </div>


    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <script>
        let table = new DataTable('#myTable');
    </script>

</body>

</html>