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
$idTL = $_GET['idTL'];
settype($idTL,"int");
$row_theloai = DanhSachTheLoaiChiTiet($idTL);
?>

<?php
$message = "";
    if (isset($_POST["btnsua"])){
        $TenTL = $_POST['txttentl'];
        $TenTL_KhongDau = changeTitle($TenTL);
        $ThuTu = $_POST['txtthutu'];
        settype($ThuTu,"int");
        $AnHien = $_POST['rdhienan'];
        settype($AnHien,"int");
        $qr = "UPDATE theloai SET TenTL = '$TenTL',TenTL_KhongDau = '$TenTL_KhongDau',ThuTu='$ThuTu',AnHien='$AnHien' WHERE idTL ='$idTL'";

        mysqli_query($conn,$qr);
        $message = "Update thành công!";
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
    <tr><td align="center" id="hangmenu"><?php require "menutheloai.php";?></td> </tr>


</table>
<form  method="POST">
    <table border="1px" align="center">
        <tr>
            <th colspan="5">UPDATE THỂ LOẠI</th>
        </tr>

        <tr > <td>TenTL</td><td><input type="text" name="txttentl" id="txttentl" value="<?php echo $row_theloai['TenTL']?>"/></td></tr>
<!--        <tr > <td>TenTL_KhongDau</td><td><input type="text" name="txttentl_khongdau" id="txttentl_khongdau"/></td></tr>-->
        <tr > <td>ThuTu</td><td><input type="text" name="txtthutu" id="txtthutu" value="<?php echo $row_theloai['ThuTu']?>" /> </td></tr>
        <tr >
            <td>AnHien</td><td>
                    <input <?php if($row_theloai['AnHien']==1) echo "checked= 'checked'" ?> type="radio" name="rdhienan" id="rdhienan" value="1"/>Hiện
                    <input <?php if($row_theloai['AnHien']==0) echo "checked= 'checked'" ?> type="radio" name="rdhienan" id="rdhienan" value="0"/>Ẩn
            </td></tr>
        </tr>

    </table>
    <table align="center" >
        <tr id="buttonthem">
            <td><button id="btnsua" name="btnsua">Update</button></td>
        </tr>

    </table>

</form>
<h1 align="center" style="color: #990000"><?php echo $message?></h1>


</body>
</html>

