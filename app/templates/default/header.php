<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>

	<!-- Site meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title><?php echo $data['title'].' - '.SITETITLE; ?></title>

	<!-- CSS -->
	<?php
	helpers\Assets::css(array(
		helpers\Url::template_path() . 'assets/css/style.css',
	))
	?>

</head>
<body>