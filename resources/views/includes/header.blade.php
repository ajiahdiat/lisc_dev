<nav class="navbar navbar-inverse navbar-fixed-top navbar-no-bg" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="top-navbar-1">
			<ul class="nav navbar-nav">
				<li><a href="{{ url('/home') }}"><i class="fa fa-home"></i></a></li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">Pengantar</a></li>
						<li><a href="{{ url('/visi_misi') }}">Visi & Misi</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Akademik <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('/playgroups') }}">Playgroups</a></li>
						<li><a href="{{ url('/kindergarten') }}">Kindergarten</a></li>
						<li><a href="{{ url('/daycare') }}">Day Care</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">Program <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="{{ url('/programs_kids') }}">Untuk Anak</a></li>
						<li><a href="{{ url('/programs_parents') }}">Untuk Orang Tua</a></li>
					</ul>
				</li>
				<li><a href="{{ url('/news') }}">Berita</a></li>
				<li><a href="{{ url('/gallery') }}">Galeri</a></li>
				<li><a class="scroll-link" href="#footer">Kontak</a></li>
				<li><a class="label-warning" href="{{ url('/join') }}">Bergabung!</a></li>
			</ul>
			<div class="navbar-text navbar-right">
				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-instagram"></i></a>
				<a href="#"><i class="fa fa-youtube"></i></a>
			</div>
		</div>
	</div>
</nav>