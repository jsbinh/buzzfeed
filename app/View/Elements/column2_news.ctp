<table class="table">
    <tbody>
        <?php
            if(!empty($news)){
                foreach ($news as $data) {
        ?>
                    <tr>
                        <td>
                            <?php
                                echo $this->Html->image('upload/'.$data['Post']['url'], array('height'=>120, 'width'=>340, 'url'=>array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title']))));

                                echo $this->Html->link($data['Post']['title'], array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), array('class'=>'title-demo2'));
                            ?>
                                <br>
                            <?php echo $this->Html->image('user8.png'); ?> <span class="small-meta">Andrew Kaczynski</span> &nbsp;
                            <?php echo $this->Html->image('comment9.png'); ?> <span class="small-meta">4 responses</span>
                        </td>
                    </tr>
                <?php }} ?>
    </tbody>
</table>