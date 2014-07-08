<?php
    App::uses('ImageResizer', 'Utility');
    App::import('Model', 'Post');
    $this->Post = new Post();

?>
<div class="container">
    <div class="row">
        <div class="col-md-8" style="margin-bottom: 10px">
            <table class="">
                <tbody>
                    <tr>
                        <td>
                            <?php echo $this->Html->image('large_img/demo-large.jpg', array('class'=>'img-thumbnail'))?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <table class="table-bordered">
                <tbody>
                    <tr>
                        <td width="350" height="250">
                            Logo
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <!-- <p class="head-title">&nbsp;</p> -->
            <table class="table table-striped table-condensed">
                <tbody>
                    <?php
                        if(!empty($news)){
                            foreach ($news as $data) {
                                ImageResizer::prepare($this->Html->image('upload/'.$data['Post']['url']));
                                ImageResizer::resize(120,240);
                                ImageResizer::save($this->Html->image('upload/'.'medium'.$data['Post']['url']))
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $this->Html->image('upload/'.$data['Post']['url'], array('height'=>83, 'width'=>125, 'url'=>array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title']))))?>
                                    </td>
                                    <td align="justify">
                                        <p>
                                            <?php
                                                echo $this->Html->link($data['Post']['title'], array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), array('class'=>'title'));
                                                echo '<br>';
                                                echo $data['Post']['summary'];
                                            ?>
                                        </p>
                                        <?php echo $this->Html->image('user8.png'); ?> <span class="small-meta">Andrew Kaczynski</span> &nbsp;
                                        <?php echo $this->Html->image('time8.png'); ?> <span class="small-meta">15 minutes ago</span> &nbsp;
                                         <?php echo $this->Html->image('comment9.png'); ?> <span class="small-meta">4 responses</span>
                                    </td>
                                </tr>
                            <?php }} ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <p class="head-title"><b>izzFeed News</b></p>
            <?php echo $this->element('column2_news', $news); ?>
        </div>
        <div class="col-md-2">
            <p class="head-title"><b>Trending</b></p>
            <?php echo $this->element('column3'); ?>
        </div>
    </div>
</div>
