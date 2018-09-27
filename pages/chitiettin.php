<?php
if (isset($_GET["idTin"])) {
    $idTin = $_GET['idTin'];
    settype($idTin, "int");
} else {
    $idTin = 1;
}
$tinchitiet = ChiTietTin_TheoIdLoaiTin($idTin);
$row = mysqli_fetch_array($tinchitiet);
?>

<!--<h1 class="title">-->
<!--    --><?php
//    echo $row['TieuDe']
//    ?><!--</h1>-->
<!--<div class="des">-->
<!--    --><?php
//    echo $row['TomTat']
//    ?><!--</div>-->
<div class="chitiet">

    <!--noi dung-->
    <?php
    echo $row['Content']
    ?>
    <!--//noi dung-->
</div>
<div class="clear"></div>

<a class="btn_quantam" id="vne-like-anchor-1000000-3023795" href="#" total-like="21"></a>
<div class="number_count"><span id="like-total-1000000-3023795"><?php
        echo $row['SoLanXem']
        ?></span></div>
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
        <ul>

            <li>
                <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg"
                                 alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br/>
                <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
                <span class="no_wrap">
            </li>

            <li>
                <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg"
                                 alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br/>
                <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
                <span class="no_wrap">
            </li>

            <li>
                <a href="#"><img src="upload/tintuc/19-2436-1406522072_300x180.jpg"
                                 alt="Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17"></a> <br/>
                <a class="title" href="#">Người nhà nạn nhân MH370 an ủi thân nhân hành khách MH17</a>
                <span class="no_wrap">
            </li>


        </ul>
    </div>
    <div class="clear"></div>





