<?php
    App::uses('ImageResizer', 'Utility');
    $tool = new ImageResizer();
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();

?>
<?php echo $this->element('index_column', array('newsest' => $newsest)) ?>

<div class="row-fluid sortable">
    <div class="col-md-8"  style="padding-left: 0px; padding-right:0px">
        <?php echo $this->element('column1', array('metadata' => $news)) ?>

        <?php //echo $this->element('column_ads') ?>
    </div>
    <div class="col-md-4">
        <!-- <p class="head-title"><b>izzFeed News</b></p> -->
        <?php echo $this->element('column2', array('news' => $news_col)); ?>
    </div>
</div>

