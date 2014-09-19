<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php	
	  $articles = $page->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);
?>

	<?php foreach($articles as $article): ?>

<div class="row medium-space-top">		
	<div class="small-12 medium-8 medium-push-2 columns">
			<h3><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h3>
			<p class="text-left text-italic"><?php echo html($article->published()) ?></p>

			<p>
				<?php echo $article->description() ?> <?php echo excerpt($article->text(), 800) ?> 
				<br />
				<a href="<?php echo $article->url() ?>">read more &raquo;</a>
			</p>			
		</div>
	</div>
	<?php endforeach ?>
	<?php if($articles->pagination()->hasPages()): ?>
	<div class="row">		
		<div class="small-12 medium-8 small-centered columns">
			<p>    						
				<?php if($articles->pagination()->hasPrevPage()): ?>
				<a href="<?= $articles->pagination()->prevPageURL() ?>">&laquo; Previous</a>
				<?php endif ?>
				
				<?php if($articles->pagination()->hasPrevPage() && $articles->pagination()->hasNextPage()): ?>
				|
				<?php endif ?>
				
				<?php if($articles->pagination()->hasNextPage()): ?>
				<a href="<?= $articles->pagination()->nextPageURL() ?>">Next  &raquo;</a>
				<?php endif ?>
			</p>			
		</div>
	</div>
	<?php endif ?>


<?php snippet('footer') ?>