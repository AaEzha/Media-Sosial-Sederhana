<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Media Sosial - Komentar</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="container">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href=".">MedSos</a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="active"><a href=".">Beranda</a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>

		<?php
		include 'db.php';
		$db = new Database();
		$db->connect();

		// data postingan
		$id = $db->escapeString(trim($_GET['id']));
		$db->select('postingan','nama, pesan',null,"id='$id' and parent='0'");
		$parent = $db->getResult();
		?>

		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel panel-default">
							<div class="panel-heading">
								<?=$parent[0]['nama'];?>
							</div>
							<div class="panel-body">
								<?=$parent[0]['pesan'];?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title">Apa pendapatmu?</h3>
							</div>
							<div class="panel-body">
								<form action="simpan_komentar.php" method="POST" role="form">

									<input type="hidden" name="id" id="inputId" class="form-control" value="<?=$_GET['id'];?>">
								
									<div class="form-group">
										<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Anda" required>
									</div>
								
									<div class="form-group">
										<textarea name="pesan" id="inputPesan" class="form-control" rows="3"placeholder="Pesan Anda" required></textarea>
									</div>
								
									<button type="submit" class="btn btn-primary">Kirim</button>
								</form>
							</div>
						</div>

						<?php
						$db->select('postingan','nama, pesan',null,"parent='$id'",'waktu desc');
						$komentar = $db->getResult();
						foreach($komentar as $data){ ?>

						<div class="panel panel-info">
							<div class="panel-heading">
								<h3 class="panel-title"><?=$data['nama'];?></h3>
							</div>
							<div class="panel-body">
								<?=$data['pesan'];?>
							</div>
						</div>

						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>