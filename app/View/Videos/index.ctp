<?php
    App::uses('ImageResizer', 'Utility');
    $tool = new ImageResizer();
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();

?>
    <div class="row-fluid">
        <div class="col-xs-8">
            <!-- <p class="head-title">&nbsp;</p> -->
            <table class="table table-striped table-condensed">
                <tbody>
                    <?php
                        if(!empty($videos_newsest)){
                    ?>
                            <tr>
                                <td>
                                    <p>
                                        <?php
                                            echo $videos_newsest['Post']['content'];
                                            echo $this->Html->link($videos_newsest['Post']['title'], array('controller'=>'Videos', 'action'=>'view', $videos_newsest['Post']['id'], $this->Post->convertToEn($videos_newsest['Post']['title'])), array('class'=>'title'));
                                            echo '<br>';
                                        ?>
                                    </p>
                                    <?php
                                        $user_info = $this->User->getUsername($videos_newsest['Post']['user_id']);
                                    ?>
                                    <?php echo $this->Html->image('user16.png'); ?> <span class="small-meta"><?php echo $user_info['User']['fullname'] ?></span> &nbsp;
                                    <?php echo $this->Html->image('time8.png'); ?> <span class="small-meta">15 minutes ago</span> &nbsp;
                                    <?php echo $this->Html->image('comment9.png'); ?> <span class="small-meta">4 responses</span>

                                    <div class="addthis_sharing_toolbox space_share"></div>
                                </td>
                            </tr>
                        <?php } ?>
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
        <!-- <div style="clear: both"></div> -->
        <div class="col-xs-4">
            <p class="head-title"></p>
            <?php echo $this->element('column2_news', array('news' => $news_col)); ?>
        </div>
    </div>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53bbb04550725748"></script>




