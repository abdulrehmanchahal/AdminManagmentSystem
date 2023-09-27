<?php

ini_set('display_errors', 1);

session_start();


include('includes/db.php');



// mysqli_close($conn);
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

                    <h1 class="h3 mb-4 text-center">Update Items</h1>

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

                    <br><br>

                    <?php
                        if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                        {
                        ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            
                        <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                        </div>
                        <?php
                        unset($_SESSION['status']);
                        }
                    ?>

                    <br><br>

                    <div>
                        <div>
                            <!-- Button trigger modal -->
                            <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Launch demo modal
                            </button> -->

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Update Items</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="code.php" method="POST">
                                                <div class="mb-3">

                                                    <div class="row">
                                                        <!-- <input type="text" name="item_id" id="item_id"> -->

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

                                                        <!-- <div class="col">
                                                            <label for="wl_code" class="form-label">Wing location code</label>
                                                            <input type="text" class="form-control" id="wl_code" name="wl_code">

                                                        </div> -->

                                                    </div>

                                                </div>


                                                <div class="mb-3">

                                                    <div class="row">

                                                        <div class="col">
                                                            <label for="i_description" class="form-label">Discription</label>
                                                            <textarea class="form-control" id="i_description" name="i_description" rows="3" cols="3"></textarea>

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

                                                        <!-- <div class="col">
                                                            <label for="i_purchase_date" class="form-label">Purchase Date</label>
                                                            <input type="date" class="form-control" id="i_purchase_date" name="i_purchase_date">
                                                        </div> -->



                                                    </div>

                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="updatebtn" class="btn btn-primary">Save changes</button>
                                                </div>


                                                <!-- <div class="mb-3">

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
                                                </div> -->

                                                <!-- <div class="container text-center">
                                                    <button type="submit" id="update" class="btn btn-success">Update</button>

                                                </div> -->

                                            </form>
                                        </div>
                                        <!-- <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col">Sr No</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Category Code</th>
                                    <th scope="col">Sub Catoegory Code</th>
                                    <th scope="col">Status Code</th>
                                    <th scope="col">Maintenance Type Code</th>
                                    <!-- <th scope="col">Wing location code</th> -->
                                    <th scope="col">Discription</th>
                                    <th scope="col">Make</th>
                                    <th scope="col">Model</th>
                                    <th scope="col">Serial No</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Action</th>
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
                                // <td>" . $row['wl_code'] . "</td>
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $sno = $sno + 1;
                                    echo "<tr>
                                        <th scope='row'>" . $sno . "</th>
                                        <td class = 'item_code'>" . $row['i_code'] . "</td>
                                        <td>" . $row['ic_code'] . "</td>
                                        <td>" . $row['isc_code'] . "</td>
                                        <td>" . $row['is_code'] . "</td>
                                        <td>" . $row['imt_code'] . "</td>
                                        <td>" . $row['i_description'] . "</td>
                                        <td>" . $row['i_make'] . "</td>
                                        <td>" . $row['i_model'] . "</td>
                                        <td>" . $row['i_serial_number'] . "</td>
                                        <td>" . $row['i_price'] . "</td>
                                        <td> <button class='btn btn-success update_btn' data-bs-toggle='modal' data-bs-target='#exampleModal'> UPDATE </button> </td>
                                        

                                    </tr>";
                                }
                                ?>

                                </tr>
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

    <script>
        $(document).ready(function() {
            $('.update_btn').click(function(e) {
                e.preventDefault();
                var item_code = $(this).closest('tr').find('.item_code').text();
                console.log(item_code);

                $.ajax({
                    type: "POST",
                    url: "code.php",
                    data: {
                        'checking_update_btn': true,
                        'item_code': item_code,
                    },
                    success: function(response) {
                        // console.log(response);
                        $.each(response, function(key, value) {
                            // console.log(value ['fname']);
                            // $('#item_id').val(value['i_id']);
                            $('#i_code').val(value['i_code']);
                            $('#ic_code').val(value['ic_code']);
                            $('#isc_code').val(value['isc_code']);
                            $('#is_code').val(value['is_code']);
                            $('#i_description').val(value['i_description']);
                            $('#imt_code').val(value['imt_code']);
                            $('#i_make').val(value['i_make']);
                            $('#i_model').val(value['i_model']);
                            $('#i_serial_number').val(value['i_serial_number']);
                            $('#i_price').val(value['i_price']);
                        });
                        $('#exampleModal').modal('show');
                    }
                });
            });
        });
    </script>

</body>

</html>