<?php
function ducan($stanje="otvoren"){
echo "Ducan je $stanje";
}

$day = date("w");
$currTime = date("H");


$year = date("Y");
$fixedHolidays = ['01-01', '01-06', '05-01', '08-15', '11-01', '12-25', '12-26'];
$easter = date("m-d", easter_date($year));
$easterMonday = date("m-d", strtotime($easter . " +1 day"));
$corpusChristi = date("m-d", strtotime($easter . " +60 days"));
$holidays = array_merge($fixedHolidays, [$easterMonday, $corpusChristi]);

if (in_array(date("m-d"), $holidays)) {
    ducan("zatvoren");
} else {
if($day == 0) {
    //nedjelja
    ducan("zatvoren");
} else if($day == 6) {
    //subota
    if($currTime >= 9 && $currTime < 14) {
        ducan("otvoren (9-14)");
    } else {
        ducan("zatvoren (9-14)");
    }
} else {
    if($currTime >= 8 && $currTime < 20) {
        ducan("otvoren (8-20)");
    } else {
        ducan("zatvoren (8-20)");
    }
}
}