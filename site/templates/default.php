<?php snippet('header') ?>
<?php snippet('menu') ?>

<div class="row medium-space-top">
	<section class="small-12 medium-8 medium-push-2 columns">
	  <article>
	    <?php echo kirbytext($page->text()) ?>
	  </article>
	</section>
</div>

<?php snippet('footer') ?>