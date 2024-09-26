<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get dan Post</title>
</head>
<body>
    <h1>Mengirimkan data dengan method GET</h1><br>
    <a href="harike8/link1.php/index.php?halaman=link1&nama=MUTIA">Link1</a>


    <hr>
    <h1>Mengirimkan data dengan method POST</h1>
    <form action ="harike8/link2.php/index.php?halaman=link2" method="post">

<div class ="b-3">
    <label for="Nama" class="form-label"><b>Nama</b></label>
    <input type ="text" name="nama" id="nama" class="form-control">
</div>

<div class="mb-3">
    <label for="Kelas" class="form-label"><b>Kelas</b></label>
    <select name="Kelas" id="Kelas" class="form-control">
        <option value="XI RPL 1">XI RPL 1</option>
        <option value="XI RPL 2">XI RPL 2</option>
        <option value="X RPL 1">X RPL 1</option>
        <option value="X RPL 2">X RPL 2</option>
</select>
</div>

<div class="mb-3">
    <label for ="jk" class="form-label"><b>Jenis Kelamin</b></label>
    <select name="jk" id="jk" class="form-control">
    <option value="Perempuan">Perempuan</option>
    <option value="Laki-Laki">Laki-Laki</option>
</select>
</div>
    <button type="submit"><b>Kirim</b></button>
</from>
</body>
</html>