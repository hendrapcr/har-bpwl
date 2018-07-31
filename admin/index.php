<?php
//koneksi ke database
include "config.php";

$rows = array();
$table = array();
$table['cols'] = array(
    //membuat label untuk nama nya, tipe string
    array('label' => 'Barang', 'type' => 'string'),
    //membuat label untuk jumlah siswa, tipe harus number untuk kalkulasi persentasenya
    array('label' => 'Jumlah Jual', 'type' => 'number')
);

//melakukan query ke database select
$sql = $connection->query("SELECT * FROM jual");
//perulangan untuk menampilkan data dari database
while($data = $sql->fetch_assoc()){
    //membuat array
    $temp = array();
    //memasukkan data pertama yaitu nama kelasnya
    $temp[] = array('v' => (string)$data['nama_barang']);
    //memasukkan data kedua yaitu jumlah siswanya
    $temp[] = array('v' => (int)$data['jumlah']);
    //memasukkan data diatas ke dalam array $rows
    $rows[] = array('c' => $temp);
}

//memasukkan array $rows dalam variabel $table
$table['rows'] = $rows;
//mengeluarkan data dengan json_encode. silahkan di echo kalau ingin menampilkan data nya
$jsonTable = json_encode($table);

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grafik Penjualan</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {

        // membuat data chart dari json yang sudah ada di atas
        var data = new google.visualization.DataTable(<?php echo $jsonTable; ?>);

        // Set options, bisa anda rubah
        var options = {'title':'Grafik Penjualan',
                       'width':500,
                       'height':400};

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);

        var chart = new google.visualization.BarChart(document.getElementById('chart_div1'));
        chart.draw(data, options);
    }
    </script>
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
                <table>
        <tr>
            <td><div id="chart_div"></div></td>
            <td><div id="chart_div1"></div></td>
        </tr>
    </table>

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
    
    <!--Div yang akan menampilkan chart-->
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