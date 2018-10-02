<?php
require 'lib/dbCon.php';
require 'lib/trangchu.php';
?>
<?php
    $idTL=$_GET['idTL']; settype($idTL,"int");
    $loaitin =ChitietLoaiTin($idTL);
    while ($row = mysqli_fetch_array($loaitin)){
?>

        <option value="<?php echo $row['idLT']?>"><?php
            echo $row['Ten'];
            ?>

</option>
<?php
}

?>