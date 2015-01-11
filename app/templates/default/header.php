<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<title><?php echo $data['title'].' - '.SITETITLE; ?></title>

	<!-- CSS -->
	<?php
	helpers\assets::css(array(
		helpers\url::template_path() . 'assets/css/style.css',
	))
	?>

</head>
<body>

<div class="container">
