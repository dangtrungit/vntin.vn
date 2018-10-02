<?php

    ob_start();
    session_start();
//    if (!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1){
//
//    }

(!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1) ? header("location:../index.php"):'';

require "../../lib/dbCon.php";
require "../../lib/quantri.php";
//echo  stripUnicode("à anh yêu");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Quản trị VNTin</title>
    <link rel="stylesheet" type="text/css" href="../layout.css"/>
</head>

<body>
<table align="center" width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr align="center">
        <td id="hangtieude" >
            TRANG QUẢN TRỊ
        </td>
    </tr>
    <tr ><td align="center" id="hangmenu"><?php require "./menuloaitin.php";?> </td> </tr>


</table>

<table border="1px" align="center" >
    <tr>
    <th colspan="5">QUẢN LÍ LOẠI TIN</th>
    </tr>
    <tr style="background-color: #b5b7c6">
        <td>idLT</td>
        <td>Ten</td>
        <td>Ten_KhongDau</td>
        <td>ThuTu</td>
        <td>AnHien</td>
        <td>TenTL</td>
        <td align="center" id="buttonthem" bgcolor="white"><a href="themLoaiTin.php">Thêm</a></td>
    </tr>
    <?php

    $loaitin = DanhSachLoaiTin();
    while ($row_loaitin= mysqli_fetch_array($loaitin)) {
        ob_start();

        ?>
        <tr>
            <td>{idLT}</td>
            <td>{Ten}</td>
            <td>{Ten_KhongDau}</td>
            <td>{ThuTu}</td>
            <td>{AnHien}</td>
            <td>{TenTL}</td>
            <td id="hangmenu"><a
                        href="suaLoaiTin.php?idLT={idLT}">Sửa</a>   <a onclick="return confirm('Bạn có muốn xóa không?')"
                        href="xoaLoaiTin.php?idLT={idLT}"
                >Xóa</a></td>

        </tr>
        <?php
        $s = ob_get_clean();
        $s = str_replace("{idLT}",$row_loaitin["idLT"],$s);
        $s = str_replace("{Ten}",$row_loaitin["Ten"],$s);
        $s = str_replace("{Ten_KhongDau}",$row_loaitin["Ten_KhongDau"],$s);
        $s = str_replace("{ThuTu}",$row_loaitin["ThuTu"],$s);
        $s = str_replace("{AnHien}",$row_loaitin["AnHien"],$s);
        $s = str_replace("{TenTL}",$row_loaitin["TenTL"],$s);
        echo $s;
    }
    ?>

</table>

</body>
</html>

