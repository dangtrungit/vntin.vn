<?php
/**
 * Created by PhpStorm.
 * User: D A N G T R U N G
 * Date: 05-10-2018
 * Time: 22:15
 */

session_start();
require "../lib/dbCon.php";
require "../lib/trangchu.php";
//require "../blocks/formLogin.php";
?>
<?php
$hoten = isset($_POST['hoten'])? $_POST['hoten'] : false; ;
$username = isset($_POST['username']) ? $_POST['username'] : false;;
$password = isset($_POST['password'])? $_POST['password'] : false;;
$diachi = isset($_POST['diachi'])? $_POST['diachi'] : false; ;
$dienthoai = isset($_POST['dienthoai']) ? $_POST['dienthoai'] : false;;
$email = isset($_POST['email']) ? $_POST['email'] : false;;
$Ngay = date("d-m-Y H:i:s");
$idGroup = "0";
$ngaysinh = isset($_POST['ngaysinh'])? $_POST['ngaysinh'] : false;
$gioitinh = isset($_POST['gioitinh']) ? $_POST['gioitinh'] : false;
settype($gioitinh,"int");
$showerror = isset($_POST['showok'])? $_POST['showok'] : false;;

$password = md5($password);

$sqluser = "SELECT * FROM users WHERE Username = '$username'";;
$sqlemail = "SELECT * FROM users WHERE Email = '$email'";;
$queryuser = mysqli_query($conn, $sqluser);
$querymail = mysqli_query($conn, $sqlemail);

if (mysqli_num_rows($queryuser) > 0) {
    echo $showerror = "Username đã tồn tại!";
}else if (mysqli_num_rows($querymail) > 0){
    echo $showerror = "Email đã tồn tại!";
}
else{
    $sql = "SELECT * FROM users ORDER BY idUser DESC LIMIT 0,1";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);

    $randomkey = md5($row['idUser']);

    $qr = "INSERT INTO users VALUES (null ,'$hoten','$username','$password','$diachi','$dienthoai','$email','$Ngay','$idGroup','$ngaysinh','$gioitinh','1','$randomkey')";
    mysqli_query($conn, $qr);
    echo $showerror = "Thành công!";

}





?>