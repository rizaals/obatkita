	<nav>
		<div class="">
			<!-- Static navbar -->
			<nav class="navbar navbar-default navbar-orange flat-navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- <a class="navbar-brand" href="#">ObatOnline.com</a> -->
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li id="1"><a href="./../index.php">Beranda</a></li>
							<li id="2"><a href="./../masterobat.php">Master Obat</a></li>
							<li id="3" class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Transaksi <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li id="31"><a href="./../transaksi/inputpesanan.php">Input Pesanan</a></li>
									<li id="32"><a href="./../transaksi/inputobat.php">Input Obat Baru</a></li>
									<li role="separator" class="divider"></li>
									<li class="dropdown-header">Transaksi Harian</li>
									<li id="33"><a href="./../transaksi/daftarpesanan.php">Semua Pesanan</a></li>
									<li id="34"><a href="./../transaksi/pembayaran.php">Pembayaran</a></li>
									<li id="35"><a href="./../transaksi/pengiriman.php">Pengiriman</a></li>
									<!-- <li role="separator" class="divider"></li>
									<li class="dropdown-header">Obat Kadaluarsa</li>
									<li id="36"><a href="Kadaluarsa.php">Obat Kadaluarsa</a></li> -->
								</ul>
							</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li id="5"><a href="./../about.php">Tentang Obat Kita</a></li>
							<!-- <li id="6"><a href="./../bulletin.php">Bulletin</a></li> -->
							<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-user"></i>
								<span class="caret"></span>
								<?php echo  $_SESSION['user_nama']; ?>
							</a>
							<ul class="dropdown-menu">
								<li>
									<form action="./../login.php" method="post">
										<input type="submit" name="logout" value="Logout" class="btn flat btn-block">
									</form>
								</li>
							</ul>
						</li>
						</ul>
					</div><!--/.nav-collapse -->
				</div><!--/.container-fluid -->
			</nav>
		</div>
	</nav>