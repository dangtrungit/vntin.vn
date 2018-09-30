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
$idLT = $_GET['idLT'];
settype($idLT,"int");
$row_loaitin = LoaiTinChiTiet($idLT);

?>

<?php
$message = "";
    if (isset($_POST["btnsualt"])){
        $Ten = $_POST['txttenlt'];
        $Ten_KhongDau = changeTitle($Ten);
        $ThuTu = $_POST['txtthutult'];
        settype($ThuTu,"int");
        $AnHien = $_POST['rdhienanlt'];
        settype($AnHien,"int");
        $idTL = $_POST['idTLlt'];
        settype($idTL, "int");
        $qr = "UPDATE loaitin SET Ten = '$Ten',Ten_KhongDau = '$Ten_KhongDau',ThuTu='$ThuTu',AnHien='$AnHien',idTL = '$idTL' WHERE idLT ='$idLT'";

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
    <tr><td align="center" id="hangmenu"><?php require "menuloaitin.php";?></td> </tr>


</table>
<form  method="POST">
    <table border="1px" align="center">
        <tr>
            <th colspan="5">UPDATE LOẠI TIN</th>
        </tr>

        <tr > <td>Ten</td><td><input type="text" name="txttenlt" id="txttenlt" value="<?php

                  echo  $row_loaitin['Ten'];

                ?>"/></td></tr>
<!--        <tr > <td>TenTL_KhongDau</td><td><input type="text" name="txttentl_khongdau" id="txttentl_khongdau"/></td></tr>-->
        <tr > <td>ThuTu</td><td><input type="text" name="txtthutult" id="txtthutult" value="<?php echo $row_loaitin['ThuTu']?>" /> </td></tr>
        <tr >
            <td>AnHien</td><td>
                    <input <?php if($row_loaitin['AnHien']==1) echo "checked= 'checked'" ?> type="radio" name="rdhienanlt" id="rdhienanlt" value="1"/>Hiện
                    <input <?php if($row_loaitin['AnHien']==0) echo "checked= 'checked'" ?> type="radio" name="rdhienanlt" id="rdhienanlt" value="0"/>Ẩn
            </td></tr>
        </tr>
        <tr>
            <td>
                <select id="idTLlt" name="idTLlt">
                    <?php
                    $theloai = DanhSachTheLoai();
                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                        ?>
                        <option <?php   if ($row_theloai['idTL'] == $row_loaitin['idTL']) echo "selected ='selected'"?> value="<?php echo $row_theloai['idTL']?>"><?php echo $row_theloai['TenTL']?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>

    </table>
    <table align="center" >
        <tr id="buttonthem">
            <td><button id="btnsualt" name="btnsualt"> Update</button></td>
        </tr>

    </table>

</form>
<h1 align="center" style="color: #990000"><?php echo $message?></h1>


</body>
</html>

