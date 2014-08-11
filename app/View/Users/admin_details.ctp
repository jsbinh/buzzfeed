<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> User details</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
    </div>
    <?php echo $this->Form->create('User', array());
            echo $this->Form->hidden('id');
    ?>
        <table class="table table-bordered ">
            <tbody>
                <tr>
                    <td width="15%">Email</td>
                    <td>
                        <?php echo $this->Form->input('email', array('class'=>'span6', 'div'=> false, 'label'=>false, 'type'=>'email', 'required'=>true)) ?>
                    </td>
                </tr>
                <tr>
                    <td>Fullname</td>
                    <td>
                        <?php echo $this->Form->input('fullname', array('class'=>'span6', 'div'=> false, 'label'=>false, 'required'=>true)) ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <?php echo $this->Form->input('password', array('class'=>'span6', 'div'=> false, 'label'=>false, 'required'=>true, 'type'=>'password')) ?>
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                    <td>
                        <?php echo $this->Form->input('confirmPassword', array('class'=>'span6', 'div'=> false, 'label'=>false, 'required'=>true, 'type'=>'password')) ?>
                    </td>
                </tr>
                <tr>
                    <td>Group</td>
                    <td>
                        <?php
                            $list_group = array(
                                0 => 'Member',
                                1 => 'Admin'
                            );
                            echo $this->Form->input('group', array('type'=>'select', 'class'=>'span6', 'div'=> false, 'label'=>false, 'required'=>true, 'options'=>$list_group));
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <?php
                            echo $this->Form->submit('Save', array('class'=>'btn btn-primary', 'div'=>false, 'label'=>false));
                            echo ' &nbsp;';
                            echo $this->Html->link('Back', array('controller'=>'Users', 'action'=>'index'), array('class'=>'btn', 'div'=>false, 'label'=>false))
                        ?>
                    </td>
               </tr>
            </tbody>
        </table>
    <?php echo $this->Form->end(); ?>
</div>
