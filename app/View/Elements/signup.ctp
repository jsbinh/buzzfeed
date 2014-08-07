<div class="signup-box">
    <h2>
        <div class="white">Get more stuff like this</div>
        <div class="yellow">In your inbox</div>
    </h2>
    <div class="content opens">
        Sign up for our daily email and get the stories everyone is talking about.
    </div>
    <div class="signup">
        <?php echo $this->Form->create('EmailSubscribing', array('class'=>'form-wrapper', 'url'=>array('controller'=>'Users', 'action'=>'addEmail'))); ?>
            <?php echo $this->Form->input('email', array('type'=>'email', 'required'=>true, 'div'=>false, 'label'=>false, 'placeholder'=>'Enter your email')) ?>
            <button type="submit" class="oswald">SIGN UP</button>
        <?php echo $this->Form->end(); ?>
    </div>
</div>