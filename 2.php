<form action="2.php" method="post">
<table>
	<tr>
    	<td>Username</td>
        <td>:</td>
        <td><input name="nama" type="text"></td>
    </tr>
    <tr>
    	<td>Email</td>
        <td>:</td>
        <td><input name="email" type="text"></td>
    </tr>
    <tr>
    	<td>Phone Number</td>
        <td>:</td>
        <td><input name="phone" type="text"></td>
    </tr>
    <tr>
    	<td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><button name="submit" value="Simpan">Simpan</button></td>
    </tr>
</table>
</form>
<?php

if(isset($_POST['submit']))
{
	if (!preg_match("/^[a-z]*$/",$_POST['nama']))
	{
		echo 'HARUS MENGGUNAKAN HURUF KECIL SAJA';
	}
	else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
	{
		echo 'EMAIL SALAH';
	}
	elseif (!preg_match("/^[0-9+ ]*$/",$_POST['phone']))
	{
		echo 'Nomer Telepon Hanya Bisa Menggunakan Spasi angka dan tanda +';
	}
	else
	{
		echo 'Username : '.$_POST['nama'].'<br>';
		echo 'Email : '.$_POST['nama'].'<br>';
		echo 'Phone Number : '.$_POST['phone'].'<br>';
	}
}
?>