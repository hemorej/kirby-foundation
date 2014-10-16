<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <script src="assets/js/vendor/jquery.js"></script>
  <script src="assets/js/vendor/modernizr.js"></script>
  <script src="assets/js/foundation/foundation.min.js"></script>
  <script src="assets/js/foundation/foundation.topbar.js"></script>

  <?php echo css('assets/styles/app.css') ?>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link rel="alternate" type="application/rss+xml" href="<?php echo url('feed') ?>" title="Feed | <?php echo html($site->title()) ?>" />

</head>

<body>
  <div class="row">
	  <header class="small-12 small-centered medium-12 large-8 columns">
	    <h1><a href="<?php echo url() ?>"> <?php echo html($site->title()) ?> </a></h1>
	  </header>
  </div>