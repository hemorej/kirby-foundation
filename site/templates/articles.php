<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php	
	  $articles = $page->children()
	                    ->visible()
	                    ->flip()
	                    ->paginate(10);
?>

	<?php foreach($articles as $article): ?>

	<div class="row">		
		<div class="small-12 medium-8 small-centered columns">
			<p class="date"><?php echo html($article->published()) ?></p>
			<h2 class="article-title"><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
			<p>
				<?php echo $article->description() ?> <?php echo excerpt($article->text(), 800) ?> <a href="<?php echo $article->url() ?>">read more</a>
			</p>			
		</div>
	</div>
	<?php endforeach ?>
	<?php if($articles->pagination()->hasPages()): ?>
	<div class="row">		
		<div class="small-12 medium-8 small-centered columns">
			<p>    						
				<?php if($articles->pagination()->hasPrevPage()): ?>
				<a class="prev" href="<?= $articles->pagination()->prevPageURL() ?>">« Previous</a>
				<?php endif ?>
				
				<?php if($articles->pagination()->hasPrevPage() && $articles->pagination()->hasNextPage()): ?>
				|
				<?php endif ?>
				
				<?php if($articles->pagination()->hasNextPage()): ?>
				<a class="next" href="<?= $articles->pagination()->nextPageURL() ?>">Next  »</a>
				<?php endif ?>
			</p>			
		</div>
	</div>
	<?php endif ?>


<?php snippet('footer') ?>