<?php
   function quiz_check($min, $max)
   {
        if (!isset($_POST['quizAnswer']))
        {
            echo '<div class="incorrect">
            <p><i class="fa fa-exclamation-triangle fa-3x"></i></p>
            <p>You did not select an answer!</p></div>';

        }
        else
        {
            $answer = $_POST['quizAnswer'];
            $val_array = str_getcsv($answer, '-');
            $num = (int)$val_array[1];
            if ($num >= $min && $num <= $max && $val_array[0] == 'right')
            {
                include 'tweet_content.php';
                /*echo  '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Correct! As of yet at least one human is a better overall driver than a robot!</span><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://robots.sluggets.com" data-text="no robot driver needed" data-via="timlongoria" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script>';*/


                        /*'<div class="correct"><i class="fa fa-check fa-2x"></i><span>Correct! As of yet at least one human is a better overall driver than a robot!</span><a class="twitter-share-button" href="https://twitter.com/intent/tweet?text=As%20of%20yet%20at%20least%20one%20human%20is%20a%20better%20overall%20driver%20than%20a%20robot%21">Tweet</a></div>';*/

            
            }
            elseif ($num >= $min && $num <= $max)
            {
                include 'retort.php';
            }
        }

   } 
?>
