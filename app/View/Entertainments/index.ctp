<?php
    App::uses('ImageResizer', 'Utility');
    $tool = new ImageResizer();
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();
?>

<div class="row">
    <div class="col-md-8" style="margin-bottom: 10px">
        <table class="">
            <tbody>
                <tr>
                    <td>
                        <div class="img-large" id="splash-overlay" style="padding-left: 20px;">
                            <?php
                            if(!empty($newsest)){
                                echo $this->Html->image('upload/'.$newsest['Post']['url'], array('height'=>280, 'width'=>745, 'url'=>array('controller'=>'Entertainments', 'action'=>'view', $newsest['Post']['id'], $this->Post->convertToEn($newsest['Post']['title']))));
                            ?>

                            <div class="title-img-large">
                                <div class="splash-desc">
                                    <?php
                                    	echo $this->Html->link($newsest['Post']['title'], array('controller'=>'Entertainments', 'action'=>'view', $newsest['Post']['id'], $this->Post->convertToEn($newsest['Post']['title'])), array('class'=>'img_url'));
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="col-md-4">
        <table class="table-bordered">
            <tbody>
                <tr>
                    <td width="336" height="280">
                        <SCRIPT charset="utf-8" type="text/javascript" src="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Foriodeal0f-20%2F8003%2F733a227a-91b7-4e6a-9bc2-752a2693a3c9&Operation=GetScriptTemplate"> </SCRIPT> <NOSCRIPT><A HREF="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Foriodeal0f-20%2F8003%2F733a227a-91b7-4e6a-9bc2-752a2693a3c9&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div class="row-fluid sortable">
    <div class="col-md-6">
        <!-- <p class="head-title">&nbsp;</p> -->
        <table class="table table-striped table-condensed">
            <tbody>
                <?php
                    if(!empty($entertainments)){
                        foreach ($entertainments as $data) {
                ?>
                            <tr>
                                <td>
                                    <?php echo $this->Html->image('upload/'.$data['Post']['url'], array('height'=>83, 'width'=>125, 'url'=>array('controller'=>'Entertainments', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title']))))?>
                                </td>
                                <td align="justify">
                                    <p>
                                        <?php
                                            echo $this->Html->link($data['Post']['title'], array('controller'=>'Entertainments', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), array('class'=>'title'));
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
        <?php if ($this->Paginator->numbers()): ?>
            <div >
                <ul class="pagination">
                    <?php echo '<li>' . $this->Paginator->prev(__('<<'), array(), null, array('class' => 'prev disabled')) . '</li>'; ?>
                    <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
                    <?php echo '<li>' . $this->Paginator->next(__('>>'), array(), null, array('class' => 'next disabled')) . '</li>'; ?>
                </ul>
            </div>
        <?php endif;?>
    </div>
    <div class="col-md-4">
        <p class="head-title"><b>izzFeed News</b></p>
        <?php echo $this->element('column2_news', array('news'=>$news_col)); ?>
    </div>
    <div class="col-md-2">
        <p class="head-title"><b>Trending</b></p>
        <?php echo $this->element('column3'); ?>
    </div>
</div>

