<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php echo $this->fetch('title'); ?>
		</title>
		<?php
			echo $this->Html->meta('icon');

			echo $this->Html->css('inc/theme');
			echo $this->Html->css('inc/iconfont');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');
		?>
		<link rel="stylesheet" href="//cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" >
	</head>
	<body>
		<div id="header">
			<nav class="navbar navbar-expand-md bg-primary navbar-dark">
				<div class="container">
					<a class="navbar-brand" href="./">
						<i class="fa d-inline fa-youtube-play"></i>
						<b>&nbsp;Youtube</b>
					</a>
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
				</div>
			</nav>
		</div>
		<div id="content">
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
		</div>
	</body>
</html>
