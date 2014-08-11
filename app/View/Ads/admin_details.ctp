<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> User details</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    </div>
    <?php echo $this->Form->create('Ad', array());
            echo $this->Form->hidden('id');
    ?>
        <table class="table table-bordered">
            <tbody>
                <tr>
                    <td width="15%">Size</td>
                    <td>
                        <?php echo $this->Form->input('size', array('class'=>'span6', 'div'=> false, 'label'=>false, 'type'=>'text', 'required'=>true, 'readonly'=>true)) ?>
                    </td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>
                        <?php echo $this->Form->input('content', array('class'=>'span8', 'div'=> false, 'label'=>false, 'required'=>true, 'type'=>'area', 'rows'=> 10)) ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            echo $this->Form->submit('Save', array('class'=>'btn btn-primary', 'div'=>false, 'label'=>false));
                            echo ' &nbsp;';
                            echo $this->Html->link('Back', array('controller'=>'Ads', 'action'=>'index'), array('class'=>'btn', 'div'=>false, 'label'=>false))
                        ?>
                    </td>
               </tr>
            </tbody>
        </table>
    <?php echo $this->Form->end(); ?>
</div>
