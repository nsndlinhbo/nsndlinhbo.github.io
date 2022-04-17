<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';
$sqls = hoangphuc("SELECT * FROM `caidat`");
$caidat = fetch_array($sqls);
?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $caidat['tieude']; ?></title>
    <meta name="description" content="<?= $caidat['mota']; ?>">
    <meta name="keywords" content="<?= $caidat['tukhoa']; ?>">
    <meta property="og:image" content="<?= $caidat['image']; ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css">
        <meta property="og:title" content="<?= $caidat['tieude']; ?>">
    <meta property="og:type" content="Website">
    <meta property="og:url" content="<?= $caidat['website'] ?>">
    <meta property="og:image" content="https://static.mservice.io/img/momo-upload-api-201210104433-637431938731997178.jpg">
    <style>
        body {
            background: #e6e6e6;
        }

        .col-xs-1 {
            width: 8.33333333%;
        }

        .col-xs-5 {
            width: 41.66666667%;
        }

        .fa-stack {
            position: relative;
            display: inline-block;
            width: 2em;
            height: 2em;
            line-height: 2em;
            vertical-align: middle;
        }
    </style>
</head>