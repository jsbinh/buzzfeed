<?php
    App::uses('ImageResizer', 'Utility');
    $tool = new ImageResizer();
    App::import('Model', array('Post', 'User'));
    $this->Post = new Post();
    $this->User = new User();

?>
<div class="row">
    <div class="col-md-8">
        <?php if(!empty($news)){ ?>
            <p class="post-title"><b>
                <?php echo $news['Post']['title']; ?>
            </b></p>
            <p class="description">
                <b><?php echo $news['Post']['summary']; ?></b>
                <span class="buzz_datetime">posted on <?php echo date('M j, Y', strtotime($news['Post']['date'])) ?>, at <?php echo date('g:i a', strtotime($news['Post']['date'])) ?></span>
            </p>

            <div class="c user-bg">
                <div class="meta c">
                    <div class="user-info">
                        <div class="pull-left">
                            <?php
                                if(!empty($user)){
                                    echo $this->Html->image('user16.png');
                                    echo ' &nbsp;';
                                    $user_info = $this->User->getUsername($news['Post']['user_id']);
                                }
                            ?>
                        </div>

                        <div class="user-info-info pull-right">
                            <?php echo $user_info['User']['fullname']; ?>
                            <!-- <span class="author_title">BuzzFeed Staff</span> -->

                            <span class="ago">posted<time data-print="date" datetime="2014-07-08T04:44:48Z">about&nbsp;2&nbsp;hours&nbsp;ago</time></span>
                        </div>
                    </div>
                </div>
            </div>


        <div class="addthis_sharing_toolbox space_share"></div>


        <div class="content">
            <?php echo $news['Post']['content'] ?>
        </div>

        <div class="addthis_sharing_toolbox space_share"></div>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-53bbb04550725748"></script>

        <div class="fb-comments" data-href="http://forexpam.com" data-width="100%" data-numposts="5" data-colorscheme="light"></div>

        <?php } ?>

        <!-- For ads -->
        <?php echo $this->element('column_ads_view') ?>
    </div>
    <div class="col-md-4">
        <?php echo $this->element('column2_view', array('news'=>$news_col)) ?>
    </div>
</div>



<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=290319794422864&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>