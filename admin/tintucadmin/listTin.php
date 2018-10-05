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
        <td id="hangtieude">
            TRANG QUẢN TRỊ
        </td>
    </tr>
    <tr>
        <td align="center" id="hangmenu"><?php require "menutin.php"; ?> </td>
    </tr>

</table>

<table border="1px" align="center">
    <tr>
        <th colspan="5">QUẢN LÍ TIN</th>
        <td align="center" id="buttonthem" bgcolor="white"><a href="themTin.php">Thêm</a></td>
    </tr>

    <?php

    $tin = DanhSachTin();
    while ($row_tin = mysqli_fetch_array($tin)) {
        ob_start();
        ?>
        <tr style="background-color: #b5b7c6">
            <td>idTin :{idTin} <br/> {Ngay}</td>
            <td width="350px"><a href="suaTin.php?idTin={idTin}">{TieuDe}</a>
                <br/>

                <img style="float: left ; margin-right: 5px " width="150" height="150" src="../../upload/tintuc/{urlHinh}"
                     alt=""/>
                {TomTat}
            </td>
            <td>Tên Thể Loại : {TenTL} <br/> - <br/> Tên Loại Tin : {Ten}</td>
            <td> Số Lần Xem: {SoLanXem} <br/> Tin nổi bật : {TinNoiBat} <br/> - <br/>Ẩn Hiện : {AnHien}</td>

            <td id="hangmenu">
                <a href="suaTin.php?idTin={idTin}">Sửa </a>

                <a onclick="return confirm('Bạn có muốn xóa không?')"
                   href="xoaTin.php?idTin={idTin}">Xóa</a></td>


        </tr>
        <?php
        $s = ob_get_clean();
        $s = str_replace("{idTin}",$row_tin["idTin"],$s);
        $s = str_replace("{Ngay}",$row_tin["Ngay"],$s);
        $s = str_replace("{TieuDe}",$row_tin["TieuDe"],$s);
        $s = str_replace("{TomTat}",$row_tin["TomTat"],$s);
        $s = str_replace("{TenTL}",$row_tin["TenTL"],$s);
        $s = str_replace("{Ten}",$row_tin["Ten"],$s);
        $s = str_replace("{SoLanXem}",$row_tin["SoLanXem"],$s);
        $s = str_replace("{TinNoiBat}",$row_tin["TinNoiBat"],$s);
        $s = str_replace("{AnHien}",$row_tin["AnHien"],$s);
        $s = str_replace("{urlHinh}",$row_tin["urlHinh"],$s);
        echo $s;
    }
    ?>

</table>

</body>
</html>

