<?php

/**
 * li₃: the most RAD framework for PHP (http://li3.me)
 *
 * Copyright 2009, Union of RAD. All rights reserved. This source
 * code is distributed under the terms of the BSD 3-Clause License.
 * The full license text can be found in the LICENSE.txt file.
 */
?>
<!doctype html>
<html>

<head>
	<?php echo $this->html->charset(); ?>
	<title>Application &gt; <?php echo $this->title(); ?></title>
	<?php echo $this->html->style(['bootstrap.min', 'lithified']); ?>
	<?php echo $this->scripts(); ?>
	<?php echo $this->styles(); ?>
	<?php echo $this->html->link('Icon', null, ['type' => 'icon']); ?>
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="lithified">
	<div class="container">
		<div class="masthead">
			<a href="http://li3.me/">
				<h3>&#10177;</h3>
			</a>
		</div>

		<hr>

		<div class="content">
			<?php echo $this->content(); ?>
		</div>

		<hr>

		<div class="footer">
			<p>&copy; Todo <?php echo date('Y') ?></p>
		</div>

	</div>
</body>

</html>