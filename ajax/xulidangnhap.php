<?php
session_start();
require "../lib/dbCon.php";
require "../lib/trangchu.php";
//require "../blocks/formLogin.php";
?>
<?php

$username = isset($_POST['username']) ? $_POST['username'] : false;
$password = isset($_POST['password']) ? $_POST['password'] : false;
//$showerror = $_POST['showerror'];

$password = md5($password);
if ($username && $password) {
//        $username = $txtUs;
//            $password = $txtPw;

    $sql = "SELECT * FROM users WHERE Username = '$username' AND Password = '$password'";
    $query = mysqli_query($conn, $sql);
    /*tai khoan*/

    $sqluser = "SELECT * FROM users WHERE Username = '$username'";
    $queryuser = mysqli_query($conn, $sqluser);

//
//    làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
//    mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
            $username = strip_tags($username);
            $username = addslashes($username);
            $password = strip_tags($password);
            $password = addslashes($password);


    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        /*luu dang nhap vao SESSION*/
        $_SESSION['idUser'] = $row['idUser'];
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['HoTen'] = $row['HoTen'];
        $_SESSION['idGroup'] = $row['idGroup'];

        echo $showerror = "Thành công!";
        require "../blocks/formLoginSuccess.php";


    } else {

//                 $showerror="Thanh cong!";
//
        if (mysqli_num_rows($queryuser) < 1) {
            echo $showerror = "Tài khoản chưa đăng kí!";
//                    $error['username'] = 'Tài khoản chưa đăng kí!';
        } else {
            echo $showerror = "Mật khẩu nhập không đúng!";
//                    $error['pass'] = 'Mật khẩu nhập không đúng!';

        }

    }
}




?>