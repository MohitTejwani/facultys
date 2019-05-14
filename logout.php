<?php
session_start();
if(isset($_SESSION['fid'])){
    unset($_SESSION['facultyName']);
    echo "<script>window.location='../index.php';</script>";

}else{
    echo "<h1>faill......</h1>";
}
?>