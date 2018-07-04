<?php


require('conn.php');



if(isset($_POST['submit'])){
    $skul_id = $_POST['idNum'];
    $fName = $_POST['firstN'];
    $lName = $_POST['lastN'];
    $pass = $_POST['pWord'];
    $email = $_POST['Mail'];
    $gender = $_POST['gender'];

    /* authentication */


    /** Insert the the values to DB */
    $sql = "INSERT INTO `seller` (`school_id`, `firstName`, `lastName`, `password`, `email`,`gender`) VALUES('$skul_id','$fName','$lName','$pass','$email','$gender')";
    //The mysqli_query() function performs a query against the database
    //mysqli_query(connection,query);
    $result = mysqli_query($conn, $sql);
}


?>
