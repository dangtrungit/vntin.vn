<?php
session_start();
require "lib/dbCon.php";
require "lib/trangchu.php";
if (isset($_GET["p"])) {
    $p = $_GET["p"];

} else {
    $p = "";
}
?>
<!--Kiem tra login-->
<?php
if (isset($_POST["btnLogin"])) {
    $username = $_POST["txtUs"];
    $password = $_POST["txtPw"];
    $password = md5($password);
    //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
    //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
    $username = strip_tags($username);
    $username = addslashes($username);
    $password = strip_tags($password);
    $password = addslashes($password);

//    if ($username == "" || $password=""){
//
//        echo "Username hoặc Password không được để trống!";
//    }else {
    $sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
    $query = mysqli_query($conn, $sql);

    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_array($query);
        /*luu dang nhap vao SESSION*/
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['HoTen'] = $row['HoTen'];
        $_SESSION['idGroup'] = $row['idGroup'];

    }else{

    }


}
?>

<?php
if (isset($_POST["btnLogout"])) {
    unset($_SESSION['idUser']);
    unset($_SESSION['Username']);
    unset($_SESSION['HoTen']);
    unset($_SESSION['idGroup']);

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>VNTin</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css"/>
</head>

<body>
<div>
    <header>
        <nav>
            <div id="header-vp">
                <div id="logo"><img src="images/logonew.gif"/></div>
                <div style="margin-left: 180px ; align-content: space-around">
                    <!--block/menu.php-->
                    <?php
                    require "blocks/menu.php";
                    ?>
                </div>
            </div>
        </nav>

    </header>
</div>

<div id="wrap-vp">
    <div id="midheader-vp">
        <div id="left">
            <ul class="list_arrow_breakumb">
                <li class="start">
                    <a href="./">Trang nhất</a>
                    <span class="arrow_breakumb">&nbsp;</span></li>
            </ul>

        </div>

        <div id="right">
            <!--blocks/thongtinchung.php-->
            <?php
            require "blocks/thongtinchung.php";
            ?>
        </div>
    </div>
    <div class="clear">

    </div>

    <div id="slide-vp">
        <!--blocks/top_trang_chu.php-->
        <?php
        require "blocks/top_trang_chu.php";
        ?>

        <div id="slide-right">
            <!--blocks/quangcao_top_phai.php-->
            <?php
            require "blocks/quangcao_top_phai.php";
            ?>
        </div>
    </div>

    <div id="content-vp">
        <div id="content-left">
            <!--blocks/cot_trai.php-->
            <?php
            require "blocks/cot_trai.php";
            ?>
        </div>
        <div id="content-main">

            <!--PAGES-->
            <?php
            switch ($p) {
                case "tintrongloai":
                    require "pages/tintrongloai.php";
                    break;
                case "chitiettin":
                    require "pages/chitiettin.php";
                    break;
                case "timkiem":
                    require "pages/timkiem.php";
                    break;
                default :
                    require "pages/trangchu.php";
                    break;
            }
            ?>

        </div>
        <div id="content-right">
            <!--blocks/cot_phai.php-->
            <?php
            if (!isset($_SESSION["idUser"])) {
                require "blocks/formLogin.php";


            } else {
                require "blocks/formLoginSuccess.php";
            }

            ?>
            <?php
            require "blocks/cot_phai.php";
            ?>
        </div>

        <div class="clear"></div>

    </div>
    <!--blocks/thongtindoanhnghiep.php-->
    <div class="clear"></div>
    <div class="clear"></div>
    <div id="thongtin">
        <?php
        require "blocks/thongtindoanhnghiep.php";
        ?>
    </div>
    <div class="clear"></div>

    <!--blocks/footer.php-->
    <div id="footer">
        <?php
        require "blocks/footer.php";
        ?>
        <div class="ft-bot">
            <div class="bot1"><img src="images/logonew.gif"/></div>
            <div class="bot2">
                <p>© <span>Copyright 2018 vnTin.com,</span> All rights reserved</p>
                <p>® vnTin giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">

                <p><a href="http://fptad.net/qc/V/vnexpress/2014/07/">vnTin tuyển dụng</a> <a
                            href="http://polyad.net/Polyad/Lien-he.htm">Liên hệ quảng cáo</a> / <a href="/contactus">Liên
                        hệ Tòa soạn</a></p>
                <p><a href="http://vnexpress.net/contact.htm" target="_blank"
                      style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa
                        soạn: </a><span>0978253279</span> (HN) - <span>0978225676</span> (Hà Nội)</p>

            </div>
        </div>
    </div>


</div>

</body>
</html>
