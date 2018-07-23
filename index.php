<?php


?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>E-Library Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.2/chosen.css"></script>
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
        <div class="container-fluid">
            <div class="container">
                <nav class="navbar navbar-expand-sm fixed-top">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><img src="assets/images/logoakpol.png"></a> 
                    <!-- <div class="collapse navbar-collapse" id="beranda">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn text-center" href="#" data-toggle="modal" data-target="#login" id="btnlogin">Login</a>
                                    <div id="login" class="modal fade modal-show">      
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h4 class="modal-title judmod">Login</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>

                                                <div class="modal-body">
                                                    <form class="action" method="POST" >
                                                        <div class="form-group">
                                                            <label for="email">Username:</label>
                                                            <input type="text" class="form-control" id="email" placeholder="Enter username" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="pwd">Password:</label>
                                                            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                                        </div>
                                                        <button type="submit" class="btn btn-primary btnlogin">Submit</button>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>   
                    </div> -->
                </nav>
            </div>
        </div>
        <div class="container-fluid" id="perpus">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center" id="judcar">
                        <h1><b>Akpol Library</b></h1>
                        <h2>Find your book and document</h2>
                    </div>
                </div>
                <div class="searchwrapper">
                    <div class="searchbox">
                        <div class="row">
                            <div class="col-md-10 cari">
                                <form action="pageFind.php" method="post">
                                    <input type="text" name="search" class="form-control" placeholder="Search by Keywords...">
                                </form>
                            </div>
                            <div class="col-md-1"><a class="btn" class="form-control"><span class="fa fa-search"></span></a></div>
                        </div>
                    </div>
                </div>
                <div class="row" id="disc">
                    <div class="col-md-12 text-center">
                        <a href="discover.php"><button type="button" class="btn btn-danger" id="butdis">Discover</button></a>
                    </div>
                </div>
            </div>
         </div>
	</body>
</html>

