<?php

    ob_start();
    session_start();
//    if (!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1){
//
//    }
(!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1) ? header("location:../index.php"):'';
require "../lib/dbCon.php";
require "../lib/quantri.php";


?>
<?php


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Quản trị VNTin</title>
    <link rel="stylesheet" type="text/css" href="./layout.css"/>
</head>

<body>
<table align="center" width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr align="center">
        <td id="hangtieude">
            TRANG QUẢN TRỊ
        </td>
    </tr>
    <tr ><td id="hangmenu" "><?php require "menu.php";?></td> </tr>


</table>
<form action="" method="GET">

    <div  align="center" style="margin-top: 50px;">

        <input style="border: 2px solid #00837d;border-radius: 10px;
    font-size: 18px;
    font-weight: bold;
    padding: 10px;
    min-width: 50%" type="text" id="timkiemadmin" name="timkiemadmin"/>
        <div >
            <button id="btnsearch" name="btnsearch" value="data" style="padding: 5px">Tìm Kiếm</button></div>
        <div > <button id="btnsearchid" name="btnsearchid" value="data" style="padding: 5px">Tìm Kiếm Theo ID</button></div>
    <div>  <button id="btnsearchtieude" name="btnsearchtieude" value="data" style="padding: 5px">Tìm Kiếm Theo Tiêu Đề</button></div>

</form>

<!--$tukhoa = $_GET['search'];-->


    <div align="center">
        <?php
        if (isset($_GET['btnsearch'])){
            $tukhoa =  $_GET['timkiemadmin'];
            $result = TimKiem($tukhoa);

            while ($row = mysqli_fetch_array($result)) {
//                echo
                ?>
                <h3><a href="tintucadmin/suaTin.php?idTin=<?php echo $row['idTin']?>">ID:<?php echo $row['idTin']?>-<?php echo $row['TieuDe']?></a></h3>
                <?php
            }
        }
        ?>

    </div>
    <div align="center">
        <?php
        if (isset($_GET['btnsearchid'])){
            $tukhoa =  $_GET['timkiemadmin'];
            $result = TimKiemTheoId($tukhoa);
            while ($row = mysqli_fetch_array($result)) {
//                echo
                ?>
                <h3><a href="tintucadmin/suaTin.php?idTin=<?php echo $row['idTin']?>">ID:<?php echo $row['idTin']?>-<?php echo $row['TieuDe']?></a></h3>
                <?php
            }
        }
        ?>

    </div>
    <div align="center">
        <?php
        if (isset($_GET['btnsearchtieude'])){
            $tukhoa =  $_GET['timkiemadmin'];
            $result = TimKiemTheoTieuDe($tukhoa);
            while ($row = mysqli_fetch_array($result)) {
//                echo
                ?>
                <h3><a href="tintucadmin/suaTin.php?idTin=<?php echo $row['idTin']?>">ID:<?php echo $row['idTin']?>-<?php echo $row['TieuDe']?></a></h3>
                <?php
            }
        }
        ?>

    </div>



</body>
</html>

