<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM barangmainan ORDER BY id DESC");
?>

<html>
    <head>
    <center><img src="giant4.PNG" style="position: absolute; top: 0px; left: 0px; width: 1367px;"></center>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
          <title>Senarai Barangan Kedai Dulu-Dulu</title>
    </head>
    <body bgcolor="#3dc851">
    <center>
        <h2>SENARAI BARANGAN DAN HARGA</h2> 
            <table width='80%'border=1 bordercolor="black" cellpadding="10" cellspacing="0">
                <tr bgcolor='pink'>
                    <td>Bil.</td>
                    <td>Nama Produk</td>
                    <td>Harga</td>
                    <td>Tindakan</td>
                </tr>

<?php
      $no=1;
      
      while($res = mysqli_fetch_array($result)) {
          echo "<tr bgcolor='white'>";  
          echo "<td>".$no; 
          echo "<td>".$res['nama']."</td>"; 
          echo "<td>".$res['harga']."</td>"; 
          echo "<td><a href=\"delete.php?id=$res[id]\" onClick=\return confirm('Adakah anda pasti?')
                    \">hapus</a></td>";
          $no++;
      }
         ?>
            </table>
            <br><a href="add.php">Daftar Barang Baru</a>
    </center>
    <br><br><br><br>
    <center><img src="giant5.PNG" style="align='bottom' ; position: absolute; left: 0px; width: 1367px;"></center>
    </body>
</html>

