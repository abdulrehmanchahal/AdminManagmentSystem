<?php


$query = "SELECT * FROM studentinfo WHERE srno = 1"; // Adjust the query to retrieve the appropriate record
$result = mysqli_query($conn, $query);

if ($row = mysqli_fetch_assoc($result)) {
    echo json_encode($row);
} else {
    echo json_encode(array()); // Return an empty JSON object if no data found
}

mysqli_close($conn);
?>