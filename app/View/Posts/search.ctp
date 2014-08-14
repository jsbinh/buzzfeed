<?php
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();

?>
<div>
    <div class="col-md-8">
        <?php
        if(!empty($result)){
            $result = array_chunk($result, 2);
            foreach ($result as $row) {
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
            }
        }
    ?>
    </div>

    <div class="col-md-4">
        <?php echo $this->element('column2_view', array('news' => $news_col)); ?>
    </div>
</div>