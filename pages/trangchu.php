
<?php
$theloai = DanhSachTheLoai();
while ($row = mysqli_fetch_array($theloai)) {
    $idTL = $row['idTL']

    ?>

    <div class="box-cat">
        <div class="cat">
            <div class="main-cat">
                <a href="#"><?php
                    echo $row['TenTL']
                    ?></a>
            </div>

            <div class="child-cat">
                <?php
                $loaitin = ChitietLoaiTin($idTL);
                while ($rowloaitin = mysqli_fetch_array($loaitin)) {
                    $idLT = $rowloaitin['idLT']
                    ?>
                    <a href="index.php?p=tintrongloai&idLT=<?php
                    echo $rowloaitin['idLT']
                    ?>"><?php
                        echo $rowloaitin['Ten']
                        ?></a>
                    <?php
                }
                ?>
            </div>
            <?php
            $mottinmoi_theotheloai = TinMoiNhat_TheoTheLoai_MotTin($idTL);
            $row_mottinmoi_theotheloai = mysqli_fetch_array($mottinmoi_theotheloai);
            //            echo $row_mottinmoi_theotheloai['TieuDe'];
            //            echo $idTL;

            ?>

            <div class="clear"></div>
            <div class="cat-content">
                <div class="col1">
                    <div class="news">
                        <h3 class="title"><a href="index.php?p=chitiettin&=<?php echo md5($row_mottinmoi_theotheloai['idTin']) ?>"><?php echo $row_mottinmoi_theotheloai['TieuDe']; ?></a></h3>
                        <img class="images_news"
                             src="upload/tintuc/<?php echo $row_mottinmoi_theotheloai['urlHinh']; ?>" align="left"/>
                        <div class="des"><?php echo $row_mottinmoi_theotheloai['TomTat']; ?>
                        </div>
                        <div class="clear"></div>

                    </div>
                </div>
                <?php
                $mottinmoi_theotheloai_right = TinMoiNhat_TheoTheLoai_MotTin_Right($idTL);
                while ($row_mottinmoi_theotheloai_right = mysqli_fetch_array($mottinmoi_theotheloai_right)) {

                    ?>
                    <div class="col2">
                        <p class="tlq"><a href="index.php?p=chitiettin&idTin=<?php echo $row_mottinmoi_theotheloai_right['idTin'];?>"><?php echo $row_mottinmoi_theotheloai_right['TieuDe']; ?></a>
                            </a></p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
    <div class="clear">

    </div>
    <?php

}
?>
<!-- box cat-->




