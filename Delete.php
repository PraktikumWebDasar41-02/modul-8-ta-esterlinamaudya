<?php
    require_once "konek.php";
	$datbase = new database();

    $nim     = $_GET['nim'];

    $delete = "DELETE FROM tadelapan WHERE nim='$nim'"; 

	    if (mysqli_query($db, $delete)) {
	        header("location: dashboard.php");
	    }else {
	        echo "Error: " . $delete . "<br?" . mysqli_error($db);
	    }

	    mysqli_close($conn);
?>