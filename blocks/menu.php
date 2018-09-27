<!--<ul style="list-style-type" class="width_common" id="menu_web">-->
<!--          <li class="active"><a href="./"><img class="logo_icon_home" alt="" src="images/img_logo_home.gif"></a></li>-->
<!--          <a style="font-size: 20px ; font-weight: bold ;" href="./" class="menu_thoisu">Thời sự</a>-->
<!---->
<!--</ul>-->
<link rel="stylesheet" type="text/css" href="ddsmoothmenu.css"/>
<link rel="stylesheet" type="text/css" href="ddsmoothmenu-v.css"/>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript" src="ddsmoothmenu.js">

    /***********************************************
     * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
     * Please keep this notice intact
     * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
     ***********************************************/

</script>

<script type="text/javascript">

    ddsmoothmenu.init({
        mainmenuid: "smoothmenu1", //menu DIV id
        orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu', //class added to menu's outer DIV
        //customtheme: ["#1c5a80", "#18374a"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })

    ddsmoothmenu.init({
        mainmenuid: "smoothmenu2", //Menu DIV id
        orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
        classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
        method: 'toggle', // set to 'hover' (default) or 'toggle'
        arrowswap: true, // enable rollover effect on menu arrow images?
        //customtheme: ["#804000", "#482400"],
        contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
    })
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
            document.getElementById("header").style.fontSize = "30px";
        } else {
            document.getElementById("header").style.fontSize = "90px";
        }
    }
</script>
<!-- Markup for mobile menu toggler. Hidden by default, only shown when in mobile menu mode -->
<a class="animateddrawer" id="ddsmoothmenu-mobiletoggle" href="#">
    <span></span>
</a>


<div id="smoothmenu1" class="ddsmoothmenu">

        <ul>
            <li><a href="./">Trang Chủ</a></li>
            <?php
            $menu = DanhSachTheLoai();
            while ($row_menu = mysqli_fetch_array($menu)) {
                $idTL = $row_menu['idTL']

                ?>
                <li><a href="#"><?php echo $row_menu['TenTL'] ?></a>

                    <ul>
                        <?php
                        $menudetail = ChitietLoaiTin($idTL);
                        while ($row_menudetail = mysqli_fetch_array($menudetail)) {
                            ?>
                            <li><a href="index.php?p=tintrongloai&idLT=<?php echo $row_menudetail['idLT']?>"><?php echo $row_menudetail['Ten'] ?></a></li>
                            <!--<li><a href="#">Sub Item 1.2</a></li>-->
                            <?php
                        }
                        ?>

                    </ul>
                </li>
                <?php
            }
            ?>
        </ul>

    <br style="clear: left"/>
</div>


