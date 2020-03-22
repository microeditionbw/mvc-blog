				<!-- Main -->
					<div id="main">

						<?php foreach ($vars as $key => $value) { ?>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="#"><?php echo $value['header']; ?></a></h2>
										<p><?php echo $value['description']; ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php echo $value['date']; ?>"><?php echo $value['date']; ?></time>
										<a href="#" class="author"><span class="name"><?php echo $value['author']; ?></span><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
									</div>
								</header>
								<span class="image featured"><img src="<?php echo URLROOT; ?>/images/<?php echo $value['image']; ?>" alt="" /></span>
								<p><?php echo $value['content']; ?>.</p>
								<footer>
									<ul class="stats">
										<li><a href="#">General</a></li>
										<li><a href="#" class="icon solid fa-heart">28</a></li>
										<li><a href="#" class="icon solid fa-comment">128</a></li>
									</ul>
								</footer>
							</article>
						<?php }?>
						<!-- Post -->

					</div>