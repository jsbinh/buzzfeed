<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel"><b>LOGIN</b></h4>
                <?php echo $this->Session->flash(); ?>
            </div>
            <div class="modal-body">
                <?php echo $this->Form->create('User', array('controller'=>'Users', 'action'=>'login'),array('class' => 'form-horizontal')); ?>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('username', array('type'=>'email', 'class'=>'form-control', 'id'=>'inputEmail3', 'placeholder'=>'Email', 'required'=>true, 'div'=>false, 'label'=>false)) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-10">
                            <?php echo $this->Form->input('password', array('type'=>'password', 'class'=>'form-control', 'id'=>'inputPassword3', 'placeholder'=>'Password', 'required'=>true, 'div'=>false, 'label'=>false)) ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <?php echo $this->Html->link('Register now!', array('controller'=>'Users', 'action'=>'register')) ?>
                        </div>
                    </div>
                        &nbsp;
                    <div>
                    </div>

                    <div class="form-group modal-footer">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                <?php echo $this->Form->end(); ?>
            </div>
        </div>
    </div>
</div>