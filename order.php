<?php include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * from produk where id='$id'";
$query = mysqli_query($koneksi,$sql);
$item = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
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
    <title>Order Barang</title>
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

        <div class="container" style="margin-top:30px;margin-bottom:30px;background-color:#fff">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="gambar/<?php echo $item['gambar_produk']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a><?php echo $item['nama_produk']; ?></a></h4>
                        <p class="card-text">IDR <?php echo number_format($item['harga_jual'],2); ?></p>
                        <?php 
                            $description = explode('|',$item['deskripsi']); 
                        ?>
                        <ul style="list-style-type:none;padding:0px">
                        <?php foreach ($description as $desc) { ?>
                            <li><?php echo $desc; ?></li>    
                        <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                    <form class="needs-validation" method="POST" action="saveTransaction.php" validate>
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <input type="hidden" name="product" value="<?php echo $item['id']; ?>"/>
                                <label for="validationCustom01">First name</label>
                                <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="First name" 
                                required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustom02">Last name</label>
                                <input type="text" class="form-control" id="validationCustom02" name="lname" placeholder="Last name"
                                required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="validationCustomUsername">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                </div>
                                <input type="text" class="form-control" id="validationCustomUsername" name="email" placeholder="Username"
                                aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                Please choose a email.
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" required/>
                            </div>
                            
                            <div class="col-md-6 mb-3">
                                <label for="payMethod">Pay Method</label>
                                <select class="form-control" name="paymethod" id="paymethode">
                                    <option value="COD">COD</option>
                                    <option value="CBD">CBD</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                            <label for="validationCustom03">City</label>
                            <input type="text" class="form-control" id="validationCustom03" name="city" placeholder="City" required>
                            <div class="invalid-feedback">
                                Please provide a valid city.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom04">Province</label>
                            <input type="text" class="form-control" id="validationCustom04" name="province" placeholder="Province" required>
                            <div class="invalid-feedback">
                                Please provide a valid province.
                            </div>
                            </div>
                            <div class="col-md-3 mb-3">
                            <label for="validationCustom05">Zip</label>
                            <input type="text" class="form-control" id="validationCustom05" name="zip" placeholder="Zip" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="fullAddress">Full Address</label>
                                <textarea class="form-control" name="address" id="address"></textarea> 
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                                You must agree before submitting.
                            </div>
                            </div>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    <div class="col-md-4">
                        <h2>Login Admin Panel</h2>
                        <label>User</label>
                        <input class="form-control" type="email" placeholder="Input your user"/>
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
</body>
</html>