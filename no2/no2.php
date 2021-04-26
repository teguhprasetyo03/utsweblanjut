<form method="POST">
  <center>
    <div>
      <h1>FORM PELANGGAN LAUNDRY ABDI</h1>
      <label>NAMA PELANGGAN = </label>
      <input name="nama" type="name" placeholder="Masukkan nama">
    </div>
    <br>
    <div>
      <label>TELP = </label>
      <input name="telefon" type="tel" placeholder="Masukkan telefon">
    </div>
    <br>
    <div>
      <label> JENIS PAKET = </label>
      <select name="jenispaket" id="paket">
        <option value="perorangan">Perorangan</option>
        <option value="keluarga">Keluarga</option>
        <option value="perusahaan">Perusahaan</option>
      </select>
      <br />
    </div>
    <br>
    <div>
      <label>Total Berat = </label>
      <input name="berat" type="number" placeholder="Masukkan berat">
    </div>
    <div>
      <button type="submit" name="pilih">Simpan</button>
    </div>
  </center>
</form>
<?php # membuka tag PHP

$nama = @$_POST['nama'];
$telefon = @$_POST['telefon'];
$totalberat = @$_POST['berat'];
$totalharga = @$_POST['totalharga'];
$pilih  = @$_POST['pilih'];

# jangan lupa tutup tag PHP


if ($nama) {
  echo "<h1>DATA PEMESANAN Laundry</h1> <br>";
  echo "<strong>Nama :</strong> {$nama} <br>";
}

if ($telefon) {
  echo "<strong>Telp :</strong> {$telefon} <br>";
}

if (isset($_POST['jenispaket'])) {
  $paket = $_POST['jenispaket'];
  switch ($paket) {
    case 'perorangan':
      echo '<strong>Jenis Paket : Paket Perorangan</strong><br/>';
      echo 'Harga Paket : 7000<br/>';
      $totalharga = $totalberat * 7000;
      break;
    case 'keluarga':
      echo '<strong>Jenis Paket : Paket Keluarga</strong><br/>';
      echo 'Harga Paket : 6000<br/>';
      $totalharga = $totalberat * 6000;
      break;
    case 'perusahaan':
      echo '<strong>Jenis Paket : Paket Perusahaan</strong><br/>';
      echo 'Harga Paket : 4000<br/>';
      $totalharga = $totalberat * 4000;
      break;
    default:
  }
}
echo "<br>";

if ($totalberat) {
  echo "<strong>Berat Paket :</strong> {$totalberat} <br> <hr><br>";
}

if ($totalharga) {
  echo "<strong>Total Bayar :</strong> {$totalharga} <br>";
}
"echo </center>";
?>