<table class="table">
    <tr>
        <td align="center">
            <?php
                $ads = $this->Session->read('ads');
                echo $ads['300x250'];
            ?>
            <!-- <iframe src="http://rcm-na.amazon-adsystem.com/e/cm?t=oriodeal0f-20&o=1&p=12&l=ur1&category=carelectronics&banner=18J4178WT5KAKCCXEGR2&f=ifr&linkID=DDLIWEOFRCJWWDUN" width="300" height="250" scrolling="no" border="0" marginwidth="0" style="border:none;" frameborder="0"></iframe> -->
        </td>
        <td>
            <?php
                echo $ads['230x200'];
            ?>
            <!-- <a href="https://www.adcell.de/promotion/click/promoId/105218/slotId/65609" target="_blank" >
                <img src="https://www.adcell.de/promotion/image/promoId/105218/slotId/65609" width="230" height="200" border="0" alt="FLIP4NEW" class='img-responsive' />
            </a> -->
        </td>
    </tr>
</table>