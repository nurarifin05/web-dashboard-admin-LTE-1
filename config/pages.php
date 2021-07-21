<?php
    error_reporting(error_reporting() & ~E_NOTICE);
    include "config/koneksi.php";

if ($_GET['page']=="data_dashboard"){
    include "page/dashboard/data_dashboard.php";
}
else if ($_GET['page']=="data_barang"){
    include "page/barang/data_barang.php";
}
?>