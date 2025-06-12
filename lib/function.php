<?php
function antiInjection($data) {
    return str_replace(["'", '"'], "", $data);
}

function toTimestamp($date) {
    $datetime = DateTime::createFromFormat("H:i:s d-m-Y", $date);
    return $datetime->getTimestamp();
}

function getTimeDiffDetails($toTimestamp) {
    $now = time();
    $diff = $toTimestamp - $now;

    $days = floor($diff / (3600 * 24));
    $diff %= 3600 * 24;

    $hours = floor($diff / 3600);
    $diff %= 3600;

    $minutes = floor($diff / 60);
    $seconds = $diff % 60;

    if ($days)
        return $days." ngày";
    if ($hours)
        return $hours." giờ";
    if ($minutes)
        return $minutes." phút";
    return $seconds." giây";
}
