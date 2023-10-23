<?php
//loading konfigurasi website
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
     <!-- SEO Google -->
    <meta name="description" content="<?= $title ?>,<?= $site->deskripsi ?>">
    <meta name="keywords" content="<?= $site->keywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>

    <!-- icon diambil dari konfigurasi website -->
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/upload/image/' .$site->icon) ?>"/>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('')?>theme/frontend/css/style.css" type="text/css">
</head>

<body>


    