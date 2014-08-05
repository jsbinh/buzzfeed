<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = 'izzFeed';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?> - 
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css(array('layout', 'bootstrap.min', 'font-awesome.min'));
        echo $this->Html->script(array('jquery', 'jquery-ui', 'bootstrap', 'jssor.core', 'jssor.slider', 'jssor.utils'));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<?php
        App::import('Model', 'Post');
        $this->Post = new Post();

        $info = $this->Post->find('all', array(
            'conditions' => array(
                'Post.approved' => 1,
                'Post.delete_flg' => 0
            ),
            'fields' => array('id', 'title', 'url')
        ));
	?>
	<div class="container-fluid">
		<div class="header">
			<?php echo $this->element('header'); ?>
            <?php //echo $this->element('slider', array('info'=>$info)); ?>
		</div>

		<div class="content" id="content-width">
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content'); ?>
		</div>
		<div style="clear:both"></div>
		<div class="footer">
            <?php echo $this->element('footer'); ?>
		</div>
	</div>
</body>
</html>