<?php
include "koneksi.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$city = $_POST['city'];
$province = $_POST['province'];
$zip = $_POST['zip'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$paymethod = $_POST['paymethod'];
$product = $_POST['product'];
$now = date('Y-m-d');

$sqlpenjualan = "SELECT * from penjualan_header";
$querypenjualan = mysqli_query($koneksi,$sqlpenjualan);
$count = mysqli_num_rows($querypenjualan);

$kodepenjualan = ++$count.".PENJ.".date('dmY');

$sqlProduct = "SELECT * from produk where id='$product'";
$queryProduct = mysqli_query($koneksi,$sqlProduct);
$items = mysqli_fetch_array($queryProduct);
$price = $items['harga_jual'];

$sql = "INSERT into penjualan_header (kode_jual,first_name,last_name,email,kota,provinsi,zip,alamat,grand_total,mode_pembayaran,no_telp,transaction_date) 
        values('$kodepenjualan','$fname','$lname','$email','$city','$province','$zip','$address','$price','$paymethod','$phone','$now')";
mysqli_query($koneksi,$sql);
$last_id = mysqli_insert_id($koneksi);

$sqldetail = "INSERT into penjualan_detail(kode_jual,id_product,qty,price) values('$kodepenjualan','$product','1','$price')";
mysqli_query($koneksi,$sqldetail);

header("Location:resultPembelian.php?id=$last_id");

?>