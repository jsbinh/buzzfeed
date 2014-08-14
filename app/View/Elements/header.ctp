<!-- <div class="alert-banner" id="welcomeNote">
        <div class="close opens" onclick="hideWelcome();">Close X</div>
        <div class="title oswald">YOU'RE PROBABLY NOTICING THINGS LOOK <span class="red">DIFFERENT</span> AROUND HERE RIGHT NOW.</div>
    <div class="text opens">That's because we just launched the new and improved ViralNova.com, loaded with more writers, more stories, and better features than
                      ever. It was time to step it up and take things to the next level. Thanks for being a part of it. YOU ROCK.</div>
    <div class="tag oswald"><a href="/sign-up/" class="red">SIGN UP</a> TO HAVE OUR BEST ARTICLES DELIVERED DAILY TO YOUR INBOX FOR FREE.</div>
</div> -->

<div class="clearfix"></div>

<div class="row-fluid sortable">
    <div class="col-md-3 logo">
        <?php echo $this->Html->image('logo.png'); ?>
    </div>
    <div class="col-md-5">
        <?php echo $this->Form->create('Post', array('controller'=>'Posts', 'action'=>'search'), array('class'=>'navbar-form navbar-left', 'role'=>'form')); ?>
            <div class="form-group">
                <?php echo $this->Form->input('search', array('type'=>'text', 'placeholder'=>'What are you looking for?', 'class'=>'search form-control', 'div'=>false, 'label'=>false, 'style'=>'display:block-inline', 'required'=>true)); ?>
            </div>

            <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-4">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_sharing_toolbox pull-left" style="padding-top:40px; padding-left:20px"></div>
    </div>
</div>
<div class="clearfix"></div>
<nav class="navbar navbar-default" role="navigation" style="margin-bottom: 5px; margin-left:15px; margin-right:15px !important; background-color:#FFFFFF">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse"  style="padding-left:0px; padding-right:0px; background-color:#F04723">
        <ul class="nav navbar-nav">
            <li class="menu">
                <?php echo $this->Html->link('<span> <i class="glyphicon glyphicon-th-list"></i> HOME</span>', array('controller'=>'Homes', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span> <i class="glyphicon glyphicon-globe"></i> NEWS</span>', array('controller'=>'News', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span><i class="glyphicon glyphicon-cloud"></i> ENTERTAINMENT</span>', array('controller'=>'Entertainments', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span><i class="glyphicon glyphicon-heart-empty"> </i> LIFE</span>', array('controller'=>'Lifes', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span><i class="glyphicon glyphicon-sound-dolby"></i> VIDEOS</span>', array('controller'=>'Videos', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span><i class="glyphicon glyphicon-star-empty"></i> CULTURE</span>', array('controller'=>'Cultures', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<span><i class="glyphicon glyphicon-gift"></i> SCIENCE</span>', array('controller'=>'Sciences', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu" align="center">
                <?php if(!$this->Session->read('user')){ ?>
                    <a href="#" data-toggle="modal" data-target="#login"><span><i class="glyphicon glyphicon-user"></i> LOGIN</span></a>
                <?php }else{ ?>
                    <div class="dropdown" style="margin-top: 10px; height: 40px;width: 86px; cursor: pointer;">

                        <span data-toggle="dropdown" class="dropdown-toggle dropdown-list"><i class="glyphicon glyphicon-user"></i> INFO</span>
                        <span class="caret"></span>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Profile', array('controller'=>'Users', 'action'=>'profile'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-fire"></span> Post', array('controller'=>'Posts', 'action'=>'add'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span> Change password', array('controller'=>'Users', 'action'=>'changepass'), array('escape'=>false)) ?>
                            </li>
                            <hr>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span> Logout', array('controller'=>'Users', 'action'=>'logout'), array('escape'=>false)) ?>
                            </li>
                        </ul>
                    <!-- </div> -->
                <?php } ?>
            </li>
        </ul>

    </div>
    <!-- /.navbar-collapse -->
</nav>
    <?php echo $this->element('login'); ?>
    <!-- twitter -->
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
  </script>

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53bbb04550725748"></script>

<script type="text/javascript">
    function hideWelcome(){
        $('#welcomeNote').hide();
    }
</script>