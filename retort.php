<?php
    $pre = '<div class="incorrect">
            <p><i class="fa fa-exclamation-triangle fa-3x"></i></p>
            <p>Incorrect</p><p>';

    $after = '</p></div>';

    switch ($num) 
    {
        case 1:
            echo $pre , 'Never <bold>assume</bold> that 
                         anybody in traffic sees you. If you observe any 
                         behavior that makes you unsure, operate under the 
                         assumption that you are invisible to them. Someone
                         could be whispering "cerulean blue" into their ear!'
                   , $after;
            break;

        case 2: 
            echo $pre, 'Worrying that someone will attempt to prevent
                        your lane change is not a valid excuse to either
                        use your signal late or not at all. Sure there
                        are jerks out there, but there are more people
                        that will appreciate your clear communication!',
                 $after;
            break;
        case 3:
            echo $pre, '<strong>Telling</strong> others that they need to
                       start seeing you is ineffective. Doing everything
                       you can to <strong>be</strong> seen is more likely to
                       save your life when on a motorcyle, moped, bicycle,
                       or other low-profile vehicle.', $after;
            break;
    } 

?>
