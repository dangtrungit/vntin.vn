<?php

ob_start();
session_start();
//    if (!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1){
//
//    }
//(!isset($_SESSION['idUser']) && !isset($_SESSION['idGroup'])==1) ? header("location:../index.php"):'';
require "../../lib/dbCon.php";
require "../../lib/quantri.php";
//echo  stripUnicode("à anh yêu");

?>

<?php
$message = "";
if (isset($_POST["btnthemlt"])) {
    $Ten = $_POST['txttenlt'];
    $Ten_KhongDau = changeTitle($Ten);
    $ThuTu = $_POST['txtthutult'];
    settype($ThuTu, "int");
    $AnHien = $_POST['rdhienanlt'];
    settype($AnHien, "int");
    $idTL = $_POST['idTL'];
    settype($idTL, "int");

    $qr = "INSERT INTO loaitin VALUES (null ,'$Ten','$Ten_KhongDau','$ThuTu','$AnHien','$idTL')";
    if ($Ten != null && $Ten_KhongDau != null && $AnHien != null && $ThuTu != null && $idTL != null) {
        mysqli_query($conn, $qr);
        $message = "Thêm thành công!";
    } else {
        $message = "Không thêm được! Điền đầy đủ thông tin muốn thêm.";
    }


}
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
        <td align="center" id="hangmenu"><?php require "menuloaitin.php"; ?></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>

</table>
<form method="POST">
    <table border="1px" align="center">
        <tr>
            <th colspan="5">THÊM LOẠI TIN</th>
        </tr>

        <tr>
            <td>Ten</td>
            <td><input type="text" name="txttenlt" id="txttenlt"/></td>
        </tr>
        <!--        <tr > <td>TenTL_KhongDau</td><td><input type="text" name="txttentl_khongdau" id="txttentl_khongdau"/></td></tr>-->
        <tr>
            <td>ThuTu</td>
            <td><input type="text" name="txtthutult" id="txtthutult"/></td>
        </tr>
        <tr>
            <td>AnHien</td>
            <td>
                <input type="radio" name="rdhienanlt" id="rdhienanlt" value="1" checked/> Hiện
                <input type="radio" name="rdhienanlt" id="rdhienanlt" value="0"/>Ẩn
            </td>
        </tr>
        </tr>
        <tr>
            <td>idTL</td>
            <td><select id="idTL" name="idTL">
                    <?php
                    $theloai = DanhSachTheLoai();
                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                        ?>
                        <option value="<?php echo $row_theloai['idTL']?>"><?php echo $row_theloai['TenTL']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
    </table>
    <table align="center">
        <tr id="buttonthem">
            <td>
                <button id="btnthemlt" name="btnthemlt">Thêm</button>
            </td>
        </tr>

    </table>

</form>
<h1 align="center" style="color: #990000"><?php echo $message ?></h1>


</body>
</html>

