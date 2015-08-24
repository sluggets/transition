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
        case 4:
            echo $pre, 'When trying to multitask, errors go up, and tasks
                        take longer. This is not the kind of concession
                        we should make when operating heavy machinery!', $after;
            break;
        case 5:
            echo $pre, '99 times out of 100, you may be just fine, but
                        being a defensive driver means you are trying to
                        prevent that 1 time out of 100 that may be a
                        serious accident. Additionally, assisted driver
                        systems shouldn\'t be relied on to perform primary
                        driver duties.', $after;
            break;
        case 6:
            echo $pre, 'Forethought may not be a chronically late
                        person\'s strong suit. But, taking time to consider the
                        potential safety threat of finishing grooming and/or
                        breakfast in the driver\'s seat should at least convince
                        a person running behind to stay late. Better to 
                        arrive late and safe.', $after;
            break;
        case 7:
            echo $pre, 
                       'Stay out of car packs, and stay to the right 
                        unless passing. Traveling the speed limit when
                        conditions allow will help as well. Slowing 
                        even just <strong>slightly</strong> by letting off of
                        the accelerator will get rid of a tailgater more
                        quickly.', $after; 
            break;
        case 8:
            echo $pre, 'Braking reaction time is not the only consideration.
                        Monitoring all of your mirrors, checking your space
                        cushion to the left and right, and 
                        <strong>especially</strong>
                        scanning ahead on the road is all negatively affected
                        by a limited following distance where focus is
                        devoted more exclusively to the vehicle in front.', $after;
            break;
        case 9:
            echo $pre, 'Adaptive Cruise Control does not know what the
                        road conditions are (yet), so always relying on it\'s 
                        shortest setting is bad defensive driving. 
                        Rigid formulas often don\'t specifically account
                        for weather and road conditions, but may be good
                        advice for a <strong>minimum</strong> 
                        following distance.', $after;
            break;
        case 10:
            echo $pre, 'Both are impaired driving! Drunk driving is a much
                        more clearly defined standard, and one could simply
                        decide to never drive under the influence of 
                        <strong>any</strong> amount of alcohol. Deciding when
                        "slightly tired" becomes "dangerously drowsy" is 
                        a more nuanced differentiation.', $after; 
            break; 
        case 11:
            echo $pre, 'Not only do we need to make calm, focused decisions in
                        traffic, antagonizing others (while possibly
                        imparting a base sense of satisfaction) will
                        increase the chances someone else makes bad
                        decisions based on emotion.', $after;
            break;
        case 12:
            echo $pre, 'Fully autonomous features may come in phases. They may
                        even initially only be available in certain zones
                        or types of roadways. In any case, until a completely
                        autonomous vehicle can gracefully handle most road
                        types, environments, and conditions, the human will
                        need to be on sober stand-by.', $after;
            break;
        case 13:
            echo $pre, 'Short following distances steal focus. The more 
                        following distance, the more relaxed we\'ll be.
                        The more relaxed we are, the more things around us
                        we will feel comfortable scanning. We should never
                        surrender the duties of one of our defensive driving
                        keys to an assisted driving feature.', $after; 
            break;
        case 14:
            echo $pre, 'Scan and look around as if you don\'t have that backing 
                        camera or in-dash monitor. Once you have done that,
                        then include a scan at the monitor. Additional
                        features are not necessarily a one-to-one replacement
                        of what you would have done before.', $after;
            break;
        case 15:
            echo $pre, 'First off the line might be first to get hit
                        by the sadly common red light runner. Look left
                        first, because that will be the direction you
                        would likely get hit from first, then right, 
                        then left again. Remember, scanning an intersection
                        is not just looking for vehicles, but also
                        bicycles and pedestrians who may be coming or
                        going from any angle or trajectory.', $after;
            break;                 
    } 

?>
