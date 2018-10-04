<?php

ob_start();
session_start();
//    if (!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1){
//
//    }
(!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1) ? header("location:../index.php"):'';
require "../../lib/dbCon.php";
require "../../lib/quantri.php";
//echo  changeTitle1("Giờ Trái đất năm 2010 diễn ra ngày 27/3");

?>