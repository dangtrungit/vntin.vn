<?php
/*Quan li the loai*/
function DanhSachTheLoai(){
    require "dbCon.php";

    $qr = "SELECT * FROM theloai ORDER BY  idTL DESC";
    return mysqli_query($conn,$qr);
}
function DanhSachTheLoaiChiTiet($idTL){
    require "dbCon.php";
//    $idTL =$_GET['idTL'];

    $qr = "SELECT * FROM theloai WHERE idTL = '$idTL'";
    $row = mysqli_query($conn,$qr);
    return mysqli_fetch_array($row);
}
/*Quan lí Loại TIn*/

function DanhSachLoaiTin(){
    require "dbCon.php";

    $qr = "SELECT * FROM theloai,loaitin WHERE theloai.idTL = loaitin.idTL ORDER BY  idLT DESC";
    return mysqli_query($conn,$qr);
}

function LoaiTinChiTiet($idLT){
    require "dbCon.php";

    $qr = "SELECT * FROM loaitin WHERE idLT = '$idLT'";
    $row = mysqli_query($conn,$qr);
    return mysqli_fetch_array($row);
}
/*Quan lí  TIn*/
function DanhSachTin(){
    require "dbCon.php";

    $qr = "SELECT tin.*,TenTL,Ten FROM tin,theloai,loaitin WHERE tin.idTL = theloai.idTL AND tin.idLT = loaitin.idLT ORDER BY  idTin DESC LIMIT 20 ";
    return mysqli_query($conn,$qr);
}
function DanhSachTinChiTiet($idTin){
    require "dbCon.php";
    $qr = "SELECT * FROM tin WHERE idTin='$idTin'";
    $row= mysqli_query($conn,$qr);
    return mysqli_fetch_array($row);
}
/*Tìm kiếm */

function TimKiem($tukhoa)
{

    require("dbCon.php");

    $qr1 = "SELECT * FROM tin WHERE Search_nonUnicode REGEXP '$tukhoa' ORDER BY idTin DESC LIMIT 8";
    return mysqli_query($conn, $qr1);

}
function TimKiemTheoId($idTin)
{
    require("dbCon.php");

    $qr1 = "SELECT * FROM tin WHERE idTin REGEXP '$idTin' ORDER BY idTin DESC LIMIT 10";
    return mysqli_query($conn, $qr1);

}
function TimKiemTheoTieuDe($Tieude)
{
    require("dbCon.php");

    $qr1 = "SELECT * FROM tin WHERE TieuDe REGEXP '$Tieude' ORDER BY idTin DESC LIMIT 10";
    return mysqli_query($conn, $qr1);

}
/*chuyen đổi dấu*/
function stripUnicode($str){
    if(!$str) return false;
    $unicode = array(
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

        'd'=>'đ',

        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

        'i'=>'í|ì|ỉ|ĩ|ị',

        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

        'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

        'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

        'D'=>'Đ',

        'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

        'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

        'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

        'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

        'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',
    );
    foreach($unicode as $nonUnicode=>$codau)
    {
        $arr = explode("|",$codau);
        $str = str_replace($arr,$nonUnicode,$str);
    }

    return $str;
};

function changeTitle($str){
    $str = trim($str);
    if ($str=="") return "";
    $str = str_replace('"','',$str);
    $str = str_replace("'",'',$str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');

    $str=str_replace(' ','-',$str);
    $str=str_replace('/','-',$str);
    $str=str_replace(':','-',$str);
    $str=str_replace('[','-',$str);
    $str=str_replace(']','-',$str);
    $str=str_replace(',','-',$str);
    $str=str_replace('?','-',$str);
    return $str;
};
function changeTitle1($str){
    $str = trim($str);
    if ($str=="") return "";
    $str = str_replace('"','',$str);
    $str = str_replace("'",'',$str);
    $str = stripUnicode($str);
    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');

//    $str=str_replace('-',' ',$str);
    return $str;
};




?>

