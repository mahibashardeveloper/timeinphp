<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="box">

    <?php

    date_default_timezone_set('Asia/Dhaka');

    $timestamp = time();

    $bdate = date("j F, Y", $timestamp);
    $bdate = str_replace(
        array('January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'),
        array('জানুয়ারী', 'ফেব্রুয়ারি', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর'),
        $bdate
    );

    $btime = date("h:i A", $timestamp);
    $btime = str_replace(
        array('AM', 'PM'),
        array('ভোর', 'বিকাল'),
        $btime
    );

    if ($timestamp >= strtotime('04:00am') && $timestamp <= strtotime('06:59am')) {
        $btime = str_replace('ভোর', 'ভোর / সকাল', $btime);
    } elseif ($timestamp >= strtotime('07:00am') && $timestamp <= strtotime('09:59am')) {
        $btime = str_replace('সকাল', 'সকাল', $btime);
    } elseif ($timestamp >= strtotime('10:00am') && $timestamp <= strtotime('02:59pm')) {
        $btime = str_replace('বিকাল', 'বেলা', $btime);
    } elseif ($timestamp >= strtotime('03:00pm') && $timestamp <= strtotime('05:59pm')) {
        $btime = str_replace('বিকাল', 'বিকাল', $btime);
    } elseif ($timestamp >= strtotime('06:00pm') && $timestamp <= strtotime('07:59pm')) {
        $btime = str_replace('বিকাল', 'সন্ধ্যা', $btime);
    } else {
        $btime = str_replace('বিকাল', 'রাত', $btime);
    }

    echo $bdate . ' (' . $btime . ')';

    ?>


</div>

</body>
</html>