<?php
if (isset($_GET["idTin"])) {
    $idTin = $_GET['idTin'];
    settype($idTin, "int");
} else {
    $idTin = '1';
}
CapNhat_SoLan_XemTin($idTin);
$tinchitiet = ChiTietTin_TheoIdLoaiTin($idTin);

$row = mysqli_fetch_array($tinchitiet);
$idLT = $row['idLT']
?>

<h1 class="title">
    <?php
    echo $row['TieuDe']
    ?></h1>
<div class="des">
    <?php
    echo $row['TomTat']
    ?></div>
<div class="chitiet" style=" font-size: 18px;letter-spacing: 0.5px; height: auto">

    <!--noi dung-->
    <?php
    echo $row['Content']
    ?>
    <!--//noi dung-->
</div>
<div class="clear"></div>

<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795"><?php echo $row['SoLanXem']
        ?></span></div>
<div align="right">
    <p>Ngày đăng tin: <strong><?php echo $row['Ngay'];?></strong> </p>
</div>

<!--face-->
<!--<div class="page-header">-->
<!--    <h1>Share Dialog</h1>-->
<!--</div>-->
<!---->
<!--<p>Click the button below to trigger a Share Dialog</p>-->
<!---->
<!--<div id="shareBtn" class="btn btn-success clearfix">Share</div>-->
<!---->
<!--<p style="margin-top: 50px">-->
<!--<hr />-->
<!--<a class="btn btn-small"  href="https://developers.facebook.com/docs/sharing/reference/share-dialog">Share Dialog Documentation</a>-->
<!--</p>-->
<!---->
<!--<script>-->
<!--    document.getElementById('shareBtn').onclick = function() {-->
<!--        FB.ui({-->
<!--            method: 'share',-->
<!--            display: 'popup',-->
<!--            href: 'https://developers.facebook.com/docs/',-->
<!--        }, function(response){});-->
<!--    }-->
<!--</script>-->

<!--    <div class="fb-share-button" data-href="http://localhost:8888/vntin.com/" data-layout="button_count"-->
<!--         data-size="large" data-mobile-iframe="true">-->
<!--        <a target="_blank"-->
<!--           href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Flocalhost%3A8888%2Fvntin.com%2F&amp;src=sdkpreparse"-->
<!--           class="fb-xfbml-parse-ignore">Chia sẻ</a>-->
<!--    </div>-->
    <!--twister-->
    <div class="left"></div>
    <!--google-->
    <div class="left">
        <div id="___plusone_0"
             style="text-indent: 0px; margin: 0px; padding: 0px; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 90px; height: 20px; background: transparent;"></div>
    </div>

    <div class="clear"></div>
    <div id="tincungloai">
        <div class="clear"></div>
        <?php
            $tinngaunhien = DanhSachTin_NgauNhien_CungLoai($idTin,$idLT);
            while ($row_ngaunhien = mysqli_fetch_array($tinngaunhien)) {
                ?>
                <ul>
                    <li>
                        <a href="chitiet/<?php echo $row_ngaunhien['idTin']?>-<?php echo $row_ngaunhien['TieuDe_KhongDau'] ?>.aspx"><img src="upload/tintuc/<?php echo $row_ngaunhien['urlHinh']?>"
                                         alt="<?php echo $row_ngaunhien['TieuDe']?>"></a> <br/>
                        <a class="title" href="chitiet/<?php echo $row_ngaunhien['idTin']?>-<?php echo $row_ngaunhien['TieuDe_KhongDau'] ?>.aspx"><?php echo $row_ngaunhien['TieuDe']?></a>
                        <span class="no_wrap">
                    </li>

                </ul>
                <?php
            }
        ?>
    </div>
    <div class="clear"></div>





