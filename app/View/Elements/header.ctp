<div class="container">
    <div class="col-md-3">
        <h1 class="logo">
            <?php echo $this->Html->link('<b>izzFeed</b>', array('controller'=>'Homes', 'action'=>'index'), array('escape'=>false, 'style'=>'text-decoration: none')) ?>
        </h1>
    </div>
    <div class="col-md-8">
        <table class="table" style="margin-bottom: 0px">
            <tr>
                <td class="pull-right" style="padding: 1px;">
                    <a href="https://magneticexchange.com/?p=80316" title="Magnetic Exchange - Instant exchange Perfect Money, Solid Trust Pay, EgoPay, Payza, Yandex Money, Payweb, RedPass, and Paxum"><img src="http://ad.magneticexchange.com/en_728_90.gif" alt="Magnetic Exchange - Instant exchange Perfect Money, Solid Trust Pay, EgoPay, Payza, Yandex Money, Payweb, RedPass, and Paxum" /></a>
                </td>
            </tr>
        </table>
    </div>
</div>
<nav class="navbar navbar-default nav-pills" role="navigation" style="margin-bottom: 5px;">
        <div class="container">
            <!-- <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div> -->

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
                        <a href="#"><b>LIFE</b></a>
                    </li>
                    <li class="menu">
                        <a href="#"><b>VIDEOS</b></a>
                    </li>
                    <li class="menu">
                        <a href="#"><b>FOREX INFO</b></a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
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
        </div>
        <!-- /.container -->
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