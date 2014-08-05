<?php
    $metadata = array_chunk($metadata, 2);
    if(!empty($metadata)){
        foreach ($metadata as $row) {
            echo '<div class="row-fluid clearfix">';
                foreach ($row as $data) {
                    $this->Image->resize($data['Post']['url'], 340, 252);

                    echo '<div class="col-md-6">';
                        echo $this->Html->image('upload/340x252_'.$data['Post']['url'], array('class'=>'img-responsive', 'url'=>array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), 'width'=>'100%'));

                        echo '<div class="title-img">';
                            echo '<p style="padding-right: 15px;">';
                                echo $this->Html->link($data['Post']['title'], array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), array('class'=>'img_url'));
                            echo '</p>';
                        echo '</div>';
                    echo '</div>';
                }
            echo '</div>';
            // echo '<br>';
        }
    }
?>

<?php if ($this->Paginator->numbers()): ?>
    <div class="clearfix text-center">
        <ul class="pagination">
            <?php echo '<li>' . $this->Paginator->prev(__('<<'), array(), null, array('class' => 'prev disabled')) . '</li>'; ?>
            <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
            <?php echo '<li>' . $this->Paginator->next(__('>>'), array(), null, array('class' => 'next disabled')) . '</li>'; ?>
        </ul>
    </div>
<?php endif;?>