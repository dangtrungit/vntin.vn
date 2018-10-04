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
$idTin = $_GET['idTin'];
settype($idTin, "int");
$row_tin = DanhSachTinChiTiet($idTin);

?>

<?php
$message = "";
$loadfile="";
if (isset($_POST["btnsuatin"])) {
    $TieuDe = $_POST['txttieude'];
    $TieuDe_KhongDau = changeTitle($TieuDe);
    $Search_nonUnicode = changeTitle1($TieuDe).''.$TieuDe;
    $TomTat = $_POST['txtTomTat'];
    if (isset($_FILES['urlHinh'])) {
        // Nếu file upload không bị lỗi,
        // Tức là thuộc tính error > 0
        if ($_FILES['urlHinh']['error'] > 0) {
            $loadfile= 'File Upload Bị Lỗi';
        } else {
            // Upload file

            $urlHinh = $_FILES['urlHinh']['name'];
//            $loadfile= 'File Uploaded';
        }
    }
    else {
        $loadfile= 'Bạn chưa chọn file upload';
    };

//    $Ngay = date("Y-m-d");
    settype($Ngay, "int");

    $Content = $_POST['post_Content'];
    $SoLanXem = $_POST['txtSoLanXem'];
    settype($SoLanXem, "int");

    $TinNoiBat = $_POST['rdtinnoibat'];
    settype($TinNoiBat, "int");

    $AnHien = $_POST['rdAnHien'];
    settype($AnHien, "int");

    $qr = "UPDATE tin SET TieuDe = '$TieuDe',TieuDe_KhongDau = '$TieuDe_KhongDau',Search_nonUnicode='$Search_nonUnicode',
TomTat='$TomTat',urlHinh='$urlHinh',Content='$Content',
SoLanXem='$SoLanXem',TinNoiBat='$TinNoiBat',AnHien='$AnHien' WHERE idTin ='$idTin'";

    if (!empty($urlHinh)){
        move_uploaded_file($_FILES['urlHinh']['tmp_name'], '../../upload/tintuc/' . $_FILES['urlHinh']['name']);
    }
    //
    mysqli_query($conn, $qr);
    $message = "Update thành công!";
//
//    header("location:./listTin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Quản trị VNTin</title>
    <link rel="stylesheet" type="text/css" href="../layout.css"/>
    <script type="text/javascript" src = "ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src = "ckfinder/ckfinder.js"></script>
</head>

<body>
<table align="center" width="1000" border="0" cellspacing="0" cellpadding="0">
    <tr align="center">
        <td id="hangtieude">
            TRANG QUẢN TRỊ
        </td>
    </tr>
    <tr>
        <td align="center" id="hangmenu"><?php require "menutin.php"; ?></td>
    </tr>


</table>
<form method="POST" enctype="multipart/form-data">
    <table border="1px" align="center">
        <tr>
            <th colspan="5">UPDATE TIN</th>
        </tr>
        <!--Tieu De-->
        <tr>
            <td>TieuDe</td>
            <td><input style="width: 99%" type="text" name="txttieude" id="txttieude" value="<?php echo $row_tin['TieuDe'] ?>"/>
            </td>
        </tr>

        <!--Tom Tat-->
        <tr>
            <td>TomTat</td>
            <td><input style="width: 99%"  type="text" name="txtTomTat" id="txtTomTat" value="<?php echo $row_tin['TomTat'] ?>"/></td>
        </tr>
        <!--urlHinh-->
        <tr>
            <td>urlHinh</td>
            <td><input type="file" name="urlHinh" id="urlHinh" value="<?php echo $row_tin['urlHinh'] ?>"/><?php echo $loadfile?></td>
        </tr>
        <!--Ngay-->
<!--        <tr>-->
<!--            <td>Ngay</td>-->
<!--            <td><input type="text" name="txtNgay" id="txtNgay" value="--><?php //echo $row_tin['Ngay'] ?><!--"/></td>-->
<!--        </tr>-->

        <!--Content-->
        <tr>
            <td>Content</td>
            <td><label for="post_Content"></label>
                <textarea name = "post_Content" id = "post_Content" value="<?php echo $row_tin['Content'] ?>"></textarea>

                <script type="text/javascript">
                    CKEDITOR.replace( 'post_Content');
                </script></td>
        </tr>
        <!--So Lan xem-->
        <tr>
            <td>SoLanXem</td>
            <td><input type="text" name="txtSoLanXem" id="txtSoLanXem" value="<?php echo $row_tin['SoLanXem'] ?>"/></td>
        </tr>
        <!--STn Noi bat-->
        <tr>
            <td>TinNoiBat</td>
            <td>
                <input <?php if ($row_tin['TinNoiBat'] == 1) echo "checked= 'checked'" ?> type="radio" name="rdtinnoibat" id="rdtinnoibat" value="1"/>Nổi Bật
                <input <?php if ($row_tin['TinNoiBat'] == 0) echo "checked= 'checked'" ?> type="radio" name="rdtinnoibat" id="rdtinnoibat" value="0"/>Bình Thường

            </td>
        </tr>
        <!--An Hien-->
        <tr>
            <td>AnHien</td>
            <td>
                <input <?php if ($row_tin['AnHien'] == 1) echo "checked= 'checked'" ?> type="radio"
                                                                                           name="rdAnHien"
                                                                                           id="rdAnHien" value="1"/>Hiện

                <input <?php if ($row_tin['AnHien'] == 0) echo "checked= 'checked'" ?> type="radio"
                                                                                           name="rdAnHien"
                                                                                           id="rdAnHien" value="0"/>Ẩn
            </td>
        </tr>


    </table>
    <table align="center">
        <tr id="buttonthem">
            <td>
                <button id="btnsuatin" name="btnsuatin"> Update</button>
            </td>
        </tr>

    </table>

</form>
<h1 align="center" style="color: #990000"><?php echo $message ?></h1>


</body>
</html>

