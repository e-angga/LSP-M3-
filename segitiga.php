<html>
<head>
<title>Luas Segitiga</title>
<link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Memuat file css -->
</head>
<body>
	<div class="container">

<form method="post" action="segitiga.php" > <!-- Mengirim data yang diinput ke segitiga.php -->
	<h1> Luas Segitiga </h1>
	<p>Rumus Luas Segitiga = (alas * tinggi) / 2</p>
<table> <tr>
<td>Alas</td><td>:</td><td><input type="text" name="alas"/></td>
</tr><tr>
<td>Tinggi</td><td>:</td><td><input type="text" name="tinggi"/></td>
</tr><tr>
<td><input class="btn btn-primary" type="submit" name="submit" value="hasil"></td>
        </tr>
    </table>
    </form>
</div>

</body></html>

<div class="container ">
<?php

//Proses perhitungan dari data yang dimasukkan
if($_POST['submit']){
$alas = $_POST['alas'];
$tinggi = $_POST['tinggi'];

  $hasil = ($alas * $tinggi)/2 ;
  echo "Alas = " .$alas; 
  echo "</br> Tinggi = " .$tinggi; 
  echo "</br> Jadi luas segitiga adalah ($alas * $tinggi) / 2 =  ".$hasil; 
}
?>
</div>
