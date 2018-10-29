<?php 
 
class database{
 
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $datbase= "webdasta8";
 
	function __construct(){
		mysqli_connect($this->host, $this->uname, $this->pass);
		mysqli_select_db($this->datbase);
	}
 }
?>