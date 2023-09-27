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

                    <h1 class="h3 mb-4 text-gray-800">Assets</h1>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add Assets
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Information</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="mb-3">
                                            <label for="i_id" class="form-label">ID</label>
                                            <input type="text" class="form-control" id="i_id" name="i_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_code" class="form-label">Code</label>
                                            <input type="text" class="form-control" id="i_id" name="i_code">
                                        </div>
                                        <div class="mb-3">
                                            <label for="isc_code" class="form-label">Sub Catoegory Code</label>
                                            <input type="text" class="form-control" id="isc_code" name="isc_code">
                                        </div>
                                        <div class="mb-3">
                                            <label for="is_code" class="form-label">Status Code</label>
                                            <input type="text" class="form-control" id="is_code" name="is_code">
                                        </div>
                                        <div class="mb-3">
                                            <label for="imt_code" class="form-label">Maintenance Type Code</label>
                                            <input type="text" class="form-control" id="imt_code" name="imt_code">
                                        </div>
                                        <div class="mb-3">
                                            <label for="wl_code" class="form-label">Wing location code</label>
                                            <input type="text" class="form-control" id="wl_code" name="wl_code">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_discription" class="form-label">Discription</label>
                                            <textarea class="form-control" id="i_discription" name="i_discription" rows="3"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_make" class="form-label">Make</label>
                                            <input type="text" class="form-control" id="i_make" name="i_make">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_model" class="form-label">Model</label>
                                            <input type="text" class="form-control" id="i_model" name="i_model">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_serial_number" class="form-label">Serial No</label>
                                            <input type="text" class="form-control" id="i_serial_number" name="i_serial_number">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_price" class="form-label">Price</label>
                                            <input type="text" class="form-control" id="i_price" name="i_price">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_purchase_date" class="form-label">Purchase Date</label>
                                            <input type="text" class="form-control" id="i_purchase_date" name="i_purchase_date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_retire_date" class="form-label">Retire Date</label>
                                            <input type="text" class="form-control" id="i_retire_date" name="i_retire_date">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_invoice" class="form-label">Invoice</label>
                                            <input type="text" class="form-control" id="i_invoice" name="i_invoice">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_warranty_period" class="form-label">Warranty Period</label>
                                            <input type="text" class="form-control" id="i_warranty_period" name="i_warranty_period">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_active" class="form-label">Activity</label>
                                            <input type="text" class="form-control" id="i_active" name="i_active">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_lud" class="form-label">LUD</label>
                                            <input type="text" class="form-control" id="i_lud" name="i_lud">
                                        </div>
                                        <div class="mb-3">
                                            <label for="i_lub" class="form-label">LUB</label>
                                            <input type="text" class="form-control" id="i_lub" name="i_lub">
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <table id="dataTable" class="table table-bordered table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
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
                                <th scope="col">Purchase Date</th>
                                <th scope="col">Retire Date</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Warranty Period</th>
                                <th scope="col">Acticve</th>
                                <th scope="col">LUD</th>
                                <th scope="col">LUB</th>
                            </tr>
                        </thead>

                    </table>

                </div>

                <!-- end page content -->

            </div>


        </div>


        <script>
            new DataTable('#dataTable');
        </script>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"> </script>

        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"> </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>