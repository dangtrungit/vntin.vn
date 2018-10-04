<!--<div class="" id="fkbx" style="width: 504px;"><div id="fkbx-text">Tìm kiếm trên Google hoặc nhập một URL</div><input id="q" aria-hidden="true" autocomplete="off" name="q" tabindex="-1" type="url" jsaction="mousedown:ntp.fkbxclk" style="opacity: 0;"><div id="fkbx_crt"></div><div id="fkbx-spch" tabindex="0" aria-label="Tìm kiếm bằng giọng nói" style="display: block;"></div></div>-->
<?php
$idLT = $_GET['idLT'];
settype($idLT,"int");

?>

<?php
$bc = breadCrum($idLT);
$row = mysqli_fetch_array($bc);

?>
<div >
<!--    Trang chủ >> --><?php
//    echo $row['TenTL']
//    ?><!-- >> --><?php
//    echo $row['Ten']
//    ?>
    <div id="midheader-vp" >
        <div id="left" style="margin-top: -65px;width: 100%;">
            <ul class="list_arrow_breakumb">
                <li class="start">
                    <a href="javascript:;"> Trang chủ </a>
                    <span class="arrow_breakumb">&nbsp;</span></li>
            </ul>
            <ul class="list_arrow_breakumb">
                <li class="start">
                    <a href="javascript:;"><?php
                        echo $row['TenTL']
                        ?></a>
                    <span class="arrow_breakumb">&nbsp;</span></li>
            </ul>
            <ul class="list_arrow_breakumb">
                <li class="start">
                    <a href="javascript:;"><?php
                        echo $row['Ten']
                        ?></a>
                    <span class="arrow_breakumb">&nbsp;</span></li>
            </ul>
        </div>
    </div>

<!--    <div class="clear">-->
</div>
<?php
 $tintheoloai = DanhSachTin_TheoLoaiTin($idLT);
 while ($row = mysqli_fetch_array($tintheoloai)) {
     ?>
     <div class="box-cat">
         <div class="cat1">

             <div class="clear"></div>
             <div class="cat-content">
                 <div class="col0 col1">
                     <div class="news">
                         <h3>
                             <a style="font-size: 18px;color: #0e7d83" href="chitiet/<?php
                             echo $row['idTin']
                             ?>-<?php echo $row['TieuDe_KhongDau'] ?>.aspx">
                                 <div style="margin-bottom: 20px">
                                     <?php
                                     echo $row['TieuDe']
                                     ?>
                                 </div>
                                </a></h3>
                         <img class="images_news" src="upload/tintuc/<?php
                         echo $row['urlHinh']
                         ?>" align="left"/>
                         <div class="des"><?php
                             echo $row['TomTat']
                             ?></div>

                         <div class="clear"></div>

                     </div>
                 </div>

             </div>
         </div>
     </div>
     <?php
 }
?>
<div class="clear"></div>

<!-- box cat-->



