<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <?php echo js('assets/js/vendor/modernizr.js') ?>
  <?php echo css('assets/styles/app.css') ?>
  <?php echo css('assets/styles/kudos.css') ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

</head>

<body>
  <?php $assetUrl = kirby()->urls()->assets() . "/images/";
  $default = $assetUrl . "1600x400.jpg";
  $large = $assetUrl . "2500x400.jpg";
  ?>

  <img data-interchange="[<?php echo $default; ?>, (default)], [<?php echo $large; ?>, (large)]">
  <noscript><img src="<?php echo $default; ?>"></noscript>
  <div class="row">
	  <header class="small-12 small-centered medium-12 columns">
	    <h1><a href="<?php echo url() ?>"> <?php echo html($site->title()) ?> </a></h1>
	  </header>
  </div>