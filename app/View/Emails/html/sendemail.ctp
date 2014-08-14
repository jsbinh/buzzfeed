<p>
    You are receiving this email because you subscribed at IzzFeed.com. If you no longer wish to receive our daily emails with the latest stories.
</p>
<p align="center">
    <img src="http://izzfeed.com/img/logo.png" title="logo">
</p>
<p>
    Today, we're sharing with you some truly amazing stories. First, find out what makes this boy so different - and why doctors were shocked when he was born.
</p>
<p>
    Then, see what these amazing parents did for their kid. It's just too awesome! We hope you have a great day. Thank you for subscribing!
</p>
<p>
    <h2 style="color:#818381">Here are the latest stories everyone's talking about...</h2>
</p>
<p>
    ----------------------------------------------------------------------------------------
</p>

<?php
    if(!empty($data)){
        foreach ($data as $val) {
            echo "<p>";
                echo '<a href="http://izzfeed.com/News/view/'.$val['Post']['id'].'/'.$val['Post']['title'].'" style="font-size:20px;">'.$val['Post']['title'].'</a>';
                echo "<p></p>";
                echo '<img width=582 height=200  src="http://izzfeed.com/img/upload/'.$val['Post']['url'].'">';
                echo "<p></p>";
                echo "--------------------------------------------------------------------";
                echo "<p></p>";
            echo '</p>';
        }
    }
?>

<p>
    If you want more, be sure to join us on Facebook by going here: <a href="https://www.facebook.com/izzfeed">IzzFeed on Facebook </a>
</p>
<p>
    Thank you and enjoy your day,
</p>
<p>
    IzzFeed Staff
</p>
