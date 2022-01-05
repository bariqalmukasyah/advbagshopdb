<?php 
include 'koneksi.php';
 
if(isset($_GET['id'])) {
	$nq = $_GET['nq'];
	$ii = $_GET['id'];
	
	//Memanggil fungsi pada file koneksi
	$insertBuah = globQuery($sql);
	if($insertBuah){
		//redirect ke halaman index
		header('Location: index.php');
		exit();
	}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ADV Bagshop</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom_bootstrap4.css" rel="stylesheet">


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link href="javascript/jquery-redirect.js" rel="stylesheet">

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
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
    </head>
    <body>
    <div class="container-fluid">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active img-head-container">
                <img class="img-head" src="img/head1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Travel Bag</h3>
                    <p>Travel around the world? Why not?</p>
                </div>   
                </div>
                <div class="carousel-item img-head-container">
                <img class="img-head" src="img/head2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Adventure</h3>
                    <p>Be Yourself Be Brave!</p>
                </div>   
                </div>
                <div class="carousel-item img-head-container">
                <img class="img-head" src="img/head3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New Arrival</h3>
                    <p>Discover something NEW!</p>
                </div>   
                </div>
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>

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

        <div class="container"><br>
            <div class="card-columns">
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head1.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title"><b>Travel Bag</b></h4>
                    <p class="card-text">Travel around the world? Why not?</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head2.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title"><b>Adventure</b></h4>
                    <p class="card-text">Be Yourself Be Brave!</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <div class="img-card-container">
                        <img class="card-img-top" src="img/head3.jpg" alt="Card image" style="width:100%">
                    </div>
                    <div class="card-body">
                    <h4 class="card-title"><b>New Arrival</b></h4>
                    <p class="card-text">Discover something NEW!</p>
                    <!-- <a href="#" class="btn btn-primary">See More</a> -->
                    </div>
                </div>
            </div>
            <br>
            <h2 id="allproduct"><b>All Product</b></h2>
            <div class="row">
            <?php 
                    $getItem = mysqli_query($koneksi, 'SELECT * FROM produk');
			        while ($row = $getItem->fetch_assoc()) {
		            ?>
                    <div class="card col-md-3" style="max-height:450px">
                        <div class="img-card-container">
                        <img src="gambar/<?php echo $row['gambar_produk']; ?>" alt="Card image" style="width:80%;margin-left:25px">
                        </div>
                        <div class="card-body">
                        <h4 class="card-title"><?= $row['nama_produk'] ?></h4>
                        <p class="card-text">IDR <?php echo number_format($row['harga_jual'],0,',','.'); ?></p>
                        <a href="order.php?id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-shopping-cart"></i> Buy it!</a>
                        </div>
                    </div>
                    <?php		
			        }
		            ?>
                <div class="col-sm-3">
                </div>
                </div>
                </div>
                <br><br>
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
                    <div class="col-md-4">
                        <h2>Login Admin Panel</h2>
                        <label>User</label>
                        <input class="form-control" type="email" placeholder="Input Username"/>
                        <label>Password</label>
                        <input class="form-control" placeholder="Input Password"></input>
                        <br>
                        <a href="databarang.php" class="btn btn-light float-right">LOGIN</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</html>