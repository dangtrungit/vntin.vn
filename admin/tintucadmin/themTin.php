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

<?php
$message = "";
$loadfile = "";
if (isset($_POST["btnthemtin"])) {
    $TieuDe = $_POST['TieuDe'];

    $TieuDe_KhongDau = changeTitle($TieuDe);
    $Search_nonUnicode =  changeTitle1($TieuDe).'
    '.$TieuDe;
    $TomTat = $_POST['texName'];

    /*upload anh*/
//    if (isset($_POST['uploadclick'])) {
//        // Nếu người dùng có chọn file để upload
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
    }
    /*upload anh*/


    $Ngay = date("Y-m-d");
    $idUser = $_SESSION["idUser"];
//    settype($ThuTu, "int");
    $Content= $_POST['Content'];
    $idLT = $_POST['idLT'];
    settype($idLT , "int");

    $idTL= $_POST['idTL'];
    settype($idTL, "int");
    $SoLanXem = 0;
    $TinNoiBat= $_POST['rdhienantinnoibat'];
    settype($TinNoiBat , "int");

    $AnHien= $_POST['rdhienantin'];
    settype($AnHien , "int");



    if ($TieuDe != null && $TieuDe_KhongDau != null && $TomTat != null && $urlHinh != null && $Ngay != null && $Content!=null) {
        $qr = "INSERT INTO tin VALUES (null ,'$TieuDe','$TieuDe_KhongDau','$Search_nonUnicode','$TomTat','$urlHinh','$Ngay','$idUser','$Content','$idLT','$idTL','$SoLanXem','$TinNoiBat','$AnHien')";
        mysqli_query($conn, $qr);
        move_uploaded_file($_FILES['urlHinh']['tmp_name'], '../../upload/tintuc/' . $_FILES['urlHinh']['name']);
        $message = "Thêm thành công!";
//        header("location:listTin.php");
    } else {
        $message = "Không thêm được! Điền đầy đủ thông tin muốn thêm. $loadfile";
    }


//    }
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
    <script type="text/javascript" src = "../../jquery-slider-master/js/jquery-2.1.0.min.js"></script>
    <script type="text/javascript" src = "../../"></script>
    <script>
        $(document).ready(function () {
            $("#idTL").change(function () {
                var id = $(this).val();
                $.get("../../loaitin.php",{idTL:id},function (data) {
                    $("#idLT").html(data);
                })
            });

        });
    </script>

<!--    <script type="text/javascript">-->
<!--        function BrowseServer( startupPath, functionData ){-->
<!--            var finder = new CKFinder();-->
<!--            finder.basePath = 'ckfinder/'; //Đường path nơi đặt ckfinder-->
<!--            finder.startupPath = startupPath; //Đường path hiện sẵn cho user chọn file-->
<!--            finder.selectActionFunction = SetFileField; // hàm sẽ được gọi khi 1 file được chọn-->
<!--            finder.selectActionData = functionData; //id của text field cần hiện địa chỉ hình-->
<!--            //finder.selectThumbnailActionFunction = ShowThumbnails; //hàm sẽ được gọi khi 1 file thumnail được chọn-->
<!--            finder.popup(); // Bật cửa sổ CKFinder-->
<!--        } //BrowseServer-->
<!---->
<!--        function SetFileField( fileUrl, data ){-->
<!--            document.getElementById( data["selectActionData"] ).value = fileUrl;-->
<!--        }-->
<!--        function ShowThumbnails( fileUrl, data ){-->
<!--            var sFileName = this.getSelectedFile().name; // this = CKFinderAPI-->
<!--            document.getElementById( 'thumbnails' ).innerHTML +=-->
<!--                '<div class="thumb">' +-->
<!--                '<img src="' + fileUrl + '" />' +-->
<!--                '<div class="caption">' +-->
<!--                '<a href="' + data["fileUrl"] + '" target="_blank">' + sFileName + '</a> (' + data["fileSize"] + 'KB)' +-->
<!--                '</div>' +-->
<!--                '</div>';-->
<!--            document.getElementById( 'preview' ).style.display = "";-->
<!--            return false; // nếu là true thì ckfinder sẽ tự đóng lại khi 1 file thumnail được chọn-->
<!--        }-->
<!--    </script>-->


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
    <tr>
        <td>&nbsp;</td>
    </tr>

</table>
<form method="POST"  enctype="multipart/form-data" >
    <table border="1px" align="center">
        <tr>
            <th colspan="5">THÊM TIN</th>
        </tr>

        <tr>
            <td>TieuDe</td>
            <td><input type="text" id="TieuDe" name="TieuDe" /></td>
        </tr>
        <!--        <tr > <td>TenTL_KhongDau</td><td><input type="text" name="txttentl_khongdau" id="txttentl_khongdau"/></td></tr>-->
        <tr>
            <td>TomTat</td>
            <td><textarea id="texName" name="texName" rows="6" cols="50"></textarea></td>
        </tr>
        <tr>
            <td>urlHinh</td>
            <td>
                <label for="urlHinh"></label>
                <input  type="file" name="urlHinh" id="urlHinh"/>
                <?php
                echo $loadfile;
                ?>
<!--                <input onclick="BrowseServer('Images:/','urlHinh')" type="submit" name="uploadclick" id="uploadclick" value="Chon file"/>-->

<!--                <input onclick="BrowseServer('Images:/','urlHinh')" type="button" id="btnChonFile" name="btnChonFile"  value="Chọn file" />-->
            </td>
        </tr>
        <tr>
            <td>Content</td>
            <td><label for="Content"></label>
                <textarea name = "Content" id = "Content" rows="5" cols="45"></textarea>

                <script type="text/javascript">

                    //
                    CKEDITOR.replace( 'Content');
                </script>
            </td>
           </tr>

        <!--idTL-->
        <tr>
            <td>idTL</td>
            <td><select id="idTL" name="idTL">
                    <?php
                    $theloai = DanhSachTheLoai();
                    while ($row_theloai = mysqli_fetch_array($theloai)) {
                        ?>
                        <option value="<?php echo $row_theloai['idTL'] ?>"><?php echo $row_theloai['TenTL'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <!--idLT-->
        <tr>
            <td>idLT</td>
            <td>
                <label for="idLT"></label>
                <select id="idLT" name="idLT">
                    <?php
                    $loaitin = DanhSachLoaiTin();
                    while ($row_loaitin = mysqli_fetch_array($loaitin)) {
                        ?>
                        <option value="<?php echo $row_loaitin['idLT'] ?>"><?php echo $row_loaitin['Ten'] ?></option>
                        <?php
                    }
                    ?>
                </select>
            </td>
        </tr>

        <!--Tin Noi Bat-->
        <tr>
            <td>TinNoiBat</td>
            <td>
                <input type="radio" name="rdhienantinnoibat" id="rdhienantinnoibat" value="1" checked/> Nổi bật
                <input type="radio" name="rdhienantinnoibat" id="rdhienantinnoibat" value="0"/>Bình thường
            </td>
        </tr>
        <!--An Hien-->
        <tr>
            <td>AnHien</td>
            <td>
                <input type="radio" name="rdhienantin" id="rdhienantin" value="1" checked/> Hiện
                <input type="radio" name="rdhienantin" id="rdhienantin" value="0"/>Ẩn
            </td>
        </tr>
    </table>
    <table align="center">
        <tr id="buttonthem">
            <td>
                <button id="btnthemtin" name="btnthemtin">Thêm</button>
            </td>
        </tr>

    </table>

</form>
<?php
//if (isset($_POST['uploadclick'])) {
//    // Nếu người dùng có chọn file để upload
//    if (isset($_FILES['urlHinh'])) {
//        // Nếu file upload không bị lỗi,
//        // Tức là thuộc tính error > 0
//        if ($_FILES['urlHinh']['error'] > 0) {
//            echo 'File Upload Bị Lỗi';
//        } else {
//            // Upload file
//            move_uploaded_file($_FILES['urlHinh']['tmp_name'], '../../upload/tintuc/' . $_FILES['urlHinh']['name']);
//            echo 'File Uploaded';
//        }
//    } else {
//        echo 'Bạn chưa chọn file upload';
//    }
//}
?>
<h1 align="center" style="color: #990000"><?php echo $message ?></h1>


</body>
</html>

