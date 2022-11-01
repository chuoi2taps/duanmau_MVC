<?php 
    if (isset($view_user_admin)) {
        $key = 1;
    } 
    
    if (isset($view_login)) {
        $key = 7;
    } 

    if (isset($view_sign_up)) {
        $key = 9;
    } 

    if (isset($view_product_admin)) {
        $key = 10;
    }

    if (isset($view_edit)) {
        $key = 12;
    }
?>

<!DOCTYPE html>        
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $css[$key]->title; ?></title>
    <link rel="stylesheet" href="public/layout/assets/style/<?php echo $css[$key]->file_name; ?>">
</head>