<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<?php Assets::load("css,cdn"); ?>
</head>
<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<h1><a href="<?php echo URLROOT; ?>"><?php echo sitename; ?></a></h1>
						<nav class="links">
							<ul><?php $nav = new NavController(); $nav->instance();?></ul>
						</nav>

						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">Поиск</a>
									<form id="search" method="get" action="<?php echo  URLROOT . "main/search/"; ?>">
										<input type="text" name="query" placeholder="Поиск" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">Меню</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form id="search" method="get" action="<?php echo  URLROOT . "main/search/"; ?>">
									<input type="text" name="query" placeholder="Поиск" />
								</form>
							</section>

						<!-- Links -->
							<section>
							<ul class="links"><?php $nav->instance(); ?></ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Войти</a></li>
								</ul>
							</section>

					</section>
					
				<div class="container">
					<div class="row">
						<div class="col-md-12"><?php echo $content; ?></div>
					</div>
				</div>


			</div>



		<!-- Scripts -->
		<?php Assets::load('js'); ?>

	</body>
</html>