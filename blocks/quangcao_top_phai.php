<?php

    $quangcao = QuangCao(1);
    while($row_quangcao = mysqli_fetch_array($quangcao)) {

        ?>
        <a href="<?php echo $row_quangcao['Url']?>" target="_blank">
            <img width="280" src="images/<?php echo $row_quangcao['urlHinh']?>"/>
            <div style="height:10px"></div>
        </a>

        <?php
    }

    ?>