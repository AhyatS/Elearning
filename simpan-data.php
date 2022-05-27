<html>
<head>
<meta charset="UTF-8">
<title>QUIZ</title>
</head>
<body>
<h2> Isilah Soal Berikut ini</h2>
<table>
<form method="post" action="">
	<tr><td>Nama : </td><td><input type="text" name="nama" style="width:300px"></td></tr>
	<tr><td>Kelas: </td><td><textarea name="data" style="width:300px"></textarea></td></tr>
    <tr><td>Soal 1</tr></td>
    <tr><td>siapa penemu rujak?</tr></td>
    <tr><td><textarea name="soal1" style="width:300px"></textarea></td></tr>
	<tr><td></td><td><input type="submit" name="ok" value="Simpan"></td></tr>
</form>
</table>
<?php
if(isset($_POST['ok'])){
	if(empty($_POST['nama']) || empty($_POST['data'])){
		print "Lengkapi form";
	} else{
		$nama=$_POST['nama'];
		$data=$_POST['data'];
        $soal1=$_POST['soal1'];
		$tanggal=date("h:i:s");
		$buka=fopen("hasil.html",'a');
		fwrite($buka,"nama : ${nama} <br>" );
		fwrite($buka,"dibuat : ${tanggal} <br> ");
		fwrite($buka,"isi : ${data} <br> ");
        fwrite($buka,"soal1 : ${soal1} <br> ");
		fwrite($buka,"<hr>");
		fclose($buka);
		print "data berhasil disimpan";
	}
}
?>
</body>
</html>