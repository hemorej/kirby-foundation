<?php snippet('header') ?>
<?php snippet('menu') ?>


<div class="row medium-space-top">		
	<div class="small-12 small-centered medium-12 columns">
			<h3><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h3>
			<p class="text-left text-italic"><?php echo html($page->published()) ?></p>
	</div>
</div>
<div class="row">		
	<div class="small-12 small-centered medium-12 columns">	
			<?php echo kirbytext($page->text()) ?>
			<p class="medium-space-top">
				<?php if($page->tags()) : ?>
					Tags: <?php foreach(str::split($page->tags()) as $tag): ?>
					<a href="<?php echo url('articles/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
					<?php endforeach ?>
				<?php endif ?>
			</p>
					
				<?php if($page->hasPrev()): ?>
					<span class="left">
						<a href="<?php echo $page->prev()->url() ?>">&laquo; Previous</a>
					</span>
				<?php endif ?>
				
				<?php if($page->hasNext()): ?>
					<span class="right">
						<a href="<?php echo $page->next()->url() ?>">Next &raquo;</a>
					</span>
				<?php endif ?>

		</div>
	</div>	
</div>
<div class="row">
	<div class="small-12 small-centered medium-12 columns">
		<?php snippet('disqus', array('disqus_shortname' => c::get('disqus_username'))) ?>
	</div>
</div>
<?php snippet('footer') ?>