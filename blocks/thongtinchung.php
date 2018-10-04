<?php
function sw_get_current_weekday() {
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $weekday = date("l");
    $weekday = strtolower($weekday);
    switch($weekday) {
        case 'monday':
            $weekday = 'Thứ hai';
            break;
        case 'tuesday':
            $weekday = 'Thứ ba';
            break;
        case 'wednesday':
            $weekday = 'Thứ tư';
            break;
        case 'thursday':
            $weekday = 'Thứ năm';
            break;
        case 'friday':
            $weekday = 'Thứ sáu';
            break;
        case 'saturday':
            $weekday = 'Thứ bảy';
            break;
        default:
            $weekday = 'Chủ nhật';
            break;
    }
    // echo $weekday.', '.date('d/m/Y H:i:s');
    echo $weekday.', Ngày '.date('d/m/Y');
};

?>


<div class="txt_timer left" id="clockPC" >

    <script>
        function startTime() {
            var today = new Date();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            var fmTime;
            if (h>=13 && h<=24){
                fmTime = ' PM';
            }else {
                fmTime  = ' AM';
            }
            /* Đặt phần tử của bạn tại đây */
            document.getElementById('clockPC').innerHTML =
                h + ":" + m + ":" + s + fmTime;
            var t = setTimeout(startTime, 500);
        }
        function checkTime(i) {
            if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10

            return i;
        }
        document.querySelector('body').addEventListener("load", startTime()) ;

    </script>

</div>
<div id="titleday" >
    <?php sw_get_current_weekday(); ?>
</div>
<!--<a href="https://www.youtube.com/watch?v=VCYJckDc_fw" class="txt_24h left">KPT</a>-->
<!--<a href="#" class="img_rss left"><img src="http://st.f3.vnecdn.net/responsive/c/v52/images/graphics/img_rss_2.gif"-->
<!--                                      alt=""></a>-->
<div class="block_search_web left">
    <form action="http://localhost:8888/vntin.com/" method="get" id="search" >
        <div >
            <input  name="search" value="" maxlength="80" class="txt_input" type="text" placeholder="Tìm kiếm..." >
            <input  value="" class="icon_search_web" type="submit"  >
            <input name="p" type="hidden" value="timkiem" />
        </div>

    </form>
</div>
       
          