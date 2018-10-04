<?php
/**
 * Created by PhpStorm.
 * User: D A N G T R U N G
 * Date: 25-09-2018
 * Time: 08:40
 */

function TinMoiNhat_MotTin()
{
    require("dbCon.php");
//        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin ORDER  BY idTin DESC 
                LIMIT 0,4";

    return mysqli_query($conn, $qr);

}

function TinMoiNhat_BonTin()
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin ORDER  BY idTin DESC 
                    LIMIT 1,10";

    return mysqli_query($conn, $qr);

}

function TinXemNhieuNhat()
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM `tin`  ORDER BY SoLanXem DESC LIMIT 0,6";

    return mysqli_query($conn, $qr);

}
function TinXemNhieuNhat_TheoLoaiTin($idLT)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM `tin` WHERE idLT='$idLT' ORDER BY SoLanXem DESC LIMIT 0,8";

    return mysqli_query($conn, $qr);

}

function TinMoiNhat_TheoLoaiTin_MotTin($idLT)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 0,1";

    return mysqli_query($conn, $qr);

}

function TinMoiNhat_TheoTheLoai_MotTin($idTL)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LIMIT 0,1";

    return mysqli_query($conn, $qr);

}

function TinMoiNhat_TheoTheLoai_MotTin_Right($idTL)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin WHERE idTL = $idTL ORDER BY idTin DESC LIMIT 1,2";

    return mysqli_query($conn, $qr);

}

function TinMoiNhat_TheoLoaiTin_NhieuTin($idLT)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 1,5";
    return mysqli_query($conn, $qr);
}


function TenLoaiTin($idLT)
{
    require("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
    $qr = "SELECT Ten FROM loaitin WHERE idLT = '$idLT'";
    $loaitin = mysqli_query($conn, $qr);
    $row = mysqli_fetch_array($loaitin);
    return $row['Ten'];
}

function QuangCao($vitri)
{
    require("dbCon.php");
    $qr = "SELECT * FROM quangcao WHERE vitri = $vitri";

    return mysqli_query($conn, $qr);
}

/*lấy tất cả danh sách thể loại*/
function DanhSachTheLoai()
{
    require("dbCon.php");
    $qr = "SELECT * FROM theloai WHERE AnHien =1 ORDER BY ThuTu ASC ";

    return mysqli_query($conn, $qr);
}

/*lấy chi tiết loại tin qua idTL*/
function ChitietLoaiTin($idTL)
{
    require("dbCon.php");
    $qr = " SELECT * FROM `loaitin` WHERE idTL='$idTL' ";

    return mysqli_query($conn, $qr);
}

/*Lấy danh sách tin theo loại tin by idLT*/
function DanhSachTin_TheoLoaiTin($idLT)
{
    require("dbCon.php");
    $qr = "SELECT * FROM `tin` WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 0,10";

    return mysqli_query($conn, $qr);
}

function DanhSachTin_TheoLoaiTin_PhanTrang($idLT)
{
    require("dbCon.php");
    $qr = "SELECT * FROM `tin` WHERE idLT=$idLT ORDER BY idTin DESC LIMIT 0,10";

    return mysqli_query($conn, $qr);
}

/*get Title a>>b>>c*/
function breadCrum($idLT)
{
    require("dbCon.php");
    $qr = "SELECT TenTL,Ten FROM theloai , loaitin WHERE theloai.idTL=loaitin.idTL AND idLT=$idLT";

    return mysqli_query($conn, $qr);
}

/*lấy chi tiết tin theo idLT*/

function ChiTietTin_TheoIdLoaiTin($idTin)
{
    require("dbCon.php");
    $qr = "SELECT * FROM tin WHERE idTin=$idTin";

    return mysqli_query($conn, $qr);
}


function DanhSachTin_NgauNhien_CungLoai($idTin, $idLT)
{
    require("dbCon.php");
    $qr = "SELECT * FROM tin WHERE idTin<>$idTin AND idLT = $idLT ORDER BY RAND() LIMIT 6";

    return mysqli_query($conn, $qr);
}


function CapNhat_SoLan_XemTin($idTin)
{
    require("dbCon.php");
    $qr = "UPDATE tin SET SoLanXem = SoLanXem +1 WHERE  idTin =$idTin";

    mysqli_query($conn, $qr);
}

function ham_loc_dau($st)
{
    $codau = array("à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă",
        "ằ", "ắ", "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề"
    , "ế", "ệ", "ể", "ễ",
        "ì", "í", "ị", "ỉ", "ĩ",
        "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ"
    , "ờ", "ớ", "ợ", "ở", "ỡ",
        "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ứ", "ự", "ử", "ữ",
        "ỳ", "ý", "ỵ", "ỷ", "ỹ",
        "đ",
        "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă"
    , "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
        "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
        "Ì", "Í", "Ị", "Ỉ", "Ĩ",
        "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ"
    , "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
        "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
        "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
        "Đ", " ");

    $khongdau = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a"
    , "a", "a", "a", "a", "a", "a",
        "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
        "i", "i", "i", "i", "i",
        "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o"
    , "o", "o", "o", "o", "o",
        "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
        "y", "y", "y", "y", "y",
        "d",
        "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"
    , "A", "A", "A", "A", "A",
        "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
        "I", "I", "I", "I", "I",
        "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"
    , "O", "O", "O", "O", "O",
        "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
        "Y", "Y", "Y", "Y", "Y",
        "D", "_");
    return str_replace($codau, $khongdau, $st);
}

function TimKiem($tukhoa)
{

    require("dbCon.php");

    $qr1 = "SELECT * FROM tin WHERE Search_nonUnicode REGEXP '$tukhoa' ORDER BY idTin DESC LIMIT 8";
    return mysqli_query($conn, $qr1);


}
//function TimKiemTheoId($idTin)
//{
//
//    require("dbCon.php");
//
//    $qr1 = "SELECT * FROM tin WHERE idTin REGEXP '$idTin' ORDER BY idTin DESC LIMIT 10";
//    return mysqli_query($conn, $qr1);
//
//
//}


?>