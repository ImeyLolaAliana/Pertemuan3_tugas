<?php
// Data penjualan
$penjualan = [
  [
    "nama" => "Produk A",
    "harga" => 10000,
    "terjual" => 5
  ],
  [
    "nama" => "Produk B",
    "harga" => 7500,
    "terjual" => 10
  ],
  [
    "nama" => "Produk C",
    "harga" => 12000,
    "terjual" => 8
  ]
];

// Hitung total penjualan
$totalPenjualan = 0;
foreach ($penjualan as $produk) {
  $totalPenjualan += $produk["harga"] * $produk["terjual"];
}

// Hitung total terjual
$totalTerjual = 0;
foreach ($penjualan as $produk) {
  $totalTerjual += $produk["terjual"];
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Sistem Pencatatan Data Penjualan</title>
</head>
<body>
  <h1>Sistem Pencatatan Data Penjualan</h1>
  <p>[Form Input untuk Data Penjualan]</p>

  <h2>Laporan Penjualan:</h2>
  <table border="1">
    <thead>
      <tr>
        <th>Nama</th>
        <th>Harga Per Produk</th>
        <th>Jumlah Terjual</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($penjualan as $produk): ?>
        <tr>
          <td><?php echo $produk["nama"]; ?></td>
          <td><?php echo $produk["harga"]; ?></td>
          <td><?php echo $produk["terjual"]; ?></td>
          <td><?php echo $produk["harga"] * $produk["terjual"]; ?></td>
        </tr>
      <?php endforeach; ?>
      <tr>
        <td><strong>Total Penjualan</strong></td>
        <td></td>
        <td><strong><?php echo $totalTerjual; ?></strong></td>
        <td><strong><?php echo $totalPenjualan; ?></strong></td>
      </tr>
    </tbody>
  </table border="1">
</body>
</html>