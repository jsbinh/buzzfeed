<div align="center" style="display:block-inline">
    <iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=oriodeal0f-20&o=1&p=12&l=ur1&category=carelectronics&banner=18J4178WT5KAKCCXEGR2&f=ifr&linkID=DDLIWEOFRCJWWDUN" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe>
<div>
<br>
<!-- <div class="column2"> -->
    <?php
        $i = 0;
        if(!empty($news)){
            foreach ($news as $data) {
                $i++;
                $this->Image->resize($data['Post']['url'], 340, 252);
    ?>
                <div>
                    <?php
                        echo $this->Html->image('upload/340x252_'.$data['Post']['url'], array('class'=>'img-responsive', 'url'=>array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])), 'width'=>'100%'));
                        echo '<div class="title-img">';
                            echo '<p style="padding-right: 15px;">';
                                echo $this->Html->link($data['Post']['title'], array('controller'=>'News', 'action'=>'view', $data['Post']['id'], $this->Post->convertToEn($data['Post']['title'])));
                            echo '</p>';
                        echo '</div>';
                        // echo '<br><br><br>';
                    ?>
                </div>
                <?php
                    if ($i == 4){
                        // echo $this->element('column_ads');
                    }
                ?>

    <?php }} ?>
    <div align="center">
        <?php
            $ads = $this->Session->read('ads');
            echo $ads['336x280'];
        ?>

        <br/>&nbsp;
    </div>
    <h4><b>Hey! Join Us On Facebook</b></h4>
    <div>
        <div class="fb-like-box" data-href="https://www.facebook.com/izzfeed" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>
    </div>
    <br/>&nbsp;
<!-- /div> -->


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=290319794422864&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
