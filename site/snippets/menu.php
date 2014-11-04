	<div class="contain-to-grid sticky">
	  <nav class="top-bar" data-topbar role="navigation">
	  	<ul class="inline-list title-area">
	  	  <li class="name"></li>
	  	  <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
	  	</ul>

	  	<section class="top-bar-section">
  		  <ul class="left">
		    <?php foreach($pages->visible() AS $p): ?>
		    <li><h3><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></h3></li>
		    <?php endforeach ?>
		  </ul>
		</section>
		</nav>
	</div>