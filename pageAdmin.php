<?php
    include("koneksi.php");
    session_start();
    if($_SESSION['status']!="login"){
        header('location: login.php');
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
        <nav class="navbar navbar-expand-sm bg-light navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand">
                <img src="assets/images/logoakpol.png">
            </a> 
            <div class="collapse navbar-collapse" id="beranda">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"><?php echo $_SESSION['username']?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proses-logout.php">Logout</a>
                    </li>
                </ul>   
            </div>
        </nav>
        <div>
            <?php if(isset($_GET['status'])):?>
            <h6 style="text-align:center; color:blue; margin-top:10px;">
                <?php
                    if($_GET['status'] == 'sukses'){
                        echo "Penambahan informasi buku baru berhasil!";
                    } else {
                        echo "Penambahan gagal!";
                    }
                ?>
            </h6>
            <?php endif; ?>
        </div>
        <div class="container">
            <h1 class="display-5" id="judadmin">ADMIN</h1>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <form action="tambah.php" method="POST">
                            <div class="form-group">
                                <label for="judul">Judul buku:</label>
                                <input type="text" name="judul" class="form-control" id="judul" required>
                            </div>
                            <div class="form-group">
                                <label for="terbit">Penerbit:</label>
                                <input type="text" name="penerbit" class="form-control" id="terbit" required>
                            </div>
                            <div class="form-group">
                                <label for="tahun">Tahun Terbit:</label>
                                <!-- <input type="text" name="tahun" class="form-control" id="tahun"> -->
                                <select name ="tahun" class="form-control" id="tahun" required>
                                    <option value="">Silahkan masukan tahun terbit</option>
                                    <?php
                                        $tahun_sekarang = date('Y');
                                        for($x=$tahun_sekarang; $x>=2000;$x--){
                                    ?>
                                        <option value="<?php echo $x?>"><?php echo $x?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="pos">Posisi:</label>
                                <!-- <input type="text" name="posisi" class="form-control" id="pwd" required> -->
                                <select name ="posisi" class="form-control" id="posisi" required>
                                    <option value="">Silahkan masukan posisi rak buku</option>
                                    <?php
                                        $rak = 1;
                                        for($x=$rak; $x<=10;$x++){
                                    ?>
                                        <option value="Rak <?php echo $x?>">Rak <?php echo $x?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
                            <!-- <button type="button" class="btn btn-primary" id="btnup" onclick="document.getElementById('inputFile').click()">Upload</button>
                                <div class="form-group inputDnD">
                                    <label class="sr-only" for="inputFile">File Upload</label>
                                    <input type="file" class="form-control-file text-primary font-weight-bold" id="inputFile" accept=".pdf,.doc,.csv,.jpg,.rar" onchange="readUrl(this)" data-title="Drag and drop a file">
                                </div> -->
                        </form>
                        <br> 

                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="tabdat">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Penerbit</th>
                                    <th>Tahun Terbit</th>
                                    <th>Posisi</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sql = "SELECT * FROM perpus";
                                $query = mysqli_query($db, $sql);

                                while($perp = mysqli_fetch_array($query)){
                                    echo "<tr>";

                                    echo "<td>".$perp['judul']."</td>";
                                    echo "<td>".$perp['penerbit']."</td>";
                                    echo "<td>".$perp['tahun']."</td>";
                                    echo "<td>".$perp['posisi']."</td>";

                                    echo "<td>";
                                    echo "<a href='edit.php?id=".$perp['id']."'>Edit</a> | ";
                                    echo "<a href='hapus.php?id=".$perp['id']."'>Hapus</a>";
                                    echo "</td>";

                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>