<!-- box cat -->

<?php
    $idLT = 5;
?>
<div class="box-cat">
	<div class="cat">
    	<div class="main-cat">

        	<a href="index.php?p=tintrongloai&idLT=<?php echo $idLT?>"><?php echo TenLoaiTin($idLT)?></a>
        </div>
       
        <div class="clear"></div>
        <div class="cat-content">

        	<div class="col1">
                <?php
                $tinmoinhat_loaitin_mottin =TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                $row_tinmoinhat_loaitin_mottin = mysqli_fetch_array($tinmoinhat_loaitin_mottin);
                ?>
            	<div class="news">
                <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_mottin['idTin']?>"> <?php echo $row_tinmoinhat_loaitin_mottin['TieuDe']?></a></h3>
                  <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_loaitin_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_loaitin_mottin['TomTat']?> </div>
                  
                  
                    <div class="clear"></div>
                   
				</div>
            </div>

            <div class="col2">
                <?php
                $tinmoinhat_loaitin_nhieutin =TinMoiNhat_TheoLoaiTin_NhieuTin($idLT);

                while($row_tinmoinhat_loaitin_nhieutin = mysqli_fetch_array($tinmoinhat_loaitin_nhieutin) ) {
                    ?>
                    <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_nhieutin['idTin']?>"><?php echo $row_tinmoinhat_loaitin_nhieutin['TieuDe']?></a></h3>
                    <?php
                }
               ?>
           
            </div> 
           
        </div>
    
    </div>

</div>
<div class="clear"></div>
<!-- //box cat -->

<?php
$idLT = 3;
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">

            <a href="index.php?p=tintrongloai&idLT=<?php echo $idLT?>"><?php echo TenLoaiTin($idLT)?></a>
        </div>

        <div class="clear"></div>
        <div class="cat-content">

            <div class="col1">
                <?php
                $tinmoinhat_loaitin_mottin =TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                $row_tinmoinhat_loaitin_mottin = mysqli_fetch_array($tinmoinhat_loaitin_mottin);
                ?>
                <div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_mottin['idTin']?>"> <?php echo $row_tinmoinhat_loaitin_mottin['TieuDe']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_loaitin_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_loaitin_mottin['TomTat']?> </div>


                    <div class="clear"></div>

                </div>
            </div>

            <div class="col2">
                <?php
                $tinmoinhat_loaitin_nhieutin =TinMoiNhat_TheoLoaiTin_NhieuTin($idLT);

                while($row_tinmoinhat_loaitin_nhieutin = mysqli_fetch_array($tinmoinhat_loaitin_nhieutin) ) {
                    ?>
                    <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_nhieutin['idTin']?>"><?php echo $row_tinmoinhat_loaitin_nhieutin['TieuDe']?></a></h3>
                    <?php
                }
                ?>

            </div>

        </div>

    </div>

</div>
<div class="clear"></div>

<!-- //box cat -->

<?php
$idLT = 1;
?>
<div class="box-cat">
    <div class="cat">
        <div class="main-cat">

            <a href="index.php?p=tintrongloai&idLT=<?php echo $idLT?>"><?php echo TenLoaiTin($idLT)?></a>
        </div>

        <div class="clear"></div>
        <div class="cat-content">

            <div class="col1">
                <?php
                $tinmoinhat_loaitin_mottin =TinMoiNhat_TheoLoaiTin_MotTin($idLT);
                $row_tinmoinhat_loaitin_mottin = mysqli_fetch_array($tinmoinhat_loaitin_mottin);
                ?>
                <div class="news">
                    <h3 class="title" ><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_mottin['idTin']?>"> <?php echo $row_tinmoinhat_loaitin_mottin['TieuDe']?></a></h3>
                    <img class="images_news" src="upload/tintuc/<?php echo $row_tinmoinhat_loaitin_mottin['urlHinh']?>" align="left" />
                    <div class="des"><?php echo $row_tinmoinhat_loaitin_mottin['TomTat']?> </div>


                    <div class="clear"></div>

                </div>
            </div>

            <div class="col2">
                <?php
                $tinmoinhat_loaitin_nhieutin =TinMoiNhat_TheoLoaiTin_NhieuTin($idLT);

                while($row_tinmoinhat_loaitin_nhieutin = mysqli_fetch_array($tinmoinhat_loaitin_nhieutin) ) {
                    ?>
                    <h3 class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_loaitin_nhieutin['idTin']?>"><?php echo $row_tinmoinhat_loaitin_nhieutin['TieuDe']?></a></h3>
                    <?php
                }
                ?>

            </div>

        </div>

    </div>

</div>
<div class="clear"></div>

