<?php snippet('header') ?>
<?php snippet('menu') ?>

<?php	
	  $articles = $page->children()
	                    ->visible()
	                    ->paginate(10);
?>

	<?php foreach($articles as $article): ?>

<div class="row medium-space-top">		
	<div class="small-12 small-centered medium-12 columns">
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
		<div class="small-12 small-centered medium-12 columns">
			<?php if($articles->pagination()->hasPrevPage()): ?>
				<span class="left">
					<a href="<?= $articles->pagination()->prevPageURL() ?>">&laquo; Previous</a>
				</span>
			<?php endif ?>
			
			<?php if($articles->pagination()->hasNextPage()): ?>
				<span class="right">
					<a href="<?= $articles->pagination()->nextPageURL() ?>">Next  &raquo;</a>
				</span>
			<?php endif ?>	
		</div>
	</div>
	<?php endif ?>


<?php snippet('footer') ?>