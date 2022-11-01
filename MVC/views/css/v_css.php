<?php 
    if (isset($view_home)) {
        $key = 10;
    } 

    if (isset($view_product)) {
        $key = 3;
    }

    if (isset($view_detail)) {
        $key = 5;
    }

    if (isset($view_contact)) {
        $key = 4;
    }

    if (isset($view_cart)) {
        $key = 2;
    }

    if (isset($view_danh_muc)) {
        $key = 11;
    }
?>

<!DOCTYPE html>        
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $css[$key]->title; ?></title>
    <link rel="stylesheet" href="public/layout/assets/style/<?= $css[$key]->file_name; ?>">

    <!-- JS -->
    <!-- end JS -->
</head>