<?php

    session_start();
    include('includes/db.php');

    
    


    // Student Edit Data
if(isset($_POST['checking_update_btn']))
{
    $s_id = $_POST['item_code'];
    // echo $return = $s_id;

    $result_array = [];

    $query = "SELECT * FROM i_item WHERE i_code ='$s_id' ";

    $query_run = mysqli_query($conn, $query);

    if(mysqli_num_rows($query_run) > 0)
    {
        foreach($query_run as $row)
        {
            array_push($result_array, $row);
            header ('Content-type: application/json');
            echo json_encode($result_array);
        }
    }       
    else
    {
        echo "<h5>No Record Found</h5>";
    }
} 


 if (isset($_POST['updatebtn'])) {
     
    $i_code = $_POST["i_code"];
    $ic_code = $_POST["ic_code"];
    $isc_code = $_POST["isc_code"];
    $is_code = $_POST["is_code"];
    $imt_code = $_POST["imt_code"];
    $i_description = $_POST["i_description"];
    $i_make = $_POST["i_make"];
    $i_model = $_POST["i_model"];
    $i_serial_number = $_POST["i_serial_number"];
    $i_price = $_POST["i_price"];

    // echo $ic_code, $isc_code, $imt_code, $i_description, $i_make, $i_model, $i_serial_number, $i_price;

    $query = "UPDATE `i_item` SET ic_code = '$ic_code', isc_code = '$isc_code', is_code = '$is_code', imt_code = '$imt_code', i_description = '$i_description', i_make = '$i_make', i_model = '$i_model', i_serial_number = '$i_serial_number', i_price = '$i_price' WHERE i_code = '$i_code' ";

    $query_run = mysqli_query($conn, $query);

    if ($query_run)
    {
    $_SESSION['status'] = "Updated Successfully";
    header('Location: updateitems.php');
    }
    else
    {
    $_SESSION['status'] = "Something Went Wrong.!";
    header('Location: updateitems.php');
    }
     
 }


 if(isset($_POST['itemdel'])){

    $code = $_POST['itemcode'];

    $query = "DELETE FROM i_item WHERE i_code = '$code'";

    $query_run = mysqli_query($conn, $query);

    if ($query_run)
    {
    $_SESSION['status'] = "Deleted Successfully";
    header('Location: delitems.php');
    }
    else
    {
    $_SESSION['status'] = "Something Went Wrong.!";
    header('Location: delitems.php');
    }
}

?>