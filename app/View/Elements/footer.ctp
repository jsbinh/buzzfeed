<div style="clear:both"></div>
<div class="row">
    <div class="col-md-4">
        <p>
            <a href="https://twitter.com/IzzFeed" rel="nofollow" title="Bootply on Twitter" target="ext">Twitter</a><br>
            <a href="https://plus.google.com/u/0/111318449808108256836/posts" rel="publisher" target="ext">Google+</a><br>
            <a href="http://www.facebook.com/izzfeed" rel="nofollow" title="Bootply on Facebook" target="ext">Facebook</a><br>
        </p>
    </div>
    <div class="col-md-4">
        <p>
            <?php
                echo $this->Html->link('Submit Content', array('controller'=>'Policys', 'action'=>'submitContent'));
                echo '<br>';
                echo $this->Html->link('Privacy Policy', array('controller'=>'Policys', 'action'=>'privacy'));
                echo '<br>';
                echo $this->Html->link('About IzzFeed', array('controller'=>'Policys', 'action'=>'about'));
                echo '<br>';
                echo $this->Html->link('DMCA Policy', array('controller'=>'Policys', 'action'=>'dmca'));
            ?>
        </p>
    </div>
    <div class="col-md-4">
        <span>©Copyright 2014 <a href="#" title="izzFeed Entertainment"></a></span>
    </div>
</div>

