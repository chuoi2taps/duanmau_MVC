<!-- <!DOCTYPE html>        
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh mục</title>

    CSS
    <link rel="stylesheet" href="public/layout/assets/style/add_product.css">
    <link rel="stylesheet" href="public/layout/assets/style/admin.css">
    <link rel="stylesheet" href="public/layout/assets/style/cart.css">
    <link rel="stylesheet" href="public/layout/assets/style/category.css">
    <link rel="stylesheet" href="public/layout/assets/style/contact.css">
    <link rel="stylesheet" href="public/layout/assets/style/detail.css">
    <link rel="stylesheet" href="public/layout/assets/style/list.css">
    <link rel="stylesheet" href="public/layout/assets/style/login.css">
    <link rel="stylesheet" href="public/layout/assets/style/product.css">
    <link rel="stylesheet" href="public/layout/assets/style/sign_up.css">
    <link rel="stylesheet" href="public/layout/assets/style/style.css">


    èn CSS
</head> -->

<?php
//chứa nội dung
//view của tôi ở đâu ?
if(isset($view_home)) {
    include ($view_home);
} 

if (isset($view_product)) {
    include ($view_product);
}

if (isset($view_detail)) {
    include ($view_detail);
}

if (isset($view_contact)) {
    include ($view_contact);
}

if (isset($view_cart)) {
    include ($view_cart);
}

if (isset($view_danh_muc)) {
    include ($view_danh_muc);
}
?>