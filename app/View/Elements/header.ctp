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
        <?php echo $this->Html->image('logo.png', array('style' => 'width:100%; height:100%;')); ?>
    </div>
    <div class="col-md-5">
        <?php echo $this->Form->create('Post', array('controller'=>'Posts', 'action'=>'search'), array('class'=>'navbar-form navbar-left', 'role'=>'form')); ?>
            <div class="form-group">
                <?php echo $this->Form->input('search', array('type'=>'text', 'placeholder'=>'What are you looking for?', 'class'=>'search form-control', 'div'=>false, 'label'=>false, 'required'=>true)); ?>
            </div>

            <?php echo $this->Form->end(); ?>
    </div>
    <div class="col-md-4">
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <div class="addthis_sharing_toolbox pull-left social-custom"></div>
    </div>
</div>
<div class="clearfix"></div>
<div class="navbar navbar-default navbar-custom" role="navigation">
    <!-- <div class="container-fluid"> -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>

    <div class="collapse navbar-collapse collapse-custom">

        <ul class="nav navbar-nav custom-nav">
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-th-list"></i> HOME', array('controller'=>'Homes', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-globe"></i> NEWS', array('controller'=>'News', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-cloud"></i> ENTERTAINMENT', array('controller'=>'Entertainments', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-heart-empty"> </i> LIFE', array('controller'=>'Lifes', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-sound-dolby"></i> VIDEOS', array('controller'=>'Videos', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-star-empty"></i> CULTURE', array('controller'=>'Cultures', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php echo $this->Html->link('<i class="glyphicon glyphicon-gift"></i> SCIENCE', array('controller'=>'Sciences', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li>
                <?php if(!$this->Session->read('user')){ ?>
                    <a href="#" data-toggle="modal" data-target="#login"><i class="glyphicon glyphicon-user"></i> LOGIN</a>
                <?php }else{ ?>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">INFO <i class="caret"></i></a>
                        <ul class="dropdown-menu drop-menu-custom" role="menu">
                            <li>
                                <?php echo $this->Html->link('<i class="glyphicon glyphicon-edit"></i> Profile', array('controller'=>'Users', 'action'=>'profile'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="glyphicon glyphicon-fire"></i> Post', array('controller'=>'Posts', 'action'=>'add'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<i class="glyphicon glyphicon-log-out"></i> Change password', array('controller'=>'Users', 'action'=>'changepass'), array('escape'=>false)) ?>
                            </li>
<!--                             <li class="divider"></li> -->
                            <li>
                                <?php echo $this->Html->link('<i class="glyphicon glyphicon-log-out"></i> Logout', array('controller'=>'Users', 'action'=>'logout'), array('escape'=>false)) ?>
                            </li>
                        </ul>
                    <!-- </div> -->
                <?php } ?>
            </li>
        </ul>















<!--             <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="dropdown-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul> -->










            <!-- <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="./">Default</a></li>
              <li><a href="../navbar-static-top/">Static top</a></li>
              <li><a href="../navbar-fixed-top/">Fixed top</a></li>
            </ul> -->
          </div><!--/.nav-collapse -->
        <!-- </div>/.container-fluid  -->
      </div>









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