<?php
//proteksi halaman admin
$this->simple_login->cek_login();
//mengabungkan semua bagain layout
require_once('head.php');
require_once('header.php');
require_once('nav.php');
require_once('content.php');
require_once('footer.php');