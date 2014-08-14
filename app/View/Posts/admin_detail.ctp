<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> Percents</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    <?php echo $this->Form->create('Post', array('type'=>'file')) ?>
        <?php
            echo $this->Form->hidden('id');
        ?>
	    <table class="table table-striped table-bordered bootstrap-datatable datatable">
	        <tbody>
                <tr>
                    <td width="15%">Category</td>
                    <td>
                        <?php echo $this->Form->input('category_id', array('class'=>'span4', 'div'=> false, 'label'=>false, 'type'=>'select', 'options'=>$category)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="15%">Title</td>
                    <td>
                        <?php echo $this->Form->textarea('title', array('class'=>'span9', 'div'=> false, 'label'=>false, 'type'=>'area', 'style'=>'width:500; height:400', 'required'=>true)) ?>
                    </td>
               </tr>
               <tr>
                    <td width="15%">Summary</td>
                    <td>
                        <?php echo $this->Form->textarea('summary', array('class'=>'span9', 'div'=> false, 'label'=>false, 'style'=>'width:300; height:500')) ?>
                    </td>
               </tr>
                <tr>
                    <td width="15%">Content</td>
                    <td>
                        <?php echo $this->Form->textarea('content', array('class'=>'span9 ckeditor', 'div'=> false, 'label'=>false, 'style'=>'height: 500px; width: 643px;')) ?>
                    </td>
                </tr>
                <tr>
                    <td width="15%">Upload image</td>
                    <td>
                        <?php echo $this->Form->file('url', array('class'=>'span9', 'div'=> false, 'label'=>false, 'required'=>false)) ?>
                    </td>
                </tr>
               <tr>
                    <td colspan="2">
                        <?php
                            echo $this->Form->submit('Save', array('class'=>'btn btn-primary', 'div'=>false, 'label'=>false));
                            echo ' &nbsp;';
                            echo $this->Html->link('Back', array('controller'=>'Posts', 'action'=>'index'), array('class'=>'btn', 'div'=>false, 'label'=>false))
                        ?>
                    </td>
               </tr>
	        </tbody>
	    </table>
    <?php echo $this->Form->end(); ?>
</div>
</div>
