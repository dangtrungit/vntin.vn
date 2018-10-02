

<?php
$tukhoa = $_GET['q'];

    $tintimkiem = TimKiem($tukhoa);

//echo  $chuoi= changeTitle($tukhoa);
    while ($row = mysqli_fetch_array($tintimkiem)) {
        ?>

        <div class="box-cat">
            <div class="cat1">

                <div class="clear"></div>
                <div class="cat-content">
                    <div class="col0 col1">
                        <div class="news">
                            <h3>

                                <a style="font-size: 18px;color: #0e7d83" href="index.php?p=chitiettin&idTin=<?php
                                echo $row['idTin'];

                                ?>">
                                    <div style="margin-bottom: 20px">
                                        <?php
                                        echo $row['TieuDe'] ;

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


