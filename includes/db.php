<?php
    ini_set('display_errors', 1);


    $servername = "localhost";
    $username = "abdulrehman";
    $password= "949766";
    $db = "test";

    $conn = mysqli_connect($servername, $username, $password, $db);

    if(!$conn){
        die("Connection failed: " . mysqli_connect_error()); 
    }
    

    // Create database
      // $sql = "CREATE DATABASE ams";
      // if ($conn->query($sql) === TRUE) {
      //   echo "Database created successfully";
      // } else {
      //   echo "Error creating database: " . $conn->error;
      // }


    // create table 

    // $sql = "CREATE TABLE i_item(
    //     i_id 					INT			    NOT NULL		AUTO_INCREMENT,
    //     i_code	 			CHAR(6) 		    NOT NULL,		/*	Item Code */ 
    //     ic_code				CHAR(6)			    NOT NULL,		/*	Item Category Code */ 
    //     isc_code	 			CHAR(6) 	    NOT NULL,		/*	Item Sub Catoegory Code */ 
    //     is_code				CHAR(6)			    NOT NULL,		/*	Item Status Code */ 
    //     imt_code				CHAR(6)		    NOT NULL,		/*	Item Maintenance Type Code */ 
    //     wl_code	 			CHAR(6) 		    NOT NULL,		/*	wing location code */ 
    //     i_description			VARCHAR(255)	NOT NULL, 
    //     i_make				VARCHAR(25)		    NOT NULL, 
    //     i_model				VARCHAR(25)		    NOT NULL, 
    //     i_serial_number 		VARCHAR(20)			NULL,
    //     i_price	 			INT				    NOT NULL,  
    //     i_purchase_date		DATE				    NULL,
    //     i_retire_date	 		DATE 			    NULL,
    //     i_invoice				VARCHAR(10)			NULL,
    //     i_warranty_period		INT				NOT NULL,
    //     i_active				TINYINT 		NOT NULL		DEFAULT 1,
    //     i_lud 				TIMESTAMP 		    NOT NULL		DEFAULT CURRENT_TIMESTAMP,
    //     i_lub 				INT 			    NOT NULL		DEFAULT 1
    // )";

    //   echo "<br>";



    // if (mysqli_query($conn, $sql)) {
    //     echo "Table i_item created successfully";
    //   } else {
    //     echo "Error creating table: " . mysqli_error($conn);
    //   }



    //   mysqli_close($conn);
