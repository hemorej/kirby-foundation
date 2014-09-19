<?php snippet('header') ?>
<?php snippet('menu') ?>


<div class="row medium-space-top">		
	<div class="small-12 medium-8 medium-push-2 columns">
			<h3><a href="<?php echo $page->url() ?>"><?php echo html($page->title()) ?></a></h3>
			<p class="text-left text-italic"><?php echo html($page->published()) ?></p>
	</div>
</div>
<div class="row">		
	<div class="small-12 medium-8 medium-push-2 columns">	
			<?php echo kirbytext($page->text()) ?>
			<p class="medium-space-top">
				<?php if($page->tags()) : ?>
					Tags: <?php foreach(str::split($page->tags()) as $tag): ?>
					<a href="<?php echo url('articles/tag:' . urlencode($tag)) ?>">#<?php echo html($tag) ?></a>
					<?php endforeach ?>
				<?php endif ?>
			</p>
			<p>    						
				<?php if($page->hasPrev()): ?>
				<a href="<?php echo $page->prev()->url() ?>">&laquo; Previous</a>
				<?php endif ?>
				
				<?php if($page->hasPrev() && $page->hasNext()): ?>
				|
				<?php endif ?>
				
				<?php if($page->hasNext()): ?>
				<a href="<?php echo $page->next()->url() ?>">Next &raquo;</a>
				<?php endif ?>
			</p>		
		</div>
	</div>	
</div>


<?php snippet('footer') ?>