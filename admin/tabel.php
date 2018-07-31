<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tabel Penjualan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Keranjaa Admin
                    </a>
                </li>
                <li>
                    <a href="index.php">Dashboard</a>
                </li>
                <li>
                    <a href="tabel.php">Tabel Penjualan</a>
                </li>
                <li>
                    <a href="penjualan.php">Grafik Penjualan</a>
                </li>
                <li>
                    <a href="#">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle"><i class="fas fa-align-justify"></i></a>
<?php
include "config.php";
$query = mysqli_query($connection,"SELECT * FROM jual ORDER BY id_jual DESC");
?>
<form action="" method="post">
    <table class="table table-dark">
  <thead>
    <tr>
        <th>No</th>
        <th>Barang</th>
        <th>Harga</th>
        <th>Jumlah</th>
    </tr>
  </thead>
  <tbody>
    <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["nama_barang"];?></td>
            <td><?php echo $data["harga"];?></td>
            <td><?php echo $data["jumlah"];?>
            </td>
        </tr>
        <?php $no++; } ?>
        <?php } ?>
  </tbody>
</table>
    
</form>

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>