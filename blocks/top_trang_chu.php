<?php
if (isset($_GET['idLT'])) {
    $idLT = $_GET['idLT'];
    settype($idLT,"int");
    $tinmoinhat_mottin = TinMoiNhat_TheoLoaiTin_MotTin($idLT);
} else {
    $tinmoinhat_mottin = TinMoiNhat_MotTin();
}
?>

<div id="slide-left">
    <!--tin lon nhat ben trai-->
    <?php
    $row_tinmoinhat_mottin = mysqli_fetch_array($tinmoinhat_mottin)
    ?>

    <div id="slideleft-main">

        <img style="height: 300px ;width: 500px" src="upload/tintuc/<?php echo $row_tinmoinhat_mottin['urlHinh'] ?>"/><br/>

        <h1 class="title"><a
                    href="chitiet/<?php echo $row_tinmoinhat_mottin['idTin'] ?>-<?php echo $row_tinmoinhat_mottin['TieuDe_KhongDau'] ?>.aspx">
                <?php echo $row_tinmoinhat_mottin['TieuDe'] ?>
            </a>
        </h1>

        <div class="des" style="text-indent:20px;">
            <?php echo $row_tinmoinhat_mottin['TomTat'] ?>
        </div>

    </div>


    <div id="slideleft-scroll">

        <div class="content_scoller width_common">
            <ul>
                <!--show bon tin-->
                <?php
                $tinmoinhat_bontin = TinMoiNhat_BonTin();
                while ($row_tinmoinhat_bontin = mysqli_fetch_array($tinmoinhat_bontin)) {

                    ?>
                    <li>
                        <div class="title_news">
                            <a href="chitiet/<?php echo $row_tinmoinhat_bontin['idTin'] ?>-<?php echo $row_tinmoinhat_bontin['TieuDe_KhongDau'] ?>.aspx"
                               class="txt_link"><?php echo $row_tinmoinhat_bontin['TieuDe'] ?></a>
                        </div>
                    </li>

                    <?php
                }
                ?>

            </ul>
        </div>

    </div>
</div>


     