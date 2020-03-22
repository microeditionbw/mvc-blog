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
							<ul>
							<?php $nav = require_once "app/config/navigation.php";
							foreach ($nav as $key => $value) {
								echo '<li><a href="'. URLROOT . $key.'">'.$value["text"]."</a></li>";
							}
							?>
							</ul>
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
							<ul class="links">
								<?php
								foreach ($nav as $key => $value) {
									echo '<li><a href="'. URLROOT . $key.'">'.$value["text"]."</a></li>";
								}
								?>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Войти</a></li>
								</ul>
							</section>

					</section>

				<?php echo $content; ?>


				<!-- Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="#" class="logo"><img src="<?php echo URLROOT; ?>/images/logo.jpg" alt="" /></a>
								<header>
									<h2><a href="<?php echo URLROOT; ?>"><?php echo sitename; ?></a></h2>
								</header>
							</section>

						<!-- Mini Posts -->
							<section>
								<div class="mini-posts">

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Vitae sed condimentum</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
												<a href="#" class="author"><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic04.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Rutrum neque accumsan</a></h3>
												<time class="published" datetime="2015-10-19">October 19, 2015</time>
												<a href="#" class="author"><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic05.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Odio congue mattis</a></h3>
												<time class="published" datetime="2015-10-18">October 18, 2015</time>
												<a href="#" class="author"><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic06.jpg" alt="" /></a>
										</article>

									<!-- Mini Post -->
										<article class="mini-post">
											<header>
												<h3><a href="single.html">Enim nisl veroeros</a></h3>
												<time class="published" datetime="2015-10-17">October 17, 2015</time>
												<a href="#" class="author"><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic07.jpg" alt="" /></a>
										</article>

								</div>
							</section>

						<!-- Posts List -->
							<section>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><a href="single.html">Lorem ipsum fermentum ut nisl vitae</a></h3>
												<time class="published" datetime="2015-10-20">October 20, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic08.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Convallis maximus nisl mattis nunc id lorem</a></h3>
												<time class="published" datetime="2015-10-15">October 15, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic09.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Euismod amet placerat vivamus porttitor</a></h3>
												<time class="published" datetime="2015-10-10">October 10, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic10.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Magna enim accumsan tortor cursus ultricies</a></h3>
												<time class="published" datetime="2015-10-08">October 8, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic11.jpg" alt="" /></a>
										</article>
									</li>
									<li>
										<article>
											<header>
												<h3><a href="single.html">Congue ullam corper lorem ipsum dolor</a></h3>
												<time class="published" datetime="2015-10-06">October 7, 2015</time>
											</header>
											<a href="single.html" class="image"><img src="<?php echo URLROOT; ?>/images/pic12.jpg" alt="" /></a>
										</article>
									</li>
								</ul>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>About</h2>
								<p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod amet placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at phasellus sed ultricies.</p>
								<ul class="actions">
									<li><a href="<?php echo URLROOT;?>main/about" class="button">Подробнее</a></li>
								</ul>
							</section>

						<!-- Footer -->
							<section id="footer">
								<ul class="icons">
									<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>

					</section>

			</div>



		<!-- Scripts -->
		<?php Assets::load('js'); ?>

	</body>
</html>