<?php

    ob_start();
    session_start();
if (isset($_SESSION['idUser']) && $_SESSION['idGroup']==1){

}else{
    header("location:../index.php");
}
require "../../lib/dbCon.php";
require "../../lib/quantri.php";
//echo  stripUnicode("à anh yêu");

?>

<?php
    $idTin = $_GET['idTin'];
    $qr = "DELETE FROM tin WHERE idTin = '$idTin'";
    mysqli_query($conn,$qr);
    header("location:./listTin.php");
?>


