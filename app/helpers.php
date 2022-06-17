<?php
if(!function_exists('custom_date_time_format')){
    function custom_date_time_format($date_time, $format = 'Y-m-d'){
        $date_time = date_format(date_create($date_time), $format);
        return $date_time;
    }
}
