	<div class="contain-to-grid sticky">
	  <nav class="top-bar" data-topbar role="navigation">
	  	<ul class="inline-list title-area">
	  	  <li class="name"></li>
	  	  <li class="toggle-topbar"><a href="#"><span>Menu</span></a></li>
	  	</ul>

	  	<section class="top-bar-section">
	  		<ul class="left medium-push-2">
		    <?php foreach($pages->visible() AS $p): ?>
		    <li><h2><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $p->url() ?>"><?php echo html($p->title()) ?></a></h2></li>
		    <?php endforeach ?>
		  </ul>
		</section>
		</nav>
	</div>


<!--
<div class="row">
	<nav class="small-12 medium-centered medium-8 columns">
	  <ul class="inline-list">
	    <?php //foreach($pages->visible() AS $p): ?>
	    <li><h2><a<?php //echo ($p->isOpen()) ? ' class="active"' : '' ?> href="<?php //echo $p->url() ?>"><?php //echo html($p->title()) ?></a></h2></li>
	    <?php //endforeach ?>
	  </ul>
	</nav>
</div>
medium-centered medium-8 columns
-->