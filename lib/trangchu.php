<?php
    /**
     * Created by PhpStorm.
     * User: D A N G T R U N G
     * Date: 25-09-2018
     * Time: 08:40
     */

    function TinMoiNhat_MotTin(){
        require ("dbCon.php");
//        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
        $qr= "SELECT * FROM tin ORDER  BY idTin DESC 
                LIMIT 0,1";

        return mysqli_query($conn, $qr);

    }
    function TinMoiNhat_BonTin(){
        require ("dbCon.php");
    //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
        $qr= "SELECT * FROM tin ORDER  BY idTin DESC 
                    LIMIT 1,10";

        return mysqli_query($conn, $qr);

}

    function TinXemNhieuNhat(){
        require ("dbCon.php");
        //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
        $qr= "SELECT * FROM `tin` ORDER BY SoLanXem DESC LIMIT 0,6";

        return mysqli_query($conn, $qr);

    }

    function TinMoiNhat_TheoLoaiTin_MotTin($idLT){
        require ("dbCon.php");
        //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
        $qr= "SELECT * FROM tin WHERE idLT = $idLT ORDER BY idTin DESC LIMIT 0,1";

        return mysqli_query($conn, $qr);

    }

    function TinMoiNhat_TheoLoaiTin_NhieuTin($idLT){
        require ("dbCon.php");
        //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
        $qr= "SELECT * FROM tin WHERE idLT = 5 ORDER BY idTin DESC LIMIT 1,6";
        return mysqli_query($conn, $qr);
    }


    function TenLoaiTin($idLT){
        require ("dbCon.php");
        //        $con = mysqli_connect("localhost","root","","quanlidatabasehotnew");
            $qr= "SELECT Ten FROM loaitin WHERE idLT = $idLT";
            $loaitin = mysqli_query($conn, $qr);
            $row = mysqli_fetch_array($loaitin);
            return $row['Ten'];
    }

    function QuangCao($vitri){
        require ("dbCon.php");
        $qr= "SELECT * FROM quangcao WHERE vitri = $vitri";

        return mysqli_query($conn, $qr);
    }

    function DanhSachTheLoai(){
        require ("dbCon.php");
        $qr= "SELECT * FROM theloai";

        return mysqli_query($conn, $qr);
    }
    function ChitietLoaiTin($idTL){
        require ("dbCon.php");
        $qr= " SELECT * FROM `loaitin` WHERE idTL=$idTL";

        return mysqli_query($conn, $qr);
    }

    ?>