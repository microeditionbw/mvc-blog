
				<!-- Main -->
					<div id="main">
						<?php foreach ($vars['article'] as $key => $value) { ?>
						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a href="<?php echo URLROOT; ?>article/show/<?php echo $value['id']; ?>"><?php echo $value['header']; ?></a></h2>
										<p><?php echo $value['description']; ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php echo $value['date']; ?>"><?php echo $value['date']; ?></time>
										<a href="<?php echo URLROOT; ?>article/show/<?php echo $value['id']; ?>" class="author"><span class="name"><?php echo $value['author']; ?></span><img src="<?php echo URLROOT; ?>/images/avatar.jpg" alt="" /></a>
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
						<?php } ?>


						<!-- Pagination -->
							<ul class="actions pagination">
								<li><a href="<?php echo URLROOT . "main/index/"; ?>?p=<?php echo ($vars['page'] > 0 ? $vars['page'] - 1 : "0"); ?>" id="0" class="<?php echo ($vars['page'] > 0 ? "" : "disabled"); ?> button large previous">Previous Page</a></li>
								<li><a href="<?php echo URLROOT . "main/index/"; ?>?p=<? echo $vars['page'] + 1; ?>" id="0" class="<?php echo ($vars['nextExist'] == 0 ? "disabled" : ""); ?> button large next">Next Page</a></li>
							</ul>

					</div>