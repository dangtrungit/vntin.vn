<?php


if ( isset($_GET['idLT'])){
    $idLT =$_GET['idLT'];
    settype($idLT,"int");
        $tinxemnhieunhat =TinXemNhieuNhat_TheoLoaiTin($idLT);

} else{
    $tinxemnhieunhat =TinXemNhieuNhat();
}
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">
            <a href="#">Tin xem nhiều</a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">

            <?php

//            $tinxemnhieunhat =TinXemNhieuNhat();
            while($row_xemnhieunhat = mysqli_fetch_array($tinxemnhieunhat) ) {

                ?>

                <div class="col1">
                    <div class="news">
                        <img class="images_news"
                             src="upload/tintuc/<?php echo $row_xemnhieunhat['urlHinh']?>"/>
                        <h3 class="title"><a href="chitiet/<?php echo $row_xemnhieunhat['idTin']?>-<?php echo $row_xemnhieunhat['TieuDe_KhongDau'] ?>.aspx"><?php echo $row_xemnhieunhat['TieuDe']?></a><span class="hit" ><?php echo $row_xemnhieunhat['SoLanXem']?></span></h3>
                        <div class="clear"></div>
                    </div>
                </div>
                <?php
            }
            ?>
            
        </div>
    </div>
</div>
<div class="clear"></div>

