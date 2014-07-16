<div class="container">
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
                                        echo $this->Html->image('author/'.$user['User']['image'], array('width'=>35, 'height'=>35));
                                    }
                                ?>
                            </div>

                            <div class="user-info-info pull-right">
                                <a data-print="author" rel:gt_act="user/username" rel:gt_label="editor/mbvd" class="user-name notranslate" href="#" rel="author">Michelle Broder Van Dyke</a>
                                <span class="author_title">BuzzFeed Staff</span>
                            </div>
                        </div>

                    <!-- <div class="social-links">
                        <div class="fb-subscribe_btn">
                            <fb:subscribe href="http://facebook.com/michelle.b.dyke" layout="button_count" show_faces="false" width="125" height="20" class=" fb_iframe_widget" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=45075597673&amp;height=20&amp;href=http%3A%2F%2Ffacebook.com%2Fmichelle.b.dyke&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=125"><span style="vertical-align: bottom; width: 93px; height: 20px;"><iframe name="f20aa56bc4" width="125px" height="20px" frameborder="0" allowtransparency="true" scrolling="no" title="fb:subscribe Facebook Social Plugin" src="http://www.facebook.com/plugins/subscribe.php?app_id=45075597673&amp;channel=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter%2FDhmkJ2TR0QN.js%3Fversion%3D41%23cb%3Df1fc8513dc%26domain%3Dwww.buzzfeed.com%26origin%3Dhttp%253A%252F%252Fwww.buzzfeed.com%252Ff1fe9a4b8%26relation%3Dparent.parent&amp;height=20&amp;href=http%3A%2F%2Ffacebook.com%2Fmichelle.b.dyke&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;show_faces=false&amp;width=125" style="border: none; visibility: visible; width: 93px; height: 20px;" class=""></iframe></span></fb:subscribe>
                        </div>
                        <div class="twitter-follow_btn">
                            <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" src="http://platform.twitter.com/widgets/follow_button.1404409145.html#_=1404804909211&amp;id=twitter-widget-0&amp;lang=en&amp;screen_name=michellebvd&amp;show_count=false&amp;show_screen_name=false&amp;size=m" class="twitter-follow-button twitter-follow-button" title="Twitter Follow Button" data-twttr-rendered="true" style="width: 60px; height: 20px;"></iframe>
                        </div>
                    </div> -->
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
        </div>
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