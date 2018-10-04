<div class="thongtin-title">
    <div class="right">

        <a style="color: #bdd8bf ; text-align:revert " href="#"><span class="SetHomePage ico_respone_01">&nbsp;</span>Đặt
            vnTin làm trang chủ</a>
        <a style="color: #bdd8bf" href="#"><span class="top">&nbsp;</span>Về đầu trang</a>

    </div>
</div>
<div class="thongtin-content">
    <?php
    $theloai = DanhSachTheLoai();
    while ($row_theloai = mysqli_fetch_array($theloai)) {
        $idTL = $row_theloai['idTL']
        ?>
        <ul class="ulBlockMenu">
            <li class="liFirst">
                <h2>
                    <a style="color: #bdd8bf ;font-size: 20px" class="mnu_giaoduc"><?php
                        echo $row_theloai['TenTL']
                        ?></a>
                </h2>
            </li>
            <?php
            $loaitin = ChitietLoaiTin($idTL);
            while ($row_loaitin = mysqli_fetch_array($loaitin)) {

                ?>
                <li>

                    <a style="color: #F8FFF7" class="mnu_giaoduc" href="loaitin/<?php
                    echo $row_loaitin['idLT'] ?>-<?php echo $row_loaitin['Ten_KhongDau'] ?>.aspx"><?php
                        echo $row_loaitin['Ten']
                        ?></a>

                </li>
                <?php
            }

            ?>

        </ul>
        <?php
    }

    ?>

</div>




