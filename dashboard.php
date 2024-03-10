<?php
include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
include('tampilan/header.php');
include('tampilan/sidebar.php');
include('tampilan/footer.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testspp";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil jumlah siswa
$sql = "SELECT COUNT(*) AS total_siswa FROM siswa";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data
  $row = $result->fetch_assoc();
  $total_siswa = $row["total_siswa"];
} else {
  $total_siswa = 0;
}

$conn->close();
?>
<!-- Main Content -->
<div class="main-content bg-primary">
  <section class="section">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card card-statistic-2">
          <div class="card-stats">
            <div class="card-stats-title">DATA KELAS -
              <div class="dropdown d-inline">
                <a class="font-weight-600 dropdown-toggle" data-toggle="dropdown" href="#" id="orders-month">XII Mipa</a>
                <ul class="dropdown-menu dropdown-menu-sm">
                  <li class="dropdown-title">Pilih Kelas</li>
                  <li><a href="kelas.php" class="dropdown-item active">XII Mipa 1</a></li>
                </ul>
              </div>
            </div>
            <div class="card-stats-items">
              <div class="card-stats-item">
                <div class="card-stats-item-count"><?php echo $total_siswa; ?></div>
                <div class="card-stats-item-label">Siswa</div>
              </div>

              <div class="card-stats-item">
                <div class="card-stats-item-count">12</div>
                <div class="card-stats-item-label">B Lunas</div>
              </div>
              <div class="card-stats-item">
                <div class="card-stats-item-count">21</div>
                <div class="card-stats-item-label">Lunas</div>
              </div>
            </div>
          </div>
          <div class="card-icon shadow-info bg-primary">
            <i class="fas fa-users"></i>

  </section>
</div>
</div>
</div>
</body>