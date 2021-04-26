<!DOCTYPE html>
<html>

<style>
  td {
    background-color: blue;
  }

  tr {
    background-color: red;
  }
</style>

<body>
  <table align="left" border="1" cellpadding="3" cellspacing="0">
    <?php
    for ($i = 1; $i <= 5; $i++) {
      echo "<tr>";
      for ($j = 1; $j <= 6; $j++) {
        echo "<td>NAMA,NPM</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>