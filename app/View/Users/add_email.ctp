<?php
    App::uses('ImageResizer', 'Utility');
    $tool = new ImageResizer();
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();

?>

<?php echo $this->element('view_ads'); ?>

<div class="row">
    <div class="col-md-8 subcribing">
    	<p><h2>Thank You for Subscribing </h2></p>
    	<p>
			<h5>Thank you for subscribing to the izzfeed daily email. You're going to love it.</h5>
		</p>
    </div>
    <div class="col-md-4">
        <?php echo $this->element('column2_view', array('news'=>$news_col)) ?>
    </div>
</div>