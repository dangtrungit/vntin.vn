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
    $qr = "SELECT * FROM `tin` ORDER BY SoLanXem DESC LIMIT 0,8";

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
    $qr = "SELECT Ten FROM loaitin WHERE idLT = $idLT";
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
    $qr = "SELECT * FROM theloai";

    return mysqli_query($conn, $qr);
}

/*lấy chi tiết loại tin qua idTL*/
function ChitietLoaiTin($idTL)
{
    require("dbCon.php");
    $qr = " SELECT * FROM `loaitin` WHERE idTL=$idTL";

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


function TimKiem($tukhoa)
{
    require("dbCon.php");
    mysqli_set_charset($conn, 'UTF8');
    $qr = "SELECT * FROM tin WHERE TieuDe REGEXP '$tukhoa' ORDER BY idTin DESC LIMIT 8";


    return mysqli_query( $conn, $qr );
}

?>