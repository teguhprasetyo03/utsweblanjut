<style>
  table {
    border-collapse: collapse;
    border: 1;
    width: 100%;
  }

  tr,
  td {
    border: 1px solid;
    padding: 5px;
    background-color: blue;
  }
</style>

<table>

  <?php
  for ($baris = 1; $baris <= 5; $baris++) {
    for ($kolom = 1; $kolom <= 6; $kolom++) {
      echo "<td>NPM = 201843500330, NAMA = TEGUH PRASETYO </td>";
    }
    echo "<tr></tr>";
  }
  ?>
</table>