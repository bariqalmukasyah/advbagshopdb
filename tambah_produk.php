<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: grey;
      }
    button {
          background-color: teal;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #ccc;
      outline-color: grey;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.html"><h2><b>ADV Bag Shop</b></h2></a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#footer">Contact us</a>
            </li>
        </ul>
        </nav>
        <center>
        <h1>Tambah Produk</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_produk" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" />
        </div>
        <div>
          <label>Harga Beli</label>
         <input type="text" name="harga_beli" required="" />
        </div>
        <div>
          <label>Harga Jual</label>
         <input type="text" name="harga_jual" required="" />
        </div>
        <div>
          <label>Gambar Produk</label>
         <input type="file" name="gambar_produk" required="" />
        </div>
        <div>
         <button type="submit">Simpan Produk</button>
        </div>
        </section>
      </form>
<footer>
        <div class="row bg-dark text-white" style="height:300px;">
            <div class="container" id="footer" style="margin-top:20px">
                <div class="row">
                    <div class="col-md-4">
                        <h2>ADV Bag Shop</h2>
                        <p>JL. Gergaji V no. 1150E, Mugassari, Semarang Selatan</p>
                        <p>No. Telp (024) 024123</p>
                        <p>hello@adv.com</p>
                    </div>
                    <div class="col-md-4">
                        <h2>Social Media</h2>
                        <img src="img/socialmedia.png" style="width:200px;margin-top:-25px;margin-left:-15px">
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>l