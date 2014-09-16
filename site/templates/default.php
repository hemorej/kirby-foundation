<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row">
	<section class="small-12 medium-8 small-centered columns">
	  <article>
	    <h2><?php echo html($page->title()) ?></h2>
	    <?php echo kirbytext($page->text()) ?>
	  </article>
	</section>
</div>

<?php snippet('footer') ?>