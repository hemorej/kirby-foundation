<?php 

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
	$param = $_GET['kudos'];
	$current = 0;
	if($file = $page->file('kudos.md')){
		$current = file_get_contents($page->file('kudos.md'));
	}

	if(null == $param){
		echo $current;
	}else{
		$param == 'plus' ? ++$current : --$current;
		file_put_contents ( $page->root().'/kudos.md', $current);
	}
	return;
}
?>

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
			<?php 

			echo kirbytext($page->text()) ;
			if($page->hasImages()){
				$image = $page->image();

				$small = thumb($image, array('width' => 300))->url() ;
				$medium = thumb($image, array('width' => 600))->url() ;
				$large = thumb($image, array('width' => 900))->url() ; ?>

  				<img data-interchange="[<?php echo $medium; ?>, (default)], [<?php echo $small; ?>, (small)], [<?php echo $medium; ?>, (medium)], [<?php echo $large; ?>, (large)]" >
  				<noscript><img src="<?php echo $large; ?>"></noscript>
			<?php } ?>

			<p class="medium-space-top"></p>

			<figure class="kudo kudoable" data-id="1">
			        <a class="kudobject">
			            <div class="opening">
			            	<span style="margin-left:-80px" class="num">0</span> Kudos
			                <div class="circle">&nbsp;</div>
			            </div>
			        </a>
			</figure>

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