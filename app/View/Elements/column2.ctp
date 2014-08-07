<div class="column2">
    <?php
        $i = 0;
        if(!empty($news)){
            foreach ($news as $data) {
                $i++;
                $this->Image->resize($data['Post']['url'], 340, 252);
    ?>
                <div>
                    <?php
                        echo $this->Html->image('upload/340x252_'.$data['Post']['url'], array('class'=>'img-responsive', 'url'=>array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), 'width'=>'100%'));
                        echo '<div class="title-img">';
                            echo '<p style="padding-right: 15px;">';
                                echo $this->Html->link($data['Post']['title'], array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])));
                            echo '</p>';
                        echo '</div>';
                        // echo '<br><br><br>';
                    ?>
                </div>
                <?php
                    if ($i == 4){
                        echo $this->element('column_ads');
                    }
                ?>

    <?php }} ?>
    <div align="center">
        <a href="https://www.adcell.de/promotion/click/promoId/105218/slotId/65609" target="_blank" >
            <img src="https://www.adcell.de/promotion/image/promoId/105218/slotId/65609" width="230" height="200" border="0" alt="FLIP4NEW" class='img-responsive' />
        </a>
        <br/>&nbsp;
    </div>
</div>
