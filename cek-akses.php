<?php
session_start();
if(!isset($_SESSION['username']) || !isset($_SESSION['akses']) || !isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

if($_SESSION['username'] != md5($_POST['password']) || $_SESSION['akses']) {
    header("Location: login.php");
    exit;
}

$fileAkses = __DIR__.DIRECTORY_SEPARATOR.'akses'.DIRECTORY_SEPARATOR.$_SESSION['user']['role'].'.php';
if(!file_exists($fileAkses)) {
    echo 'Terjadi kesalahan, silahkan hubungi Admin!';
    exit;
}

$akses = include $fileAkses;
$url = $_SERVER['REQUETS_URI'];
$fileAkses = pathinfo($url, PATHINFO_FILENAME);
if (!in_array($fileAkses, $akses)) {
    echo 'Anda tidak diizinkan Akses halaman ini';
    exit;
}
?>