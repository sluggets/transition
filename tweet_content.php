<?php
    function tweet($see)
    {
        $pre = '<div class="correct"><i class="fa fa-check fa-2x"></i><span>Correct! ';    
        $middle = '</span><a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tiny.cc/t2as3x" data-text="';
        $after = '" data-via="timlongoria" data-size="large">Tweet</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+\'://platform.twitter.com/widgets.js\';fjs.parentNode.insertBefore(js,fjs);}}(document, \'script\', \'twitter-wjs\');</script></div>';
   
        $special_see = htmlspecialchars($see);
        echo $pre , $see, $middle, $special_see, $after;
    }


    switch ($num)
    {
        case 1:
            tweet('I can make eye contact with a human, but how does an autonomous vehicle make eye contact with me?'); 
            break;

        case 2: 
            tweet('I know that Blind Spot Assist does not eliminate the need for turn signals!');
            break;
        case 3:
            tweet('Human eyes are the majority of car sensors in the world,so I take responsibility to be seen by them.');
            break;
        case 4:
            tweet('Enabling people to multitask behind the wheel is a bad idea. There is only one task: driving.');
            break;
        case 5:
            tweet('I don\'t drive for the 99 times out of 100 things go well, I drive for that 1 time things go bad.');
            break;
        case 6:
            tweet('When I\'m running late, I stay late.');
            break;
        case 7:
            tweet('The driver behind me may not have Adaptive Cruise Control,but I can still fix that space cushion!');
            break;
        case 8:
            tweet('I understand the limited technical skills of a meat-piloted vehicle,and act accordingly.'); 
            break;
        case 9:
            tweet('I count how many seconds I\'m behind the car in front of me,I know what 3 or more seconds looks like.');  
            break;
        case 10:
            tweet('I know that NO impairment is safe behind the wheel!');
            break; 
        case 11:
            tweet('I don\'t allow emotion to put me into an altered state behind the wheel!');
            break;
        case 12:
            tweet('I know that even when autonomous vehicles begin appearing,I\'ll need to be the sober human failsafe.');
            break;
        case 13:
            tweet('I will be too afraid to scan my mirrors if my following distance is too short!');
            break;
        case 14:
            tweet('I know that new safety features don\'t replace old safety habits, they add to them.');
            break;
        case 15:
            tweet('If I\'m too fast or too furious at the green light,I may be hit by the sadly common red light runner.');
            break;                 
    } 
?>
