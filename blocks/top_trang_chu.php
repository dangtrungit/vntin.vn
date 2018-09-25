<div id="slide-left">

    <!--tin lon nhat ben trai-->
            <?php
                $tinmoinhat_mottin =TinMoiNhat_MotTin();
                $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin)
            ?>

        	<div id="slideleft-main">

                <img src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh']?>" /><br />

                <h1 class="title"><a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_mottin['idTin']?>">

                        <?php echo $row_tinmoinhat_mottin['TieuDe']?></a> </h1>
                <div class="des" >

                    <?php echo $row_tinmoinhat_mottin['TomTat']?>
                </div>
            	<p class="tlq" ><a href="#">Hàng trăm chuyến bay bị hủy vì Trung Quốc tập trận</a></p>
                
        	</div>


            <div id="slideleft-scroll">
            	
              <div class="content_scoller width_common">
            <ul>
                <!--show bon tin-->
                <?php
                    $tinmoinhat_bontin =TinMoiNhat_BonTin();
                    while($row_tinmoinhat_bontin = mysqli_fetch_array($tinmoinhat_bontin) ){

                ?>
               <li>
                <div class="title_news">
               		<a href="index.php?p=chitiettin&idTin=<?php echo $row_tinmoinhat_bontin['idTin']?>" class="txt_link"><?php echo $row_tinmoinhat_bontin['TieuDe']?></a>
                </div>
              </li>

                <?php
                    }
                ?>

            </ul>
            </div>			
            
			<div id="gocnhin">
                <img alt="" src="http://khoapham.vn/images/logoKhoaPham.png" width="100%"></a>
                <div class="title_news"></div>
            </div>
                
            </div>
</div>


     