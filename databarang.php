<?php include 'koneksi.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Barang</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: grey;
      }
    table {
      border: solid 1px #DDEEEE;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #DDEFEF;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
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
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
        <a class="navbar-brand" href="index.php"><h2><b>ADV Bag Shop</b></h2></a>
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="about.html">About us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#footer">Contact us</a>
            </li>
        </ul>
        </nav>
<center><h1>Data Produk</h1><center>
<center><a href="tambah_produk.php" class="btn btn-info"><i class="fa fa-plus"></i> Tambah Produk</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Produk</th>
          <th>Dekripsi</th>
          <th>Harga Beli</th>
          <th>Harga Jual</th>
          <th>Gambar</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM produk ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1; 
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_produk']; ?></td>
          <td><?php echo $row['deskripsi']; ?></td>
          <td>IDR <?php echo number_format($row['harga_beli'],0,',','.'); ?></td>
          <td>IDR <?php echo number_format($row['harga_jual'],0,',','.'); ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar_produk']; ?>" style="width: 120px;"></td>
          <td>
              <a href="edit_produk.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="proses_hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; 
      }
      ?>
    </tbody>
    </table>
</div>

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
</html>