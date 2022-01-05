<?php 
include('koneksi.php');

$id = $_GET['id'];
$sql = "SELECT * from penjualan_header as a, penjualan_detail as b where a.id = $id and a.kode_jual = b.kode_jual";
$query = mysqli_query($koneksi,$sql);
$data = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Berhasil</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <style>
  body{
    background-color:#eee;
  }
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .content-wrapper{
    padding:50px 20px 50px 20px;
  }

  .row{
    padding:10px 0px 10px 0px;
  }

  .load-more{
    text-align:center;
    width:100%;
    padding-top:10px;
  }

  #loadMore {
    padding: 10px;
    text-align: center;
    background-color: #007bff;
    color: #fff;
    border-width: 0 1px 1px 0;
    border-style: solid;
    border-color: #fff;
    box-shadow: 0 1px 1px #ccc;
    transition: all 600ms ease-in-out;
    -webkit-transition: all 600ms ease-in-out;
    -moz-transition: all 600ms ease-in-out;
    -o-transition: all 600ms ease-in-out;
  }
  
  #loadMore:hover {
      background-color: #fff;
      color: #33739E;
  }

  .totop {
    position: fixed;
    bottom: 10px;
    right: 20px;
    z-index:10;
  }

  .totop a {
      display: none;
  }

  .btn{
    border-radius:0px;
  }

  .btn.btn-danger{
    background-color:#e51b23;
  }

  .container-fluid {
    padding: 60px 50px;
  }

  .slideanim {visibility:hidden;}

  .slide {
    animation-name: slide;
    -webkit-animation-name: slide;
    animation-duration: 1s;
    -webkit-animation-duration: 1s;
    visibility: visible;
  }

  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    } 
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }

  @media print {
  body * {
    visibility: hidden;
  }
  #section-to-print, #section-to-print * {
    visibility: visible;
  }
  #section-to-print {
    position: absolute;
    left: 0 !important;
    top: 0 !important;
  }
}
</style>
</head>
<body>
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" id="section-to-print">
            <div class="card-img-top" style="text-align:center"><h1>ADV Bagshop</h1></div>
            <div class="card-body">
                <h4>Terimakasih <?php echo ucwords($data['first_name']); ?>,</h4><p>Telah melakukan pembelian di toko kami<p>
                <div class="alert alert-success">
                    <strong>Success!</strong> Pembelian anda sudah kami proses.
                </div>
                <table class="table">
                    <tr>
                        <td>Nomor Penjualan</td>
                        <td>:</td>
                        <td><?php echo $data['kode_jual'];?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?php echo ucwords($data['first_name'].' '.$data['last_name']);?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $data['email'];?></td>
                    </tr>
                    <tr>
                        <td>Phone</td>
                        <td>:</td>
                        <td><?php echo $data['no_telp'];?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $data['alamat'].' '.$data['zip'].' '.$data['kota'].' '.$data['provinsi'];?></td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>:</td>
                        <td><?php echo 'IDR '.number_format($data['grand_total'],2);?></td>
                    </tr>


                </table>
                <a href="index.php" class="btn btn-danger">Oke <i class="fa fa-thumbs-up"></i></a>
                <a onclick="window.print()" class="btn btn-light pull-right"><i class="fa fa-print"></i> Cetak</a>
            </div>
        </div>
    <div>
    <div class="col-md-4"></div>
</div>
</body>
</html>