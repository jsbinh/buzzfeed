<div class="col-md-3">
    <h1 class="logo">
        <?php echo $this->Html->link('<b>izzFeed</b>', array('controller'=>'Homes', 'action'=>'index'), array('escape'=>false, 'style'=>'text-decoration: none')) ?>
    </h1>
</div>
<div class="col-md-8">
    <table class="table" style="margin-bottom: 0px">
        <tr>
            <td class="pull-right" style="padding: 1px;">
                <iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=oriodeal0f-20&o=1&p=48&l=ur1&category=homeaudiohometheater&banner=1VPMRG9JVY8X1M8V2E82&f=ifr&linkID=US7U6FHVWESO4DZM" width="728" height="90" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
            </td>
        </tr>
    </table>
</div>
<div style="clear:both"></div>
<nav class="navbar navbar-default nav-pills" role="navigation" style="margin-bottom: 5px;">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li class="menu">
                <?php echo $this->Html->link('<b>NEWS</b>', array('controller'=>'News', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<b>ENTERTAINMENT</b>', array('controller'=>'Entertainments', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<b>LIFE</b>', array('controller'=>'Lifes', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <?php echo $this->Html->link('<b>VIDEOS</b>', array('controller'=>'Videos', 'action'=>'index'),array('escape'=>false,)) ?>
            </li>
            <li class="menu">
                <a href="#"><b>FOREX INFO</b></a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right" style="padding-right: 10px">
            <li style="margin-top: 14px">
                <div class="fb-share-button" data-href="https://forexpam.com" data-type="button_count"></div>
            </li>

            <li style="margin-top: 14px">
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://forexpam.com" data-text="forexpam" data-via="buzzfeed" data-related="trocvuong">Tweet</a>
            </li>
            <li>
                <?php if(!$this->Session->read('user')){ ?>
                    <a href="#" data-toggle="modal" data-target="#login"> <?php echo $this->Html->image('user20.png') ?> </a>
                <?php }else{ ?>
                    <div class="btn-group" style="margin-top: 10px;">
                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        <a href="#"> <?php echo $this->Html->image('user20.png') ?> </a>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-edit"></span> Profile', array('controller'=>'Users', 'action'=>'profile'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-fire"></span> Post', array('controller'=>'Posts', 'action'=>'index'), array('escape'=>false)) ?>
                            </li>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span> Change password', array('controller'=>'Users', 'action'=>'changepass'), array('escape'=>false)) ?>
                            </li>
                            <hr>
                            <li>
                                <?php echo $this->Html->link('<span class="glyphicon glyphicon-log-out"></span> Logout', array('controller'=>'Users', 'action'=>'logout'), array('escape'=>false)) ?>
                            </li>
                        </ul>
                    </div>
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

    <div id="fb-root"></div>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
