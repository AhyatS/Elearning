<html>
<head>
<meta charset="UTF-8">
<title>QUIZ</title>
<style>
	body{
		background-color:lightgreen;
		text-align:center;
	}
	</style>
</head>
<body>
<h2> Isilah Soal Berikut ini</h2>
<table>
<form method="post" action="">
	<tr><td>Nama : </td><td><input type="text" name="nama" style="width:300px"></td></tr>
	<tr><td>Kelas: </td><td><textarea name="kelas" style="width:300px"></textarea></td></tr>
	<tr><td><ol start="1" type="a">
Pilihan Ganda<br><br>
isi lah asdhaskdhasd<br><i>
<input type="radio" name="NO1" value="a">a. Text.<p>
<input type="radio" name="NO1" value="b">b. LINUX<p>
<input type="radio" name="NO1" value="c">c. Machintos<p>
<input type="radio" name="NO1" value="d">d. Password<p>
<input type="radio" name="NO1" value="e">e. UNIX<p>
</i> 
</ol></tr></td><tr><td><ol start="1" type="a">
blablablalbla<br><i>
<input type="radio" name="no2" value="a">a. Text.<p>
<input type="radio" name="no2" value="b">b. LINUX<p>
<input type="radio" name="no2" value="c">c. Machintos<p>
<input type="radio" name="no2" value="d">d. Password<p>
<input type="radio" name="no2" value="e">e. UNIX<p>
</i> 
</ol></tr></td>
    <tr><td>Soal 1</tr></td>
    <tr><td>siapa penemu rujak?</tr></td>
    <tr><td><textarea name="soal1" style="width:300px"></textarea></td></tr>
	<tr><td></td><td></td></tr>
	<tr><td><input type="submit" name="ok" value="Simpan"><input type=reset value=Reset><input type="button" value="Go Back" onclick="history.back(-1)"></td></tr> 
</form>
</table>
<?php
if(isset($_POST['ok'])){
	if(empty($_POST['nama']) || empty($_POST['kelas'])){
		print "Lengkapi form";
	} else{
		$nama=$_POST['nama'];
		$data=$_POST['kelas'];
		$NO1=$_POST['NO1'];
		$no2=$_POST['no2'];
        $soal1=$_POST['soal1'];
		date_default_timezone_set('Asia/Jakarta');
		$tanggal=date("h:i:s");
		$buka=fopen("hasil.html",'a');
		fwrite($buka,"nama : ${nama} <br>" );
		fwrite($buka,"Kelas : ${data} <br> ");
		fwrite($buka,"dibuat : ${tanggal} <br> ");
		fwrite($buka,"NO1 : ${NO1} <br> " );
		fwrite($buka,"no2 : ${no2} <br> " );
        fwrite($buka,"soal1 : ${soal1} <br> ");
		fwrite($buka,"<hr>");
		fclose($buka);
		print "data berhasil disimpan";
	}
}
?>
</body>
</html>