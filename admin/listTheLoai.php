<?php

    ob_start();
    session_start();
//    if (!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1){
//
//    }
(!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1) ? header("location:../listTheLoai.php"):'';
require "../lib/dbCon.php";
require "../lib/quantri.php";
//echo  stripUnicode("à anh yêu");

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
        <td id="hangtieude" >
            TRANG QUẢN TRỊ
        </td>
    </tr>
    <tr ><td align="center" id="hangmenu"><?php require "menu.php";?> </td> </tr>


</table>

<table border="1px" align="center" >
    <tr>
    <th colspan="5">QUẢN LÍ THỂ LOẠI</th>
    </tr>
    <tr style="background-color: #b5b7c6">
        <td>idTL</td>
        <td>TenTL</td>
        <td>TenTL_KhongDau</td>
        <td>ThuTu</td>
        <td>AnHien</td>
        <td align="center" id="buttonthem" bgcolor="white"><a href="themTheLoai.php">Thêm</a></td>
    </tr>
    <?php

    $theloai = DanhSachTheLoai();
    while ($row_theloai = mysqli_fetch_array($theloai)) {
        ob_start();

        ?>
        <tr>
            <td>{idTL}</td>
            <td>{TenTL}</td>
            <td>{TenTL_KhongDau}</td>
            <td>{ThuTu}</td>
            <td>{AnHien}</td>
            <td id="hangmenu"><a href="suaTheLoai.php?idTL={idTL}">Sửa</a> - <a
                        href="xoaTheLoai.php?idTL={idTL}">Xóa</a></td>

        </tr>
        <?php
        $s = ob_get_clean();
        $s = str_replace("{idTL}",$row_theloai["idTL"],$s);
        $s = str_replace("{TenTL}",$row_theloai["TenTL"],$s);
        $s = str_replace("{TenTL_KhongDau}",$row_theloai["TenTL_KhongDau"],$s);
        $s = str_replace("{ThuTu}",$row_theloai["ThuTu"],$s);
        $s = str_replace("{AnHien}",$row_theloai["AnHien"],$s);
        echo $s;
    }
    ?>

</table>

</body>
</html>

