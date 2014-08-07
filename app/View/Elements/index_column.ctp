<div class="row-fluid sortable">
    <div class="col-md-8" style="margin-bottom: 10px;">
        <div class="img-large">
            <?php
                if(!empty($newsest)){
                    $this->Image->resize($newsest['Post']['url'], 642, 240);
                    echo $this->Html->image('upload/642x240_'.$newsest['Post']['url'], array('url'=>array('controller'=>'News', 'action'=>'view', $newsest['Post']['id'], $this->Post->convertToEn($newsest['Post']['title'])), 'class'=>'img-responsive', 'width'=>'100%'));
            ?>

                <div class="title-img-large">
                        <?php echo $this->Html->link($newsest['Post']['title'], array('controller'=>'News', 'action'=>'view', $newsest['Post']['id'], $this->Post->convertToEn($newsest['Post']['title']))); ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <div class="col-md-4">
        <?php echo $this->element('signup'); ?>
    </div>
</div>

<!-- <SCRIPT charset="utf-8" type="text/javascript" src="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Foriodeal0f-20%2F8003%2F733a227a-91b7-4e6a-9bc2-752a2693a3c9&Operation=GetScriptTemplate"> </SCRIPT> <NOSCRIPT><A HREF="http://ws-na.amazon-adsystem.com/widgets/q?rt=tf_ssw&ServiceVersion=20070822&MarketPlace=US&ID=V20070822%2FUS%2Foriodeal0f-20%2F8003%2F733a227a-91b7-4e6a-9bc2-752a2693a3c9&Operation=NoScript">Amazon.com Widgets</A></NOSCRIPT> -->

