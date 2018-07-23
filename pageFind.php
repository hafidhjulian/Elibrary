<?php
    include_once("koneksi.php");
    $search = $_POST['search'];
    $query= mysqli_query($db,"SELECT judul, penerbit, tahun, posisi FROM perpus WHERE judul LIKE '%$search%'");

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>E-Library Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/pageFind.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
        <div class="container-fluid" id="header">
                <nav class="navbar navbar-expand-sm navbar-tranparent">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><img src="assets/images/logoakpol.png"></a> 
                    <!-- <div class="collapse navbar-collapse" id="beranda">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#login">Login</a>
                            </li>
                        </ul>   
                    </div> -->
                </nav>
            <div class="container">
                <div class="row">
                    <div class="col-md-3" id="kolcar">
                        <form action="pageFind.php" method="post">
                            <input type="text" class="form-control" placeholder="Search.." name="search">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" id="tabble">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Judul Buku</th>
                                        <th>Penerbit</th>
                                        <th>Tahun Terbit</th>
                                        <th>Posisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                
                                        while($row=mysqli_fetch_array($query)){
                                            echo '<tr>
                                                    <td>'.$row['judul'].'</td>
                                                    <td>'.$row['penerbit'].'</td>
                                                    <td>'.$row['tahun'].'</td>
                                                    <td>'.$row['posisi'].'</td>
                                                </tr>';
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</body>
</html>