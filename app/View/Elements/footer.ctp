<div clas="container" style="margin-right: 50px; margin-left: 50px">
    <div class="row">
        <div class="col-md-3">
            <p>
                <a href="#" rel="nofollow" title="Bootply on Twitter" target="ext">Twitter</a><br>
                <a href="#" rel="publisher">Google+</a><br>
                <a href="#" rel="nofollow" title="Bootply on Facebook" target="ext">Facebook</a><br>
                <!-- <a href="https://github.com/iatek/bootply" title="Bootply on GitHub" target="ext">GitHub</a><br> -->
            </p>
        </div>
        <div class="col-md-3">
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
        <div class="col-md-3">
            <p>
                <?php
                    echo $this->Html->link('Forexpam', 'http://forexpam.com');
                    echo '<br>';
                ?>
            </p>
        </div>
        <div class="col-md-3">
            <span class="pull-right">©Copyright 2014 <a href="#" title="izzFeed Entertainment"></a></span>
        </div>
    </div>
</div>
