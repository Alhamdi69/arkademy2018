<script>
function tampilkan(){
  var kategori  = document.getElementById("form1").kategori.value;
  if (kategori=="Gula")
    {
        document.getElementById("harga").value = '21500';
    }
  else if (kategori=="Sound")
    {
       document.getElementById("harga").value = '51500';
    }
	else if (kategori=="Kipas Angin")
    {
       document.getElementById("harga").value = '151500';
    }
	else if (kategori=="Lampu Belajar")
    {
       document.getElementById("harga").value = '71500';
    }
}
</script>
<form action="4.php" method="post" id="form1" name="form1">
Barang : <select id="kategori" name="kategori" onchange="tampilkan()">
	<option value="" disabled selected>Pilih</option>
	<option value="Gula">Gula</option>
    <option value="Sound">Sound</option>
    <option value="Kipas Angin">Kipas Angin</option>
    <option value="Lampu Belajar">Lampu Belajar</option>
</select><br>
Harga : <input name="harga" id="harga" type="text" readonly="true"><br>
Bayar : <input name="bayar" type="text"><br>
<input type="submit">
</form>

<?php
if(isset($_POST["kategori"])){
$harga = $_POST['harga'];
$bayar = $_POST['bayar'];	
	
	
$Uang=$bayar-$harga;


$Pecahan2=$Uang/50000;
$Sisa1=$Uang%50000;

$Pecahan3=$Sisa1/20000;
$Sisa2=$Sisa1%20000;

$Pecahan4=$Sisa2/10000;
$Sisa3=$Sisa2%10000;

$Pecahan5=$Sisa3/5000;
$Sisa4=$Sisa3%5000;

$Pecahan6=$Sisa4/2000;
$Sisa5=$Sisa4%2000;

$Pecahan7=$Sisa5/1000;
$Sisa6=$Sisa5%1000;

$Pecahan8=$Sisa6/500;
$Sisa7=$Sisa6%500;


echo 'Jumlah Uang:Rp.'.number_format($Uang),'<br/>';
echo '<br/>';
echo 'Pecahan Rp.50000 = '.(int) $Pecahan2.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.20000 = '.(int) $Pecahan3.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.10000 = '.(int) $Pecahan4.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.5000 = '.(int) $Pecahan5.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.2000 = '.(int) $Pecahan6.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.1000 = '.(int) $Pecahan7.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.500 = '.(int) $Pecahan8.' Koin';
}

?>