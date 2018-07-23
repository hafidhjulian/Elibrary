<?php

include_once("koneksi.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: pageAdmin.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM perpus WHERE id=$id";
$query = mysqli_query($db, $sql);
$perp = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>E-Library Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/pageAdmin.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="proEdit.php" method="POST">
                        	<!-- <div class="form-group"> -->
                                <!-- <label for="id">Nomor:</label> -->
                                <input type="hidden" name="id" class="form-control" id="nomor" value="<?php echo $perp['id'] ?>">
                            <!-- </div> -->
                            <div class="form-group">
                                <label for="judul">Judul buku:</label>
                                <input type="text" name="judul" class="form-control" id="judul" value="<?php echo $perp['judul'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="terbit">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" id="terbit" value="<?php echo $perp['penerbit'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun Terbit:</label>
                                <?php $tahun = $perp['tahun'];?>
                                <select name ="tahun" class="form-control" id="tahun" required>
                                    <option <?php echo $tahun;?>><?php echo $tahun ;?></option>
                                    <?php
                                        $tahun_sekarang = date('Y');
                                        for($x=$tahun_sekarang; $x>=2000;$x--){ ?>
                                        <option value="<?php echo $x;?>"><?php echo $x;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pos">Posisi:</label>
                                <!-- <input type="text" name="posisi" class="form-control" id="posisi" value="<?php echo $perp['posisi'] ?>"> -->
                                <?php $rak = $perp['posisi'];?>
                                <select name ="posisi" class="form-control" id="posisi" required>
                                    <option <?php echo $rak;?>><?php echo $rak ;?></option>
                                    <?php
                                        $rak = 1;
                                        for($x=$rak; $x<=10;$x++){ ?>
                                        <option value="Rak <?php echo $x;?>">Rak <?php echo $x;?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Submit</button>
                            <!-- <button type="button" class="btn btn-primary" id="btnup" onclick="document.getElementById('inputFile').click()">Upload</button>
                                <div class="form-group inputDnD">
                                    <label class="sr-only" for="inputFile">File Upload</label>
                                    <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept=".pdf,.doc,.csv,.jpg,.rar" onchange="readUrl(this)" data-title="Drag and drop a file">
                                </div> -->
                        </form> 

                    </div>
                </div>
            </div>
        </div>
	</body>
</html>