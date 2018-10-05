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
//$kq = null;
//if (isset($_POST["btnLogin"])) {
//    if ($_POST['txtUs'] == NULL || $_POST['txtPw'] == NULL) {
//        $kq = "Username hoặc Password không được để trống !";
//    } else {
//
//        $username = $_POST["txtUs"];
//        $password = $_POST["txtPw"];
//        $password = md5($password);
//        $sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
//        /*tai khoan*/
//        $sqluser = "SELECT * FROM users WHERE Username = '$username'";
//
//        $query = mysqli_query($conn, $sql);
//        /*qr user*/
//        $queryuser = mysqli_query($conn, $sqluser);
//
//
////    làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
////    mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
//        $username = strip_tags($username);
//        $username = addslashes($username);
//        $password = strip_tags($password);
//        $password = addslashes($password);
//
//
//        if (mysqli_num_rows($query) > 0) {
//            $row = mysqli_fetch_array($query);
//            /*luu dang nhap vao SESSION*/
//            $_SESSION['idUser'] = $row['idUser'];
//            $_SESSION['Username'] = $row['Username'];
//            $_SESSION['HoTen'] = $row['HoTen'];
//            $_SESSION['idGroup'] = $row['idGroup'];
////            $kq="Tài khoản hoặc mật khẩu không đúng!";
//
//        } else {
//
//            if (mysqli_num_rows($queryuser) < 1) {
//                $kq = "Tài khoản chưa đăng kí!";
//            } else {
//                $kq = "Mật khẩu nhập không đúng!";
//            }
//
//        }
//    }
//
//}

?>
<?php
if (isset($_POST["btnLogout"])) {
    unset($_SESSION['idUser']);
    unset($_SESSION['Username']);
    unset($_SESSION['HoTen']);
    unset($_SESSION['idGroup']);
}
?>

<?php

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <base href="http://localhost:8888/vntin.com/"/>
<!--        <base href="http://everyday.byethost5.com/" />-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>VNTin</title>
    <link rel="stylesheet" type="text/css" href="css/layout.css"/>
    <link rel="shortcut icon" type="image/png" href="images/mylogo.png"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="jquery-slider-master/js/jquery-3.3.1.min.js"></script>

    <script>

        //$(document).ready(function () {
        //    $("#dangnhap").click(function () {
        //
        //        <?php
        //        if (!isset($_SESSION["idUser"])){
        //
        //        //
        //        ?>
        //        $("#contentform").load("blocks/formLogin.php")
        //
        //        <?php
        //        }
        //        ?>
        //
        //
        //    });
        //    $("#dangky").click(function () {
        //        <?php
        //        if (!isset($_SESSION["idUser"])){
        //
        //        ?>
        //        $("#contentform").load("blocks/formSignin.php")
        //        <?php
        //        }
        //        //                ?>
        //
        //    });
        //
        //
        //});

        // $("#idTL").change(function () {
        //     var id = $(this).val();
        //     $.get("../../ajax/loaitin.php",{idTL:id},function (data) {
        //         $("#idLT").html(data);
        //     })
        // });

        //$('#btnLogout').submit(function () {
        //    <?php
        //    if (isset($_POST["btnLogout"])) {
        //        unset($_SESSION['idUser']);
        //        unset($_SESSION['Username']);
        //        unset($_SESSION['HoTen']);
        //        unset($_SESSION['idGroup']);
        //    }
        //    ?>
        //}
    </script>

</head>

<body>
<div>
    <header>
        <nav>
            <div id="header-vp">
                <div id="logo">
                    <img src="images/mylogo.png"/>
                </div>
                <div id="childmenu">
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
    <div style="border: 1px solid #069;"></div>
    <div class="clear">

    </div>

    <div id="slide-vp">
        <!--blocks/top_trang_chu.php-->
        <div>
            <?php
            require "blocks/top_trang_chu.php";
            ?>
        </div>


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
            <div id="menuform">
                <ul>

                    <li>
                        <a id="dangky"></a>
                    </li>

                </ul>
            </div>

            <div id="contentform">
                <?php
                if (!isset($_SESSION["idUser"])) {
//                    if (isset($_POST['btnSignin'])){
//                        require "blocks/formSignin.php";
//                    }else{


                    require "blocks/formSignin.php";
//                    require "blocks/formLogin.php";
//                    }
                } else {
//                    require "blocks/formLoginSuccess.php";
                }
                ?>
                <div style="color: #007c7a ;height: 30%;text-align: center" id="showok"></div>

                <?php
                if (!isset($_SESSION["idUser"])) {
//                    if (isset($_POST['btnSignin'])){
//                        require "blocks/formSignin.php";
//                    }else{



                    require "blocks/formLogin.php";
//                    }
                } else {
                    require "blocks/formLoginSuccess.php";
                }
                ?>
                <div style="color: #007c7a ;height: 30%;text-align: center" id="showerror"></div>


                <!--Xu ly dang nhap-->

            </div>
            <script>

                $('#btnSignin').click(function () {

                    // $('#showok').html('');

                    var showok = $('#showok').val();
                    var hoten = $('#ten').val();
                    var username = $('#username').val();
                    var password = $('#password').val();

                    var diachi = $('#diachi').val();
                    var dienthoai = $('#dienthoai').val();
                    var email = $('#email').val();

                    var ngaysinh = $('#ngaysinh').val();
                    var gioitinh = $('#rdgioitinh').val();


                    // Kiểm tra dữ liệu có null hay không
                    if ($.trim(hoten) == '') {
                        alert('Bạn chưa nhập tên');
                        return false;
                    }
                    if ($.trim(username) == '') {
                        alert('Bạn chưa nhập tên đăng nhập');
                        return false;
                    }

                    if ($.trim(password) == '') {
                        alert('Bạn chưa nhập pass');
                        return false;
                    }
                    if ($.trim(diachi) == '') {
                        alert('Bạn chưa nhập diachi');
                        return false;
                    }
                    if ($.trim(email) == '') {
                        alert('Bạn chưa nhập email');
                        return false;
                    }
                    if ($.trim(gioitinh) == '') {
                        alert('Bạn chưa nhập giới tính');
                        return false;
                    }
                    $.post("ajax/xulydangky.php", {
                            showok: showok,
                            hoten: hoten,
                            username: username,
                            password: password,
                            diachi: diachi,

                            dienthoai: dienthoai,
                            email: email,
                            ngaysinh: ngaysinh,
                            gioitinh: gioitinh,
                        },
                        function (result) {
                            $("#showok").html(result);
                            // $("#contentform").html(result);

                            // if (!result.hasOwnProperty('error') || result['error'] != 'succes') {
                            //     alert('Có vẻ như bạn đang hack website của tôi');
                            //     return false;
                            // }
                            // var html = '';
                            // // // // Lấy thông tin lỗi username
                            // if ($.trim(result.showerror) != '') {
                            //     html += result.showerror + '<br/>';
                            // }
                            //
                            // // Lấy thông tin lỗi pass
                            // if ($.trim(result.pass) != '') {
                            //     html += result.pass;
                            // }
                            // if (html != '') {
                            //     $('#showerror').append(html);
                            // }
                            // else {
                            //     // Thành công
                            //     $('#showerror').append('Thêm thành công');
                            // }
                            // return false;

                        })
                    return false;

                });


            </script>
            <script>
                $('#btnLogin').click(function () {

                    $('#showerror').html('');

                    var showerror = $('#showerror').val();
                    var username = $('#txtUs').val();
                    var password = $('#txtPw').val();

                    // Kiểm tra dữ liệu có null hay không
                    if ($.trim(username) == '') {
                        alert('Bạn chưa nhập tên đăng nhập');
                        return false;
                    }

                    if ($.trim(password) == '') {
                        alert('Bạn chưa nhập pass');
                        return false;
                    }
                    $.post("ajax/xulidangnhap.php", {
                            username: username,
                            password: password,
                            showerror: showerror
                        },
                        function (result) {
                            $("#showerror").html(result);
                            // $("#contentform").html(result);

                            // if (!result.hasOwnProperty('error') || result['error'] != 'succes') {
                            //     alert('Có vẻ như bạn đang hack website của tôi');
                            //     return false;
                            // }
                            // var html = '';
                            // // // // Lấy thông tin lỗi username
                            // if ($.trim(result.showerror) != '') {
                            //     html += result.showerror + '<br/>';
                            // }
                            //
                            // // Lấy thông tin lỗi pass
                            // if ($.trim(result.pass) != '') {
                            //     html += result.pass;
                            // }
                            // if (html != '') {
                            //     $('#showerror').append(html);
                            // }
                            // else {
                            //     // Thành công
                            //     $('#showerror').append('Thêm thành công');
                            // }
                            // return false;

                        })
                    return false;

                });
            </script>
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
            <div class="bot1"><img src="images/mylogo.png"/></div>
            <div class="bot2">
                <p>© <span>Copyright 2018 Everyday.byehost5.com,</span> All rights reserved</p>
                <p>® Everyday giữ bản quyền nội dung trên website này.</p>
            </div>
            <div class="bot3">

                <p><a href="tuyendung/chitiettuyendung.aspx">Everyday tuyển dụng</a> <a
                            href="quangcao/lienhequangcao.aspx">Liên hệ quảng cáo</a> / <a href="/contactus">Liên
                        hệ Tòa soạn</a></p>
                <p><a href="toasoan/lienhetoasoan.aspx" target="_blank"
                      style="color: #686E7A;font: 11px arial;padding: 0 4px;text-decoration: none;">Thông tin Tòa
                        soạn: </a><span>0978253279</span> (HN) - <span>0978225676</span> (Hà Nội)</p>

            </div>
        </div>
    </div>


</div>

</body>
</html>
