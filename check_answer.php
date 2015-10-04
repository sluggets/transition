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
            
            }
            elseif ($num >= $min && $num <= $max)
            {
                include 'retort.php';
            }
        }

   } 
?>
